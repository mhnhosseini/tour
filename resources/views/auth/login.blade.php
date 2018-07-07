

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">

    <title>ورود به سیستم</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">
</head>

<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="images/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">ورود به سیستم</h1>
    </div>

    <div class="form-label-group">
        <input id="email" type="email" class="form-control" placeholder="ایمیل" name="email" value="{{ old('email') }}"
               required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <label for="inputEmail">ایمیل</label>
    </div>

    <div class="form-label-group">
        <input id="password" type="password" class="form-control" name="password" required placeholder="رمز عبور">

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <label for="inputPassword">رمز عبور</label>
    </div>

    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">وارد شوید</button>
</form>
</body>
</html>
