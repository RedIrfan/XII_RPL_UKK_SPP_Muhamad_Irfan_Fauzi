<div class="container">
    <div class='card w-50 mx-auto'>
        <div class='card-header text-center'>
            <h1>Register</h1>
        </div>
        <div class='card-body'>
            <div class='container'>
                <form action="<?= site_url('register/auth') ?>" method="post">
                    <div class="row row-cols-2 px-2 mb-3">
                        <label for="nama">Name</label>
                        <div>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        
                        <label for="username">Username</label>
                        <div>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>

                        <label for="password">Password</label>
                        <div>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                    </div>
                    <button class="btn btn-primary w-100">Register</button>
                    <a href="<?= site_url('login') ?>" class='text-center d-block'>Login</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>