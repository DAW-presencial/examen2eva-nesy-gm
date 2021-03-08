@extends('layouts.layout')

@section('contenido')
<h1>{{__('datosempresa.titulo_datos_emp')}}</h1>


@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif






<form method="post" action="{{route('tutores')}}">


            @csrf
            <fieldset class="border p-2">
                 <legend>Tutores</legend>




                <div class="form-group">
                    <label for="empresa" class="form-label">{{__('tutores.empresa')}}Empresa</label>
                    <input class="form-control" name="empresa" value="{{old('empresa')}}" id="empresa" aria-describedby="Empresa">
                </div>
                <div class="form-group">
                    <label for="empresa" class="form-label">Tipo documento</label>
                    <input class="form-control" name="empresa" value="{{old('documento')}}" id="empresa" aria-describedby="documento">
                </div>
                <div class="form-group">
                    <label for="empresa" class="form-label">Nombre</label>
                    <input class="form-control" name="empresa" value="{{old('nombre_tutor_emp')}}" id="nombre_tutor_emp" aria-describedby="nombre_tutor_emp">
                </div>
                <div class="form-group">
                    <label for="apellido1_tutor_emp" class="form-label">Apellido 1</label>
                    <input class="form-control" name="apellido1_tutor_emp" value="{{old('apellido1_tutor_emp')}}" id="apellido1_tutor_emp" aria-describedby="apellido1_tutor_emp">
                </div>
            <div class="form-group">
                    <label for="apellido1_tutor_emp" class="form-label">Apellido </label>
                    <input class="form-control" name="apellido2_tutor_emp" value="{{old('apellido2_tutor_emp')}}" id="apellido2_tutor_emp" aria-describedby="apellido2_tutor_emp">
                </div>
                     <div class="form-group">
                    <label for="pais_documento" class="form-label">Pais </label>
                    <input class="form-control" name="pais_documento" value="{{old('pais_documento')}}" id="pais_documento" aria-describedby="pais_documento">
                </div>


                <div class="form-group">
                    <label for="status" class="form-label">Estado</label>
                    <select class="form-control" name='status' id="status">
                        <option value="activo" @if (old('status') === 'activo') selected @endif>Activo</option>
                        <option value="inactivo" @if (old('status') === 'inactivo') selected @endif>Inactivo</option>
                    </select>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Enviar</button>

            </form>





            @endsection
