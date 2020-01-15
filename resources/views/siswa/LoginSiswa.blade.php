<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Siswa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Style -->
        <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }
    
                .full-height {
                    height: 100vh;
                }
    
                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }
    
                .position-ref {
                    position: relative;
                }
    
                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }
    
                .content {
                    text-align: center;
                }
    
                .title {
                    font-size: 84px;
                }
    
                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        
    </head>

    <body class="text-center">
        
        <div class="flex-center position-ref full-height">
            <form class="form-signin" action="{{ route('Proses_Login') }}" method="POST">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <label for="inputNis" class="sr-only">NIS</label>
                <input type="nis" id="nis" class="form-control" placeholder="NIS" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" required="">
                <div class="checkbox mb-3">
                </p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </body>
</html>