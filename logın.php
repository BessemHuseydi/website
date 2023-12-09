<?php
include("login.html");
   
$user_name="b1812100001@sakarya.edu.tr";
$user_password="b1812100001";

  if($user_name==$_POST['user']&&$user_password==$_POST['user']){
    echo "Basarli giris yaptiniz $user_name <br/> ";
    echo"En kisa zamanda ilgili sayfaya yonledireceksiniz";
    header("Refresh:10,url=(index.html)");

  }
  else {
    echo "Hatali giris yaptiniz <br/> Tekrar deneginiz lutfen";
    header("Refresh:10,url=login.html");
  }



?>