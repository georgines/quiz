@extends('layouts.frame-dashboard')

@section('styles')
@endsection

@section('title')
    Lista de atividades
@endsection

@section('message')
    Aqui você encontra a lista de todas as atividades realizadas no sistema, fique livre para <code>editar</code> ou
    <code>remover</code>.
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($activities))
                    @foreach($activities as $activite)
                        <tr>
                            <th scope="row">{{$activite->id}}</th>
                            <td>{{$activite->name}}</td>
                            <td>{{$activite->date}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach()
                @endif

                </tbody>
            </table>


        </div>
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item pagination-first"><a class="page-link" href="#"></a></li>
                <li class="page-item pagination-prev"><a class="page-link" href="#"></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item pagination-next"><a class="page-link" href="#"></a></li>
                <li class="page-item pagination-last"><a class="page-link" href="#"></a></li>
            </ul>
        </nav>
    </div>
@endsection

@section('scripts')
@endsection
