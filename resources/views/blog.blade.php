@extends('layouts.front', ['class' => 'bg-default'])

@section('content')
<!-- Header start -->
<header class="cursor-light">
    <!-- Creé una nueva clase llamada navbar-top-blog y la sustituí por navbar-top-default -->
    <nav class="navbar navbar-top-blog navbar-expand-lg nav-three-circles bottom-nav nav-box-shadow no-animation">
        <div class="container-fluid">
            <a class="logo ml-lg-1" href="{{ route('welcome') }}">
                <img src="agency/img/LogoH.png" class="logo-default" alt="logo" title="Logo">
            </a>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="nav navbar-nav mx-auto">
                    {{-- <li class="nav-item"> <a href="{{ route('welcome') }}" class="scroll nav-link link">home</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#about" class="scroll nav-link link">about</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#business" class="scroll nav-link link">business</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#team" class="scroll nav-link link">equipo</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#clients" class="scroll nav-link link">clients</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#blog" class="scroll nav-link link">blog</a></li>
                    <li class="nav-item"> <a href="index.html#contact" class="scroll nav-link link">contact</a></li> --}}
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
                <a href="javascript:void(0)" class="logo-full mb-4"><img src="ad-agency/img/logo-pure-white.png" alt=""></a>
            </div>
            <nav class="side-nav m-0">
                <ul class="navbar-nav flex-lg-row">
                    {{-- <li class="nav-item"> <a href="{{ route('welcome') }}" class="scroll nav-link link">home</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#about" class="scroll nav-link link">about</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#business" class="scroll nav-link link">business</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#team" class="scroll nav-link link">equipo</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#clients" class="scroll nav-link link">clients</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#blog" class="scroll nav-link link">blog</a></li>
                    <li class="nav-item"> <a href="{{ route('welcome') }}#contact" class="scroll nav-link link">contact</a></li> --}}
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

<!--About start-->
<section class="about overflow-visible bg-dark1" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content-cards">
                    <div class="card-box main-title text-lg-left mb-lg-4 mr-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <span class="wow fadeInUp color-pink">Design</span>
                        <h4 class="color-white wow fadeInUp" data-wow-delay="300ms"> Post title </h4>
                        <h6 class="wow fadeInUp color-vlight-grey font-weight-light" data-wow-delay="400ms"> Nov 12 </h6>
                        <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue diam, accumsan vitae justo non, euismod aliquam lectus. Etiam elementum tortor quis risus posuere, in cursus arcu lobortis.</p>

                        <div class="text-lg-right">
                            <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-yellow btn-hvr-pink text-white link wow fadeInUp" data-wow-delay="700ms">learn more</a>
                        </div>
                    </div>
                    <div class="card-box main-title text-lg-left mb-lg-4 mr-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <span class="wow fadeInUp color-pink">Design</span>
                        <h4 class="color-white wow fadeInUp" data-wow-delay="300ms"> Post title </h4>
                        <h6 class="wow fadeInUp color-vlight-grey font-weight-light" data-wow-delay="400ms"> Nov 12 </h6>
                        <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue diam, accumsan vitae justo non, euismod aliquam lectus. Etiam elementum tortor quis risus posuere, in cursus arcu lobortis.</p>

                        <div class="text-lg-right">
                            <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-yellow btn-hvr-pink text-white link wow fadeInUp" data-wow-delay="700ms">learn more</a>
                        </div>
                    </div>
                    <div class="card-box main-title text-lg-left mb-lg-4 mr-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <span class="wow fadeInUp color-pink">World</span>
                        <h4 class="color-white wow fadeInUp" data-wow-delay="300ms"> Post title </h4>
                        <h6 class="wow fadeInUp color-vlight-grey font-weight-light" data-wow-delay="400ms"> Nov 12 </h6>
                        <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue diam, accumsan vitae justo non, euismod aliquam lectus. Etiam elementum tortor quis risus posuere, in cursus arcu lobortis.</p>

                        <div class="text-lg-right">
                            <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-yellow btn-hvr-pink text-white link wow fadeInUp" data-wow-delay="700ms">learn more</a>
                        </div>
                    </div>
                    <div class="card-box main-title text-lg-left mb-lg-4 mr-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <span class="wow fadeInUp color-pink">World</span>
                        <h4 class="color-white wow fadeInUp" data-wow-delay="300ms"> Post title </h4>
                        <h6 class="wow fadeInUp color-vlight-grey font-weight-light" data-wow-delay="400ms"> Nov 12 </h6>
                        <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue diam, accumsan vitae justo non, euismod aliquam lectus. Etiam elementum tortor quis risus posuere, in cursus arcu lobortis.</p>

                        <div class="text-lg-right">
                            <a href="javascript:void(0)" class="btn-setting color-black btn-hvr-up btn-yellow btn-hvr-pink text-white link wow fadeInUp" data-wow-delay="700ms">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <h6 class="wow fadeInRight color-white font-weight-light" data-wow-delay="400ms"> About </h6>
                <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum</p>
                <hr class="bg-white">
                <h6 class="wow fadeInRight color-white font-weight-light" data-wow-delay="400ms"> Tags </h6>
                <div class="content-tags">
                    <a class="bg-pink btn-tag btn-hvr-up link btn-hvr-yellow"><span class="color-white">Design</span></a>
                    <a class="bg-pink btn-tag btn-hvr-up link btn-hvr-yellow"><span class="color-white">Journey</span></a>
                    <a class="bg-pink btn-tag btn-hvr-up link btn-hvr-yellow"><span class="color-white">LifeStype</span></a>
                    <a class="bg-pink btn-tag btn-hvr-up link btn-hvr-yellow"><span class="color-white">World</span></a>
                    <a class="bg-pink btn-tag btn-hvr-up link btn-hvr-yellow"><span class="color-white">Foods & Drinks</span></a>
                </div>
                <hr class="bg-white">
            </div>
        </div>
    </div>
</section>
<!--About end-->

@endsection
