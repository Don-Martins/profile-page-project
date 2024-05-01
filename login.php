<?php include("db/db.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>    
    <link rel="stylesheet" href="style2.css">
</head>     
<body>
    <center>
    <form action="proccess-login.php" method="post">

    <div class="headline">
        <h1>Fill in the form to safeguard  your profile</h1>
    </div>
        <!-- Username field -->

        <div class="Username">
            
        <label for="username">Username:</label>
        <br>
        <input type="text" name="username" id="username"required placeholder="Enter Name">
        </div>

        <!-- Access key field -->
        <div class="Access-Key">
        <label for="access_key">Access Key:</label>
        <br>
        <input type="text" name="access_key" required><br>
        </div>


        <!-- Submit button -->
        <div class="Submit">

        <a href="profile.php"><input type="submit" value="submit"></a>

        </div>
    </form>
    </center>
</body>
</html>
