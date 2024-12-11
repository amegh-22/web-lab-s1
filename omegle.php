<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "omegle shaji";
$conn=mysqli_connect($servername, $username, $password,$database);
if($conn){
    echo "database connected succesfully";
}
else{
    echo "database not connected";
}

if(isset($_POST['id']))
{
    $id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['pass'];
$sub=$_POST['submit'];
echo $id;
echo "<br>";
echo $username;
echo "<br>";
echo $password;

$sql="INSERT INTO omegle (user_name, pass, age) VALUES ('$username','$password', '0')";
if(mysqli_query($conn,$sql))
{
    echo "data inserted successfully";
}
else{
    echo "error" . $sql ."<br>".$conn->error;
}
}




?>
<html>
    <body>
        <form action="" method="post">
            <input type="text" name="id" placeholder="id">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="pass" placeholder="password">
            <input type=submit name="submit" value="submit">
</form>

    </body>
</html>