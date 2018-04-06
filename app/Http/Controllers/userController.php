<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class userController extends Controller
{
    //
    // public function show(Request $request){
    // 	print_r($request->input('name'));
    // } buat nge test $request masuk engga


    //  public function show(Request $request){
    // 	$request->session()->put('name', $request->input('name'));
    // 	return view('about')->with('name', $request->session()->get('name'));
    // } buat ngambil session input user


    // public function show(Request $request){
    // 	$request->validate([
    // 		'name'=>'required|min:3',
    //         'password'=>'required|max:11'
    // 	]);
    // } validasi

    public function store(){
        
        $result = DB::table('test')->paginate(2);
        return view('page', ["data"=>$result]);
    }
}
