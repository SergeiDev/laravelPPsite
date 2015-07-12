<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> @yield('title') </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel = "stylesheet">
    <link href="css/myCss.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>


    </style>
</head>
<body>
@yield('content')




{{--footer--}}
<div class="jumbotron footerjumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="text-center"> наш адерс</p>
            </div>



            <div class="col-md-4">	   <!--начало текста -->
                <div class="text-center">
                    <p><strong>Наши телефоны:</strong><br> +38 (097)470-90-90 </p>
                    <P> +30 (096)44-66-089</p>
                    <p><strong>Наш email:</strong> </p>
                    <p>shemshyr90@gmail.com</p>
                    <h3>График роботи</h3>
                    <p>Пн-Пт: с 8:00 до 17:00 </p>
                    <p>Сб:8:00 до 14:00</p>
                </div>
            </div>


            <div class="col-md-4">
                <form>
                    <p class="text-center">Связь с нами</p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email адрес</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Текст</label>
                        <textarea class="form-control" id="exampleInputPassword1" rows="4"></textarea>

                    </div>

                    <button type="submit" class="btn bottom-right">Submit</button>
                </form>
            </div>


        </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>