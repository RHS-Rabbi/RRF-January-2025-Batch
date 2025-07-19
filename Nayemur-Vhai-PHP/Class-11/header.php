<!-- Header Area -->
<header class="header-area py-4">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="w-[85px]">
                <a href="#" class="site-logo">
                    <img class="object-cover w-full" src="./assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <!-- Hamburger Icon for Mobile -->
            <div class="lg:hidden">
                <button id="menu-toggle" class="text-gray-800 focus:outline-none cursor-pointer">
                    <!-- Hamburger Icon -->
                    <svg id="menu-open-icon" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!-- Close Icon -->
                    <svg id="menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Desktop Nav -->
            <nav class="mainmenu hidden md:hidden flex-row items-center gap-[70px] lg:flex">
                <ul class="flex gap-[42px]">
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
                <div class="header-btn">
                    <a href="#" class="btn">Sign Up</a>
                </div>
            </nav>
        </div>
        <!-- Mobile Nav (Hidden by Default) -->
        <div id="mobile-menu" class="lg:hidden hidden mt-4">
            <ul class="flex flex-col gap-3 text-center">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Reviews</a></li>
                <li>
                    <div class="header-btn">
                        <a href="#" class="btn">Sign Up</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>