<?php
//配置文件
return [
	// 微信设置
    'wx_appid' => 'wx1ef9723a0294a897',
    'wx_secret' => 'a240c29466ab2b032e289b739c9968de',
    'wx_login_url' => "https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",

    // 加密设置
    'app_secret' => '',
    'word_secret' => '',
    'str_secret' => '',

    // 其他设置
    'default_return_type' => 'json', // 默认返回类型
    'exception_handle' => '\\app\\api\\exception\\ExceptionHandle', //自定义异常捕获类
];
