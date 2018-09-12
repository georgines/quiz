<ul class="navigation">
    <li class="navigation__active"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> Inicio</a></li>


    <li class="navigation__sub ">
        <a href=""><i class="zmdi zmdi-account"></i> Usuário</a>
        <ul>
            <li><a href="{{route('user')}}">Listar</a></li>
            <li><a href="{{route('user.create')}}">Cadastrar</a></li>
        </ul>
    </li>
    <li class="navigation__sub">
        <a href=""><i class="zmdi zmdi-assignment"></i>Avaliações</a>
        <ul>
            <li><a href="{{route('Assessments')}}">Listar</a></li>
            <li><a href="{{route('Assessments.create')}}">Cadastrar</a></li>
        </ul>
    </li>

    <li class="navigation"><a id="disparar"><i class="zmdi zmdi-close"></i> Sair</a ></li>

    <form method="POST" id="alvo" action="{{ route('logout') }}">
    @csrf
    </form>



</ul>