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