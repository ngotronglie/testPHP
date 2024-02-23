<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="/assets/client/assets/img/logo.png" alt=""> -->
            <h1>NAM TU LIEM</h1>
        </a>

        @php
            $categories = (new \Ngotr\Oop\Models\Category())->getAllCategories();
            // var_dump($categories);
        @endphp

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="#"><span>Categories</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        @foreach ($categories as $value)
                            <li><a href="/postAll/{id}">{{ $value['name'] }} </a></li>
                        @endforeach


                    </ul>
                </li>

                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                @if (empty($_SESSION))
                    <li><a href="/auth/login">đăng nhập</a></li>
                @else
                    <li><a onclick="return confirm('Bạn sẽ đăng xuất đấy!!')" href="/logout">Đăng xuất</a></li>
                @endif

                @if (!empty($_SESSION))
                    @if ($_SESSION['user']['role'] == 1)
                        <li><a href="/admin">quay lại trang quản
                                trị</a></li>
                    @endif
                @endif



            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header>
