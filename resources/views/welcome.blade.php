@extends('layouts.front', [
    'class' => 'bg-default',
    'facebook' => $slider->facebook,
    'twitter' => $slider->twitter,
    'youtube' => $slider->youtube,
    'linkedin' => $slider->linkedin,
    'instagram' => $slider->instagram
    ])

@section('content')
<!-- Header start -->
<section class="top-header cursor-light">
    <div class="row no-gutters">
        <div class="col-6 col-lg-4">
            <div class="slider-icons">
                <ul class="slider-social banner-social d-flex">
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-facebook-f"></i> </a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-twitter"></i>  </a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-linkedin"></i> </a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-instagram"></i> </a></li>
                </ul>
            </div>
        </div>
        <div class="col-6 col-lg-4 d-flex align-items-center justify-content-end justify-content-lg-center">
            <a class="menu_bars menu-bars-setting sidemenu_toggle link mr-3 mr-lg-0">
                <div class="menu-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a href="javascript:void(0)" class="btn-setting link btn-hvr-up btn-hvr-whatsapp color-white mr-lg-4 d-none d-lg-inline-block"><i class="fab fa-whatsapp"></i> +1 631 112 1134</a>
        </div>
    </div>
</section>
<header class="cursor-light">
    <nav class="navbar navbar-top-default navbar-expand-lg nav-three-circles bottom-nav nav-box-shadow no-animation">
        <div class="container-fluid">
            <a class="logo ml-lg-1" href="javascript:void(0)">
                <img src="agency/img/LogoH.png" class="logo-default" alt="logo" title="Logo">
            </a>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"> <a href="#home" class="scroll nav-link link">inicio</a></li>
                    <li class="nav-item"> <a href="#about" class="scroll nav-link link">acerca de </a></li>
                    <li class="nav-item"> <a href="#business" class="scroll nav-link link">negocio</a></li>
                    <li class="nav-item"> <a href="#team" class="scroll nav-link link">equipo</a></li>
                    {{-- <li class="nav-item"> <a href="#clients" class="scroll nav-link link">clientes</a></li> --}}
                    <li class="nav-item"> <a href="#blog" class="scroll nav-link link">noticias</a></li>
                    <li class="nav-item"> <a href="#contact" class="scroll nav-link link">contacto</a></li>
                </ul>
            </div>
            <a href="javascript:void(0)" class="nav-btn-number btn-setting btn-hvr-up btn-hvr-whatsapp color-white mr-lg-3"><i class="fab fa-whatsapp"></i> +1 631 112 1134</a>
            <!-- side menu open button -->
            <div class="menu-btn">
            <a class="menu_bars menu-bars-setting animated-wrap sidemenu_toggle">
                <div class="menu-lines animated-element">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            </div>
            <!-- Side Menu -->
        </div>
    </nav>
    <!-- side menu open button -->
<!--    <a class="menu_bars menu-bars-setting animated-wrap sidemenu_toggle d-lg-inline-block d-none">-->
<!--        <div class="menu-lines animated-element">-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--        </div>-->
<!--    </a>-->
    <!-- Side Menu -->
    <div class="side-menu center">
        <div class="quarter-circle">
            <div class="menu_bars2 active" id="btn_sideNavClose">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="inner-wrapper justify-content-center">
            <div class="col-md-12 text-center">
                <a href="javascript:void(0)" class="logo-full mb-4"><img src="agency/img/LogoH.png" alt=""></a>
            </div>
            <nav class="side-nav m-0">
                <ul class="navbar-nav flex-lg-row">
                    <li class="nav-item"> <a href="#home" class="scroll nav-link link">inicio</a></li>
                    <li class="nav-item"> <a href="#about" class="scroll nav-link link">acerca de</a></li>
                    <li class="nav-item"> <a href="#business" class="scroll nav-link link">negocio</a></li>
                    <li class="nav-item"> <a href="#team" class="scroll nav-link link">equipo</a></li>
                    {{-- <li class="nav-item"> <a href="#clients" class="scroll nav-link link">clientes</a></li> --}}
                    <li class="nav-item"> <a href="#blog" class="scroll nav-link link">noticias</a></li>
                    <li class="nav-item"> <a href="#contact" class="scroll nav-link link">contacto</a></li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-facebook-f color-white"></i> </a> </li>
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-instagram color-white"></i> </a> </li>
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-twitter color-white"></i> </a> </li>
                </ul>
                <p class="text-white mt-2 mb-2">&copy; {{ now()->year }} Heritage. Hecho con <span style="color:red;">&#10084;</span> por <a href="#" style="color:white;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'">Tooring</a></p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!--Side Menu-->
