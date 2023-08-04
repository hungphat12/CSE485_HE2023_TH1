<?php
class UserRepository{

    public function checkLogin($user, $pass){
        //Mật khẩu lưu THÔ, chưa băm trong CSDL
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $conn = new PDO("mysql:host=localhost;dbname=flexbook", 'root', 'abc');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //2. Thực hiện truy vấn
            $sql = "SELECT username FROM users WHERE email=? AND password=?";
//            $sql = "SELECT username FROM users WHERE email=:e AND password=:p";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $stmt->bindParam('ss', $user, $pass);
            $stmt->execute(); //Thực thi đi >>> Nếu có kết quả trả về, nó sẽ lưu vào #stmt
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //            $result = $stmt->fetch(); >> Chỉ lấy ra 1 bản ghi mỗi lần chạy
            $result = $stmt->fetch(); //>> Lấy ra tất cả >>> Mảng các Mảng
            //            Chuyển đổi Bản ghi (Mảng thông thường) sang Đối tượng: Post

            //4. Đóng kết nối
            $conn = null;
            //Trả về Kết qủa cho HÀM
            if(count($result) > 0){
                return true;
            }else{
                return false;
            }
        } catch(PDOException $e) {
            return null;
        }
    }

    public function saveRegister($user){
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $conn = new PDO("mysql:host=localhost;dbname=flexbook", 'root', 'abc');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //2. Thực hiện truy vấn
            //Tạm thời bỏ qua kiểm tra
            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $stmt->bindParam('sss', $user->getUsername(), $user->getEmail(), $user->getPasssword() );

            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
            //4. Đóng kết nối
//            $conn = null;
            //Trả về Kết qủa cho HÀM
            return $posts;
        } catch(PDOException $e) {
            return null;
        }
    }

}

?>