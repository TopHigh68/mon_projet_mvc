<?php

class HomeController extends Controller {
    public function index() {
        $postModel = $this->model('Post');
        $posts = $postModel->getAllPosts();
        $this->view('home', ['posts' => $posts]);
    }
}