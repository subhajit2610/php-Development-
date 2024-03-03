<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_form";

    $con = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "SELECT id, name, password, email, dob, gender FROM user_form";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       while($row = mysqli_fetch_assoc($result)){
           echo " <br> <br>"."id: " . $row["id"]. " <br> "." Name: " . $row["name"]. " <br> "." Email: ". $row["email"]. " <br> "." Date of Birth: ". $row["dob"] . " <br> "."Gender: ".$row["gender"] ." <br>";
       }
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($con);
?>

