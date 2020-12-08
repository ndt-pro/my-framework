<?php

namespace App\Controller;

use Core\Controller;

class HomeController extends Controller {

    public function index() {
        return response()->json([
            'welcome' => 'Toàn 2 đã sửa'
        ]);
    }

    public function getApiNoAuth() {
        echo "Use middleware";
    }

    public function getApiAuth() {
        echo "Do not use middleware";
    }
}