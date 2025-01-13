<?php require APPURL . '/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash("category_success"); ?>
        <div class="row">

            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Categories</h3>
                <a href="<?php echo ROOTURL; ?>/categories/create" class="btn btn-primary btn-sm rounded-0">Add New</a>
            </div>

            <?php foreach ($datas['categories'] as $category) : ?>

            <div class="card rounded-0">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $category->originalname;  ?></h5>
                    <h5 class="card-title">created by: <span class="fw-bold"><?php echo $category->name; ?></span></h5>
                    <h5 class="card-title">created_at: <span class="fw-bold"><?php echo $category->publicdate; ?></span></h5>
                </div>
                <div class="crad-footer">
                    <div class="d-flex float-end">
                    <?php if ($category->user_id == $_SESSION['user_id']) : ?>
                    <div>
                        <form action="<?php echo ROOTURL; ?>/categories/destroy/<?php echo $category->category_id; ?>" method="post">
                            <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete">
                        </form>
                    </div>
                    <div>
                        <a href="<?php echo ROOTURL; ?>/categories/edit/<?php echo $category->category_id; ?>" class="btn btn-success btn-sm rounded-0"></a>
                    </div>
                    <?php endif; ?>
                    
                    <div>
                        <a href="<?php echo ROOTURL; ?>/categories/show/<?php echo $category->category_id; ?>" class="btn btn-success btn-sm rounded-0"></a>
                    </div>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
            
            <div class="card rounded-0">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $status->originalname;  ?></h5>
                    <h5 class="card-title">created by: <span class="fw-bold"><?php echo $status->name; ?></span></h5>
                    <h5 class="card-title">created_at: <span class="fw-bold"><?php echo $status->publicdate; ?></span></h5>
                </div>
                <div class="crad-footer">
                    <div class="d-flex float-end">
                    <div>
                        <form action="<?php echo ROOTURL; ?>/users/destroy/<?php echo $status->status_id; ?>" method="post">
                            <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete">
                        </form>
                    </div>
                    <div>
                        <a href="<?php echo ROOTURL; ?>/statuses/edit/<?php echo $status->stauts_id; ?>" class="btn btn-success btn-sm rounded-0"></a>
                    </div>
                    <div>
                        <a href="<?php echo ROOTURL; ?>/statuses/show/<?php echo $status->stauts_id; ?>" class="btn btn-success btn-sm rounded-0"></a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require APPURL . '/views/layout/footer.php'; ?>
