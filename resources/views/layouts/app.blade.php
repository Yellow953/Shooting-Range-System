<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sellier & Bellot') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app-lite.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/colors/palette-gradient.css') }}">

</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    @include('layouts._header')

    {{-- @yield('content') --}}
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
        data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo"
                            alt="Chameleon admin logo" src="theme-assets/images/logo/logo.png" />
                        <h3 class="brand-text">Chameleon</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="ft-home"></i><span class="menu-title"
                            data-i18n="">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="charts.html"><i class="ft-pie-chart"></i><span class="menu-title"
                            data-i18n="">Charts</span></a>
                </li>
                <li class=" nav-item"><a href="icons.html"><i class="ft-droplet"></i><span class="menu-title"
                            data-i18n="">Icons</span></a>
                </li>
                <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span class="menu-title"
                            data-i18n="">Cards</span></a>
                </li>
                <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title"
                            data-i18n="">Buttons</span></a>
                </li>
                <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span class="menu-title"
                            data-i18n="">Typography</span></a>
                </li>
                <li class="active"><a href="tables.html"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Tables</span></a>
                </li>
                <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title"
                            data-i18n="">Form Elements</span></a>
                </li>
                <li class=" nav-item"><a
                        href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i
                            class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
                </li>
            </ul>
        </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1"
            href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/"
            target="_blank">Download PRO!</a>
        <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Tables</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Tables
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Tables</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <p class="card-text">Using the most basic table markup, here’s how
                                        <code>.table</code>-based tables look in Bootstrap. You can use any example of
                                        below table for your table and it can be use with any type of bootstrap tables.
                                    </p>
                                    <p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
                                    <div class="table-responsive">
                                        <table class="table">
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
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
                <!-- Striped rows start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Striped rows</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <p class="card-text">Use <code class="highlighter-rouge">.table-striped</code> to
                                        add zebra-striping to any table row within the <code
                                            class="highlighter-rouge">&lt;tbody&gt;</code>. This styling doesn't work in
                                        IE8 and below as <code>:nth-child</code> CSS selector isn't supported.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
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
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Striped rows end -->

                <!-- Table head options start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table head options</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <p>Similar to default and inverse tables, use one of two modifier classes <code
                                            class="highlighter-rouge">.thead-default</code> or <code
                                            class="highlighter-rouge">.thead-inverse</code> to make <code
                                            class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.
                                    </p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
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
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->

                <!-- Bordered table start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bordered table</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <p class="card-text">Add <code>.table-bordered</code> for borders on all sides of
                                        the table and cells.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
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
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@TwBootstrap</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bordered table end -->
            </div>
        </div>
    </div>

    <!-- Theme JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/app-menu-lite.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/app-lite.js') }}" type="text/javascript"></script>

</body>

</html>