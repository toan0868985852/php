<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Tasks;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get('/', function () {
//    return view('welcome');
//});
//---------------T1908A-------------------
Route::get('home','homecontroller@showWelcome');
Route::get('about','homecontroller@showabout');

Route::get('profile/{name}', 'profilecontroller@showprofile');

Route::get('readAll',function (){
    $posts = Post::all();
    foreach ($posts as $p){
        echo $p->title. " ". $p->body;
        echo "<br>";
    }
});

Route::get('findID', function (){
    $posts = Post::where('id',2)
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();
    foreach ($posts as $p){
        echo $p->title. " ". $p->body;
        echo "<br>";
    }
});

Route::get('findID2', function (){
    $posts = Post::where('id','>=', 1)
        ->where('title','nguyen huy toan')
        ->where('body','like','%an%')
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();
    foreach ($posts as $p){
        echo $p->title;
        echo "<br>";
    }
});

//inset dữ liệu vào bảng trong database
Route::get('insertORM', function (){
    $p = new Post;
    $p->title = 'insertORM';
    $p->body = 'INSERTED done done ORM';
    $p->save();
});

//update dữ liệu vào bảng trong database
Route::get('updateORM', function (){
   $p = Post::where('id', 2)->first();
    $p->title = 'updateORM';
    $p->body = 'UPDATE DONE DONE';
    $p->save();
});

//delete dữ liệu vào bảng trong database
Route::get('deleteORM', function (){
     Post::where('id','>=', 3)
         ->delete();
});
//xóa dữ liệu bằng destroy id = 2,3,4
Route::get('destroyORM', function (){
    Post::destroy([2,3,4]);
});

//---------------T1908A-------------------

//---------------Thuchanh-T1908A---------

//show task Dashboard
Route::get('/', function () {
    $tasks = Tasks::orderBy('created_at','desc')->get();
    return view('tasks', [
        'tasks'=>$tasks
    ]);
});

//add new task
Route::post('/tasks',function (Request $request){
    //Validate Information
    $validator = Validator::make($request->all(),[
        'name' =>'required|max:255',
    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Tasks;
    $task->name = $request->name;
    $task->save();

    return redirect('/');

});
//delete task
Route::delete('/task/{task}',function ($id){
    Tasks::findOrFail($id)->delete();
    return redirect('/');
});

//---------------Thuchanh-T1908A---------
Route::get('laravelbai1',function (){
    echo "day la khoa hoc laravel ";
});

//truyền tham số
Route::get('hoten/{ten}',function ($ten){
    echo "ten cuar ban la: ".$ten;
});
//gán điều kiện
Route::get('laravel/{ngay}',function($ngay){
    echo "ngay: ".$ngay;
})->where(['ngay'=>'[0-9]+']);//chỉ cho truyền số từ 0-9

//định danh MyRoute cách 1
//Roure này được gọi bên contronller
Route::get('Route1',['as'=>'MyRoute',function(){
    echo "nguyen huy toan";
}]);


//gọi tên MyRoute
Route::get('goiten',function(){
    return redirect()->route('MyRoute');
});

//định danh MyRoute cách 2
Route::get('Route2',function(){
    echo "day la route2";
})->name('MyRoute2');

//gọi tên MyRoute2
Route::get('goiten2',function(){
    return redirect()->route('MyRoute2');
});

//group
Route::group(['prefix'=>'MyGroup'],function (){
    //gọi Route usre1: doman/MyGroup/user1
    Route::get('user1',function (){
        echo "User1";
    });
    //gọi Route usre2: doman/MyGroup/user2
    Route::get('user2',function (){
        echo "User2";
    });
    //gọi Route usre3: doman/MyGroup/user3
    Route::get('user3',function (){
        echo "User3";
    });
});
// gọi controller
Route::get('goiController','MyController@xinchao');

Route::get('thamso/{ten}','MyController@khoahoc');

//URL

Route::get('MyRequest','MyController@GetURL');


//gửi nhận dữ liệu với request
//muốn gọi một view lên thì phải return hàm view(tên của view đó);
Route::get('getForm',function (){
    return view('postForm');//postForm là file postForm.blade.php
});

//đẻ gọi được Route trong hệ thống thì phải gọi Route thông qua định danh của nó ví dụ ỏ đay là postForm
Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);

//cookie
Route::get('setCookie', 'MyController@setCookie');

Route::get('getCookie', 'MyController@getCookie');



//test
Route::get('test', function () {
    return view('test');
});

Route::get('users', function () {
    return 'User Screen';
})->name('user');

Route::get('product', function () {
    return 'Product Screen';
});

Route::get('news', function () {
    return 'News Screen';
});

Route::get('service', function () {
    return 'Service Screen';
});

Route::get('news/{id}', function ($id) {
    return "bài viết số ${id}";
});

Route::get('news/{id}/category/{category}', function ($id, $category) {
    return "bài viết số ${id}. categoryid: ${category}";
});

Route::get('uesr/{id}', function ($id){
    return "user ID: {$id}";
})->name('user.show');

Route::get('uesr/{id}/branch/{branchid}', function ($id, $branchid){
    return "user ID: {$id} - chi nhanh: {$branchid}";
})->name('user.show.branch');

