<?php 
    include("../configs/db_details.php");

    // Getting user ID from route parameters
    $userId = (int) $_GET["id"];
    // Getting selected user's details from DB
    $getSelectedUserQuery = "SELECT * FROM users WHERE id = $userId";
    $userDetails = $connection->query($getSelectedUserQuery)->fetch();
    
    // Display header section
    include("../modules/header.php");
?>

<div class="container w-25">
    <form action="./update_success.php?id=<?php  echo $userId; ?>" method="POST">
        <!-- Name input field -->
        <label for="floatingInput" class="small">Name</label>
        <input type="text" name="name" value=<?php echo $userDetails["name"]; ?> class="form-control mb-3" id="floatingInput" placeholder="Enter new user's name">
        <!-- Age input field -->
        <label for="floatingInput" class="small">Age</label>
        <input type="number" name="age" value=<?php  echo $userDetails["age"]; ?> class="form-control mb-3" id="floatingInput" placeholder="Enter new user's age">
        <!-- Country input field -->
        <label for="floatingInput" class="small">Country</label>
        <input type="text" name="country" value=<?php echo $userDetails["country"]; ?> class="form-control mb-3" id="floatingInput" placeholder="Enter new user's country">
        <!-- Submit button section -->
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>

</body>
</html>
