<?PHP
$conn = new mysqli('localhost','root','root','movie_app');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$myArray = array();

if ($result = $conn->query("SELECT * FROM login")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode(array("members"=>$myArray));
}
$result->close();
$conn->close();
?>
