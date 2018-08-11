<?php
if(isset($_POST['action']) && function_exists($_POST['action'])) {
    getvalfrom($_POST['id']);
}
function getvalfrom($id)
{

    $conn = new mysqli("localhost", "root", "bridgeit", "Test");
    $sql1 = "SELECT * FROM Test.Employee WHERE ID=$id";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    $sql = "DELETE FROM `Test`.`Employee` WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully \n";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
    }else
    echo "Sorry something wrong \n";
}
    
?>