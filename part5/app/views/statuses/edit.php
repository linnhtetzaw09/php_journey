<?php require APPURL . '/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash("status_success"); ?>
        <div class="row">

            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Edit Status</h3>
                <a href="<?php echo ROOTURL; ?>/statuses" class="btn btn-secondary btn-sm rounded-0">Back to Index Page</a>
            </div>

            <div class="col-md-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <?php flash("register_scuuess") ?>
                    <h3>Login Form</h3>
                    <form action="<?php echo ROOTURL; ?>/statuses/edit/<?php echo $datas['id']; ?>" method="post">

                        <div class=" col-md-12 mb-3 form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-sm rounded-0 <?php echo(!empty($datas["name_err"])) ? 'is_invalid' : '' ?>" value="<?php echo $datas['name'] ?>" required>
                            <span class="invalid-feedback"><?php echo($datas['name_err']) ?></span>
                        </div>

                        <div class="row">
                            <div class="col text-end">
                                <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>
</section>

<?php require APPURL . '/views/layout/footer.php'; ?>
