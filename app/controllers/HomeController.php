<?php

class HomeController extends Controller {
    public function index() {
        $this->view('home', [
            'title' => 'Welcome to the Home Page'
        ]);
    }
}
?>