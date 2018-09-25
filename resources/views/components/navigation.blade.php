<ul class="navigation">
    <li class="navigation__active"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> Inicio</a></li>


    <li class="navigation__sub ">
        <a href=""><i class="zmdi zmdi-account"></i> Usuários</a>
        <ul>
            <li><a href="{{route('user')}}">Listar</a></li>
            <li><a href="{{route('user.create')}}">Cadastrar</a></li>
        </ul>
    </li>
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

    <li class="navigation"><a id="disparar"><i class="zmdi zmdi-close"></i> Sair</a ></li>

    <form method="POST" id="alvo" action="{{ route('logout') }}">
    @csrf
    </form>



</ul>