@extends('base')


@section('body')
    <body class="login-body">

    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-signin" role="form" method="POST" action="{{ url('/auth/login') }}">
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="User ID" autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password">

                <label class="checkbox">
                    <input type="checkbox" value="remember-me" name="remember"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
                </label>

                <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
                <p>or you can sign in via social network</p>
                <div class="login-social-link">
                    <a href="index.html" class="facebook">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </a>
                    <a href="index.html" class="twitter">
                        <i class="fa fa-twitter"></i>
                        Twitter
                    </a>
                </div>
                <div class="registration">
                    Don't have an account yet?
                    <a class="" href="registration.html">
                        Create an account
                    </a>
                </div>

            </div>

            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email_reset" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-success" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>


    </body>

@endsection