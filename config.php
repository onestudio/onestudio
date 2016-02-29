<?php
//是否是 sae安装(新浪sae安装必须定义)
define('SAE',1);
//mysql database address
define('DB_HOST', SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT);
//mysql database user
define('DB_USER', SAE_MYSQL_USER);
//database password
define('DB_PASSWD', SAE_MYSQL_PASS);
//database name
define('DB_NAME', SAE_MYSQL_DB);
//database prefix
define('DB_PREFIX','emlog_');
//sae的Storage域名
define('StorageDomain', 'emlog');
//auth key 可以自由填写
define('AUTH_KEY','AD63968c6556110de9588aa7fbeb2531ed');
//cookie name 可以自由填写
define('AUTH_COOKIE_NAME','EM_AUTHCOOKIE_NZGA0nWVIrPccNN8F8Yet9jpBG0dsf2S');
