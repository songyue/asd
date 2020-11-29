<?php
/**
 * File Name: core/Bootstrap.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: 2020年11月29日 星期日 22时25分57秒
 */
namespace core;
Class Bootstrap
{
    public static function run()
    {
        self::parseUrl();
    }

    public static function parseUrl()
    {
        if(isset($_GET['s'])){
            $info = explode("/", $_GET['s']);
            $class = '\web\controller\\'.ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class ="\web\controller\Index";
            $action = "show";
        } 
        echo (new $class)->$action();
    }
}
