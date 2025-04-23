 <!-- Header area start -->
 <header>
    <div class="rs-header-area rs-header-two header-transparent  has-border" id="header-sticky">
        <div class="container-fluid g-0">
            <div class="rs-header-inner">
                <div class="rs-header-left">
                    <div class="rs-header-logo-wrapper">
                        <div class="rs-header-logo ">
                            <a href="/"><img src="{{ asset('assets/images/logo_pe.png')}}" alt="logo"></a>
                        </div>
                    </div>
                </div>
                <div class="rs-header-menu">
               
                    <nav id="mobile-menu" class="main-menu">
                        <ul class="multipage-menu">
                            <!-- about menu -->
                            <li class="has-mega-menu {{ request()->is('about') ? 'active' : '' }}">
                                <a href="/about">About Us</a>
                              
                            </li>
                            <li class="has-mega-menu {{ request()->is('product') ? 'active' : '' }}">
                                <a href="/product">Products</a>
                            </li>
                            <li class="has-mega-menu {{ request()->is('services') ? 'active' : '' }}">
                                <a href="/services">Service</a>
                            </li>
                            <li class="has-mega-menu {{ request()->is('networks') ? 'active' : '' }}">
                                <a href="/networks">Networks</a>
                            </li>
                           
                            <li class="has-mega-menu {{ request()->is('articles') ? 'active' : '' }}">
                                <a href="/articles">News & Articles</a>
                            </li>

                            <li class="has-mega-menu {{ request()->is('careers') ? 'active' : '' }}">
                                <a href="/careers">Careers</a>
                            </li>
                           
                            <li class="has-mega-menu {{ request()->is('contact') ? 'active' : '' }}">
                                <a href="/contact">Contact</a>
                               
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="rs-header-right">
                    <!-- search area start -->
                    <div class="rs-header-search-wrapper">
                        <div class="rs-header-search-icon">
                            <i class="ri-close-fill has-close"></i>
                            <i class="ri-search-line has-search"></i>
                        </div>
                        <form class="rs-header-search-inner rs-stickys-form" action="#">
                            <div class="rs-header-search">
                                <input type="text" placeholder="Searching...">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="rs-header-area rs-header-two header-transparent has-border" id="header-sticky">
        <div class="container-fluid">
            <div class="rs-header-inner">
                <div class="rs-header-left">
                    <div class="rs-header-logo">
                        <a href="index.html"><img src="assets/images/logo/logo-orange-white.png" alt="logo"></a>
                    </div>
                </div>
                <div class="rs-header-menu">
                    <nav id="mobile-menu" class="main-menu">
                        <ul class="multipage-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="submenu last-children">
                                    <li class="menu-item-has-children has-arrow">
                                        <a href="#">Multipages</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Industry</a></li>
                                            <li><a href="red-engineering.html">Red Engineering</a></li>
                                            <li><a href="blue-construction.html">Blue Construction</a></li>
                                            <li><a href="metallurgy.html">Metallurgy</a></li>
                                            <li><a href="orange-construction.html">Orange construction</a></li>
                                            <li><a href="laboratory.html">Laboratory</a></li>
                                            <li><a href="renewable-energy.html">Renewable Energy</a></li>
                                            <li><a href="oil-gas.html">Oil & Gas</a></li>
                                            <li><a href="factory.html">Factory</a></li>
                                            <li><a href="robotic.html">Robotic</a></li>
                                            <li><a href="architecture.html">Architecture</a></li>
                                            <li><a href="manufacturing.html">Manufacturing</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children has-arrow">
                                        <a href="javascript:void(0)">Onepages</a>
                                        <ul class="submenu">
                                            <li><a href="industrie-one-page.html">Industrie Onepage</a></li>
                                            <li><a href="red-engineering-one-page.html">Engineering Onepage</a></li>
                                            <li><a href="blue-construction-one-page.html">Blue Construct Onepage</a></li>
                                            <li><a href="metallurgy-one-page.html">Metallurgy Onepage</a></li>
                                            <li><a href="orange-construction-one-page.html">Construction Onepage</a></li>
                                            <li><a href="laboratory-one-page.html">Laboratory Onepage</a></li>
                                            <li><a href="renewable-energy-one-page.html"> Energy Onepage</a></li>
                                            <li><a href="oil-gas-one-page.html">Oil Gas Onepage</a></li>
                                            <li><a href="factory-one-page.html">Factory Onepage</a></li>
                                            <li><a href="robotic-one-page.html">Robotic Onepage</a></li>
                                            <li><a href="architecture-one-page.html">Architecture Onepage</a></li>
                                            <li><a href="manufacturing-one-page.html">Manufacturing Onepage</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- about menu -->
                            <li class="menu-item-has-children">
                                <a href="about.html">About</a>
                                <ul class="submenu last-children">
                                    <li>
                                        <a href="about.html">About Us 01</a>
                                    </li>
                                    <li>
                                        <a href="about-two.html">About Us 02</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- page menu -->
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">Pages</a>
                                <ul class="submenu last-children">
                                    <li class=" has-arrow">
                                        <a href="javascript:void(0)">Services</a>
                                        <ul class="submenu">
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=" has-arrow">
                                        <a href="javascript:void(0)">Team</a>
                                        <ul class="submenu">
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=" has-arrow">
                                        <a href="javascript:void(0)">Project</a>
                                        <ul class="submenu">
                                            <li><a href="portfolio.html">Project</a></li>
                                            <li><a href="portfolio-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="pricing.html">Pricing Plan</a>
                                    </li>
                                    <li class=" has-arrow">
                                        <a href="shop.html">Shop</a>
                                        <ul class="submenu">
                                            <li><a href="shop.html">Product</a></li>
                                            <li><a href="shop-details.html">Product Details</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="faq.html">Faq</a>
                                    </li>
                                    <li>
                                        <a href="appointment.html">Appointment</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- elements menu -->
                            <li class="has-mega-menu menu-item-has-children">
                                <a href="javascript:void(0)">Elements</a>
                                <ul class="mega-menu mega-grid">
                                    <li>
                                        <a href="#" class="title">Elements Layout</a>
                                        <ul>
                                            <li><a href="elements-features.html">Features</a></li>
                                            <li><a href="elements-advance-tab.html">Advance Tab</a></li>
                                            <li><a href="elements-work-process.html">Work Process</a></li>
                                            <li><a href="elements-counter.html">Counter</a></li>
                                            <li><a href="elements-gsap.html">GSAP</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="title">Elements Layout</a>
                                        <ul>
                                            <li><a href="elements-services.html">Services Box</a></li>
                                            <li><a href="elements-team.html">Team</a></li>
                                            <li><a href="elements-pricing.html">Pricing</a></li>
                                            <li><a href="elements-portfolio.html">Project</a></li>
                                            <li><a href="#">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="title">Elements Layout</a>
                                        <ul>
                                            <li><a href="elements-services-tab.html">Services Tab</a></li>
                                            <li><a href="elements-testimonial.html">Testimonials</a></li>
                                            <li><a href="elements-brand.html">Partner Logo</a></li>
                                            <li><a href="elements-blog.html">Blog</a></li>
                                            <li><a href="#">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">Blog</a>
                                <ul class="submenu last-children">
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html">Contact</a>
                                <ul class="submenu last-children">
                                    <li>
                                        <a href="contact.html">Contact 01</a>
                                    </li>
                                    <li>
                                        <a href="contact-two.html">Contact 02</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="rs-header-right">
                    <!-- call start -->
                    <div class="rs-header-call has-theme-orange">
                        <h6><a href="tel:+971555961659">Tel. +97 155 596 1659</a></h6>
                    </div>
                    <!-- call end -->

                    <!-- search start -->
                    <div class="rs-header-search-wrapper">
                        <div class="rs-header-search-icon">
                            <i class="ri-close-fill has-close"></i>
                            <i class="ri-search-line has-search"></i>
                        </div>
                        <form class="rs-header-search-inner rs-stickys-form" action="#" method="POST">
                            <div class="rs-header-search">
                                <input type="text" placeholder="Searching...">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- search end -->

                    <!-- sidebar start -->
                    <div class="rs-header-hamburger">
                        <div class="sidebar-toggle">
                            <a class="bar-icon" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                    <path d="M8.55566 11H1.55566C1.29045 11 1.03609 11.1054 0.848557 11.2929C0.661021 11.4804 0.555664 11.7348 0.555664 12V19C0.555664 19.2652 0.661021 19.5196 0.848557 19.7071C1.03609 19.8946 1.29045 20 1.55566 20H8.55566C8.82088 20 9.07523 19.8946 9.26277 19.7071C9.45031 19.5196 9.55566 19.2652 9.55566 19V12C9.55566 11.7348 9.45031 11.4804 9.26277 11.2929C9.07523 11.1054 8.82088 11 8.55566 11ZM7.55566 18H2.55566V13H7.55566V18ZM19.5557 0H12.5557C12.2904 0 12.0361 0.105357 11.8486 0.292893C11.661 0.48043 11.5557 0.734784 11.5557 1V8C11.5557 8.26522 11.661 8.51957 11.8486 8.70711C12.0361 8.89464 12.2904 9 12.5557 9H19.5557C19.8209 9 20.0752 8.89464 20.2628 8.70711C20.4503 8.51957 20.5557 8.26522 20.5557 8V1C20.5557 0.734784 20.4503 0.48043 20.2628 0.292893C20.0752 0.105357 19.8209 0 19.5557 0ZM18.5557 7H13.5557V2H18.5557V7ZM19.5557 11H12.5557C12.2904 11 12.0361 11.1054 11.8486 11.2929C11.661 11.4804 11.5557 11.7348 11.5557 12V19C11.5557 19.2652 11.661 19.5196 11.8486 19.7071C12.0361 19.8946 12.2904 20 12.5557 20H19.5557C19.8209 20 20.0752 19.8946 20.2628 19.7071C20.4503 19.5196 20.5557 19.2652 20.5557 19V12C20.5557 11.7348 20.4503 11.4804 20.2628 11.2929C20.0752 11.1054 19.8209 11 19.5557 11ZM18.5557 18H13.5557V13H18.5557V18ZM8.55566 0H1.55566C1.29045 0 1.03609 0.105357 0.848557 0.292893C0.661021 0.48043 0.555664 0.734784 0.555664 1V8C0.555664 8.26522 0.661021 8.51957 0.848557 8.70711C1.03609 8.89464 1.29045 9 1.55566 9H8.55566C8.82088 9 9.07523 8.89464 9.26277 8.70711C9.45031 8.51957 9.55566 8.26522 9.55566 8V1C9.55566 0.734784 9.45031 0.48043 9.26277 0.292893C9.07523 0.105357 8.82088 0 8.55566 0ZM7.55566 7H2.55566V2H7.55566V7Z" fill="#616161"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
    </div> --}}
</header>
<!-- Header area end -->