<?php
require 'intranet/models/Curso.php';
require 'intranet/models/Noticias.php';
require 'intranet/models/Comunicados.php';
require 'intranet/tools/Util.php';

$curso = new Curso();
$noticia = new noticias();
$comunicado = new Comunicado();
$util = new Util();

?>
<!DOCTYPE html>
<html lang="es">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>
    <meta property="og:title" content="Colegio de Trabajadores Sociales del Peru - Region XI Ancash"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>Colegio de Trabajadores Sociales del Peru - Region XI Ancash</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="plugins/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">

    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous">

    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif:400,400i,700,700i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Slab:100,300,400,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i');
    </style>
    <script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</head>
<body id="bg">

<div id="loading-area"></div>
<div class="page-scroll"></div>
<div class="page-wraper">
    <!-- header -->
    <?php include 'fixed/header.php' ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <div id="slider_05" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-100"
                                data-transition="fade"
                                data-slotamount="default"
                                data-hideafterloop="0"
                                data-hideslideonmobile="off"
                                data-easein="default"
                                data-easeout="default"
                                data-masterspeed="300"
                                data-thumb=""
                                data-rotate="0"
                                data-saveperformance="off"
                                data-title="Slide"
                                data-param1=""
                                data-param2=""
                                data-param3=""
                                data-param4=""
                                data-param5=""
                                data-param6=""
                                data-param7=""
                                data-param8=""
                                data-param9=""
                                data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}"
                                data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/main-slider/banner11.jpg" alt="" title="" data-bgposition="right center" data-kenburns="on" data-duration="5000" 2 data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0"
                                     data-blurend="0" data-offsetstart="0 0" data-offsetend="100 0" data-bgparallax="8" class="rev-slidebg"
                                     data-no-retina>

                                <!-- LAYERS -->
                                <div id="rrzb_100" class="rev_row_zone rev_row_zone_bottom" style="z-index: 5;">
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption"
                                         id="slide-100-layer-1"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['683','683','683','683']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="row"
                                         data-columnbreak="2"
                                         data-responsive_offset="on"
                                         data-responsive="off"
                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[50,50,0,0]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[40,40,30,30]"
                                         data-paddingbottom="[0,0,50,50]"
                                         data-paddingleft="[40,40,30,30]"
                                         style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption scroll-content"
                                             id="slide-100-layer-2"
                                             data-x="['left','left','left','left']"
                                             data-hoffset="['100','100','100','100']"
                                             data-y="['top','top','top','top']"
                                             data-voffset="['100','100','100','100']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-type="column"
                                             data-responsive_offset="on"
                                             data-responsive="off"
                                             data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                             data-columnwidth="33.33%"
                                             data-verticalalign="top"
                                             data-margintop="[0,0,0,0]"
                                             data-marginright="[0,0,0,0]"
                                             data-marginbottom="[0,0,0,0]"
                                             data-marginleft="[0,0,0,0]"
                                             data-textAlign="['inherit','inherit','inherit','inherit']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"
                                             style="z-index: 6; width: 100%;background-color:rgb(255,255,255);">


                                            <!-- LAYER NR. 4 -->

                                        </div>
                                        <!-- LAYER NR. 10 -->
                                        <div class="tp-caption  "
                                             id="slide-100-layer-10"
                                             data-x="['left','left','left','left']"
                                             data-hoffset="['100','100','100','100']"
                                             data-y="['top','top','top','top']"
                                             data-voffset="['100','100','100','100']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-type="column"
                                             data-responsive_offset="on"
                                             data-responsive="off"
                                             data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                             data-columnwidth="66.67%"
                                             data-verticalalign="top"
                                             data-margintop="[0,0,0,0]"
                                             data-marginright="[0,0,0,0]"
                                             data-marginbottom="[0,0,0,0]"
                                             data-marginleft="[0,0,0,0]"
                                             data-textAlign="['inherit','inherit','inherit','inherit']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"
                                             style="z-index: 26; width: 100%;">
                                        </div>
                                    </div>
                                </div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption tp-resizeme re-shadow"
                                     id="slide-100-layer-11"
                                     data-x="['left','left','left','left']"
                                     data-hoffset="['400','330','50','50']"
                                     data-y="['bottom','bottom','bottom','bottom']"
                                     data-voffset="['140','160','350','350']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-visibility="['on','on','off','off']"
                                     data-type="image"
                                     data-responsive_offset="on"
                                     data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     data-lasttriggerstate="reset"
                                     style="z-index: 27;">
                                    <img src="images/main-slider/pic1.jpg" alt="" data-ww="['640px','640px','360px','360px']" data-hh="['360px','360px','249px','249']" width="640" height="360" data-no-retina>
                                </div>
                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption   tp-resizeme  re-shadow"
                                     id="slide-100-layer-12"
                                     data-x="['left','left','left','left']"
                                     data-hoffset="['400','330','50','50']"
                                     data-y="['bottom','bottom','bottom','bottom']"
                                     data-voffset="['140','160','350','350']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-visibility="['on','on','off','off']"
                                     data-type="image"
                                     data-responsive_offset="on"
                                     data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     data-lasttriggerstate="reset"
                                     style="z-index: 28;">
                                    <img src="images/main-slider/pic2.jpg" alt="" data-ww="['640px','640px','360px','360px']" data-hh="['360px','360px','249px','249']" width="640" height="360" data-no-retina>
                                </div>
                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption   tp-resizeme  re-shadow"
                                     id="slide-100-layer-13"
                                     data-x="['left','left','left','left']"
                                     data-hoffset="['400','330','50','50']"
                                     data-y="['bottom','bottom','bottom','bottom']"
                                     data-voffset="['140','160','350','350']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-visibility="['on','on','off','off']"
                                     data-type="image"
                                     data-responsive_offset="on"
                                     data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     data-lasttriggerstate="reset"
                                     style="z-index: 29;">
                                    <img src="images/main-slider/pic3.jpg" alt="" data-ww="['640px','640px','360px','360px']" data-hh="['360px','360px','249px','249']" width="640" height="360" data-no-retina>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-200"
                                data-transition="fade"
                                data-slotamount="default"
                                data-hideafterloop="0"
                                data-hideslideonmobile="off"
                                data-easein="default"
                                data-easeout="default"
                                data-masterspeed="300"
                                data-thumb=""
                                data-rotate="0"
                                data-saveperformance="off"
                                data-title="Slide"
                                data-param1=""
                                data-param2=""
                                data-param3=""
                                data-param4=""
                                data-param5=""
                                data-param6=""
                                data-param7=""
                                data-param8=""
                                data-param9=""
                                data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}"
                                data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/main-slider/BANER31.jpg" alt="" title="" data-bgposition="right center" data-kenburns="on" data-duration="5000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0"
                                     data-blurend="0" data-offsetstart="0 0" data-offsetend="100 0" data-bgparallax="8" class="rev-slidebg"
                                     data-no-retina>

                                <!-- LAYERS -->
                                <div id="rrzb_200" class="rev_row_zone rev_row_zone_bottom" style="z-index: 5;">
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption  "
                                         id="slide-200-layer-1"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['683','683','683','683']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="row"
                                         data-columnbreak="2"
                                         data-responsive_offset="on"
                                         data-responsive="off"
                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[50,50,0,0]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[40,40,30,30]"
                                         data-paddingbottom="[0,0,50,50]"
                                         data-paddingleft="[40,40,30,30]"
                                         style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption scroll-content"
                                             id="slide-200-layer-2"
                                             data-x="['left','left','left','left']"
                                             data-hoffset="['100','100','100','100']"
                                             data-y="['top','top','top','top']"
                                             data-voffset="['100','100','100','100']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-type="column"
                                             data-responsive_offset="on"
                                             data-responsive="off"
                                             data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                             data-columnwidth="33.33%"
                                             data-verticalalign="top"
                                             data-margintop="[0,0,0,0]"
                                             data-marginright="[0,0,0,0]"
                                             data-marginbottom="[0,0,0,0]"
                                             data-marginleft="[0,0,0,0]"
                                             data-textAlign="['inherit','inherit','inherit','inherit']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"
                                             style="z-index: 6; width: 100%;background-color:rgb(255,255,255);">

                                            <!-- LAYER NR. 3 -->

                                            <!-- LAYER NR. 4 -->


                                            <!-- LAYER NR. 10 -->
                                            <div class="tp-caption  "
                                                 id="slide-200-layer-10"
                                                 data-x="['left','left','left','left']"
                                                 data-hoffset="['100','100','100','100']"
                                                 data-y="['top','top','top','top']"
                                                 data-voffset="['100','100','100','100']"
                                                 data-width="none"
                                                 data-height="none"
                                                 data-whitespace="nowrap"
                                                 data-type="column"
                                                 data-responsive_offset="on"
                                                 data-responsive="off"
                                                 data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                 data-columnwidth="66.67%"
                                                 data-verticalalign="top"
                                                 data-margintop="[0,0,0,0]"
                                                 data-marginright="[0,0,0,0]"
                                                 data-marginbottom="[0,0,0,0]"
                                                 data-marginleft="[0,0,0,0]"
                                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                                 data-paddingtop="[0,0,0,0]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[0,0,0,0]"
                                                 data-paddingleft="[0,0,0,0]"
                                                 style="z-index: 26; width: 100%;">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LAYER NR. 12 -->
                                    <div class="tp-caption   tp-resizeme  re-shadow"
                                         id="slide-200-layer-12"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['400','330','50','50']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['140','160','350','350']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-visibility="['on','off','off','off']"
                                         data-type="image"
                                         data-responsive_offset="on"
                                         data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-lasttriggerstate="reset"
                                         style="z-index: 28;">
                                        <img src="images/main-slider/pic5.jpg" alt="" data-ww="['640px','640px','360px','360px']" data-hh="['360px','360px','249px','249']" width="640" height="360" data-no-retina>
                                    </div>
                                    <!-- LAYER NR. 13 -->
                                    <div class="tp-caption   tp-resizeme  re-shadow"
                                         id="slide-200-layer-13"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['400','330','50','50']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['140','160','350','350']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-visibility="['on','off','off','off']"
                                         data-type="image"
                                         data-responsive_offset="on"
                                         data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-lasttriggerstate="reset"
                                         style="z-index: 29;">
                                        <img src="images/main-slider/pic6.jpg" alt="" data-ww="['640px','640px','360px','360px']" data-hh="['360px','360px','249px','249']" width="640" height="360" data-no-retina>
                                    </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- About Company -->
        <div class="section-full content-inner bg-white video-section">
            <div class="container">
                <div class="section-content">
                    <div class="row d-flex">
                        <div class="col-lg-6 col-md-6 text-justify m-b30">
                            <div class="text-center"><h2 class="m-b15">BIENVENIDA</h2></div>
                            <p class="m-b15">Estimadas colegas, como Junta Directiva del Consejo Directivo Regional XI – Ancash del Colegio de Trabajadores Sociales del Perú, nos dirigimos a ustedes para darles una cordial BIENVENIDA a la página oficial Institucional, creada como una estrategia de posicionamiento para resaltar el Trabajo Social que desarrolla el Trabajador Social en las diferentes instituciones públicas, privadas, ONGs, en la Región Ancash.</p>
                            <p class="m-b30">En este espacio virtual encontrara, información sobre normas legales, instrumentos normativos, el sistema de registro de los miembros de la orden, su condición de hábil para el ejercicio profesional, la difusión de experiencias exitosas de Trabajo Social realizadas como Trabajadores Sociales en los diferentes espacios, con el propósito de promover el cambio y desarrollo social en nuestra región.</p>
                            <div class="text-center">
                                <img src="images/firmaDec2.png" width="200" alt="">
                                <h4 class="m-b0">Mg. Silvia Aurora Noriega Roldan</h4>
                                <h4 class="m-b0">Decana</h4>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="video-bx">
                                <img src="images/queests.jpg" alt="">
                                <div class="video-play-icon">
                                    <a href="archivos/videoTsprincipal.mp4" class="popup-youtube video bg-primary"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Why Choose Us  -->
        <div class="section-full content-inner doctor-stats-bx" style="background-image:url(images/background/bg10.jpg); background-repeat:no-repeat; background-position:bottom; ba">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">Buscar <span class="text-primary">Colegiado.</span></h3>
                    <p>Ingrese los datos para hacer la busqueda de un colegiado</p>
                </div>
                <div class="row">
                    <form class="col-lg-12" method="post" action="resultado_colegiado.php">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Nro Colegiatura</label>
                                <input type="text" class="form-control" placeholder="999999" name="input_ctsp">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" placeholder="Apellidos" name="input_apellidos">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombres" name="input_nombres">
                            </div>
                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="section-full bg-white content-inner" id="services">
            <div class="container">
                <div class="section-head text-center ">
                    <a href="cursos.php"><h3 class="h3 text-uppercase">Cursos</h3></a>
                </div>
                <div class="section-content ">
                    <div class="row">
                        <?php
                        $acursos = $curso->verUltimosCursos();
                        $fecha_actual = strtotime(date("Y-m-d"));
                        foreach ($acursos as $item) {
                            $fecha_entrada = strtotime($item['fecha']);
                            $label = '<label class="badge badge-success"> Activo</label>';
                            if ($fecha_entrada < $fecha_actual) {
                                $label = '<label class="badge badge-danger"> Cerrado</label>';
                            }
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media">
                                        <a href="detalle_curso.php?idcurso=<?php echo $item['id_curso'] ?>">
                                            <img src="images/cursos/<?php echo $item['imagen'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="dez-info p-a30 border-1">
                                        <h4 class="dez-title m-t0"><a href="detalle_curso.php?idcurso=<?php echo $item['id_curso'] ?>"><?php echo $item['nombre'] ?></a> <?php echo $label?></h4>
                                        <div class="dez-separator bg-primary"></div>
                                        <p class="m-b15">Fecha: <?php echo $util->fechaCastellano($item['fecha']) ?> </p>
                                        <p class="m-b15">Profesor(es) <?php echo $item['profesor'] ?> </p>
                                        <a href="detalle_curso.php?idcurso=<?php echo $item['id_curso'] ?>" class="site-button-link black">Estoy Interesado <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us END -->
        <!-- Services -->
        <div class="section-full bg-white content-inner" id="services">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">EVENTOS</h3>
                </div>
                <div class="section-content ">
                    <div class="blog-carousel owl-carousel owl-theme owl-btn-1 primary owl-btn-center-lr owl-dots-black-full">
                        <?php
                        $anoticias = $noticia->verNoticiasImagen();
                        $fecha_actual = strtotime(date("Y-m-d"));
                        foreach ($anoticias as $item) {
                            $fecha_entrada = strtotime($item['fecha']);
                            $fechalarga = $util->fechaCastellano($item['fecha']);
                            $year= date('Y', $fecha_entrada);
                            $day= date('d', $fecha_entrada);
                            $month = $util->Mes3Letras($fecha_entrada);
                            ?>
                            <div class="item">
                                <div class="dez-box">
                                    <div class="dez-media">
                                        <a href="detalle_notica.php?idnoticia=<?php echo $item['idnoticias'] ?>"><img src="archivos/noticias/imagenes/<?php echo $item['imagen'] ?>" alt=""></a>
                                    </div>
                                    <div class="dez-info p-a20 border-1">
                                        <div class="dez-post-meta ">
                                            <ul>
                                                <li class=""><i class="fa fa-calendar"></i><?php echo $fechalarga ?></span></li>
                                                <!--<li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a></li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a></li>-->
                                            </ul>
                                        </div>
                                        <h4 class="dez-title m-t5 m-b10"><a href="detalle_notica.php?idnoticia=<?php echo $item['idnoticias'] ?>"><?php echo $item['titulo'] ?></a></h4>
                                        <!--<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>-->
                                        <a href="detalle_notica.php?idnoticia=<?php echo $item['idnoticias'] ?>" class="site-button">Leer Mas</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>


                    </div>

                </div>
            </div>
        </div>
        <!-- Services END -->
        <!-- Our Project -->
        <div class="section-full bg-img-fix overlay-primary-dark content-inner-1 dez-support" style="background-image:url(images/background/bg5.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-white ">
                        <h2 class="m-b10 m-t0">Comunicados </h2>
                        <h6>(hacer clic en el titulo)</h6>
                        <br>
                    </div>
                </div>

                <div class="section-content ">
                    <div class="row">
                        <div class="col-lg-12 p-lr0">
                            <!-- blog grid -->
                            <div id="masonry" class="dez-blog-grid-4">
                                <div>
                                    <ul id="masonry" class="dez-gallery-listing gallery-grid-4 mfp-gallery m-b0">
                                        <?php
                                        $acomunicados = $comunicado->verComunicados(12);
                                        foreach ($acomunicados as $item) {
                                        $imagen = $item['imagen'];
                                        ?>
                                            <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 home">
                                                <a href="javascript:void(0);" onclick="cargarArchivo('<?php echo $item['imagen'] ?>');return false">
                                                    <div class="dez-post-info">
                                                        <div class="dez-post-title ">
                                                            <h3 class="post-title text-white"><?php echo $item['titulo'] ?></h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                        ?>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Project END -->
        <!-- Meet Our Team -->
        <!-- Team member-->
        <div class="section-full content-inner bg-gray">
            <div class="container">

            </div>
        </div>
        <!--Team member END -->
        <div class="section-full bg-img-fix overlay-primary-dark content-inner-1 dez-support" style="background-image:url(images/background/bg5.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center text-white ">
                        <h2 class="m-b15 m-t0">ENLACES DE INTERES</h2>
                    </div>
                </div>
                <!-- Image Carousel start -->
                <div class="cr-space">

                    <div class="section-content">
                        <div class="owl-carousel img-carousel mfp-gallery gallery owl-btn-center-lr">
                            <div class="item">
                                <div class="ow-img dez-img-effect zoom-slow"> <a href="http://app.sis.gob.pe/SisConsultaEnLinea/Consulta/frmConsultaEnLinea.aspx" target="_blank"><img src="images/enlaces_interes/sisconsulta.jpg" alt=""></a> </div>
                            </div>
                            <div class="item">
                                <div class="ow-img dez-img-effect zoom-slow"> <a href="http://ww4.essalud.gob.pe:7777/acredita/?_ga=2.177261029.1563388887.1606966413-2008961574.1603862109" target="_blank"><img src="images/enlaces_interes/essalud.jpg" alt=""></a> </div>
                            </div>
                            <div class="item">
                                <div class="owl-img dez-img-effect zoom-slow"> <a href="https://app1.susalud.gob.pe/registro/" target="_blank""><img src="images/enlaces_interes/logosusalud.png" alt=""></a> </div>
                            </div>
                            <div class="item">
                                <div class="ow-img dez-img-effect zoom-slow"> <a href="https://www.defensoria.gob.pe/" target="_blank"><img src="images/enlaces_interes/defensoria.jpg" alt=""></a> </div>
                            </div>
                            <div class="item">
                                <div class="ow-img dez-img-effect zoom-slow"> <a href="https://www.gob.pe/mimp" target="_blank"><img src="images/enlaces_interes/mimp.jpg" alt=""></a> </div>
                            </div>
                            <div class="item">
                                <div class="ow-img dez-img-effect zoom-slow"> <a href="https://www.gob.pe/midis" target="_blank"><img src="images/enlaces_interes/Midis2.png" alt=""></a> </div>
                            </div>
                            <div class="item">
                                <div class="ow-img dez-img-effect zoom-slow"> <a href="http://www.sisfoh.gob.pe/" target="_blank"><img src="images/enlaces_interes/sisfoh.jpg" alt=""></a> </div>
                            </div>
                            <div class="item">
                                <div class="ow-img dez-img-effect zoom-slow"> <a href="https://www.gob.pe/inabif" target="_blank"><img src="images/enlaces_interes/inabif.png" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Image Carousel start END-->


            </div>
        </div>
        <!-- Latest Blog
        <div class="section-full bg-white content-inner-1">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">Revistas</h3>
                </div>
                <div class="section-content">
                    <div class="blog-carousel owl-carousel owl-theme owl-btn-1 primary owl-btn-center-lr owl-dots-black-full">
                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class=""><i class="fa fa-calendar"></i><strong>10 Agosto</strong> <span> 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="dez-title m-t5 m-b10"><a href="#">Provide qualtiy productivity..</a></h4>
                                    <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                    <a href="#" class="site-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class=""><i class="fa fa-calendar"></i><strong>10 Agosto</strong> <span> 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="dez-title m-t5 m-b10"><a href="#">Provide qualtiy productivity..</a></h4>
                                    <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                    <a href="#" class="site-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class=""><i class="fa fa-calendar"></i><strong>10 Octubre</strong> <span> 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="dez-title m-t5 m-b10"><a href="#">Provide qualtiy productivity..</a></h4>
                                    <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                    <a href="#" class="site-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class=""><i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2020</span></li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a></li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dez-title m-t5 m-b10"><a href="#">Provide qualtiy productivity..</a></h4>
                                    <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                    <a href="#" class="site-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class=""><i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2020</span></li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a></li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dez-title m-t5 m-b10"><a href="#">Provide qualtiy productivity..</a></h4>
                                    <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                    <a href="#" class="site-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class=""><i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2020</span></li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a></li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dez-title m-t5 m-b10"><a href="#">Provide qualtiy productivity..</a></h4>
                                    <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                    <a href="#" class="site-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 -->
                <div class="modal fade" id="basicModal">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ver Comunicado </h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <embed src="images/comunicados/logopdf.jpeg" id="embedPDF" width="100%" height="500px" >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer -->
<?php include 'fixed/footer.php'?>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/combining.js"></script><!-- COMBINING JS  -->
<!-- revolution JS FILES -->
<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/rev.slider.js"></script>
<script>


    jQuery(document).ready(function () {
        'use strict';
        dz_rev_slider_5();
    });	/*ready*/

    function cargarArchivo (archivo) {
        $("#basicModal").modal("toggle");
        $("#embedPDF").attr("src", "images/comunicados/" + archivo)
    }
</script>

</body>

<!-- Mirrored from medico.dexignzone.com/xhtml/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 21:19:49 GMT -->
</html>