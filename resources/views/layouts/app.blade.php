<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.head')
<body class="sb-nav-fixed">
        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 py-4">
                  @yield('content')
                </div>
            </main>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('theme/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('theme/js/datatables-simple-demo.js')}}"></script>

  <script>
  @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
  @endif

  @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
  @endif

  </script>

    @livewireScripts
    @yield('scripts')
</body>
</html>
