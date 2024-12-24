@extends('layouts.ap')

@section('content')


    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center">Blog List</div>
                    <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li>
                            List
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- blog-list -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-list-main">
                    <div class="list-blog">

                        @foreach($pages as $page)
                        <div class="blog-article-item style-row">
                            <div class="article-thumb">
                                <a href="{{route('page-detail',['id'=>$page->id])}}">
                                    <img class="lazyload" data-src="{{$page->image}}" src="{{$page->image}}" alt="img-blog">
                                </a>
                            </div>
                            <div class="article-content">
                                <div class="article-label">
                                    <a href="{{ route('category.detail', $page->category->id) }}" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">{{$page->category->name}}</a>
                                </div>
                                <div class="article-title">
                                    <a href="{{route('page-detail',['id'=>$page->id])}}" class="">{{$page->title}}</a>
                                </div>
                                <div class="desc">
                                    {{$page->description}}
                                </div>
                                <div class="article-btn">
                                    <a href="{{route('page-detail',['id'=>$page->id])}}" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {!! $pages->links('pagination::bootstrap-4') !!}
                                </ul>
                            </div>
                    </div>
                    <aside class="tf-section-sidebar wrap-sidebar-mobile">
                        <div class="sidebar-item sidebar-categories">
                            <div class="sidebar-title">Blog categories</div>
                            <div class="sidebar-content">
                                <ul>
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="#">{{$category->name}}<span>(9)</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item sidebar-post">
                            <div class="sidebar-title">Recent Post</div>
                            <div class="sidebar-content">
                                <ul>
                                    <li>
                                        <div class="blog-article-item style-sidebar">
                                            <div class="article-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="{{asset('/assets/images/shop/article/sidebar-1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="article-content">
                                                <div class="article-label">
                                                    <a href="blog-detail.html" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">Accessories</a>
                                                </div>
                                                <div class="article-title">
                                                    <a href="blog-detail.html" class="">Effortlessly Blends The Carefree Style</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-article-item style-sidebar">
                                            <div class="article-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="{{asset('/assets/images/shop/article/sidebar-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="article-content">
                                                <div class="article-label">
                                                    <a href="blog-detail.html" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">Accessories</a>
                                                </div>
                                                <div class="article-title">
                                                    <a href="blog-detail.html" class="">The Limited Edition Club des Sports Courchevel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-article-item style-sidebar">
                                            <div class="article-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="{{asset('/assets/images/shop/article/sidebar-3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="article-content">
                                                <div class="article-label">
                                                    <a href="blog-detail.html" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">Fashion</a>
                                                </div>
                                                <div class="article-title">
                                                    <a href="blog-detail.html" class="">Christine Is A True Style Icon</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
{{--                        <div class="sidebar-item sidebar-tags">--}}
{{--                            <div class="sidebar-title">Blog tags</div>--}}
{{--                            <div class="sidebar-content">--}}
{{--                                <ul class="tags-lists">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="tags-item">Bags</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="tags-item">Fashion</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="sidebar-item sidebar-instagram">--}}
{{--                            <div class="sidebar-title">Instagram</div>--}}
{{--                            <div class="sidebar-content">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <img src="{{asset('/assets/images/shop/file/img-1.jpg')}}" alt="">--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <img src="{{asset('/assets/images/shop/file/img-2.jpg')}}" alt="">--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <img src="{{asset('/assets/images/shop/file/img-3.jpg')}}" alt="">--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <img src="{{asset('/assets/images/shop/file/img-4.jpg')}}" alt="">--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <img src="{{asset('/assets/images/shop/file/img-5.jpg')}}" alt="">--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <img src="{{asset('/assets/images/shop/file/img-6.png')}}" alt="">--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-sidebar-mobile">
        <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
    </div>
    <!-- /blog-list -->



@endsection
