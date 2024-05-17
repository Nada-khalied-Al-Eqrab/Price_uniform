<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>تسجيل الدخول |سعرك موحد </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('control/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('control/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('control/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('control/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('control/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('control/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('control/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('control/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('control/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('control/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    {{-- My Login Theme --}}
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ route('main') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('control/assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block">سعرك موحد</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">سجل الدخول الى حسابك</h5>
                                        <p class="text-center small">ادخل اسمك وكلمة السر </p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{ route('login') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">ايميل المستخدم </label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">  الايميل الوظيفى
                                                </span>
                                                <input type="text" name="email" class="form-control"
                                                    id="yourUsername" required>
                                                <div class="invalid-feedback">من فضلك ادخل اسمك.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">كلمة المرور</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">من فضلك ادخل كلمة المرور !</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">تذكرنى</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit"
                                                style="background: #a01818 ; border :#a01818 ">تسجيل الدخول </button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">هل لا تملك حساب ؟ <a
                                                    href="{{ route('register') }}">انشاء حساب</a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">

                                Designed by <a href="https://bootstrapmade.com/">MET</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('control/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('control/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('control/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('control/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('control/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('control/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('control/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('control/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('control/assets/js/main.js') }}"></script>


</body>

</html>
