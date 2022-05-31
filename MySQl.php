<?php

use App\Core\Router;
use App\Core\Request;
use App\Controllers\TaskController;

require '_init.php';



//echo $uri;
//exit;


Router::make()
->get('',[TaskController::class, 'index'])
->post('task/create',[TaskController::class,'create'])
->get('task/delete',[TaskController::class, 'delete'])
->get('task/update',[TaskController::class, 'update'])
->resolve(Request::uri(),Request::method() );

//switch ( $uri ) {
//  case '':
//  require 'app/Controllers/index.php';
//   break;
//   case 'about':
//  require 'app/Controllers/about.php';
//   break;
// default:
//  throw new Exception( 'page not found!' );

//}

//echo $uri;

//echo '<pre>';
//print_r( $_SERVER );
//echo '</pre>';

//QueryBuilder::insert( 'tasks', [
//  'description' => 'tasks 7',
//  'completed' => 0
// ] );

//QueryBuilder::update( 'tasks', 11, [
//  'description' => 'Update Tasks',
//    'completed' => 1
// ] );

//QueryBuilder::delete( 'tasks', 0, 'id', '>' );

//$tasks = QueryBuilder::get( 'tasks' );
//require 'resources/index.view.php';

//echo '<pre>';
//var_dump( $tasks );
//echo '</pre>';

//Another way 🙂

//try {
//  $pdo = mysqli_connect( 'localhost', 'root', '', 'php_basics1' );
//} catch( PDOException $e ) {
//die( 'Could not connect to database' );
//}

?>

