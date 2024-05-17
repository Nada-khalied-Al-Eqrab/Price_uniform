@extends('layeout.master')

@section('title', ' لوحة تحكم | سعرك موحد')

@section('page')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>لوحة التحكم</h1> <br>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <a href="{{ route('dash') }}"> الصفحة الرأيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- rightside columns -->
                <div class="col-lg-8">
                    <div class="row">



                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">



                                <div class="card-body">
                                    <h5 class="card-title">نسب اليوم <span>/اليوم</span></h5>
                                    <!-- Radial Bar Chart -->
                                    <div id="radialBarChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#radialBarChart"), {
                                                series: [{{ $emp }}, {{ $responding_num }}, {{ $num }},
                                                    {{ session('view', 0) }}
                                                ],
                                                chart: {
                                                    height: 400,
                                                    type: 'radialBar',
                                                    toolbar: {
                                                        show: true
                                                    }
                                                },
                                                plotOptions: {
                                                    radialBar: {
                                                        dataLabels: {
                                                            name: {
                                                                fontSize: '23px',
                                                            },
                                                            value: {
                                                                fontSize: '16px',
                                                            },
                                                            total: {
                                                                show: true,
                                                                label: 'عدد مطورين الموقع',
                                                                formatter: function(w) {
                                                                    // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                                                    return 11
                                                                }
                                                            }
                                                        }
                                                    }
                                                },
                                                labels: ['عدد الموظفين', 'عدد الشكاوى التى تم الرد عليها ', 'عدد الشكاوى', 'عدد الزوار'],
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Radial Bar Chart -->
                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">السلع التموينية<span>|هذالشهر</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">كود السلعة</th>
                                                <th scope="col">السلعة</th>
                                                <th scope="col">عدد الزوار</th>
                                                <th scope="col">السعر الموحد</th>
                                                <th scope="col">الحالة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($goods_commd as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->Go_ID }}</th>
                                                    <td>{{ $item->Go_item_type }} / {{ $item->Weight }}</td>
                                                    <td><a class="text-primary">{{ $num }}</a></td>
                                                    <td>جنية مصرى{{ $item->Go_supply_price }}</td>
                                                    <td><span class="badge bg-success">{{ $item->status }}</span></td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">موظفين <span>|لوحة التحكم</span></h5>


                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>

                                                <th scope="col">اسم الموظف</th>
                                                <th scope="col">ساعات العمل </th>
                                                <th scope="col">الجهة التابعة </th>
                                                <th scope="col">الوظيفة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($emp_info as $item)
                                                <tr>
                                                    <td><a href="#"
                                                            class="text-primary fw-bold">{{ $item->E_name }}</a></td>
                                                    <td class="fw-bold">{{ $item->E_work_hours }}ساعة</td>
                                                    <td>{{ $item->e_follow }}</td>
                                                    <td>{{ $item->E_job }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End rightside columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <!-- Sales Card -->


                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">عدد الزوار <span>| اليوم</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                        {{ session('view', 0) }} زائر
                                    </h6>


                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->



                    <!-- Customers Card -->


                    <div class="card info-card customers-card">


                        <div class="card-body">
                            <h5 class="card-title">عدد الشكاوى <span>| هذا العام</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $num }} شكاوى </h6>
                                </div>
                            </div>

                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">نشاطات الموقع<span>| اليوم</span></h5>

                            <div class="activity">

                                @foreach ($complaints as $item)
                                    <div class="activity-item d-flex">
                                        <div class="activite-label">{{ $item->C_date_complaint }}</div>
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                            شكوى على سلعة <a href="#"
                                                class="fw-bold text-dark">{{ $item->C_item_complained }}</a> من محافظة
                                            {{ $item->c_goe }}
                                        </div>
                                    </div><!-- End activity item-->
                                @endforeach


                                @foreach ($responding_to_complaints as $item)
                                    <div class="activity-item d-flex">
                                        <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                        <div class="activite-label">تم الرد على الشكوى رقم {{ $item->R_complaints_code }}
                                            &nbsp; </div>

                                        <div class="activity-content">
                                            &nbsp; الموظف الذى رد عليها هو \هى {{ $item->R_employee_name }}
                                        </div>
                                    </div><!-- End activity item-->
                                @endforeach

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class="card">

                    </div><!-- End Right side columns -->

                </div>
        </section>

    </main><!-- End #main -->
@endsection
