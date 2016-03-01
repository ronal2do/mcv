@extends('layouts.template')

@section('content')



<section id="section-blue" class="azul blurred-img" >
        <div id="home"></div>
        <div class="container center">
        <div class="space"></div>

        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
            <img id="frase" src="{{ asset('imgs/frase.png') }}" style="z-index:2;" alt="" class="img-responsive fx-zoom-down fx-speed-400 fx-easing-strong">
            <h1 class="banner g">
                
            </h1>
        <div class="space"></div>

            <h3 class="banner">
                
            </h3>
        </div>
</section>
    
<section id="fundo1" class="roxa">
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
            
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="{{ asset('imgs/Destaques-KitEscolar.png') }}" alt="Slide 1">
                  
                </div>

                <div class="item">
                  <img src="{{ asset('imgs/Destaques-RuasRevitalizadas.png') }}" alt="Slide 2">
                </div>

                <div class="item">
                  <img src="{{ asset('imgs/Destaques-MaisMoradiaPopular.png') }}" alt="Slide 3">
                </div>

                <div class="item centered">
                  <img src="{{ asset('imgs/Destaques-CombateAedes.png') }}" alt="Slide 4">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" data-target="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Antes</span>
              </a>
              <a class="right carousel-control" data-target="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Prox</span>
              </a>
            </div>

</section>
    
<section id="fundo2" class="amarela">


@include('includes.obras')



</section>

<section id="sociais" class="cinza">
    <div class="sociais">
        <div class="container">         
            <div class="col-sm-4 social facebook">
                <h3 class="social-title">
                    Facebook
                </h3>
                <p>Curta nossa página no Facebook</p>
                <div class="vid">   
                <div id="fb-root"></div>

                            <!-- Now Playing Start -->
                        <div class="fb-page" data-href="https://www.facebook.com/PrefeituraMarilia" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/PrefeituraMarilia"><a href="https://www.facebook.com/PrefeituraMarilia">Carregando ...</a></blockquote></div></div>
                </div><!--./vid -->
            <hr>
            </div>
            <div class="col-sm-4 social youtube">
                <h3 class="social-title">
                    YouTube
                </h3>
                <p>Acompanhe nosso canal do Youtube</p>
                
                <hr>
               <div class="vid">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/FwGM0GGEc-4" frameborder="0" allowfullscreen></iframe>
                </div><!--./vid -->
            <hr>
                
            </div>
            <div class="col-sm-4 social twitter">
                <h3 class="social-title">
                    Twitter
                </h3>
                <p>Siga nossa página no Twitter</p>
    
                <div class="vid">
                    <a class="twitter-timeline"
                      data-widget-id="666972173953835008"
                      href="https://twitter.com/Pref_Marilia"
                      data-chrome="noborders">
                    Tweets by @Pref_Marilia
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection