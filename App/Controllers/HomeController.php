<?php

namespace App\Controllers;

use Framework\Database;

class HomeController
{
    protected $database;
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->database = new Database($config);
    }

    /*
   * Show the latest listings
   * 
   * @return void
   */
    public function index()
    {



        loadView('home');
    }
}