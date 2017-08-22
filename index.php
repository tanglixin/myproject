<?php

    //设置当前地区时间
    date_default_timezone_set("PRC");

    //定义当前项目目录
    define("ROOT_PATH",__DIR__);

    //定义core目录
    define("CORE",ROOT_PATH."/core");

    //定义app目录
    define("APP",ROOT_PATH."/app");

    //定义调试模式
    define("DEBUG",TRUE);

    if(DEBUG == TRUE){
    	ini_set("display_error","On");
    }else{
    	ini_set("display_error","Off");
    }

    //加载公共方法
    include CORE."/common/functions.php";

    //加载框架引导类
    include CORE."/common/bootstrap.php";

    //自动加载类
    spl_autoload_register("autoload");

    // \core\common\bootstrap::run();

   
    //自动加载类
    function autoload($class){

        $file = $class.".php";         
        $files = str_replace("\\","/",$file);
      
        include $file;
    }

    $a = new \core\lib\route();

    // $a->test();

