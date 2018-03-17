<?php
/*
 * 项目公共配置
 *
 */
return array(

	/*加载额外配置文件*/
	'LOAD_EXT_CONFIG' 		=> 'db',		
	'APP_AUTOLOAD_PATH'     => '@.ORG',
	
	'OUTPUT_ENCODE'         => true, 			//页面压缩输出
	
	/*URL配置*/
	'URL_MODEL' 			=> '0',
	
	/*分组配置*/
	'APP_GROUP_LIST' 		=> 'Index,Group,Meal,User,Merchant,System,Lottery,WapMerchant,House', 	//项目分组设定
	'DEFAULT_GROUP' 		=> 'Index', 			//默认分组
	
	/*系统变量名称设置*/
	'VAR_MODULE'  			=> 'c',				//将系统默认的m改为c
	
	/*Cookie配置*/
	'COOKIE_PATH'           => '/',     		// Cookie路径
    'COOKIE_PREFIX'         => '',      		// Cookie前缀 避免冲突
	
	/*定义模版标签*/
	'TMPL_L_DELIM'   		=> '{',		//模板引擎普通标签开始标记
	'TMPL_R_DELIM'			=> '}',				//模板引擎普通标签结束标记
	'TMPL_TEMPLATE_SUFFIX'	=> '.php',			//默认模板文件后缀
	
	/*常用文件定义*/
	'JQUERY_FILE' 			=> 'http://libs.baidu.com/jquery/1.7.0/jquery.min.js',				// Jquery 文件
	'JQUERY_FILE_190' 		=> 'http://libs.baidu.com/jquery/1.9.0/jquery.min.js',				// Jquery 文件 1.9.0
	
	/*SESSION*/
	'SESSION_AUTO_START'    => false,
	/*跳转的模板文件*/
	'TMPL_ACTION_SUCCESS'   => TMPL_PATH.'error.php',
	'TMPL_ACTION_ERROR'     => TMPL_PATH.'error.php',
	
	/*缓存*/
	'DATA_CACHE_SUBDIR'		=> true,
	'DATA_PATH_LEVEL'		=> 2,
	
	'VAR_FILTERS' => 'arr_htmlspecialchars',
	
	'TAGLIB_PRE_LOAD' => 'pigcms' ,
	'URL_ROUTER_ON'   => true, //开启路由
    // 'URL_CASE_INSENSITIVE' =>true, //不区分URL大小写的解决方案
    'URL_ROUTE_RULES' => array( //定义路由规则 
        'index'    => 'Index/index',
        'pinpai'    => 'Index/pinpai',
        'food'    => 'Index/food',
        'news'    => 'Index/news',
        'tuiguang'    => 'Index/tuiguang',
        'lianxi'    => 'Index/lianxi',
        'detail/:id'    => 'Index/detail',
        'zhaoshang'    => 'Index/zhaoshang',
        'addclick'    => 'Index/addclick',
        'yiqicha'    => 'Index/yiqicha',
        'yqc'    => 'Index/yqc',
        'yqc1'    => 'Index/yqc1',
        'wap'    => 'Index/wap',
    ),
	
);
?>