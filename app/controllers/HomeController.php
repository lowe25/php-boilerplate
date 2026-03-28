<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        view('pages/index', [
            'title' => 'Home'
        ]);
    }
    
    // Add function here for future pages
}