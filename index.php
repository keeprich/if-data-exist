<?php
require_once 'connection.php';
require_once 'exist.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If User Exist</title>
</head>
<body>
    

<table>
<thead>
<tr>
<th>userName</th>
<th>Location</th>
<th>Posted Time</th>
</tr>
</thead>

<?php while($row = $result->fetch_assoc()): ?>

<tr>
<td><?php echo $row['userName']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['postedTime']; ?></td>
 
 <?php
 echo $res_u;
 ?>

 
</tr>
<?php endwhile; ?>
</table>


<?php
function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';

}

?>

<form action="exist.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<div class="form-group"> 
<label for="">Name</label>
<input class="form-control" type="text" name="userName" value="<?php echo $userName ?>" placeholder="Enter your name" id="">
</div>

<div class="form-group">
<label for="">Location</label>
<input class="form-control" type="text" name="location" value="<?php echo $location ?>" placeholder="Enter your location" id="">
</div>
 <div class="form-group">

 <label for="">Time</label>
<input class="form-control" type="text" name="postedTime" value="<?php echo $postedTime ?>" placeholder="Enter your location" id="">
</div>



<button class="btn btn-primary" type="submit" name="save">Save</button>

</form>



</body>
</html>