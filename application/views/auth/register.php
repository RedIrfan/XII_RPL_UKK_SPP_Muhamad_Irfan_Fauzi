<div class="h-100 col-lg-4 col-md-5 col-sm-5 mx-auto d-flex align-items-center">
    <div class="card border-0 mb-4 shadow-sm py-4">
        <div class="p-2 my-auto">
            <div class="card-header border-0 h4 text-center">
                Register
            </div>
            <div class='card-body'>
                <form action="<?= site_url('register/auth') ?>" method="post" class="h-100">
                    <div class='container'>
                        <div class="row row-cols-2 px-2 mb-3">
                            <label for="nama">Nama</label>
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
                        <div>
                            <button class="btn btn-primary w-100">Register</button>
                            <a href="<?= site_url('login') ?>" class='text-center d-block'>Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>