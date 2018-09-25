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
            <form>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="select">
                                <select class="form-control" autofocus name="id_atividade">
                                    <option>Selecione uma atividade à qual pertence essa questão</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea rows="5" class="form-control" name="conteudo_questao" extarea-autosize
                                      placeholder="digite aqui o texto da questão, lembre-se de referenciar as imagens"></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">insira a imagem da questão, se necessário.</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="A" placeholder="A">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox checkbox--inline">
                            <input type="checkbox" name="R_A" id="customCheck1">
                            <label class="checkbox__label" for="customCheck1">Marque esta, se for a reposta correta</label>
                        </div>

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="B" placeholder="B">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox checkbox--inline">
                            <input type="checkbox" name="R_B" id="customCheck2">
                            <label class="checkbox__label" for="customCheck2">Marque esta, se for a reposta correta</label>
                        </div>

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="C" placeholder="C">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox checkbox--inline">
                            <input type="checkbox" name="R_C" id="customCheck3">
                            <label class="checkbox__label" for="customCheck3">Marque esta, se for a reposta correta</label>
                        </div>

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="D" placeholder="D">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox checkbox--inline">
                            <input type="checkbox" name="R_D" id="customCheck4">
                            <label class="checkbox__label" for="customCheck4">Marque esta, se for a reposta correta</label>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
