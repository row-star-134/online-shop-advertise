<?php
    $owner_name = $_GET['owner_name'];
    $shop_name =$_GET['shop_name'];
    $mobile_number =$_GET['mobile_number'];
    $offer_name =$_GET['offername'];
    $shop_address = $_GET['address'];   
    $unique =time().'h';
    if (isset($_FILES['file-ip-1']) && $_FILES['file-ip-1']['error'] === UPLOAD_ERR_OK && isset($_FILES['file-ip-2']) && $_FILES['file-ip-2']['error'] === UPLOAD_ERR_OK) {
        $uploadFileDir = '../banner/';
        $fileName = $_FILES['file-ip-1']['name'];
        $fileName_1 = $_FILES['file-ip-2']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileNameCmps_1 = explode(".", $fileName_1);
        $fileExtension = strtolower(end($fileNameCmps));
        $fileExtension_1 = strtolower(end($fileNameCmps_1));
        $newFileName =time(). '.' . $fileExtension;
        $newFileName_1 =time(). 'h.' . $fileExtension_1;
        $dest_path = $uploadFileDir . $newFileName;
        $dest_path_1 = $uploadFileDir . $newFileName_1;
     
        $fileTmpPath = $_FILES['file-ip-1']['tmp_name'];
        $fileTmpPath_1 = $_FILES['file-ip-2']['tmp_name'];
        
        if(move_uploaded_file($fileTmpPath, $dest_path) && move_uploaded_file($fileTmpPath_1, $dest_path_1))
        {
            include("../connection.php");
            if($conn){
                //query
                $query = "INSERT INTO advertise(ownername,shopname,mobilenumber,offername,banner,shopbanner,address,visitorcount,unique_number)VALUES('$owner_name','$shop_name','$mobile_number','$offer_name',' $newFileName','$newFileName_1','$shop_address','0','$unique')";
        
                //process of the inserting data
                $fire = mysqli_query($conn,$query);
                if($fire){
                    echo $unique;
                    
                    include("retrive_data.php");
                }
                else{
                    print(mysqli_error($conn));
                    echo "Not register your shop";
                }
        
            }
            else{
                echo "Not connected With server";
            }
        } 
        else
        {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        }
    }
    //var_dump($shop_banner);
  

?>