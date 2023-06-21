@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <h5>PASIEN</h5>
                            @can('isAdmin')
                                <a class="btn btn-primary" href="{{ route('biodata.index') }}" role="button">DATA PASIEN</a>
                            @endcan
                            <a class="btn btn-primary" href="{{ route('checkup.index') }}" role="button">data chekup</a>
                            {{-- <a class="btn btn-primary" href="{{ route('pasien.index') }}">Pasien</a> --}}
                            <a class="btn btn-primary" href="#" role="button">JADWAL CHECKUP</a>
                            <a class="btn btn-primary" href="#" role="button">Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
