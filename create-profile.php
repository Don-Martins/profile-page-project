<?php include("db/db.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Create Profile</title>

    <style>
        .create-account{
            width: 100%;
            height: 100%;
        }

        .form-content{
            width: 500px;
            height: 500px;
            background-color: #ffffff;
            margin: 200px auto;
        }

        .form-control{
            width: 490px;
            height: 50px;
            border: 1px solid grey;
        }

        input[type=submit]{
            cursor: pointer;
        }
    </style>
</head>

<body>



    <div class="create-account">
        <div class="form-content">
            <h2>Create Profile</h2>
            <form action="process-profile.php" method="post" enctype="multipart/form-data">
                <div class="form-control">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
                </div>

                <div class="form-control">
                <label for="photo">Profile Photo:</label>
                <input type="file" name="photo" accept="image/*">                </div>

                <div class="form-control">
                <label for="name">Generate Access Key</label>
                <div class="form-control">
                    <input type="text" name="access_key" id="access_key" readonly>
                    <button type="button"  onclick="generateAccessKey()" >Generate</button>
                </div>

                <div class="form-control">
                <input type="radio" name="title" value="Mr"> Mr
                <input type="radio" name="title" value="Mrs"> Mrs
                </div>

                <input type="submit" value="Create Profile">




            </form>

        </div>
    </div>



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