<?php

$search = $_POST['search'];

$servername = "162.241.253.57";
$username = "devutkmy_raju";
$password = "Heythereitsme";
$db = "devutkmy_users_list";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from Users where username like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<table border = '1'>";
    echo "<tr>";
        echo "<th>username</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Home Address</th>";
        echo "<th>Home Phone No</th>";
        echo "<th>Cell Phone No</th>";
        echo "<th>Email ID</th>";
    echo "</tr>";
while($row = $result->fetch_assoc() ){
    echo "<tr>";
	echo "<td>" .$row["username"]. "</td>";
    echo "<td>" .$row["firstName"].  "</td>";
    echo "<td>".$row["lastName"]."<br>";
    echo "<td>".$row["homeAddress"]."<br>";
    echo "<td>".$row["homePhone"]."<br>";
    echo "<td>".$row["cellPhone"]."<br>";
    echo "<td>".$row["emailID"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>