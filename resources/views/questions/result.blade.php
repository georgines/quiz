@extends('layouts.frame-dashboard')

@section('styles')

@endsection

@section('title')
    Confira Seus Acertos
@endsection

@section('message')
    Aqui você poderá verificar onde foi que errou.
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Total de Acertos: {{$total}} </h4>
            <div class="row">
                <div class="col-md-12">
                    <!-- Black -->
                    @if(isset($result))
                        <div class="tab-container">
                            <ul class="nav nav-tabs nav-tabs--green nav-fill" role="tablist">
                                @for($i = 0; $i < $length; $i++)
                                    <li class="nav-item">
                                        <a class="nav-link {{$i <= 0 ?'active': ''}}" data-toggle="tab"
                                           href="#tab_{{$i+1}}_6" role="tab">Resposta {{$i+1}} ({{$result[$i]['status']}})</a>
                                    </li>
                                @endfor
                            </ul>
                            <div class="tab-content">
                                @for($i = 0; $i < $length; $i++)
                                    <div class="tab-pane  active fade{{$i == 0 ?' show': ''}}" id="tab_{{$i+1}}_6"
                                         role="tabpanel">
                                        <p>{{$result[$i]['content_of_question']}} </p>
                                        <p>a) {{$result[$i]['a']}} {{$result[$i]['ra']==1?'<- você selecionou esta':''}}</p>
                                        <p>b) {{$result[$i]['b']}} {{$result[$i]['rb']==1?'<- você selecionou esta':''}}</p>
                                        <p>c) {{$result[$i]['c']}} {{$result[$i]['rc']==1?'<- você selecionou esta':''}}</p>
                                        <p>d) {{$result[$i]['d']}} {{$result[$i]['rd']==1?'<- você selecionou esta':''}}</p>
                                        @if(array_key_exists('image_r', $result[$i]))
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <img src="{{$result[$i]['image_r']}}" class="img-fluid"
                                                         alt="Responsive image">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endfor

                            </div>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
