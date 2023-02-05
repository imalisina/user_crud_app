<?php 
    include("../configs/db_details.php");
    // Getting the parameters from request
    $userId = (int) $_GET["id"];
    $userName = $_POST["name"];
    $userAge = (int) $_POST["age"];
    $userCountry = $_POST["country"];

    // Define a query to store updated details in DB
    $updateUserQuery = "UPDATE `users` SET `name` = '$userName', `age` = '$userAge', `country` = '$userCountry' WHERE `users`.`id` = '$userId'";
    // Store the updated details in DB
    $connection->query($updateUserQuery);
    // Display header section
    include("../modules/header.php");
?>

<div class="container">
    <div class="alert alert-warning">
        <?php  echo $userName ?> with ID <?php echo $userId ?> has been updated successfully !
    </div>
    <a href="./all_users.php" class="btn btn-warning">Check all users</a>
</div>

    
</body>
</html>