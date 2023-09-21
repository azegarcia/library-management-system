<?php 
include('dbcon.php');
session_start();
if (isset($_POST['submit'])){
	$pdf=$_FILES['pdf']['name'];
	$pdf_type=$_FILES['pdf']['type'];
	$pdf_size=$_FILES['pdf']['size'];
	$pdf_tem_loc=$_FILES['pdf']['tmp_name'];
	$pdf_store="pdf/".$pdf;

	move_uploaded_file($pdf_tem_loc, $pdf_store);

	$book_title=$pdf;
	$category_id=$_POST['category_id'];
	$author=$_POST['author'];
	$book_copies=$_POST['book_copies'];
	$book_pub=$_POST['book_pub'];
	$publisher_name=$_SESSION['username'];
	$isbn=$_POST['isbn'];
	$copyright_year=$_POST['copyright_year'];
	$status=$_POST['status'];
								
	mysqli_query($conn,"insert into book (book_title,category_id,author,book_copies,book_pub,publisher_name,isbn,copyright_year,date_added,status)
 	values('$book_title','$category_id','$author','$book_copies','$book_pub','$publisher_name','$isbn','$copyright_year',NOW(),'$status')")or die(mysqli_error());
 
 
header('location:documents.php');
}
?>	