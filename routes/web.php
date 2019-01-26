<?php
// ----------------------注意----------------------
// 1、路由区分大小写

// 后台
// 加上back前缀
Route::group(['prefix'=>'back','namespace'=>'Admin'],function(){

	Route::get('/','IndexController@index')->name('admin');
	// 分页
	Route::get('/datatables','IndexController@datatables')->name('admin.datatables');
	// 注册
	Route::get('/signup','IndexController@signup')->name('admin.signup');
	// 上传
	Route::get('/upload','IndexController@upload')->name('admin.upload');
	// 上传修改 
	// 必选参数
	Route::get('/uploadedit/{flag?}','IndexController@uploadedit')->name('admin.uploadedit');

	Route::get('/datatableseditable','IndexController@datatableseditable')->name('admin.datatableseditable');

	Route::get('/login','IndexController@login')->name('admin.login');

	// 无刷新分页
	Route::get('/page','IndexController@page')->name('admin.page');
});

// 如果你的完整控制器类是 App\Http\Controllers\Photos\AdminController，则可以像这样注册路由：
Route::get('foo', 'Photos\AdminController@method');


Route::any('/','IndexController@index');

 // 如果你想要定义一个只处理一个动作的控制器，可以在这个控制器中定义 __invoke 方法
// 路由时候也不需要定义方法
Route::get('user', 'UserController');


// 测试Input::get()
Route::get('/TestInput','testInputController@test');

// 登录认证
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
