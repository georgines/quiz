@extends('layouts.frame-dashboard')

@section('styles')
@endsection

@section('title')
    Editar Usuários
@endsection

@section('message')
    Aqui você poderá modificar as informações dos usuários do sistema.
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <br>
            <form>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="name" placeholder="Nome" autofocus>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Senha">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirm" placeholder="Confirmação da senha">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <input type="checkbox"  name="admin_check" id="gridCheck">
                        <label class="checkbox__label" for="gridCheck">
                            Marque para cadastrar como administrador
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
