@extends('layouts.ap')

@section('content')
    <!-- Slider -->
    <section class="tf-slideshow about-us-page position-relative">
        <div class="banner-wrapper">
            <img class="lazyload" src="{{asset($formatted_gallery_items['three_boys']['path'])}}" data-src="{{asset($formatted_gallery_items['three_boys']['path'])}}" alt="image-collection">
            <div class="box-content text-center">
                <div class="container">
                    <div class="text text-white">{!! $about['title'] ?? '' !!}</div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Slider -->
    <!-- flat-title -->
    <section class="flat-spacing-9">
        <div class="container">

            <div class="flat-title my-0">
                <span class="title">{{$about['title2'] ?? ''}}</span>
                <p class="sub-title text_black-2">
                    {!!  $about['title3'] ?? '' !!}
                </p>
            </div>

        </div>
    </section>
    <!-- /flat-title -->
    <div class="container"><div class="line"></div></div>
    <!-- image-text -->
    <section class="flat-spacing-23 flat-image-text-section">
        <div class="container">
            <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
                <div class="tf-image-wrap">
                    <img class="lazyload w-100" data-src="{{asset($formatted_gallery_items['crying_girl']['path'])}}" src="{{asset($formatted_gallery_items['crying_girl']['path'])}}" alt="collection-img">
                </div>
                <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                    <div>
                        <div class="heading">{{ $about['title4'] ?? '' }}</div>
                        <div class="text">
                            {!! $about['title5'] ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-spacing-15">
        <div class="container">
            <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
                <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                    <div>
                        <div class="heading">{{ $about['title6'] ?? ''}}</div>
                        <div class="text">
                            {!! $about['title7'] ?? '' !!}
                        </div>
                    </div>
                </div>
                <div class="grid-img-group">
                    <div class="tf-image-wrap box-img item-1">
                        <div class="img-style">
                            <img class="lazyload" src="{{asset($formatted_gallery_items['boy']['path'])}}" data-src="{{asset($formatted_gallery_items['boy']['path'])}}" alt="img-slider">
                        </div>
                    </div>
                    <div class="tf-image-wrap box-img item-2">
                        <div class="img-style">
                            <img class="lazyload" src="{{asset($formatted_gallery_items['girl']['path'])}}" data-src="{{asset($formatted_gallery_items['girl']['path'])}}" alt="img-slider">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /image-text -->
    <!-- iconbox -->
    <section>
        <div class="container">
            <div class="bg_grey-2 radius-10 flat-wrap-iconbox">
                <div class="flat-title lg">
                    <span class="title fw-5">{{$about['title8'] ?? ''}}</span>
                    <div>
                        <p class="sub-title text_black-2">{{$about['title9'] ?? ''}}</p>
                        <p class="sub-title text_black-2">{{$about['title9'] ?? ''}}</p>
                    </div>
                </div>
                <div class="flat-iconbox-v3 lg">
                    <div class="wrap-carousel wrap-mobile">
                        <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                            <div class="swiper-wrapper wrap-iconbox lg">
                                <div class="swiper-slide">
                                    <div class="tf-icon-box text-center">
                                        <div class="icon">
                                            <i class="icon-materials"></i>
                                        </div>
                                        <div class="content">
                                            <div class="title">High-Quality Materials</div>
                                            <p class="text_black-2">Crafted with precision and excellence, our activewear is meticulously engineered using premium materials to ensure unmatched comfort and durability.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tf-icon-box text-center">
                                        <div class="icon">
                                            <i class="icon-design"></i>
                                        </div>
                                        <div class="content">
                                            <div class="title">Laconic Design</div>
                                            <p class="text_black-2">Simplicity refined. Our activewear embodies the essence of minimalistic design, delivering effortless style that speaks volumes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tf-icon-box text-center">
                                        <div class="icon">
                                            <i class="icon-sizes"></i>
                                        </div>
                                        <div class="content">
                                            <div class="title">Various Sizes</div>
                                            <p class="text_black-2">Designed for every body and anyone, our activewear embraces diversity with a wide range of sizes and shapes, celebrating the beauty of individuality.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /iconbox -->
    <!-- Testimonial -->
    <section class="flat-testimonial-v2 flat-spacing-24">
        <div class="container">
            <div class="wrapper-thumbs-testimonial-v2 flat-thumbs-testimonial">
                <div class="box-left">
                    <div dir="ltr" class="swiper tf-sw-tes-2" data-preview="1" data-space-lg="40" data-space-md="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item lg lg-2">
                                    <h4 class="mb_40">{{$about['title10'] ?? ''}}</h4>
                                    <div class="icon">
                                        <img class="lazyload" data-src="{{asset('/assets/images/item/quote.svg')}}" alt="" src="{{asset('/assets/images/item/quote.svg')}}">
                                    </div>
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <p class="text">
                                        {{$about['title11'] ?? ''}}
                                    </p>
                                    <div class="author box-author">
                                        <div class="box-img d-md-none rounded-0">
                                            <img class="lazyload img-product" data-src="{{asset($formatted_gallery_items['blonde']['path'])}}" src="{{asset($formatted_gallery_items['blonde']['path'])}}" alt="image-product">
                                        </div>
                                        <div class="content">
                                            <div class="name">Robert smith</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item lg lg-2">
                                    <h4 class="mb_40">Our customer’s reviews</h4>
                                    <div class="icon">
                                        <img class="lazyload" data-src="{{asset('/assets/images/item/quote.svg')}}" alt="" src="{{asset('/assets/images/item/quote.svg')}}">
                                    </div>
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <p class="text">
                                        "I have been shopping with this web fashion site for over a year now and I can confidently say it is the best online fashion site out there.The shipping is always fast and the customer service team is friendly and helpful. I highly recommend this site to anyone looking for affordable clothing."
                                    </p>
                                    <div class="author box-author">
                                        <div class="box-img d-md-none rounded-0">
                                            <img class="lazyload img-product" data-src="{{asset('/assets/images/item/tets4.jpg')}}" src="{{asset('/assets/images/item/tets4.jpg')}}" alt="image-product">
                                        </div>
                                        <div class="content">
                                            <div class="name">Jenifer Unix</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex d-none box-sw-navigation">
                        <div class="nav-sw nav-next-slider nav-next-tes-2"><span class="icon icon-arrow-left"></span></div>
                        <div class="nav-sw nav-prev-slider nav-prev-tes-2"><span class="icon icon-arrow-right"></span></div>
                    </div>
                    <div class="d-md-none sw-dots style-2 sw-pagination-tes-2"></div>
                </div>
                <div class="box-right">
                    <div dir="ltr" class="swiper tf-thumb-tes" data-preview="1" data-space="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img-sw-thumb">
                                    <img class="lazyload img-product" data-src="{{asset('/assets/images/item/tets3.jpg')}}" src="{{asset('/assets/images/item/tets3.jpg')}}" alt="image-product">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-sw-thumb">
                                    <img class="lazyload img-product" data-src="{{asset('/assets/images/item/tets4.jpg')}}" src="{{asset('/assets/images/item/tets4.jpg')}}" alt="image-product">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonial -->
    <div class="container"><div class="line"></div></div>
    <!-- Shop Gram -->
    <section class="flat-spacing-1">
        <div class="container">
            <div class="flat-title">
                <span class="title">{{$about['title12'] ?? ''}}</span>
                <p class="sub-title">{{$about['title13'] ?? ''}}</p>
            </div>
            <div class="wrap-shop-gram">
                <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset($formatted_gallery_items['swiper1']['path'])}}" src="{{asset($formatted_gallery_items['swiper1']['path'])}}" alt="image-gallery">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset($formatted_gallery_items['swiper2']['path'])}}" src="{{asset($formatted_gallery_items['swiper2']['path'])}}" alt="image-gallery">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset($formatted_gallery_items['swiper3']['path'])}}" src="{{asset($formatted_gallery_items['swiper3']['path'])}}" alt="image-gallery">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset($formatted_gallery_items['swiper4']['path'])}}" src="{{asset($formatted_gallery_items['swiper4']['path'])}}" alt="image-gallery">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset($formatted_gallery_items['swiper5']['path'])}}" src="{{asset($formatted_gallery_items['swiper5']['path'])}}" alt="image-gallery">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /Shop Gram -->
@endsection
