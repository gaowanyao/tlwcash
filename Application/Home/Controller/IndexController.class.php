<?php
namespace Home\Controller;
use Think\Controller;
use Think\Vender;
use Think\Page;
ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
require_once "./Public/lib/WxPay.Api.php";
require_once "./Public/lib/WxPay.JsApiPay.php";
require_once './Public/lib/log.php';
require_once "./Public/lib/test.php";
require_once "./Public/lib/WxPay.NativePay.php";
header("Content-type: text/html; charset=utf-8");
//初始化日志
$logHandler= new \CLogFileHandler("./Public/logs/".date('Y-m-d').'.log');
$log = \Log::Init($logHandler, 15);


class IndexController extends Controller
{

    public function account_update_pwd(){

        if (isset($_SESSION["account"])) {

            $m = M("User");
            $data['password'] = md5($_POST['new_pwd']);
            $old_pwd = md5($_POST['old_pwd']);

            $uid = $_SESSION['account']['uid'];
            $sel = $m->where("uid=$uid")->find();


            if($old_pwd != $sel['password']){
                $this->error("旧密码不对，请重新修改！");
            }else{
                if($data['password'] == $sel['password']){
                    $this->error("旧密码与新密码相同，请重新修改！");
                }else{
                    $data['uid'] = $_SESSION['account']['uid'];

                    $res = $m->data($data)->save();


                    if($res){

                        $_SESSION['account'] = NULL;

                        $this->success("新密码修改成功,请重新登录！","");
                    }else{
                        $this->error("新密码修改失败!");
                    }
                }
            }






        } else {
            $this->error("请先登录！",'index.php?&a=signin');
        }
    }

