<? include('template/header_link.php') ?>
<div class="container my-0  my-md-5">
    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <article class="card mb-5">
                <div class="card-body p-md-5">
                    <div>
                        <div class="mb-3">
                            <? if(empty($_GET['year'])) :?>
                                <h1 class="card-title mb-3 post-title font-weight-bold">2019</h1>
                            <? else :?>
                                <h1 class="card-title mb-3 post-title font-weight-bold"><?= $_GET['year'] ?></h1>
                            <? endif ;?>
                           
                        </div>
                        <!-- january month event -->
                        <p class="mb-3 font-weight-bold">January</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                        <!-- february month event -->
                        <p class="mb-3 font-weight-bold">February</p>
                        <hr>
                        <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-feb">
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                        </div>
                        <!-- march month event -->
                        <p class="mb-3 font-weight-bold">March</p>
                        <hr>
                        <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-mar">
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                        </div>
                        <!-- april month event -->
                        <p class="mb-3 font-weight-bold">April</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                        <!-- may month event -->
                        <p class="mb-3 font-weight-bold">May</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                        <!-- june month event -->
                        <p class="mb-3 font-weight-bold">June</p>
                        <hr>
                        <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-jun">
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                        </div>
                        <!-- july month event -->
                        <p class="mb-3 font-weight-bold">July</p>
                        <hr>
                        <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-jul">
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-3.jpg" alt="Owl Image"></div>
                            <div class="item"><img src="img/portfolio/thumbnails/event-1.jpg" alt="Owl Image"></div>
                        </div>
                        <!-- august month event -->
                        <p class="mb-3 font-weight-bold">August</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                        <!-- september month event -->
                        <p class="mb-3 font-weight-bold">September</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                        <!-- october month event -->
                        <p class="mb-3 font-weight-bold">October</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                        <!-- november month event-->
                        <p class="mb-3 font-weight-bold">November</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                        <!-- december month event -->
                        <p class="mb-3 font-weight-bold">December</p>
                        <hr>
                        <div class="alert alert-warning" role="alert">
                            No events this month
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-12 col-lg-4">
            <aside>
                <div class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-0">Archive Event</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="last_event.php?year=2018">2018 <span class="badge badge-pill badge-success">10</span></a>
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="last_event.php?year=2017">2017 <span class="badge badge-pill badge-success">7</span></a>
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="last_event.php?year=2016">2016 <span class="badge badge-pill badge-success">1</span></a>
                        </div>
                    </div>  
                </div>
                <div class="mb-5">
                    <div class="card">
                        <div class="card-body">
                           <h5 class="card-title m-0">New Article</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="blog.php">
                                <div class="row">
                                    <div class="col-12">
                                        <img class="rounded mr-3 float-left" src="img/blog/blog-1.jpeg" alt="gambar" width="70" height="70">
                                        <h6 class="mb-1">Happiness is When We Can Inspire More People</h6>
                                        <small class="text-secondary">01 Oct 2019 : Baca 4 menit</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="blog.php">
                                <div class="row">
                                    <div class="col-12">
                                        <img class="rounded mr-3 float-left" src="img/blog/blog-1.jpeg" alt="gambar" width="70" height="70">
                                        <h6 class="mb-1">Happiness is When We Can Inspire More People</h6>
                                        <small class="text-secondary">01 Oct 2019 : Baca 4 menit</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action flex-column align-items-start" href="blog.php">
                                <div class="row">
                                    <div class="col-12">
                                        <img class="rounded mr-3 float-left" src="img/blog/blog-1.jpeg" alt="gambar" width="70" height="70">
                                        <h6 class="mb-1">Happiness is When We Can Inspire More People</h6>
                                        <small class="text-secondary">01 Oct 2019 : Baca 4 menit</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
                
            </aside>
        </div>
    </div>
</div>
<? include('template/footer.php') ?>