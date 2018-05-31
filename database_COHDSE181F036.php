<?php 
function setComments($conn) 
{  
 $message = ''; 
 if(isset($_POST['commentSubmit'])) 
 {
  $conn = mysqli_connect('localhost','root','','guest_book');
  mysqli_select_db($con , "logindb");
  		  
  $username = $_POST['username']; 
  $comment = $_POST['comments'];   
  $sql = "insert into tblcomment(user, comments) values('$user','$comment')"; 
  $result = $conn->query($sql); 
 } 
} 
?> 
