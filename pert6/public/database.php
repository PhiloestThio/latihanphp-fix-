<?php
	//1. membuat koneksi
	$connection = mysqli_connect("localhost", "root", "", "widget_corp");
	
	//2. test jika koneksi gagal
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
	);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
	
	</body>
</html>

<?php
	//5. menutup koneksi database
	mysqli_close($connection);
?>