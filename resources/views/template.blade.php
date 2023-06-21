<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibu Sehat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <h3>prototype</h3>
            </div>


            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ 'utama' }}" class="nav-link px-2 link-secondary ">Home</a></li>
                <li><a href="{{ 'jadwal' }}" class="nav-link px-2 ">Jadwal</a></li>
                {{-- <li><a href="#" class="nav-link px-2 ">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 ">FAQs</a></li> --}}
                <li><a href="{{ 'about' }}" class="nav-link px-2 ">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">login</a>
                {{-- <button type="button" class="btn btn-primary">Sign-up</button> --}}
            </div>
        </header>
    </div>
    @yield('header')
</head>


<body>
    {{-- <div class="container">
        <h1>Ibu Sehat</h1>
        <p>Aplikasi untuk memantau kesehatan ibu hamil</p>
        <a href="/profil-biodata" class="btn btn-primary">Mulai</a>
    </div> --}}




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

@yield('content')


<footer class="py-3 my-4">
    {{-- <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul> --}}
    <p class="text-center text-body-secondary">© 2023 Tesar, Inc</p>
</footer>


@yield('footer')

</html>
