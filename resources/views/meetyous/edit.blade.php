@extends('layouts.app', ['title' => __('Conocerte')])

@section('content')
<div class="header bg-gradient-heritage pb-6 pt-5 pt-md-5">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('meetyous.edit', $meetyou->id) }}">Conocerte</a></li>
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
                            <h3 class="mb-0">Conocerte</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('meetyous.index') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Información de la sección</h6>
                    <div class="pl-lg-4">
                        <form action="{{ route('meetyous.update', $meetyou->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-7 col-md-12 center">
                                    <div class="form-group">
                                        <label class="form-control-label" for="h5">Título</label>
                                        <input type="text" name="h5" id="h5" class="form-control" value="{{ $meetyou->title }}" autofocus="">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="form-control-label" for="h2">Subtítulo</label>
                                        <input type="text" name="h2" id="h2" class="form-control" value="{{ $meetyou->h2 }}" >
                                    </div> -->
                                    <div class="form-group">
                                        <label class="form-control-label" for="goal_fisrt">Primer párrafo</label>
                                        <textarea class="form-control" name="goal_fisrt" id="goal_fisrt" rows="2">{{ $meetyou->goal_fisrt }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="goal_second">Segundo párrafo</label>
                                        <textarea class="form-control" name="goal_second" id="goal_second" rows="2">{{ $meetyou->goal_second }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="goal_third">Tercér párrafo</label>
                                        <textarea class="form-control" name="goal_third" id="goal_third" rows="2">{{ $meetyou->goal_third }}</textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-5 col-md-12">
                                    <div class="form-group">
                                        <img width="100%" src="{{ asset('storage/'.$meetyou->picture) }}">
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
