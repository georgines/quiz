<div class="login__block active" id="l-login">



    <div class="login__block__header">
        <i class="zmdi zmdi-account-circle"></i>
        Olá! Por favor, inscreva-se
        @if (Route::has('login'))
        <div class="actions actions--inverse login__block__actions">
            <div class="dropdown">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('register') }}">Criar uma conta</a>
                    <a class="dropdown-item" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                </div>
            </div>
        </div>
        @endif

    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="login__block__body ">
        <div class="form-group form-group--float form-group--centered">
            <input type="text"  name="email" class="form-control {{$errors->has('email') ? "is-invalid": ""}}" autofocus>
            <label>Endereço de e-mail</label>
            <i class="form-group__bar"></i>
            @if ($errors->has('email'))
                <div class="invalid-tooltip">
                    {{ $errors->first('email') }}
                </div>
            @endif

        </div>

        <div class="form-group form-group--float form-group--centered">
            <input type="password" name="password" class="form-control {{$errors->has('password') ? "is-invalid": ""}}">
            <label>Senha</label>
            <i class="form-group__bar"></i>
            @if ($errors->has('password'))
                <div class="invalid-tooltip">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i>
        </button>
    </div>
    </form>
</div>