@extends('layouts.ap')
@section('content')
    <!-- blog-detail -->
    <div class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-detail-main">
                        <div class="blog-detail-main-heading">
                            <ul class="tags-lists justify-content-center">
                                <li>
                                    <a href="#" class="tags-item">{{$category->name ?? ''}}</a>
                                </li>

                            </ul>
                            <div class="title">{{$page->title}}</div>
                            <div class="meta">by <span>admin</span> on <span>Oct 02</span></div>
                            <div class="image">
                                    <img class="lazyload" data-src="{{$page->image}}" src="{{$page->image}}" alt="">
                            </div>
                        </div>
{{--                        <blockquote>--}}
{{--                            <div class="icon">--}}
{{--                                <img src="{{asset('/assets/images/item/quote.svg')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga artists, comic book artists, graffiti artists, and now—anyone who arranges words, letters, numbers, and symbols for publication, display, or distribution—from clerical workers and newsletter writers to anyone self-publishing materials.--}}
{{--                            </div>--}}
{{--                        </blockquote>--}}
{{--                        <div class="grid-image">--}}
{{--                            <div>--}}
{{--                                <img class="lazyload" data-src="{{asset('/assets/images/blog/blog-detail-1.jpg')}}" src="{{asset('/assets/images/blog/blog-detail-1.jpg')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <img class="lazyload" data-src="{{asset('/assets/images/blog/blog-detail-2.jpg')}}" src="{{asset('/assets/images/blog/blog-detail-2.jpg')}}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="desc">
                            {{$page->translate()->description}}
                        </div>
                        <div class="bot d-flex justify-content-between flex-wrap align-items-center">
                            <ul class="tags-lists">
                                <li>
                                    <a href="#" class="tags-item"><span>Accessories</span></a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center gap-20">
                                <p>Share:</p>
                                <ul class="tf-social-icon d-flex style-default">
                                    <li><a href="#" class="box-icon round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                                    <li><a href="#" class="box-icon round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                    <li><a href="#" class="box-icon round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                                    <li><a href="#" class="box-icon round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                    <li><a href="#" class="box-icon round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tf-article-navigation">
                            <div class="item position-relative d-flex w-100 prev">
                                <a href="#" class="icon">
                                    <i class="icon-arrow-left"></i>
                                </a>
                                <div class="inner">
                                    <a href="#">PREVIOUS</a>
                                    <h6>
                                        <a href="#">Fashionista editors reveal their designer</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="item position-relative d-flex w-100 justify-content-end next">
                                <div class="inner text-end">
                                    <a href="#">NEXT</a>
                                    <h6>
                                        <a href="#">The next generation of leather alternatives</a>
                                    </h6>
                                </div>
                                <a href="#" class="icon">
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-sidebar-mobile d-flex">
        <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
    </div>
    <!-- /blog-detail -->

    <!-- Related Articles -->
    <section class="mb_30">
        <div class="container">
            <div class="flat-title">
                <h5 class="">{{$page->translate()->title}}</h5>
            </div>
            <div class="hover-sw-nav view-default hover-sw-5">
                <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">

                    <div class="swiper-wrapper">
                        @foreach($pages as $page)
                        <div class="swiper-slide" lazy="true">
                            <div class="blog-article-item">
                                <div class="article-thumb radius-10">
                                    <a href="{{ route('page-detail', ['locale' => app()->getLocale(), 'id' => $page->id]) }}">
                                        <img class="lazyload" data-src={{$page->image}} src={{$page->image}} alt="img-blog">
                                    </a>
                                    <div class="article-label">
                                        <a href="{{ route('page-detail', ['locale' => app()->getLocale(), 'id' => $page->id]) }}"
                                           class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">{{$page->category->translate()->name}}</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <div class="article-title">
                                        <a href="{{ route('page-detail', ['locale' => app()->getLocale(), 'id' => $page->id]) }}"
                                           class="">{{$page->translate()->description}}</a>
                                    </div>
                                    <div class="article-btn">
                                        <a href="{{ route('page-detail', ['locale' => app()->getLocale(), 'id' => $page->id]) }}"
                                           class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                <div class="sw-dots d-flex style-2 sw-pagination-recent justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /Related Articles -->

@endsection
