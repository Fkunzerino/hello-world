<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'asd';
$dbname="world";
$conn = new mysqli($host, $user, $pass,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
    
    $sql = "SELECT Name, District, Population FROM city";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"]. " - District:        " . $row["District"]. " - Population:          " . $row["Population"]. "<br>";
    }
} else {
    echo "0 results";
}


}




?>





