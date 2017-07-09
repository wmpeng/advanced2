<?php
    date_default_timezone_set('Asia/Shanghai');
    header("Content-Type:text/html;charset=utf-8");
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_query("set character set 'utf8'", $con);//读库 
    mysql_query("set names 'utf8'", $con);//写库 
    mysql_select_db("serve_people", $con);

    $time = date('Y-m-d H:i:s');
    mysql_query("INSERT INTO sp_advice(name, email, tel, advice, date) VALUES( '" . $_POST["contact_name"] . "', '" . $_POST["contact_email"] . "', '" . $_POST["contact_tel"] . "', '" . $_POST["contact_message"] . "', '" . $time . "')");

    mysql_close($con);
    header("Location:index.php");
?>