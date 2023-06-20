<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibu Sehat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2">Features</a></li>
                <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">login</a>
                {{-- <button type="button" class="btn btn-primary">Sign-up</button> --}}
            </div>
        </header>
    </div>
</head>

<body>
    {{-- <div class="container">
        <h1>Ibu Sehat</h1>
        <p>Aplikasi untuk memantau kesehatan ibu hamil</p>
        <a href="/profil-biodata" class="btn btn-primary">Mulai</a>
    </div> --}}

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72"
            height="57">
        <h1 class="display-5 fw-bold text-body-emphasis">Aplikasi Monitoring Ibu Hamil</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Kami hadir untuk memberikan pengalaman yang nyaman dan aman selama masa kehamilan Anda.
                Dengan fitur-fitur canggih kami, Anda dapat memantau perkembangan kesehatan Anda dan janin secara
                real-time. Kami berkomitmen untuk memberikan perawatan terbaik dan informasi yang dibutuhkan agar Anda
                dapat menjalani kehamilan dengan tenang dan penuh kebahagiaan</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Cek Jadwal Check UP</button>
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> --}}
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
