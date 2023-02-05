    <!-- Importing header section -->
    <?php
    include("./modules/header.php");
    ?>

    <!-- Main website container -->
    <div class="container justify-center text-center">
        <!-- Very simple hero section -->
        <div class="container justify-center text-center pt-5">
            <h1 class="display-1 pt-3 pb-1">Welcome to User Crud App</h1>
            <h5 class="display-6 py-1 text-secondary">Start by creating a new user !</h5>
            <h6 class="small py-1 text-secondary">Made by @imalisina</h6>
        </div>
        
        <!-- Routing buttons section -->
        <div class="container pt-3 d-flex flex-row justify-content-center">
            <a class="btn btn-primary text-white mx-2" href="screens/all_users.php">All Users</a>
            <a class="btn btn-dark text-white mx-2" href="screens/add_new_user.php">Add a user</a>
        </div>
    </div>

    <!-- Bootstrap JavaScript CDN URL -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>