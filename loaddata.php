<?php

if(isset($_GET['id'])) {
    getvalfrom($_GET['id']);

}

function getvalfrom($id)
{
    $conn = new mysqli("localhost", "root", "bridgeit", "Test");
    $sql = "SELECT * FROM Test.Employee WHERE ID=$id";
             $result = $conn->query($sql);
        
             if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo " id: " . $row["ID"]."\n". 
   " Name: " . $row["Name"]."\n". 
   " Mobile No :". $row["Mobile"]."\n".
    " Email Id :". $row["EmailId"]. "\n";
    
}
}

            }



?>
