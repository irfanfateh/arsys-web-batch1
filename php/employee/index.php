<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('./inlcudes/data.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    foreach ($employee as $emp) {
        if ($emp['email'] == $email && $emp['password'] == $password) {
            session_start();
            $_SESSION['id']=$emp['id'];
            header('Location: ./dashboard.php');
            exit;
        } else {
            $error = 'User not found';
        }
    }
}
?>
<?php include('./inlcudes/header.php') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 p-5">
            <h4 class="text-center text-muted py-4">Employee Managment System</h4>
            <?php
            if ($error != '') { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Opppss Error!</strong> <?php echo $error; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php   }
            ?>
            <form method="POST" action="">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form2Example1" name="email" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example2" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('./inlcudes/footer.php') ?>