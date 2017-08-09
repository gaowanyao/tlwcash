<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }


    public function message(){

        if(empty($_SESSION['user']) || !isset($_SESSION['user'])){
            $this->error("请登录","index.php?&m=admin&a=login");
        }else{

            if($_SESSION['user']['admin'] == 0){
                $this->error("您还不是管理员，请联系管理员获取权限后再登录","index.php?&m=admin&a=login");
            }else{

                $uid = $_SESSION['user']['uid'];
                $m = M("Admin");

                $sel = $m->where("uid=%s",$uid)->field("uid,user_name,email,admin,create_time")->find();

                if($sel['admin'] == 0){
                    $this->error("您还不是管理员，请联系管理员获取权限后再登录","index.php?&m=admin&a=login");
                }else{
                    $_SESSION['user'] = $sel;

//                    dump($_SESSION);

                }

            }

        }

    }




    public function logout(){


        session_unset();//清除变量

        session_destroy();

        if(!isset($_SESSION[''])){
            $this->success("成功退出，欢迎下次登录!","index.php?&m=admin&a=login");
        }else{
            $this->error("退出异常!");

        }

    }






    //注册信息
    public function register_msg(){

        $data['user_name'] = $_POST['username'];
        $data['password'] = md5($_POST['password']);

        $m = M("Admin");


        $map['user_name'] = $_POST['username'];
        $sel = $m->where($map)->find();



        if(!$sel){
            $data['create_time'] = date("Y-m-d H:i:s");

            $res = $m->add($data);
            if($res){
                $this->success("注册成功,请登录",'index.php?&m=admin&a=login');
            }else{
                $this->error("注册失败");
            }
        }else{
            $this->error("该用户已存在");
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
        $data['password'] = md5($_POST['password']);

        $m = M("Admin");


        $sel = $m->where($data)->field("uid,user_name,email,admin,create_time")->find();
        if($sel){

            if($sel['admin'] == 0){
                    $this->error("您还不是管理员，请联系管理员获取权限后再登录","index.php?&m=admin&a=login");
            }

            $_SESSION['user'] = $sel;


            $this->success("登录成功",'index.php?&m=admin&a=news');

        }else{
            $this->error("登陆失败，请检查用户名和密码");
        }

    }


    public function delete_user(){
        $this->message();
        $m = M("User");
        $id = $_GET['id'];

        $res = $m->where("uid=$id")->delete();

        if($res){
            $this->success("该用户已删除!");
        }else{
            $this->success("删除失败!");
        }

    }


    //删除管理员
    public function delete_admin(){

        $this->message();
        $m = M("Admin");

        $uid = $_GET['id'];

        if($uid == $_SESSION['user']['uid']){
            $this->error("您没有权限删除自己!");
        }else{
            $sel = $m->where("uid=%s",$uid)->field("uid,admin")->find();

            if($sel['admin'] != 9999){


                if($_SESSION['user']['admin'] == 999 && $sel['admin'] == 999){  //只能删除普通用户
                        $this->error("您没有权限删除该用户！！！");
                }

                if($_SESSION['user']['admin '] == 999 && $sel['admin'] == 0){  //只能删除普通用户
                    $res = $m->where("uid=%s",$uid)->delete();
                    if($res){
                        $this->success("成功删除该用户!");
                    }else{
                        $this->error("删除该用户失败！！！");
                    }

                }

                if($_SESSION['user']['admin'] == 9999){  //只能删除管理员和普通用户
                    $res = $m->where("uid=%s",$uid)->delete();
                    if($res){
                        $this->success("成功删除该用户!");
                    }else{
                        $this->error("删除该用户失败！！！");
                    }

                }





            }else{
                $this->error("您没有权限删除该用户!");
            }

        }



    }

    //取消管理员
    public function cansel_admin(){
        $this->message();
        $m = M("Admin");

        $uid = $_GET['id'];

        $sel = $m->where("uid=%s",$uid)->field("uid,admin")->find();

        if($sel['admin'] == 9999){
            $this->error("您没有权限取消该用户的管理员权限!");
        }else if($sel['admin'] == 999){

            if($uid == $_SESSION['user']['uid']){
                $this->error("您不能取消自己的管理员权限！！！");

            }else{
                if($_SESSION['user']['admin'] == 999){
                    $this->error("您没有权限取消该用户的管理员权限!");
                }else{
                    $data['uid'] = $uid;
                    $data['admin'] = 0;
                    $res = $m->data($data)->save();
                    if($res){
                        $this->success("已取消该用户的管理员权限！");
                    }else{
                        $this->error("取消该用户的管理员权限失败！！！");
                    }
                }

            }


        }else if($sel['admin'] == 0){
            $this->error("该用户还不是管理员!");
        }





    }


    public function set_admin(){

        $this->message();

        if($_SESSION['user']['admin'] == 9999 || $_SESSION['user']['admin'] == 999){
            $m = M("Admin");
            $uid = $_GET['id'];
            $sel = $m->where("uid=%s",$uid)->field("uid,admin")->find();

            if($sel['admin'] == 999 || $sel['admin'] == 9999){

                if($_SESSION['user']['uid'] == $uid){
                    $this->error("您已是管理员!");
                }else{
                    $this->error("该用户已是管理员!");
                }

            }else{
                $data['uid'] = $uid;
                $data['admin'] = 999;
                $res = $m->data($data)->save();
                if($res){
                    $this->success("已设置该用户为管理员，请通知对方！");
                }else{
                    $this->error("设置该用户的管理员权限失败！！！");
                }
            }

        }else{
            $this->error("您没有权限，设置管理员！");
        }

    }



    public function personal_msg(){


        $this->message();
        $m = M("Admin");


        if(!empty($_POST['uid']) && isset($_POST['uid'])){
            $data = $_POST;

            $id = $data['uid'];

            if(isset($_POST['user_name']) || isset($_POST['password'])){

                $res = $m->where("uid=$id")->find();

                if(isset($_POST['user_name']) && !isset($_POST['password'])){  //用户名存在 密码不存在

                    if($res['user_name'] == $data['user_name']){
                        $this->error("请先修改用户名后再提交!!!");
                    }else{
                        $result = $m->data($data)->save();
                        if($result){







                            $this->success("用户名修改成功!");
                        }else{
                            $this->error("用户名修改失败!");
                        }

                    }

                }else{   //用户名不存在 密码存在

                    $data['password'] = md5($_POST['password']);

                    if(isset($_POST['password']) && !isset($_POST['user_name'])) {  //用户名存在 密码不存在
                        if($res['password'] == $data['password']){
                            $this->error("请先修改密码后再提交!!!");
                        }else{
                            $result = $m->data($data)->save();
                            if($result){
                                $this->success("密码修改成功!");
                            }else{
                                $this->error("密码修改失败!");
                            }

                        }
                    }else{

                        if($res['password'] == $data['password'] && $res['user_name'] == $data['user_name']){
                            $this->error("请修改信息后再提交!!!");
                        }else{
                            $result = $m->data($data)->save();
                            if($result){
                                $this->success("信息修改成功!");
                            }else{
                                $this->error("信息修改失败!");
                            }

                        }



                    }

                }


            }else{
                $this->error("请修改信息后再提交！！！");
            }


        }




    }

    //    用户列表
    public function user(){


        $this->message();
        $m = M("User");


        $list = $m->order("create_time desc")->select();

        $this->assign("list",$list);

        $this->display();


    }

//    管理员列表
    public function admin(){


        $this->message();
        $m = M("Admin");


        $list = $m->order("create_time desc")->select();

        $this->assign("list",$list);

        $this->display();


    }

    //    个人信息
    public function personal(){


        $this->message();

        if(!empty($_GET['id']) && isset($_GET['id'])){

            $id = $_GET['id'];
            if($_SESSION['user']['uid'] != $id){
                $this->error("您只能修改自己的个人信息！！！");
            }


            $m = M("Admin");

            $id = $_GET['id'];
            $list = $m->where("uid=$id")->find();

            $this->assign("admin",$list);
            $this->display();

        }




    }

    public function news(){


        $this->message();
        $m = M("Article");

        $list = $m->order("create_time desc")->select();

        $tag = $list['tag'];



        $this->assign("list",$list);

        $this->display();


    }

    public function update_article(){
        $this->message();


        if(!empty($_GET['id'])){
            $m = M("Article");

            $id = $_GET['id'];

            $article = $m->where("id=%s",$id)->find();

    

            $this->assign("article",$article);

            $this->display();

        }



    }


    public function delete_article(){
        $this->message();

        if(!empty($_GET['id']) && isset($_GET['id'])){

            $m = M("Article");

            $id = $_GET['id'];

            $res = $m->where("id=%s",$id)->delete();

            if($res){
                $this->success("文章删除成功");
            }else{
                $this->error("文章删除失败");
            }


        }


    }


    public function  add_article(){
        $this->message();

        $this->display();

    }

    public function add_article_msg(){
        $this->message();


        $data = $_POST;

        $data['tag'] = explode(",",$data['tag']);
        $data['tag'] =array_unique($data['tag']);
        $data['tag'] = implode(",",$data['tag']);

        $data['create_time'] = date("Y-m-d H:i:s",time());

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/uploads/'; // 设置附件上传根目录
        $upload->savePath = 'article/'; // 设置附件上传（子）目录
// 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息

            if($upload->getError() == "没有文件被上传！"){

            }else{
                $this->error($upload->getError());
            }

        }else{// 上传成功
            foreach($info as $file){
                $data['article_picture'] = 'Public/uploads/'.$file['savepath'].$file['savename'];
            }
        }


        $m = M("Article");

        $res = $m->data($data)->add();

        if($res){
            $this->success("新增文章成功","index.php?&m=admin&a=news");
        }else{
            $this->success("新增文章失败");
        }




    }


    public function aa(){

        $a = "发射点,阿斯顿,发射点,阿斯顿,士大夫";
        $a = explode(",",$a);
        $a =array_unique($a);
        $a = implode(",",$a);
        dump($a);

    }


    public function update_article_msg(){

        $this->message();

        $data = $_POST;
        $data['tag'] = explode(",",$data['tag']);
        $data['tag'] =array_unique($data['tag']);
        $data['tag'] = implode(",",$data['tag']);


        $data['create_time'] = date("Y-m-d H:i:s",time());

//        dump($data);
//
//        return ;

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/uploads/'; // 设置附件上传根目录
        $upload->savePath = 'article/'; // 设置附件上传（子）目录
// 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息

            if($upload->getError() == "没有文件被上传！"){

            }else{
                $this->error($upload->getError());
            }

        }else{// 上传成功
            foreach($info as $file){
                $data['article_picture'] = 'Public/uploads/'.$file['savepath'].$file['savename'];
            }
        }


        $m = M("Article");

        $res = $m->data($data)->save();

        if($res){
            $this->success("修改文章成功","index.php?&m=admin&a=news");
        }else{
            $this->success("修改文章失败");
        }




    }


}