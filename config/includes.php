<?php

// Config
require_once 'config/connection.php';
//tous les  Models 
require_once 'models/ProduitsModel.php';
require_once 'models/CategorieModel.php';
require_once 'models/FamilleModel.php';
require_once 'models/MarqueModel.php';
require_once 'models/MenuModel.php';

// MVC for user registration
//require_once 'controllers/RegisterController.php';
//require_once 'models/RegisterModel.php';
//require_once 'views/RegisterView.php';
// MVC for user login
//require_once 'controllers/LoginController.php';
//require_once 'models/LoginModel.php';
//require_once 'views/LoginView.php';
// MVC for users
//require_once 'controllers/UsersController.php';
//require_once 'models/UsersModel.php';
//require_once 'views/UsersView.php';
// Collection of Views and Controllers for the combined ArticlesUsers [AU]
//require_once 'controllers/AUController.php';
//require_once 'views/AUView.php';
// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
?>