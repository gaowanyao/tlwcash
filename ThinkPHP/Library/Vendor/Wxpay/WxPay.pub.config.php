<?php
/**
* 	配置账号信息
*/

class WxPayConf_pub
{
	//=======【基本信息设置】=====================================
	//微信公众号身份的唯一标识。审核通过后，在微信发送的邮件中查看
//    const APPID = '{appid}';
    const APPID = 'wxcf2ed1b2b6a5ad22';
	//受理商ID，身份标识
//    const MCHID = '{MCHID}';
    const MCHID = '1266322701';
	//商户支付密钥Key。审核通过后，在微信发送的邮件中查看
//    const KEY = '{商户支付密钥Key}';
    const KEY = '1266322701';
	//JSAPI接口中获取openid，审核后在公众平台开启开发模式后可查看
//    const APPSECRET = '{APPSECRET}';
    const APPSECRET = 'shendahaixujianyouzhujiasheng007';
//    const JS_API_CALL_URL = 'http://$_SERVER[HTTP_HOST]/publicfounding/index' ;
    const JS_API_CALL_URL = 'http://zhujiasheng.chinacloudapp.cn/publicfounding/index.php';


	
	const SSLCERT_PATH = '{$path}/cacert/apiclient_cert.pem';
	const SSLKEY_PATH = '{$path}/cacert/apiclient_key.pem';

//    const NOTIFY_URL = 'http://$_SERVER[HTTP_HOST]/publicfounding/notify';
    const NOTIFY_URL = 'http://zhujiasheng.chinacloudapp.cn/publicfounding/notify';
	const CURL_TIMEOUT = 60;
}

	
?>