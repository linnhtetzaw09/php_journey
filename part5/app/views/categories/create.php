<?php require APPURL . '/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash("category_success"); ?>
        <div class="row">

            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Create New Category</h3>
                <a href="<?php echo ROOTURL; ?>/categories/index" class="btn btn-secondary btn-sm rounded-0">Back to Index Page</a>
            </div>

            <div class="col-md-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <?php flash("register_scuuess") ?>
                    <h3>Login Form</h3>
                    <form action="<?php echo ROOTURL; ?>/categories/create" method="post">

                        <div class=" col-md-12 mb-3 form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-sm rounded-0 <?php echo(!empty($data["name_err"])) ? 'is_invalid' : '' ?>" value="<?php echo $datas['name'] ?>" required>
                            <span class="invalid-feedback"><?php echo($datas['name_err']) ?></span>
                        </div>

                        <div class=" col-md-12 mb-3 form-group">
                            <label for="status_id">Name</label>
                            <select id="status_id" name="status_id" class="form-control form-control-sm rounded-0 <?php echo(!empty($data["status_id_err"])) ? 'is_invalid' : '' ?>" required>
                                <option value="" selected disabled>Select Status</option>
                                <?php foreach($datas['statuses'] as $status): ?>
                                    <option value="<?php echo $status->status_id; ?>"><?php echo $status->originalname; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="invalid-feedback"><?php echo($datas['name_err']) ?></span>
                        </div>

                        <div class="row">
                            <div class="col text-end">
                                <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-sm rounded-0">Submit</button>
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
