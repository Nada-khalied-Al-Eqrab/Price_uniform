@extends('layeout.master')

@section('title', ' تحليلات متنوعة | سعرك موحد')
@section('page')
    <main id="main" class="main">



        <div class="pagetitle">
            <h1>النسب و التحليلات الاحصائية</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">تحليلات متنوعة </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <p>تحليلات الشكاوى و المبيعات </p>
        <section class="section">
            <div class="row">


                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">عدد الشكاوى فى كل شهر</h5>

                    <!-- Line Chart -->
                    <div id="lineChart"></div>

                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#lineChart"), {
                          series: [{
                            name: "عدد الشكاوى: ",
                            data: [
                                    {{ $count_m1}},
                                    {{ $count_m2}},
                                    {{ $count_m3}} ,
                                    {{ $count_m4}},
                                    {{ $count_m5}},
                                    {{ $count_m6}},
                                    {{ $count_m7}},
                                    {{ $count_m8}},
                                    {{ $count_m9}},
                                    {{ $count_m10}},
                                    {{ $count_m11}},
                                    {{ $count_m12}}
                                  ]
                          }],
                          chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                              enabled: false
                            }
                          },
                          dataLabels: {
                            enabled: false
                          },
                          stroke: {
                            curve: 'straight'
                          },
                          grid: {
                            row: {
                              colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                              opacity: 0.5
                            },
                          },
                          xaxis: {
                            categories: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'اغسطس', 'ستمبر','اكتوبر','نوفمبر','ديسمبر'],
                          }
                        }).render();
                      });
                    </script>
                    <!-- End Line Chart -->


                </div>
              </div>





                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">عدد الشكاوى فى كل محافظة </h5>

                    <!-- Bar Chart -->
                    <div id="barChart"></div>

                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#barChart"), {
                          series: [{
                            data: [{{$gov1}},
                                   {{$gov2}},
                                   {{$gov3}},
                                   {{$gov4}},
                                   {{$gov5}},
                                   {{$gov6}},
                                   {{$gov7}},
                                   {{$gov8}},
                                   {{$gov9}},
                                   {{$gov10}},
                                   {{$gov11}},
                                   {{$gov12}},
                                   {{$gov13}},
                                   {{$gov14}},
                                   {{$gov15}},
                                   {{$gov16}},
                                   {{$gov17}},
                                   {{$gov18}},
                                   {{$gov19}},
                                   {{$gov20}},
                                   {{$gov21}},
                                   {{$gov22}},
                                   {{$gov23}},
                                   {{$gov24}},
                                   {{$gov25}},
                                   {{$gov26}},
                                   {{$gov27}},
                                ]
                          }],
                          chart: {
                            type: 'bar',
                            height: 600
                          },
                          plotOptions: {
                            bar: {
                              borderRadius:1,
                              horizontal: true,

                            }
                          },
                          dataLabels: {
                            enabled:false
                          },

                          xaxis: {
                            categories: ['القاهرة',
                                        'الاسكندرية',
                                        'بورسعيد',
                                        'السويس',
                                        'دمياط',
                                        'الدقهلية',
                                        'الشرقية',
                                        'القليوبية',
                                        'كفر الشيخ',
                                        'الغربية',
                                        'المنوفية',
                                        'البحيرة',
                                        'الاسماعلية ',
                                        'الجيزة ',
                                        'بنى سويف',
                                        'الفيوم',
                                        'المنيا',
                                        'اسيوط',
                                        'سوهاج',
                                        'قنا',
                                        'اسوان',
                                        'الاقصر',
                                        'البحر الاحمر',
                                        'الوادى الجديد',
                                        'مطروح',
                                        'شمال سيناء',
                                        'جنوب سيناء ',
                            ],
                          }
                        }).render();
                      });
                    </script>
                    <!-- End Bar Chart -->


                </div>
              </div>


                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">جمهورية مصر العربية </h5>

                    <!-- Pie Chart -->
                    <div id="pieChart"></div>

                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#pieChart"), {
                          series: [ {{$num}}, {{$num2}}, {{$num3}},{{$num4}}],
                          chart: {
                            height: 350,
                            type: 'pie',
                            toolbar: {
                              show: true
                            }
                          },
                          labels: [ 'عدد الشكاوى ','عدد المحافظات', 'عدد منافذ البيع', 'عدد مكاتب التموين']
                        }).render();
                      });
                    </script>
                    <!-- End Pie Chart -->

                </div>
              </div>






            </div>
          </section>
    </main><!-- End #main -->
@endsection
