<?php

function allFieldsAreEmpty($data) {
    if (sizeof($data) == 0) {
        return false;
    }
    foreach ($data as $key => $value) {
        if (strlen($value) > 0) {
            return false;
        }
    }
    return true;
}


class Validator {
    private static $rules;
    private static $messages;
    private static $instance;
    private static $errors = [];

    private function __construct($rules, $messages)
    {
        self::$rules = $rules;
        self::$messages = $messages;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self(self::$rules, self::$messages);
        }
        return self::$instance;
    }

    public static function getRules()
    {
        return self::$rules;
    }

    public static function getMessages()
    {
        return self::$messages;
    }

    public static function hasErrors()
    {
        return sizeof(self::$errors) > 0;
    }

    public static function getErrors()
    {
        return self::$errors;
    }

    public static function addParams($rules, $messages)
    {
        foreach ($rules as $key => $value) {
            self::$rules[$key] = $value;
        }
        foreach ($messages as $key => $value) {
            self::$messages[$key] = $value;
        }
    }

    public static function validate($data)
    {
        if (allFieldsAreEmpty($data)) {
            self::$errors['empty'] = self::$messages['empty'];
            return false;
        }
        foreach (self::$rules as $key => $value) {
            if ($data[$key] != $value) {
                self::$errors[$key] = self::$messages[$key];
            }
        }
        return sizeof(self::$errors) == 0;
    }
}
