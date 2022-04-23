<?php


$servername = "162.241.253.57";
$username = "devutkmy_raju";
$password = "Heythereitsme";
$db = "devutkmy_users_list";
$conn = new mysqli($servername, $username, $password, $db);
$sql = "SELECT firstName, emailID, cellPhone FROM Users";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "firstName: " . $row["firstName"]. " - email: " . $row["emailID"]. " " . $row["cellPhone"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

    ?>