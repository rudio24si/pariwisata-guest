@extends('guest.layouts.app')

@section('content')
<!-- Page Content Start -->
<main id="mxd-page-content" class="mxd-page-content inner-page-content">

    <!-- Section - Inner Page Headline Start -->
    <div class="mxd-section mxd-section-inner-headline padding-default">
        <div class="mxd-container grid-container">
            <!-- Block - Inner Page Headline Start -->
            <div class="mxd-block loading-wrap">
                <div class="container-fluid px-0">
                    <div class="row gx-0">

                        <!-- Inner Headline Content Start -->
                        <div class="col-12 col-xl-10 mxd-grid-item no-margin">
                            <div class="mxd-block__content">
                                <div class="mxd-block__inner-headline loading__item">
                                    <h1 class="inner-headline__title">{{ $destinasi->nama }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-12 col-xl-2"></div>
                        <div class="col-12 col-xl-6 mxd-grid-item no-margin">

                            <div class="inner-headline__paragraph loading__item">
                                <p>{{ $destinasi->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Inner Headline Tags End -->

                </div>
            </div>
            <!-- Block - Inner Page Headline End -->
        </div>
    </div>
    <!-- Section - Inner Page Headline End -->

    <!-- Section - Parallax Divider Start -->
    <div class="mxd-section">
        <div class="mxd-container">
            <div class="mxd-divider loading__fade">
                <div class="mxd-divider__image prj-details-img-01 parallax-img">
                    <img src="{{asset('uploads/destinasi/'.$destinasi->gambar)}}" alt="Gambar Destinasi">
                </div>
            </div>
        </div>
    </div>
    <!-- Section - Parallax Divider End -->

    <!-- Section - Project Details Start -->
    <div class="mxd-section mxd-project overflow-hidden">
        <div class="mxd-container grid-container">

            <!-- Project Block - Challenge Description with H2 Title and Paragraph Start -->
            <div class="mxd-project__block pre-grid">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                            <div class="mxd-project__subtitle">
                                <h2 class="reveal-type anim-uni-in-up">Challenge</h2>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                            <div class="mxd-project__content">
                                <div class="mxd-project__paragraph">
                                    <p class="t-large t-bright anim-uni-in-up">Donec maximus lorem quam, a aliquam erat aliquam
                                        quis. Sed accumsan sagittis condimentum. Proin eu nulla.</p>
                                    <p class="anim-uni-in-up">Nunc vel ligula tincidunt, fermentum velit ac, sodales eros. Vivamus ac leo in arcu accumsan condimentum. Nullam ac est quis dolor scelerisque interdum in at risus. Pellentesque mattis est vel maximus posuere. Integer tristique ipsum velit, vitae gravida purus laoreet.</p>
                                    <!-- <div class="mxd-project__controls anim-uni-in-up">
                        <a class="btn btn-anim btn-default btn-outline slide-right-up" href="#0">
                          <span class="btn-caption">More About Us</span>
                          <i class="ph-bold ph-arrow-up-right"></i>
                        </a>
                      </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Block - Challenge Description with H2 Title and Paragraph End -->

            <!-- Project Block - Images Cards Start -->
            <div class="mxd-project__block no-margin">
                <div class="mxd-project-cards">
                    <div class="container-fluid px-0">
                        <div class="row gx-0">
                            <!-- item -->
                            <div class="col-12 col-xl-5 mxd-project-cards__item mxd-grid-item anim-uni-scale-in-right">
                                <div class="mxd-project-cards__inner align-end bg-accent radius-m">
                                    <img src="https://dummyimage.com/1200x1200/4d4d4d/838383" alt="Project Preview">
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-12 col-xl-7 mxd-project-cards__item mxd-grid-item anim-uni-scale-in-left">
                                <div class="mxd-project-cards__inner align-end bg-base-tint radius-m">
                                    <img src="https://dummyimage.com/1400x1000/2d2d2d/838383" alt="Project Preview">
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-12 col-xl-7 mxd-project-cards__item mxd-grid-item anim-uni-scale-in-right">
                                <div class="mxd-project-cards__inner bg-base-tint radius-m">
                                    <img src="https://dummyimage.com/1400x1000/2d2d2d/838383" alt="Project Preview">
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-12 col-xl-5 mxd-project-cards__item mxd-grid-item anim-uni-scale-in-left">
                                <div class="mxd-project-cards__inner bg-base-tint radius-m">
                                    <img src="https://dummyimage.com/1200x1200/4d4d4d/838383" alt="Project Preview">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Block - Images Cards End -->

            <!-- Project Block - Solution Description with H2 Title and Paragraph Start -->
            <div class="mxd-project__block">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                            <div class="mxd-project__subtitle">
                                <h2 class="reveal-type anim-uni-in-up">Solution</h2>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                            <div class="mxd-project__content">
                                <div class="mxd-project__paragraph medium-text">
                                    <p class="anim-uni-in-up">Orci varius natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Quisque ut arcu pulvinar, rhoncus libero id, lobortis metus. Morbi
                                        tristique dolor sit amet turpis faucibus malesuada.</p>
                                    <p class="anim-uni-in-up">Morbi non ipsum vel risus scelerisque sagittis nec a ipsum.
                                        Nulla odio neque, feugiat a arcu et, tristique cursus diam. Duis consectetur massa nibh,
                                        ut rhoncus nibh vestibulum in. Sed imperdiet metus sed arcu efficitur posuere.</p>
                                    <!-- <div class="mxd-project__controls anim-uni-in-up">
                        <a class="btn btn-anim btn-default btn-outline slide-right-up" href="#0">
                          <span class="btn-caption">More About Us</span>
                          <i class="ph-bold ph-arrow-up-right"></i>
                        </a>
                      </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Block - Solution Description with H2 Title and Paragraph End -->

            <!-- Project Block - Parallax Fullwidth Image Start -->
            <div class="mxd-project__block mxd-grid-item no-margin">
                <div class="mxd-divider">
                    <div class="mxd-divider__image prj-details-img-02 parallax-img"></div>
                </div>
            </div>
            <!-- Project Block - Parallax Fullwidth Image End -->

            <!-- Project Block - Client’s feedback Description with H2 Title and Paragraph Start -->
            <div class="mxd-project__block">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                            <div class="mxd-project__subtitle">
                                <h2 class="reveal-type anim-uni-in-up">Client's<br>feedback</h2>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                            <div class="mxd-project__content">
                                <div class="mxd-project__paragraph medium-text">
                                    <p class="anim-uni-in-up">Working with Rayo team was an absolute pleasure! They took the
                                        time to understand our business needs and translated them into a beautifully designed,
                                        user-friendly website. The team's attention to detail, creativity, and technical
                                        expertise exceeded our expectations. We've received so much positive feedback from
                                        our customers already.</p>
                                    <div class="mxd-project__client anim-uni-in-up">
                                        <h5 class="anim-uni-in-up">Lea Tomato</h5>
                                        <p class="t-small anim-uni-in-up">Senior designer in
                                            <a class="" href="#">The Way</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Block - Client’s feedback Description with H2 Title and Paragraph End -->

            <!-- Project Block - Project Link Start -->
            <div class="mxd-project__block no-margin">
                <div class="mxd-project__nav">
                    <div class="mxd-project__divider anim-uni-in-up"></div>
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-6 mxd-project__navitem left mxd-grid-item no-margin anim-uni-in-up">
                                <a class="btn btn-anim btn-line-small btn-muted anim-no-delay slide-left" href="project-details.html">
                                    <i class="ph ph-arrow-left"></i>
                                    <span class="btn-caption">Prev</span>
                                </a>
                                <a class="mxd-project__link anim-uni-in-up" href="project-details.html">
                                    <span>Mobile app design</span>
                                </a>
                            </div>
                            <div class="col-6 mxd-project__navitem right mxd-grid-item no-margin anim-uni-in-up">
                                <a class="btn btn-anim btn-line-small btn-muted anim-no-delay slide-right" href="project-details.html">
                                    <span class="btn-caption">Next</span>
                                    <i class="ph ph-arrow-right"></i>
                                </a>
                                <a class="mxd-project__link  anim-uni-in-up" href="project-details.html">
                                    <span>AI experiments</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Block - Project Link End -->

        </div>
    </div>
    <!-- Section - Project Details End -->

    <!-- Section - CTA Start -->
    <div class="mxd-section overflow-hidden">
        <div class="mxd-container">

            <!-- Block - CTA Start -->
            <div class="mxd-block">
                <div class="mxd-promo">
                    <div class="mxd-promo__inner anim-zoom-out-container">
                        <!-- background -->
                        <div class="mxd-promo__bg"></div>
                        <!-- caption -->
                        <div class="mxd-promo__content">
                            <p class="mxd-promo__title anim-uni-in-up">
                                <span class="mxd-promo__icon">
                                    <img src="https://dummyimage.com/100x100/838383/5d5d5d" alt="Icon">
                                </span>
                                <span class="mxd-promo__caption reveal-type">Let's talk about your project!</span>
                            </p>
                            <div class="mxd-promo__controls anim-uni-in-up">
                                <a class="btn btn-anim btn-default btn-large btn-additional slide-right-up" href="contact.html">
                                    <span class="btn-caption">Contact Us</span>
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- parallax images -->
                        <div class="mxd-promo__images">
                            <img class="promo-image promo-image-1" src="https://dummyimage.com/600x600/5d5d5d/838383" alt="Image">
                            <img class="promo-image promo-image-2" src="https://dummyimage.com/300x300/5d5d5d/838383" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Block - CTA End -->

        </div>
    </div>
    <!-- Section - CTA End -->

</main>
<!-- Page Content End -->
@endsection