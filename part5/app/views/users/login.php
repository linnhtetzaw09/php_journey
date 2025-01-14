<?php require APPURL . '/views/layout/header.php'; ?>

<section class="col-md-4 mx-auto py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <?php flash("register_success") ?>
                    <h3>Login Form</h3>
                    <form action="<?php echo ROOTURL; ?>/users/login" method="post">
                        <div class=" col-md-12 mb-3 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-sm rounded-0 <?php echo(!empty($data["email_err"])) ? 'is-invalid' : '' ?>" placeholder="Enter your email" value="<?php echo $datas['email']; ?>" required>
                            <span class="invalid-feedback"><?php echo($data['email_err']); ?></span>
                        </div>

                        <div class=" col-md-12 mb-3 form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-sm rounded-0 <?php echo(!empty($data["password_err"])) ? 'is-invalid' : '' ?>" placeholder="Enter your password" value="<?php echo $datas['password']; ?>" required>
                            <span class="invalid-feedback"><?php echo($data['password_err']); ?></span>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="<?php echo ROOTURL; ?>/users/register">Not yet register ? Register Here</a>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary btn-sm rounded-0">Login</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APPURL . '/views/layout/footer.php'; ?>
