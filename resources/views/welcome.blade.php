<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="{{asset("semantic/out/semantic.min.css")}}" >
        <link rel="stylesheet" type="text/css" href="{{asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")}}" >
        <script src="{{asset("js/jquery-3.1.1.min.js")}}"></script>
        <script src="{{asset("bootstrap-3.3.7-dist/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("semantic/out/semantic.min.js")}}"></script>
        <script src="{{asset("bundle.js")}}"></script>
    </head>
    <body>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
                <img class="image">
                <div class="content">
                   登录
                </div>
            </h2>
            <form class="ui large form">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail address">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="ui fluid large teal submit button">Login</div>
                </div>

                <div class="ui error message"></div>

            </form>

            <div class="ui message">
                注册新账号? <a href="#"><b>去注册</b></a>
            </div>
        </div>
    </div>
    @include('public/footer')
    </body>
</html>

