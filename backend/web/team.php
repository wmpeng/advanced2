<?php
header("Content-Type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","");
if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
mysql_query("set character set 'utf8'", $con);//读库 
mysql_query("set names 'utf8'", $con);//写库 
mysql_select_db("serve_people", $con);


mysql_query("UPDATE sp_team SET name='".$_POST["name"]."' ,slogan='".$_POST["slogan"]."' ,song='".$_POST["song"]."' ,mascot='".$_POST["mascot"]."',tel='".$_POST["tel"]."' 

WHERE name='".$_POST["name"]."'");

mysql_close($con);
header("Location:index.html");
?>
