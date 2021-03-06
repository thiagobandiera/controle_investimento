<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">

    <!-- Vendor styles -->
    <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}" rel="stylesheet">

    <!-- Dropzone -->
    <link href="{{ asset('vendors/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">

    <!-- Notification / Alert -->
    <link href="{{ asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">


    @stack('css')

    <!-- App styles -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    

</head>
<body data-ma-theme="blue">    
    <main class="main">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>

        <!-- barra Superior -->
        <header class="header">
            <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                <div class="navigation-trigger__inner">
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                </div>
            </div>

            <div class="header__logo hidden-sm-down">
                <h1><a href="index.html">Material Admin 2.0</a></h1>
            </div>

            <form class="search">
                <div class="search__inner">
                    <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                    <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                </div>
            </form>

            <ul class="top-nav">
                <li class="hidden-xl-up"><a href="" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                <li class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover">
                            <div class="listview__header">
                                Messages

                                <div class="actions">
                                    <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <a href="" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        David Belle <small>12:01 PM</small>
                                    </div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Jonathan Morris
                                        <small>02:45 PM</small>
                                    </div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Fredric Mitchell Jr.
                                        <small>08:21 PM</small>
                                    </div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Glenn Jecobs
                                        <small>08:43 PM</small>
                                    </div>
                                    <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Bill Phillips
                                        <small>11:32 PM</small>
                                    </div>
                                    <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                </div>
                            </a>

                            <a href="" class="view-more">View all messages</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown top-nav__notifications">
                    <a href="" data-toggle="dropdown" class="top-nav__notify">
                        <i class="zmdi zmdi-notifications"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover">
                            <div class="listview__header">
                                Notifications

                                <div class="actions">
                                    <a href="" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview__scroll scrollbar-inner">
                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">David Belle</div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Jonathan Morris</div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Fredric Mitchell Jr.</div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Glenn Jecobs</div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Bill Phillips</div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">David Belle</div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Jonathan Morris</div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Fredric Mitchell Jr.</div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>
                            </div>

                            <div class="p-1"></div>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="listview listview--hover">
                            <div class="listview__header">Tasks</div>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">HTML5 Validation Report</div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Google Chrome Extension</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Social Intranet Projects</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Bootstrap Admin Template</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Youtube Client App</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="view-more">View all tasks</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="row app-shortcuts">
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-calendar"></i>
                                <small class="">Calendar</small>
                                <span class="app-shortcuts__helper bg-red"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-file-text"></i>
                                <small class="">Files</small>
                                <span class="app-shortcuts__helper bg-blue"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-email"></i>
                                <small class="">Email</small>
                                <span class="app-shortcuts__helper bg-teal"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-trending-up"></i>
                                <small class="">Reports</small>
                                <span class="app-shortcuts__helper bg-blue-grey"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-view-headline"></i>
                                <small class="">News</small>
                                <span class="app-shortcuts__helper bg-orange"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-image"></i>
                                <small class="">Gallery</small>
                                <span class="app-shortcuts__helper bg-light-green"></span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item theme-switch">
                            Theme Switch

                            <div class="btn-group btn-group-toggle btn-group--colors" data-toggle="buttons">
                                <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off" checked></label>
                                <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                                <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                                <label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
                                <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                                <div class="clearfix mt-2"></div>

                                <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                                <label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
                                <label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
                                <label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
                                <label class="btn bg-brown"><input type="radio" value="brown" autocomplete="off"></label>
                            </div>
                        </div>
                        <a href="" class="dropdown-item">Fullscreen</a>
                        <a href="" class="dropdown-item">Clear Local Storage</a>
                    </div>
                </li>

                <li class="hidden-xs-down">
                    <a href="" data-ma-action="aside-open" data-ma-target=".chat" class="top-nav__notify">
                        <i class="zmdi zmdi-comment-alt-text"></i>
                    </a>
                </li>
            </ul>
        </header>

        <!-- Menu -->
        <aside class="sidebar">
            <div class="scrollbar-inner">
                <div class="user">
                    <div class="user__info" data-toggle="dropdown">
                        <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                        <div>
                            <div class="user__name">{{ Auth::user()->name }}</div>
                            <div class="user__email">{{ Auth::user()->email }}</div>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">View Profile</a>
                        <a class="dropdown-item" href="">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                <ul class="navigation">
                    <li class="navigation__active"><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Home</a></li>

                    <li class="navigation__sub">
                        <a href=""><i class="zmdi zmdi-collection-plus"></i>Transação</a>
                        <ul>
                            <li><a href="{{ route('transacao_comprar') }}">Comprar</a></li>
                            <li><a href="#">Vender</a></li>
                            <li><a href="#">Proventos</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('cotacoes') }}"><i class="zmdi zmdi-cloud-upload"></i>Importar B3</a></li>

                </ul>
            </div>
        </aside>
    
        <!-- Barra Superior Chat -->
        <aside class="chat">
            <div class="chat__header">
                <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

                <div class="chat__search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>

            <div class="scrollbar-inner">
                <div class="listview listview--hover chat__buddies">
                    <a class="listview__item chat__available">
                        <img src="demo/img/profile-pics/7.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>hey, how are you doing.</p>
                        </div>
                    </a>

                    <a class="listview__item chat__available">
                        <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>hmm...</p>
                        </div>
                    </a>

                    <a class="listview__item chat__away">
                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>all good</p>
                        </div>
                    </a>

                    <a class="listview__item">
                        <img src="demo/img/profile-pics/8.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                        </div>
                    </a>

                    <a class="listview__item">
                        <img src="demo/img/profile-pics/6.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>fusce dapibus</p>
                        </div>
                    </a>

                    <a class="listview__item chat__busy">
                        <img src="demo/img/profile-pics/9.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </a>
                </div>
            </div>

            <a href="messages.html" class="btn btn--action btn-danger"><i class="zmdi zmdi-plus"></i></a>
        </aside>

        <!-- Corpo -->
        <section class="content">
            @include('elements.alert.alert', ['errors' => $errors])
            @yield('content')
        </section>

         @yield('buttons')

    </main>
  
    <!-- Vendors Scripts -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

    <!-- Dropzone -->
    <script src="{{ asset('vendors/bower_components/dropzone/dist/dropzone.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>

    <!-- Notification / Alert -->
    <script src="{{ asset('vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/notificacoes.js') }}"></script>

    @stack('scripts')
    
    <!-- App functions and actions -->
    <script src="{{ asset('js/app.min.js') }}"></script>


</body>
</html>
