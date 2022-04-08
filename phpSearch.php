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



$firstName = $_POST['searchbyname'];
$emailID = $_POST['searchbyemail'];
$cellPhone = $_POST['searchbyphone'];
#$sql = "select * from Users where username like '%$search%' OR emailID like '$emailID' OR cellPhone like '$cellPhone'";


$sql = "Select * from Users where firstName like '$firstName' OR emailID like '$emailID' OR cellPhone like '$cellPhone'";
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
    echo '<table id="user-search-results" style="display: table; table-layout:fixed;word-break: break-word;margin-top: 20px; width: 100%">';
    echo '<thead style="border-bottom: 2px solid grey">';
    echo '<tr>';
    echo '<th scope="col">#</th>';
    echo '<th scope="col">First Name</th>';
    echo '<th scope="col">Last Name</th>';
    echo '<th scope="col">Email</th>';
    echo '<th scope="col">Address</th>';
    echo '<th scope="col">Home Phone</th>';
    echo '<th scope="col">Cell Phone</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody id="users-table-body">';
    echo '<tr>';
    echo "<td colspan='7' style='text-align:center'>No data found</td>";
    echo '</tr>';
  echo '</tbody>';
  echo '</table>';
}

$conn->close();

?>