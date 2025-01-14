<?php require APPURL . '/views/layout/header.php'; ?>

<section class="col-md-4 mx-auto py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 rounded-0">
                <div class="card-body">
                    <h3 class="text-center">Register Form</h3>
                    <form action="<?php echo ROOTURL; ?>/users/register" method="post">
                        <div class="col-md-12 mb-3 form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-sm rounded-0" placeholder="Enter your fullname" value="<?php echo isset($datas['name']) ? $datas['name'] : ''; ?>" required>
                            <span class="text-danger"><?php echo $datas['name_err'] ?? ''; ?></span>
                        </div>

                        <div class="col-md-12 mb-3 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-sm rounded-0" placeholder="Enter your email" value="<?php echo isset($datas['email']) ? $datas['email'] : ''; ?>" required>
                            <span class="text-danger"><?php echo $datas['email_err'] ?? ''; ?></span>
                        </div>

                        <div class="col-md-12 mb-3 form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-sm rounded-0" placeholder="Enter your password" value="<?php echo isset($datas['password']) ? $datas['password'] : ''; ?>" required>
                            <span class="text-danger"><?php echo $datas['password_err'] ?? ''; ?></span>
                        </div>

                        <div class="col-md-12 mb-3 form-group">
                            <label for="cfmpassword">Confirm Password</label>
                            <input type="password" id="cfmpassword" name="cfmpassword" class="form-control form-control-sm rounded-0" placeholder="Confirm your password" value="<?php echo isset($datas['cfmpassword']) ? $datas['cfmpassword'] : ''; ?>" required>
                            <span class="text-danger"><?php echo $datas['cfmpassword_err'] ?? ''; ?></span>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="<?php echo ROOTURL; ?>/users/login">Already have an account? Login Here</a>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary btn-sm rounded-0">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APPURL . '/views/layout/footer.php'; ?>
