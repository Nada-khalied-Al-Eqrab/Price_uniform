<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar" dir="rtl">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dash') }}">
                <i class="bi bi-grid"></i>&nbsp;
                <span>لوحة التحكم</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i>&nbsp;<span>الجداول</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('tables_general') }}">
                        <span>الجداول العامة </span><i class="bi bi-circle"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tables_data') }}">
                        </i><span>جداول البيانات</span><i class="bi bi-circle"></i>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i>&nbsp;<span>النسب و التحليلات الاحصائية</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('charts_complaints') }}">
                        <span> تحليلات متنوعة </span><i class="bi bi-circle"></i>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->


        <li class="nav-heading">الصفحات</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('my-account') }}">
                <i class="bi bi-person"></i>&nbsp;
                <span>الصفحة الشخصية </span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('complaints') }}">
                <i class="bi bi-file-earmark"></i>&nbsp;
                <span>الشكاوى</span>
            </a>
        </li><!-- End Blank Page Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('register') }}">
                <i class="bi bi-card-list"></i>&nbsp;
                <span>انشاء حساب</span>
            </a>
        </li><!-- End Register Page Nav --> --}}


        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="nav-link collapsed">
                @csrf
                <i class="bi bi-box-arrow-in-right"></i>&nbsp;
                <button type="submit"
                    style="
                    background: none;
                    border: none;
                    padding: 0;
                    margin: 0;
                    font-size: inherit;
                    color: inherit;
                    cursor: pointer;
                  ">
                    <span> <b>تسجيل الخروج </b></span>
                </button>
            </form>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
