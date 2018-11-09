/*
 * $value untuk menentukan banyak karakter random
 * $keyspace kumpulan angka dan hutuf untuk menentukan karakter random
 * $str untuk menghubungkan antara baris string
 * mb_strlen() function mengecek jumlah length pada string
 * random_int() melakukan pemberikan angka pada karakter random
**/
function token($value)
{
  $keyspace = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $str = '';
  $max = mb_strlen($keyspace, '8bit') - 1;
  for ($i = 0; $i < $value; ++$i) {
    $str .= $keyspace[random_int(0, $max)];
  }
  return $str;
}
function select_name_key($table, $column, $key)
{
  $query = runSelect("SELECT $column FROM $table WHERE $column = '$key'");
  if (fetch_obj($query)) {
    return true;
  }else {
    return false;
  }
}