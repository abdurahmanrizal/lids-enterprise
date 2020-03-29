  <!-- include template header -->
  <?
  include('template/header.php');
  include('config/connection.php');
  ?>

  <!-- MAIN CONTENT -->

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">About Founder</h2>
          <hr class="divider light my-4">
          <?
          $getAboutFounder = "SELECT * FROM about_founder";
          $resultAboutFounder = mysqli_query($db, $getAboutFounder);
          ?>
          <? if (mysqli_num_rows($resultAboutFounder) > 0) : ?>
            <? while ($row = mysqli_fetch_array($resultAboutFounder)) {  ?>
              <? if (!file_exists('/Applications/XAMPP/htdocs/admin/assets/upload/about_founder/' . $row['filename']) || $row['filename'] == null) : ?>
                <img src="img/owner_resize.jpg" alt="" width="200" height="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <? else : ?>
                <img src="http://localhost/admin/assets/upload/about_founder/<?= $row['filename'] ?>" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" id="img-owner">
              <? endif; ?>
              <h4 class="text-white mt-0">Lidia Lavigne</h4>
              <br>
              <p class="text-white-50 mb-4"><?= $row['description'] ?></p>
            <? } ?>
          <? endif; ?>
          <a href="#portfolio" class="btn btn-primary" id="get-started">Get Started</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Our service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-4 col-md-4 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fas fa-building text-primary mb-4"></i>
            <h3 class="h4 mb-2">Corporate Training</h3>
            <p class="text-muted mb-0">Customised Training for Private or Global Company</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 text-center">
          <div class="mt-5">
            <i class="fas fa-4x far fa-handshake text-primary mb-4"></i>
            <h3 class="h4 mb-2">Business Mentoring</h3>
            <p class="text-muted mb-0">to Help you Setting Up or Scaling Up Your Business</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fas fa-user text-primary mb-4"></i>
            <h3 class="h4 mb-2">Personal Coaching</h3>
            <p class="text-muted mb-0">One on One Private Coaching</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fas fa-money-bill-wave text-primary mb-4"></i>
            <h3 class="h4 mb-2">Financial Service</h3>
            <p class="text-muted mb-0">Find the trusted Financial Advisor in Town</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Our Life Coach Programs</h3>
            <p class="text-muted mb-0">Best Collaboration with Our Life Coach Partner</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Events Section -->
  <section id="event" class="p-3 mt-3">
    <h2 class="text-center mt-0">Events</h2>
    <hr class="divider my-4">
    <div class="container">
      <div class='row'>
        <?
        $year         = date('Y');
        $sqlEvents    = "SELECT url_img_event FROM events WHERE YEAR(date) = date('Y') AND status='1' ORDER BY ID DESC LIMIT 6";
        $queryEvents  = mysqli_query($db, $sqlEvents);

        $numberEvents = mysqli_num_rows($queryEvents);
        if (empty($numberEvents)) : ?>
          <div class="alert alert-warning mx-auto" role="alert">
            No Events for this months
          </div>
        <? elseif ($numberEvents == 1) : ?>
          <div class="col-lg-12 col-md-12 col-12">
            <? while ($rowEvents = mysqli_fetch_array($queryEvents)) { ?>
              <img class="img-fluid d-block mx-auto" src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/events/<?= $rowEvents['url_img_event'] ?>" alt="Owl Image" width="300" height="auto">
            <? } ?>
          </div>
        <? elseif ($numberEvents == 2) : ?>
          <div class="owl-carousel owl-theme d-block mx-auto" id="event-2">
            <? while ($rowEvents = mysqli_fetch_array($queryEvents)) { ?>
              <div class="item"><img class="img-fluid d-block mx-auto" src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/events/<?= $rowEvents['url_img_event'] ?>" alt="Owl Image" width="300"></div>
            <? } ?>
          </div>
        <? elseif ($numberEvents == 3) : ?>
          <div class="owl-carousel owl-theme d-block mx-auto" id="event-3">
            <? while ($rowEvents = mysqli_fetch_array($queryEvents)) { ?>
              <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/events/<?= $rowEvents['url_img_event'] ?>" alt="Owl Image"></div>
            <? } ?>
          </div>
        <? else : ?>
          <div class="owl-carousel owl-theme text-center" id="event-4">
            <? while ($rowEvents = mysqli_fetch_array($queryEvents)) { ?>
              <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/events/<?= $rowEvents['url_img_event'] ?>" alt="Owl Image"></div>
            <? } ?>
          </div>
        <? endif; ?>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <?
        $sqlGallery     = "SELECT project_name, url_img_gallery FROM gallery WHERE status='1'";
        $queryGallery   = mysqli_query($db, $sqlGallery);
        $count_gallery  = mysqli_num_rows($queryGallery);
        if (empty($count_gallery)) : ?>
          <div class="alert alert-warning mx-auto" role="alert">
            No gallery uploaded
          </div>
        <? else : ?>
          <? while ($rowGallery = mysqli_fetch_array($queryGallery)) { ?>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/gallerys/<?= $rowGallery['url_img_gallery'] ?>">
                <img class="img-fluid" src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/gallerys/<?= $rowGallery['url_img_gallery'] ?>" alt="photos gallery">
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">
                    Category
                  </div>
                  <div class="project-name">
                    <?= strtoupper($rowGallery['project_name']) ?>
                  </div>
                </div>
              </a>
            </div>
          <? } ?>
        <? endif; ?>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>

  <!-- Blog Section -->
  <section class="page-section bg-primary" id="blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Blog</h2>
          <hr class="divider light my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <?
        $sqlArticle        = "SELECT * FROM blog WHERE status='1'";
        $queryArticle      = mysqli_query($db, $sqlArticle);

        $check_rowsArticle = mysqli_num_rows($queryArticle);
        ?>
        <? if (empty($check_rowsArticle)) : ?>
          <div class="alert alert-warning d-block mx-auto" role="alert">
            <span>Sorry, article doesn't exist for now</span>
          </div>
        <? elseif ($check_rowsArticle == 1) : ?>
          <div class="col-lg-4"></div>
          <?
            while ($rowArticle = mysqli_fetch_array($queryArticle)) {
              $title = str_replace(' ', '-', $rowArticle['title']); ?>
            <div class="col-lg-4 col-md-6 mb-2">
              <!-- Card -->
              <div class="card shadow card-width card-margin">
                <!-- Card content -->
                <div class="card-body d-flex flex-row">
                  <!-- Content -->
                  <div>
                    <!-- Title -->
                    <h5 class="card-title font-weight-bold mb-2"><a href="blog.php?article=<?= $title ?>" style="color:black;" target="_blank"><?= $rowArticle['title'] ?></a></h5>
                    <!-- Subtitle -->
                    <span class="card-text" style="color: grey; font-size: 13px;"><i class="fas fa-user pr-2"></i> <?= $rowArticle['author'] ?></span>
                    <span class="card-text ml-2" style="color: grey; font-size: 13px;"><i class="far fa-calendar-alt pr-2"></i><?= date('d/m/Y', strtotime($rowArticle['date'])) ?></span>
                  </div>
                </div>
                <!-- Card image -->
                <div class="view overlay">
                  <img class="card-img-top rounded-0" src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/articles/<?= $rowArticle['url_img_blog'] ?>" alt="photo article">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card content -->
                <div class="card-body">
                  <div class="collapse-content">
                    <!-- Text -->
                    <p class="card-text text-justify comment more" style="font-size: 14px;">
                      <?
                          $tagsArticle = strip_tags($rowArticle['description']);

                          $displayDesc = substr($tagsArticle, 0, 59);
                          ?>
                      <?= $displayDesc . ' ...' ?> <span><a href="blog.php?article=<?= $title ?>" target="_blank">Readmore</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Card -->
            </div>
          <? } ?>
          <div class="col-lg-4"></div>
        <? else : ?>
          <? if ($check_rowsArticle == 2) : ?>
            <div class="row help-row">
              <? while ($rowArticle = mysqli_fetch_array($queryArticle)) {
                    $title = str_replace(' ', '-', $rowArticle['title']); ?>
                <div class="col-lg-6 col-md-6 col-sm-6 d-block mb-2 card-margin">
                  <div class="card shadow card-width">
                    <!-- Card content -->
                    <div class="card-body d-flex flex-row">
                      <!-- Content -->
                      <div>
                        <!-- Title -->
                        <h5 class="card-title font-weight-bold mb-2"><a href="blog.php?article=<?= $title ?>" style="color:black;" target="_blank"><?= $rowArticle['title'] ?></a></h5>
                        <!-- Subtitle -->
                        <span class="card-text" style="color: grey; font-size: 13px;"><i class="fas fa-user pr-2"></i> <?= $rowArticle['author'] ?></span>
                        <span class="card-text ml-2" style="color: grey; font-size: 13px;"><i class="far fa-calendar-alt pr-2"></i><?= date('d/m/Y', strtotime($rowArticle['date'])) ?></span>
                      </div>
                    </div>
                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top rounded-0" src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/articles/<?= $rowArticle['url_img_blog'] ?>" alt="photo article">
                      <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                      <div class="collapse-content">
                        <!-- Text -->
                        <p class="card-text text-justify comment more" style="font-size: 14px;">
                          <?
                                $tagsArticle = strip_tags($rowArticle['description']);

                                $displayDesc = substr($tagsArticle, 0, 59);
                                ?>
                          <?= $displayDesc . ' ...' ?> <span><a href="blog.php?article=<?= $title ?>" target="_blank">Readmore</a></span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              <? } ?>
            </div>
          <? else : ?>
            <div class="owl-carousel owl-theme d-block mx-auto" id="article">
              <? while ($rowArticle = mysqli_fetch_array($queryArticle)) {
                    $title = str_replace(' ', '-', $rowArticle['title']); ?>
                <div class="item">
                  <!-- Card -->
                  <div class="card shadow card-width">
                    <!-- Card content -->
                    <div class="card-body d-flex flex-row">
                      <!-- Content -->
                      <div>
                        <!-- Title -->

                        <h5 class="card-title font-weight-bold mb-2"><a href="blog.php?article=<?= $title ?>" style="color:black;" target="_blank"><?= $rowArticle['title'] ?></a></h5>
                        <!-- Subtitle -->
                        <span class="card-text" style="color: grey; font-size: 13px;"><i class="fas fa-user pr-2"></i> <?= $rowArticle['author'] ?></span>
                        <span class="card-text ml-2" style="color: grey; font-size: 13px;"><i class="far fa-calendar-alt pr-2"></i><?= date('d/m/Y', strtotime($rowArticle['date'])) ?></span>
                      </div>
                    </div>
                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top rounded-0" src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/articles/<?= $rowArticle['url_img_blog'] ?>" alt="photo article">
                      <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                      <div class="collapse-content">
                        <!-- Text -->
                        <p class="card-text text-justify comment more" style="font-size: 14px;">
                          <?
                                $tagsArticle = strip_tags($rowArticle['description']);

                                $displayDesc = substr($tagsArticle, 0, 59);
                                ?>
                          <?= $displayDesc . ' ...' ?> <span><a href="blog.php?article=<?= $title ?>" target="_blank">Readmore</a></span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              <? } ?>
            </div>
          <? endif; ?>
        <? endif; ?>

      </div>
    </div>
  </section>

  <!-- Our Client Section -->
  <section class="page-section" id="our-client">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Our Client</h2>
          <hr class="divider my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?
        $sqlCompany        = "SELECT * FROM company WHERE status='1' ORDER BY name_company ASC";
        $queryCompany      = mysqli_query($db, $sqlCompany);

        $check_rowsCompany = mysqli_num_rows($queryCompany);
        ?>
        <? if (empty($check_rowsCompany)) : ?>
          <div class="alert alert-warning d-block mx-auto" role="alert">
            <span>Sorry, article doesn't exist for now</span>
          </div>
        <? else : ?>
          <div class="col-md-12">
            <div class="p-2" style="text-align:center">
              <? while ($rowCompany = mysqli_fetch_array($queryCompany)) { ?>
                <img class="img-fluid ml-2 mb-3" src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/company/<?= $rowCompany['url_img_company'] ?>" alt="<?= $rowCompany['name_company'] ?>" width="92">
              <? } ?>
            </div>
          </div>
        <? endif; ?>

      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- Testimoni Section -->
  <section class="page-section bg-primary" id="testimonial">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0 text-light">Testimonial</h2>
          <hr class="divider light my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?
        $sqlTestimonial        = "SELECT * FROM testimonial WHERE status='1' ORDER BY id DESC LIMIT 3";
        $queryTestimonial      = mysqli_query($db, $sqlTestimonial);

        $check_rowsTestimonial = mysqli_num_rows($queryTestimonial);
        ?>
        <? if (empty($check_rowsTestimonial)) : ?>
          <div class="alert alert-warning d-block mx-auto" role="alert">
            <span>Sorry, article doesn't exist for now</span>
          </div>
        <? else : ?>
          <? while ($rowTestimonial = mysqli_fetch_array($queryTestimonial)) { ?>
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
              <!--Card-->
              <div class="card testimonial-card">
                <!--Background color-->
                <div class="card-up info-color"></div>
                <!--Avatar-->
                <div class="avatar mx-auto white mt-3">
                  <img src="http://<?= $_SERVER['SERVER_NAME'] ?>/admin/assets/upload/testimonial/<?= $rowTestimonial['url_img_profile'] ?>" alt="<?= $rowTestimonial['name'] ?>" class="img-fluid testimoni-ava">
                </div>
                <div class="card-body">
                  <!--Name-->
                  <h6 class="font-weight-bold mb-2 text-center"><?= $rowTestimonial['name'] ?></h6>
                  <p class="text-center" style="font-size:12.5px;color:grey;"><?= $rowTestimonial['position'] ?> , <?= $rowTestimonial['company'] ?></p>
                  <hr>
                  <!--Quotation-->
                  <p style="color:grey"><i class="fas fa-quote-left pr-2"></i><span class="mt-2"><?= $rowTestimonial['testimoni'] ?></span></p>
                </div>
              </div>
            </div>
          <? } ?>
        <? endif; ?>
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- Contact Section -->
  <section class="page-section page-section-contact" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 ml-auto text-center mb-5 mb-lg-0">
          <!-- <i class="fas fa-phone fa-2x mb-3 text-muted"></i> -->
          <img src="img/icon/phone_vintage.png" class="mb-3" width="35" height="35" alt="">
          <p class="d-block"><a href="https://bit.ly/whatsapp-lids" target="_blank">(+62) 81238184614</a></p>
        </div>
        <div class="col-lg-4 col-md-4  mr-auto text-center  mb-5 mb-lg-0">
          <!-- <i class="fas fa-envelope fa-2x mb-3 text-muted"></i> -->
          <img src="img/icon/mail.png" class="mb-3" width="35" height="35" alt="">
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <p class="d-block">info@lidsenterprise.com</p>
        </div>
        <div class="col-lg-4 col-md-4 mr-auto text-center">
          <!-- <i class=" fab fa-instagram fa-2x mb-3 text-muted"></i> -->
          <img src="img/icon/instagram.png" class="mb-3" width="35" height="35" alt="">
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="https://instagram.com/lidsenterprise" target="_blank">lidsenterprise</a>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
          <!-- <i class=" fab fa-instagram fa-2x mb-3 text-muted"></i> -->
          <img src="img/icon/location.png" class="mb-3" width="35" height="35" alt="">
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="https://goo.gl/maps/tHCeXgFP18Lp6TBJ7" target="_blank">Jl. Gn Tangkuban Perahu Perum Padang Griya Taman Sekar IX No. 19 Padang Sambian Denpasar Barat Bali</a>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTENT -->

  <?
  include('template/footer.php');
  include('template/javascript.php');
  ?>