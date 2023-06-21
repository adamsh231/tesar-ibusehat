<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body style="background-color:khaki;">

    <img src="{{ asset('/img/soon.jpg') }}" width="600" height="337" style="width: 600px; height: 337px;"
        alt="">
    <div class="card">
        <h5 class="card-header">Fitur Dalam Pembangunan</h5>
        <div class="card-body">
            {{-- <h5 class="card-title"></h5> --}}
            <p class="card-text">Hubungi Developer untuk masalah fitur yang masih dalam maintaince</p>
            <a href="{{ url()->previous() }}" class="btn btn-primary">KEMBALI</a>
        </div>
    </div>
</body>

@yield('content')

</html>
