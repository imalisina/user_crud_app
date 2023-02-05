<!-- Request list of users from DB -->
<?php
include('../configs/db_details.php');
$connection = new PDO(DNS, USERNAME, "");
$query = "SELECT * FROM users";
$result = $connection->query($query);

// Importing header section
include("../modules/header.php");

// Display users in a table with Update and Delete actions 
foreach ($result as $user) {
?>
    <div class="container w-80">
        <div class="list-group-item list-group-item-action d-flex gap-3 py-3 px-4 my-3 border" aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0"><?php  echo $user["name"]; ?></h6>
                    <p class="mb-0 opacity-75">From <?php echo $user["country"]; ?> &#x2022; <?php  echo $user["age"]; ?> years old</p>
                </div>
                <div class="d-flex flex-row justify-content-center align-center">
                    <a class="btn btn-outline-primary mx-2">Edit</a>
                    <a class="btn btn-outline-danger mx-2">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
</body>

</html>