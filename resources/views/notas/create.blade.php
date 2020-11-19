@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('NOTAS') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/cursos/'.$curso. '/' . $ano .'/notas') }}">
                        {{ csrf_field() }}
                        @include('notas.form', ['Modo'=>'crear'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 