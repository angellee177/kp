<?php
include ('config.php');
$username= @$_POST['username'];
$password= @$_POST['password'];
$sql = mysql_query("SELECT * FROM user WHERE username= '".$username."'
                    AND password= '".$password."'");
$login= mysql_num_rows($sql);
if ($login > 0)    {
                    header("location:index.php");
                }else
                {
                    echo 'gagal';
                    echo $login;
                }
?>