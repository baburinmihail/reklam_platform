<?php
use Workerman\Worker;

//require_once __DIR__ . '/vendor/autoload.php';
//require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../../../../../vendor/autoload.php';
//$config =  require_once __DIR__ ."config".DIRECTORY_SEPARATOR."db.php";

$wsWorker =new Worker('websocket://0.0.0.0:2346');
$wsWorker->count = 4;

$wsWorker->onConnect = function($connection){
    echo "New connection \n";
};

$wsWorker->onMessage = function($connection, $data) use ($wsWorker){
    foreach($wsWorker->connections as $clientConnection){
            $clientConnection->send($data);
    }
};

$wsWorker->onClose = function($connection){
    echo "Connection closed \n";
};

Worker::runALL();

?>