<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hello; //追加
use App\Models\Test; //追加
use App\Models\Form; //追加

class IndexController extends Controller
{
  public function index(){
    $hello = 'Hello Controller';
    return view('welcome', compact('hello'));
  }

  public function getHelloData(){
    $hello = Hello::first()->greeting;//DBからデータを受け取る
    // $tests = Test::first()->test_string;
    $tests = Test::get();
    // dd($tests);

    $arr = [0, 1, 2, 3];
    foreach($arr as $value){
      echo $value;
    }// 0 1 2 3


    return view('welcome', compact('hello', 'tests'));
  }

  public function showform(){
    return view('form');
  }

  public function formtest(Request $request){
    $datas = $request->all();
    // dd($datas, $datas['title'], $datas['body']);

    // Form::insert([
    //   'title' => $datas['title'],
    //   'body' => $datas['body'],
    // ]);

    Form::updateOrCreate([
      'title' => $datas['title'],
    ], [
      'body' => $datas['body'],
    ]);
    return back();
  }
}
