<header class="home-header">
    <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="assets/media/logo.png" alt="">
        </div>
        <ul class="link unstyled d-sm-flex d-none  align-items-center">
            <li>
                <a href="{{ route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('about')}}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            </li>
            <li class="link-has-children">
                <a href="{{ route('rooms')}}" class="{{ request()->routeIs('rooms') ? 'active' : ''}}">Rooms</a>
            </li>
            <li class="link-has-children">
                <a href="{{ route('blog')}}" class="{{ request()->routeIs('blog') ? 'active' : ''}}">Blogs</a>
                
            </li>
            <li class="link-has-children">
                <a href="javascript:;" class="sub-menu">Pages</a>
                <ul class="unstyled sub-menu-list">
                    <li>
                        <a href="restaurant.html">Restaurant</a>
                    </li>
                    <li>
                        <a href="spa-relax.html">Spa & Relax</a>
                    </li>
                    <li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="offers.html">Offers</a>
                    </li>
                    <li>
                        <a href="booking.html">Bookings</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="coming-soon.html">Coming Soon</a>
                    </li>
                    <li>
                        <a href="error.html">404</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : ''}}">Contact</a>
            </li>
        </ul>
        <!-- ============= MOBILE SIDEBAR =============== -->
        <div class="mobile-header d-sm-none d-block">
            <div class="btn">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3135 3.125H5.31348V4.375H20.3135V3.125ZM0.313477 9.375H20.3135V10.625H0.313477V9.375ZM5.31348 15.625H20.3135V16.875H5.31348V15.625Z" fill="#282525"></path>
                    </svg>
                </span>
            </div>

            <nav class="sidebar">
                <div class="logo">
                    <img src="assets/media/mobile-logo.png" alt="">
                </div>
                <ul class="unstyled">
                    <li class="active"><a href="{{ route('home')}}">Home</a></li>
                    <li><a href="{{ route('about')}}">About</a></li>
                    <li>
                        <a href="javascript:;" class="menu-btn">Rooms
                            <span class="fas fa-caret-down first"></span>
                        </a>
                        <ul class="menu-item">
                            <li><a href="room-grid.html">Rooms Grid</a></li>
                            <li><a href="room-list.html">Rooms List</a></li>
                            <li><a href="room-detail.html">Rooms Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu-btn">Blogs
                            <span class="fas fa-caret-down second"></span>
                        </a>
                        <ul class="menu-item unstyled">
                            <li><a href="blog-grid.html">Blogs Grid</a></li>
                            <li><a href="blog-sidebar.html">Blogs Sidebar</a></li>
                            <li><a href="blog-detail.html">Blogs Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu-btn">Pages
                            <span class="fas fa-caret-down third"></span>
                        </a>
                        <ul class="menu-item unstyled">
                            <li><a href="restaurant.html">Restaurant</a></li>
                            <li><a href="spa-relax.html">Spa & Relax</a></li>
                            <li><a href="offers.html">Offers</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="booking.html">Booking Form</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="error.html">Error</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                 
                </ul>
            </nav>
        </div>
        <!-- ============= MOBILE SIDEBAR =============== -->

        <div class="nav-logo d-sm-flex d-none ">
            <div class="logo-icon">
                <form action="index.html">
                    <div class="search-block">
                        <input type="search" class="" name="search" id="search" placeholder="Search...">
                        <button type="submit" id="magnifying-btn"><i class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <a href="login.html"><i class="fa-light fa-user"></i></a>
            </div>
        </div>
    </div>
</header>