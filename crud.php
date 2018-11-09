<?php

function delete($tbname, $id)
{
    $sql = mysql_query("DELETE FROM $tbname WHERE id = $id");
}

function select($tbname)
{
   return $sql= mysql_query("SELECT * FROM $tbname");
}

function showdata ($tbname)
{
    $sql = mysql_query("SELECT * FROM $tbname");
    $data = mysql_fetch_array($sql);

    return $data;
}

?>