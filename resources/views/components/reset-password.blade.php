<div class="login__block active" id="l-register">
    <div class="login__block__header palette-Blue bg">
        <i class="zmdi zmdi-account-circle"></i>
        Reset sua senha!

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
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div class="login__block__body">

            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group form-group--float form-group--centered">
                <input type="text" name="email" class="form-control {{$errors->has('email') ? "is-invalid": ""}}" value="{{ $email ?? old('email') }}" autofocus >
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

            <div class="form-group form-group--float form-group--centered">
                <input type="password"  name="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? "is-invalid": ""}}">
                <label>Confirmação da senha</label>
                <i class="form-group__bar"></i>
                @if ($errors->has('password_confirmation'))
                    <div class="invalid-tooltip">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Concluir cadastro</span>
                </label>
            </div>

            <button type="submit" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></button>
        </div>
    </form>
</div>