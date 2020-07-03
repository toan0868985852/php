<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class homecontroller extends BaseController{
    public function showWelcome(){
        return 'home controller';
    }

    public function showabout(){
        return view('test');
    }
}
