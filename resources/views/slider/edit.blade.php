@extends('layouts.app', ['title' => __('Slider')])

@section('content')
<div class="header bg-gradient-heritage pb-6 pt-5 pt-md-5">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('slider.edit', $slider->id) }}">Slider</a></li>
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
                            <h3 class="mb-0">Slider & Social</h3>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="{{ route('about.index') }}" class="btn btn-sm btn-primary">Regresar</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Información de la sección</h6>
                    <div class="pl-lg-4">
                        <form action="{{ route('slider.update', 1) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div-row>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <img width="100%" src="{{ asset('storage/'.$slider->banner) }}">
                                        <h4 class="sub-header">Actualizar imágen </h4> <h5>Se recomienda uma iágen de 1920 x 1080</h5>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="file" class="btn btn-success" id="picture" name="picture">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div-row>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="facebook">Facebook</label>
                                        <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $slider->facebook }}" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="twitter">Twitter</label>
                                        <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $slider->twitter }}" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="youtube">Youtube</label>
                                        <input type="text" name="youtube" id="youtube" class="form-control" value="{{ $slider->youtube }}" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="linkedin">LinkedIn</label>
                                        <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $slider->linkedin }}" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="instagram">Instagram</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $slider->instagram }}" >
                                    </div>
                                </div>
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
