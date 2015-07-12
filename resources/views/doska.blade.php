@extends("myApp")

@section('title', "Доска Черкассы")



@section("content")

    {{--start navbar--}}
    <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand active" href="#">Дубиевка</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li  ><a href="{{url("/")}}">Home</a></li>
                <li><a href="{{url("pallet")}}">Поддоны</a></li>
                <li class="active"><a href="{{url("doska")}}">Доска</a></li>
                <li><a href="{{url("bryc")}}">Брус</a> </li>
                <li><a href="{{url("dostavka")}}">Доставка</a> </li>
                <li><a href="{{url("contact")}}">Контакты</a> </li>
            </ul>
        </div>

        <!--/.navbar-collapse -->
    </nav>



    <div class="container doska">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>



@stop