    public function account_head_msg(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/uploads/'; // 设置附件上传根目录
        $upload->savePath = 'head/'; // 设置附件上传（子）目录
// 上传单个文件
        $info = $upload->uploadOne($_FILES['head']);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());




        }else{// 上传成功 获取上传文件信息
            $m = M("User");

//            echo $info['savepath'].$info['savename'];
            $data['head'] = 'Public/uploads/'.$info['savepath'].$info['savename'];
            $data['uid'] = $_SESSION['account']['uid'];

            $res = $m->data($data)->save();

//            dump($data);

            if($res){
                $this->success("头像上传成功");
            }else{
                $this->error("头像上传失败");
            }



        }
    }

    public function account_set_personal_msg(){


        if (isset($_SESSION["account"])) {

        } else {
            $this->ajaxReturn(2);
        }


        $m = M("User");

        $data = $_POST;
        $data['uid'] = $_SESSION['account']['uid'];
        $data['confirm'] = 1;

        $res = $m->data($data)->save();
//        $res = 1;

        if($res){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }




    }


    public function send(){

        $data['user_name'] = "gcan2";
        $user = urlsafe_b64encode($data['user_name']);
        echo $user;

        $random = substr(md5(uniqid(rand(),1)),   8,   32);

        $msg = "您好，".$data['user_name']."<br/>欢迎加入多宝金豆！请点击下面的链接来认证您的邮箱。<br/><a href='".C("domain")."/index.php?&a=email&base=".$user."&v=".$random."'>".C("domain")."/index.php?&a=email&base=".$user."&v=".$random."</a><br/>如果您的邮箱不支持链接点击，请将以上链接地址拷贝到您的浏览器地址栏中认证";

        $user = urlsafe_b64decode($user);

//        dump($user);
//        dump($msg);
//        dump($random);

//        think_send_mail('1528667112@qq.com','','你好!邮件标题','这是一篇测试邮件正文！');

        if(think_send_mail('1528667112@qq.com','','多宝金豆用户激活邮件',$msg) == true){
            echo '发送成功！';
        }
        else{
            echo '发送失败！';
        }
    }


    public function account_set(){
        $this->judge();



        if (isset($_SESSION["account"])) {


        } else {
            $this->error("请先登录！",'index.php?&a=signin');

        }

        $m = M("User");
        $uid = $_SESSION['account']['uid'];
        $sel = $m->where("uid=$uid")->field("uid,user_name,phone,email,create_time,admin,real_name,idcard,sex,head,country,confirm")->find();

        $_SESSION['account'] = $sel;

        $this->assign("user",$sel);




        $this->display();

    }

    public function account_zhongchou(){
        $this->judge();

        if (isset($_SESSION["account"])) {

            if($_SESSION["account"]['confirm'] != 1){
                $this->error("请先填写完信息，进行实名认证！",'index.php?&a=account_set');
            }

        } else {
            $this->error("请先登录！",'index.php?&a=signin');

        }


        $this->display();

    }

    public function account_zhongchou_history(){
        $this->judge();

        if (isset($_SESSION["account"])) {

            if($_SESSION["account"]['confirm'] != 1){
                $this->error("请先填写完信息，进行实名认证！",'index.php?&a=account_set');
            }

        } else {
            $this->error("请先登录！",'index.php?&a=signin');

        }


        $this->display();

    }





    public function account_certification(){
        $this->judge();

        if (isset($_SESSION["account"])) {


        } else {
            $this->error("请先登录！",'index.php?&a=signin');

        }


        $this->display();

    }



    public function email(){

        if(!empty($_GET['base']) && isset($_GET['base'])){

            $data['user_name'] = urlsafe_b64decode($_GET['base']);
            $m = M("User");

            $map['user_name'] = $data['user_name'];
            $sel = $m->where($map)->find();

            if($sel){

                if($sel['admin'] == 0){
                    $data['uid'] = $sel['uid'];
                    $data['admin'] = 1;
                    $res = $m->data($data)->save();

                    if($res){
                        $this->success("邮件激活成功，请登录！",'index.php?&a=signin');
                    }else{
                        $this->error("邮件激活失败，请联系管理员！");
                    }

                }else{
                    $this->success("邮件已激活，请登录！",'index.php?&a=signin');
                }

            }else{
                $this->error("非法登录！！！",'index.php?&a=signin');
            }

        }

    }


    public function judge()
    {


        if(!empty($_GET['l'])){

            $_SESSION['language'] = $_GET['l'];





        }else{

            $this->assign("to","zh");

        }


        if($_SESSION['language'] == "zh-cn"){
            $this->assign("to","zh");
        }

        if($_SESSION['language'] == "zh-tw"){
            $this->assign("to","cht");
        }

        if($_SESSION['language'] == "en-us"){
            $this->assign("to","en");
        }
        

//        MODULE_NAME,CONTROLLER_NAME,ACTION_NAME


        $this->assign("action",ACTION_NAME);


        if (isset($_SESSION["account"])) {
            $this->assign("account", "on");

            $m = M("User");
            $uid = $_SESSION['account']['uid'];
            $sel = $m->where("uid=$uid")->field("uid,user_name,phone,email,create_time,admin,real_name,idcard,sex,head,country,confirm")->find();
            $_SESSION['account'] = $sel;

        } else {
            $this->assign("account", "off");
        }



        if ($this->is_pc() == true) {
            $this->assign("pc", "pc");

        } else {
            $this->assign("pc", "notpc");
        }

        $this->tag_field();

    }

    public function trading(){
        $this->judge();




        $this->display();

    }


    public function mobi_msg(){

        $aa = rand(0,1);
        $bb = rand(0,1);
        $cc = rand(0,1);
        $dd = rand(0,1);
        $ee = rand(0,1);
        $ff = rand(0,1);

        if($aa == 1){
            $a = "+";
        }else{
            $a = "-";
        }
        if($bb == 1){
            $b = "+";
        }else{
            $b = "-";
        }

        if($cc == 1){
            $c = "+";
        }else{
            $c = "-";
        }

        if($dd == 1){
            $d = "+";
        }else{
            $d = "-";
        }

        if($ee == 1){
            $e = "+";
        }else{
            $e = "-";
        }
        if($ff == 1){
            $f = "+";
        }else{
            $f = "-";
        }

        $message = array(
            array(
                "icon"=> '/Public/img/icoico.ico',
                "coin"=>"魔币 MBC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$a.rand(0,100)."%",
                "7D_ups_and_downs"=>$a.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_btc.png',
                "coin"=>"比特币 BTC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$b.rand(0,100)."%",
                "7D_ups_and_downs"=>$b.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_eth.png',
                "coin"=>"以太坊 ETH",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$c.rand(0,100)."%",
                "7D_ups_and_downs"=>$c.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_ltc.png',
                "coin"=>"莱特币 LTC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$d.rand(0,100)."%",
                "7D_ups_and_downs"=>$d.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_ybc.png',
                "coin"=>"元宝币 YBC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$e.rand(0,100)."%",
                "7D_ups_and_downs"=>$e.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_qtum.png',
                "coin"=>"量子链 QUTM",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$f.rand(0,100)."%",
                "7D_ups_and_downs"=>$f.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_mryc.png',
                "coin"=>"美人鱼币 MRYC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$a.rand(0,100)."%",
                "7D_ups_and_downs"=>$a.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_mc.png',
                "coin"=>"猴币 MC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$b.rand(0,100)."%",
                "7D_ups_and_downs"=>$b.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_nbc.png',
                "coin"=>"努比亚 NBC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$c.rand(0,100)."%",
                "7D_ups_and_downs"=>$c.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_xkc.png',
                "coin"=>"小咖币 XKC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$d.rand(0,100)."%",
                "7D_ups_and_downs"=>$d.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_wtc.png',
                "coin"=>"瓦特币 WTC",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$e.rand(0,100)."%",
                "7D_ups_and_downs"=>$e.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_bash.png',
                "coin"=>"幸运链 BASH",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$f.rand(0,100)."%",
                "7D_ups_and_downs"=>$f.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_game.png',
                "coin"=>"游戏点 GAME",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$a.rand(0,100)."%",
                "7D_ups_and_downs"=>$a.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_ans.png',
                "coin"=>"小蚁股 ANS",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$b.rand(0,100)."%",
                "7D_ups_and_downs"=>$b.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_etc.png',
                "coin"=>"以太经典 ET",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$c.rand(0,100)."%",
                "7D_ups_and_downs"=>$c.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_fct.png',
                "coin"=>"公证币 FCT",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$d.rand(0,100)."%",
                "7D_ups_and_downs"=>$d.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_xrp.png',
                "coin"=>"瑞波币 XRP",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$e.rand(0,100)."%",
                "7D_ups_and_downs"=>$e.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_xlm.png',
                "coin"=>"恒星币 XLM",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$f.rand(0,100)."%",
                "7D_ups_and_downs"=>$f.rand(0,100.00)."%",
            ),
            array(
                "icon"=> 'https://ybh-static.oss-cn-hangzhou.aliyuncs.com/images/coin/coin_doge.png',
                "coin"=>"狗狗币 DOGE",
                "last_price"=>rand(100,20000),
                "24H_volume"=>rand(100,20000),
                "24H_turnover"=>rand(100,20000),
                "total_market_value"=>rand(100,20000),
                "24H_ups_and_downs"=>$f.rand(0,100)."%",
                "7D_ups_and_downs"=>$f.rand(0,100.00)."%",
            )

        );



        $this->ajaxReturn($message);



    }


    public function logout(){


//        session_unset();//清除变量
//
//        session_destroy();
        session('account',null);

        if(!isset($_SESSION['account'])){
            $this->success("成功退出，欢迎下次登录!","index.php?a=home");
        }else{
            $this->error("退出异常!");

        }

    }


    public function update_pwd_confirm(){

        if(!empty($_POST['password']) && isset($_POST['user_name'])){

            $m = M("User");

//            dump($_POST);

            $data['user_name'] = $_POST['user_name'];
            $sel = $m->where($data)->find();
//            dump($sel);
            $map['uid'] = $sel['uid'];
            $map['password'] = md5($_POST['password']);

            $res = $m->data($map)->save();

            if($res){
                $this->success("密码修改成功，请登录！","index.php?&a=signin");
            }else{
                $this->error("密码修改失败，请联系管理员！","index.php?&a=signin");
            }





        }



    }


    public function update_pwd(){

        $this->judge();



        if(!empty($_GET['jj']) && !empty($_GET['base'])){
//            urlsafe_b64decode

            $start_time = urlsafe_b64decode($_GET['jj']);
            $data['user_name'] = urlsafe_b64decode($_GET['base']);

//            dump($_GET);
//
//            dump($data);
//            dump($start_time);

            $time30 = 30*60;

            $timecount = $start_time + $time30;

//            dump($timecount);

            $now_time = time();

//            dump($now_time);

            if($now_time < $timecount){
                $m = M("User");

                $sel = $m->where($data)->find();
//                dump($sel);

                $this->assign("personal",$sel);
                $this->display();

            }else{
                $this->error("邮件验证失败，请重新发送邮件！");
            }








        }



    }

    public function update_pwd_msg(){


        if(!empty($_POST['email'])){
            $m = M("User");
            $map['email'] = $_POST['email'];
            $sel = $m->where($map)->find();

//            dump($sel);

            if($sel){
                $data['email'] = $sel['email'];
                $data['user_name'] = $sel['user_name'];
                $user = urlsafe_b64encode($data['user_name']);

                $time = urlsafe_b64encode(time());

                $random = substr(md5(uniqid(rand(),1)),   8,   32);

                $msg = "您好，<strong>".$data['user_name']."</strong><br/>欢迎加入<strong>多宝金豆</strong>！请点击下面的链接来重置您的密码。<br/><a href='http://wechat.tiny-calf.com/index.php?&a=update_pwd&jj=".$time."&base=".$user."&v=".$random."'>http://wechat.tiny-calf.com/index.php?&a=update_pwd&jj=".$time."&base=".$user."&v=".$random."</a><br/>如果您的邮箱不支持链接点击，请将以上链接地址拷贝到您的浏览器地址栏中。<br/><br/>该验证邮件有效期为30分钟，超时请重新发送邮件";

                if(think_send_mail($data['email'],'','多宝金豆找回密码邮件',$msg)){
                    $this->success("重置密码邮件已经发送到".$data['email']."，请登录邮箱重置！",'index.php?&a=signin',5);
                }else{
                    $this->error("邮件发送失败，请联系管理员！");
                }
            }else{
                $this->error($_POST['email']."电子邮件不存在！");
            }



        }


    }




    //注册信息
    public function register_msg(){




        $data['user_name'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['phone'] = $_POST['phone_number'];
        $data['password'] = md5($_POST['password']);

        $m = M("User");


        $map['user_name'] = $_POST['username'];
        $sel = $m->where($map)->find();
        if(!$sel){
            $data['create_time'] = date("Y-m-d H:i:s");

            $map1['phone'] = $_POST['phone'];
            $sel1 = $m->where($map1)->find();
            if(!$sel1){


                $map2['email'] = $_POST['email'];
                $sel2 = $m->where($map2)->find();
                if(!$sel2){
                    $res = $m->add($data);
                    if($res){

                        $user = urlsafe_b64encode($data['user_name']);

                        $random = substr(md5(uniqid(rand(),1)),   8,   32);

                        $msg = "您好，<strong>".$data['user_name']."</strong><br/>欢迎加入<strong>多宝金豆</strong>！请点击下面的链接来认证您的邮箱。<br/><a href='http://wechat.tiny-calf.com/index.php?&a=email&base=".$user."&v=".$random."'>http://wechat.tiny-calf.com/index.php?&a=email&base=".$user."&v=".$random."</a><br/>如果您的邮箱不支持链接点击，请将以上链接地址拷贝到您的浏览器地址栏中。";

                        if(think_send_mail($data['email'],'','多宝金豆用户激活邮件',$msg)){
                            $this->success("注册成功，激活邮件已发送到".$data['email']."您的邮箱,请激活！",'index.php?&a=signin',5);
                        }else{
                            $this->error("邮件发送失败，请联系管理员！");
                        }


                    }else{
                        $this->error("注册失败");
                    }
                }else{
                    $this->error("该邮箱已存在！");
                }




            }else{
                $this->error("该手机号已存在！");
            }





        }else{
            $this->error("该用户已存在！");
        }

    }

    public function login(){
        if(!empty($_GET['vv']) && $_GET['vv'] == 1){
            $this->assign("register","on");
        }else{
            $this->assign("register","off");
        }
        $this->display(); // 输出模板
    }

    //登陆信息
    public function login_msg(){

        $data['user_name'] = $_POST['username'];

        $m = M("User");



        $data['phone'] = $_POST['username'];
        $data['email'] = $_POST['username'];
        $data['_logic'] = 'OR';


        $sel = $m->where($data)->field("uid,user_name,email,create_time,admin")->find();



        if($sel){

            if($sel['admin'] == 0){
                $this->success("您的账号尚未激活，请先激活后再登陆！","",5);
            }else{
                $map['uid'] = $sel['uid'];
                $map['password'] = md5($_POST['password']);

                $sel2 = $m->where($map)->field("uid,password")->find();

                if($sel2){
                    if($sel2['password'] == md5($_POST['password'])){
                        $_SESSION['account'] = $sel;

                        $this->success("登录成功！",'index.php?a=account_set');

                    }else{

                          $this->error("登陆失败，请检查用户名/手机号/邮箱和密码！");
                    }

                }else{
                    $this->error("登陆失败，请检查用户名/手机号/邮箱和密码！");
                }



            }


        }else{
                $this->error("登陆失败，请检查用户名/手机号/邮箱和密码！");
        }

    }

    public function right(){
        $m = M("Article");
        $result = $m->order("create_time desc")->limit(5)->select();
        $this->assign('right',$result);// 赋值数据集

    }


    public function newsdet(){

        $this->judge();

        if(!empty($_GET['id'])){
            $this->right();
            $id = $_GET['id'];
            $m = M("Article");
            $res = $m->where("id=$id")->find();
            $this->assign('article',$res);// 赋值数据集



            $zhaiyao = cutstr_html($res['content'],100);



            $this->assign('zhaiyao',$zhaiyao);// 赋值数据集



            $time = $res['create_time'];

            $map["create_time"] = array("gt",$time);
            $gt = $m->where($map)->order("create_time asc")->field("id,create_time,title")->find();

            if($gt){
                $this->assign("last",$gt['id']);
                $this->assign("last_title",$gt['title']);
            }else{
                $this->assign("display_last","kong");
            }

            $map["create_time"] = array("lt",$time);
            $lt = $m->where($map)->order("create_time desc")->field("id,create_time,title")->find();

            if($lt){
                $this->assign("next",$lt['id']);
                $this->assign("next_title",$lt['title']);

            }else{
                $this->assign("display_next","kong");
            }

            $this->display(); // 输出模板

        }else{
            $this->display(); // 输出模板

        }


    }




    public function news(){


        $this->judge();

        $this->right();

        $m = M("Article");

        $count = $m->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $showall = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $all = $m->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条


        $this->assign('all',$all);// 赋值数据集
        $this->assign('showall',$showall);// 赋值分页输出

//        ++++++++++++++++++++++++++++++++++++++++++++++++++++++

        $count = $m->where("type='众筹资讯'")->count();// 查询满足要求的总记录数 $map表示查询条件

        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $showzczx = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $zczx = $m->where("type='众筹资讯'")->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条



        $this->assign('zczx',$zczx);// 赋值数据集
        $this->assign('showzczx',$showzczx);// 赋值分页输出

//        ++++++++++++++++++++++++++++++++++++++++++++++++++++++

        $count = $m->where("type='行业新闻'")->count();// 查询满足要求的总记录数 $map表示查询条件

        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $showhyxw = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $hyxw = $m->where("type='行业新闻'")->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条


        $this->assign('hyxw',$hyxw);// 赋值数据集
        $this->assign('showhyxw',$showhyxw);// 赋值分页输出

//        ++++++++++++++++++++++++++++++++++++++++++++++++++++++

        $count = $m->where("type='媒体报道'")->count();// 查询满足要求的总记录数 $map表示查询条件

        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $showmtbd = $Page->show();// 分页显示输出


        // 进行分页数据查询
        $mtbd = $m->where("type='媒体报道'")->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条





        $this->assign('mtbd',$mtbd);// 赋值数据集
        $this->assign('showmtbd',$showmtbd);// 赋值分页输出


        $this->display(); // 输出模板



    }


//标签
    public function tag(){

        $this->judge();

        $this->right();

        $m = M("Article");


        $tag = $_GET['tag'];

//        ++++++++++++++++++++++++++++++++++++++++++++++++++++++

        $map['tag'] = array("like","%$tag%");
        $count = $m->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件

        $Page = new Page($count,6);// 实例化分页类 传入总记录数
        $showtag = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $tag = $m->where($map)->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条



        $this->assign('tag_mark',$_GET['tag']);// 赋值数据集
        $this->assign('tag',$tag);// 赋值数据集
        $this->assign('showtag',$showtag);// 赋值分页输出
//


        $this->display(); // 输出模板



    }


    public function tag_field(){
        $m = M("Article");
        $res = $m->field("tag")->select();

        $str = "";
        $count = count($res);
        for($i=0;$i<$count;$i++){
            if($i != $count-1){
                $str .= $res[$i]['tag'].",";

            }else{
                $str .= $res[$i]['tag'];

            }
        }

        $res = explode(",",$str);
        $res = array_unique($res);
        $res = array_merge($res);

        $this->assign("tag_list",$res);
    }


//众筹资讯
    public function zczx(){

        $this->judge();

        $this->right();

        $m = M("Article");


//        ++++++++++++++++++++++++++++++++++++++++++++++++++++++

        $count = $m->where("type='众筹资讯'")->count();// 查询满足要求的总记录数 $map表示查询条件

        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $showzczx = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $zczx = $m->where("type='众筹资讯'")->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条



        $this->assign('zczx',$zczx);// 赋值数据集
        $this->assign('showzczx',$showzczx);// 赋值分页输出



        $this->display(); // 输出模板



    }



//行业新闻
    public function hyxw(){

        $this->judge();

        $this->right();

        $m = M("Article");



        $count = $m->where("type='行业新闻'")->count();// 查询满足要求的总记录数 $map表示查询条件

        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $showhyxw = $Page->show();// 分页显示输出

        // 进行分页数据查询
        $hyxw = $m->where("type='行业新闻'")->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条


        $this->assign('hyxw',$hyxw);// 赋值数据集
        $this->assign('showhyxw',$showhyxw);// 赋值分页输出

        $this->display(); // 输出模板



    }

//    媒体报道


    public function mtbd(){
        $this->judge();


        $this->right();

        $m = M("Article");



        $count = $m->where("type='媒体报道'")->count();// 查询满足要求的总记录数 $map表示查询条件

        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $showmtbd = $Page->show();// 分页显示输出


        // 进行分页数据查询
        $mtbd = $m->where("type='媒体报道'")->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条


        $this->assign('mtbd',$mtbd);// 赋值数据集
        $this->assign('showmtbd',$showmtbd);// 赋值分页输出


        $this->display(); // 输出模板



    }


    public function 多宝金豆list(){

        $this->judge();
        $this->right();

        if($this->is_weixin() == true){
            $this->sdk("index");
            $this->call_wx_pay(1000);
        }


        $m = M("Article");

        //        +++++++++++++++++++++++++++++++++++++++++
        $zczx = $m->field("id,title,type,create_time")->where("type='众筹资讯'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
        $this->assign('zczx',$zczx);// 赋值分页输出
        //        +++++++++++++++++++++++++++++++++++++++++
        $hyxw = $m->field("id,title,type,create_time")->where("type='行业新闻'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
        $this->assign('hyxw',$hyxw);// 赋值分页输出
        //        +++++++++++++++++++++++++++++++++++++++++
        $mtbd = $m->field("id,title,type,create_time")->where("type='媒体报道'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
        $this->assign('mtbd',$mtbd);// 赋值分页输出



        $this->display();

    }

    public function home(){

        $this->judge();



//        dump($_SESSION);


        $m = M("Article");

        $two = $m->order('create_time desc')->limit(2)->select();// 查询满足要求的总记录数 $map表示查询条件

        $time = time();

        $end = strtotime("2017-9-1 0:0:0");

        $this->assign('end',$end);
        $this->assign('time',$time);

        $rest = $end -$time;
        $this->assign('rest',$rest);  //剩余时间


        $this->assign('two',$two);// 赋值分页输出
        $this->display();

    }

    public function index(){

        $this->judge();




//        if($this->is_weixin() == true){
//            $this->sdk("index");
//            $this->call_wx_pay(1000);
//        }




//        $m = M("Article");
//
//        $two = $m->order('create_time desc')->limit(2)->select();// 查询满足要求的总记录数 $map表示查询条件
//        $this->assign('two',$two);// 赋值分页输出
//
//        dump($two);

        //        +++++++++++++++++++++++++++++++++++++++++
//        $zczx = $m->field("id,title,type,create_time")->where("type='众筹资讯'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
//        $this->assign('zczx',$zczx);// 赋值分页输出
//        //        +++++++++++++++++++++++++++++++++++++++++
//        $hyxw = $m->field("id,title,type,create_time")->where("type='行业新闻'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
//        $this->assign('hyxw',$hyxw);// 赋值分页输出
//        //        +++++++++++++++++++++++++++++++++++++++++
//        $mtbd = $m->field("id,title,type,create_time")->where("type='媒体报道'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
//        $this->assign('mtbd',$mtbd);// 赋值分页输出

        $time = time();

        $end = strtotime("2017-8-8 0:0:0");

        $this->assign('end',$end);
        $this->assign('time',$time);

        $this->display();

    }

    public function indexe(){

        $this->judge();

        if($this->is_weixin() == true){
            $this->sdk("index");
            $this->call_wx_pay(1000);
        }


        $m = M("Article");

        //        +++++++++++++++++++++++++++++++++++++++++
        $zczx = $m->field("id,title,type,create_time")->where("type='众筹资讯'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
        $this->assign('zczx',$zczx);// 赋值分页输出
        //        +++++++++++++++++++++++++++++++++++++++++
        $hyxw = $m->field("id,title,type,create_time")->where("type='行业新闻'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
        $this->assign('hyxw',$hyxw);// 赋值分页输出
        //        +++++++++++++++++++++++++++++++++++++++++
        $mtbd = $m->field("id,title,type,create_time")->where("type='媒体报道'")->order('create_time desc')->limit(4)->select();// 查询满足要求的总记录数 $map表示查询条件
        $this->assign('mtbd',$mtbd);// 赋值分页输出



        $this->display();

    }

    public function productdet(){

        $this->judge();
//        if($this->is_weixin() == true){
//            $this->sdk("productdet");
//            $this->call_wx_pay(1000);
//        }

        $this->display();

    }

    public function support(){

        $this->judge();
        $this->display();

    }



    //关于我们
    public function about(){
        $this->judge();


        $this->display();
    }
    //新用户注册
    public function newuserzc(){
        $this->judge();


        $this->display();
    }
    //帮助中心
    public function helpcenter(){
        $this->judge();


        $this->display();
    }
    //注册指南
    public function signupguide(){
        $this->judge();


        $this->display();
    }
    //充值指南
    public function rechargeguide(){
        $this->judge();


        $this->display();
    }
    //交易指南
    public function tradingguide(){
        $this->judge();


        $this->display();
    }





    function is_weixin(){
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
//            dump("weixin");
            return true;
        }else{
            //        dump("not weixin");
            return false;
        }

    }


    function is_pc(){
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $is_pc = (strpos($agent, 'windows nt')) ? true : false;
        return $is_pc;
    }



//打印输出数组信息
    function printf_info($data)
    {
        foreach($data as $key=>$value){
            echo "<font color='#00ff55;'>$key</font> : $value <br/>";
        }
    }


    public function index3(){

        header("Location:index.php?m=home&c=index&a=lala");

        $this->sdk("index");

        $this->call_wx_pay(1);
        $this->display();

    }

    public function lala(){
        $this->sdk("lala");

        $this->call_wx_pay(1);
        $this->display();

    }


    function index2(){


//①、获取用户openid
        $tools = new \JsApiPay();
        $openId = $tools->GetOpenid();

//        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$_SESSION['access_token']."&openid=".$openId."&lang=zh_CN";
//
//        $person = $this->http_curl($url);
//
//
//        dump($url);
//        dump($person);

        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".C('appid')."&secret=".C('secret');
        $access_token = $this->http_curl($url);
        $access_token = json_decode($access_token,true);
        $access_token = $access_token['access_token'];
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$openId."&lang=zh_CN";

        $person = $this->http_curl($url);
        $person = json_decode($person,true);






//②、统一下单
        $input = new \WxPayUnifiedOrder();
        $input->SetBody("test");
        $input->SetAttach("test");
        $input->SetOut_trade_no(\WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee("1");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
//        $input->SetNotify_url("http://paysdk.weixin.qq.com/example/notify.php");
        $input->SetNotify_url(C("HOST_ROOT")."Public/lib/notify.php");
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $order = \WxPayApi::unifiedOrder($input);
//        dump($order);
        echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
        $this->printf_info($order);
        $jsApiParameters = $tools->GetJsApiParameters($order);


        $this->assign("jsApiParameters",$jsApiParameters);

//获取共享收货地址js函数参数
        $editAddress = $tools->GetEditAddressParameters();
        $this->assign("editAddress",$editAddress);

//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
        /**
         * 注意：
         * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
         * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
         * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
         */
        $this->display();
    }


    function call_wx_pay($money){

//        $money = $_POST['money'];//以分为单位
//①、获取用户openid
        $tools = new \JsApiPay();
//        $openId = $tools->GetOpenid();


//        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".C('appid')."&secret=".C('secret');
//        $access_token = $this->http_curl($url);
//        $access_token = json_decode($access_token,true);
//        $access_token = $access_token['access_token'];
//        dump($access_token);
//        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$openId."&lang=zh_CN";
//
//        $person = $this->http_curl($url);
//        $person = json_decode($person,true);

//②、统一下单




        $input = new \WxPayUnifiedOrder();



        $input->SetBody("test");
        $input->SetAttach("test");
        $input->SetOut_trade_no(\WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee($money);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url(C("HOST_ROOT")."Public/lib/notify.php");
        $input->SetTrade_type("JSAPI");


        if(!isset($_SESSION['openId'])){
            $tools = new \JsApiPay();
            $openId = $tools->GetOpenid();
            $_SESSION['openId'] = $openId;
        }
        $input->SetOpenid($_SESSION['openId']);

        $order = \WxPayApi::unifiedOrder($input);
//        echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
//        $this->printf_info($order);
        $jsApiParameters = $tools->GetJsApiParameters($order);

//        $this->ajaxReturn($jsApiParameters);

        $this->assign("jsApiParameters",$jsApiParameters);















//获取共享收货地址js函数参数
//        $editAddress = $tools->GetEditAddressParameters();
//        $this->assign("editAddress",$editAddress);

//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
        /**
         * 注意：
         * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
         * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
         * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
         */
    }

    public function product_home(){

        if($this->is_weixin() == true){
            $this->sdk("product_home");
            $this->call_wx_pay(1000);
        }


        $this->display();

    }
    public function product_news(){

        if($this->is_weixin() == true) {

            $this->sdk("product_news");
            $this->call_wx_pay(10000);

        }

        $this->display();

    }



    public function select(){
        if(isset($_REQUEST["transaction_id"]) && $_REQUEST["transaction_id"] != ""){
            $transaction_id = $_REQUEST["transaction_id"];
            $input = new \WxPayOrderQuery();
            $input->SetTransaction_id($transaction_id);
            $this->printf_info(WxPayApi::orderQuery($input));
            exit();
        }

        if(isset($_REQUEST["out_trade_no"]) && $_REQUEST["out_trade_no"] != ""){
            $out_trade_no = $_REQUEST["out_trade_no"];
            $input = new \WxPayOrderQuery();
            $input->SetOut_trade_no($out_trade_no);
            $this->printf_info(\WxPayApi::orderQuery($input));
            exit();
        }
        $this->display();
    }

    public function download(){

        if(isset($_REQUEST["bill_date"]) && $_REQUEST["bill_date"] != ""){
            $bill_date = $_REQUEST["bill_date"];
            $bill_type = $_REQUEST["bill_type"];
            $input = new \WxPayDownloadBill();
            $input->SetBill_date($bill_date);
            $input->SetBill_type($bill_type);

            $file = \WxPayApi::downloadBill($input);
            echo $file;
//TODO 对账单文件处理
            exit(0);
            $this->display();

        }
        $this->display();


    }



    /**
     * @param $url
     * @param $type
     * @param $jsonpost
     * @return mixed|json
     */
    function http_curl($url, $type, $jsonpost)
    {


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);

        //如果使用代理需加上属性
        if(C('IF_PROXY')==true){
            curl_setopt ($ch, CURLOPT_PROXY, C('PROXY'));
            curl_setopt ($ch, CURLOPT_USERAGENT, C('USERAGENT'));
        }
        if ($type == "post") {
            //传输数据
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonpost);
        }
        $json = curl_exec($ch);
        if (curl_errno($ch)) {
            $json = curl_error($ch);
            $json = json_encode($json, JSON_UNESCAPED_UNICODE);
//            echo $json;
        }
        curl_close($ch);
        if (C('IF_PROXY') == true) {

            $header = preg_replace('/{.*/i', "", $json);

            if($header!=""){

                $json = explode($header, $json);

                $json = $json[1];

            }

        }

        return $json;
    }

    public function native(){

        $notify = new \NativePay();
        $url1 = $notify->GetPrePayUrl("123456789");

//模式二
        /**
         * 流程：
         * 1、调用统一下单，取得code_url，生成二维码
         * 2、用户扫描二维码，进行支付
         * 3、支付完成之后，微信服务器会通知支付成功
         * 4、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
         */
        $input = new \WxPayUnifiedOrder();
        $input->SetBody("test");
        $input->SetAttach("test");
        $input->SetOut_trade_no(\WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee("2");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url(C("HOST_ROOT")."Public/lib/notify.php");
        $input->SetTrade_type("NATIVE");
        $input->SetProduct_id("123456789");
        $result = $notify->GetPayUrl($input);
        $url2 = $result["code_url"];
        $this->assign("url1",urlencode($url1));
        $this->assign("url2",urlencode($url2));
        $this->assign("HOST_ROOT",C("HOST_ROOT"));
        $this->display();


    }
    public function qrcode(){
        error_reporting(E_ERROR);
        require_once './Public/phpqrcode/phpqrcode.php';
        $url = urldecode($_GET["data"]);
        \QRcode::png($url);

    }

    public function refund(){
//        error_reporting(E_ERROR);


        if(isset($_REQUEST["transaction_id"]) && $_REQUEST["transaction_id"] != ""){
            $transaction_id = $_REQUEST["transaction_id"];
            $total_fee = $_REQUEST["total_fee"];
            $refund_fee = $_REQUEST["refund_fee"];
            $input = new \WxPayRefund();
            $input->SetTransaction_id($transaction_id);
            $input->SetTotal_fee($total_fee);
            $input->SetRefund_fee($refund_fee);
            $input->SetOut_refund_no(\WxPayConfig::MCHID.date("YmdHis"));
            $input->SetOp_user_id(\WxPayConfig::MCHID);
            $this->printf_info(\WxPayApi::refund($input));
            exit();
        }

//$_REQUEST["out_trade_no"]= "122531270220150304194108";
///$_REQUEST["total_fee"]= "1";
//$_REQUEST["refund_fee"] = "1";
        if(isset($_REQUEST["out_trade_no"]) && $_REQUEST["out_trade_no"] != "") {
            $out_trade_no = $_REQUEST["out_trade_no"];
            $total_fee = $_REQUEST["total_fee"];
            $refund_fee = $_REQUEST["refund_fee"];
            $input = new \WxPayRefund();
            $input->SetOut_trade_no($out_trade_no);
            $input->SetTotal_fee($total_fee);
            $input->SetRefund_fee($refund_fee);
            $input->SetOut_refund_no(\WxPayConfig::MCHID . date("YmdHis"));
            $input->SetOp_user_id(\WxPayConfig::MCHID);
            $this->printf_info(\WxPayApi::refund($input));
            exit();
        }

        $this->display();
    }


//返回access_token  *session解决办法 存mysql memcache
    public function getWxAccessToken(){
        //将access_token 存在session、cookie中
        if($_SESSION['access_token'] && $_SESSION['expire_time']>time()){
            //如果access_token在session并没有过期
            return $_SESSION['access_token'];


        }else{
            //如果access_token不存在或者已经过期，重新取access_token
            //        1.请求url地址
//            测试号与公众号的appid和appsecrect改变了
//            自己的测试号
            $appid = C("appid");
            $appsecret = C('secret');

            //JS接口域名测试的
//            $appid = 'wxcf2ed1b2b6a5ad22';
//            $appsecret = 'a456692cd5c67e97bcda4152ca358708';

            $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.
                $appsecret;
//            echo $url;
            //        2.初始化curl
            $ch = curl_init();
//        3.设置curl的参数
//        第一个是设置url
            curl_setopt($ch,CURLOPT_URL,$url);
//            第二个是将抓取的信息返回
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  //1或true是一样的
//        CURLOPT_RETURNTRANSFER 将curl_exec()获取的信息以文件流的形式返回，而不是直接输出
//        4.抓取采集信息 调用接口
            $res = curl_exec($ch);

//        5.关闭cURL   关闭CURL资源,并且释放系统资源
            curl_close($ch);

            if(curl_errno($ch)){
                var_dump(curl_error($ch));
            }
//        json_encode()是把数组转化为json,json_decode()是把json转化为数组
            $res = json_decode($res,true);
            $access_token = $res['access_token'];
            //将重新获取到的access_token存到session
            $_SESSION['access_token'] = $access_token;
            $_SESSION['expire_time'] = time() + 7000;
            return $access_token;




        }
    }

//获取16位随机码
    function getRandCode($num){
        $array = array(
            'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
            'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','k','r','s','t','u','v','w','x','y','z',
            '0','1','2','3','4','5','6','7','8','9'
        );
        $randstr = "";
        $length = count($array);
//        echo $length;
        for($i = 0; $i < $num; $i++){
            $key = rand(0,$length-1);   //"A"  --->$array['0']
            $randstr .= $array[$key];
        }
//        echo $randstr;
        return $randstr;
    }


//jsapi_ticket
//生成签名之前必须先了解一下jsapi_ticket，jsapi_ticket是公众号用于调用微信JS接口的临时票据。正常情况下，jsapi_ticket的有效期为7200秒，通过access_token来获取。由于获取jsapi_ticket的api调用次数非常有限，频繁刷新jsapi_ticket会导致api调用受限，影响自身业务，开发者必须在自己的服务全局缓存jsapi_ticket 。

    //获取jsapi中保存有效的jsapi_ticket
    function getJsApiTicket(){
        //如果session中保存有效的jsapi_ticket
        if($_SESSION['jsapi_ticket_expire_time'] > time() && $_SESSION['jsapi_ticket'] ){
            $jsapi_ticket =  $_SESSION['jsapi_ticket'];

        }else{
            $access_token = $this->getWxAccessToken();

            $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=".$access_token."&type=jsapi";
            $res = $this->http_curl($url);  //get方法
            $res = json_decode($res,true);


            $jsapi_ticket = $res['ticket'];
            $_SESSION['jsapi_ticket'] = $jsapi_ticket;
            $_SESSION['jsapi_ticket_expire_time'] = time() + 7000;   //存到缓存中
        }
//        echo $jsapi_ticket;
        return $jsapi_ticket;
    }

    function jsSdkConfig($action){
        //1.获取jsapi_ticket票据
        $jsapi_ticket = $this->getJsApiTicket();

        $timestamp = time();
        $nonceStr = $this->getRandCode(16);

        $url = C("HOST_ROOT")."index.php?m=home&c=index&a=".$action;

//        2.获取signature

        //形成数组，然后按字典序列排序
//        $array = array();
//        $array = array(
//            "jsapi_ticket",
//            "noncestr",
//            "timestamp",
//            "url");
//        sort($array);
//        var_dump($array);
//        $signature = implode($array,"&");
//echo $signature;

        //拼接成字符串，sha1加密，然后与signature进行比较
//        $signature = sha1($signature);
        $signature = "jsapi_ticket=".$jsapi_ticket."&noncestr=".$nonceStr."&timestamp=".$timestamp."&url=".$url;

//        dump($signature);
//        dump($signature);
        $this->assign("action",$action);
        $this->assign("HOST_ROOT",C("HOST_ROOT"));
        $signature = sha1($signature);   //对$signature进行sha1签名，得到signature：
        $this->assign("appid",C("appid"));
        $this->assign('jsapi_ticket',$jsapi_ticket);
        $this->assign('timestamp',$timestamp);  //变量分配提供给模板
        $this->assign('nonceStr',$nonceStr);  //变量分配提供给模板
        $this->assign('signature',$signature);  //变量分配提供给模板

    }

    function sdk($action){

        if($_GET['from'] == "singlemessage"){
            header("Location:index.php?m=home&c=index&a=".$action);
        }

        if(!isset($_SESSION['openId'])){
            $tools = new \JsApiPay();
            $openId = $tools->GetOpenid();
            $_SESSION['openId'] = $openId;
        }


        $this->jsSdkConfig($action);

    }




}