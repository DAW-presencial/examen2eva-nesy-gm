@extends('layout')
@section('title','Tutores')
@section('land','Crear tutores')
@section('content')

<h1 class="text mx-3 mt-20">{{__('Tutor')}}</h1>

<div class="row d-flex justify-content-center">
    {{-- <h2 class="text-center mt-20">{{__('tutores_titulo')}}</h2> --}}
    <div class="col-11 col-md-10">
        <!-- array de errores -->
        <p class="text-warning">
            @if ($errors->any())
            <ul class="list-group list-unstyled text-warning">{{__('tutores_errores')}}
                @foreach ($errors->all() as $error)
                <li class="border-none px-3">&#8594; <span class="text-muted">{{$error}}</span></li>
                @endforeach
            </ul>
            <hr/>
            @endif
        </p>

        <!-- aviso de éxito al crear un tutor y se guarda -->
        <div class="text-warning">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>

        <!-- formulario -->
        <form method="post" action="{{ route('tutores.store') }}">
            @csrf
            <div class="form-group">
                <label for="empresa"><b>{{__('Empresa')}}</b></label>
                <input type="text" class="form-control" id="empresa" name="empresa" value="{{old('empresa')}}" required />
                <p class="text-warning small">{{$errors->first('empresa')}}</p>
            </div>
            <div class="row">

                <div class="row">
                    <div class="col-4 form-group">
                        <label for="documento">{{__('Documento')}}</label>
                        <select class="form-control" name='documento' id="documento">
                            <option value="dni" @if (old('documento') === 'dni') selected @endif>Dni</option>
                            <option value="nie" @if (old('documento') === 'nie') selected @endif>Nie</option>
                            <option value="pasaporte" @if (old('documento') === 'pasaporte') selected @endif>Pasaporte</option>
                            <option value="sin_espefificar" @if (old('documento') === 'sin_espefificar') selected @endif>Sin especificar</option>
                        </select>
                        {{-- <input type="text" class="form-control" id="documento" name="documento" value="{{old('documento')}}" /> --}}
                        <p class="text-warning small">{{$errors->first('documento')}}</p>
                    </div>
                    <div class="col-8 form-group">
                        <label for="num_doc">{{__('Nº documento')}}</label>
                        <input type="text" class="form-control" id="num_doc" name="num_doc" value="{{old('num:_doc')}}" required />
                        <p class="text-warning small">{{$errors->first('num_doc')}}</p>
                    </div>
                    <div class="col-4 form-group">
                        <label for="nombre_tutor_emp"><strong>{{__('Nombre')}}</strong></label>
                        <input type="text" class="form-control" id="nombre_tutor_emp" name="nombre_tutor_emp" value="{{old('nombre_tutor_emp')}}" required />

                        <p class="text-warning small">{{$errors->first('nombre_tutor_emp')}}</p>

                        <div class="col-4 form-group">
                            <label for="apellido1_tutor_emp">{{__('Apellido 1')}}</label>
                            <input type="text" class="form-control" id="apellido1" name="apellido1_tutor_emp" value="{{old('apellido1_tutor_emp')}}" required/>
                            <p class="text-warning small">{{$errors->first('apellido1_tutor_emp')}}
                            </div>
                            <div class="col-4 form-group">
                                <label for="apellido2_tutor_emp">{{__('Apellido 2')}}</label>
                                <input type="text" class="form-control" id="apellido2_tutor_emp" name="apellido2_tutor_emp" value="{{old('apellido2_tutor_emp')}}" />
                                <p class="text-warning small">{{$errors->first('apellido2_tutor_emp')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <label for="pais_doc">{{__('Pais')}}</label>
                            <input type="text" class="form-control" id="pais_doc" name="pais_doc" value="{{old('pais_doc')}}" />
                            <p class="text-warning small">{{$errors->first('pais_doc')}}
                            </div>
                        </div>
                        <div class="col-4 form-group">
                            <label for="municipio">{{__('Municipio')}}</strong></label>
                            <input type="text" class="form-control" id="municipio" name="municipio" value="{{old('municipio')}}" />
                            <p class="text-warning small">{{$errors->first('municipio')}}</p>
                        </div>
                        <div class="col-4 form-group">
                            <label for="provincia">{{__('Provincia')}}</label>
                            <input type="text" class="form-control" id="provincia" name="provincia" value="{{old('provincia')}}" />
                            <p class="text-warning small">{{$errors->first('provincia')}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="telefono">{{__('Telefono')}}</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" required />
                                <p class="text-warning small">{{$errors->first('telefono')}}</p>
                            </div>
                            <div class="col-6 form-group">
                                <label for="email">{{__('Email')}}</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" required />
                                <p class="text-warning small">{{$errors->first('email')}}
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="status" class="form-label">{{__('Estado')}}</label>
                                <select class="form-control" name='status' id="status">
                                    <option value="activo" @if (old('estado') === 'activo') selected @endif>{{__('Activo')}}</option>
                                    <option value="inactivo" @if (old('status') === 'inactivo') selected @endif>{{__('Inactivo')}}</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end p-3">
                                {{-- <button type="reset" class="btn btn-dark mx-3">Borrar</button> --}}
                                <button type="submit" class="btn btn-dark mx-3">Enviar</button>
                            </div>
                        </form>
                    </div>

                    @endsection