@extends('layouts.frame-dashboard')

@section('styles')

@endsection

@section('title')
    Cadatrar Questões
@endsection

@section('message')
    Aqui você poderá cadastrar as questões para as atividades.
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <br>
            {!! Form::open(['route' => 'questions.store', 'method' => 'post', 'enctype'=>'multipart/form-data'] ) !!}
            {!! Form::token() !!}
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="select">
                            <select class="form-control" autofocus name="activities_id">
                                <option>Selecione uma atividade à qual pertence essa questão</option>
                                @if(isset($datas))
                                    @foreach($datas  as $data)
                                    <option value="{{$data->id}}">{{$data->name}} ( {{$data->date}} )</option>
                                    @endforeach
                                @endif
                            </select>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                            <textarea rows="5" class="form-control" name="content_of_question" extarea-autosize
                                      placeholder="digite aqui o texto da questão, lembre-se de referenciar as imagens"></textarea>
                        <i class="form-group__bar"></i>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">insira a imagem da questão, se necessário.</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="a" placeholder="texto da letra a)">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="b" placeholder="texto da letra  b)">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c" placeholder="texto da letra  c)">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="d" placeholder="texto da letra  d)">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="tip" placeholder="dica para resolução da questão">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="answer" placeholder="resposta em letra minúscula, Bx: c">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">insira a imagem da resposta da questão, se necessário.</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_r">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')

@endsection
