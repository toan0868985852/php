<html>
<body>

<a href="/phplaravel/bai1/public/users">User</a> |
<a href="/phplaravel/bai1/public/product">Product</a> |
<a href="/phplaravel/bai1/public/news">News</a> |
<a href="/phplaravel/bai1/public/service">Service</a> |
<hr>
<ul>
    <li><a href="/phplaravel/bai1/public/news/1/category/1">bài viết số 1</a></li>
    <li><a href="/phplaravel/bai1/public/news/2/category/2">bài viết số 2</a></li>
    <li><a href="/phplaravel/bai1/public/news/3/category/3">bài viết số 3</a></li>
    <li><a href="/phplaravel/bai1/public/news/4/category/4">bài viết số 4</a></li>
    <li><a href="/phplaravel/bai1/public/news/5/category/5">bài viết số 5</a></li>
</ul>
<hr>
<h2>route name trong laravel:route('name')</h2>
<ul>
    <li><a href="{{route('user')}}">User</a></li>
    <li><a href="{{route('user')}}">User</a></li>
    <li><a href="{{route('user')}}">User</a></li>
    <li><a href="{{route('user')}}">User</a></li>
    <li><a href="{{route('user')}}">User</a></li>
</ul>
<hr>
<h2>rout có tham số truyên vào</h2>
<ul>
    <li><a href="{{route('user.show', ['id' => 1]) }}">User detail</a></li>
    <li><a href="{{route('user.show', ['id' => 2]) }}">User detail</a></li>
    <li><a href="{{route('user.show', ['id' => 3]) }}">User detail</a></li>
</ul>

<ul>
    <li><a href="{{route('user.show.branch', ['id' => 1, 'branchid' => 1]) }}">User by branch</a></li>
    <li><a href="{{route('user.show.branch', ['id' => 2, 'branchid' => 2]) }}">User by branch</a></li>
    <li><a href="{{route('user.show.branch', ['id' => 3, 'branchid' => 3]) }}">User by branch</a></li>
</ul>
</body>
</html>

