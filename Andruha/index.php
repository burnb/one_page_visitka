<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Burn
 * Date: 02.10.13
 * Time: 10:56
 * To change this template use File | Settings | File Templates.
 */?>
<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рога и копыта</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.localscroll.js"></script>
    <script src="js/scrolltopcontrol.js"></script>
    <script src="js/simple-slider.js"></script>
    <script type="text/javascript" src="https://maps.google.ru/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/main.js"></script>
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="css/simple-slider.css" rel="stylesheet" type="text/css"/>
    <link href="css/simple-slider-volume.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen" type="text/css">
    <link href="css/main.css" rel="stylesheet" media="screen" type="text/css"/>
</head>
<body data-spy="scroll">
<!-- ===========Navbar=========== -->
<div class="navbar-wrapper">
    <div class="row">
        <div class="navbar navbar-default navbar-fixed-top col-md-5 col-md-offset-7">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#home"><img src="https://d17f28g3dsa4vh.cloudfront.net/img/kippt-logo-r.png" width="40"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                     <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">Главная</a></li>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#price">Цены</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
      </div>
    </div>
</div>
<!-- ===========MAIN CAROUSEL=========== -->
<div class="main" id="home">
    <div id="Carousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active ad1">
                <div class="container">
              <!-- <div class="carousel-caption">
                        <div class="container">
                            <h1>NEWS 1</h1>
                            <p>Text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="item ad2">
                <div class="container">
                    <!-- <div class="carousel-caption">
                        <h1>NEWS 2</h1>
                        <p>Text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
                    </div>-->
                </div>
            </div>
            <div class="item ad3">
                <div class="container">
                    <!-- <div class="carousel-caption">
                        <h1>NEWS 3</h1>
                        <p>Text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text</p>
                    </div>-->
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#Carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#Carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
</div>
<!-- ===========About us=========== -->
<div id="about">
    <div class="container white-panel">
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <blockquote>
                    <h2>О компании</h2><br>
                    <p><small>Группа компаний «АВГУСТ» занимается производством пластиковых и алюминиевых окон, дверей, витражей, входных групп, лоджий, офисных перегородок, рольставней, секционных ворот; и продажей комплектующих для пластиковых окон, рольставней, витражей, входных групп.</small></p>
                    <p><small>Группа компаний «АВГУСТ» работает на строительном рынке с 2001 года. Большой ассортимент, низкие цены, гибкая система скидок, индивидуальный подход к каждому клиенту, наличие оптовой и розничной сети - вот визитная карточка нашей компании. Мы являемся региональными дилерами торговых марок «Винкхаус», «Плафен», «Татпроф» в Удмуртии. Бесперебойность поставок обеспечивает наличие широкого ассортимента комплектующих на нашем складе. Наша компания является дилером официального представителя оборудования «Yilmaz» в России - компании "СПЕКТР".</small></p>
                    <p><small>За последний год работы наша компания увеличила территории складских площадей, были установлены современные автоматические производственные линии.</small></p>
                </blockquote>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="zoom-gallery">
                    <a href="http://farm4.staticflickr.com/3763/9204547649_0472680945_o.jpg" title="Профиль">
                        <img src="http://farm4.staticflickr.com/3763/9204547649_7de96ee188_t.jpg">
                    </a>
                    <a href="http://farm3.staticflickr.com/2856/9207329420_7f2a668b06_o.jpg" title="Установка окон" style="width:82px;height:125px;">
                        <img src="http://farm3.staticflickr.com/2856/9207329420_e485948b01_t.jpg" width="82px" height="125">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- ===========Price=========== -->
<div id="price">
    <div class="container white-panel">
        <div class="row">
            <div class="col-lg-8" id='cal'>
                <form name="calc">
                    <fieldset>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <h4>Площадь потолка</h4>
                                    <input type="text" id="s" data-slider="true" data-slider-highlight="true" data-slider-theme="volume" data-slider-range="1,100" data-slider-step="1" data-slider-snap="true">
                                </div>
                                <div class="col-md-3">
                                    <span class="val">
                                        <input type="number" min="1" max="100" id="sn" class="form-control" placeholder="Text input">
                                    </span>
                                </div>
                            </div>
                            <input type="button" class="btn btn-default" onclick="calcul()" value="Рассчитать">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ===========Contact=========== -->
<div id="contact">
    <div class="container white-panel">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                <div class="popin">
                    <div id="map"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===========Footer=========== -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <img src="https://d17f28g3dsa4vh.cloudfront.net/img/kippt-logo-r.png" width="40">
                    <p>Качественные натяжные потолки в каждый дом</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <blockquote>
                            <ul class="list-inline">
                                <li><a href="#home">Главная</a></li>
                                <li><a href="#about">О нас</a></li>
                                <li><a href="#price">Цены</a></li>
                                <li><a href="#contact">Контакты</a></li>
                            </ul>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="container" style="margin-top: 20px">
                        Разработанно с любовью веб-студией
                    </div>
                </div>
             </div>
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                   <small>© 2013 Company. All rights reserved. Proudly made in Russia.</small>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <div class="container">
                    <img src="./i/Physicist.fw.png" height="20"><a href="#">Physicist</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#s").bind("slider:ready slider:changed", function (event, data) {
        $("#sn").val(data.value);
        return val = data.value;
    });
    $( "#sn" ).change(function() {
        $( "#s" ).simpleSlider("setValue", $(this).val());
    });
    function calcul(){
        alert(val);
    }

</script>
</body>