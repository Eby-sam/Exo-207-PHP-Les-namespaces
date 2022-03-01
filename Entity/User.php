<?php

namespace App\Entity;

class User {

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
        printR("Test");
    }
}

/**
 * @param $data
 */
function printR($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}