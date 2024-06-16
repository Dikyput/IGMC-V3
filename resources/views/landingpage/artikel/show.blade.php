@extends('layouts.app')
@section('content')
    <div class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ asset('assets') }}/artikel/{{ $artikel->foto }}" alt="{{ $artikel->slug }}">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author"><i class="fa-light fa-user"></i>{{ $artikel->publish }}</a>
                                <a><i
                                        class="fa-light fa-calendar"></i>{{ $artikel->getCreatedAtAttribute($artikel->updated_at) }}</a>
                            </div>
                            <h2 class="blog-title">{{ $artikel->slug }}</h2>
                            <p>
                                {{ $artikel->deskripsi }}
                            </p>
                            <div class="share-links clearfix ">
                                <div class="row justify-content-between">
                                    <div class="col-md-auto">
                                        <span class="share-links-title">Tags:</span>
                                        <div class="tagcloud">
                                            <a>{{ $artikel->category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="th-comments-wrap ">
                        <h3 class="blog-inner-title"><i class="far fa-comments"></i> Comments
                            @if (!$artikel->comments)
                                ( 0 )
                            @else
                                ( {{ $jumlahKomentar }} )
                            @endif
                        </h3>
                        <ul class="comment-list">
                            @if ($artikel->comments)
                                @foreach ($artikel->comments as $komentar)
                                    <li class="th-comment-item">
                                        <div class="th-post-comment">
                                            <div class="comment-avater">
                                                <img src="https://cdn.discordapp.com/avatars/{{ $komentar->userdis->id_discord }}/{{ $komentar->userdis->avatar }}.png"
                                                    alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <h3 class="name">{{ $komentar->userdis->username }}</h3>
                                                <span class="commented-on">{{ $komentar->created_at }}</span>
                                                <p class="text">{{ $komentar->content }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <p>No Artikel comments yet</p>
                            @endif
                        </ul>
                    </div> <!-- Comment end --> <!-- Comment Form -->
                    <div class="th-comment-form ">
                        <div class="form-title">
                            <h3 class="blog-inner-title mb-2"><i class="fa-solid fa-reply"></i> Leave a Comment</h3>
                        </div>
                        <form action="{{ route('comment.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="artikel_id" value="{{ $artikel->id }}">
                                <div class="col-12 form-group style-border">
                                    <textarea placeholder="Write a Comment*" name="content" class="form-control"></textarea>
                                    <i class="far fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button type="submit" class="th-btn">SEND MESSAGE <i
                                            class="far fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </form>
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
                                @foreach ($postakhir as $item)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href=""><img src="{{ asset('assets') }}/artikel/{{ $item->foto }}"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="{{ route('artikelshow', ['slug' => $item->slug]) }}">{{ $item->slug }}</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="{{ route('artikelshow', ['slug' => $item->slug]) }}"><i
                                                        class="fa-light fa-calendar"></i>{{ $item->getCreatedAtAttribute($item->updated_at) }}</a>
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
    </div>
@endsection
