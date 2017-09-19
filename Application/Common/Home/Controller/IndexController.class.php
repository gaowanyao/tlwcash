<?php

namespace Home\Controller;

use Think\Controller;
use Think\Vender;
use Think\Page;

ini_set('date.timezone', 'Asia/Shanghai');
//error_reporting(E_ERROR);
require_once "./Public/lib/WxPay.Api.php";
require_once "./Public/lib/WxPay.JsApiPay.php";
require_once './Public/lib/log.php';
require_once "./Public/lib/test.php";
require_once "./Public/lib/WxPay.NativePay.php";
header("Content-type: text/html; charset=utf-8");
header('X-Frame-Options:Deny');
header("X-XSS-Protection:1"); //开启XSS保护
header("X-Content-Type-Options:nosniff");





//header("Set-Cookie: hidden=value; httpOnly");  //设置后会导致session不能使用

//初始化日志
$logHandler = new \CLogFileHandler("./Public/logs/" . date('Y-m-d') . '.log');
$log = \Log::Init($logHandler, 15);


class IndexController extends Controller
{


    public function _empty()
    {
        header("HTTP/1.0 404 Not Found");
        $this->display('Index:error404');
    }

    public function error403()
    {
        $this->judge();
        $this->display();
    }

    public function error404()
    {
        $this->judge();
        $this->display();
    }

    public function error500()
    {
        $this->judge();
        $this->display();
    }


    function http_request($url, $data = null)
    {

        if (function_exists('curl_init')) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);

            if (!empty($data)) {
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            }
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($curl);
            curl_close($curl);


            $result = preg_split("/[,\r\n]/", $output);

