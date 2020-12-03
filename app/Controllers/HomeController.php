<?php

namespace App\Controller;

use Core\Controller;
use Core\DB;
use App\Model\Users;

class HomeController extends Controller {

    public function index() {
        // $id = DB::table("users")->insert([
        //     'username' => "test",
        //     'password' => "abcxyz"
        // ]);

        // $users = DB::table("users")->where(['username' => 'test'])->take(3)->get();


        // $result = DB::table('users')->where(['id' => 6])->delete();

        // $user = new Users();

        // $user->username = "new user";
        // $user->password = "new pass";

        // $result = $user->save();

        $users = Users::get();

        return response()->json($users);
    }

    public function getApiNoAuth() {
        echo "Không có middleware";
    }

    public function getApiAuth() {
        echo "Có middleware";
    }
}