<?php
/**
 * File Name: web/controller/Index.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: 2020年11月29日 星期日 13时16分43秒
 */
namespace web\controller;
use core\View;

class Index {

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
    public function show(){

        return $this->view->make('index')->with('version', 'asd v1.0');
    }

    public function post()
    {
        echo 'post action';
    }
}
