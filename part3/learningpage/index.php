<?php

ini_set('display_errors',1);

require_once ".././sessionconfig.php";

if(authFailed()){
    redirectTo('.././signin.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plannco Home Decoration</title>
    <!-- fav icon -->
    <link rel="icon" href="./assets/img/fav/favicon.png" type="image/png" sizes="16x16">
    <!-- bootstrap css1 js1 -->
    <link rel="stylesheet" href="./assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css"/>
    <!-- fontawsome css1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery ui css1 js1 -->
    <link rel="stylesheet" href="./assets/libs/jquery-ui-1.13.2/jquery-ui.min.css">
    <!-- lightbox2 css1 js1 -->
    <link rel="stylesheet" href="./assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css" type="text/css">

</head>
<body>

    <!-- start back to top -->
        <div class="fixed-bottom">
            <a href="index.html" class="btn-backtotops"><i class="fas fa-arrow-up"></i></a>
        </div>
    <!-- end back to top -->

    <!-- start stick note -->

        <div class="sticknotes">
            <a href="javascript:void(0;)" class="about">About</a>
            <a href="javascript:void(0;)" class="blog">Blog</a>
            <a href="javascript:void(0;)" class="news">News</a>
            <a href="javascript:void(0;)" class="contact">Contact</a>
        </div>

    <!-- start stick note -->


    <!-- start header section -->

        <header>
            <!-- start Nav bar -->
                <nav class="navbar navbar-expand-lg fixed-top">

                    <a href="index.html" class="navbar-brand text-light mx-3">
                        <img src="./assets/img/fav/favicon.png" width="70" alt="favicon">
                        <span class="text-uppercase h2 fw-bold mx-2">Plannco <span class="h4">HOME DECORATION</span></span>
                    </a>

                    <button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
                        <div class="bg-light lines1"></div>
                        <div class="bg-light lines2"></div>
                        <div class="bg-light lines3"></div>
                    </button>

                    <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
                        <ul class=" navbar-nav">
                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link mx-2 menuitems">Home</a></li>
                            <li class="nav-item"><a href="#aboutus" class="nav-link mx-2 menuitems">About Us</a></li>
                            <li class="nav-item"><a href="#properites" class="nav-link mx-2 menuitems">Properties</a></li>
                            <li class="nav-item"><a href="#services" class="nav-link mx-2 menuitems">Services</a></li>
                            <li class="nav-item"><a href="#customer" class="nav-link mx-2 menuitems">Customer</a></li>
                            <li class="nav-item"><a href="#furniture" class="nav-link mx-2 menuitems">Furniture</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link mx-2 menuitems">Contact</a></li>
                            <li class="nav-item"><a href=".././logout.php" class="nav-link mx-2 menuitems">Contact</a></li>
                        </ul>
                    </div>

                </nav>
            <!-- end Nav bar -->

            <!-- start banner -->
                <div class="text-light text-center text-md-end banners">
                    <h1 class="display-5 bannerheaders">Welcome to <span class="display-4 text-uppercase">Plannco</span> Home Decoration Co.,Ltd</h1>
                    <p class="lead bannerparagraphs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate aspernatur.</p>
                </div>
            <!-- start banner -->


        </header>

    <!-- end header section -->


    <!-- start about us section -->

        <section id="aboutus" class="py-5 aboutuss">
            <div class="container">
                <div class="row">

                    <div class="col col-sm-6">
                        <img src="./assets/img/users/staffgirl1.png" alt="staffgirl">
                    </div>

                    <div class="col col-sm-6 text-white">
                        
                        <div class="col-md-12">
                            <h2 class="text-uppercase">Who are we ??</h2>
                            <div class="lines"></div>
                            <div class="lines"></div>
                            <div class="lines"></div>
                        </div>

                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ex laudantium necessitatibus deleniti amet assumenda quae perferendis, corrupti ipsa id voluptatibus.</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus veritatis eius, numquam inventore distinctio reprehenderit explicabo, excepturi ut neque, voluptatibus aperiam. Dignissimos maiores.</p>
                        <a href="javascript:void(0);" class="btn btn-danger rounded-0">read Me</a>

                    </div>

                </div>
            </div>
        </section>

    <!-- end about us section -->


    <!-- start property section -->

        <section id="properites" class="py-5">
            <div class="container-fluid">

                <!-- start title -->
                <div class="text-center mb-3">
                    <div class="col">
                        <h3 class="titles">Properties</h3>
                    </div>
                </div>
                <!-- end title -->

                <ul class="list-inline text-center text-uppercase fw-bold">
                    <li class="list-inline-item propertylists activeitems" data-filter="all">All <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item propertylists" data-filter="house">House <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item propertylists" data-filter="decoration">Decoration <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item propertylists" data-filter="furniture">Furniture <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item propertylists" data-filter="office">Office</li>
                </ul>

                <div class="container-fluid">
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="filters house"><a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="Image 1"><img src="./assets/img/gallery/image1.jpg" width="200" alt="image1"/></a></div>
                        <div class="filters house"><a href="./assets/img/gallery/image2.jpg" data-lightbox="property" data-title="Image 2"><img src="./assets/img/gallery/image2.jpg" width="200" alt="image2"/></a></div>
                        <div class="filters house"><a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="Image 3"><img src="./assets/img/gallery/image3.jpg" width="200" alt="image3"/></a></div>
                        <div class="filters decoration"><a href="./assets/img/gallery/image4.jpg" data-lightbox="property" data-title="Image 4"><img src="./assets/img/gallery/image4.jpg" width="200" alt="image4"/></a></div>
                        <div class="filters decoration"><a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="Image 5"><img src="./assets/img/gallery/image5.jpg" width="200" alt="image5"/></a></div>
                        <div class="filters decoration"><a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="Image 6"><img src="./assets/img/gallery/image6.jpg" width="200" alt="image6"/></a></div>
                        <div class="filters furniture"><a href="./assets/img/gallery/image7.jpg" data-lightbox="property" data-title="Image 7"><img src="./assets/img/gallery/image7.jpg" width="200" alt="image7"/></a></div>
                        <div class="filters furniture"><a href="./assets/img/gallery/image8.jpg" data-lightbox="property" data-title="Image 8"><img src="./assets/img/gallery/image8.jpg" width="200" alt="image8"/></a></div>
                        <div class="filters furniture"><a href="./assets/img/gallery/image9.jpg" data-lightbox="property" data-title="Image 9"><img src="./assets/img/gallery/image9.jpg" width="200" alt="image9"/></a></div>
                        <div class="filters office"><a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="Image 10"><img src="./assets/img/gallery/image1.jpg" width="200" alt="image10"/></a></div>
                        <div class="filters office"><a href="./assets/img/gallery/image2.jpg" data-lightbox="property" data-title="Image 11"><img src="./assets/img/gallery/image2.jpg" width="200" alt="image11"/></a></div>
                        <div class="filters office"><a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="Image 12"><img src="./assets/img/gallery/image3.jpg" width="200" alt="image12"/></a></div>
                        <div class="filters decoration"><a href="./assets/img/gallery/image4.jpg" data-lightbox="property" data-title="Image 13"><img src="./assets/img/gallery/image4.jpg" width="200" alt="image13"/></a></div>
                        <div class="filters decoration"><a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="Image 14"><img src="./assets/img/gallery/image5.jpg" width="200" alt="image14"/></a></div>
                        <div class="filters house"><a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="Image 15"><img src="./assets/img/gallery/image6.jpg" width="200" alt="image15"/></a></div>
                        <div class="filters furniture"><a href="./assets/img/gallery/image7.jpg" data-lightbox="property" data-title="Image 16"><img src="./assets/img/gallery/image7.jpg" width="200" alt="image16"/></a></div>
                    </div>
                </div>

            </div>
        </section>

    <!-- end property section -->


    <!-- start adv section -->

        <section class="py-5 missions">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5">
                        <img src="./assets/img/etc/building4.png" class="fromlefts advimages" alt="building4">
                    </div>

                    <div class="col-lg-7 text-white text-center text-lg-end fromrights advtexts">
                        <h1>What is Plannco & how we started our business in Myanmar</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus consequatur atque possimus aliquam iure ut itaque eius ea sequi neque quibusdam maiores autem reprehenderit saepe voluptatum reiciendis, incidunt?</p>
                    </div>

                </div>
            </div>
        </section>

    <!-- end adv section -->


    <!-- start services section -->

        <section id="services" class="p-4 services">

            <div class="container-fluid">

                <!-- start title -->
                <div class="text-center mb-3">
                    <div class="col">
                        <h3 class="text-light titles">Our Services</h3>
                        <p class="text-light lead mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis beatae, at exercitationem odio molestiae laboriosam ullam nemo, dolore sequi reprehenderit mollitia voluptates unde sapiente autem suscipit itaque assumenda molestias possimus!</p>
                    </div>
                </div>
                <!-- end title -->

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card servicecards border-0">
                            <img src="./assets/img/gallery/image1.jpg" class="" alt="image1.jpg" />
                            <h5 class="text-white text-uppercase fw-bold p-2 headings">Living Room</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card servicecards border-0">
                            <img src="./assets/img/gallery/image2.jpg" class="" alt="image2.jpg" />
                            <h5 class="text-white text-uppercase fw-bold p-2 headings">Mini Bar</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card servicecards border-0">
                            <img src="./assets/img/gallery/image3.jpg" class="" alt="image3.jpg" />
                            <h5 class="text-white text-uppercase fw-bold p-2 headings">Dining Room</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card servicecards border-0">
                            <img src="./assets/img/gallery/image4.jpg" class="" alt="image4.jpg" />
                            <h5 class="text-white text-uppercase fw-bold p-2 headings">Meeting Room</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card servicecards border-0">
                            <img src="./assets/img/gallery/image5.jpg" class="" alt="image5.jpg" />
                            <h5 class="text-white text-uppercase fw-bold p-2 headings">Bed Room</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card servicecards border-0">
                            <img src="./assets/img/gallery/image6.jpg" class="" alt="image6.jpg" />
                            <h5 class="text-white text-uppercase fw-bold p-2 headings">Pantry Room</h5>
                        </div>
                    </div>

                </div>

            </div>

        </section>

    <!-- end services section -->


    <!-- start client section -->

        <section class="p-3">
            <div class="container-fluid">

                <!-- start title -->
                <div class="text-center mb-3">
                    <div class="col">
                        <h3 class="titles">Satisfied Clients</h3>
                        <p class="lead mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis beatae, at exercitationem odio molestiae laboriosam ullam nemo, dolore sequi reprehenderit mollitia voluptates unde sapiente autem suscipit itaque assumenda molestias possimus!</p>
                    </div>
                </div>
                <!-- end title -->

                <div class="row">
                    <div class="col-md-12">
                        <ul class="clientlists">
                            <li><img src="./assets/img/clients/client1.png" alt="client1"></li>
                            <li><img src="./assets/img/clients/client2.png" alt="client2"></li>
                            <li><img src="./assets/img/clients/client3.png" alt="client3"></li>
                            <li><img src="./assets/img/clients/client4.png" alt="client4"></li>
                            <li><img src="./assets/img/clients/client5.png" alt="client5"></li>
                        </ul>
                    </div>
                </div>


            </div>
        </section>

    <!-- end client section -->

     <!-- start customer section -->

        <section id="customer" class="py-3 customers">

            <div class="container-fluid">

                <!-- start title -->
                <div class="text-center mb-3">
                    <div class="col">
                        <h3 class="text-white titles">What Customers say?</h3>
                    </div>
                </div>
                <!-- end title -->

                <div class="row">
                    <div class="col-md-6 mx-auto">

                      <div id="customercarousels" class="carousel slide" data-bs-ride="carousel"> 

                        <ol class="carousel-indicators ">
                            <li class="active" data-bs-target="#customercarousels" data-bs-slide-to="0">1</li>
                            <li data-bs-target="#customercarousels" data-bs-slide-to="1">2</li>
                            <li data-bs-target="#customercarousels" data-bs-slide-to="2">3</li>
                        </ol>

                        <div class="carousel-inner">
                            
                            <div class="carousel-item text-center active">
                                <img src="./assets/img/users/user1.jpg" class="rounded-circle" alt="user1">
                                <blockquote class="text-light">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat veniam beatae magnam? Nam at ad rerum corrupti? Voluptas nam unde iste molestiae, similique quas sapiente alias adipisci repellat totam itaque.</p>
                                </blockquote>
                                <h5 class="text-uppercase fw-bold mb-3 text-white">Ms. July</h5>
                                <ul class="list-inline mb-5">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                            </div>

                            <div class="carousel-item text-center">
                                <img src="./assets/img/users/user2.jpg" class="rounded-circle" alt="user2">
                                <blockquote class="text-light">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat veniam beatae magnam? Nam at ad rerum corrupti? Voluptas nam unde iste molestiae, similique quas sapiente alias adipisci repellat totam itaque.</p>
                                </blockquote >
                                <h5 class="text-uppercase fw-bold mb-3 text-white">Mr. Anton</h5>
                                <ul class="list-inline mb-5">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                            </div>

                            <div class="carousel-item text-center">
                                <img src="./assets/img/users/user3.jpg" class="rounded-circle" alt="user3">
                                <blockquote class="text-light">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat veniam beatae magnam? Nam at ad rerum corrupti? Voluptas nam unde iste molestiae, similique quas sapiente alias adipisci repellat totam itaque.</p>
                                </blockquote>
                                <h5 class="text-uppercase fw-bold mb-3 text-white">Ms. Yoon</h5>
                                <ul class="list-inline mb-5">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                            </div>

                        </div>

                      </div>

                    </div>
                </div>

            </div>

        </section>

    <!-- end customer section -->


    <!-- start quotation section -->

        <section class="">

            <div class="container">

                <div class="quotes">

                    <div class="infos">

                        <div class="me-5">
                            <img src="./assets/img/icon/phoneicon.png" class="phoneicons" alt="phoneicon">
                        </div>

                        <div class="text-white">
                            <h2 class="fw-bold text-uppercase">Request a free Quote</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos doloremque repudiandae sapiente velit!</p>
                        </div>

                    </div>

                    <div>
                        <a href="tel: 09257408800" class="btn btn-calls">Call Now  <i class="fas fa-phone"></i></a>
                    </div>

                </div>

            </div>

        </section>

    <!-- end quotation section -->


    <!-- start furniture section -->

        <section id="furniture" class="bg-light text-center py-3">
            <div class="container">

                <!-- start title -->
                <div class="text-center mb-3">
                    <div class="col">
                        <h3 class="titles">Furniture Services</h3>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat mollitia quod nulla molestiae natus exercitationem tenetur optio dicta iusto! Debitis.</p>
                    </div>
                </div>
                <!-- end title -->

                <div class="row furicons">

                    <div class="col-md-4">
                        <img src="./assets/img/icon/services1.png" class="" alt="services1">
                        <h4>Fast Service</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia deserunt exercitationem reprehenderit nostrum autem fugiat praesentium! Debitis accusantium ut, deserunt eius.</p>
                    </div>

                    <div class="col-md-4">
                        <img src="./assets/img/icon/services2.png" class="" alt="services2">
                        <h4>Secure Payments</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia deserunt exercitationem reprehenderit nostrum autem fugiat praesentium! Debitis accusantium ut, deserunt eius.</p>
                    </div>

                    <div class="col-md-4">
                        <img src="./assets/img/icon/services3.png" class="" alt="services3">
                        <h4>Expert Team</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia deserunt exercitationem reprehenderit nostrum autem fugiat praesentium! Debitis accusantium ut, deserunt eius.</p>
                    </div>

                    <div class="col-md-4">
                        <img src="./assets/img/icon/services4.png" class="" alt="services4">
                        <h4>Affordable Services</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia deserunt exercitationem reprehenderit nostrum autem fugiat praesentium! Debitis accusantium ut, deserunt eius.</p>
                    </div>

                    <div class="col-md-4">
                        <img src="./assets/img/icon/services5.png" class="" alt="services5">
                        <h4>90 Days Warrnty</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia deserunt exercitationem reprehenderit nostrum autem fugiat praesentium! Debitis accusantium ut, deserunt eius.</p>
                    </div>

                    <div class="col-md-4">
                        <img src="./assets/img/icon/services6.png" class="" alt="services6">
                        <h4>Award Winning</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos mollitia deserunt exercitationem reprehenderit nostrum autem fugiat praesentium! Debitis accusantium ut, deserunt eius.</p>
                    </div>

                </div>

            </div>
        </section>

    <!-- end furniture section -->


    <!-- start contact section -->

        <section id="contact" class="p-5 contacts">
            <div class="container-fluid">

                <div class="col-md-5">
                    <h5 class="display-4 mb-3">Get New Letter</h5>

                    <form action="" method="">

                        <div class="form-group py-4">
                            <input type="text" name="name" id="name" class="form-control p-3 inputs" placeholder="Enter your name" autocomplete="off"/>
                            <label for="name" class="labels">Name</label>
                        </div>
    
                        <div class="form-group py-4">
                            <input type="email" name="email" id="email" class="form-control p-3 inputs" placeholder="Enter your email"  autocomplete="off"/>
                            <label for="email" class="labels">Email</label>
                        </div>
    
                        <div class="my-5">
                            <div class="form-check form-switch">
                                <input type="checkbox" name="accept" id="accept" class="form-check-input"/>
                                <label for="accept" class="text-light">I agree to get push notify</label>
                            </div>
                        </div>
    
                        <div class="d-grid">
                            <button type="submit" class="btn text-uppercase fw-bold rounded-0 submit-btns">Subscribe</button>
                        </div>
    
                    </form>

                </div>


            </div>
        </section>

    <!-- end contact section -->


    <!-- start footer section -->

        <footer class="bg-dark px-5">
            <div class="container-fluid">

                <div class="row text-white py-4">

                    <div class="col-md-3 col-sm-6">
                        <h5 class="mb-3"><img src="./assets/img/fav/favicon.png" width="70" alt="footericon">About PLANNCO</h5>
                        <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem aliquam repellat pariatur quasi, aperiam ipsam accusamus ipsa a modi harum, illo voluptates itaque blanditiis distinctio quam. Voluptate ipsa delectus ducimus.</p>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h5 class="mb-3">Visit Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);" class="footerlinks">Home</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">About</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Properties</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Services</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Customers</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Furniture</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h5 class="mb-3">Need Help?</h5>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);" class="footerlinks">Customer Services</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Online Chat</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Support</a></li>
                            <li><a href="javascript:void(0);" class="footerlinks">Info@plannco.com</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h5 class="mb-3">Contact Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0);" class="nav-link">1-9/19(A), 60 Street, Between Theik Pan Street and Aung San Street , Mandalay</a></li>
                            <li><a href="javascript:void(0);" class="nav-link">Phone : +95 578969 / +95 69826970</a></li>
                        </ul>
                    </div>
                    </div>

                </div>

                <div class="text-light d-flex justify-content-between border-top pt-4">
                    <p>&copy; <span id="getyear">2000</span>Copy right. Inc, All right reserved</p>
                    <ul class="list-unstyled d-flex">
                        <li><a href="javascript:void(0);" class="nav-link"><i class="fab fa-twitter"></i></a></li>
                        <li class="ms-3"><a href="javascript:void(0);" class="nav-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="ms-3"><a href="javascript:void(0);" class="nav-link"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>

            </div>
        </footer>

    <!-- end footer section -->





    <!-- bootstrap css1 js1 -->
    <script src="./assets/libs/bootstrap-5.3.2-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- jquery js1 -->
    <script src="./assets/libs/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>
    <!-- jquery ui css1 js1 -->
    <script src="./assets/libs/jquery-ui-1.13.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- lightbox2 css1 js1 -->
    <script src="./assets/libs/lightbox2-2.11.4/dist/js/lightbox.min.js" type="text/javascript"></script>
    <!-- custom js -->
    <script src="./js/app.js" type="text/javascript"></script>

    
</body>
</html>