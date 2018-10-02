@extends('layouts.frame-dashboard')

@section('styles')
    {{ Html::style('vendors/flatpickr/flatpickr.min.css') }}
@endsection

@section('title')
    Cadatrar Atividades
@endsection

@section('message')
    Aqui você poderá cadastrar as atividades para os usuários do sistema.
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <br>
            {!! Form::open(['route' => 'assessments.store', 'method' => 'post']) !!}
            {!! Form::token() !!}
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::text('name',null,['class'=>'form-control ' .($errors->has('name') ? "is-invalid": ""), 'placeholder'=>'Nome da atividade. Ex: trigonometria', 'autofocus']) !!}
                            <i class="form-group__bar"></i>
                            @if ($errors->has('name'))
                                <div class="invalid-tooltip">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                            </div>
                            {!! Form::date('date',null,['class'=>'form-control ' .($errors->has('date') ? "is-invalid": ""), 'placeholder'=>'Nome da atividade. Ex: trigonometria', 'autofocus']) !!}
                            @if ($errors->has('date'))
                                <div class="invalid-tooltip">
                                    {{ $errors->first('date') }}
                                </div>
                            @endif


                            {{--<input type="text" name="date" class="form-control date-picker " placeholder="Data de execução">--}}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    {{Html::script('vendors/flatpickr/flatpickr.min.js')}}
@endsection
