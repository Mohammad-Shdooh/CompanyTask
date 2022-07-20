<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>

<div class="container mt-5" >
    <h1 class="text-muted">Hello, Who's This</h1>

    <form action="/create" method="POST" >
        @csrf

        <div class="form-group">
            <label for="fName">First name</label>
            <input type="text" name="fName" class="form-control">
        </div>

        <div class="form-group">
            <label for="lName">Last name</label>
            <input type="text" name="lName"class="form-control" >
        </div>

        <div class="form-group">
            <label for="mobile">Mobile Num.</label>
            <input type="text" name="mobile" class="form-control">
        </div>

        <input type="submit" name="send" value="send" class="btn btn-primary">
    </form>

    @if (session('status'))
        <div class=" mt-3 alert alert-success">
            {{ session('status') }}
        </div>
    @endif

</div>

</body>
</html>
