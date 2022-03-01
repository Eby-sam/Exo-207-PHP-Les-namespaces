<?php

namespace App\Repository;

use function App\Entity\printR;

class User {

    public function __construct() {
        printR("Hello");
    }

    public function save($user) {
        $this->user = $user;
    }
}