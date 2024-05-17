@extends('layeout.master')

@section('title', ' لوحة تحكم | سعرك موحد')

@section('page')


    <main id="main" class="main">


        <div class="pagetitle">
            <h1>الجداول العامة </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">جميع الجداول</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section faq">
            <div class="row">

                <!-- F.A.Q Group 1 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">جميع الجداول العامة </h5>

                        <div class="accordion accordion-flush" id="faq-group-1">


                            {{-- جدول الموظفين --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-1"
                                                type="button" data-bs-toggle="collapse">
                                                جدول الموظفين
                                            </button>
                                        </h2>
                                        <div id="faqsOne-1" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                <!--employee table -->
                                                <h5 class="card-title">الموظفين</h5>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">م</th>
                                                            <th scope="col">الاسم</th>
                                                            <th scope="col">الجهة التابعة </th>
                                                            <th scope="col">الوظيفة </th>
                                                            <th scope="col">رقم الهاتف</th>
                                                            <th scope="col">العنوان</th>
                                                            <th scope="col">الايميل </th>
                                                            <th scope="col">عدد ساعات العمل </th>
                                                            {{-- <th scope="col">الصورة</th> --}}
                                                            <th></th>
                                                            {{-- <th scope="col"></th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($employee as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->E_id }}</th>
                                                                <td>{{ $item->E_name }}</td>
                                                                <td>{{ $item->e_follow }}</td>
                                                                <td>{{ $item->E_job }}</td>
                                                                <td>{{ $item->E_phone }}</td>
                                                                <td>{{ $item->E_address }}</td>
                                                                <td>{{ $item->E_email }}</td>
                                                                <td>{{ $item->E_work_hours }}</td>

                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{--  جدول المحافظات --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-3"
                                                type="button" data-bs-toggle="collapse">
                                                جدول المحافظات
                                            </button>
                                        </h2>
                                        <div id="faqsOne-3" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                <!-- Active Table -->
                                                <h5 class="card-title">المحافظات </h5>
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">م</th>
                                                            <th scope="col">اسم المحافظة</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($governorates as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->G_ID }}</th>
                                                                <td>{{ $item->G_name }}</td>
                                                                {{-- <td>
                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                       <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                    </td> --}}
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- End Tables without borders -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- جدول مكاتب التموين --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-4"
                                                type="button" data-bs-toggle="collapse">
                                                جدول مكاتب التموين
                                            </button>
                                        </h2>
                                        <div id="faqsOne-4" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                <!--  The tables -->
                                                <h5 class="card-title">مكاتب التموين</h5>
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">م</th>
                                                            <th scope="col">المحافظة</th>
                                                            <th scope="col">اسم مكتب التموين</th>
                                                            <th scope="col">عنوان المكتب</th>
                                                            <th scope="col">رقم الهاتف</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($supply_office as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->S_ID }}</th>
                                                                <td scope="row">{{ $item->gov }}</td>
                                                                <td>{{ $item->S_office_name }}</td>
                                                                <td>{{ $item->S_office_address }}</td>
                                                                <td>{{ $item->S_phone }}</td>
                                                                {{-- <td>
                                     <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                       <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                    </td> --}}
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- End  The tables -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- جدول منافذ البيع --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-5"
                                                type="button" data-bs-toggle="collapse">
                                                جدول منافذ البيع
                                            </button>
                                        </h2>
                                        <div id="faqsOne-5" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                <!--  The tables -->
                                                <h5 class="card-title">منافذ البيع </h5>
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">م</th>
                                                            <th scope="col">كود المحافظة </th>
                                                            <th scope="col">اسم صاحب منفذ البيع </th>
                                                            <th scope="col">رقم المنفذ</th>
                                                            <th scope="col">عنوان المنفذ</th>
                                                            {{-- <th></th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($salepoints as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->SA_ID }}</th>
                                                                <td>{{ $item->gov }}</td>
                                                                <td>{{ $item->SA_traders_name }}</td>
                                                                <td>{{ $item->SA_phone }}</td>
                                                                <td>{{ $item->SA_Address }}</td>
                                                                {{-- <td>
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                   <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                </td> --}}
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                                <!-- End  The tables -->
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
