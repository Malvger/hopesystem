@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('DATOS DEL ESTUDIANTE ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('estudiantes/'.$estudiante->id.'/edit') }}">
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}
                        @include('estudiantes.form', ['Modo'=>'modificar'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

