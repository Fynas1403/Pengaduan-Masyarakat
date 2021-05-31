
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Pengaduan Masyarakat</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/lineicons/style.css')}}">    
    
    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{url('assets/js/chart-master/Chart.js')}}"></script>

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="" class="logo"><b>Pengaduan Masyarakat</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{url('/logout_masyarakat')}}"
                    onclick="return confirm('Apakah anda yakin?')">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              @if(Session()->has('nama'))   
              <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.png" class="img-circle" width="60"></a></p>
                    <h5 class="centered">{{Session()->get('nama')}}</h5>
            @endif
            
<center>
<span>Anda Login Sebagai Masyarakat</span>
</center>
<li class="mt">
  <a class="active" href="/pengaduan-masyarakat/public/masyarakat">
  <i class="fa fa-home"></i>
      <span>Dashboard</span>
  </a>
</li>

<li class="sub-menu"  >
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Pengaduan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="/pengaduan-masyarakat/public/pengaduan_masyarakat">Pengaduan Saya</a></li>
                          <li><a  href="/pengaduan-masyarakat/public/tanggapan_masyarakat">Tanggapan</a></li>
                      </ul>
                  </li>
                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
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
                      </ul>
                  </li> -->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <section id="main-content">
          <section class="wrapper">
              @yield('container')
              <!-- @yield('body') -->
              <!-- @yield('user')
              @yield('transaksi')
              @yield('Pembayaran')
              @yield('b_pembeli') -->
          </section>
      </section>
      
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/jquery.sparkline.js')}}"></script>


    <!--common script for all pages-->
    <script src="{{url('assets/js/common-scripts.js')}}"></script>
    
    

    <!--script for this page-->
    <script src="{{url('assets/js/sparkline-chart.js')}}"></script>    
	<script src="{{url('assets/js/zabuto_calendar.js')}}"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  
  @include('sweetalert::alert')
  </body>
</html>
