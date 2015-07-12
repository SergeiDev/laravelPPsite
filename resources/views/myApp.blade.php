<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .intent{
            text-indent:20px;
            font-size: 1px;

        }

        .mainjumbotron {
            background: url("picture/bg.jpg") repeat fixed ;
            padding-bottom: 100px;
        }
        .boxproduct{

            margin: 40px;

            background: url("picture/hp-boxes.png") repeat;
        }
        .main{
            padding: 10px;

        }
        .navbar {
            /*
                         background: url("hp-boxes.png") repeat;*/
            font-size:18px;

            background-color: green;
        }

        .navbar li{
            color: green;
        }
        .middlejumbotron{
            margin-top: -60px;
            background-color: white;

            height: 500px;
        }


        .footerjumbotron{

            background: url("picture/bg-footer.jpg") repeat;

        }
        .navbar-brand{
            padding-left: 100px;
        }
        .jumbotron p{
            font-size: 14px;
        }
        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {

            background-color: green;
        }
        .featurette-divider {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Дубиевка</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active" ><a href="#">Home</a></li>
            <li><a href="#about">Поддоны</a></li>
            <li><a href="#contact">Доска</a></li>
            <li><a href="#">Брус</a> </li>
            <li><a href="#">Доставка</a> </li>
            <li><a href="#">Контакты</a> </li>
        </ul>
    </div><!--/.navbar-collapse -->

</nav>

<!-- Carousel
  ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="picture/bg.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!--<div class="jumbotron mainjumbotron">
    <h1 class="text-center main" style="color: #328628">МЫ ПРОИЗВОДИМ</h1>
<div class="container" >

    <div class="row ">
        <div class="col-md-3 boxproduct ">
            <h2 class="text-center">Поддоны</h2>
            <p class="intent">При изготовлении бруса мы используем, прежде всего, качественное сырье, профессиональный персонал и высокотехнологичное оборудование</p>
            <p class="intent"><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-3 boxproduct">
            <h2 class="text-center">Доска</h2>
            <p class="intent">Locate NWPCA member companies that manufacture, recycle or provide equipment and supplies to the wood packaging industry. </p>
            <p class="intent"><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><div class="col-md-3 boxproduct">
        <h2 class="text-center">Брус</h2>
        <p class="intent">При изготовлении бруса мы используем, прежде всего, качественное сырье, профессиональный персонал и высокотехнологичное оборудование </p>
        <p class="intent"><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>

    </div>

</div>

</div>-->

<!--
 Carousel
  ==================================================
<div id="myCarousel" class="carousel slide" data-ride="carousel">
     Indicators
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> /.carousel
-->

<!-- START THE FEATURETTES -->
<div class="container">
    <h1 class="text-center">Наша продукция</h1>
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Оптимальные цены и условия расчетов <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="picture/001(1).jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider" >

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="picture/001(1).jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider invisible" >
</div>
<!-- /END THE FEATURETTES -->

<!--
<div class="jumbotron middlejumbotron">
<div class="container">
    <div class="row">


        <div class="col-md-12 "style="padding-left: 50px; padding-right: 50px">

            <p>About companne</p>
            <img style="float: right" width="250" height="250" alt="Фидель А. М., ФЛП" src="obl2%20(1).jpg">
            <p> Пиломатериалы от производителя – это востребованный продукт для частного и коммерческого строительства. Изготовленные по всем правилам из качественного сырья материалы незаменимы для проведения различных отделочных и строительных работ. Легкость обработки пиломатериалов позволяет воплощать самый различный дизайнерский проект. </p>
            <p> Область применения пиломатериалов так же широка. Их чаще всего используют для внутренней и внешней отделки домов. Например: настил полов, потолков, обработка стен, обрешетка крыш, изготовление лестниц и окон. Деревянные дома сохраняют прохладу летом и тепло - зимой, что позволяет экономить на электроэнергии.</p>
            <P>В домах изготовленных их кирпича, бетона для отделки применяются пиломатериалы – доски. Которые так же способствуют сохранению тепла. Помимо этого многие изделия из дерева обладают такими свойствами, как шумоизоляция. К тому же данные материалы экологически безопасные и имеют сравнительно не высокую стоимость.  </p>
            <p> Наше предприятия предлагает недорого купить пиломатериалы высшего сорта. На протяжении 10 лет мы производим и продаем все виды бруса, поддонов обрезную доску и доску по доступной цене.</p>

        </div>


    </div>
</div>
</div>-->

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

    <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
