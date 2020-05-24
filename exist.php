
<?php
require_once 'connection.php';
?>

<?php
$id = 0;
$userName = '';
$location = '';
$postedTime = 0;

 

if (isset($_POST['save'])){
$userName = $_POST['userName'];
$location = $_POST['location'];
$postedTime = $_POST['postedTime'];

$sql_u = "SELECT * FROM checkIfExist WHERE userName='$userName'";
// $sql_e = "SELECT * FROM users WHERE email='$email'";
$res_u = mysqli_query($mysqli, $sql_u);
// $res_e = mysqli_query($db, $sql_e);


if (mysqli_num_rows($res_u) > 0) {
  echo "Sorry... username already taken"; 	
}
// else if(mysqli_num_rows($res_e) > 0){
//   echo "Sorry... email already taken"; 	
// }
else{
     $query = $mysqli->query("INSERT INTO checkIfExist(userName, location, postedTime) VALUES('$userName', '$location', '$postedTime')") or

     $results = mysqli_query($mysqli, $query);
     echo 'Saved!';
     exit();
}




//$mysqli->query("INSERT INTO checkIfExist(userName, location, postedTime) VALUES('$userName', '$location', '$postedTime')") or
 //   die($mysqli->error);

   

    header("location: index.php");

}

?>