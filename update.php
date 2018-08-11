<?php
if(isset($_POST['action']) && function_exists($_POST['action'])) {
    getvalfrom($_POST['id'],$_POST['mob']);

}

function getvalfrom($id,$mob)
{
    $conn = new mysqli("localhost", "root", "bridgeit", "Test");
    $sql = "UPDATE `Test`.`Employee`SET Mobile='$mob'  WHERE ID='$id'";
    $sql1 = "SELECT * FROM Test.Employee WHERE ID=$id";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
           if ($conn->query($sql) === TRUE) {
              echo "Record update successfully \n";
          } else {
          echo "Id not present \n";
          }
        }
        else
        echo "Sorry something wrong \n";
}
    ?>