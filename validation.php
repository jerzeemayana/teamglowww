
<?php 
session_start();

$con = mysqli_connect('sql208.epizy.com', 'epiz_24495246', 'Hf00QWGfYe');
mysqli_select_db($con, 'epiz_24495246_registrationdb');
$name = $_POST['user'];
$password = $_POST['password'];
$s = "select * from regtable where name ='$name' && password ='$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    echo header('location:home.php');
    
}else{
    
    echo header('location:wrong-details.html');

}

?>