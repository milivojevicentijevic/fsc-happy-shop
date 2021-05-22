 
<?php include 'partials/header.php'; ?>

<!-- slider -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4 animate__animated animate__zoomIn">Big beats on the go</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4 animate__animated animate__zoomIn">See imagination on display</h2> 
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4 animate__animated animate__zoomIn">Life without limits</h2>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- popular -->
<section class="popular container py-5">
    <h2 class="text-center mb-5">What's popular</h2>
    <article class="owl-carousel owl-theme text-center">
        <a href="" class="item border d-block">
            <div class="holder">
                <img src="img/pop1.jpg" alt="">
            </div>
            <h5>Product 1</h5>
        </a>
        <a href="" class="item border d-block">
            <div class="holder">
                <img src="img/pop2.jpg" alt="">
            </div>
            <h5>Product 2</h5>
        </a>
        <a href="" class="item border d-block">
            <div class="holder">
                <img src="img/pop3.jpg" alt="">
            </div>
            <h5>Product 3</h5>
        </a>
        <a href="" class="item border d-block">
            <div class="holder">
                <img src="img/pop4.jpg" alt="">
            </div>
            <h5>Product 4</h5>
        </a>
        <a href="" class="item border d-block">
            <div class="holder">
                <img src="img/pop5.jpg" alt="">
            </div>
            <h5>Product 5</h5>
        </a>
        <a href="" class="item border d-block">
            <div class="holder">
                <img src="img/pop6.jpg" alt="">
            </div>
            <h5>Product 6</h5>
        </a>
    </article>
</section>

<!-- new products -->
<section class="newProducts container">
    <h2 class="text-center mb-5">New products</h2>
    <div class="row">  <!-- <--- jer nemamo kontejner -->
        <div class="col-md-12 text-center">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fas fa-mobile-alt"></i>Mobile &amp; tablet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-desktop"></i>Computer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-laptop"></i>Laptop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-mouse-pointer"></i>Mouse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-tv"></i>Smart Watches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-headphones-alt"></i>Accessories</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row mt-5 slider no-gutters">
        <article class="owl-carousel owl-theme text-center">
            <a href="" class="item border d-block">
                <div class="holder">
                    <img src="img/tablets.jpg" alt="">
                </div>
                <div class="text">
                    <h5>Product 1</h5>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">
                        <span>100</span>
                        <span>80</span>
                    </div>
                </div>
            </a>
            <a href="" class="item border d-block">
                <div class="holder">
                    <img src="img/camera.jpg" alt="">
                </div>
                <div class="text">
                    <h5>Product 2</h5>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">
                        <span>100</span>
                        <span>80</span>
                    </div>
                </div>
            </a>
            <a href="" class="item border d-block">
                <div class="holder">
                    <img src="img/phones.jpg" alt="">
                </div>
                <div class="text">
                    <h5>Product 3</h5>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">
                        <span>100</span>
                        <span>80</span>
                    </div>
                </div>
            </a>
            <a href="" class="item border d-block">
                <div class="holder">
                    <img src="img/tablet-samsung.jpg" alt="">
                </div>
                <div class="text">
                    <h5>Product 4</h5>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">
                        <span>100</span>
                        <span>80</span>
                    </div>
                </div>
            </a>    
        </article>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-6 ads">
            <a href="">
                <img class="img-fluid" src="img/ad1-1.jpg" alt="">
                <div class="text">
                    <h5>Good to go</h5>
                    <p>Your headphones are an extension of you, they go with you everywhere</p>
                    <a href=""><i class="fas fa-chevron-right"></i></a>
                </div>
            </a>
        </div>
        <div class="col-md-6 ads">
            <a href="">
                <img class="img-fluid" src="img/ad2-1.jpg" alt="">
                <div class="text">
                    <h5>Easy Bluetooth</h5>
                    <p>Connect your smarthpone with One-touch NFC and get the beats going in an instant.</p>
                    <a href=""><i class="fas fa-chevron-right"></i></a>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- slider blog -->
<section class="blog mt-5">
    <div class="container">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
                <!-- slide 1 -->
                <div class="carousel-item active">
                    <div class="row no-gutters justify-content-between">
                        <!-- card 1 -->
                        <div class="col-md-6 card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="img/large1-270x270.jpg" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem Khaled Ipsum</h5>
                                        <p class="card-text">Our urban and streetwear fashion place is no Old Navy,
                                            Banana Republic or a Walmart</p>
                                        <div class="d-flex justify-content-start card-text w-100">
                                            <a href=""><i class="far fa-comment"></i>0</a>
                                            <img src="img/seven-up.jpeg" alt="">
                                            <a href="">7uptheme</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div class=" col-md-6 card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="img/post_1-270x270.jpg" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem Khaled Ipsum</h5>
                                        <p class="card-text">Our urban and streetwear fashion
                                            place is no Old Navy,
                                            Banana Republic or a Walmart</p>
                                        <div class="d-flex justify-content-start card-text w-100">
                                            <a href=""><i class="far fa-comment"></i>0</a>
                                            <img src="img/seven-up.jpeg" alt="">
                                            <a href="">7uptheme</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 2 -->
                <div class="carousel-item">
                    <div class="row no-gutters justify-content-between">
                        <!-- card 1 -->
                        <div class="col-md-6 card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="img/post_2-270x270.jpg" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem Khaled Ipsum</h5>
                                        <p class="card-text">Our urban and streetwear fashion place is no Old Navy,
                                            Banana Republic or a Walmart</p>
                                        <div class="d-flex justify-content-start card-text w-100">
                                            <a href=""><i class="far fa-comment"></i>0</a>
                                            <img src="img/seven-up.jpeg" alt="">
                                            <a href="">7uptheme</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div class="col-md-6 card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="img/post_3-270x270.jpg" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem Khaled Ipsum</h5>
                                        <p class="card-text">Our urban and streetwear fashion place is no Old Navy,
                                            Banana Republic or a Walmart</p>
                                        <div class="d-flex justify-content-start card-text w-100">
                                            <a href=""><i class="far fa-comment"></i>0</a>
                                            <img src="img/seven-up.jpeg" alt="">
                                            <a href="">7uptheme</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>