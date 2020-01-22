@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-ls-7">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Creación de ciclo escolar
                        </div>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route' => 'cycle.store']) }}

                            @include('cycle.partials.form')

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection