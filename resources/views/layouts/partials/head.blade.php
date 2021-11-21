<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <link href="{{asset('theme/css/styles.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{asset('js/dataTable/jquery.dataTables.min.js')}}"></script>
    <link href="{{asset('css/dataTable/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @stack('styles')
</head>
