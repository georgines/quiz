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
            <form>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Nome da atividade. Ex: trigonometria" autofocus>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                            </div>
                            {{--<input type="date" class="form-control hidden-md-up" placeholder="Pick a date">--}}
                            <input type="text" name="date" class="form-control date-picker " placeholder="Data de execução">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    {{Html::script('vendors/flatpickr/flatpickr.min.js')}}
@endsection
