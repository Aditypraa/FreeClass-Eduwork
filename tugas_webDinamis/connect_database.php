<?php 
$servername = 'localhost';
$database = 'perpustakaan';
$username = 'aditypra';
$password = 'aditypra';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
     die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
          echo"Buku : " . $row["isbn"]. " " . $row["judul"]. "<br>";
     }
}else {
     echo "0 result";
}
$conn->close();

?>