<?php 
include 'config.php';
if (isset($_POST['submit'])) {
	$finame = $_POST['firstname_input'];
	$laname = $_POST['lastname_input'];
	$email = $_POST['email_input'];
	$subject = $_POST['subject_input'];
	$message = $_POST['message_input'];

	$query_tambah = mysqli_prepare($koneksi, "INSERT INTO contact (firstname, lastname, email, subject, message) VALUES (?,?,?,?,?)");
	mysqli_stmt_bind_param($query_tambah, 'sssss', $finame, $laname, $email, $subject, $message);
	$sukses = mysqli_stmt_execute($query_tambah);
	if ($sukses) {
		header('Location:index.php?#contact-section');
	} else {
		echo "Error: ".mysqli_error($koneksi);
	}

}

 ?>