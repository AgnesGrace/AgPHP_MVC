<?php
class Pages extends Controller{
    public $postModel;
    public function __construct(){
        // Loading the Post model from models/Post
        $this->postModel = $this->model('Post');
        
    }
    public function index(){
        $post = $this->postModel->getPosts();
        $data = [
            'title'=>'welcome Guest',
            'post'=>$post,
        ];
       $this->view('pages/index', $data);
    }

    public function about(){
        $data = ['title'=>'About Us'];
        $this->view('/pages/about', $data);
       
    }
    public function me(){
        echo 'me';
    }
    
}