<? 
    include('template/header_link.php');
    include('config/connection.php');
    
    if(isset($_GET['article'])){
        
        $article = str_replace('-',' ', $_GET['article']);
        $sqlReadArticle     = "SELECT avatar, author, title, description, url_img_blog, date FROM blog LEFT JOIN user ON blog.author = user.username WHERE blog.title='$article' AND blog.status='1'";
        $queryReadArticle   = mysqli_query($db,$sqlReadArticle);

        $countRowArticle    = mysqli_num_rows($queryReadArticle);
        if($countRowArticle > 0)
            $readArticle        = mysqli_fetch_array($queryReadArticle);
        else
            header('location: 404.php');
            
    }else{
        $server = $_SERVER['SERVER_NAME'];
        header('location:http://'. $server .'/lids');
    }

    
?>
<div class="container my-0  my-md-5">
    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <article class="card mb-5">
                <div class="card-body p-md-5">
                    <div>
                        <div class="mb-3">
                            <? if($readArticle['avatar'] == NULL) :?>
                                <img class="rounded-circle border mr-1" src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/images/faces/user.png" alt="author" width="32" height="32">
                            <? else : ?>
                                <img class="rounded-circle border mr-1" src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/profiles/<?=$readArticle['avatar']?>" alt="author" width="32" height="32">
                            <? endif;?>
                            <small class="align-middle text-dark"><?= $readArticle['author']?></small>
                            <!-- <a class="align-middle text-dark" href=""><?= $readArticle['author']?></a> -->
                            <small class="align-middle text-muted ml-2">Last update<time> <?= date('d M y', strtotime($readArticle['date']))?></time></small>
                        </div>
                        <h1 class="card-title mb-3 post-title font-weight-bold"><?=$readArticle['title']?></h1>
                        <hr>
                        <div>
                            <span class="badge badge-success">Bagikan :</span>
                            <div class="mt-2">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=lidsenterprise.com/blog.php?article=<?= $_GET['article']?>" target="_blank"><i class="fab fa-facebook-square" style="font-size:30px; color:#4267b2"></i></a>
                                <a href="https://wa.me/?text=<?=str_replace('-','%20',$_GET['article'])?> read%20on%0ahttp://lidsenterprise.com/blog.php?article=<?= $_GET['article']?>" target="_blank"><i class="fab fa-whatsapp-square" style="font-size:30px; color:#3fe05c"></i></a>
                                <a href="https://twitter.com/intent/tweet?text=<?=str_replace('-',' ',$_GET['article'])?>&url=https://<?=$_SERVER['SERVER_NAME']?>/blog.php?article=<?=$_GET['article']?>" target="_blank"><i class="fab fa-twitter-square" style="font-size:30px; color:#1a91da"></i></a>
                                <i class="far fa-copy" style="font-size:27px; color:#00a1b0" data-clipboard-text="http://<?= $_SERVER['SERVER_NAME']?>/blog.php?article=<?=$_GET['article']?>" id="copy"></i>
                            </div>
                           
                        </div>
                        <div class="post-content my-5 text-justify">
                            <p>
                                <img class="img-fluid" src="http://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/articles/<?=$readArticle['url_img_blog']?>" alt="images blog" width="658" height="380">
                            </p>
                            <?= $readArticle['description']?>
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
                            <div class="item"><img src="https://<?= $_SERVER['SERVER_NAME']?>/admin/assets/upload/events/<?=$rowComingEvents['url_img_event']?>" alt="Owl Image"></div>
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