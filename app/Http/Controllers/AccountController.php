<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class AccountController extends Controller
{
  //GET
  public function showEditForm(){
    return view('profileForm');
  }

  //POST
  public function profileEditConfirm(Request $request){
    $datas = $request->all();
    return view('profileConfirm', compact('datas'));
  }

  public function editProfile(Request $request){
    $datas = $request->all();
    //ここは来週ユーザーIDに変更します。
    $id = 1;
    //ここまで
    Profile::create([
      'id' => $id,
      'first_name' => $datas['first_name'],
      'last_name' => $datas['last_name'],
      'gender' => $datas['gender'],
      'birthday' => $datas['birthday'],
      'address_code' => $datas['address_code'],
      'address' => $datas['address'],
      'tel' => $datas['tel'],
      'email' => $datas['email'],
    ]);
    return redirect('/dashboard');
  }
}