            if ($result[1] == 0) {
                return "curl success";
            } else {
                return "curl error" . $result[1];
            }
        } elseif (function_exists('file_get_contents')) {

            $output = file_get_contents($url . $data);
            $result = preg_split("/[,\r\n]/", $output);

            if ($result[1] == 0) {
                return "success";
            } else {
                return "error" . $result[1];
            }


        } else {
            return false;
        }

    }

    public function vv()
    {


        $code = rand(100000, 999999);
        $data = "【铜锣湾基金】您好，您的验证码是" . $code;
        $_SESSION['code'] = $code;
        $post_data = array();
        $post_data['account'] = "N4243086";
        $post_data['pswd'] = "FmM4RVl3La3966";
        $post_data['msg'] = "$data";
        $post_data['mobile'] = "17801098915";

        $post_data['needstatus'] = 'true';
        $url = 'https://zapi.253.com/msg/HttpBatchSendSM';
//        $url='http://sapi.253.com/msg/HttpBatchSendSM';
        $res = $this->http_request($url, http_build_query($post_data));
        var_dump($res);


    }


    /**
     * Author:阿耀王子
     * 所有判断验证部分及共有部分
     */
    public function judge()
    {



        if (!empty($_SESSION['account']) && isset($_SESSION['account'])) {



            $this->assign("account", "on");

            if(!empty($_SESSION['account']['uid'])){

                $sel = M("User")->where("uid=".$_SESSION['account']['uid'])->find();
                $account['uid'] = $sel['uid'];
                $account['user_name'] = $sel['user_name'];
                $account['email'] = $sel['email'];
                $account['phone'] = $sel['phone'];

                session('account', $account);
            }else{
                $res = session('account', null);

                header("Location:index.php");
            }





        } else {
            $this->assign("account", "off");
        }


        if ($this->is_pc() == true) {
            $this->assign("pc", "pc");
            $this->assign("modal_width", "20%");
            $this->assign("modal_height", "45%");
            $this->assign("modal_left", "39.2%");

        } else {
            $this->assign("pc", "notpc");
            $this->assign("modal_width", "65%");
            $this->assign("modal_height", "56%");
            $this->assign("modal_left", "13%");

        }


        $this->assign("action_url", "index.php?a=" . ACTION_NAME);

        if (!empty($_COOKIE['think_language'])) {
            if ($_COOKIE['think_language'] == 'en-us') {
                $this->assign("language", "English");
            } else if ($_COOKIE['think_language'] == 'zh-cn') {
                $this->assign("language", "简体中文");
            } else if ($_COOKIE['think_language'] == 'zh-tw') {
                $this->assign("language", "繁体中文");
            } else {
                $this->assign("language", "简体中文");
            }
        } else {
            $this->assign("language", "简体中文");

        }

    }


    public function kk()
    {

        dump($_SESSION);
        $this->judge();
        dump($_SESSION);
        dump($_COOKIE);
        dump($_SESSION);
        dump($_SESSION);
        dump($_SESSION);

//        $_SESSION['num'] = 0;
//        dump($_SESSION);
//        dump(session('num'));
    }

    /**
     * Author:阿耀王子
     * ajax获取手机验证码 注册
     */
    public function ajaxSandPhone()
    {

        $phone = $_POST['phone'];

        if (empty($phone)) {
            $data['status'] = 0;
            $data['info'] = "手机号码不能为空";
            $this->ajaxReturn($data);
        }

        if (!preg_match("/^1[34578]{1}\d{9}$/", $phone)) {
            $data['status'] = -1;
            $data['info'] = "手机号码不正确";
            $this->ajaxReturn($data);
        }
        $user_phone = M("User")->field('phone')->where("phone='$phone'")->find();
        if (!empty($user_phone)) {
            $data['status'] = -2;
            $data['info'] = "手机号码已存在";
            $this->ajaxReturn($data);
        }


        //短信宝
//        $r = sandPhone1($phone,C('CODE_NAME'),C('CODE_USER_NAME'),C('CODE_USER_PASS'));

        //创蓝
        $r = sandPhone($phone, C('CODE_NAME'), C('CODE_USER_NAME'), C('CODE_USER_PASS'));

        if (!$r[1]) {
            $data['status'] = 1;
            $data['info'] = "发送成功";
            $this->ajaxReturn($data);
            exit;
        } else {
            $data['status'] = -3;
            $data['info'] = chuanglan_status($r[1]);
            $this->ajaxReturn($data);
            exit;
        }


//        if($r!="短信发送成功"){
//            $data['status']=0;
//            $data['info'] = $r;
//            $this->ajaxReturn($data);
//        }else{
//            $data['status']=1;
//            $data['info'] = $r;
//            $this->ajaxReturn($data);
//        }
    }


    public function ico()
    {
        $this->judge();
        $this->display();
    }

    public function safety()
    {
        $this->judge();
        $this->display();
    }


    public function order()
    {
        $this->judge();
        $this->display();
    }

    /**
     * Author:阿耀王子
     * ajax获取手机验证码 忘记密码
     */
    public function ajaxSandPhoneforgetpwd()
    {

        $phone = $_POST['phone'];

        if (empty($phone)) {
            $data['status'] = 0;
            $data['info'] = "手机号码不能为空";
            $this->ajaxReturn($data);
        }

        if (!preg_match("/^1[34578]{1}\d{9}$/", $phone)) {
            $data['status'] = -1;
            $data['info'] = "手机号码不正确";
            $this->ajaxReturn($data);
        }
        $user_phone = M("User")->field('phone')->where("phone='$phone'")->find();
        if (empty($user_phone)) {
            $data['status'] = -2;
            $data['info'] = "手机号码不存在";
            $this->ajaxReturn($data);
        }


        //创蓝
        $r = sandPhone($phone, C('CODE_NAME'), C('CODE_USER_NAME'), C('CODE_USER_PASS'));

        if (!$r[1]) {
            $data['status'] = 1;
            $data['info'] = "发送成功";
            $this->ajaxReturn($data);
            exit;
        } else {
            $data['status'] = -3;
            $data['info'] = chuanglan_status($r[1]);
            $this->ajaxReturn($data);
            exit;
        }

//        $r = sandPhone1($phone, C('CODE_NAME'), C('CODE_USER_NAME'), C('CODE_USER_PASS'));
//
//
//        if ($r != "短信发送成功") {
//            $data['status'] = 0;
//            $data['info'] = $r;
//            $this->ajaxReturn($data);
//        } else {
//            $data['status'] = 1;
//            $data['info'] = $r;
//            $this->ajaxReturn($data);
//        }
    }


    /**
     * Author:阿耀王子
     * 注册信息处理
     */
