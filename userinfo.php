<?php
include_once('db.php');
$email=$_POST['email'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];
if(mysql_query("INSERT INTO user VALUES('$email','$subject','$comment')"))
 echo "Successfully inserted";
 else
 echo "Insertion Failed";
 ?>