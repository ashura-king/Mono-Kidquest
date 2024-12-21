<?php

class Validator
{
    private array $filterSchema;
    private array $errors;
    private array $data;

    public function __construct(array $filterSchema, array $data)
    {
        $this->data = $data;
        $this->filterSchema = $filterSchema;
        $this->errors = [];

        $this->validate();
    }

    private function validate()
    {
        $data = $this->data;
        $schema = $this->filterSchema;

        foreach ($schema as $var => $filters) {
            $this->errors[$var] = [];
            foreach ($filters as $option => $filter) {
                switch ($option) {
                    case 'type':
                        if (!$this->isValidType($filter, $data[$var])) {
                            array_push(
                                $this->errors[$var],
                                $option['message'] ?? $var . ' should be of type ' . $filter . '.'
                            );
                        }
                        break;
                    case 'length':
                        $lowerThanMIn = is_string($data[$var]) ? strlen($data[$var]) < $filter['min'] : $data[$var] < $filter['min'];

                        $higherThanMax = is_string($data[$var]) ? strlen($data[$var]) > $filter['max'] : $data[$var] > $filter['max'];

                        if ($lowerThanMIn || $higherThanMax) {
                            array_push(
                                $this->errors[$var],
                                $option['message'] ?? $var . ' must be at least ' . $filter['min'] . ' and ' . $filter['max'] . ' maximum.'
                            );
                        }
                        break;
                    case 'required':
                        if (empty(trim($data[$var]))) {
                            array_push(
                                $this->errors[$var],
                                $option['message'] ?? $var . ' should not be empty.'
                            );
                        }
                        break;
                }
            }
        }
    }

    private function isValidType(string $type, mixed $data)
    {
        switch ($type) {
            case 'string':
                return is_string($data);
            case 'int':
                return is_int($data);
            case 'float':
                return is_float($data);
            case 'array':
                return is_array($data);
            case 'object':
                return is_object($data);
            case 'email':
                return filter_var($data, FILTER_VALIDATE_EMAIL);
            case 'boolean':
                return is_bool($data);
            case 'date':
                $pattern1 = '/^\d{4}-\d{2}-\d{2}$/';
                $pattern2 = '/^\d{2}\/\d{2}\/\d{4}$/';
                return preg_match($pattern1, $data) || preg_match($pattern2, $data);
            default:
                return false;
        }
    }

    public function getErrors()
    {
        return array_filter(
            $this->errors,
            fn($field) => sizeof($field) > 0
        );
    }

    public function isValid()
    {
        return empty($this->getErrors());
    }
}
