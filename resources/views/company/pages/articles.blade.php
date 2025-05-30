@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/news_hi_rev2.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h2 class="text-white radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">{!! __('message.news') !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
     <!-- postbox area start -->
    <section class="rs-postbox-area section-space">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-8 col-lg-8">
                    <div class="rs-postbox-wrapper">
                        @forelse ($articles as $article)
                            <article class="rs-postbox-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                         <div class="rs-postbox-thumb">
                                            <a href="{{ route('web.article.show', ['slug' => $article->slug]) }}">
                                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="Thumbnail" width="80" height="auto">
                                    
                                            </a>
                                            {{-- <div class="rs-postbox-tag">
                                                <a href="blog-details.html">Company</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                             <div class="rs-postbox-content" style="padding-top: 0px">
                                                <span class="rs-postbox-meta-text">{{$article->created_at}}</span>
                                                <h3 class="rs-postbox-title">
                                                    <a href="{{ route('web.article.show', ['slug' => $article->slug]) }}">{{$article->title}}</a>
                                                </h3>
                                                <div class="rs-postbox-text">
                                                    {!! Str::limit(strip_tags(html_entity_decode($article->content)), 100) !!}
                                                </div>
                                                <div class="rs-postbox-btn" style="margin-top:20px">
                                                    <a class="rs-btn has-theme-orange has-icon has-bg" href="{{ route('web.article.show', ['lang' => app()->getLocale(), 'slug' => $article->slug]) }}">{!! __('message.read') !!}
                                                        <span class="icon-box">
                                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                    <path
                                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                    </path>
                                                    </svg>
                                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                    <path
                                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                    </path>
                                                    </svg>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                               
                             
                            </article>
                        @empty 
                        <div class="col-12">
                            <div class="alert alert-warning text-center">
                                {!! __('message.nonews') !!}
                            </div>
                        </div>
                
                        @endforelse
                     
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="rs-sidebar-wrapper rs-sidebar-sticky">
                        <div class="sidebar-widget mb-30">
                            <div class="sidebar-search">
                                <form action="{{ route('web.article.search', ['lang' => app()->getLocale()]) }}">
                                    <div class="sidebar-search-input">
                                        <input type="text" placeholder="Searching..." name="q">
                                        <button type="submit">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M16.9995 17L13.1328 13.1333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-30">
                            <div class="d-flex flex-column align-items-center">
                                <h5 class="sidebar-widget-title">{!! __('message.crude') !!}</h5>
                               
                                <script type="text/javascript" src="https://www.oil-price.net/TABLE2/gen.php?lang=id"> </script>
                                 <a href="http://www.oil-price.net/dashboard.php?lang=en#TABLE2">oil price</a>
                                <script type="text/javascript" src="https://www.oil-price.net/widgets/brent_crude_price_large/gen.php?lang=id"> </script>
                                <a href="http://www.oil-price.net/dashboard.php?lang=en#brent_crude_price_large">oil price</a>
        
                            </div>
                           
                        </div>
                   
                        <div class="sidebar-widget mb-30">
                            <h5 class="sidebar-widget-title">{!! __('message.other') !!}</h5>
                            <div class="sidebar-widget-content">
                                <div class="sidebar-blog-item-wrapper">
                                    @forelse ($articles_old as $old)
                                        
                                    <div class="sidebar-blog-item">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('storage/' . $old->thumbnail) }}" alt="Thumbnail" width="80" height="auto">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <h6 class="sidebar-blog-title">
                                                <a href="{{ route('web.article.show', ['lang' => app()->getLocale(), 'slug' => $old->slug]) }}">{{$old->title}}</a>
                                            </h6>
                                            <div class="sidebar-blog-meta">
                                                <i class="ri-calendar-line"></i>
                                                <span>{{$old->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                        @empty
                                        <p>{{__('message.othercontent')}}</p>
                                        @endforelse
                                    
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- pagination style -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="pagination-wrapper mt-40">
                        <div class="common-pagination text-start">
                            <nav>
                                {{ $articles->links('vendor.pagination.custom') }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pagination style end -->
        </div>
    </section>
    <!-- rs-postbox area end -->


@endsection
