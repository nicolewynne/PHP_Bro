<?php
    include("database.php");

    $username = "Millie Brown";
    $password = "millie19";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$password')";

    try{
        mysqli_query($conn, $sql);
        echo "User is registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user";
    }

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
       
       while($row = mysqli_fetch_assoc($result)){ 
        echo $row["id"] ."<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
       }
    } 
    else {
        echo "User not found";
    }

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>