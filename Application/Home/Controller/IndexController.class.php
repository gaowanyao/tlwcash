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

    /**
     * Author:阿耀王子
     * 所有判断验证部分及共有部分
     */
    public function judge(){



        if(!empty($_SESSION['account']) && isset($_SESSION['account'])){
            $this->assign("account","on");
        }else{
            $this->assign("account","off");
        }


        if($this->is_pc() == true){
            $this->assign("pc","pc");
        }else{
            $this->assign("pc","notpc");
        }


    }

    /**
     * Author:阿耀王子
     * 忘记密码
     */
    public function forgetpwd(){
        $this->judge();
        $this->display();

    }

    /**
     * Author:阿耀王子
     * 忘记密码处理
     */
    public function forgetpwd_msg(){


    }


    /**
     * 项目介绍
     * 项目优势
     * Tcash发行及使资金使用计划
     * Tcash ICO细则
     * 项目风险说明
     * 团队介绍
     * 免责申明
     */


    /**
     * Author:阿耀王子
     * 用户中心
     */
    public function account(){
        $this->judge();
        $this->display();

    }
    /**
     * Author:阿耀王子
     * 关于我们
     */
    public function about(){
        $this->judge();
        $this->display();

    }
    /**
     * Author:阿耀王子
     * 问题解答
     */
    public function faq(){
        $this->judge();
        $this->display();

    }

    /**
     * Author:阿耀王子
     * 产品特色
     */
    public function features(){
        $this->judge();
        $this->display();

    }


    /**
     * Author:阿耀王子
     * 主页
     */
    public function index(){



        $this->judge();

        $time = time();

        $end = strtotime("2017-08-15 20:00:00");

        $this->assign('end',$end);
        $this->assign('time',$time);

        $rest = $end -$time;
        $this->assign('rest',$rest);  //剩余时间


        $this->display();


    }

    /**
     * Author:阿耀王子
     * 是否是微信浏览器
     */
    function is_weixin(){
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
//            dump("weixin");
            return true;
        }else{
            //        dump("not weixin");
            return false;
        }

    }


    /**
     * Author:阿耀王子
     * 是否是pc浏览器
     */
    function is_pc(){
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $is_pc = (strpos($agent, 'windows nt')) ? true : false;
        return $is_pc;
    }

    /**
     * Author:阿耀王子
     * 退出
     */
    public function logout(){
        $res = session('account',null);

        $this->success("成功退出，欢迎下次登录","index.php");

    }

    /**
     * Author:阿耀王子
     * 验证码
     */
    public function ver(){
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
    public function signin(){


        $this->display();
    }


    /**
     * Author:阿耀王子
     * 登录验证
     */
    public function signin_msg(){





        $code = $_POST['code'];
        $id = 1;

        $verify = new \Think\Verify();
        $res = $verify->check($code, $id);





        if($res){
            $map['user_name'] = $_POST['user'];
            $map['email'] = $_POST['user'];
            $map['_logic'] = 'OR';


            $pwd = md5($_POST['pwd']);


            $m = M("User");
            $sel= $m->where($map)->find();


            if($sel){

                if($pwd == $sel['password']){

                    if($sel['admin'] == 0){
                        $msg = '{
                                 "errcode":"4",
                                 "status":"error",
                                 "msg":"请先激活邮件，再登录！"
                             }';
                        $msg = json_decode($msg,true);

                        $this->ajaxReturn($msg);
                        return false;
                    }

                    $msg = '{
                                 "errcode":"3",
                                 "status":"ok",
                                 "msg":"登录成功！"
                             }';
                    $msg = json_decode($msg,true);

                    $account['user_name'] = $sel['user_name'];
                    $account['email'] = $sel['email'];

                    session('account',$account);


                    $this->ajaxReturn($msg);
                    return false;
                }else{
                    $msg = '{
                              "errcode":"2",
                              "status":"error",
                              "msg":"用户名/E-mail或密码错误！"
                        }';
                    $msg = json_decode($msg,true);

                    $this->ajaxReturn($msg);
                    return false;
                }


            }else{
                $msg = '{
                              "errcode":"2",
                              "status":"error",
                              "msg":"用户名/E-mail或密码错误！"
                        }';
                $msg = json_decode($msg,true);

                $this->ajaxReturn($msg);
                return false;

            }
        }else{
            $msg = '{
                       "errcode":"1",
                      "status":"error",
                      "msg":"验证码错误！"
                }';
            $msg = json_decode($msg,true);

            $this->ajaxReturn($msg);
            return false;

        }


    }


    /**
     * Author:阿耀王子
     * 注册
     */
    public function signup(){

        $this->display();



    }

    /**
     * Author:阿耀王子
     * Description:激活邮件
     */

    public function signup_active(){



        $dat = urlsafe_b64decode(urlsafe_b64decode(urlsafe_b64decode(urlsafe_b64decode($_GET['cc']))));
        $dat = json_decode($dat,true);



        $data['user_name'] = urlsafe_b64decode(urlsafe_b64decode($dat['uu']));//用户名
        $data['email'] = urlsafe_b64decode(urlsafe_b64decode($dat['ee']));//邮箱
        $data['create_time'] = urlsafe_b64decode(urlsafe_b64decode($dat['ct']));//邮箱

        $m = M("User");
        $res = $m->where($data)->find();


        if($res){

            $map['uid'] = $res['uid'];
            $map['admin'] = 1;

            $sav = $m->data($map)->save();
            if($sav){
                $this->success("邮件已激活，请登录！","index.php?a=signin");
            }else{
                if($res['admin'] == 1){
                    $this->error("邮件已激活，请登录！","index.php?a=signin");
                }else{
                    $this->error("邮件激活失败，请联系管理员！");
                }
            }

        }else{
            $this->error("非法登录！");
        }
    }


    /**
     * Author:阿耀王子
     * 注册验证
     */
    public function signup_msg(){


        $code = $_POST['code'];
        $id = 1;

        $verify = new \Think\Verify();

        if ( isset($_POST["email"]) )
        {
            $email_address = $_POST["email"];
            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if ( preg_match( $pattern, $email_address ) )
            {


            }
            else
            {
                $msg = '{
                       "errcode":"2",
                      "status":"error",
                      "msg":"您输入的E-mail地址不合法！"
                }';

                $msg = json_decode($msg,true);


                $this->ajaxReturn($msg);
                return false;
            }
        }


        $res = $verify->check($code, $id);

        if($res){

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
            $map['create_time'] = date("Y-m-d H:i:s",time());

            $condition['user_name'] = $_POST['user'];
            $sel = $m->where($condition)->find();

            if($sel){
                $msg = '{
                      "errcode":"3",
                      "status":"error",
                      "msg":"该用户名已存在！"
                }';
                $msg = json_decode($msg,true);
                $this->ajaxReturn($msg);
                return false;
            }

            $mail['email'] = $_POST['email'];
            $sel2 = $m->where($mail)->find();

            if($sel2){
                $msg = '{
                      "errcode":"4",
                      "status":"error",
                      "msg":"该E-mail已存在！"
                }';
                $msg = json_decode($msg,true);
                $this->ajaxReturn($msg);
                return false;
            }



            $res = $m->data($map)->add();

            if($res){

                $data['uu'] = urlsafe_b64encode(urlsafe_b64encode($_POST['user']));//用户名
                $data['ee'] = urlsafe_b64encode(urlsafe_b64encode($_POST['email']));//邮箱
                $data['vv'] = sha1(md5(urlsafe_b64encode(urlsafe_b64encode(rand(10000,999999)))));//没有任何意义
                $data['ct'] = urlsafe_b64encode(urlsafe_b64encode($map['create_time']));//创建时间



                $data = urlsafe_b64encode(urlsafe_b64encode(urlsafe_b64encode(urlsafe_b64encode(json_encode($data)))));


                $to = $_POST['email'];
                $name = "";
                $subject = 'Tcash激活邮件';

                $link = "http://www.jifadu.cn/index.php?a=signup_active&ccvv=".sha1(sha1(md5(sha1('ccvv'))))."&cc=".$data."&vv=".sha1(md5(sha1('ccandvv')));
                $a = "<a style='word-wrap:break-word;' href='".$link."'>".$link."</a>";


                $body = '您好，'.$_POST['user'].'！<br/>'."欢迎加入Tcash,请点击下面的链接来激活您的邮件。<br/>".$a."<br/>如果您的邮箱不支持链接点击，请将以上链接地址复制到您的浏览器中进行激活！"."<br/><br/>如果不是您本人亲自操作，不要点击上面的链接，请忽略此邮件！";
                if(think_send_mail($to,$name,$subject,$body)){
                    $msg = '{
                      "errcode":"6",
                      "status":"error",
                      "msg":"E-mail发送成功！"
                      }';
                    $msg = json_decode($msg,true);
                    $this->ajaxReturn($msg);
                    return false;
                }else{
                    $msg = '{
                      "errcode":"7",
                      "status":"error",
                      "msg":"E-mail发送失败！"
                      }';
                    $msg = json_decode($msg,true);
                    $this->ajaxReturn($msg);
                    return false;
                }



            }else{
                $msg = '{
                      "errcode":"5",
                      "status":"error",
                      "msg":"数据添加失败！"
                }';
                $msg = json_decode($msg,true);
                $this->ajaxReturn($msg);
                return false;
            }





        }else{

            $msg = '{
                       "errcode":"1",
                      "status":"error",
                      "msg":"验证码错误！"
                }';
            $msg = json_decode($msg,true);

            $this->ajaxReturn($msg);
            return false;

        }

    }


}