//    public function signupMsg()
//    {
//        $code = $_SESSION['code'];
//        $verify = $_POST['verify'];
//        if ($code == $verify) {
//
//            $data['phone'] = $_POST['phone'];
//            $data['password'] = md5($_POST['pwd']);
//            $data['create_time'] = time();
//            $data['user_name']=$_POST['user'];
//            $data['email']=$_POST['email'];
//
////            $res = M("User")->add($data);
//
//            if (1) {
////                if ($res) {
//                $data['status'] = 1;
//                $data['info'] = "注册成功";
//                $this->ajaxReturn($data);
//            } else {
//                $data['status'] = 0;
//                $data['info'] = "注册失败";
//                $this->ajaxReturn($data);
//            }
//
//
//        } else {
//            $data['status'] = 0;
//            $data['info'] = "验证码不正确";
//            $this->ajaxReturn($data);
//        }
//
//
//    }
    public function signupMsg()
    {
        $code = $_SESSION['code'];
        $verify = $_POST['verify'];
        $phone=$_POST['phone'];
        if ($code == $verify) {
            $m = M('User');

            $res=$m->where("phone=$phone")->find();

            if($res){
                $data['status'] = 0;
                $data['info'] = "禁止重复注册";
                $this->ajaxReturn($data);
            }else{

                $data['phone'] = $_POST['phone'];
                $data['password'] = md5($_POST['pwd']);
                $data['create_time'] = time();
                $data['user_name']=$_POST['user'];
                $data['email']=$_POST['email'];
                M("User")->add($data);
                $data['status'] = 1;
                $data['info'] = "注册成功";
                $this->ajaxReturn($data);
            }
        } else {
            $data['status'] = 0;
            $data['info'] = "验证码不正确";
            $this->ajaxReturn($data);
        }


    }
    //检查用户名唯一
    public function signup_checkuser(){
        $uname=$_POST['username'];
        $m = M('User');
        $map['user_name'] = array("like",$uname);
        $res=$m->where($map)->find();
        if($res){
            $data['status']=1;
            $this->ajaxReturn($data);
        }else{
            $data['status']=0;
            $this->ajaxReturn($data);
        }

    }
    //检查手机号唯一
    public function signup_checkphone(){
        $phone=$_POST['myphone'];
        $m = M('User');

        $res=$m->where("phone=$phone")->find();

        if($res){
            $data['status']=1;
            $this->ajaxReturn($data);
        }else{
            $data['status']=0;
            $this->ajaxReturn($data);
        }
    }

    /**
     * Author:阿耀王子
     * 忘记密码
     */
    public function forgetpwd()
    {
        $this->judge();
        $this->display();

    }

    /**
     * Author:阿耀王子
     * 忘记密码处理
     */
    public function forgetpwd_msg()
    {
        $code = $_SESSION['code'];
        $verify = $_POST['verify'];
        if ($code == $verify) {

            $phone = $map['phone'] = $_POST['phone'];
            $map['password'] = md5($_POST['pwd']);


            if (empty($phone)) {
                $data['status'] = 0;
                $data['info'] = "手机号码不能为空";
                $this->ajaxReturn($data);
            }

            if (!preg_match("/^1[34578]{1}\d{9}$/", $phone)) {
                $data['status'] = -1;
                $data['info'] = "手机号码不正确";
                $this->ajaxReturn($data);
            }
            $user = M("User")->field('uid')->where("phone='$phone'")->find();
            if (empty($user)) {
                $data['status'] = -2;
                $data['info'] = "手机号码不存在";
                $this->ajaxReturn($data);
            } else {

                $map['uid'] = $user['uid'];

                $res = M("User")->save($map);

                if ($res) {
                    $data['status'] = 1;
                    $data['info'] = "重置密码成功，请登录！";
                    $this->ajaxReturn($data);
                } else {
                    $data['status'] = -3;
                    $data['info'] = "重置密码失败";
                    $this->ajaxReturn($data);
                }

            }


        } else {
            $data['status'] = 0;
            $data['info'] = "验证码不正确";
            $this->ajaxReturn($data);
        }


    }


    /**
     * Author:阿耀王子
     * 用户中心
     */
    public function arbitrage()
    {
        $this->judge();
        $this->display();
    }


    /**
     * Author:阿耀王子
     * 用户中心
     */
    public function account()
    {
        $this->judge();

        if (!empty($_SESSION['account']) && isset($_SESSION['account'])) {



        } else {

            $this->error("请登录！", "index.php");

        }
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $res = $m->where("uid=$uid")->find();
//        dump($res);
        $this->assign(res, $res);
        $this->display();
    }


    //判断登录密码开始
    public function account_msg()
    {
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $res = $m->where("uid=$uid")->find();
        if (md5($_POST['password']) == $res['password']) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }
        $this->ajaxReturn($data);

    }
    //判断登陆密码结束


    //点击保存信息开始
    public function account_save_msg()
    {
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $res = $m->where("uid=$uid")->find();
        $res['user_name'] = $_POST['dataUserName'];
        $res['email'] = $_POST['dataUserEmail'];
        $res['password'] = md5($_POST['dataUserPassword']);
        $res['phone'] = $_POST['dataUserMobile'];
        $m->save($res);
        $this->success('修改成功，即将用户中心页面', 'http://www.jifage.cn/index.php?a=account');
    }
    //点击保存信息结束

    //上传证件图片开始
    public function account_upload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728*3;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/upload/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();

        if (!$info) {// 上传错误提示错误信息
            if ($upload->getError() == "没有文件被上传！") {
                $m = M('User');
                $uid = $_SESSION['account']['uid'];
                $data = $m->where("uid=$uid")->find();
                $data['area'] = $_POST['area'];
                $data['real_name'] = $_POST['realName'];
                $data['idcard'] = $_POST['IDNumber'];
                $m->save($data);
                $this->success('新增成功，即将用户中心页面', 'http://www.jifage.cn/index.php?a=account');
            } else {
                $this->error($upload->getError());

            }
        } else {// 上传成功
            $m = M('User');
            $uid = $_SESSION['account']['uid'];
            $data = $m->where("uid=$uid")->find();
            $data['area'] = $_POST['area'];
            $data['real_name'] = $_POST['realName'];
            $data['idcard'] = $_POST['IDNumber'];
            $data['infook']=1;
            if (count($info['idcard_hand_url']) > 0) {

                $data['idcard_hand_url'] = "/Public/upload/" . $info['idcard_hand_url']['savepath'] . $info['idcard_hand_url']['savename'];
            }

            if (count($info['idcard_zm_url']) > 0) {


                $data['idcard_zm_url'] = "/Public/upload/" . $info['idcard_zm_url']['savepath'] . $info['idcard_zm_url']['savename'];
            }

            if (count($info['idcard_fm_url']) > 0) {


                $data['idcard_fm_url'] = "/Public/upload/" . $info['idcard_fm_url']['savepath'] . $info['idcard_fm_url']['savename'];
            }


            $m->save($data);
            $this->success('新增成功，即将返回列表页面', 'http://www.jifage.cn/index.php?a=account');
        }
    }
    //上传证件图片结束

    //上传头像开始
    public function account_upload_head()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/upload/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $m = M('User');
            $uid = $_SESSION['account']['uid'];
            $data = $m->where("uid=$uid")->find();

            if (count($info['picHead']) > 0) {
                $data['head_url'] = "/Public/upload/" . $info['picHead']['savepath'] . $info['picHead']['savename'];
            }
            $m->save($data);
            $this->success('新增成功，即将用户中心页面', 'http://www.jifage.cn/index.php?a=account');
        }
    }
    //上传头像结束

    //验证密码开始
    public function account_check_password()
    {
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $data = $m->where("uid=$uid")->find();
        if (md5($_POST['oldPass']) == $data['password']) {
            $data['password'] = md5($_POST['oldPass']);
            $m->save($data);
            $data['status']=1;
            $this->ajaxReturn($data);
        }else{
            $m->save($data);
            $data['status']=0;
            $this->ajaxReturn($data);
        }

    }

    //验证密码结束
    public function account_change_password(){
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $data = $m->where("uid=$uid")->find();
        $data["password"]=md5($_POST["newPassword"]);
        $m->save($data);
        redirect("http://www.jifage.cn/index.php?a=logout");
    }
    //修改密码开始

    //修改密码结束

    //获得证件图片开始
    public function account_get_idcard_zm_url() {
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $res = $m->where("uid=$uid")->find();
        if($res['idcard_zm_url']!=null){
            $data['zm']=$res['idcard_zm_url'];
            $this->ajaxReturn($data);
        }else{
            $data['zm']="/Public/img/pic+.png";
            $this->ajaxReturn($data);
        }
    }
    public function account_get_idcard_fm_url() {
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $res = $m->where("uid=$uid")->find();
        if($res['idcard_zm_url']=!null){
            $data['fm']=$res['idcard_fm_url'];
            $this->ajaxReturn($data);
        }else{
            $data['fm']="/Public/img/pic+.png";
            $this->ajaxReturn($data);
        }
    }
    public function account_get_idcard_hand_url() {
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $res = $m->where("uid=$uid")->find();
        if($res['idcard_zm_url']!=null){
            $data['hand']=$res['idcard_hand_url'];
            $this->ajaxReturn($data);
        }else{
            $data['hand']="/Public/img/pic+.png";
            $this->ajaxReturn($data);
        }
    }
    //获得证件图片结束
    //获得头像开始
    public function account_get_idcard_picHead_url() {
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $res = $m->where("uid=$uid")->find();
        if($res['head_url']!=null){
            $data['head']=$res['head_url'];
            $this->ajaxReturn($data);
        }else{
            $data['head']="/Public/img/pic+.png";
            $data['headSmall']="__PUBLIC__/mySpace/img/defaultPic.jpg";
            $this->ajaxReturn($data);
        }
    }
    //获得头像结束

    //上传实名认证按钮禁用方法
    public function account_btn_dis(){
        $m = M('User');
        $uid = $_SESSION['account']['uid'];
        $data = $m->where("uid=$uid")->find();
        $this->ajaxReturn($data);
    }

    /**
     * Author:阿耀王子
     * 关于我们
     */
    public function about()
    {
        $this->judge();
        $this->display();

    }

    /**
     * Author:阿耀王子
     * 问题解答
     */
    public function faq()
    {
        $this->judge();
        $this->display();

    }

    public function exponential()
    {
        $this->judge();
        $this->display();
    }


    /**
     * Author:阿耀王子
     * 产品特色
     */
    public function features()
    {
        $this->judge();
        $this->display();

    }

    public function features2()
    {
        $this->judge();
        $this->display();

    }


    public function bb()
    {
        dump(ACTION_NAME);
        dump(__ACTION__);
        dump(__ACTION__);
        dump(__ACTION__);
    }

    /**
     * Author:阿耀王子
     * 主页
     */
    public function index()
    {


        $this->judge();


        $time = time();

        $end = strtotime("2017-09-01 10:00:00");

        $this->assign('end', $end);
        $this->assign('time', $time);

        $rest = $end - $time;
        $this->assign('rest', $rest);  //剩余时间


        $this->display();


    }
    //首页判断是否登录
    function index_login(){
        if(!empty($_SESSION['account']) && isset($_SESSION['account'])){
            $data['toUrl']="1";
            $this->ajaxReturn($data);
        }else{
            $data['toUrl']="0";

            $this->ajaxReturn($data);
        }
    }

    /**
     * Author:阿耀王子
     * 是否是微信浏览器
     */
    function is_weixin()
    {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
//            dump("weixin");
            return true;
        } else {
            //        dump("not weixin");
            return false;
        }

    }


    /**
     * Author:阿耀王子
     * 是否是pc浏览器
     */
    function is_pc()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $is_pc = (strpos($agent, 'windows nt')) ? true : false;
        return $is_pc;
    }

    /**
     * Author:阿耀王子
     * 退出
     */
    public function logout()
    {
        $res = session('account', null);

        header("Location:index.php");

//        $this->success("成功退出，欢迎下次登录", "index.php");

    }

    /**
     * Author:阿耀王子
     * 验证码
     */
    public function ver()
    {
        $Verify = new \Think\Verify();
        $Verify->fontttf = '5.ttf';
        $Verify->useImgBg = true;
        $Verify->fontSize = 30;
        $Verify->length = 4;
        $Verify->useNoise = false;
        $Verify->entry(1);
    }

    /**
     * Author:阿耀王子
     * 登录
     */
    public function signin()
    {
        $this->judge();

        $this->display();
    }


    /**
     * Author:阿耀王子
     * 登录验证
     */
    public function signin_msg()
    {


        $map['email'] = $_POST['user'];
        $map['phone'] = $_POST['user'];
        $map['_logic'] = 'OR';


        $pwd = md5($_POST['pwd']);


        $m = M("User");
        $sel = $m->where($map)->find();


        if ($sel) {

            if ($pwd == $sel['password']) {


                $msg = '{
                                 "errcode":"3",
                                 "status":"ok",
                                 "msg":"登录成功！"
                             }';
                $msg = json_decode($msg, true);

                $account['uid'] = $sel['uid'];
                $account['user_name'] = $sel['user_name'];
                $account['email'] = $sel['email'];
                $account['phone'] = $sel['phone'];

                session('account', $account);


                $this->ajaxReturn($msg);
                return false;
            } else {
                $msg = '{
                              "errcode":"2",
                              "status":"error",
                              "msg":"用户名/手机号或密码错误！"
                        }';
                $msg = json_decode($msg, true);

                $this->ajaxReturn($msg);
                return false;
            }


        } else {
            $msg = '{
                              "errcode":"2",
                              "status":"error",
                              "msg":"用户名/手机号或密码错误！"
                        }';
            $msg = json_decode($msg, true);

            $this->ajaxReturn($msg);
            return false;

        }


    }


    public function qrcode($url, $level = 3, $size = 4)
    {
        Vendor('phpqrcode.phpqrcode');
        $errorCorrectionLevel = intval($level);//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        //生成二维码图片
        $object = new \QRcode();
        $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }


    public function qr()
    {

        $address = "https://fir.im/hnp1?release_id=5992d710ca87a8675100079f";
        $level = $_GET['level'];
        $size = $_GET['size'];
        $this->qrcode($address, $level, $size);
    }

    public function download()
    {
        $this->judge();


        $url = "https://fir.im/hnp1?release_id=5992d710ca87a8675100079f";
        $android = 'https://fir.im/hnp1?utm_source=fir&utm_medium=qr';
        $this->assign("url", $url);
        $this->assign("android", $android);

        $this->display();
    }


    public function aa()
    {


        $m = M("User");

        $sel = $m->select();

        dump($_SESSION);

        $uid = $_SESSION['account']['uid'];

        $res = $m->where("uid=$uid")->find();
        dump($res);


        dump($uid);


        $data['uid'] = $uid;
        $data['area'] = "北大";

        $dd = $m->data($data)->save();

        dump($dd);


        $uid = $_SESSION['account']['uid'];

        $res = $m->where("uid=$uid")->find();
        dump($res);


        dump($sel);


    }


    /**
     * Author:阿耀王子
     * 登录验证
     */
    public function signin_msg2()
    {


        $code = $_POST['code'];
        $id = 1;

        $verify = new \Think\Verify();
        $res = $verify->check($code, $id);


        if ($res) {
            $map['user_name'] = $_POST['user'];
            $map['email'] = $_POST['user'];
            $map['_logic'] = 'OR';


            $pwd = md5($_POST['pwd']);


            $m = M("User");
            $sel = $m->where($map)->find();


            if ($sel) {

                if ($pwd == $sel['password']) {

                    if ($sel['admin'] == 0) {
                        $msg = '{
                                 "errcode":"4",
                                 "status":"error",
                                 "msg":"请先激活邮件，再登录！"
                             }';
                        $msg = json_decode($msg, true);

                        $this->ajaxReturn($msg);
                        return false;
                    }

                    $msg = '{
                                 "errcode":"3",
                                 "status":"ok",
                                 "msg":"登录成功！"
                             }';
                    $msg = json_decode($msg, true);

                    $account['user_name'] = $sel['user_name'];
                    $account['email'] = $sel['email'];

                    session('account', $account);


                    $this->ajaxReturn($msg);
                    return false;
                } else {
                    $msg = '{
                              "errcode":"2",
                              "status":"error",
                              "msg":"用户名/E-mail或密码错误！"
                        }';
                    $msg = json_decode($msg, true);

                    $this->ajaxReturn($msg);
                    return false;
                }


            } else {
                $msg = '{
                              "errcode":"2",
                              "status":"error",
                              "msg":"用户名/E-mail或密码错误！"
                        }';
                $msg = json_decode($msg, true);

                $this->ajaxReturn($msg);
                return false;

            }
        } else {
            $msg = '{
                       "errcode":"1",
                      "status":"error",
                      "msg":"验证码错误！"
                }';
            $msg = json_decode($msg, true);

            $this->ajaxReturn($msg);
            return false;

        }


    }


    /**
     * Author:阿耀王子
     * 注册
     */
    public function signup()
    {
        $this->judge();
        $this->display();


    }

    /**
     * Author:阿耀王子
     * Description:激活邮件
     */

    public function signup_active()
    {


        $dat = urlsafe_b64decode(urlsafe_b64decode(urlsafe_b64decode(urlsafe_b64decode($_GET['cc']))));
        $dat = json_decode($dat, true);


        $data['user_name'] = urlsafe_b64decode(urlsafe_b64decode($dat['uu']));//用户名
        $data['email'] = urlsafe_b64decode(urlsafe_b64decode($dat['ee']));//邮箱
        $data['create_time'] = urlsafe_b64decode(urlsafe_b64decode($dat['ct']));//邮箱

        $m = M("User");
        $res = $m->where($data)->find();


        if ($res) {

            $map['uid'] = $res['uid'];
            $map['admin'] = 1;

            $sav = $m->data($map)->save();
            if ($sav) {
                $this->success("邮件已激活，请登录！", "index.php?a=signin");
            } else {
                if ($res['admin'] == 1) {
                    $this->error("邮件已激活，请登录！", "index.php?a=signin");
                } else {
                    $this->error("邮件激活失败，请联系管理员！");
                }
            }

        } else {
            $this->error("非法登录！");
        }
    }


    /**
     * Author:阿耀王子
     * 注册验证
     */
    public function signup_msg()
    {


        $code = $_POST['code'];
        $id = 1;

        $verify = new \Think\Verify();

        if (isset($_POST["email"])) {
            $email_address = $_POST["email"];
            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if (preg_match($pattern, $email_address)) {


            } else {
                $msg = '{
                       "errcode":"2",
                      "status":"error",
                      "msg":"您输入的E-mail地址不合法！"
                }';

                $msg = json_decode($msg, true);


                $this->ajaxReturn($msg);
                return false;
            }
        }


        $res = $verify->check($code, $id);

        if ($res) {

//            $msg = '{
//                       "errcode":"0",
//                      "status":"ok",
//                      "msg":"验证码正确！"
//                }';
//            $msg = json_decode($msg,true);


            $m = M("User");
            $map['user_name'] = $_POST['user'];
            $map['email'] = $_POST['email'];
            $map['password'] = md5($_POST['pwd']);
            $map['admin'] = 0;
            $map['create_time'] = date("Y-m-d H:i:s", time());

            $condition['user_name'] = $_POST['user'];
            $sel = $m->where($condition)->find();

            if ($sel) {
                $msg = '{
                      "errcode":"3",
                      "status":"error",
                      "msg":"该用户名已存在！"
                }';
                $msg = json_decode($msg, true);
                $this->ajaxReturn($msg);
                return false;
            }

            $mail['email'] = $_POST['email'];
            $sel2 = $m->where($mail)->find();

            if ($sel2) {
                $msg = '{
                      "errcode":"4",
                      "status":"error",
                      "msg":"该E-mail已存在！"
                }';
                $msg = json_decode($msg, true);
                $this->ajaxReturn($msg);
                return false;
            }


            $res = $m->data($map)->add();

            if ($res) {

                $data['uu'] = urlsafe_b64encode(urlsafe_b64encode($_POST['user']));//用户名
                $data['ee'] = urlsafe_b64encode(urlsafe_b64encode($_POST['email']));//邮箱
                $data['vv'] = sha1(md5(urlsafe_b64encode(urlsafe_b64encode(rand(10000, 999999)))));//没有任何意义
                $data['ct'] = urlsafe_b64encode(urlsafe_b64encode($map['create_time']));//创建时间


                $data = urlsafe_b64encode(urlsafe_b64encode(urlsafe_b64encode(urlsafe_b64encode(json_encode($data)))));


                $to = $_POST['email'];
                $name = "";
                $subject = 'Tcash激活邮件';

                $link = "http://www.jifadu.cn/index.php?a=signup_active&ccvv=" . sha1(sha1(md5(sha1('ccvv')))) . "&cc=" . $data . "&vv=" . sha1(md5(sha1('ccandvv')));
                $a = "<a style='word-wrap:break-word;' href='" . $link . "'>" . $link . "</a>";


                $body = '您好，' . $_POST['user'] . '！<br/>' . "欢迎加入Tcash,请点击下面的链接来激活您的邮件。<br/>" . $a . "<br/>如果您的邮箱不支持链接点击，请将以上链接地址复制到您的浏览器中进行激活！" . "<br/><br/>如果不是您本人亲自操作，不要点击上面的链接，请忽略此邮件！";
                if (think_send_mail($to, $name, $subject, $body)) {
                    $msg = '{
                      "errcode":"6",
                      "status":"error",
                      "msg":"E-mail发送成功！"
                      }';
                    $msg = json_decode($msg, true);
                    $this->ajaxReturn($msg);
                    return false;
                } else {
                    $msg = '{
                      "errcode":"7",
                      "status":"error",
                      "msg":"E-mail发送失败！"
                      }';
                    $msg = json_decode($msg, true);
                    $this->ajaxReturn($msg);
                    return false;
                }


            } else {
                $msg = '{
                      "errcode":"5",
                      "status":"error",
                      "msg":"数据添加失败！"
                }';
                $msg = json_decode($msg, true);
                $this->ajaxReturn($msg);
                return false;
            }


        } else {

            $msg = '{
                       "errcode":"1",
                      "status":"error",
                      "msg":"验证码错误！"
                }';
            $msg = json_decode($msg, true);

            $this->ajaxReturn($msg);
            return false;

        }

    }


}