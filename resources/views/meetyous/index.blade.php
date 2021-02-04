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
                            <li class="breadcrumb-item"><a href="{{ route('meetyous.index') }}">Conocerte</a></li>
                            <li class="breadcrumb-item" aria-current="page">Listado</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Objetivos</h3>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="{{ route('companies.create') }}" class="btn btn-sm btn-primary">Nueva empresa</a>
                        </div> --}}
                    </div>
                </div>

                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <!-- <th scope="col">Portada</th> -->
                                <th scope="col">Nombre</th>
                                <th style="max-width: 50%;" scope="col">Objetivos</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meetyous as $meet)
                                <tr>
                                    <!-- <td style="max-width: 50px;"><img src="{{ asset('storage/'.$meet->picture) }}" alt="" style="width: 100%"></td> -->
                                    <td style="vertical-align:middle;">{{ $meet->title }}</td>
                                    <td>
                                        {{ Str::limit($meet->goal_fisrt, 30) }} </br> 
                                        {{ Str::limit($meet->goal_second, 30) }} </br>
                                        {{ Str::limit($meet->goal_third, 30) }}
                                    </td>
                                    <td class="table-actions text-right" style="width: 150px">
                                        <div class="row">
                                            {{-- <div class="col-sm-12"> --}}
                                                <div class="col-sm-6">
                                                    <a href="{{ route('meetyous.edit', $meet->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="Editar">
                                                        <i class="fas fa-user-edit"></i>
                                                    </a>
                                                </div>
                                                {{-- <div class="col-sm-6">
                                                    <form action="{{ route('meetyous.destroy', $meet->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="Eliminar">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div> --}}
                                            {{-- </div> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection
