<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 class UserController extends Controller

 {
     public function __construct(){

     }
     public function blog(){
         return view('blog');
     }
     public function login(){
        return view('login');
     }
     public function blogpost(){
        return view('blog-post');
    }
    public function register(){
        return view('register');
    }
    public function getAuthLogin(){
        return view('login');
    }
    public function postAuthLogin(){
        return view('login');
    }
 }