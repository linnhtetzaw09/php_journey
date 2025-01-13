<!-- start header section -->
<header>
    <!-- start Nav bar -->
    <nav class="navbar navbar-expand-lg fixed-top">

        <a href="<?php echo ROOTURL; ?>/welcome" class="navbar-brand text-light mx-3">
            <img src="<?php echo ROOTURL; ?>/public/assets/img/fav/favicon.png" width="70" alt="favicon">
            <span class="text-uppercase h2 fw-bold mx-2">Plannco <span class="h4">HOME DECORATION</span></span>
        </a>

        <button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
            <div class="bg-light lines1"></div>
            <div class="bg-light lines2"></div>
            <div class="bg-light lines3"></div>
        </button>

        <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcome" class="nav-link mx-2 menuitems">Home</a></li>
                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcome/about" class="nav-link mx-2 menuitems">About Us</a></li>
                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcome/property" class="nav-link mx-2 menuitems">Properties</a></li>
                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcome/service" class="nav-link mx-2 menuitems">Services</a></li>
                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcome/customer" class="nav-link mx-2 menuitems">Customer</a></li>
                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcome/furniture" class="nav-link mx-2 menuitems">Furniture</a></li>
                <li class="nav-item"><a href="<?php echo ROOTURL; ?>/welcome/contact" class="nav-link mx-2 menuitems">Contact</a></li>

                <?php if(isset($_SESSION['user_id'])): ?>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);" class="nav-link mx-2 menuitems dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name'] ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo ROOTURL; ?>/users/logout" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item"><a href="<?php echo ROOTURL; ?>/users/login" class="nav-link mx-2 menuitems">Login</a></li>
                    <li class="nav-item"><a href="<?php echo ROOTURL; ?>/users/register" class="nav-link mx-2 menuitems">Register</a></li>
                <?php endif; ?>
            </ul>
        </div>

    </nav>
    <!-- end Nav bar -->

    <!-- start banner -->
    <div class="text-light text-center text-md-end banners">
        <h1 class="display-5 bannerheaders">Welcome to <span class="display-4 text-uppercase">Plannco</span> Home Decoration Co., Ltd</h1>
        <p class="lead bannerparagraphs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate aspernatur.</p>
    </div>
    <!-- end banner -->

</header>
<!-- end header section -->
