<?php

class Controller
{
    static function getMethod(Controller $controller, ReflectionMethod $method, Request $request)
    {
        include_once __DIR__ . '/utils/response_methods.php';

        $valid = self::handleMiddlewares($method, $request);

        if ($valid) {

            spl_autoload_register(
                function ($service) {
                    $folder = str_replace('service', '', strtolower($service));
                    $servicePath = __DIR__ . "/../controllers/$folder/$service.php";

                    if (file_exists($servicePath)) {
                        require_once $servicePath;
                    }
                }
            );

            $response = call_user_func_array([
                $controller,
                $method->getName()
            ], [
                ("request" | "req" ? $request : null),
            ]);

            if (is_string($response)) {
                echo $response;
            } elseif (is_array($response) || is_object($response)) {
                json($response);
            }
        }

        exit();
    }

    public static function handleMiddlewares(ReflectionMethod | ReflectionClass $method, Request $request)
    {
        if (empty($method->getAttributes('Middleware'))) {
            return true;
        }

        $attribute = $method->getAttributes('Middleware')[0];

        $middlewares = $attribute->newInstance()->middlewares;

        return self::callMiddleware($middlewares, $request, 0);
    }

    public static function callMiddleware(array $middlewares, Request $request, int $index)
    {
        if ($index >= sizeof($middlewares)) {
            return true;
        }

        return $middlewares[$index]::runnable(
            $request,
            fn() => self::callMiddleware(
                $middlewares,
                $request,
                $index + 1
            )
        );
    }

    static function HandleError(Controller $controller, Request $request)
    {
        $method = new ReflectionMethod("_404::error");

        self::getMethod($controller, $method, $request);
    }
}
