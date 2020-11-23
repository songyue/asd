使用composer创建一个php框架

1.初始化项目 composer  
```
  Welcome to the Composer config generator



This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [songyue/test]: 包名
Description []: 包描述
Author [Yue Song <songyue118@gmail.com>, n to skip]: 作者信息
Minimum Stability []: dev 最小版本
Package Type (e.g. library, project, metapackage, composer-plugin) []: library  包类型 类，项目或者插件
License []: MIT  开源协议 

Define your dependencies. 依赖项配置

Loading config file /home/songyue/.config/composer/config.json
Loading config file /home/songyue/.config/composer/auth.json
Would you like to define your dependencies (require) interactively [yes]?no 是否以交互方式定义依赖项
Would you like to define your dev dependencies (require-dev) interactively [yes]? no 是否以交互方式定义依赖项

{
    "name": "songyue/test",
    "type": "library",
    "license": "MIT",
    "authors": [
        {
            "name": "Yue Song",
            "email": "songyue118@gmail.com"
        }
    ],
    "minimum-stability": "dev",
    "require": {}
}

Do you confirm generation [yes]?yes
```
查看当前目录文件 ls 
composer.json
查看文件内容
cat composer.json
{
    "name": "songyue/test",
    "type": "library",
    "license": "MIT",
    "authors": [
        {
            "name": "Yue Song",
            "email": "songyue118@gmail.com"
        }
    ],
    "minimum-stability": "dev",
    "require": {}
}

安装项目 composer install
ls
composer.json vendor


