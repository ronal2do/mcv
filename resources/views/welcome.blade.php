<!DOCTYPE html>
<html lang="pt_br" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stylesheet.css">
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
<body>
    <!-- <div class="pull-right">
            <div
              class="fb-like"
              data-share="true"
              data-width="450"
              data-show-faces="true">
            </div>
        twitter
        youtube
    </div>-->
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home"><img src="imgs/logo-roxo.png" alt="" style="padding-top:0;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home" class="menu-azul">Home</a></li>
            <li><a href="#fundo1" class="menu-azul">Destaques</a></li>
            <li><a href="#fundo2" class="menu-azul">Obras</a></li>
            <li><a href="#sociais" class="menu-azul">Social</a></li>
            <li> <a  class="menu-azul"> | </a> </li>
            <li><div class="ferramentas_texto"><a id="aumenta_fonte" class="menu-azul">A+</a></div></li>
            <li><div class="ferramentas_texto"><a id="reduz_fonte" class="menu-azul">A-</a></div></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<section id="section-blue" class="azul blurred-img" >
        <div id="home"></div>
        <div class="container center">
        <div class="space"></div>

        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
            <img id="frase" src="imgs/frase.png" style="z-index:2;" alt="" class="img-responsive fx-zoom-down fx-speed-400 fx-easing-strong">
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
                  <img src="imgs/banner1.png" alt="Slide 1">
                  <!--
                  <div class="carousel-caption"><br><br>
                    <h3>Entrega de <b>12 novos</b><br>veículos escolares</h3>
                    <p class="pull-right">Mais de <br><b>300</b><br>alunos beneficiados<br> todos os dias</p>
                  </div>
                  -->
                </div>

                <div class="item">
                  <img src="imgs/banner2.png" alt="Slide 2">
                </div>

                <div class="item">
                  <img src="imgs/banner1.png" alt="Slide 3">
                </div>

                <div class="item centered">
                  <img src="imgs/banner2.png" alt="Slide 4">
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
            
                    <div class="container">
                    
                    <div class="col-sm-3">
        
                    <div class="space"></div>
                        <ul>
                            <li class="menu"><a data-toggle="pill" data-target="#agricultura">agricultura</a></li>
                            <li class="menu"><a data-toggle="pill" data-target="#cidadania">cidadania</a></li>
                            <li class="menu"><a data-toggle="pill" data-target="#cultura">cultura</a></li>
                            <li class="menu"><a data-toggle="pill" data-target="#educacao">educação</a></li>
                            <li class="menu"><a data-toggle="pill" data-target="#infraestrutura">infraestrutura</a></li>
                            <li class="menu"><a data-toggle="pill" data-target="#meioambiente">meio ambiente</a></li>
                            <li class="menu"><a data-toggle="pill" data-target="#mobilidade">mobilidade</a></li>                            
                            <li class="menu"><a data-toggle="pill" data-target="#habitacao">moradia</a></li>                
                            <li class="menu"><a data-toggle="pill" data-target="#saude">saúde</a></li>
                        </ul>
                        <div class="space hidden-xs"></div>
                        <br>
                    </div>
                    <div class="col-sm-9 ">
                    <div class="space hidden-xs"></div>
