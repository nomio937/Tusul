
<!DOCTYPE html>
<html>
<head class="heads">
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Монголын Байт Харвааны Холбоо</title>
    <meta name="description" content="Монголын Байт Харвааны Холбоо" />
    <meta name="keywords" content="Монголын Байт Харвааны Холбоо">
    <meta property="og:url" content="http://www.archery.mn/" />
    <meta property="og:title" content="Монголын Байт Харвааны Холбоо" />
    <meta property="og:description" content="Монголын Байт Харвааны Холбоо" />
    <meta property="og:image" content="http://www.archery.mn/assets/images/cover.png" />
    <meta name="author" content="MONGOLIAN ARCHERY ASSOCATION">
    @yield('heads')
<link rel="icon" href="http://www.archery.mn/assets/images/favicon.ico">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="tump.css" rel="stylesheet" />
<!--[if lt IE 9]><script src="http://www.archery.mn/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js"></script>
<!--[if lt IE 9]>
  <script src="http://www.archery.mn/assets/js/html5shiv.min.js"></script>
  <script src="http://www.archery.mn/assets/js/respond.min.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/jquery.bxslider.css"></head>
<body class="b">

    <div class="container">
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1023441937680330&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="navbar-head">
    <div class="row">
        <div class="col-lg-6 logo">
            <a href="http://www.archery.mn/" title="Монголын Байт Харвааны Холбоо"><img src="images/logo.png" alt=""></a>
        </div>
    <div class="col-lg-6">
    <ul class="socials">
      <li><a href="https://www.youtube.com/channel/UCA7M9sPGfZezzfOERqDqxVA">
              <img src="images/yt.png" alt=""></a></li> 
                <li><a href="https://twitter.com/mglarchery"><img src="images/fb.png" alt=""></a></li>
                <li><a><img src="images/tw.png"></a></li>  
    </ul>
    </div>
    </div>
</div>
<div class="navbar-wrapper">

    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">ЦЭС</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav"><li class=""><a href="index.php?m=15">Нүүр</a></li><li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Бидний тухай <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li><a href="http://www.archery.mn/news.php?m=6&n=1">Түүхэн замнал</a></li><li><a href="http://www.archery.mn/news.php?m=7&n=2">Мэндчилгээ</a></li><li><a href="http://www.archery.mn/news.php?m=8&n=3">Ерөнхийлөгчид</a></li><li><a href="http://www.archery.mn/news.php?m=9&n=4">Удирдах зөвлөл</a></li><li><a href="http://www.archery.mn/news.php?m=10&n=5">Удирдлага</a></li><li><a href="http://www.archery.mn/news.php?m=11&n=6">Зөвлөлүүд</a></li><li><a href="http://www.archery.mn/news.php?m=12&n=7">МБХХ-ны сүлд дуу</a></li></ul></li><li class=""><a href="http://www.archery.mn/category.php?m=2&c=2">Мэдээ</a></li><li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Гишүүн <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li><a href="http://www.archery.mn/news.php?m=13&n=9">Салбар холбоод</a></li><li><a href="http://www.archery.mn/news.php?m=14&n=8">Клубууд</a></li></ul></li><li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Төрөл <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li><a href="http://www.archery.mn/news.php?m=16&n=10">Гадаа талбайн харваа</a></li><li><a href="http://www.archery.mn/news.php?m=17&n=11">Заалны харваа</a></li><li><a href="http://www.archery.mn/news.php?m=18&n=12">Пара байт харваа</a></li></ul></li><li class=""><a href="contact.php?m=5">Холбоо барих</a></li></ul>        </div>
    </nav> 
</div>       

<div class="slider">
@yield('slider')
        </div>       
         <div class="content">
        @yield('content')       
          
</div>                                      
    </div>
<div class="container ft">
    <div class="footer">
    @yield('footer')
        <div class="row">
            <div class="col-lg-6">
                <p class="copyright">Бүх эрх хуулиар хамгаалагдсан © 2016 Монголын Байт Харвааны Холбоо</p>
            </div>
            <div class="col-lg-6">
                <p class="developedby"> Хөгжүүлсэн: <a target="_blank" href="http://www.ideadevelopment.mn">Э.Оюунномин</a></p>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/npm.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.js"></script>        
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/scripts.js"></script>
@yield('b')
</body>
</html>