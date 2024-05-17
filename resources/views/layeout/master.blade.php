<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> @yield('title','لوحة التحكم  | سعرك موحد  ') </title>

    <meta content="لوحة التحكم الخاصة بموقع سعرك موحد و هى مصرحة فقط للعاملين فى الموقع و الموظفين ، وغير مصرحة للاشخاص العاديين " name="description">
    <meta content="تسجيل الدخول,النسب و التحليلات,الشكاوى ,الصفحة الشخصية ,تسجيل الخروج,السلع التموينية ,الجهات التابعة " name="keywords">

    <!-- Favicons -->
    <link href="{{asset("control/assets/img/favicon.png")}}" rel="icon">
    <link href="{{asset("control/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("control/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("control/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
    <link href="{{asset("control/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
    <link href="{{asset("control/assets/vendor/quill/quill.snow.css")}}" rel="stylesheet">
    <link href="{{asset("control/assets/vendor/quill/quill.bubble.css")}}" rel="stylesheet">
    <link href="{{asset("control/assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
    <link href="{{asset("control/assets/vendor/simple-datatables/style.css")}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset("control/assets/css/style.css")}}" rel="stylesheet">
</head>

<body>
@include('include.nave')

@include('include.sidebar')

@yield('page')

@include('include.footer')
</body>
</html>
