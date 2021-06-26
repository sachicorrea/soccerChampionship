
    <section>
        <div class="container">
            <?php if(isset($_GET["action"])) { ?>
                <div class="<?= $class; ?>" role="alert">
                    <?= $message; ?>
                </div>
            <?php } ?>

            <h1>Log in</h1>
            <form action="logIn.php" method="post">
                <div class="form-group">
                    <label for="user" class="form-label">User</label>
                    <input type="text" class="form-control" id="user" name ="user">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Log In</button>
                <a href="logins/create.php" class="btn btn-secondary">Sign Up</a>
            </form>
        </div>
    </section>