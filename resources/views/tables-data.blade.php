@extends('layeout.master')

@section('title', ' لوحة تحكم | سعرك موحد')

@section('page')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>جداول البيانات </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">جداول البيانات</a></li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section faq">
            <div class="row">

                <!-- F.A.Q Group 1 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">جميع جداول البيانات </h5>

                        <div class="accordion accordion-flush" id="faq-group-1">


                            {{-- جدول السلع التموينية  --}}
                            <div class="card">
                                <div class="card-body">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-1"
                                                type="button" data-bs-toggle="collapse">
                                                جدول السلع التموينية
                                            </button>
                                        </h2>
                                        <div id="faqsOne-1" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                <!-- Default Table -->
                                                <h5 class="card-title">السلع التموينية </h5>
                                                <table class="table table-dark">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">م</th>
                                                            <th scope="col">اسم السلعة</th>
                                                            <th scope="col">الوزن</th>
                                                            <th scope="col">النوع</th>
                                                            <th scope="col">السعر الموحد </th>
                                                            <th scope="col">السعر الادنى للسوبر ماركت</th>
                                                            <th scope="col">السعر الاعلى للسوبر ماركت</th>
                                                            <th scope="col">الحالة </th>
                                                            <th scope="col">الصورة </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($goods_commd as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->Go_ID }}</th>
                                                                <td>{{ $item->Go_item_type }}</td>
                                                                <td>{{ $item->Weight }}</td>
                                                                <td>{{ $item->Go_name_of_the_commodity }}</td>
                                                                <td>{{ $item->Go_supply_price }}</td>
                                                                <td>{{ $item->Go_minimum_price_in_supermarket }}</td>
                                                                <td>{{ $item->Go_the_price_the_upper_limit_in_supermarket }}
                                                                </td>
                                                                <td>{{ $item->status }}</td>
                                                                <td>{{ $item->img_path }}</td>

                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                                <!-- End Default Table Example -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- جدول الشكاوى --}}
                            <div class="card">
                                <div class="card-body">


                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-2"
                                                type="button" data-bs-toggle="collapse">
                                                جدول الشكاوى
                                            </button>
                                        </h2>
                                        <div id="faqsOne-2" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                <!-- Default Table -->
                                                <h5 class="card-title">الشكاوى </h5>
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">م</th>
                                                            <td>اسم المواطن</td>
                                                            <td>الايميل</td>
                                                            <td>رقم الوتس اب</td>
                                                            <td>نص الشكوى </td>
                                                            <td>العنوان</td>
                                                            <td>التاريخ</td>
                                                            <td>نوع السلعة </td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($complaints as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->C_ID }}</th>
                                                                <td>{{ $item->C_name }}</td>
                                                                <td>{{ $item->C_email }}</td>
                                                                <td>{{ $item->C_whats_up }}</td>
                                                                <td>{{ $item->C_text_of_the_complaint }}</td>
                                                                <td>{{ $item->C_dealers_address }}</td>
                                                                <td>{{ $item->C_date_complaint }}</td>
                                                                <td>{{ $item->C_item_complained }}</td>
                                                                {{-- <td>
                              <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                              <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                          </td> --}}
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- End Default Table Example -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- جدول الرد على الشكاوى  --}}
                            <div class="card">
                                <div class="card-body">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-3"
                                                type="button" data-bs-toggle="collapse">
                                                جدول الرد على الشكاوى
                                            </button>
                                        </h2>
                                        <div id="faqsOne-3" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                <!-- Default Table -->
                                                <h5 class="card-title">الرد على الشكاوى </h5>
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">م</th>
                                                            <th scope="col">الموظف الذى رد على الشكوى</th>
                                                            <th scope="col">طريقة الرد</th>
                                                            <th scope="col">وقت الرد</th>
                                                            <th scope="col">رقم الشكوى</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($responding_to_complaints as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->R_id }}</th>
                                                                <td>{{ $item->R_employee_name }}</td>
                                                                <td>{{ $item->R_how_to_respond }}</td>
                                                                <td>{{ $item->R_reply_back }}</td>
                                                                <td>{{ $item->R_complaints_code }}</td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- End Default Table Example -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>

                </div>
            </div><!-- End F.A.Q Group 1 -->
            </div>
        </section>

    </main><!-- End #main -->

@endsection
