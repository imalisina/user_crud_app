<?php
    include("../modules/header.php");
    include("../configs/db_details.php");
    
    // Getting user ID from request
    $userId = (int) $_GET["id"];
    // Define query to delete the user
    $deleteUserQuery = "DELETE FROM users WHERE id = $userId";
    // Execute the query
    $connection->query($deleteUserQuery);
?>
<div class="container">
    <div class="alert alert-danger">
        User with ID <?php echo $userId ?> has been deleted successfully !
    </div>
    <a href="./all_users.php" class="btn btn-danger">Check all users</a>
</div>

</body>

</html>