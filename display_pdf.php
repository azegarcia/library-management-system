<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 0px;
      }
      .div1{
        margin-left: 0px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
        include('dbcon.php');
        $file = $_GET['file'];

        $sql="SELECT book_title from book where book_title='$file'";
        $query=mysqli_query($conn,$sql);
        while ($info=mysqli_fetch_array($query)) {
      ?>
      <center>
        <embed type="application/pdf" src="pdf/<?php echo $info['book_title'] ; ?>" width="100%" height="900px" view="Fit">
      </center>
      <?php
        }
      ?>
    </div>
  </body>
</html>