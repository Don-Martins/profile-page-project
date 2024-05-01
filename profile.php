<?php include ("../db/db.php"); ?>

<?php
if (isset($_GET["id"])) {
    // Connect to the database (replace with your actual database credentials)
    // $conn = new mysqli("localhost", "username", "password", "user_profiles");
 
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    $profileId = $_GET["id"];
  
    // Query to retrieve profile details
    $getProfileQuery = "SELECT p.name, pd.title, p.photo_path FROM `profiles` p
                       LEFT JOIN `profile_details` pd ON p.id = pd.profile_id
                       WHERE p.id = '$profileId'";

    $result = $conn->query($getProfileQuery);

    if ($result->num_rows > 0) {
        // Display the user's profile information
        $row = $result->fetch_assoc();
        echo "<h1>Welcome, " . $row["title"] . " " . $row["name"] . "!</h1>";
        echo "<img src='" . $row["photo_path"] . "' alt='Profile Photo'><br>";
        
        // Additional profile information can be displayed here
    }

    // Close the database connection
    $conn->close();
} else {
     // Redirect to login page if profile ID is not provided
     
    header("Location: login.php");
    exit;
   
}
?>
