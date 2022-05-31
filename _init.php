<?php

use app\App;
use App\Database\DBConnection;
use App\Database\QueryBuilder;

require 'app/App.php';
require 'app/database/DBConnection.php';
require 'app/database/QueryBuilder.php';
require 'app/Core/Router.php';
require 'app/Core/Request.php';
require 'app/Controllers/TaskController.php';
require 'app/helper.php';

App::set('config',require 'config.php');

QueryBuilder::make(DBConnection::make(App::get('config')['database']));


?>