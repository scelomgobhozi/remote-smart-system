<?php

$con = mysqli_connect('localhost','root','','energyiot');
$response = array();
if($con){
    $sql = "SELECT * FROM `esp32data`";
    $result = mysqli_query($con,$sql);
if ($result) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $response[$i]['id'] = $row['id'];
        $response[$i]['Power'] = $row['Power'];
        $response[$i]['Current'] = $row['Current'];
        $response[$i]['reading_time'] = $row['reading_time'];
         $i++;





       
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
  }

}else{
    echo 'connection failed';
}



?>