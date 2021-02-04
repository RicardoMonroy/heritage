@extends('layouts.app', ['title' => __('Contacto')])

@section('content')
<div class="header bg-gradient-heritage pb-6 pt-5 pt-md-5">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('contact.edit', $contact->id) }}">Contacto</a></li>
                            <li class="breadcrumb-item" aria-current="page">Editar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Contacto</h3>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="{{ route('contact.index') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Información de la sección</h6>
                    <div class="pl-lg-4">
                        <form action="{{ route('contact.update', 1) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-7 col-md-12 center">
                                    <div class="form-group">
                                        <label class="form-control-label" for="address">Domicilio</label>
                                        <input type="text" name="address" id="address" class="form-control" value="{{ $contact->address }}" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="telephone_office">Teléfono Oficina</label>
                                        <input type="text" name="telephone_office" id="telephone_office" class="form-control" value="{{ $contact->telephone_office }}" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="telephone">Móvil</label>
                                        <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $contact->telephone }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="email_admin">Correo administrador</label>
                                        <input type="email" name="email_admin" id="email_admin" class="form-control" value="{{ $contact->email_admin }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="email_sales">Correo de ventas</label>
                                        <input type="email" name="email_sales" id="email_sales" class="form-control" value="{{ $contact->email_sales }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="schedule">Horario</label>
                                        <textarea class="form-control" name="schedule" id="schedule" rows="2">{{ $contact->schedule }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="url">Dirección en Mapa</label>
                                        <textarea class="form-control" name="url" id="url" rows="5">{{ $contact->url }}</textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-5 col-md-12">
                                    <div class="form-group">
                                        <img width="100%" src="{{ asset('storage/'.$contact->picture) }}">
                                        <h4 class="sub-header">Actualizar imágen </h4> <h5>Se recomienda uma iágen de 400 x 600</h5>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="file" class="btn btn-success" id="picture" name="picture">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