<!-- tabs --> <div class="tab-content">
                        <!-- tab -->
                        <div id="agricultura" class="tab-pane fade in active">

                            <div class="branco col-sm-4">
                                <h3>AGRICULTURA</h3>
                                <h4>Novas pontes</h4>
                                <p>Já foram recuperadas 14 pontes na área rural de Marília, tendo sido 10 totalmente refeitas, e reformados sete mata-burros, medidas que vão facilitar o escoamento da produção e a circulação dos produtores e suas famílias.</p>

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                 
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#agricultura2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/01.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="agricultura2" class="tab-pane fade ">

                            <div class="branco col-sm-4">
                                <h3>AGRICULTURA</h3>
                                <h4>GPS Rural</h4>
                                <p>O GPS Rural, programa inovador lançado pela prefeitura, vai permitir que as propriedades e estradas rurais da região de Marília sejam cadastradas em um sistema de georreferência com informações disponibilizadas na internet.</p>

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#agricultura"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#agricultura3"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>
                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/02.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="agricultura3" class="tab-pane fade ">

                            <div class="branco col-sm-4">
                                <h3>AGRICULTURA</h3>
                                <h4>Estrada rural recuperada</h4>
                                <p>A estrada rural que interliga o distrito de Avencas à Fumares foi recuperada. Seu trecho de subida foi concretado, facilitando o escoamento da produção e o transporte escolar na região.</p>

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#agricultura2"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/03.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="cultura" class="tab-pane fade in ">

                            <div class="branco col-sm-4">
                                <h3>CULTURA</h3>
                                <h4>Modernização do Teatro Municipal</h4>
                                <p>Reconstrução e modernização completa do Teatro Municipal Waldir Silveira Mello. A entrega do prédio está programa para o início de 2016.</p>

                            <div class="space text-center" style="padding-bottom:0px;">
                                <!--<ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>-->

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/04.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="cidadania" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Cidadania</h3>
                                <h4>Novas empresas e empregos</h4>
                                <p>Duas novas empresas estão se instalando em Marília. A RCG investiu R$ 20 milhões na instalação de sua fábrica de lâmpadas LED. Já a Harald Chocolates, a mais antiga empresa do setor, construirá sua unidade no Distrito de Lácio. Juntas elas deverão gerar 850 empregos diretos.</p>
                                

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">                                
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#cidadania2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/05.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="cidadania2" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Cidadania</h3>
                                <h4>Novo CRAS</h4>
                                <p>O novo CRAS Teotônio Vilela já está prestando atendimento a 5.200 famílias carentes em 11 bairros. Atualmente são 4 Centros de Referência em Assistência Social e um Centro de Referência Especializado em Assistência Social (CREAS) em funcionamento na cidade.</p>
                                

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#cidadania"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#cidadania3"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/06.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="cidadania3" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Cidadania</h3>
                                <h4>Novos Centros/Dia</h4>
                                <p>Foram entregues duas novas unidades oferecendo proteção e acolhimento e diminuindo o número de idosos nos asilos. O Centro/Dia Anadir Hila, na zona norte, acolhe 35 idosos. E o Centro/Dia Anos Dourados, na zona sul, atende outras 40 pessoas.</p>
                                

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#cidadania5"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#cidadania4"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/07.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="cidadania4" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Cidadania</h3>
                                <h4>Pequeno Cidadão</h4>
                                <p>A rede Pequeno Cidadão hoje conta com 10 unidades prestando atendimento humanizado a crianças e adolescentes.</p>
                                

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#cidadania3"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#cidadania5"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/08.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="cidadania5" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Cidadania</h3>
                                <h4>Fortalecimento da FUMARES</h4>
                                <p>Foram desenvolvidas ações de fortalecimento da Fundação Mariliense de Recuperação Social (FUMARES), entidade que oferece assistência social e psicológica, terapia ocupacional e reintegração familiar a moradores de rua e a pessoas em situação de vulnerabilidade social.</p>
                                

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#cidadania4"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#cidadania6"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/09.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="cidadania6" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Cidadania</h3>
                                <h4>Restaurante popular</h4>
                                <p>Atualmente são servidas 1.000 refeições diárias ao preço de R$ 1 no restaurante popular Bom Prato, uma opção nutritiva e econômica.</p>
                                

                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#cidadania5"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/10.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="educacao" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Educação</h3>
                                <h4>Novas creches</h4>
                                <p>Foram reformadas e ampliadas duas creches e construídas outras seis como a EMEI Beija Flor, Bem Me Quer e Nova Marília II. Estas realizações garantiram mais 450 vagas na educação infantil.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                 
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#educacao2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/11.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="educacao2" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Educação</h3>
                                <h4>Material e uniforme escolar</h4>
                                <p>
                                Mais de 18 mil alunos da rede pública municipal receberam de graça material escolar como caderno, lápis, régua, borracha, mochila, entre outros itens. Eles também foram contemplados com uniforme escolar de inverno e verão.
                                </p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#educacao"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#educacao3"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/12.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="educacao3" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Educação</h3>
                                <h4>Nova frota escolar</h4>
                                <p>
                                Nossos alunos contam agora com novos veículos escolares. Foram adquiridos pela prefeitura 6 vans e 6 ônibus, ampliando a oferta de transporte escolar gratuito.
                                </p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#educacao2"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#educacao4"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/13.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="educacao4" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Educação</h3>
                                <h4>Escolas reformadas</h4>
                                <p>
                                Da educação infantil ao ensino fundamental, passando pelas escolas em tempo integral, foram até aqui reformadas 40 escolas municipais.
                                </p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#educacao3"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#educacao5"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/14.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="educacao5" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Educação</h3>
                                <h4>Novidades no currículo escolar</h4>
                                <p>
                                Com o Programa Escola Total, os alunos estudam o dia todo e fazem as refeições na escola. Já no Programa Pequeno Atleta, temos atividades esportivas no contraturno das aulas regulares. Outra novidade é a introdução do inglês na educação infantil.
                                </p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#educacao4"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>                                 
                                    </ul>
                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/15.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="esporte" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>esporte</h3>
                                <h4>Nova Marília</h4>
                                <p>A creche nova Marília,na zona sul da cidade foi reformada e ampliada. Hoje a unidade de educação infantil tem capacidade para atender 110 crianças de 0 a 5 anos em tempo integral, de segunda a sexta das 7h ás 17h.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <!--<ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>-->

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/16.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                                                <!-- tab -->
                        <div id="habitacao" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Moradia</h3>
                                <h4>Programa de Desfavelamento</h4>
                                <p>No lugar das moradias precárias um lugar digno para viver. O Programa de Desfavelamento já beneficiou 226 famílias do Jardim Universitário (zona oeste), Santa Antonieta e Jânio Quadros (zona norte), e Vila Altaneira (zona leste).</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                 
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#habitacao2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/17.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="habitacao2" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Moradia</h3>
                                <h4>Programa de Moradia Popular</h4>
                                <p>2.737 famílias também conquistaram uma nova vida com as novas moradias entregues. Foram 1.865 na zona norte (Padre Nóbrega e Marina Moretti), 816 na zona sul (Residencial São Bento) e 56 na zona oeste (Parque das Vivendas).</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#habitacao"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#habitacao3"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/18.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="habitacao3" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Moradia</h3>
                                <h4>Maior condomínio habitacional</h4>
                                <p>Foram entregues 816 novos apartamentos na zona sul da cidade a famílias de baixa renda. As unidades têm 70 m² e ficam em um conjunto com 51 torres, com espaços de convívio social e de lazer neste que é o maior núcleo habitacional já construído na história de Marília.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#habitacao2"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#habitacao4"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/19.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="habitacao4" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Moradia</h3>
                                <h4>Maior programa habitacional</h4>
                                <p>Com os programas de Desfavelamento e de Moradia Popular, já são 3.779 famílias beneficiadas com novas moradias. Até 2116 serão mais 3.000 casas construídas pela Prefeitura neste que é o maior programa habitacional da história de Marília.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#habitacao3"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/20.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->



                        <!-- tab -->
                        <div id="infraestrutura" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Infraestrutura</h3>
                                <h4>Abastecimento de água</h4>
                                <p>
                                Novos reservatórios foram entregues e mais 8 poços foram perfurados, ampliando o fornecimento de água de qualidade na cidade.
                                </p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#infraestrutura2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/21.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="infraestrutura2" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Infraestrutura</h3>
                                <h4>Modernização da Rodoviária</h4>
                                <p>Nossa rodoviária recebeu vidros temperados em sua estrutura e viu renovados o sistema de ar-condicionado e os assentos, incluindo aqueles reservados a idosos, grávidas, obesos e pessoas com deficiência

                                </p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#infraestrutura"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#infraestrutura3"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/22.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="infraestrutura3" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Infraestrutura</h3>
                                <h4>Asfalto novo na zona sul</h4>
                                <p>As obras de recapeamento asfáltico já chegou a 14 vias da zona sul como as ruas Júlio de Paula Brandão e Domingos Jorge Velho, na Vila Real, e a João Batista Marinho, no Núcleo Nova Marília. E esse trabalho continua.

