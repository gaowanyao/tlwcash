<?php
namespace Push\Controller;

header('Access-Control-Allow-Origin:http://wechat.tiny-calf.com');
use Think\Controller;
use Workerman\Worker;
require_once __DIR__.'../../../Workerman/Autoloader.php';




class WorkermanController extends Controller {
    public function index(){

        $worker = new Worker('websocket://0.0.0.0:2346');
        $worker->onMessage = function($connection, $data)
        {
//            var_dump($_GET, $_POST);
            $connection->send("hello world");
        };

// 运行worker
        $res = Worker::runAll();


    }
}