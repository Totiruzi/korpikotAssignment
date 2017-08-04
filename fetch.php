<?php
/* Checking if the variable id is set */
if(isset($_POST["id"]))
{
 include "includes/db.php" ;
    
 $query = "SELECT * FROM employee WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connection, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["name"] = $row["name"];
  $data["address"] = $row["address"];
  $data["gender"] = $row["gender"];
  $data["designation"] = $row["designation"];
  $data["age"] = $row["age"];
 }

    /* Sending data to AJAX request converting php arrays to strings and send to Ajax */
 echo json_encode($data);
}
?>