</p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#infraestrutura2"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#infraestrutura4"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/23.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="infraestrutura4" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Infraestrutura</h3>
                                <h4>Tapa-buracos</h4>
                                <p>Ação permanente de fechamento de buracos nas ruas da cidade. Somente em 2015 foram executados 90 mil m², proporcionando mais segurança para quem circula por Marília</p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#infraestrutura3"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#infraestrutura5"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/24.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="infraestrutura5" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Infraestrutura</h3>
                                <h4>Avenida Jóquei Clube</h4>
                                <p>A modernização desta importante via foi realizada em parceria com a concessionária da rodovia, beneficiando diretamente 10 bairros e 20 mil pessoas, e facilitando a circulação de veículos e o escoamento da produção.</p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#infraestrutura4"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#infraestrutura6"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/25.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="infraestrutura6" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Infraestrutura</h3>
                                <h4>Avenida Feres Mattar</h4>
                                <p>Outra importante obra viária foi a abertura da avenida Féres Mattar, atrás do Hospital das Clínicas. Sua execução cobriu uma área de 2.600 m².</p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#infraestrutura5"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#infraestrutura7"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/26.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="infraestrutura7" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Infraestrutura</h3>
                                <h4>Programa de Recapeamento</h4>
                                <p>Esta ação prevê, até o fim de 2015, asfalto novo em 500 quarteirões e 100 ruas e avenidas, somando quase 50 km asfaltados. O programa já recuperou, por exemplo, a Rodovia do Contorno, a SP-333 e a SP-294.</p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#infraestrutura6"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                     
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/27.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="mobilidade" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Mobilidade</h3>
                                <h4>Rampas em calçadas</h4>
                                <p>Serão instaladas 489 rampas de acessibilidade, facilitando a mobilidade para pessoas com deficiência, idosos e bebês em carrinhos nas principais ruas e avenidas de Marília.</p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                      <li ><a data-toggle="pill" data-target="#mobilidade2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/28.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <div id="mobilidade2" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Mobilidade</h3>
                                <h4>Vigilância nos ônibus</h4>
                                <p>Estão sendo instaladas câmeras no interior dos ônibus. Elas vão registrar as atividades dos coletivos como cumprimento do itinerário, regras no trânsito, atendimento profissional aos passageiros, além de coibir roubos e violência.</p>
                                <div class="space text-center" style="padding-bottom:0px;">
                                    <ul class="pagination pagination-sm">
                                      <li><a data-toggle="pill" data-target="#mobilidade"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                      <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                     
                                    </ul>

                                </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/29.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="meioambiente" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Meio ambiente</h3>
                                <h4>Mais quatro regiões com Ecopontos</h4>
                                <p>Os bairros de Santa Antonieta e Prolongamento Palmital, Comerciários II e Nova Marília terão, já nos primeiros meses de 2016, seus ecopontos. Neles, são recebidos e separados resíduos sólidos inservíveis como restos de construção, móveis e eletrodomésticos em desuso.
                                </p>
                                
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li class="disabled"><a data-toggle="pill" data-target="#"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li><a data-toggle="pill" data-target="#meioambiente-2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/30.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="meioambiente-2" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Meio ambiente</h3>
                                <h4>Mudas plantadas</h4>
                                <p>Uma área de lazer no Jardim Maria Izabel recebeu o plantio de 100 mudas de árvores. A iniciativa envolveu cerca de 40 alunos da EMEF Célio Corradi e contou com o apoio de uma rede local de supermercados.
                                </p>
                                
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li ><a data-toggle="pill" data-target="#meioambiente"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li class="disabled"><a  data-target="#meioambiente-2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/31.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                                                <!-- tab -->
                        <div id="saude" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Saúde</h3>
                                <h4>Hospital de Reabilitação Lucy Montoro</h4>
                                <p>A nova unidade do Hospital de Reabilitação Lucy Montoro de Marília oferece atendimento ambulatorial a pessoas com deficiência ou com doenças potencialmente incapacitantes.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                 
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#saude2"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/32.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="saude2" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Saúde</h3>
                                <h4>Novas unidades de saúde</h4>
                                <p>Nos últimos meses, foram reformadas e ampliadas as Unidades de Saúde da Família (USF) da Vila Barros, Figueirinha, Vila Real, Jânio Quadros, Jóquei Clube, Aniz Badra, São Miguel, Alto Cafezal e Padre Nóbrega. E uma nova unidade foi entregue no Parque dos Ipês.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#saude"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#saude3"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>
                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/33.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="saude3" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Saúde</h3>
                                <h4>Novos médicos</h4>
                                <p>Foram contratados 30 novos profissionais de saúde, entre médicos especialistas, enfermeiros e auxiliares, ampliando e qualificando a oferta de serviços de saúde para a população.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#saude2"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#saude4"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/34.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="saude4" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Saúde</h3>
                                <h4>Mutirões de saúde</h4>
                                <p>Como forma de agilizar o atendimento em saúde, foram realizados os mutirões de saúde com 3.500 consultas em ortopedia, 1.500 exames de mamografia e 2.000 cirurgias de catarata.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#saude3"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#saude5"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/35.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="saude5" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Saúde</h3>
                                <h4>UPA 24 horas – Zona Norte</h4>
                                <p>A nova Unidade de Pronto Atendimento – UPA 24h da zona norte atende a urgência e emergência em clínica geral, pediatria e odontologia e conta com consultórios, laboratório próprio e raio-X.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#saude4"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                  <li ><a data-toggle="pill" data-target="#saude6"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/36.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
                        <!-- tab -->
                        <div id="saude6" class="tab-pane fade">

                            <div class="branco col-sm-4">
                                <h3>Saúde</h3>
                                <h4>Samu</h4>
                                <p>Além do serviço tradicional de resgate e remoção das ambulâncias do SAMU, Marília conta agora também com o novo serviço de motolância do SAMU, mais agilidade no atendimento a acidentados.</p>
                            <div class="space text-center" style="padding-bottom:0px;">
                                <ul class="pagination pagination-sm">
                                  <li><a data-toggle="pill" data-target="#saude5"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                  <li class="disabled"><a data-target><i class="glyphicon glyphicon-minus"></i></a></li>
                                 
                                </ul>

                            </div>

                            </div>
                                
                            <div class="col-sm-8" style="padding: 0px;">
                            
                                <img src="imgs/destaques/37.png" class="img-responsive" alt="">
                    
                                <br>
                            </div>

                        </div>
                        <!-- final da tab -->
<!-- tabs --></div>

                    </div>

                </div>
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
                </div><!-- <iframe frameborder="0" width="500" height="315" src="http://marilia.tweetwally.com/embed" target="_blank" align="center" scrolling="Auto"></iframe>-->
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="assinatura">
            <div class="row">
                <div class="col-sm-1 mapa"></div>
                <div class="col-sm-9"><a href="http://www.marilia.sp.gov.br" target="_blank"><br>www.<b>marilia</b>.sp.gov.br<br></a>
                Rua Bahia, 40 - Centro - CEP 17501-900 - Telefone (14)3402-6000<br><br></div>
                <div class="col-sm-2"><img src="imgs/logo.jpg" alt=""></div>
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

 //Guilherme Serrano - Ferramenta para aumentar e reduzir o tamanho da fonte (jQuery)
//www.odesenvolvedor.com.br
//andafter.org

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
<script src="js/angular-animate.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/app.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70305347-1', 'auto');
    ga('send', 'pageview');

</script>
</html>