<?php
include "app/models/Post.php";
class PostRepository{
    //CRUD - posts table
    public function getAllPosts(){
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $conn = new PDO("mysql:host=localhost;dbname=flexbook", 'root', 'abc');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //2. Thực hiện truy vấn
            $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 10 ";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $stmt->execute(); //Thực thi đi >>> Nếu có kết quả trả về, nó sẽ lưu vào #stmt
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //            $result = $stmt->fetch(); >> Chỉ lấy ra 1 bản ghi mỗi lần chạy
            $result = $stmt->fetchAll(); //>> Lấy ra tất cả >>> Mảng các Mảng
            //            Chuyển đổi Bản ghi (Mảng thông thường) sang Đối tượng: Post
            $posts = [];
            foreach($result as $row){
//                echo $row['post_id'];
                $post = new Post($row['post_id'], $row['content'], $row['post_image'],$row['user_id'],$row['created_at'],'' );
//                echo $post->getPostId();
//                $posts[] = $post;
                array_push($posts, $post);
            }
            //4. Đóng kết nối
            $conn = null;
            //Trả về Kết qủa cho HÀM
            return $posts;
        } catch(PDOException $e) {
            return null;
        }

    }

}