@extends('layouts.auth')

@section('content')

<div class="page-login">
    <main>
        <div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-8">
                        <div class="login-box">
                            
                            @if ($alert = Session::get('flash_error'))
                              <div class="alert alert-danger text-center">
                                  {{ $alert }}
                              </div>
                            @endif

                            @if ($alert = Session::get('flash_success'))
                              <div class="alert alert-success text-center">
                                  {{ $alert }}
                              </div>
                            @endif
                            
                            <img class="img-responsive" src="{{URL::to('/')}}/images/logo.png" alt=""/>
                            <form class="m-t-md" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Senha" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Login</button>

                                <a href="{{ url('/password/reset') }}" class="display-block text-center m-t-md text-sm"><font color='#ffffff'>Esqueceu a senha?</font></a>
                                <p class="text-center m-t-xs text-sm"><font color='#12AFCB'>Não tem uma conta?</font></p>
                                <a href="{{ url('/register') }}" class="btn btn-info btn-block m-t-md">Criar uma conta</a>
                            </form>
                            <p class="text-center m-t-xs text-sm"><font color='#ffffff'>2018 &copy; ControlTransp.com.br</color></p>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
</div>

@endsection
