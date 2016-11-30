<?php 
$target_dir = "doug/"; 
$target_ﬁle = $target_dir . basename($_FILES["ﬁleToUpload"]["name"]); $uploadOk = 1; 
$imageFileType = pathinfo($target_ﬁle,PATHINFO_EXTENSION); 
// Check if image ﬁle is a actual image or fake image if(isset($_POST["submit"])) {    
$check = getimagesize($_FILES["ﬁleToUpload"]["tmp_name"]);    
if($check !== false) {        
echo "File is an image - " . $check["mime"] . ".";        
$uploadOk = 1;    
} else {        
echo "File is not an image.";        
$uploadOk = 0;    
} }
// Check if ﬁle already exists 
if (ﬁle_exists($target_ﬁle)) {    
echo "Sorry, ﬁle already exists.";    
$uploadOk = 0; 
} 
// Check ﬁle size 
if ($_FILES["ﬁleToUpload"]["size"] > 500000) {    
echo "Sorry, your ﬁle is too large.";    
$uploadOk = 0; 
} 
// Allow certain ﬁle formats 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "PNG") {    
echo "Sorry, only JPG, JPEG, PNG & GIF ﬁles are allowed.";    
$uploadOk = 0; 
} 
// Check if $uploadOk is set to 0 by an error 
if ($uploadOk == 0) {    
echo "Sorry, your ﬁle was not uploaded."; 
// if everything is ok, try to upload ﬁle 
} else {    
if (move_uploaded_ﬁle($_FILES["ﬁleToUpload"]["tmp_name"], $target_ﬁle)) {        
echo "The ﬁle ". basename( $_FILES["ﬁleToUpload"]["name"]). " has been uploaded.";    
} else {        
echo "Sorry, there was an error uploading your ﬁle.";    
} } 
?>
