@extends('layouts.frame-dashboard')

@section('styles')

@endsection

@section('title')
    Teste Seus Conhecimentos
@endsection

@section('message')
    Aqui você poderá avaliar seu conhecimento atavés de algumas questões.
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$activitie->name}}</h4>
            <div class="row">
                <div class="col-md-12">
                    <!-- Black -->
                    @if(isset($questions))
                        {!! Form::open(['route' => 'questions.result', 'method' => 'post'] ) !!}
                        {!! Form::token() !!}
                        <input type="text" hidden name="length" value="{{$length}}">
                        <input type="text" hidden name="discipline_name" value="{{$activitie->name}}">
                        <button type="submit" class="btn btn-primary">Enviar Todas as Repostas</button>
                        <br>
                        <br>
                        <br>
                        <div class="tab-container">
                            <ul class="nav nav-tabs nav-tabs--green nav-fill" role="tablist">
                                @for($i = 0; $i < $length; $i++)
                                    <li class="nav-item">
                                        <a class="nav-link {{$i <= 0 ?'active': ''}}" data-toggle="tab"
                                           href="#tab_{{$i+1}}_6" role="tab">Pergunta {{$i+1}}</a>
                                    </li>
                                @endfor
                            </ul>
                            <div class="tab-content">
                                @for($i = 0; $i < $length; $i++)
                                    <div class="tab-pane  active fade{{$i == 0 ?' show': ''}}" id="tab_{{$i+1}}_6"
                                         role="tabpanel">

                                        <input type="text" hidden name="content_of_question_{{$i+1}}"
                                               value="{{$questions[$i]['content_of_question']}}">

                                        <h5><code>Marque Apenas uma alternativa por questão, marcando duas alternativas,
                                                a ou nenhuma, a pergunta
                                                será considerada inválida.</code></h5>
                                        <h6>{{$questions[$i]['content_of_question']}} </h6>
                                        @if(array_key_exists('tip', $questions[$i]))
                                            <p><strong>Dica: {{$questions[$i]['tip']}} </strong></p>
                                        @endif
                                        @if(array_key_exists('image', $questions[$i]))
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <img src="{{$questions[$i]['image']}}" class="img-fluid"
                                                         alt="Responsive image">
                                                </div>
                                            </div>
                                        @endif
                                        <input type="text" hidden name="answer_{{$i+1}}"
                                               value="{{$questions[$i]['answer']}}">
                                        <input type="text" hidden name="image_r_{{$i+1}}"
                                               value="{{$questions[$i]['image_r']}}">
                                        <br>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="checkbox checkbox--inline">
                                                    <input type="checkbox" name="ra_{{$i+1}}"
                                                           id="customCheck1_{{$i+1}}">
                                                    <input type="text" hidden name="a_{{$i+1}}"
                                                           value="{{$questions[$i]['a']}}">
                                                    <label class="checkbox__label"
                                                           for="customCheck1_{{$i+1}}">a) {{$questions[$i]['a']}} </label>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="checkbox checkbox--inline">
                                                    <input type="checkbox" name="rb_{{$i+1}}"
                                                           id="customCheck2_{{$i+1}}">
                                                    <label class="checkbox__label"
                                                           for="customCheck2_{{$i+1}}">b) {{$questions[$i]['b']}}</label>
                                                    <input type="text" hidden name="b_{{$i+1}}"
                                                           value="{{$questions[$i]['b']}}">
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="checkbox checkbox--inline">
                                                    <input type="checkbox" name="rc_{{$i+1}}"
                                                           id="customCheck3_{{$i+1}}">
                                                    <input type="text" hidden name="c_{{$i+1}}"
                                                           value="{{$questions[$i]['c']}}">
                                                    <label class="checkbox__label"
                                                           for="customCheck3_{{$i+1}}">c) {{$questions[$i]['c']}}</label>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="checkbox checkbox--inline">
                                                    <input type="checkbox" name="rd_{{$i+1}}"
                                                           id="customCheck4_{{$i+1}}">
                                                    <input type="text" hidden name="d_{{$i+1}}"
                                                           value="{{$questions[$i]['d']}}">
                                                    <label class="checkbox__label"
                                                           for="customCheck4_{{$i+1}}">d) {{$questions[$i]['d']}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        {!! Form::close() !!}
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
