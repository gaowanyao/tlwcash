<?php
namespace Push\Controller;
use Think\Controller;


require_once __DIR__.'../../../Workerman/Autoloader.php';
use Workerman\Worker;

class IndexController extends Controller {
    public function index(){


//        dump(dirname(__FILE__));
//        dump(__DIR__.'../../../Workerman/Autoloader.php');

        $worker = new Worker('http://0.0.0.0:2346');


//        dump($worker);


        $worker->onMessage = function($connection, $data)
        {
            var_dump($_GET, $_POST);
            $connection->send("hello");
        };

// 运行worker
        Worker::runAll();


    }


}