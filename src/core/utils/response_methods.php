<?php

function json(array | object $data)
{
    header("Content-Type: application/json");
    echo json_encode($data);
}

function view(string $filename, array $data = [])
{
    header("Content-Type: text/html");

    if (!empty($data)) {
        foreach ($data as $key => $val) {
            $json_val = json_encode($val);

            if (is_array($val)) {
                eval("\${$key} = (array) json_decode(\$json_val);");
            } elseif (is_object($val)) {
                eval("\${$key} = json_decode(\$json_val);");
            } elseif (is_string($val)) {
                eval("\${$key} = '{$val}';");
            } else {
                eval("\${$key} = {$json_val};");
            }
        }
    }

    $path = __DIR__ . "/../../views/$filename";
    require file_exists("$path.view.php") ? "$path.view.php" : "$path.php";
}

function redirect(string $location)
{
    header("Location: $location");
}

function component(string $component, array $data = [])
{
    if (!empty($data)) {
        foreach ($data as $key => $val) {
            $json_val = json_encode($val);

            if (is_array($val)) {
                eval("\${$key} = json_decode(\$json_val, JSON_OBJECT_AS_ARRAY);");
            } elseif (is_object($val)) {
                eval("\${$key} = json_decode(\$json_val);");
            } elseif (is_string($val)) {
                eval("\${$key} = '{$val}';");
            } else {
                eval("\${$key} = {$json_val};");
            }
        }
    }

    $path = __DIR__ . "/../../views/components/$component";
    include_once file_exists("$path.com.php") ? "$path.com.php" : "$path.php";
}
