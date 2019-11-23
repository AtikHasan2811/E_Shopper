<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

{{--    .........for data table................--}}

<!-- DataTables CSS -->
    <link href="{{ asset('/') }}backend/css/addons/datatables.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}backend/css/addons/datatables-select.min.css" rel="stylesheet">
    <!-- DataTables Select JS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('/') }}backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}backend/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="{{ asset('/') }}backend/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('/') }}backend/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{ asset('/') }}backend/css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="{{ asset('/') }}backend/css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->




</head>

<body>

@guest



@else
    <!-- start: Header -->
    <div>

    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>Metro</span></a>



                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">1 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">7 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">8 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">16 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>

                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="{{ route('password_change') }}"><span>Change Password</span></a></li>

                                <li> <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>

    <!-- start: Header -->



    <div class="container-fluid-full ">
        <div class="row-fluid ml-2">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="{{ route('Dashboard') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Extra Category</span><span class="label label-important"> 3 </span></a>
                            <ul>
                                <li><a class="submenu" href="{{ route('categories') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Category</span></a></li>
                                <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Category</span></a></li>
                                <li><a class="submenu" href="{{ route('brands') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Brand</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Brands</span><span class="label label-important"> 2 </span></a>
                            <ul>
                                <li><a href=" {{ url( 'admin/Brand/All_brand/') }}"><i class="icon-eye-open"></i><span class="hidden-tablet"> All Brand</span></a></li>
                                <li><a href="{{ url('admin/Brand/Add_brand/') }}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Brand</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Category</span><span class="label label-important"> 3 </span></a>
                            <ul>
                                <li><a href="{{ route('all_category') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> All Category</span></a></li>
                                <li><a href="{{ route('add_category') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Category</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Products</span><span class="label label-important"> 2 </span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('admin/product/all_product/') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">All Products</span></a></li>
                                <li><a class="submenu" href="{{ url('admin/product/Add_product/') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Products</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Slider</span><span class="label label-important"> 2 </span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('admin/slider/all_slider/') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">All Slider</span></a></li>
                                <li><a class="submenu" href="{{ url('admin/slider/Add_slider/') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Slider</span></a></li>

                            </ul>
                        </li>
                        <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>

                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: Content -->
            <div id="content" class="span10">



                @yield('body')


            </div><!--/.fluid-container-->
        </div><!--/.fluid-container-->

            <!-- end: Content -->

    </div><!--/fluid-row-->

    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>

    <div class="clearfix"></div>

    <footer>

        <p class=" text-aline-center">
            <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

        </p>

    </footer>
    </div>

@endguest


@yield('contain')




<!-- start: JavaScript-->

<script src="{{ asset('/') }}backend/js/jquery-1.9.1.min.js"></script>
<script src="{{ asset('/') }}backend/js/jquery-migrate-1.0.0.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.ui.touch-punch.js"></script>

<script src="{{ asset('/') }}backend/js/modernizr.js"></script>

<script src="{{ asset('/') }}backend/js/bootstrap.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.cookie.js"></script>

<script src='{{ asset('/') }}backend/js/fullcalendar.min.js'></script>

<script src='{{ asset('/') }}backend/js/jquery.dataTables.min.js'></script>

<script src="{{ asset('/') }}backend/js/excanvas.js"></script>
<script src="{{ asset('/') }}backend/js/jquery.flot.js"></script>
<script src="{{ asset('/') }}backend/js/jquery.flot.pie.js"></script>
<script src="{{ asset('/') }}backend/js/jquery.flot.stack.js"></script>
<script src="{{ asset('/') }}backend/js/jquery.flot.resize.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.chosen.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.uniform.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.cleditor.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.noty.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.elfinder.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.raty.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.iphone.toggle.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.uploadify-3.1.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.gritter.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.imagesloaded.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.masonry.min.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.knob.modified.js"></script>

<script src="{{ asset('/') }}backend/js/jquery.sparkline.min.js"></script>

<script src="{{ asset('/') }}backend/js/counter.js"></script>

<script src="{{ asset('/') }}backend/js/retina.js"></script>

<script src="{{ asset('/') }}backend/js/custom.js"></script>

{{--sweet alart --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>

    $(document).on("click","#delete",function (e) {
        e.preventDefault();
        var link=$(this).attr("href");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            buttons: true,
        }).then((result) => {
            if (result.value) {
                window.location.href = link;
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })

    });

</script>

<!-- end: JavaScript-->
{{--............for data table.search code...........--}}

<script>
    $('#dt-basic-checkbox').dataTable({

        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        }
    });

</script>


{{--............3/1.................code for success message.............................--}}

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
        @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>

{{--.......................................end................................................--}}

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}

</body>
</html>

