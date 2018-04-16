@extends('layouts.adminLayout')

@section('body')
    <body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{route('authenticate')}}">
                        {{csrf_field()}}
                        <h1>Admin Login</h1>
                        @if(!empty($message))
                            <p class="alert alert-danger"> {{$message}}</p>
                        @endif
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" name="username" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                        </div>
                        <button class="btn btn-default submit">
                            Login
                        </button>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <div>
                                <h1><i></i> Apptimus Têch</h1>
                                <p>©2018 All Rights Reserved.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>

    </body>

@endsection
