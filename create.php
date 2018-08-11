<?php
if(isset($_POST['action']) && function_exists($_POST['action'])) {
    getvalfrom();

}
function getvalfrom()
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile_no'];
    $email=$_POST['email_id'];
    $conn = new mysqli("localhost", "root", "bridgeit", "Test");
    $sql = "INSERT INTO `Test`.`Employee` (`ID`, `Name`, `Mobile`, `EmailId`)
    VALUES ('$id','$name','$mobile','$email')";

          if (mysqli_query($conn, $sql)) {
         echo "New record created successfully \n";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         
}
?>