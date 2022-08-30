<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - Admin Bootstrap Template</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="backend/assets/img/favicon.png" rel="icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/simple-datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    {{-- summer note --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    @include('backend.layout.header')
    @include('backend.layout.sidebar')
    <main id="main" class="main">
        @yield('b-content')
    </main>
    @include('backend.layout.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('backend/assets/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/echarts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/simple-datatables.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/validate.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/js/logic.js') }}"></script>
    <script>
        $('#summernote').summernote({
          placeholder: 'Description....',
          tabsize: 2,
          height: 120,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
          ]
        });
      </script>
</body>

</html>
