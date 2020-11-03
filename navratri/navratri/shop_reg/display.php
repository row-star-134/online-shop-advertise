<!doctype html>
<html lang="en">
<?php 

$id = $_GET['id'];

$url ="http://www.specialshopoffers.tk/navratri/shop_reg/display.php?id=$id  ";



include("../connection.php");
if($conn){
$count =0;
    $fire = mysqli_query($conn,"SELECT * FROM advertise WHERE unique_number='$id'");
    while($row = mysqli_fetch_assoc($fire)){
            $count =$row['visitorcount'];
    }
    $count =$count +1;
    $result = "UPDATE advertise SET visitorcount='$count' WHERE unique_number ='$id'";
    $r = mysqli_query($conn,$result);
}

if($conn){

  $query = "SELECT * FROM advertise WHERE unique_number='$id'";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_assoc($result)){
    $url1=nl2br("*************See Discount Navaratri Special  ******************  \n".$row['shopname']. "\nOwnername : " .$row['ownername']. "Address :"  .  $row['address']);

  
?>
<head>
    <title><?php echo $row['shopname']; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="HkyBFZ327DAUlmmfHJdE-gpD94PGdgOch0Ani4PD8Ek" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<script data-cfasync="false" type="text/javascript" src="http://www.dexpredict.com/a/display.php?r=3775575"></script>
<style>
body {
    background-image: linear-gradient(335deg, black 23px, transparent 23px),
        linear-gradient(155deg, black 23px, transparent 23px),
        linear-gradient(335deg, black 23px, transparent 23px),
        linear-gradient(155deg, black 23px, transparent 23px);
    background-size: 58px 58px;
    background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;
}
</style>

<body class='sign' style="background-color: #141114;">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <div class='container-fluid'>
    <div class='container mx-auto'>
<button class='btn btn-primary  p-2' style="float:left"><a class='text-light' href='index.php' >Register Your Shop</a></button> 
<button class='btn btn-primary ml-4 p-2 ' style="float:left;"><a href='../index.php' class='text-light'>See All offers</a></button> 
 </div>
 <br>
<hr>
            <div class='container-fluid'>
            
                <h3 class='text-center' style="color:#ff2483"><?php echo $row['shopname']?></h3>
                <h5 class='text-center text-light'>Navratri Discount</h5>
                <div class='container text-center'>
        <button class='btn btn-primary p-3'><a href="whatsapp://send?text=<?php echo $url; echo $url1;?>" class='text-light' data-action="share/whatsapp/share" target="_blank"> Share to whatsapp  </a></button>
          </div>
          <hr class='w-75 bg-light'>
          <div class='container'>
           <h3 class='' style="color:#ff65bd"><u>BEST OFFER FOR NAVRATRI</u></h3>
           <?php
              $name= explode(',',$row['offername']);
              
              echo "<ul class='text-light'>";
              for($i= 0;$i<sizeof($name);$i++){
                 
                 echo "<li><h4>".$name[$i]."</h4></li>";
              }
              echo "</ul>";
           ?>
          </div>
            
             
            <div class="card-deck">
                <!--first card -->
                <div class="card">
                    <img class="card-img-top" src="../banner/<?php echo trim($row['banner']);?>" alt="Card image cap" data-toggle="modal" data-target="#exampleModal">


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                   
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <img class="card-img-top" src="../banner/<?php echo trim($row['banner']);?>" alt="Card image cap">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end -->
                </div>

                <!--second card -->
                <div class="card">
                    <img class="card-img-top" src="../banner/<?php echo trim($row['shopbanner']);?>" alt="Card image cap" data-toggle="modal" data-target="#exampleModal1">

                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <img class="card-img-top" src="../banner/<?php echo trim($row['shopbanner']);?>" alt="Card image cap">
                               
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end -->
                </div>
            </div>
            <div class='container' style="border:1px solid black">
            <h3 class='mt-5' style="color:#ff2483">Owner Name:<b> <?php echo $row['ownername'];?></b></h3>
            <hr class='w-100 bg-light mr-auto'>
          <h3 class='mt-5' style="color:#ff2483">Contact Number:<b> <?php echo $row['mobilenumber'];?></b></h3>
          <hr class='w-100 bg-light'>
          <h3  class='mt-5'style="color:#ff2483"> Address :<b> <?php echo $row['address'];?></b></h3>
          <hr class='w-100 bg-light'>
          </div>
        </div>
    </div>

    <?php
    }
  }
    ?>
      <div class='container text-center'>
        <button class='btn btn-primary p-3'><a href="whatsapp://send?text=<?php echo $url; echo $url1;?>" class='text-light' data-action="share/whatsapp/share" target="_blank"> Share to whatsapp  </a></button>
          </div>
</body>
<?php
include("../footer.php");
?>
</html>