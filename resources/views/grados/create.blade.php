@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('GRADO ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/grados') }}">
                        {{ csrf_field() }}
                        @include('grados.form', ['Modo'=>'crear'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 