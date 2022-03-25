<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class EnsureTokenlsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // if ($request->input ('pass') == 'canh'){
        //     return redirect('user2');

        // }elseif ($request->input ('pass') == 'admin') {
        //         return redirect('admin');
        // }elseif ($request->input ('pass') == '111') {
        //         return redirect('user');
        // }
        // return $next($request);

        if ($request->input ('pass') !== 'canh'){
            return redirect('user2');
        }
        return $next($request);



        // if ($request->input ('pass') == 'canh'){
        //     return redirect('admin');
        // }else if ($request->input ('user') == '123'){
        //     return redirect('user');
        // }else {
        //     return redirect('user2');
        // }

        // elseif ($request->input ('user') !== '123') {
        //     return redirect('user2');
        // }
    }
}