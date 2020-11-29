<?php
/**
 * File Name: core/View.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: 2020年11月29日 星期日 22时42分08秒
 */
namespace core;
class View {
    // 模版文件
    protected $file;
    // 模版变量
    protected $vars = [];

    public function make($file)
    {
        $this->file = 'view/'.$file.'.html';
        return $this;
    }

    public function with($name, $value)
    {
        $this->vars[$name] = $value;
        return $this;
    }

    public function __toString()
    {
        extract($this->vars);
        include $this->file;
        return '';
    }
}
