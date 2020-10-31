@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('FICHA DE ESTUDIO SOCIOECONÓMICO') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/estudiosocioeconimico') }}">
                        {{ csrf_field() }}
                        @include('estudiosocioeconimico.form', ['Modo'=>'crear'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

