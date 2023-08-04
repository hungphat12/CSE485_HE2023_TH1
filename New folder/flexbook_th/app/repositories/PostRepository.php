<?php
include "app/models/Post.php";

// class PostRepository{
    //CRUD - posts table
    // public function getAllPosts(){
    //     //Kết nối tới CSDL
    //     //Lấy ra dữ liệu ở dạng bản ghi và chuyển sang model Post
    //     $post1 = new Post(1,'Nôi dung post 1', '',1,'28/7/23','');
    //     $post2 = new Post(1,'Nôi dung post 1', '',1,'28/7/23','');
    //     $posts = [$post1, $post2];
    //     return $posts;
    //}
    try {
        $conn = new PDO("mysql:host=localhost;dbname:fb_clone",'root', '');
        $sql = "SELECT * FROM posts";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMonde(PDO::FETCH_ASSOC);
        $result = $stmt->fetcAll();
        $posts = [];
        foreach($result as $row){
            $posts = new Post($row['post_id'], $row['content'], $row['post_image'], $row['user_id'],$row['created_at'], updateAt:'');
            array_push($posts, $post);
        }

    }
//}