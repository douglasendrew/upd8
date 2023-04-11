{{-- Layout base para aplicações --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Titulo --}}
    <title>{{ config('app.name') }} | @yield('page_name') </title>
</head>
<body>
    
    <main class="container mt-5">
        <a href="{{ route('homeClientes') }}">
            <img src="{{ asset('img/logo-Upd8.png') }}" alt="" class="mb-3">
        </a>

        @if ($errors->any())
            @foreach ($errors->all() as $item)
                <div class="col-12 alert alert-danger mt-2 text-center" role="alert">
                    {{ $item }}
                </div>
            @endforeach
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show text-white text-center" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif 

        @yield('page_content')
    </main>

    <footer class="text-center mt-5">
        <p>Desenolvido por <a href="https://github.com/douglasendrew" target="_blank">Douglas Endrew</a></p>
    </footer>

    {{-- Scripts --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
</body>
</html>