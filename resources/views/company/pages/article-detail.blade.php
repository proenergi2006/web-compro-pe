@extends('company.layout.main')

@section('content')
     
    <!-- postbox area start -->
    <section class="rs-postbox-area section-space">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-8 col-lg-8">
                    <div class="rs-postbox-details-wrapper">
                        <div class="rs-postbox-details-thumb">
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" width="300">
                        </div>
                        <div class="rs-postbox-content">
                            <div class="rs-postbox-meta-list">
                                <span class="rs-postbox-meta-text">{{ $article->created_at->format('d M Y')}}</span>
                            </div>
                            <h3 class="rs-postbox-details-title">
                                {{ $article->title}}
                            </h3>
                        </div>
                        <div class="rs-postbox-details-content">
                            {!! html_entity_decode($article->content) !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="rs-sidebar-wrapper rs-sidebar-sticky">
                        <div class="sidebar-widget mb-30">
                            <h5 class="sidebar-widget-title">Recent Posts</h5>
                            <div class="sidebar-widget-content">
                                <div class="sidebar-blog-item-wrapper">
                                    @forelse ($latests as $latest)
                                        <div class="sidebar-blog-item">
                                            <div class="sidebar-blog-thumb">
                                                <a href="blog-details.html">
                                                    <img src="{{ asset('storage/' . $latest->thumbnail) }}" alt="image">
                                                </a>
                                            </div>
                                            <div class="sidebar-blog-content">
                                                <h6 class="sidebar-blog-title">
                                                    <a href="{{ route('web.article.show', ['lang' => app()->getLocale(), 'slug' => $latest->slug]) }}">  {{ $latest->title}}</a>
                                                </h6>
                                                <div class="sidebar-blog-meta">
                                                    <i class="ri-calendar-line"></i>
                                                    <span>{{ $latest->created_at->format('d M Y')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                       <p>{{__('message.othercontent')}}</p> 
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h5 class="sidebar-widget-title">Popular Tags</h5>
                            <div class="sidebar-widget-content tagcloud">
                                <a href="#">Diesel</a>
                                <a href="#">Factory</a>
                                <a href="#">Gas</a>
                                <a href="#">Industry</a>
                                <a href="#">Manufacture</a>
                                <a href="#">Oil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rs-postbox area end -->

@endsection
