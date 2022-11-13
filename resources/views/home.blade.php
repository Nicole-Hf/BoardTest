@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <a class="btn btn-outline-success" href="#">Unirse a una Sesión</a>
            <a class="btn btn-outline-warning" href="{{ route('sesiones.create') }}">Crear una Sesión</a>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($sesiones as $sesion)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('/welcome/works/1.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $sesion->title }}</h5>
                                            <a href="{{ route('sesiones.show', $sesion->id )}}">Seguir editando</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
