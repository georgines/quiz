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
                            <select class="form-control {{$errors->has('a') ? "is-invalid": ""}}" autofocus name="activities_id">
                                <option>Selecione uma atividade à qual pertence essa questão</option>
                                @if(isset($datas))
                                    @foreach($datas  as $data)
                                        <option value="{{$data->id}}">{{$data->name}} ( {{$data->date}} )</option>
                                    @endforeach
                                @endif
                            </select>

                            <i class="form-group__bar"></i>
                            @if ($errors->has('activities_id'))
                                <div class="invalid-tooltip">
                                    {{ $errors->first('activities_id') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::textarea('content_of_question',null,['rows'=>'5','class'=>'form-control ' .($errors->has('b') ? "is-invalid": ""), 'placeholder'=>'digite aqui o texto da questão, lembre-se de referenciar as imagens','extarea-autosize']) !!}
                            {{--<textarea rows="5" class="form-control" name="content_of_question" extarea-autosize--}}
                                      {{--placeholder="digite aqui o texto da questão, lembre-se de referenciar as imagens"></textarea>--}}
                        <i class="form-group__bar"></i>
                        @if ($errors->has('content_of_question'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('content_of_question') }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">insira a imagem da questão, se necessário.</label>
                        {!! Form::file('image', ['class'=>'form-control-file '.($errors->has('image') ? "is-invalid": "")]) !!}
                        {{--<input type="file" class="form-control-file {{$errors->has('image') ? "is-invalid": ""}}" id="exampleFormControlFile1" name="image">--}}
                        @if ($errors->has('image'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('image') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::text('a',null,['class'=>'form-control ' .($errors->has('a') ? "is-invalid": ""), 'placeholder'=>'texto da letra a']) !!}
                        <i class="form-group__bar"></i>
                        @if ($errors->has('a'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('a') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::text('b',null,['class'=>'form-control ' .($errors->has('b') ? "is-invalid": ""), 'placeholder'=>'texto da letra b']) !!}
                        <i class="form-group__bar"></i>
                        @if ($errors->has('b'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('b') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::text('c',null,['class'=>'form-control ' .($errors->has('c') ? "is-invalid": ""), 'placeholder'=>'texto da letra c']) !!}
                        <i class="form-group__bar"></i>
                        @if ($errors->has('c'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('c') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::text('d',null,['class'=>'form-control ' .($errors->has('d') ? "is-invalid": ""), 'placeholder'=>'texto da letra d']) !!}
                        <i class="form-group__bar"></i>
                        @if ($errors->has('d'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('d') }}
                            </div>
                        @endif
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
                        {!! Form::text('answer',null,['class'=>'form-control ' .($errors->has('answer') ? "is-invalid": ""), 'placeholder'=>'resposta em letra minúscula, Ex: c']) !!}
                        <i class="form-group__bar"></i>
                        @if ($errors->has('answer'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('answer') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">insira a imagem da resposta da questão, se
                            necessário.</label>
                        {!! Form::file('image_r', ['class'=>'form-control-file '.($errors->has('image') ? "is-invalid": "")]) !!}
                        @if ($errors->has('image_r'))
                            <div class="invalid-tooltip">
                                {{ $errors->first('image_r') }}
                            </div>
                        @endif
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
