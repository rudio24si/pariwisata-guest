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
                                        <h1 clas s="inner-headline__title">Data Destinasi</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="GET" action="{{ route('allData_destinasi_wisata') }}" onchange="this.form.submit()" class="mb-3">
                            <div class="row">
                                <!-- <div class="col-md-2">
                                                <select name="gender" class="form-select">
                                                    <option value="">All</option>
                                                    <option value="Male" {{ request('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female" {{ request('gender') == 'Female' ? 'selected' : '' }}>Female
                                                    </option>
                                                </select>
                                            </div> -->
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" id="exampleInputIconRight"
                                            value="{{request('search')}}" placeholder="Search" aria-label="Search">
                                        <button type="submit"
                                            class="btn btn-anim btn-default btn-accent slide-right-up mt-3">
                                            Cari
                                        </button>
                                        @if(request('search'))
                                            <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}"
                                                class="btn btn-outline-secondary ml-3" id="clear-search"> Clear</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            @foreach ($destinasi as $d)
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <div class="card m-3">
                                        <div class="card-body bg-white p-3 rounded-5">
                                            <h5 class="card-title text-black">{{$d->nama}}</h5>
                                            <p class="card-text text-secondary">{{$d->deskripsi}}</p>
                                            <button type="button" class="btn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            <span class="text-light">{{ $destinasi->links('pagination::bootstrap-5') }}</span>
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