<?include('config/connection.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="Bussiness Coaching, Bussiness, Coaching, Event, EO">
  <meta name="author" content="Lids Enterprise">

  <title>Lids Enterprise - Business Coaching & Event</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <!-- Owl Carousel CSS -->
  <link href="vendor/owl-carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" >

  <!-- Owl Carousel Theme CSS -->
  <link href="vendor/owl-carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Lids Enterprise</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <!-- <li class="nav-item dropdown dropdown-service">
            <a class="nav-link dropdown-toggle" href="#" id="navbarOurServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our services</a>
            <div class="dropdown-menu dropdown-menu-service" aria-labelledby="navbarOurServices">
              <a class="dropdown-item d-none" href="#services">Service</a>
              <a class="dropdown-item" href="#">Corporate Training</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Business Mentoring</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Personal Coaching</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Financial Service</a>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Our services</a>
          </li>
          <li class="nav-item dropdown dropdown-event">
            <a class="nav-link  dropdown-toggle" href="#" id="navbarEvent" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Event</a>
            <div class="dropdown-menu" aria-labelledby="navbarEvent">
              <a class="dropdown-item js-scroll-trigger" href="#event">Coming event</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="last_event.php?year=<?=date('Y')?>" target="_blank">Last event</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#our-client">Our Client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#testimonial">Testimonial</a>
          </li>
          <? 
             $sqlOurPartner    = "SELECT ID,name,status FROM partner WHERE status='1' ORDER BY name ASC";
             $queryOurPartner  = mysqli_query($db, $sqlOurPartner);

             $countOurPartner  = mysqli_num_rows($queryOurPartner);
          if(!empty($countOurPartner)) : ?>
           <li class="nav-item dropdown dropdown-partner">
            <a class="nav-link dropdown-toggle" href="#" id="ourPartner" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Partner</a>
            <div class="dropdown-menu" aria-labelledby="ourPartner">
                  <? while($rowPartner = mysqli_fetch_array($queryOurPartner)){ $escapeString=str_replace(' ','-', $rowPartner['name'])?>
                      <a class="dropdown-item" href="partner.php?link=<?=$escapeString?>"><?= $rowPartner['name']?></a>
                      <div class="dropdown-divider"></div>
                  <? } ?>
            </div>
          </li>
          <? endif ; ?>
         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Event & Business Coaching</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <h4 class="text-white-75 font-weight-light mb-3 font-weight-bold">LIDS</h4>
          <p class="text-white-75 font-weight-light mb-5 tag-line"><span class="pr-2">Leadership</span><span class="pr-2">.</span><span class="pr-2">Interpersonal Skill</span><span class="pr-2">.</span><span class="pr-2">Develop Mindset</span><span class="pr-2">.</span><span>Self Mastery</span></p>
        </div>
      </div>
    </div>
  </header>
