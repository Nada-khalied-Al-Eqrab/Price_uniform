<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">

        <i class="bi bi-list toggle-sidebar-btn"></i>

        <a href="{{ route('dash') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('control/assets/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">سعرك موحد </span>
        </a>


    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">



            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" alt="Profile"
                        class="rounded-circle">{{-- control/assets/img/profile-img.jpg --}}
                    &nbsp;
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->email }}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>

                        <a class="dropdown-item d-flex align-items-center" href="{{ route('my-account') }}">
                            <i class="bi bi-person"></i>
                            <span >صفحتى الشخصية</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>


                    <li>
                        <hr class="dropdown-divider">
                    </li>


                    <li>
                        <hr class="dropdown-divider">
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">{{ $num }}</span>
                </a><!-- End Messages Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        لديك {{ $num }} شكاوى جديدة
                        <a href="{{ route('complaints') }}"><span class="badge rounded-pill bg-primary p-2 ms-2">اعرض
                                المزيد</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    @foreach ($comp as $item)
                        <li class="message-item">

                            <div style="text-align:center">
                                <h4>{{ $item->C_name }}</h4>
                                <p> {{ $item->C_text_of_the_complaint }}</p>
                                <p>{{ $item->C_date_complaint }}</p>
                            </div>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    @endforeach

                    <li class="dropdown-footer">
                        <a href="{{ route('complaints') }}">عرض جميع الرسائل</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
