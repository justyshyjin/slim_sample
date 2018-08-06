<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Src\Classes\Employee;

require '../../vendor/autoload.php';
//require 'config.php';

$app = new \Slim\App();

$container = $app->getContainer();
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler('../logs/app.log');
    $logger->pushHandler($file_handler);
    return $logger;
};

// $container['db'] = function ($c) {
//     $db = $c['settings']['db'];
//     try{
//      $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
//       $db['user'], $db['pass']);
//     }catch(PDOException $e){
//         //throw $e;
//         echo $e->getMessage();
//     }
//      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//      return $pdo;
// };


$app->any('/employees/[{id}]', function (Request $request, Response $response, $args) {

    $this->logger->addInfo("Method for getting all or particular record called");
    // $employee = new Employee($this->db);

    // $id = '';
    // if(!is_null($args)){
    //    $id = $args['id'];
    // }

    // $listemp = $employee->getEmployees($id);
    //$response->getBody()->write(var_export($listemp, true));
    die($args['id']);
    //return $response;
});

$app->run();
