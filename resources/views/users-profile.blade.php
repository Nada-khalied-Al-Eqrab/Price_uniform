@extends('layeout.master')

@section('title', ' لوحة تحكم | سعرك موحد')

@section('page')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>الصفحة الشخصية </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">اسم المستخدم</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center" >

                            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" alt="Profile"
                                class="rounded-circle">
                            <h3>{{ Auth::user()->name }} </h3>
                            <h5><u style="color: #3367f7">{{ Auth::user()->email }}</u></h5>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">لمحة عامة </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">تعديل الملف
                                        الشخصى </button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                    <h5 class="card-title">الملف الشخصى</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">الاسم بالكامل</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">سعات العمل </div>
                                        <div class="col-lg-9 col-md-8">12 ساعة صباحا </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">الايميل</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="POST" action="{{ route('profile.update') }}">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">الصفحة
                                                الشخصية</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                                                    alt="Profile">

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">الاسم بالكامل
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="name"
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">جهة
                                                العمل</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select class="form-control" name="affiliated_id">
                                                    @if (!empty($user_affiliated))
                                                        <option value="{{ $user_affiliated->id }}">
                                                            {{ $user_affiliated->name }}
                                                        </option>
                                                    @else
                                                        <option value="">اختر الجهة التابعة </option>
                                                    @endif
                                                    @foreach ($affiliated_entities as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country"
                                                class="col-md-4 col-lg-3 col-form-label">المحافظة</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select class="form-control" name="govern_id">
                                                    @if (!empty($user_govern))
                                                        <option value="{{ $user_govern->G_ID }}">
                                                            {{ $user_govern->G_name }}
                                                        </option>
                                                    @else
                                                        <option value="">اختر المحافظة </option>
                                                    @endif
                                                    @foreach ($gov as $item)
                                                        <option value="{{ $item->G_ID }}">{{ $item->G_name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">الايميل
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                                <!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
