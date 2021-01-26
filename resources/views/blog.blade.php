@extends('layouts.front', ['class' => 'bg-default'])

@section('content')
<!-- Header start -->
{{-- <section class="top-header cursor-light">
    <div class="row no-gutters">
        <div class="col-6 col-lg-4">
            <div class="slider-icons">
                <ul class="slider-social banner-social d-flex">
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-facebook-f"></i> </a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-twitter"></i>  </a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i> </a></li>
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
</section> --}}
<header class="cursor-light">
    <nav class="navbar navbar-top-default navbar-expand-lg nav-three-circles bottom-nav nav-box-shadow no-animation">
        <div class="container-fluid">
            <a class="logo ml-lg-1" href="javascript:void(0)">
                <img src="agency/img/LogoH.png" class="logo-default" alt="logo" title="Logo">
            </a>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"> <a href="#home" class="scroll nav-link link">home</a></li>
                    <li class="nav-item"> <a href="#about" class="scroll nav-link link">about</a></li>
                    <li class="nav-item"> <a href="#business" class="scroll nav-link link">business</a></li>
                    <li class="nav-item"> <a href="#team" class="scroll nav-link link">equipo</a></li>
                    {{-- <li class="nav-item"> <a href="#clients" class="scroll nav-link link">clients</a></li> --}}
                    <li class="nav-item"> <a href="#blog" class="scroll nav-link link">blog</a></li>
                    <li class="nav-item"> <a href="#contact" class="scroll nav-link link">contact</a></li>
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
                    <li class="nav-item"> <a href="#home" class="scroll nav-link link">home</a></li>
                    <li class="nav-item"> <a href="#about" class="scroll nav-link link">about</a></li>
                    <li class="nav-item"> <a href="#business" class="scroll nav-link link">business</a></li>
                    <li class="nav-item"> <a href="#team" class="scroll nav-link link">equipo</a></li>
                    {{-- <li class="nav-item"> <a href="#clients" class="scroll nav-link link">clients</a></li> --}}
                    <li class="nav-item"> <a href="#blog" class="scroll nav-link link">blog</a></li>
                    <li class="nav-item"> <a href="#contact" class="scroll nav-link link">contact</a></li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-facebook-f color-white"></i> </a> </li>
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-instagram color-white"></i> </a> </li>
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-twitter color-white"></i> </a> </li>
                </ul>
                <p class="text-white">&copy; 2021 Heritage. Made With Love by Tooring</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!--Side Menu-->
</header>
<!-- Header end -->

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
        <div class="row mt-66px mt-xs-4rem">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-xs-5 wow fadeInUp">
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
        <div class="row mt-66px mt-xs-4rem">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-xs-5 wow fadeInUp">
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
        <div class="row mt-66px mt-xs-4rem">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-xs-5 wow fadeInUp">
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

@endsection
