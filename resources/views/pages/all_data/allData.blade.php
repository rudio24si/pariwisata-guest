@extends('layouts.guest.app')

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
                                        <h1 clas s="inner-headline__title">SEMUA DATA</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                                <div class="display-flex justify-content-start gap-3 mxd-block__content">
                                    <a class="btn btn-anim btn-default btn-accent slide-right-up" href="{{route('allData_user')}}">
                                        <span class="btn-caption">Data User</span>
                                    </a>
                                    <a class="btn btn-anim btn-default btn-accent slide-right-up" href="{{route('allData_warga')}}">
                                        <span class="btn-caption">Data Warga</span>
                                    </a>
                                    <a class="btn btn-anim btn-default btn-accent slide-right-up"  href="{{route('allData_destinasi_wisata')}}">
                                        <span class="btn-caption">Data Destinasi</span>
                                    </a>
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

    </main>
    <!-- Page Content End -->
@endsection