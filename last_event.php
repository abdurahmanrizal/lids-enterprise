<? 
    include('template/header_link.php');
    include('config/connection.php');

    if(isset($_GET['year'])){
        $year = $_GET['year'];
    } 
?>
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
                                <h1 class="card-title mb-3 post-title font-weight-bold"><?= $year ?></h1>
                            <? endif ;?>
                           
                        </div>
                        <!-- january month event -->
                        <p class="mb-3 font-weight-bold">January</p>
                        <hr>
                        <?
                            $sqlEventJanuary   = "SELECT url_img_event FROM events WHERE MONTH(date) = '01' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventJanuary = mysqli_query($db, $sqlEventJanuary);

                            $checkEventJanuary = mysqli_num_rows($queryEventJanuary);

                            if(empty($checkEventJanuary)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-jan">
                                <? while($rowEventJanuary = mysqli_fetch_array($queryEventJanuary)){ ?>
                                    <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventJanuary['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- february month event -->
                        <p class="mb-3 font-weight-bold">February</p>
                        <hr>
                        <?
                            $sqlEventFebruary   = "SELECT url_img_event FROM events WHERE MONTH(date) = '02' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventFebruary = mysqli_query($db, $sqlEventFebruary);

                            $checkEventFebruary = mysqli_num_rows($queryEventFebruary);

                            if(empty($checkEventFebruary)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-feb">
                                <? while($rowEventFebruary = mysqli_fetch_array($queryEventFebruary)){ ?>
                                    <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventFebruary['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- march month event -->
                        <p class="mb-3 font-weight-bold">March</p>
                        <hr>
                        <?
                            $sqlEventMarch   = "SELECT url_img_event FROM events WHERE MONTH(date) = '03' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventMarch = mysqli_query($db, $sqlEventMarch);

                            $checkEventMarch = mysqli_num_rows($queryEventMarch);

                            if(empty($checkEventMarch)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-mar">
                                <? while($rowEventMarch = mysqli_fetch_array($queryEventMarch)){ ?>
                                    <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventMarch['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- april month event -->
                        <p class="mb-3 font-weight-bold">April</p>
                        <hr>
                        <?
                            $sqlEventApril   = "SELECT url_img_event FROM events WHERE MONTH(date) = '04' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventApril = mysqli_query($db, $sqlEventApril);

                            $checkEventApril = mysqli_num_rows($queryEventApril);

                            if(empty($checkEventApril)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-apr">
                                <? while($rowEventApril = mysqli_fetch_array($queryEventApril)){ ?>
                                    <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventApril['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- may month event -->
                        <p class="mb-3 font-weight-bold">May</p>
                        <hr>
                        <?
                            $sqlEventMay   = "SELECT url_img_event FROM events WHERE MONTH(date) = '05' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventMay = mysqli_query($db, $sqlEventMay);

                            $checkEventMay = mysqli_num_rows($queryEventMay);

                            if(empty($checkEventMay)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-may">
                                <? while($rowEventMay = mysqli_fetch_array($queryEventMay)){ ?>
                                    <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventMay['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- june month event -->
                        <p class="mb-3 font-weight-bold">June</p>
                        <hr>
                        <?
                            $sqlEventJune   = "SELECT url_img_event FROM events WHERE MONTH(date) = '06' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventJune = mysqli_query($db, $sqlEventJune);

                            $checkEventJune = mysqli_num_rows($queryEventJune);

                            if(empty($checkEventJune)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-jun">
                                <? while($rowEventJune = mysqli_fetch_array($queryEventJune)){ ?>
                                    <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventJune['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- july month event -->
                        <p class="mb-3 font-weight-bold">July</p>
                        <hr>
                        <?
                            $sqlEventJuly   = "SELECT url_img_event FROM events WHERE MONTH(date) = '07' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventJuly = mysqli_query($db, $sqlEventJuly);

                            $checkEventJuly = mysqli_num_rows($queryEventJuly);

                            if(empty($checkEventJuly)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-jul">
                                <? while($rowEventJuly = mysqli_fetch_array($queryEventJuly)){ ?>
                                    <div class="item"><img src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventJuly['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- august month event -->
                        <p class="mb-3 font-weight-bold">August</p>
                        <hr>
                        <?
                            $sqlEventAugust   = "SELECT url_img_event FROM events WHERE MONTH(date) = '08' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventAugust = mysqli_query($db, $sqlEventAugust);

                            $checkEventAugust = mysqli_num_rows($queryEventAugust);

                            if(empty($checkEventAugust)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-aug">
                                <? while($rowEventAugust = mysqli_fetch_array($queryEventAugust)){ ?>
                                    <div class="item"><img src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventAugust['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- september month event -->
                        <p class="mb-3 font-weight-bold">September</p>
                        <hr>
                        <?
                            $sqlEventSeptember   = "SELECT url_img_event FROM events WHERE MONTH(date) = '09' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventSeptember = mysqli_query($db, $sqlEventSeptember);

                            $checkEventSeptember = mysqli_num_rows($queryEventSeptember);

                            if(empty($checkEventSeptember)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-sep">
                                <? while($rowEventSeptember = mysqli_fetch_array($queryEventSeptember)){ ?>
                                    <div class="item"><img src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventSeptember['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- october month event -->
                        <p class="mb-3 font-weight-bold">October</p>
                        <hr>
                        <?
                            $sqlEventOctober   = "SELECT url_img_event FROM events WHERE MONTH(date) = '10' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventOctober = mysqli_query($db, $sqlEventOctober);

                            $checkEventOctober = mysqli_num_rows($queryEventOctober);

                            if(empty($checkEventOctober)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-oct">
                                <? while($rowEventOctober = mysqli_fetch_array($queryEventOctober)){ ?>
                                    <div class="item"><img src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventOctober['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- november month event-->
                        <p class="mb-3 font-weight-bold">November</p>
                        <hr>
                        <?
                            $sqlEventNovember   = "SELECT url_img_event FROM events WHERE MONTH(date) = '11' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventNovember = mysqli_query($db, $sqlEventNovember);

                            $checkEventNovember = mysqli_num_rows($queryEventNovember);

                            if(empty($checkEventNovember)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-nov">
                                <? while($rowEventNovember = mysqli_fetch_array($queryEventNovember)){ ?>
                                    <div class="item"><img src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventNovember['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
                        <!-- december month event -->
                        <p class="mb-3 font-weight-bold">December</p>
                        <hr>
                        <?
                            $sqlEventDecember   = "SELECT url_img_event FROM events WHERE MONTH(date) = '12' AND YEAR(date) = '$year' AND status ='1'";
                            $queryEventDecember = mysqli_query($db, $sqlEventDecember);

                            $checkEventDecember = mysqli_num_rows($queryEventDecember);

                            if(empty($checkEventDecember)) : ?>
                                <div class="alert alert-warning" role="alert">
                                    No events this month
                                </div>
                            <? else : ?>
                                <div class="owl-carousel owl-theme text-center p-2 slide-carousel-month" id="slide-carousel-des">
                                <? while($rowEventDecember = mysqli_fetch_array($queryEventDecember)){ ?>
                                    <div class="item"><img src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowEventDecember['url_img_event']?>" alt="Owl Image"></div>
                                <? } ?>
                                </div>
                            <? endif;?>
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
                            <?
                                $sqlArchive     = "SELECT DISTINCT YEAR(date) as year FROM events WHERE status='1'";
                                $queryArchive   = mysqli_query($db, $sqlArchive);
                               
                                while($rowArchive = mysqli_fetch_array($queryArchive)){?>
                                 <?
                                    $countYear = $rowArchive['year'];
                                    $sqlCountArchive   = "SELECT * FROM events WHERE YEAR(date) = '$countYear' AND status='1'";
                                    $queryCountArchive = mysqli_query($db, $sqlCountArchive);

                                    $countArchive      = mysqli_num_rows($queryCountArchive);
                                 ?>
                                 <a class="list-group-item list-group-item-action flex-column align-items-start" href="last_event.php?year=<?=$rowArchive['year']?>"><?=$rowArchive['year']?><span class="badge badge-pill badge-success"> <?=$countArchive?> </span></a>
                            <?}?>
                        </div>
                    </div>  
                </div>
                <div class="mb-5">
                    <div class="card">
                        <div class="card-body">
                           <h5 class="card-title m-0">New Article</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <?
                                $year                = date('Y');
                                $sqlNewArticle       = "SELECT * FROM blog WHERE YEAR(date) = '$year' AND status='1'";
                                $queryNewArticle     = mysqli_query($db,$sqlNewArticle);
                                while($rowNewArticle = mysqli_fetch_array($queryNewArticle)){
                                $escapeStringArticle = str_replace(' ', '-', $rowNewArticle['title']);
                                $word                = str_word_count(strip_tags($rowNewArticle['description']));
                                $m                   = floor($word / 200);
                                $est                 = $m . ' minute';
                            ?>

                                <a class="list-group-item list-group-item-action flex-column align-items-start" href="blog.php?article=<?= $escapeStringArticle ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="rounded mr-3 float-left" src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/articles/<?=$rowNewArticle['url_img_blog']?>" alt="gambar-blog" width="70" height="70">
                                            <h6 class="mb-1"><?= $rowNewArticle['title']?></h6>
                                            <small class="text-secondary"><?= date('d M Y', strtotime($rowNewArticle['date']))?> : <?= $est ?></small>
                                        </div>
                                    </div>
                                </a>

                            <?}?>
                        </div>
                    </div>  
                </div>
                
            </aside>
        </div>
    </div>
</div>
<? 
    include('template/footer.php');
    include('template/javascript.php'); 
?>