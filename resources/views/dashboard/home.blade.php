@extends('layouts.app')
@section('content')
    <section class="th-blog-wrapper space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    @foreach ($artikel as $a)
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="{{ route('artikelshow', ['slug' => $a->slug]) }}"><img
                                        src="{{ asset('assets') }}/artikel/{{ $a->foto }}" alt="{{ $a->slug }}"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="{{ route('artikelshow', ['slug' => $a->slug]) }}"><i
                                            class="fa-light fa-user"></i>{{ $a->publish }}</a>
                                    <a href="{{ route('artikelshow', ['slug' => $a->slug]) }}"><i
                                            class="fa-light fa-calendar"></i>{{ $a->getCreatedAtAttribute($a->updated_at) }}</a>
                                </div>
                                <h2 class="blog-title"><a
                                        href="{{ route('artikelshow', ['slug' => $a->slug]) }}">{{ $a->slug }}</a>
                                </h2>
                                <p class="blog-text">{{ substr($a->deskripsi, 0, 250) }} ...</p>
                                <a href="{{ route('artikelshow', ['slug' => $a->slug]) }}" class="link-btn style2">Read
                                    More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="th-pagination">
                        @if ($artikel->onFirstPage())
                        @else
                            <li>
                                <a href="{{ $artikel->previousPageUrl() }}">
                                    <span class="btn-border"></span><i class="far fa-arrow-left"></i>
                                </a>
                            </li>
                        @endif

                        @if ($artikel->hasMorePages())
                            <li>
                                <a href="{{ $artikel->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                                    <span class="btn-border"></span><i class="far fa-arrow-right"></i>
                                </a>
                            </li>
                        @else
                        @endif
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            @foreach ($categories as $c)
                                <ul>
                                    <li>
                                        <a href="#">{{ $c->name }}</a>
                                        <span>({{ $c->artikel_count }})</span>
                                    </li>
                                </ul>
                                <br>
                            @endforeach
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($postakhir as $pa)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href=""><img src="{{ asset('assets') }}/artikel/{{ $pa->foto }}"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="{{ route('artikelshow', ['slug' => $pa->slug]) }}">{{ $pa->slug }}</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="{{ route('artikelshow', ['slug' => $pa->slug]) }}"><i
                                                        class="fa-light fa-calendar"></i>{{ $pa->getCreatedAtAttribute($pa->updated_at) }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
