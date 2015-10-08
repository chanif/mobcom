@extends('base')


@section('body')

    <body>

    <section id="container" >
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo">Mob<span>com</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 6 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Iphone Development</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">Jhon Doue</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-laptop"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="boxed_page.html">Boxed Page</a></li>
                            <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                            <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                            <li><a  href="email_template.html" target="_blank">Email Template</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-book"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="general.html">General</a></li>
                            <li><a  href="buttons.html">Buttons</a></li>
                            <li><a  href="widget.html">Widget</a></li>
                            <li><a  href="slider.html">Slider</a></li>
                            <li><a  href="nestable.html">Nestable</a></li>
                            <li><a  href="font_awesome.html">Font Awesome</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Components</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="grids.html">Grids</a></li>
                            <li><a  href="calendar.html">Calendar</a></li>
                            <li><a  href="gallery.html">Gallery</a></li>
                            <li><a  href="todo_list.html">Todo List</a></li>
                            <li><a  href="draggable_portlet.html">Draggable Portlet</a></li>
                            <li><a  href="tree.html">Tree View</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-tasks"></i>
                            <span>Form Stuff</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="form_component.html">Form Components</a></li>
                            <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                            <li><a  href="form_wizard.html">Form Wizard</a></li>
                            <li><a  href="form_validation.html">Form Validation</a></li>
                            <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                            <li><a  href="inline_editor.html">Inline Editor</a></li>
                            <li><a  href="image_cropping.html">Image Cropping</a></li>
                            <li><a  href="file_upload.html">Multiple File Upload</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-th"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="basic_table.html">Basic Table</a></li>
                            <li><a  href="responsive_table.html">Responsive Table</a></li>
                            <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                            <li><a  href="advanced_table.html">Advanced Table</a></li>
                            <li><a  href="editable_table.html">Editable Table</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class=" fa fa-envelope"></i>
                            <span>Mail</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="inbox.html">Inbox</a></li>
                            <li><a  href="inbox_details.html">Inbox Details</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="morris.html">Morris</a></li>
                            <li><a  href="chartjs.html">Chartjs</a></li>
                            <li><a  href="flot_chart.html">Flot Charts</a></li>
                            <li><a  href="xchart.html">xChart</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-shopping-cart"></i>
                            <span>Shop</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="product_list.html">List View</a></li>
                            <li><a  href="product_details.html">Details View</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="google_maps.html" >
                            <i class="fa fa-map-marker"></i>
                            <span>Google Maps </span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-comments-o"></i>
                            <span>Chat Room</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="lobby.html">Lobby</a></li>
                            <li><a  href="chat_room.html"> Chat Room</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-glass"></i>
                            <span>Extra</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="blank.html">Blank Page</a></li>
                            <li><a  href="lock_screen.html">Lock Screen</a></li>
                            <li><a  href="profile.html">Profile</a></li>
                            <li><a  href="invoice.html">Invoice</a></li>
                            <li><a  href="search_result.html">Search Result</a></li>
                            <li><a  href="pricing_table.html">Pricing Table</a></li>
                            <li><a  href="faq.html">FAQ</a></li>
                            <li><a  href="fb_wall.html">FB Wall</a></li>
                            <li><a  href="404.html">404 Error</a></li>
                            <li><a  href="500.html">500 Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a  href="login.html">
                            <i class="fa fa-user"></i>
                            <span>Login Page</span>
                        </a>
                    </li>

                    <!--multi level menu start-->
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-sitemap"></i>
                            <span>Multi level Menu</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Menu Item 1</a></li>
                            <li class="sub-menu">
                                <a  href="boxed_page.html">Menu Item 2</a>
                                <ul class="sub">
                                    <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                    <li class="sub-menu">
                                        <a  href="javascript:;">Menu Item 3</a>
                                        <ul class="sub">
                                            <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                            <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--multi level menu end-->

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">

            <section class="wrapper">
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol terques">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="value">
                                <h1 class="count">
                                    0
                                </h1>
                                <p>New Users</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol red">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="value">
                                <h1 class=" count2">
                                    0
                                </h1>
                                <p>Sales</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol yellow">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="value">
                                <h1 class=" count3">
                                    0
                                </h1>
                                <p>New Order</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol blue">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="value">
                                <h1 class=" count4">
                                    0
                                </h1>
                                <p>Total Profit</p>
                            </div>
                        </section>
                    </div>
                </div>
                <!--state overview end-->

                <div id="morris">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                </header>
                                <div class="panel-body">
                                    <div id="hero-area" class="graph"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="flot-chart">
                            <div class="row">
                                <div class="col-lg-12">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Follow Up
                                        </header>
                                        <div class="panel-body">
                                            <div id="graph3" class="chart"></div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- page end-->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!--work progress start-->
                        <section class="panel">
                            <div class="panel-body progress-panel">
                                <div class="task-progress">
                                    <h1>Work Progress</h1>
                                </div>
                                <table class="table table-hover personal-task">
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Target Sell
                                        </td>
                                        <td>
                                            <span class="badge bg-important">75%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress1"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            Product Delivery
                                        </td>
                                        <td>
                                            <span class="badge bg-success">43%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress2"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            Payment Collection
                                        </td>
                                        <td>
                                            <span class="badge bg-info">67%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress3"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            Work Progress
                                        </td>
                                        <td>
                                            <span class="badge bg-warning">30%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress4"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            Delivery Pending
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">15%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress5"></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <!--work progress end-->
                    </div>
                </div>

            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2015 &copy; MobCom
                <a href="#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/respond.min.js') }}" ></script>

    <script src="{{ asset('/js/owl.carousel.js') }}" ></script>
    <script src="{{ asset('/js/jquery.customSelect.min.js') }}" ></script>

    <script src="{{ asset('/assets/morris.js-0.4.3/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/assets/morris.js-0.4.3/raphael-min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('/assets/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/assets/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/assets/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/assets/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('/assets/flot/jquery.flot.crosshair.js') }}"></script>

    <!--common script for all pages-->
    <script src="{{ asset('/js/common-scripts.js') }}"></script>

    <!--script for this page-->
    <script src="{{ asset('/js/count.js') }}"></script>


    <script>

        //var lala = JSON.stringify({!!$posts!!}).replace(/['"]+/g, '').replace(/period:/g, 'period:\'').replace(/,click/g, '\',click');

        var Script = function () {
            //morris chart
            //var php1 = JSON.parse(@{{posts}});

            $(function () {
                Morris.Area({
                    element: 'hero-area',
                   data: {!! $posts !!}
                        ,

                    xkey: 'period',
                    ykeys: ['click', 'terbayar', 'tak_terbayar'],
                    labels: ['Click', 'Terbayar', 'Belum Terbayar'],
                    hideHover: 'auto',
                    lineWidth: 1,
                    pointSize: 5,
                    lineColors: ['#4a8bc2', '#ff6c60', '#a9d86e'],
                    fillOpacity: 0.5,
                    smooth: true,
                    parseTime: false
                });

                //console.log(lala);

                $('.code-example').each(function (index, el) {
                    eval($(el).text());
                });
            });

        }();


        //var chan = {!! $follow !!}

        var Script = function () {
            //    graph chart
            $(function () {
                // data
                var data = {!! $follow !!};


                // GRAPH 3
                $.plot($("#graph3"), data,
                        {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 1,
                                    label: {
                                        show: true,
                                        radius: 3/4,
                                        formatter: function(label, series){
                                            return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</div>';
                                        },
                                        background: { opacity: 0.5 }
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
            });
        }();


    </script>


    </body>
@endsection



