<!-- 存放在 resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
        <link href="../../resources/Admin/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="../../resources/Admin/stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="../../resources/Admin/stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="../../resources/Admin/stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="../../resources/Admin/stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <script src="../../resources/Admin/javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="http://www.jq22.com/jquery/jquery-ui-1.10.2.js" type="text/javascript"></script>
    <script src="../../resources/Admin/javascripts/bootstrap.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/raphael.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/selectivizr-min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/gcal.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/datatable-editable.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/excanvas.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/isotope_extras.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/modernizr.custom.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/select2.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/styleswitcher.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/wysiwyg.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/summernote.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.validate.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/typeahead.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/daterange-picker.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/date.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/morris.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/skycons.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/fitvids.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/main.js" type="text/javascript"></script><script src="../../resources/Admin/javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    </head>
    <body>
            <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown notifications hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-flag"></span>
                  <div class="sr-only">
                    Notifications
                  </div>
                  <p class="counter">
                    4
                  </p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New growth data available
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-envelope"></span>
                  <div class="sr-only">
                    Messages
                  </div>
                  <p class="counter">
                    3
                  </p>
                </a>
                <ul class="dropdown-menu messages">
                  <li><a href="#">
                    <img width="34" height="34" src="../../resources/Admin/images/avatar-male2.png" />Could we meet today? I wanted...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="../../resources/Admin/images/avatar-female.png" />Important data needs your analysis...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="../../resources/Admin/images/avatar-male2.png" />Buy Se7en today, it's a great theme...</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown settings hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                  <div class="sr-only">
                    Settings
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>Blue</a>
                  </li>
                  <li>
                    <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>Green</a>
                  </li>
                  <li>
                    <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>Orange</a>
                  </li>
                  <li>
                    <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>Magenta</a>
                  </li>
                  <li>
                    <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>Gray</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img width="34" height="34" src="../../resources/Admin/images/avatar-male.jpg" />John Smith<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <i class="icon-user"></i>My Account</a>
                  </li>
                  <li><a href="#">
                    <i class="icon-gear"></i>Account Settings</a>
                  </li>
                  <li><a href="login1.html">
                    <i class="icon-signout"></i>Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index-2.html">se7en</a>
          <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text">
          </form>
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a class="@yield('indexcurrent')" href="{{ url('administrator') }}"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
              </li>
              <li><a href="social.html" class="@yield('Socialcurrent')" >
                <span aria-hidden="true" class="se7en-feed"></span>Social Feed</a>
              </li>
              <li class="dropdown"><a class="@yield('Featurescurrent')" data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-star"></span>Features<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">Buttons</a>
                  </li>
                  <li>
                    <a href="#">Font Awesome Icons</a>
                  </li>
                  <li><a href="glyphicons.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Glyphicons
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="#">Components</a>
                  </li>
                  <li>
                    <a href="#">Widgets</a>
                  </li>
                  <li>
                    <a href="#">Typography</a>
                  </li>
                  <li>
                    <a href="#">Grid Layout</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="@yield('Formscurrent')" data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-forms"></span>Forms<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Form Components
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="#">Advanced Forms</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="@yield('Tablescurrent')" data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-tables"></span>Tables<b class="caret"></b></a>
                <ul class="dropdown-menu">

                  <li>
                    <a href="#">Basic tables</a>
                  </li>

                  <li>
                    <a href="{{ url('datatables') }}">DataTables</a>
                  </li>

                  <li><a href="{{ url('datatableseditable') }}">
                    <div class="notifications label label-warning">
                      New
                    </div>
                    <p>
                      Editable DataTables
                    </p></a>
                  </li>
                </ul>
              </li>
              <li><a href="charts.html" class="@yield('Chartscurrent')">
                <span aria-hidden="true" class="se7en-charts"></span>Charts</a>
              </li>
              <li class="dropdown"><a class="@yield('Pagescurrent')" data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-pages"></span>Pages<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Chat
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="#">Calendar</a>
                  </li>
                  <li><a href="#">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Timeline
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Login 1
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="#">Login 2</a>
                  </li>
                  <li><a href="#">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Sign Up 1
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="#">Sign Up 2</a>
                  </li>
                  <li><a href="#">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Invoice
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      FAQ
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="#">Filter Results</a>
                  </li>
                  <li>
                    <a href="404-page.html">404 Page</a>
                  </li>
                </ul>
              </li>
              <li><a href="gallery.html" class="@yield('Gallerycurrent')">
                <span aria-hidden="true" class="se7en-gallery"></span>Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
            @yield('content')
    </body>
</html>