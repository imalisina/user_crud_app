<!-- Importing header section -->
<?php
include("../modules/header.php");
include("../configs/db_details.php");

// Toggle to check whether the user created or not
$userCreationToggle = false;
// Storing created user
if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["country"])) {
    $enteredName = $_POST["name"];
    $enteredAge = (int) $_POST["age"];
    $enteredCountry = $_POST["country"];
    $storeCreatedUserQuery = "INSERT INTO `users` (`name`, `age`, `country`) VALUES ('$enteredName', '$enteredAge', '$enteredCountry')";
    // Store new user's data in DB 
    $connection->query($storeCreatedUserQuery);
    // Change the status
    $userCreationToggle = true;
}
?>
<div class="container w-25">
    <form method="POST">
        <!-- Name input field -->
        <label for="floatingInput" class="small">Name</label>
        <input type="text" name="name" class="form-control mb-3" id="floatingInput" placeholder="Enter new user's name">
        <!-- Age input field -->
        <label for="floatingInput" class="small">Age</label>
        <input type="number" name="age" class="form-control mb-3" id="floatingInput" placeholder="Enter new user's age">
        <!-- Country input field -->
        <label for="floatingInput" class="small">Country</label>
        <input type="text" name="country" class="form-control mb-3" id="floatingInput" placeholder="Enter new user's country">
        <!-- Checking the condition to display an alert and back button -->
        <?php
        if ($userCreationToggle == true) {
        ?>
            <div class="alert alert-success">User has been created successfully !</div>
            <a href="./all_users.php" class="btn btn-primary">Check all users</a>
        <?php
        }
        ?>
        <!-- Submit button section -->
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>

</body>

</html>