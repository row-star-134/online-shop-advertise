<!doctype html>
<?php
include("../header.php");
?>
<html lang="en">

<head>
    <title>Shop Advertise</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Register Your shop for advertise">
    <meta name="google-site-verification" content="HkyBFZ327DAUlmmfHJdE-gpD94PGdgOch0Ani4PD8Ek" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<!-- All script write here -->
<style>
  .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
</style>
<script data-cfasync="false" type="text/javascript" src="http://www.dexpredict.com/a/display.php?r=3775575"></script>
<script>

var image1 ='';
var image2 ='';
//  1) Validation of the registratio form 
function form_validation() {
    var owner_name = document.getElementById("owner_name").value;
    var shop_name = document.getElementById("shop_name").value;
    var mobile_number = document.getElementById("mobile_number").value;
    var offer_name = document.getElementById("offer_name").value;
    var banner = document.getElementById("file-ip-1").value;
    var shop_banner =document.getElementById("file-ip-2").value;
    var address = document.getElementById("shop_address").value;
    if(owner_name !='' && shop_name!='' && mobile_number!='' && offer_name!='' && banner!='' && shop_banner!='' && address!=''){
       
        activate_spinner();
        alert("Wait to Register Your Data");
        //
        let photo = document.getElementById("file-ip-1").files[0];  // file from input
        let photo1 = document.getElementById("file-ip-2").files[0];
        let formData = new FormData();
        formData.append("file-ip-1", photo);                                
        formData.append("file-ip-2",photo1);
        //
        var count =0;
        
        var http = new XMLHttpRequest();
        
        var url = "owner_name="+owner_name+"&shop_name="+shop_name+"&mobile_number="+mobile_number+"&offername="+offer_name+"&address="+address;
        http.open("POST","db_shop_information.php?"+url,false);
        http.send(formData);
        
    
        if("Not register your shop"!=http.responseText){
            deactivate_spinner();
            alert(http.responseText + "Registered ");
            //alert("Registered Your Data and Share the link ");
            if(http.responseText == ''){
             alert("Not register");   
            }else{
            window.location="display.php?id="+http.responseText;
            }
        }
        else{
            alert("Not registered Data");
        }
    }
    else{
        alert("please enter All the details");
    }
}

//  2) Preview image
function showPreviewOne(event){
  if(event.target.files.length > 0){
    let src = URL.createObjectURL(event.target.files[0]);
    image1 = event.target.files[0];
    let preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  } 
  
}
// 3) preview second image
function showPreviewOne1(event){
  if(event.target.files.length > 0){
    let src = URL.createObjectURL(event.target.files[0]);
    image2 = event.target.files[0];
    let preview = document.getElementById("file-ip-2-preview");
    preview.src = src;
    preview.style.display = "block";
  } 
} 
function activate_spinner() {
            document.getElementById("main").style.display = "none";
            document.getElementById("spinner_b").style.display = " ";
            //alert("Find");
        }
        function deactivate_spinner() {
            document.getElementById("main").style.display = "";
            document.getElementById("spinner_b").style.display = "none";
        }

</script>






<body>

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


    <div class='container-fluid' id="main">
        <div class='container my-5' style='border:1px solid black'>
		<p>આ ફોર્મ ગુજરાતી માં ભરી શકાશે</p>
        <p>આ ફોર્મ હિન્દી માં ભરી શકાશે</p>
            <!-- Shop form-->
            <form>

                <form class='p-4 bg-light'>
                    <h4 class='text-center'>Shop Advertise Form</h4>
                    <hr class='w-50'>
                    <div class="form-group">
                        <label for="title_username">Enter Shop Owner Name:</label>
                        <input type="email" class="form-control" placeholder="Enter Owner name" id="owner_name">
                    </div>
                    <div class="form-group">
                        <label for="title_email">Enter Shop name</label>
                        <input type="email" class="form-control" placeholder="Enter shop name" id="shop_name">
                    </div>
                    <div class="form-group">
                        <label for="title_email">Enter mobile number</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile number" id="mobile_number">
                    </div>
                    <div class="form-group">
                        <label for="title_email">Offer name </label>
                        <input type="text" class="form-control" placeholder="multiple offer seperate with comma"
                            id="offer_name">
                    </div>
                    <span class='alert alert-info '>multiple offer then seperate with (,)comma</span>
                    <br>
                    <br>
                    <span class='alert alert-info '>Example:20% off in gold , 30% off in clothes </span>
                    <br>

                    <div class="form-group">
                        <label for="file-ip-1">
                            <img id="file-ip-1-preview" src="https://i.ibb.co/ZVFsg37/default.png" style="display:none;width:98%">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Upload Banner:</label>
                        <input type="file" class='form-control' name="img_one" id="file-ip-1" accept="image/*"
                            onchange="showPreviewOne(event);">
                    </div>
                    <div class="form-group">
                        <label for="file-ip-2">
                            <img id="file-ip-2-preview" src="https://i.ibb.co/ZVFsg37/default.png" style="display:none;width:98%">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Select Shop Image/banner:</label>
                        <input type="file" class='form-control' name="img_one" id="file-ip-2" accept="image/*"
                            onchange="showPreviewOne1(event);">
                    </div>
                  
                    <div class="form-group">
                        <label for="title_email">Shop Address</label>
                        <textarea class='form-control' id="shop_address"></textarea>
                    </div>

                    <div class='text-center'>
                        <button type='button' class="btn btn-primary p-3" type="button" value='Login'
                            onclick='form_validation()'>Sign Up</button>
                    </div>

                </form>

        </div>
    </div>
    <section id='spinner' style="display:none">
        <div class="loader mx-auto p-5" id="spinner_b"></div>
        
    </section>

<?php
include("../footer.php");
?>
</body>

</html>