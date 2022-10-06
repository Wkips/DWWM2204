<?php

namespace Users\Controller;

class ProfileController
{

        public function index()
        {
            echo ProfileController::class;
            require '../View/home.php';
        }
}

// Users\Controller\Profilecontroller