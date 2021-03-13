@extends('layout')
@section('title','Centro Docente')
@section('land','Crear centro docente')
@section('content')

<h1 class="text mx-3 mt-20">{{__('Centro')}}</h1>

<div class="row d-flex justify-content-center">
    {{-- <h2 class="text-center mt-20">{{__('_titulo')}}</h2> --}}
    <div class="col-11 col-md-10">
        <!-- array de errores -->
        <p class="text-warning">
            @if ($errors->any())
            <ul class="list-group list-unstyled text-warning">{{__('cen_docente_errores')}}
                @foreach ($errors->all() as $error)
                <li class="border-none px-3">&#8594; <span class="text-muted">{{$error}}</span></li>
                @endforeach
            </ul>
            <hr/>
            @endif
        </p>

        <!-- aviso de éxito al crear un centro docente y se guarda -->
        <div class="text-warning">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>

        <!-- formulario -->
        <form method="post" action="{{ route('cen_docentes.store') }}">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-4 form-group">
                        <label for="denominacion"><b>{{__('Denominacion')}}</b></strong></label>
                        <input type="text" class="form-control" id="denominacion" name="denominacion" value="{{old('denominacion')}}" required />
                        <p class="text-warning small">{{$errors->first('denominacion')}}</p>
                    </div>
                    <div class="col-4 form-group">
                        <label for="codigo">{{__('Codigo')}}</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" value="{{old('codigo')}}" required/>
                        <p class="text-warning small">{{$errors->first('codigo')}}</p>
                    </div>
                    <div class="col-4 form-group">
                        <label for="cif">{{__('CIF')}}</label>
                        <input type="text" class="form-control" id="cif" name="cif" value="{{old('cif')}}" required/>
                        <p class="text-warning small">{{$errors->first('cif')}}</p>
                    </div>
                    <div class="col-4 form-group">
                        <label for="titularidad" class="form-label">{{__('Titularidad')}}</label>
                        <select class="form-control" name='titularidad' id="titularidad">
                            <option value="publica" @if (old('titularidad') === 'publica') selected @endif>{{__('Privada')}}</option>
                            <option value="privada" @if (old('titularidad') === 'privada') selected @endif>{{__('Privada')}}</option>
                            <option value="concertada" @if (old('titularidad') === 'concertada') selected @endif>{{__('Concertada')}}</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                   <div class="col-4 form-group">
                    <label for="dir_postal">{{__('Direción postal')}}</label>
                    <input type="text" class="form-control" id="dir_postal" name="provincia" value="{{old('dir_postal')}}" />
                    <p class="text-warning small">{{$errors->first('dir_postal')}}
                    </div>
                    <div class="col-4 form-group">
                        <label for="cp">{{__('CP')}}</label>
                        <input type="text" class="form-control" id="cp" name="pais_doc" value="{{old('cp')}}" />
                        <p class="text-warning small">{{$errors->first('cp')}}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-4 form-group">
                        <label for="nombre_director"><strong>{{__('Nombre')}}</strong></label>
                        <input type="text" class="form-control" id="nombre_director" name="nombre_director" value="{{old('nombre_director')}}" required />

                        <p class="text-warning small">{{$errors->first('nombre_director')}}</p>
                    </div>
                    <div class="col-4 form-group">
                        <label for="apellido1_director">{{__('Apellido 1')}}</label>
                        <input type="text" class="form-control" id="apellido1_director" name="apellido1_director" value="{{old('apellido1_director')}}" required/>
                        <p class="text-warning small">{{$errors->first('apellido1_director')}}
                    </div>
                    <div class="col-4 form-group">
                            <label for="apellido2_director">{{__('Apellido 2')}}</label>
                            <input type="text" class="form-control" id="apellido2_director" name="apellido2_director" value="{{old('apellido2_director')}}" />
                            <p class="text-warning small">{{$errors->first('apellido2_director')}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 form-group">
                            <label for="identificador">{{__('Identificador')}}</label>
                            <input type="text" class="form-control" id="num_doc" name="num_doc" value="{{old('identificador')}}" required />
                            <p class="text-warning small">{{$errors->first('identificador')}}</p>
                    </div>
                    <div class="col-4 form-group">
                            <label for="tipo_identificador">{{__('Tipo identificador')}}</label>
                            <select class="form-control" name='identificador' id="tipo_identificador">
                                <option value="dni" @if (old('tipo_identificador') === 'dni') selected @endif>Dni</option>
                                <option value="nie" @if (old('tipo_identificador') === 'nie') selected @endif>Nie</option>
                                <option value="pasaporte" @if (old('tipo_identificador') === 'pasaporte') selected @endif>Pasaporte</option>
                                <option value="sin_espefificar" @if (old('tipo_identificador') === 'sin_espefificar') selected @endif>Sin especificar</option>
                            </select>
                            <p class="text-warning small">{{$errors->first('tipo_identificador')}}</p>
                    </div>

                    <div class="d-flex justify-content-end p-3">
                            {{-- <button type="reset" class="btn btn-dark mx-3">Borrar</button> --}}
                            <button type="submit" class="btn btn-dark mx-3">Enviar</button>
                    </div>
                </div>
            </div>
        </form>


                @endsection
