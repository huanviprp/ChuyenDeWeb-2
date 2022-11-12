<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Truyen Crawl</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <!-- Styles -->
    <style>

    </style>
</head>

<body class="antialiased">
    <header>
        <div class="module1" id="module1"></div>
        <div class="module2" id="module2"></div>
    </header>
    <div class="container home">

        <div class="row">
            <div class="col-md-9">
                <div class="module16" id="module16"></div>
            </div>
            <div class="col-md-3">
                <div class="module6" id="module6"></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="module5" id="module5"></div>
    </footer>
    <script src="{{mix('js/app.js')}}"></script>
</body>

</html>