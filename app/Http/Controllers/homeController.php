<?php
namespace App\http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller

{
    public function show(){
        $title = 'Nhóm 1';
        return view('main', compact('title'));
    }
}