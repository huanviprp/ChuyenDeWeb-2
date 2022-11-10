<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/swiper-bundle.min">
    <Link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <style>
        body {
            background-image: url('https://cdn.wallpapersafari.com/17/62/Mw5A6y.jpg');
        }
    </style>
</head>
<body>
    <header>
        <div class="module1" id="module1" ></div>
        <div class="module2" id="module2"></div>
    </header>
    <div class="container">
        <div class="module3" id="module3" ></div>
        <div class="row">
            <div class="col-md-8">
                <div class=" module4" id="module4"></div>
            </div>
            <div class="col-md-4">
                6
            </div>
        </div>
    </div>
    <footer>
        <div class="module5" id="module5"></div>
    </footer>
    <script src="{{mix('js/app.js')}}"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="js/swiper-bundle.min">
    var swiper = new Swiper(".silde-content", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>
</html>