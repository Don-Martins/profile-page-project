<?php include("db/db.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Create Profile</title>
</head>

<body>



    <div class="create-account">
        <div class="form-content">
            <form action="process-profile.php" method="post" enctype="multipart/form-data">
                <div class="form-control">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
                </div>

                <div class="form-control">
                <label for="photo">Profile Photo:</label>
                <input type="file" name="photo" accept="image/*">                </div>

                <div class="form-control">
                <label for="name">Access Key</label>
                <input type="button" value="Generate Access Key" onclick="generateAccessKey()" readonly><br>
                </div>

                <div class="form-control">
                <input type="checkbox" name="title" value="Mr"> Mr
                <input type="checkbox" name="title" value="Mrs"> Mrs
                </div>



            </form>

        </div>
    </div>














































    <form action="process-profile.php" method="post" enctype="multipart/form-data">
        <!-- Name field -->
        <div class="Name">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
        </div>

        <!-- Profile photo upload -->
        <div class="Photo_path">
            <label for="photo">Profile Photo:</label>
            <input type="file" name="photo" accept="image/*"><br>
        </div>

        <!-- Generate access key button -->
        <div class="Access_Key">
            <input type="button" value="Generate Access Key" onclick="generateAccessKey()" readonly><br>
        </div>

        <!-- Display access key -->
        <div class="Access_Key">
            <label for="access_key">Access Key:</label>
            <input type="text" name="access_key" id="access_key" readonly><br>
        </div>

        <!-- Checkboxes for Mr/Mrs -->
        <div class="Checkbox">
            <label>
                <input type="checkbox" name="title" value="Mr"> Mr
            </label>
            <label>
                <input type="checkbox" name="title" value="Mrs"> Mrs
            </label><br>
        </div>

        <!-- Submit button -->
        <input type="submit" value="Create Profile">
    </form>


    <script>
        function generateAccessKey() {
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';
            var keyLength = 20; // Adjust the length as needed
            var accessKey = '';

            var randomValues = new Uint32Array(keyLength);
            window.crypto.getRandomValues(randomValues);

            for (var i = 0; i < keyLength; i++) {
                accessKey += characters.charAt(randomValues[i] % characters.length);
            }

            document.getElementById("access_key").value = accessKey;
        }
    </script>
</body>

</html>