<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css'}}?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script>
        $(document).ready(function(){ $("message_button").click(function(){

            $("unseen").val("0");
        });});

    </script>

</head>

<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="/Admin/category">Categories</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="/Admin/Blates">Blates</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="/Admin/chiefs">Cheifs </a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="/Admin/User">Users</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="/Admin/contacts">Contacts

                                    @if($contacts->count() >0)

                                  {{-- <h5 class="pull-right" style=" color:#8b0000 ">   {{$contacts->count()}}</h5>--}}
                                          <span class="count bg-danger" value="{{$contacts->count()}}"></span>
                                    @endif


                              </a></li>

                    </ul>
                </li>

                <h3 class="menu-title">Icons</h3><!-- /.menu-title -->


                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>


                <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('login')}}">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route("register")}}">Register</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">
@include('Errore')
<!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">


            <h3 >Steak house</h3>

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    {{--<div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-bell"></i>
                              <span class="count bg-danger" value="{{$contacts->count()}}"></span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                              <p class="red">You have 3 Notification</p>
                              <a class="dropdown-item media bg-flat-color-1" href="#">
                                  <i class="fa fa-check"></i>
                                  <p>Server #1 overloaded.</p>
                              </a>
                              <a class="dropdown-item media bg-flat-color-4" href="#">
                                  <i class="fa fa-info"></i>
                                  <p>Server #2 overloaded.</p>
                              </a>
                              <a class="dropdown-item media bg-flat-color-5" href="#">
                                  <i class="fa fa-warning"></i>
                                  <p>Server #3 overloaded.</p>
                              </a>
                          </div>
                      </div>

                      <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle"  name="message_button" type="submit"

                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ti-email"></i>
                              <span  name="unseen" class="count bg-primary">{{$contacts->count()}}</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                              @foreach($contacts as $contact)

                              <a class="dropdown-item media bg-flat-color-1" href="#">
                          <span class="message media-body">
                                      <span class="name float-left">{{$contact->Name}}</span>
                                      <span class="time float-right">{{$contact->created_at}}</span>
                                          <p>{{$contact->message}}</p>
                                  </span>
                              </a>
                              @endforeach
                          </div>
                      </div>--}}

                </div>
            </div>


            <div class="col-sm-5">

                <ul class="pull-right">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>


            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

        <div class="myDiv">



            <!-- -------------------------------------------- -->


            <!-- start my-panel -->
            <div class="my-panel zz" id="tab2-content">


                <div class="col-xs-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">Latest Products</div>

                        <div style="padding-top:10px;padding-bottom:10px" class="btn-block">

                            <div class="xpanel-body">

                                <div class="table-responsive">
                                    <a  class="pull-right" href="{{route("Blates.create")}}" data-placement="top" data-toggle="tooltip" title="" data-original-title="Add">
                                        <button class="btn btn-primary btn-xs" data-title="Add" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Add New Blate
                                        </button>
                                    </a>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr style="cursor:pointer">
                                            <th>ID</th>
                                            <th>Image</th>

                                            <th>Name</th>

                                            <th>Category</th>

                                            <th>Price</th>

                                            <th>Discription</th>

                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>

                                        <!-- -------------------------------------------------------------------------- -->





                                        <tbody>
                                        @foreach($blates as $blate)
                                            <tr style="cursor:pointer">

                                                <td>{{$blate->id}}</td>
                                                <td class="hidden-xs hidden-sm">
                                                    <img src="/images/{{$blate->file}}" height="100px"  width="100px" >
                                                </td>
                                                <td>{{$blate->Name}}</td>
                                                <td class="hidden-xs hidden-sm">{{$blate->Category->Name}}</td>
                                                <td>{{$blate->price}}</td>
                                                <td>{{$blate->description}}</td>

                                                <td>
                                                    <a href="/Admin/Blates/{{$blate->id}}/edit">
                                                        <button class="btn btn-success btn-xs" data-title="Edite" data-toggle="modal" data-target="#Edit"  >
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    {!!Form::open( ['route' =>['Blates.destroy',$blate->id] , 'method' => 'DELETE']) !!}

                                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#Delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true" ></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>

                                            @endforeach
                                            <!-- --------------------------------------------------------------------------- -->

                                            </tr>
                                            <!-- --------------------------------------------------------------------------- -->




                                        </tbody>


                                        <!-- --------------------------------------------------------------------------- -->

                                    </table>
                                    <!-- End Table -->

                                </div>
                                <!-- /.table-responsive -->

                            </div>


                        </div>
                        <!-- End btn-block -->

                    </div>
                    <!-- End panel -->

                </div>
                <!-- End col -->



            </div>
            <! -- End My panel -->
            <!-- --------------------------------------------------------------------------- -->






            <!-- --------------------------------------------------------------------- -->

        </div>

        <!-- --------------------------------------------------------------------- -->

</div>
<!-- End dashboard-content -->

</div>
<!-- End Row -->


</div>
<!-- End right-side -->

<!-- --------------------------------------------------- -->

</div>
<!-- End big row -->

</div>
<!-- End container -->

<script>
    $(document).ready(function(){ $("message_button").click(function(){

        $("unseen").val(" ");
    });});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/dist/umd/popper.min.js')}}"></script>

<script src="{{asset('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendor/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>

</script>
</div>
</body>
</html>
