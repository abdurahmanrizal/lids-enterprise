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

<nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger text-white" href="index.php">Lids Enterprise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto" id="form-search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search Article ..." id="search" autocomplete="off">
            <button class="btn btn-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
        </form>
    </div>
   
  </div>
  
</nav>
</body>
</html>
  <!-- JQuery -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- typeahead js -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> -->
  <script src="vendor/typeahead/typeahead.bundle.js"></script>
  <script>
    // search autocomplete typeahead js
    $('#search').typeahead({
        source: function(query, result)
        {
            $.ajax({
                url:"model/search_article.php",
                method:"POST",
                data:{query:query},
                dataType:"json",
                success:function(data)
                {
                    if(data == 'not-found'){
                      
                      $('.dropdown-menu[role="listbox"]').html('<li class="text-center p-3">Article Not Found, Please Correct your Suggestions</li>');
                      
                      
                    }else{
                      result($.map(data, function(item){
                        return item;
                      }));
                    }
                    
                }
            })
        },
    });
    // click search typeahead
    $('#search-submit').on('click',function(e){
        e.preventDefault();
        var article       = $('#search').val();
        var escapeArticle = article.replace(/ /g, '-');
        
        $.ajax({
            url    : "blog.php",
            type   : "POST",
            data   : {article:article},
            success:function(data){ 
                window.location.href="http://<?= $_SERVER['SERVER_NAME']?>/lids/blog.php?article="+escapeArticle
            }
        });
    });
  </script>
    




