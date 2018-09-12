<div class="login__block active" id="l-forget-password">
    <div class="login__block__header palette-Purple bg">
        <i class="zmdi zmdi-account-circle"></i>
        Esqueceu a senha?

        <div class="actions actions--inverse login__block__actions">
            <div class="dropdown">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('login')}}">Já tem uma conta?</a>
                    <a class="dropdown-item" href="{{route('register')}}">Crie a sua conta aqui</a>
                </div>
            </div>
        </div>
    </div>

    <div class="login__block__body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <p class="mt-4">Digite seu email para recuperação de sua senha, em poucos minutos será enviado um link para seu
            email.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
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

            <button href="" type="submit" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i>
            </button>
        </form>
    </div>
</div>