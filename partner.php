<?
    include('template/header_link.php');
    include('config/connection.php');

    if(isset($_GET['link'])){
        $getLink   = str_replace('-',' ',$_GET['link']);
        $sqlLink   = "SELECT name FROM partner WHERE name='$getLink' AND status='1'";
        $queryLink = mysqli_query($db,$sqlLink);

        $rowCheck  = mysqli_num_rows($queryLink);
        if(empty($rowCheck)){
            header('location: 404.php');
        }else{
            $link = $getLink;
        }
    }else{
        header('location:index.php');
    }
?>
<div class="container my-0  my-md-5">
    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <article class="card mb-5">
                <div class="card-body p-md-5">
                    <h4 class="text-center font-weight-bold mb-3"> <?= $link ?> Partner</h4>
                    <div>
                       <?
                            $sqlPartner         = "SELECT ID, url_img_partner, name, name_partner FROM our_partner WHERE name_partner = '$link' AND status = '1'";
                            $queryPartner       = mysqli_query($db, $sqlPartner);
                            
                            $checkPartner       = mysqli_num_rows($queryPartner);

                        if(empty($checkPartner)):?>
                            <br>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <div>
                                    <p class="font-weight-bold text-center mt-3">Sorry, no partners have joined yet</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> 
                            </div>
                        <? else : ?>
                            <div class="row mt-4">
                            <? while($rowPartner = mysqli_fetch_array($queryPartner)){?>
                                <div class="col-lg-3 col-md-3 col-3">
                                    <div class="card testimonial-card">
                                        <!--Background color-->
                                        <div class="card-up info-color"></div>
                                        <!--Avatar-->
                                        <div class="avatar mx-auto white mt-3">
                                            <? if($rowPartner['url_img_partner'] != NULL) : ?>
                                                <img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/partners/<?= $rowPartner['url_img_partner']?>" alt="<?=$rowPartner['name']?>" class="img-fluid testimoni-ava">
                                            <? else : ?>
                                                <img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/images/faces/user.png" class="img-fluid testimoni-ava">
                                            <? endif; ?>
                                           
                                        </div>
                                        <div class="card-body">
                                            <!--Name-->
                                            <p class="font-weight-bold mb-2 text-center" style="font-size:13px"><?= $rowPartner['name']?></p>
                                        </div>
                                    </div>
                                </div>
                            
                            <? } ?>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-12 col-lg-4">
            <aside>
                <div class="mb-5">
                    <div class="card">
                        <div class="card-body">
                           <h5 class="card-title m-0">New Article</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <?
                                $year                = date('Y');
                                $sqlNewArticle       = "SELECT * FROM blog WHERE YEAR(date) = '$year' AND status='1' LIMIT 4";
                                $queryNewArticle     = mysqli_query($db,$sqlNewArticle);
                                while($rowNewArticle = mysqli_fetch_array($queryNewArticle)){
                                $strip_title         = str_replace(' ', '-', $rowNewArticle['title']);
                                $word                = str_word_count(strip_tags($rowNewArticle['description']));
                                $m                   = floor($word / 200);
                                $est                 = $m . ' minute';
                            ?>

                                <a class="list-group-item list-group-item-action flex-column align-items-start" href="blog.php?article=<?=$strip_title?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="rounded mr-3 float-left" src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/articles/<?=$rowNewArticle['url_img_blog']?>" alt="gambar-blog" width="70" height="70">
                                            <h6 class="mb-1"><?= $rowNewArticle['title']?></h6>
                                            <small class="text-secondary"><?= date('d M Y', strtotime($rowNewArticle['date']))?> : <?= $est ?></small>
                                        </div>
                                    </div>
                                </a>

                            <?}?>
                        </div>
                    </div>  
                </div>
                <div class="mb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-0 text-center">Coming Event</h5>
                    </div>
                    <div class="owl-carousel owl-theme text-center p-2" id="slide-coming-event">
                        <?
                            $year              = date('Y');
                            $sqlComingEvents   = "SELECT url_img_event FROM events WHERE YEAR(date) = '$year' AND status='1'";
                            $queryComingEvents = mysqli_query($db,$sqlComingEvents);

                            while($rowComingEvents = mysqli_fetch_array($queryComingEvents)){?>
                            <div class="item"><img src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowComingEvents['url_img_event']?>" alt="Owl Image"></div>
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