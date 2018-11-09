<?php
function insert($table, $fields)
{
  $colomns = implode(', ', array_keys($fields));
  $arrayValues = [];
  $a = 1;
  foreach ($fields as $key => $value) {
    if (is_int($value)) {
      $arrayValues[$a] = $value;
    } else {
      $arrayValues[$a] = "'".$value."'";
    }
    $a++;
  }
  $values = implode(', ', $arrayValues);
  return runQuery("INSERT INTO $table($colomns) VALUES($values)");
}
function runQuery($query)
{
  global $conn;
  $query = $conn->prepare($query);
  if ($query->execute()) return true;
    else return false;
}
function runSelect($query)
{
  global $conn;
  $query = $conn->prepare($query);
  $query->execute();
  return $query;
}

function fetch_obj($result)
{
  return $result->fetch(PDO::FETCH_OBJ);
}
?> 