    <?php

$number =htmlspecialchars($_GET["id"]);
$conn = new mysqli("localhost", "root", "bridgeit", "Test");
$sql = "SELECT * FROM Test.Employee WHERE ID=$number";
             $result = $conn->query($sql);
        
             if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            $str=" id: " . $row["ID"]."\n". 
" Name: " . $row["Name"]."\n";
echo $str;
            }
        }
?>