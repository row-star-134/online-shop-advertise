<?php
 include("../connection.php");
 if($conn){
    $query = "SELECT * FROM advertise ORDER BY visitorcount DESC";
    $res = mysqli_query($conn,$query);
    $data = array();
    while($row =mysqli_fetch_assoc($res)){
        $data[] =$row;
    }
    $fp = fopen('studRecords.json', 'w');
    if(!fwrite($fp, json_encode($data))) { 
        die('Error : File Not Opened. ' . mysql_error()); 
    } 
    else{ 
        
    }
    fclose($fp);
 }
 else{

 }

?>