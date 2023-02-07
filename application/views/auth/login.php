<div class="h-100 col-lg-4 col-md-5 col-sm-5 mx-auto d-flex align-items-center">
    <div class="card border-0 mb-4 shadow-sm h-50">
        <div class="p-2 my-auto">
            <div class="card-header border-0 h4 text-center">
                Login
            </div>
            <div class='card-body'>
                <form action="<?= site_url('login/auth') ?>" method="post" class="h-100">
                    <div class='container'>
                        <div class="row row-cols-2 px-2 mb-3">
                            <label for="username">Username</label>
                            <div>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>

                            <label for="password">Password</label>
                            <div>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>

                        </div>
                        <div>
                            <button class="btn btn-primary w-100">Login</button>
                            <a href="<?= site_url('register') ?>" class='text-center d-block'>Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>