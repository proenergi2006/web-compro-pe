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
                                    <div class="sidebar-blog-item">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-01.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <h6 class="sidebar-blog-title">
                                                <a href="blog-details.html"> Construction of a new high tech plant</a>
                                            </h6>
                                            <div class="sidebar-blog-meta">
                                                <i class="ri-calendar-line"></i>
                                                <span>May 20, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-blog-item">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-02.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <h6 class="sidebar-blog-title">
                                                <a href="blog-details.html">
                                                    Building resilient supply chains for industries </a>
                                            </h6>
                                            <div class="sidebar-blog-meta">
                                                <i class="ri-calendar-line"></i>
                                                <span>May 20, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-blog-item">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-03.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <h6 class="sidebar-blog-title">
                                                <a href="blog-details.html">
                                                    Factories technologies in interactive and plants </a>
                                            </h6>
                                            <div class="sidebar-blog-meta">
                                                <i class="ri-calendar-line"></i>
                                                <span>May 20, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-blog-item">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-01.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <h6 class="sidebar-blog-title">
                                                <a href="blog-details.html">
                                                    Building resilient supply for industries and factorie </a>
                                            </h6>
                                            <div class="sidebar-blog-meta">
                                                <i class="ri-calendar-line"></i>
                                                <span>May 20, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h5 class="sidebar-widget-title">Popular Tags</h5>
                            <div class="sidebar-widget-content tagcloud">
                                <a href="#">Construction</a>
                                <a href="#">Factory</a>
                                <a href="#">Gas</a>
                                <a href="#">Industry</a>
                                <a href="#">Manufacture</a>
                                <a href="#">Metallurgy</a>
                                <a href="#">Oil</a>
                                <a href="#">Robotic</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rs-postbox area end -->

@endsection
