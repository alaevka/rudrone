<!DOCTYPE html>
<html>
    <head>
        <title>rudrone</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">ruDrone</div>
                @if (Auth::check())
                <div><a href="{{ URL::to('staticmap') }}">{{ Lang::get('site/user.staticmap-@underdev') }}</a> | <a href="{{ URL::to('forum') }}">{{ Lang::get('site/user.forum') }}</a> | <a href="{{ URL::to('blog') }}">{{ Lang::get('site/user.blog') }}</a> | <a href="{{ URL::to('signout') }}">{{ Lang::get('site/user.signout') }}</a> </div>

                @else
                <div><a href="{{ URL::to('signin') }}">{{ Lang::get('site/user.signin') }}</a> {{ Lang::get('site/user.or') }} <a href="{{ URL::to('signup') }}">{{ Lang::get('site/user.signup') }}</a></div>
                @endif
            </div>
        </div>
    </body>
</html>
