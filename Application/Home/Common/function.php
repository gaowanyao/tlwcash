<?php


function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null) {
    $config = C('THINK_EMAIL');
    vendor('PHPMailer.class#phpmailer'); //从PHPMailer目录导class.phpmailer.php类文件
    vendor('SMTP');
    $mail = new PHPMailer(); //PHPMailer对象
    $mail->CharSet = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP(); // 设定使用SMTP服务
    $mail->SMTPDebug = 0; // 关闭SMTP调试功能
// 1 = errors and messages
// 2 = messages only
    $mail->SMTPAuth = true; // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl'; // 使用安全协议
    $mail->Host = $config['SMTP_HOST']; // SMTP 服务器
    $mail->Port = $config['SMTP_PORT']; // SMTP服务器的端口号
    $mail->Username = $config['SMTP_USER']; // SMTP服务器用户名
    $mail->Password = $config['SMTP_PASS']; // SMTP服务器密码
    $mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);
    $replyEmail = $config['REPLY_EMAIL'] ? $config['REPLY_EMAIL'] : $config['FROM_EMAIL'];
    $replyName = $config['REPLY_NAME'] ? $config['REPLY_NAME'] : $config['FROM_NAME'];
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->AltBody = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";
    $mail->MsgHTML($body);
    $mail->AddAddress($to, $name);
    if (is_array($attachment)) { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    return $mail->Send() ? true : false;
//    return $mail->Send() ? true : $mail->ErrorInfo;
}


//URL安全的字符串编码：
function urlsafe_b64encode($string) {
    $data = base64_encode($string);
    $data = str_replace(array('+','/','='),array('-','_',''),$data);
    return $data;
}

//URL安全的字符串解码：
function urlsafe_b64decode($string) {
    $data = str_replace(array('-','_'),array('+','/'),$string);
    $mod4 = strlen($data) % 4;
    if ($mod4) {
        $data .= substr('====', $mod4);
    }
    return base64_decode($data);
}

function cutstr_html($string, $sublen){

    $string = strip_tags($string);

    $string = preg_replace ('/\n/is', '', $string);

    $string = preg_replace ('/ |　/is', '', $string);

    $string = preg_replace ('/&nbsp;/is', '', $string);

    preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $t_string);

    if(count($t_string[0]) - 0 > $sublen) $string = join('', array_slice($t_string[0], 0, $sublen))."…";

    else $string = join('', array_slice($t_string[0], 0, $sublen));

    return $string;

}
















class Translate {
    /**
     * 支持的语种
     * @var ArrayAccess
     */
    static $Lang = Array (
        'auto' => '自动检测',
        'ara' => '阿拉伯语',
        'de' => '德语',
        'ru' => '俄语',
        'fra' => '法语',
        'kor' => '韩语',
        'nl' => '荷兰语',
        'pt' => '葡萄牙语',
        'jp' => '日语',
        'th' => '泰语',
        'wyw' => '文言文',
        'spa' => '西班牙语',
        'el' => '希腊语',
        'it' => '意大利语',
        'en' => '英语',
        'yue' => '粤语',
        'zh' => '中文',
        'cht' => '中文繁体',
    );
    /**
     * 获取支持的语种
     * @return array 返回支持的语种
     */
    static function getLang() {
        return self::$Lang;
    }
    /**
     * 执行文本翻译
     * @param string $text 要翻译的文本
     * @param string $from 原语言语种 默认:中文
     * @param string $to 目标语种 默认:英文
     * @return boolean string 翻译失败:false 翻译成功:翻译结果
     */
    static function exec($text, $from = 'zh', $to = 'en') {
        // http://fanyi.baidu.com/v2transapi?from=zh&query=%E7%94%A8%E8%BD%A6%E8%B5%84%E8%AE%AF&to=fra
        $url = "http://fanyi.baidu.com/v2transapi";
        $data = array (
            'from' => $from,
            'to' => $to,
            'query' => $text
        );




//        dump($data);
        if($data['to'] == 'zh'){
            return $data['query'];
        }

        if($data['to'] == 'en'){

            if($data['query'] == "多宝金豆"){
                return "DBCoin";
            }
        }


        $data = http_build_query ( $data );
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_REFERER, "http://fanyi.baidu.com" );
        curl_setopt ( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:37.0) Gecko/20100101 Firefox/37.0' );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_TIMEOUT, 10 );
        $result = curl_exec ( $ch );
        curl_close ( $ch );

        $result = json_decode ( $result, true );

        // 出错状态码 999
        if ($result ['error']) {
//        dump($result);

            if($result['to'] == "zh"){
                return $result['query'];
            }
            return false;
        }

//        var_dump($result);
        return $result ['trans_result'] ['data'] ['0'] ['dst'];
    }
}







?>