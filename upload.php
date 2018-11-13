<pre>
<?php
$errup='';
$succup='';
$vimg='';

if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']) ){

$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];


$ar=explode("/",$_FILES['fileToUpload']['type']);



if(file_exists("uploads/".$n)){
	$errup = "Filename exists : ".$n;
}
else{
	move_uploaded_file($s,"uploads/".$n);
    $succup = "File Upload Success ";
    $vimg ="uploads/".$n;
}
}
?>
</pre>