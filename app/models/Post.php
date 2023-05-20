<?php
    class Post{
        private $db;
        public function __construct()
        {
            $this->db = new Database; //remember to load it in the controller
        }
        public function getPosts(){
            $this->db->query('SELECT * FROM post');
            $results = $this->db->resultArray();
            return $results;
        }
        // also you have to call the above model from the controller
    }
?>