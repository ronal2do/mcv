<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('stylesheet.css')}}">
    <title>Marília</title>

<style>
    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    margin-top: -9px;
}
.navbar-default {
    background-color: #FFFFFF;
    border-color: #EFF0F2;
}
div.ferramentas_texto{
    margin-top: 12px;
}
div.ferramentas_texto a{
    padding: 5px;
    border: 1px solid #666;
    font-size: 13px;
    font-weight: bold;
    margin-right: 7px;
    width: 26px;
    height: 26px;
    display: block;
    float: right;
    background: #fff;
}
div.ferramentas_texto a:hover{ 
    background: #666;
    border-color: #222;
    color: #fff;
    cursor: pointer;
}
</style>
</head>

<body class="home page page-id-4816 page-template-default  style-color-lxmt-bg group-blog smooth-scroller hmenu hmenu-position-right header-full-width main-center-align wpb-js-composer js-comp-ver-4.10 vc_responsive">


<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/#home') }}"><img src="{{ asset('imgs/logo-roxo.png') }}" alt="" style="padding-top:0;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/#home') }}" class="menu-azul">Home</a></li>
            <li><a href="{{ url('/#fundo1') }}" class="menu-azul">Destaques</a></li>
            <li><a href="{{ url('/#fundo2') }}" class="menu-azul">Obras</a></li>
            <li><a href="{{ url('/#sociais') }}" class="menu-azul">Social</a></li>
            <li> <a  class="menu-azul"> | </a> </li>
            <li><div class="ferramentas_texto"><a id="aumenta_fonte" class="menu-azul">A+</a></div></li>
            <li><div class="ferramentas_texto"><a id="reduz_fonte" class="menu-azul">A-</a></div></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


@yield('content')

<footer>
    <div class="box-wrapper">
        <div class="box-container">
          <div class="main-wrapper">
            <div class="main-container">
            <div class="assinatura">
                <div class="container">
                    <div class="col-sm-1 mapa"></div>
                    <div class="col-sm-9"><a href="http://www.marilia.sp.gov.br" target="_blank"><br>www.<b>marilia</b>.sp.gov.br<br></a>
                    Rua Bahia, 40 - Centro - CEP 17501-900 - Telefone (14)3402-6000<br><br></div>
                    <div class="col-sm-2"><img src="{{ asset('imgs/logo.jpg') }}" alt=""></div>
                </div>
            </div>
              </div>
            </div>
        </div>
    </div>
</footer>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            $('#frase').fadeIn(1000);
                var selector = 'li .menu';
            $(selector).on('click', function(){
                $(selector).removeClass('active');
                $(this).addClass('active');
            });
        });
    //facebook
    (function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=921683961254233";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
      //twitter
      window.twttr = (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
          if (d.getElementById(id)) return t;
          js = d.createElement(s);
          js.id = id;
          js.src = "https://platform.twitter.com/widgets.js";
          fjs.parentNode.insertBefore(js, fjs);
         
          t._e = [];
          t.ready = function(f) {
            t._e.push(f);
          };
          return t;
        }(document, "script", "twitter-wjs"));
      $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
&& location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50 //offsets for fixed header
        }, 1000);
        return false;
      }
    }
  });
  //Executed on page load with URL containing an anchor tag.
  if($(location.href.split("#")[1])) {
      var target = $('#'+location.href.split("#")[1]);
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 125 //offset height of header here too.
        }, 1000);
        return false;
      }
    }
});

 $('body').on('click','#myCarousel .carousel-control',function() {
           $(this).closest('.carousel').carousel( $(this).data('slide') );
        });

$(document).ready(function(){
var fonte = 13;
    $('#aumenta_fonte').click(function(){
        if (fonte<21){
            fonte = fonte+2;
            $('body').animate({'font-size' : fonte+'px'});
        }
    });
    $('#reduz_fonte').click(function(){
        if (fonte>13){
            fonte = fonte-2;
            $('body').animate({'font-size' : fonte+'px'});
        }
    }); 
});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70305347-1', 'auto');
    ga('send', 'pageview');

</script>
</html>