</header>
<!-- Header end -->

<!-- Main Section start -->
<section id="home" class="p-0 h-100vh cursor-light">
    <h2 class="d-none">heading</h2>
    <!--Main Slider-->
    <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="weone" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_8_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul><!-- SLIDE  -->
                <!-- SLIDE 1 -->
                <li data-index="rs-36" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                    <img src="{{ asset('storage/'.$slider->banner) }}"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" alt="slider-image" data-no-retina>
                    <div class="banner-overlay"></div>
                    <!-- LAYERS -->
                    {{-- <div class="rs-background-video-layer"
                         data-forcerewind="on"
                         data-volume="mute"
                         data-videowidth="100%"
                         data-videoheight="100vh"
                         data-videomp4="{{ $slider->banner }}"
                         data-videopreload="auto"
                         data-videoloop="loopandnoslidestop"
                         data-forceCover="1"
                         data-aspectratio="16:9"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"></div> --}}
                    <!-- LAYER Text -->
                    {{-- <div class="tp-caption color-terracota"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['270','200','100','15']"
                         data-fontsize="['60','50','40','40']"
                         data-lineheight="['75','75','75','40']"
                         data-width="['556','556','556','300']"
                         data-height="['none','none','none','87']"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":100,"split":"chars","splitdelay":0.1,"speed":1480,"split_direction":"random","frame":"0","from":"y:50px;sX:1;sY:1;opacity:0;fb:20px;","color":"rgba(0,0,0,0)","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":350,"frame":"999","color":"transparent","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 10; min-width: 556px; max-width: 556px; white-space: nowrap; font-size: 60px; line-height: 75px; font-weight: 300; letter-spacing: 0px;font-family: 'Montserrat', sans-serif;"><img src="agency/img/logo-yellow.png" class="link" alt="logo"></div> --}}

                    <!-- LAYER Text -->
                    <div class="tp-caption color-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['368','260','155','105']"
                         data-fontsize="['62','50','40','40']"
                         data-lineheight="['75','75','45','45']"
                         data-width="['556','556','556','350']"
                         data-height="['none','none','none','87']"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":150,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         {{-- style="z-index: 10; min-width: 556px; max-width: 556px; white-space: nowrap; font-weight: 500; letter-spacing: 0px;font-family: 'Montserrat', sans-serif;"><div id="js-rotating">Digital Ad Agency, Modern Works, Elegant Ad Design </div> </div> --}}
                         {{-- style="z-index: 10; min-width: 556px; max-width: 556px; white-space: nowrap; font-weight: 500; letter-spacing: 0px;font-family: 'Raleway', sans-serif;">{{ $slider->brand }}  </div> --}}
                         ><img src="agency/img/Logo.png" class="link" alt="" ></div>

                    <!-- LAYER Text -->
                    {{-- <div class="tp-caption color-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['top','middle','middle','middle']" data-voffset="['470','95','0','20']"
                         data-whitespace="normal"
                         data-width="['580','630','550','440']"
                         data-fontsize="['20','15','15','15']"
                         data-lineheight="['30','25','22','22']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":100,"speed":1480,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":350,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 10; min-width: 650px; max-width: 650px; white-space: nowrap; font-weight: 300; letter-spacing: 1px;font-family: 'Raleway', sans-serif;">{{ $slider->slogan }}
                    </div> --}}

                    <!-- LAYER Button -->
                    {{-- <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['170','200','90','120']"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         data-width="['160','160','160','160']"
                         style="z-index: 10; min-width: 960px; max-width: 960px">
                        <a href="javascript:void(0)" class="btn-setting color-white btn-hvr-up btn-hvr-terracota link">learn more</a>
                    </div> --}}


                </li>
            </ul>

            <div class="tp-bannertimer" style="height: 5px; background: rgba(0,0,0,0.15);"></div>	</div>
    </div>
    <!--Main Slider ends -->

</section>
<!-- Main Section end -->

<!--About start-->
<section class="about overflow-visible bg-dark1" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-5 mb-5 mb-lg-0 wow fadeInLeft">
                <div class="rare-box"></div>
                <img src="{{ asset('storage/'.$about->picture) }}" class="about-img-small position-relative w-100" alt="">
                {{-- <span>Photo by <a href="https://unsplash.com/@alimorshedlou?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Ali Morshedlou</a> on <a href="https://unsplash.com/s/photos/investment?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span> --}}
            </div>
            <div class="col-lg-6 pl-6">
                <div class="main-title text-lg-left offset-md-1 mb-0 wow fadeInUp" data-wow-delay="300ms">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">{{ $about->h5 }}</h5>
                    <h2 class="wow fadeInUp font-weight-light" data-wow-delay="400ms">{{ $about->h2 }}</h2>
                    <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">{{ $about->p1 }}</p>
                    <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">{{ $about->p2 }}</p>
                    <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">{{ $about->p3 }}</p>

                    {{-- <ul class="pb-5 text-left wow fadeInUp" data-wow-delay="600ms">
                        <li>Deuda.</li>
                        <li>Capital.</li>
                        <li>M&A.</li>
                        <li>FX & IR.</li>
                    </ul> --}}

                    {{-- <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-terracota btn-hvr-pink text-white link wow fadeInUp" data-wow-delay="700ms">leer más</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--About end-->

<!-- About Boxes start -->
<section class="bg-dark2" id="business">
    <div class="container-fluid p-0" style="width: 100%">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h2>Nuestras <span class="color-pink">Soluciones</span> </h2>
                </div>
            </div>
        </div>
        <div class="row mx-auto">
            @foreach ($companies as $company)
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="card flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front"><!-- frente de la tarjeta -->
                                <img src="{{ asset('storage/'.$company->picture ) }}" alt="imagen"><!-- Imagen frontal -->
                            </div>
                            <div class="flip-card-back"><!-- reverso de la tarjeta -->
                                <div class="row no-gutters">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $company->name }}</h5>
                                        <p class="card-text pl-2 mt-2">{{ $company->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-md-3 col-sm-6 p-0">
                <div class="card flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front"><!-- frente de la tarjeta -->
                            <img src="{{ asset('agency/img/Business-Capital.png') }}" alt="imagen"><!-- Imagen frontal -->
                        </div>
                        <div class="flip-card-back"><!-- reverso de la tarjeta -->
                            <div class="row no-gutters">
                                <div class="card-body">
                                    <h5 class="card-title">Capital Amigo</h5>
                                    <p class="card-text pl-2 mt-2">Capital Amigo es un fondo diversificado de capital privado. Contamos con sólidas plataformas para invertir en el desarrollo, construcción, operación y adquisición de activos inmobiliarios. Contamos con experiencia probada en organización, estructuración, desarrollo y monetización.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="card flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front"><!-- frente de la tarjeta -->
                            <img src="{{ asset('agency/img/Business-Cree.png') }}" alt="imagen"><!-- Imagen frontal -->
                        </div>
                        <div class="flip-card-back"><!-- reverso de la tarjeta -->
                            <div class="row no-gutters">
                                <div class="card-body">
                                    <h5 class="card-title">Credito</h5>
                                    <p class="card-text pl-2 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui tellus, maximus ac lacinia vitae, hendrerit sed tellus. Quisque mattis nec tellus eu vehicula. Donec posuere egestas leo, a condimentum velit molestie vitae. Etiam neque nisl, faucibus nec consequat eu, aliquam a sapien. Maecenas finibus neque nec eros sollicitudin gravida. Phasellus et ultrices justo. Praesent dignissim pellentesque pretium. Nam tempus nunc laoreet luctus blandit. Cras feugiat nec mi ac fringilla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="card flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front"><!-- frente de la tarjeta -->
                            <img src="{{ asset('agency/img/Business-Heritage.png') }}" alt="imagen"><!-- Imagen frontal -->
                        </div>
                        <div class="flip-card-back"><!-- reverso de la tarjeta -->
                            <div class="row no-gutters">
                                <div class="card-body">
                                    <h5 class="card-title">Heritage Capital</h5>
                                    <p class="card-text pl-2 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui tellus, maximus ac lacinia vitae, hendrerit sed tellus. Quisque mattis nec tellus eu vehicula. Donec posuere egestas leo, a condimentum velit molestie vitae. Etiam neque nisl, faucibus nec consequat eu, aliquam a sapien. Maecenas finibus neque nec eros sollicitudin gravida. Phasellus et ultrices justo. Praesent dignissim pellentesque pretium. Nam tempus nunc laoreet luctus blandit. Cras feugiat nec mi ac fringilla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!-- About Video ends -->
<section class="bg-dark2 p-0" id="video">
    <div class="container-fluid p-0" style="width: 100%">
        <div class="row">
            <div class="col-md-12">
                <!-- 
                    Introducir la identificación que YouTube proporciona (tal como tgbNymZ7vqY) cuando reproduzca un video. 
                    Y pegar después de: embed/'idenficicación'
                    Ejemplo: embed/tgI6PjEq0O8
                -->
                <iframe style="height: 100vh" src="https://www.youtube.com/embed/tgI6PjEq0O8"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Parallax One -->
<div class="parallaxOne"></div>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-5">
                <img class="zoom" src="{{ asset('/agency/img/parallaxLeft.jpeg') }}" alt="" width="100%">
            </div>
            <div class="col-md-6 m-auto px-0">
                <div class="main-title wow fadeIn text-white m-auto" data-wow-delay="300ms">
                    <h4 class="mb-5 font-weight-normal">Nuestro enfoque para tu  <span class="color-pink">seguridad</span> </h4>
                </div>
                <div class="main-title wow fadeIn text-white m-auto" data-wow-delay="300ms">
                    <h4 class="mb-5 font-weight-normal">Calidez y asesoría <span class="color-pink">financiera</span> </h4>
                </div>
                <div class="main-title wow fadeIn text-white m-auto" data-wow-delay="300ms">
                    <h4 class="mb-5 font-weight-normal">Inteligencia <span class="color-pink">Financiera</span> </h4>
                </div>
                <div class="main-title wow fadeIn text-white m-auto" data-wow-delay="300ms">
                    <h4 class="font-weight-normal">Expertise en portafolio de alto <span class="color-pink">rendimiento</span> </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallaxTwo"></div>
<!-- Parallax One ends-->


<!-- More info -->
<section id="team" class="bg-light-gray bg-dark1" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h2 class="mb-0">Trabaja de la mano <span class="color-pink">Con los expertos</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 pl-6">
                <div class="main-title text-lg-left offset-md-1 mb-0 wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="wow fadeInUp font-weight-light" data-wow-delay="400ms"> 25 años de experiencia en el medio financiero</h2>
                    <h2 class="wow fadeInUp font-weight-light" data-wow-delay="400ms"> Adminisgtración de activos de 10 millones de USD</h2>
                </div>
            </div>
            <div class="col-lg-6 pr-5 mb-5 mb-lg-0 wow fadeInLeft">
                <div class="rare-box"></div>
                <img src="{{ asset('agency/img/moreInfo.jpeg') }}" class="about-img-small position-relative w-100" alt="">
            </div>
        </div>
    </div>
</section>
<!-- More info ends -->


<!-- Team start -->
{{-- <section id="team" class="bg-light-gray bg-dark1" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h2 class="mb-0">Nuestro <span class="color-pink">Equipo</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="image">
                    <img src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-christopher-walken.jpg"/>
                    </div>
                    <div class="details">
                    <div class="center">
                        <h1>Alejandro Bringas<br><span>Socio Fundador</span></h1>
                        <p>Alguna muy breve descripción....</p>
                        <ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="image">
                    <img src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-sean-penn.jpg"/>
                    </div>
                    <div class="details">
                    <div class="center">
                        <h1>Andres Romero<br><span>Socio</span></h1>
                        <p>Alguna muy breve descripción....</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="image">
                    <img src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-clint-eastwood.jpg"/>
                    </div>
                    <div class="details">
                    <div class="center">
                        <h1>Gerardo López<br><span>Socio</span></h1>
                        <p>Alguna muy breve descripción....</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Team ends -->

<!-- Quote start -->
{{-- <section class="parallax-setting parallaxie parallax1">
    <h2 class="d-none">heading</h2>
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-md-12">
                    <div class="quote-text text-center wow fadeInRight" data-wow-delay="300ms">
                        <div class="quote d-flex justify-content-start mb-2rem"><i class="fa fa-quote-left"></i></div>
                        <h2 class="font-weight-light mb-5 line-height-normal text-white"><span class="color-terracota">Creativity</span> is allowing yourself to make mistakes Art is knowing which ones to keep.</h2>
                        <h3 class="color-pink">Alice Johnson</h3>
                        <div class="quote d-flex justify-content-end mb-3"><i class="fa fa-quote-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
</section> --}}
<!-- Quote ends -->

<!-- Work Starts -->
{{-- <section id="work" class="pb-0 bg-dark1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> Lorem ipsum dolor sit amet </h5>
                    <h2 class="mb-0">Creative<span class="color-pink"> Portfolio</span> </h2>
                </div>
            </div>
        </div>
        <div class="row d-block">

            <div id="js-filters-mosaic-flat" class="cbp-l-filters-alignCenter">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item cbp-filter-style">
                    All <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".graphic-designs" class="cbp-filter-item cbp-filter-style">
                    Graphic Designs <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".web-designs" class="cbp-filter-item cbp-filter-style">
                    Web Designs <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".seo" class="cbp-filter-item cbp-filter-style">
                    SEO <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".marketing" class="cbp-filter-item">
                    Marketing <div class="cbp-filter-counter"></div>
                </div>
            </div>

            <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat no-transition">
                <div class="cbp-item web-designs marketing">
                    <a href="agency/img/work1.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="agency/img/work1.jpg" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>Elegant | Images</p>
                                    <div class="cbp-l-caption-title">We are digital agency</div>
                                    <span class="work-icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item graphic-designs seo">
                    <a href="agency/img/work2.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-defaultWrap">
                            <img src="agency/img/work2.jpg" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>Elegant | Images</p>
                                    <div class="cbp-l-caption-title">Creative art work</div>
                                    <span class="work-icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item graphic-designs web-designs">
                    <a href="agency/img/work3.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="agency/img/work3.jpg" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>Elegant | Images</p>
                                    <div class="cbp-l-caption-title">Modern portfolio</div>
                                    <span class="work-icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item seo marketing">
                    <a href="agency/img/work6.jpg" class="cbp-caption cbp-lightbox" data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="agency/img/work6.jpg" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>Elegant | Images</p>
                                    <div class="cbp-l-caption-title">Digital art works</div>
                                    <span class="work-icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item web-designs seo">
                    <a href="agency/img/work4.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music<br>by Tiberiu Neamu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="agency/img/work4.jpg" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>Elegant | Images</p>
                                    <div class="cbp-l-caption-title">Photography</div>
                                    <span class="work-icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-designs marketing">
                    <a href="agency/img/work5.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="agency/img/work5.jpg" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>Elegant | Images</p>
                                    <div class="cbp-l-caption-title">Modern workspace</div>
                                    <span class="work-icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section> --}}
<!-- Work ends -->

<!-- Pricing start -->
<section id="pricing" class="bg-light-gray pricing-padding bg-dark2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    {{-- <h5> Lorem ipsum dolor sit amet </h5> --}}
                    <h2 class="mb-0">Permítenos <span class="color-terracota"> conocerte</span> </h2>
                </div>
            </div>
        </div>
        <div class="row mt-6 mt-xs-4rem">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-5 wow fadeInUp">
                <div class="pricing-item hvr-bg-terracota">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">¿QUÉ OBJETIVOS BUSCAS?</h4>
                        </div>
                    </div>
                    <br>
                    {{-- <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>19<span class="month">/ month</span></h2>
                    </div> --}}
                    <div class="price-description">
                        <p>Individuales o familiares</p>
                        <p>Tranquilidad y legado</p>
                        <p>Dinámicos conforme la etapa de tu vida</p>
                    </div>
                    <br>
                    {{-- <div class="text-center">
                        <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-white">learn more</a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-xs-5 wow fadeInUp">
                <div class="pricing-item hvr-bg-terracota">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">¿CÓMO LLEGAR A ESOS OBJETIVOS?</h4>
                        </div>
                    </div>
                    <br>
                    {{-- <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>19<span class="month">/ month</span></h2>
                    </div> --}}
                    <div class="price-description">
                        <p>Posiciones de corto o largo plazo</p>
                        <p>Análisis Macro</p>
                        <p>Oportunidades asimétricas</p>
                    </div>
                    <br><br>
                    {{-- <div class="text-center">
                        <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-white">learn more</a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center wow fadeInUp">
                <div class="pricing-item hvr-bg-terracota">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">aLINEACIÓN DE OBJETIVOS</h4>
                        </div>
                    </div>
                    <br>
                    {{-- <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>49<span class="month">/ month</span></h2>
                    </div> --}}
                    <div class="price-description">
                        <p>Responsabilidad y obsesión por construir</p>
                        <p>Ejecución con expertos</p>
                        <p>Seguimiento y adaptación a entornos agresivos</p>
                    </div>
                    {{-- <div class="text-center">
                        <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-pink btn-hvr-white">learn more</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing ends -->

<!-- Clients start -->
{{-- <section id="clients" class="bg-white p-0 cursor-light no-transition">
    <h2 class="d-none">heading</h2>
    <div class="section-padding parallax-setting parallaxie parallax2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h5> Lorem ipsum dolor sit amet </h5>
                        <h2 class="mb-0">Valuable<span class="color-pink"> Clients</span></h2>
                    </div>
                </div>
            </div>

            <div class="testimonial-images">
                <div class="owl-thumbs owl-dots d-lg-block d-none">
                    <div class="owl-dot animated-wrap active"><img src="agency/img/testimonial1.png" alt="" class="animated-element"></div>
                    <div class="owl-dot animated-wrap"><img src="agency/img/testimonial2.png" alt="" class="animated-element"></div>
                    <div class="owl-dot animated-wrap"><img src="agency/img/testimonial3.png" alt="" class="animated-element"></div>
                    <div class="owl-dot animated-wrap"><img src="agency/img/testimonial4.png" alt="" class="animated-element"></div>

                    <div class="owl-dot animated-wrap"><img src="agency/img/testimonial5.png" alt="" class="animated-element"></div>
                    <div class="owl-dot animated-wrap"><img src="agency/img/testimonial6.png" alt="" class="animated-element"></div>
                    <div class="owl-dot animated-wrap"><img src="agency/img/testimonial7.jpg" alt="" class="animated-element"></div>
                    <div class="owl-dot animated-wrap"><img src="agency/img/testimonial8.jpg" alt="" class="animated-element"></div>
                </div>
            </div>

            <div class="row align-items-center position-relative">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme testimonial-two hide-cursor mx-auto wow zoomIn" data-wow-delay="400ms">
                        <div class="testimonial-item">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial1.png" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">David Walker</h5>
                                    <p class="color-white"> Chairman, AcroEx </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item hide-cursor">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial2.png" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">Christina Williams</h5>
                                    <p class="color-white"> HR Manager </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial3.png" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">Sarah Jones</h5>
                                    <p class="color-white"> Sales Executive </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial4.png" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">Chris Gorgano</h5>
                                    <p class="color-white"> Photographer </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-item">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial5.png" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">Kate Carter</h5>
                                    <p class="color-white"> Model </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial6.png" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">Alex Curtis </h5>
                                    <p class="color-white"> Manager </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial7.jpg" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">Ashley Wilson</h5>
                                    <p class="color-white"> Actor </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="color-white testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="agency/img/testimonial8.jpg" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-white text-capitalize">Johnny Perkins</h5>
                                    <p class="color-white"> Athlete </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Clients ends -->

<!-- Blog start -->
<section id="blog" class="half-section p-0 bg-change bg-terracota">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-12 p-0">
                <div class="hover-effect">
                    <img alt="blog" src="agency/img/hunters-race-MYbhN8KaaEc-unsplash.jpg" class="about-img">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-lg-0">
                <div class="split-container-setting style-three text-center">
                    <div class="main-title mb-5 wow fadeIn" data-wow-delay="300ms">
                        {{-- <h5 class="font-18 text-blue"> Oct 12, 2019</h5> --}}
                        <h2 class="mb-0 font-weight-normal"> Nuestro Blog </h2>
                    </div>
                    <p class="color-black mb-5">Sección destinada a noticias de interés.</p>

                    <a href="{{ route('blog') }}" class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-pink">Acceder</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Blog ends -->

<!-- Contact & Map starts -->
<section id="contact" class="bg-light-gray bg-dark1">
    <div class="container">
        <div class="row mx-lg-0">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="contact-box bg-dark2">
                    <div class="main-title text-center text-md-left mb-0">
                        <h2 class="font-weight-normal mb-3">Contáctanos </h2>
                    </div>

                    <div class="text-center text-md-left">
                        <!--Address-->
                        <p class="mb-2">Calle 123 Col. Centro , CDMX México. </p>
                        <!--Phone-->
                        <p class="mb-2"> 
                            Oficina: 55 123445678 
                            <br>
                            Móvil: 5555000000 
                        </p>
                        <!--Email-->
                        <p class="mb-2">
                            Email: <a href="#" class="color-white">admin@heritage.com</a> 
                            <br>
                            Ventas: <a href="#" class="color-white">email@heritage.com</a>
                        </p>
                        <!--Timing-->
                        <p class="mb-0">Lun-Vie: 9am to 6pm</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0 col-map box-shadow-map">
                {{-- <div id="google-map" class="bg-light-gray map"></div> --}}
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.1171287085244!2d-100.40069438562224!3d20.58327378624133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b526dfd765d%3A0xf0ff77c7cd66a57e!2sWorks%20Coworking!5e0!3m2!1ses!2smx!4v1610563090033!5m2!1ses!2smx" 
                    width="600" 
                    height="313"
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
            </div>
        </div>
    </div>
</section>
<!-- Contact & Map ends -->

@endsection
