<!DOCTYPE html>
<html>
<head>
	<title>Danh sách dữ liệu</title>
</head>
<body>
	<h1>Danh sách dữ liệu</h1>

	<?php
		// Kết nối với cơ sở dữ liệu
		$conn = mysqli_connect("localhost", "fb_clone", " ", "database");

		// Kiểm tra kết nối
		if (!$conn) {
			die("Kết nối thất bại: " . mysqli_connect_error());
		}

		// Lấy dữ liệu từ cơ sở dữ liệu
		$sql = "SELECT * FROM table_name";
		$result = mysqli_query($conn, $sql);

		// Hiển thị dữ liệu trên trang web
		if (mysqli_num_rows($result) > 0) {
			echo "<table>";
			echo "<tr><th>ID</th><th>Tên</th><th>Email</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td><a href='view.php?id=" . $row["id"] . "'>Chi tiết</a></td>";
				echo "<td><a href='edit.php?id=" . $row["id"] . "'>Sửa</a></td>";
				echo "<td><a href='delete.php?id=" . $row["id"] . "'>Xóa</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "Không có dữ liệu";
		}

		// Đóng kết nối
		mysqli_close($conn);
	?>

	<br>
	<a href="add.php">Thêm dữ liệu</a>
</body>
</html>
