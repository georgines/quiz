<ul class="navigation">
    <li class="navigation__active"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>Inicio</a></li>

    <li><a href="{{route('user')}}"><i class="zmdi zmdi-assignment-check"></i>Usuários</a></li>
    {{--<li class="navigation__sub ">--}}
        {{--<a href=""><i class="zmdi zmdi-account"></i> Usuários</a>--}}
        {{--<ul>--}}
            {{--<li><a href="">Listar</a></li>--}}
            {{--<li><a href="">Cadastrar</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
    <li class="navigation__sub">
        <a href=""><i class="zmdi zmdi-assignment"></i>Atividades</a>
        <ul>
            <li><a href="{{route('assessments')}}">Listar</a></li>
            <li><a href="{{route('assessments.create')}}">Cadastrar</a></li>
        </ul>
    </li>

    <li class="navigation__sub">
        <a href=""><i class="zmdi zmdi-format-list-numbered"></i>Questões</a>
        <ul>
            <li><a href="{{route('questions')}}">Listar</a></li>
            <li><a href="{{route('questions.create')}}">Cadastrar</a></li>

        </ul>
    </li>
    <li><a href="{{route('questions.solve')}}"><i class="zmdi zmdi-assignment-check"></i>Testar Conhecimento</a></li>

    <li class="navigation"><a id="disparar"><i class="zmdi zmdi-close"></i> Sair</a ></li>

    <form method="POST" id="alvo" action="{{ route('logout') }}">
    @csrf
    </form>



</ul>