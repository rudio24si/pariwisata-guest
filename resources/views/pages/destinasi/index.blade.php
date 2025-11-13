@extends('layouts.guest.app')

@section('content')
<!-- Page Content Start -->
<main id="mxd-page-content" class="mxd-page-content">
    <!-- Floating WhatsApp Button -->
    <div class="whatsapp-float">
        <a href="#pemanduLokal"
            target="_blank"
            class="whatsapp-link"
            aria-label="Hubungi kami via WhatsApp">
            <i class="ph ph-whatsapp-logo"></i>
        </a>
    </div>
    <!-- Hero Section Start -->
    <div class="mxd-section">
        <div class="mxd-hero-07">
            <div class="mxd-hero-07__wrap loading-wrap">
                <!-- top part -->
                <div class="mxd-hero-07__top">
                    <div class="mxd-hero-07__marquee loading__item">
                        <div class="marquee marquee-right--gsap bright">
                            <div class="marquee__toright">
                                <!-- single item -->
                                <div class="marquee__item one-line item-regular text">
                                    <p class="marquee__text">Pantai</p>
                                    <div class="marquee__image">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                            fill="currentColor">
                                            <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                                c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                                c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                                C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                                c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                                s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                                c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                                " />
                                        </svg>
                                    </div>
                                </div>
                                <!-- single item -->
                                <div class="marquee__item one-line item-regular text">
                                    <p class="marquee__text">Gunung</p>
                                    <div class="marquee__image">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                            fill="currentColor">
                                            <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                                c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                                c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                                C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                                c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                                s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                                c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                                " />
                                        </svg>
                                    </div>
                                </div>
                                <!-- single item -->
                                <div class="marquee__item one-line item-regular text">
                                    <p class="marquee__text">Danau</p>
                                    <div class="marquee__image">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                            fill="currentColor">
                                            <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                                c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                                c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                                C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                                c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                                s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                                c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                                " />
                                        </svg>
                                    </div>
                                </div>
                                <!-- single item -->
                                <div class="marquee__item one-line item-regular text">
                                    <p class="marquee__text">Pulau</p>
                                    <div class="marquee__image">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                            fill="currentColor">
                                            <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                                c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                                c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                                C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                                c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                                s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                                c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                                " />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bottom part -->
                <div class="mxd-hero-07__bottom">
                    <div class="mxd-hero-07__circle">
                        <div class="hero-07-circle__image hero-07-slide-out-scroll loading__item">
                            <img src="{{ asset('assets/img/alam1.jpg') }}" alt="Hero Image">
                        </div>
                        <div class="hero-07-circle__container hero-07-fade-out-scroll">
                            <div class="hero-07-circle__item item-01 loading__item">
                                <div class="mxd-hero__mark">
                                    <span class="mark-icon"></span>
                                    <span class="mark-text">Dijamin seru!</span>
                                </div>
                            </div>
                        </div>
                        <div class="hero-07-circle__container mobile-row hero-07-fade-out-scroll">
                            <div class="hero-07-circle__item item-02 loading__item">
                                <div class="mxd-counter small">
                                    <p id="stats-counter-1" class="mxd-counter__number mxd-stats-number small">0</p>
                                    <p class="mxd-counter__descr t-140 t-bright t-small">Pengunjung</p>
                                </div>
                            </div>
                            <div class="hero-07-circle__item item-03 loading__item">
                                <div class="mxd-counter small">
                                    <p id="stats-counter-2" class="mxd-counter__number mxd-stats-number small">0</p>
                                    <p class="mxd-counter__descr t-140 t-bright t-small">Tempat Wisata</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- scroll for more -->
                <div class="mxd-hero-07__more loading__fade">
                    <a class="btn btn-line-default btn-anim slide-down" href="#projects">
                        <span class="btn-caption">Scroll untuk lengkapnya</span>
                        <i class="ph-bold ph-arrow-elbow-right-down"></i>
                    </a>
                </div>
                <!--  -->
                <div class="mxd-hero-07__tl-trigger"></div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Section - Projects List #02 Start -->
    <div id="projects" class="mxd-section overflow-hidden padding-hero-07 padding-pre-title">
        <div class="mxd-container grid-container">

            <!-- Block - Projects List #02 Start -->
            <div class="mxd-block">
                <div class="mxd-projects-list hover-reveal">
                    <!-- item -->
                    @foreach ($destinasi as $item)
                    <a class="mxd-projects-list__item hover-reveal__item"
                        href="{{ route('destinasi.show', $item->destinasi_id) }}">
                        <div class="mxd-projects-list__border anim-uni-in-up"></div>
                        <div class="hover-reveal__content hover-reveal-360x440">
                            <img class="hover-reveal__image" src="{{ asset('uploads/destinasi/' . $item->gambar) }}"
                                alt="Project Preview">
                        </div>
                        <div class="mxd-projects-list__inner-v2">
                            <div class="container-fluid px-0">
                                <div class="row gx-0">
                                    <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                                        <div class="mxd-projects-list__title-v2 anim-uni-in-up">
                                            <p>{{ $item->nama }}</p>
                                        </div>
                                        <div class="mxd-projects-list__image anim-uni-in-up">
                                            <img src="{{ asset('uploads/destinasi/' . $item->gambar) }}"
                                                alt="Project Preview">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4 mxd-grid-item no-margin">
                                        <div class="mxd-projects-list__tagslist-v2 anim-uni-in-up">
                                            <ul>
                                                <li>
                                                    <p>Aman</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z" />
                                                    </svg>
                                                    <!-- <img class="inject-me" src="img/icons/20x20-rayo-star.svg" alt="Divider Icon"> -->
                                                </li>
                                                <li>
                                                    <p>Nyaman</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z" />
                                                    </svg>
                                                    <!-- <img class="inject-me" src="img/icons/20x20-rayo-star.svg" alt="Divider Icon"> -->
                                                </li>
                                                <li>
                                                    <p>Uhuy</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-2 mxd-grid-item no-margin">
                                        <div class="mxd-projects-list__product anim-uni-in-up">
                                            <div class="mxd-projects-list__icon-v2">
                                                <i class="ph-bold ph-arrow-up-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mxd-projects-list__border anim-uni-in-up"></div>
                    </a>
                    @endforeach
                    <!-- item -->
                </div>
                <div class="mxd-manifest__controls anim-uni-in-up">
                    <div class="mxd-btngroup">
                        <a class="btn btn-anim btn-default btn-accent slide-right-up"
                            href="{{route('destinasi.create')}}">
                            <span class="btn-caption">Tambah Destinasi</span>
                            <i class="ph-bold ph-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Block - Projects List #02 End -->
        </div>
    </div>
    <!-- Section - Projects List #02 End -->

    <!-- Section - About Start -->
    <div class="mxd-section padding-default">
        <div class="mxd-container grid-container">

            <!-- Block - About Description with Manifest Start -->
            <div class="mxd-block">
                <div class="container-fluid px-0">
                    <div class="row gx-0 d-xl-flex justify-content-xl-center">
                        <div class="col-12 col-xl-8 mxd-grid-item no-margin">
                            <div class="mxd-block__content">
                                <div class="mxd-block__manifest centered anim-uni-in-up">
                                    <p class="mxd-manifest mxd-manifest-l reveal-type">Pariwisata desa, atau yang
                                        sering dikenal sebagai Desa Wisata, kini menjadi tren yang diminati oleh banyak
                                        wisatawan, menawarkan alternatif yang menyegarkan dari hiruk pikuk kota. Konsep
                                        ini berfokus pada pengalaman otentik, di mana desa tidak hanya menjadi lokasi
                                        kunjungan, tetapi juga destinasi yang hidup dan berinteraksi dengan pengunjung.
                                    </p>
                                    <div class="mxd-manifest__controls anim-uni-in-up">
                                        <div class="mxd-btngroup centered">
                                            <a class="btn btn-anim btn-default btn-accent slide-right-up"
                                                href="works-simple.html">
                                                <span class="btn-caption">Booking</span>
                                                <i class="ph-bold ph-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Block - About Description with Manifest End -->
        </div>
    </div>
    <!-- Section - About End -->

    <!-- Section - Parallax Divider Start -->
    <div class="mxd-section padding-pre-title">
        <div class="mxd-container">
            <div class="mxd-container__circle">
                <a class="btn-rotating btn-rotating-blur-outline ver-02" href="contact.html">
                    <!-- SVG rotating text -->
                    <svg version="1.1" id="scrollDown" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 160 160"
                        style="enable-background:new 0 0 160 160;" xml:space="preserve"
                        class="btn-rotating__text animate-rotation" data-value="360">
                        <defs>
                            <path id="textPath"
                                d="M149.7,80c0,38.5-31.2,69.7-69.7,69.7S10.3,118.5,10.3,80S41.5,10.3,80,10.3S149.7,41.5,149.7,80z" />
                        </defs>
                        <g>
                            <use xlink:href="#textPath" fill="none"></use>
                            <text>
                                <!-- button text here!!! -->
                                <textPath xlink:href="#textPath">* Let's Booking * Let's Booking * Let's Booking *
                                </textPath>
                            </text>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="mxd-divider">
                <div class="mxd-divider__video">
                    <!-- <video class="video parallax-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="https://dummyimage.com/1920x1080/4d4d4d/838383">
                            <source type="video/mp4" src="video/1920x1080_video.mp4">
                            <source type="video/webm" src="video/1920x1080_video.webm">
                            <source type="video/ogv" src="video/1920x1080_video.ogv">
                        </video> -->
                    <img src="{{ asset('assets/img/alam2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Section - Parallax Divider End -->

    <!-- Section - Blog Preview Start -->
    {{-- <div class="mxd-section padding-blog">
        <div class="mxd-container grid-container">

            <!-- Block - Section Title Start -->
            <div class="mxd-block">
                <div class="mxd-section-title pre-grid">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                                <div class="mxd-section-title__hrtitle">
                                    <h2 class="reveal-type anim-uni-in-up">My journal</h2>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                                <div class="mxd-section-title__hrdescr">
                                    <p class="anim-uni-in-up">Inspiring ideas, creative insights, and the latest
                                        in design and tech. Fueling innovation for your digital journey.</p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                                <div class="mxd-section-title__hrcontrols anim-uni-in-up">
                                    <a class="btn btn-anim btn-default btn-outline slide-right-up" href="blog-standard.html">
                                        <span class="btn-caption">All Articles</span>
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Block - Section Title End -->

            <!-- Block - Blog Preview Cards Start -->
            <div class="mxd-block">
                <div class="mxd-blog-preview">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <!-- item -->
                            <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                                <a class="mxd-blog-preview__media" href="blog-article.html">
                                    <div class="mxd-blog-preview__image blog-preview-image-1 parallax-img-small">
                                        <!-- <img class="parallax-img-small" src="img/blog/preview/1000x1250_prv-01.webp" alt="Blog Preview Image"> -->
                                    </div>
                                    <div class="mxd-preview-hover">
                                        <i class="mxd-preview-hover__icon">
                                            <img src="{{ asset('assets/img/icons/icon-eye.svg') }}" alt="Eye Icon">
    </i>
    </div>
    </a>
    <div class="mxd-blog-preview__data">
        <a class="anim-uni-in-up" href="blog-article.html"><span>Frontend innovations</span> and user journeys</a>
    </div>
    </div>
    <!-- item -->
    <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
        <a class="mxd-blog-preview__media" href="blog-article.html">
            <div class="mxd-blog-preview__image blog-preview-image-2 parallax-img-small">
                <!-- <img class="parallax-img-small" src="img/blog/preview/1000x1250_prv-02.webp" alt="Blog Preview Image"> -->
            </div>
            <div class="mxd-preview-hover">
                <i class="mxd-preview-hover__icon">
                    <img src="{{ asset('assets/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                </i>
            </div>
        </a>
        <div class="mxd-blog-preview__data">
            <a class="anim-uni-in-up" href="blog-article.html">Branding in creating <span>digital experiences</span></a>
        </div>
    </div>
    <!-- item -->
    <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
        <a class="mxd-blog-preview__media" href="blog-article.html">
            <div class="mxd-blog-preview__image blog-preview-image-3 parallax-img-small">
                <!-- <img class="parallax-img-small" src="img/blog/preview/1000x1250_prv-03.webp" alt="Blog Preview Image"> -->
            </div>
            <div class="mxd-preview-hover">
                <i class="mxd-preview-hover__icon">
                    <img src="{{ asset('assets/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                </i>
            </div>
        </a>
        <div class="mxd-blog-preview__data">
            <a class="anim-uni-in-up" href="blog-article.html">Elevating <span>digital workshops</span> with engaging design</a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Block - Blog Preview Cards End -->

    </div>
    </div> --}}
    <!-- Section - Blog Preview End -->
    <!-- Section - Pemandu Lokal Start -->
    <div class="mxd-section padding-default" id="pemanduLokal">
        <div class="mxd-container grid-container">
            <!-- Block - Section Title Start -->
            <div class="mxd-block">
                <div class="mxd-section-title pre-grid">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                                <div class="mxd-section-title__hrtitle">
                                    <h2 class="reveal-type anim-uni-in-up">Pemandu Lokal</h2>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                                <div class="mxd-section-title__hrdescr">
                                    <p class="anim-uni-in-up">Kenali pemandu wisata lokal kami yang berpengalaman dan
                                        siap membantu perjalanan Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Block - Section Title End -->

            <!-- Block - Team Cards Start -->
            <div class="mxd-block">
                <div class="mxd-team-cards">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            @foreach ($pemandu as $guide)
                            <!-- item -->
                            <div class="col-12 col-xl-4 mxd-team-cards__item mxd-grid-item animate-card-3">
                                <div class="mxd-team-cards__inner">
                                    <div class="mxd-team-cards__image">
                                        @if ($guide->foto)
                                        <img src="{{ asset('uploads/warga/' . $guide->foto) }}"
                                            alt="{{ $guide->nama }}">
                                        @else
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($guide->nama) }}&size=400&background=2E8B57&color=fff"
                                            alt="{{ $guide->nama }}">
                                        @endif
                                    </div>
                                    <div class="mxd-team-cards__data">
                                        <h5 class="anim-uni-in-up">{{ $guide->nama }}</h5>
                                        <p class="t-small anim-uni-in-up">{{ $guide->pekerjaan }}</p>
                                        @if ($guide->pengalaman)
                                        <p class="t-small anim-uni-in-up">
                                            <i class="ph ph-medal"></i> {{ $guide->pengalaman }}
                                        </p>
                                        @endif
                                        @if ($guide->bahasa)
                                        <p class="t-small anim-uni-in-up">
                                            <i class="ph ph-translate"></i> {{ $guide->bahasa }}
                                        </p>
                                        @endif
                                        <div class="mxd-team-cards__contact anim-uni-in-up mt-3 ">
                                            <a href="https://wa.me/{{ $guide->telp }}?text=Hubungi%20Pemandu%20Lokal"
                                                class="btn btn-anim btn-default btn-sm btn-outline slide-right-up">
                                                <i class="ph-bold ph-phone"></i>
                                                <span class="btn-caption">Hubungi</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="mxd-manifest__controls anim-uni-in-up">
                <div class="mxd-btngroup">
                    <a class="btn btn-anim btn-default btn-accent slide-right-up"
                        href="works-simple.html">
                        <span class="btn-caption">Tambah pemandu</span>
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>
            </div>
            <!-- Block - Team Cards End -->
        </div>
    </div>
    <!-- Section - Pemandu Lokal End -->
    <!-- Section - CTA Start -->
    <!-- <div class="mxd-section overflow-hidden">
            <div class="mxd-container"> -->

    <!-- Block - CTA Start -->
    <!-- <div class="mxd-block">
                    <div class="mxd-promo">
                        <div class="mxd-promo__inner anim-zoom-out-container"> -->
    <!-- background -->
    <!-- <div class="mxd-promo__bg"></div> -->
    <!-- caption -->
    <!-- <div class="mxd-promo__content">
                                <p class="mxd-promo__title anim-uni-in-up">
                                    <span class="mxd-promo__icon">
                                        <img src="https://dummyimage.com/100x100/838383/5d5d5d" alt="Icon">
                                    </span>
                                    <span class="mxd-promo__caption reveal-type">Let's talk about your project!</span>
                                </p>
                                <div class="mxd-promo__controls anim-uni-in-up">
                                    <a class="btn btn-anim btn-default btn-large btn-additional slide-right-up" href="contact.html">
                                        <span class="btn-caption">Contact Me</span>
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div> -->
    <!-- parallax images -->
    <!-- <div class="mxd-promo__images">
                                <img class="promo-image promo-image-1" src="https://dummyimage.com/600x600/5d5d5d/838383" alt="Image">
                                <img class="promo-image promo-image-2" src="https://dummyimage.com/300x300/5d5d5d/838383" alt="Image">
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Block - CTA End -->
    <!-- </div>
        </div> -->
    <!-- Section - CTA End -->
</main>
<!-- Page Content End -->
@endsection