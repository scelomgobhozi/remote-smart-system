<?php
require_once ("db.php");
$Power = isset($_POST['Power']) ? $_POST['Power'] : " ";
$Current = isset($_POST['Current']) ? $_POST['Current'] : " ";
date_default_timezone_set('Africa/Johannesburg');
$date = date('Y-m-d H:i:s');
$id=1;
if($_SERVER["REQUEST_METHOD"] == "POST"){				
$sql = "INSERT INTO esp32data (id,Power,reading_time,Current) VALUES ('" . $id . "','" . $Power . "','" . $date . "','" . $Current . "')";
$result = mysqli_query($conn, $sql);
}

else {
    echo "fill all details! Thanks";
}
if (!$result) {
    $result = mysqli_error($conn);
}
echo $result;
?>