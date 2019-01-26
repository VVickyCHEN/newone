#新特性系列之新的 URL 生成语法

* 一、$url = action([IndexController::class, 'index']);
dd($url);die;

* 二、url()->current();

# 强大的artisan命令
创建新项目

* 方法一：在www目录下，敲 laravel new+名称（`有可能会缺少vendor目录`）

* 方法二：

**_第一步_**：如果之前已经安装过旧版本的 Laravel 安装器，需要更新后才能安装最新的 Laravel 5.7 框架应用
composer global update

**_第二步_**：在终端中通过 Composer 的 create-project 命令来安装 Laravel 应用：
composer create-project --prefer-dist laravel/laravel+名称

#登录认证

在新安装的 Laravel 应用下运行 php artisan make:auth（生成文件） 和 php artisan migrate（生成数据库），这两个命令会生成用户登录注册所需要的所有东西****