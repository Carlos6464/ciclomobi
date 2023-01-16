<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>@yield('title')</title>
    
  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="<?=Config::get('constantes.SRC_ADMIN')?>plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="<?=Config::get('constantes.SRC_ADMIN')?>plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="<?=Config::get('constantes.SRC_ADMIN')?>plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  
  
  
  <link href="<?=Config::get('constantes.SRC_ADMIN')?>plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
  
  
  
  <link href="<?=Config::get('constantes.SRC_ADMIN')?>plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  
  
  
  <link href="<?=Config::get('constantes.SRC_ADMIN')?>plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  
  
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="<?=Config::get('constantes.SRC_ADMIN')?>plugins/toaster/toastr.min.css" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="<?=Config::get('constantes.SRC_ADMIN')?>css/style.css" />

  


  <!-- FAVICON -->


  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/nprogress/nprogress.js"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                
                <span class="brand-name">CICLOMOBI</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
              
                <li
                   >
                    <a class="sidenav-item-link" href="<?=Config::get('constantes.PUBLIC_DIR')?>admin/painel">
                      <i class="mdi mdi-home"></i>
                      <span class="nav-text">Home</span>
                    </a>
                  </li>
                
                  <li class="section-title">
                    Cadastrar
                  </li>
                  <li
                   >
                    <a class="sidenav-item-link" href="{{route('post.index')}}">
                      <i class="mdi mdi-pencil"></i>
                      <span class="nav-text">Posts</span>
                    </a>
                  </li>
                  <li
                   >
                    <a class="sidenav-item-link" href="getting-started.html">
                      <i class="mdi mdi-settings"></i>
                      <span class="nav-text">Serviços</span>
                    </a>
                  </li>
                  <li
                   >
                    <a class="sidenav-item-link" href="getting-started.html">
                      <i class="mdi mdi-factory"></i>
                      <span class="nav-text">Lojas</span>
                    </a>
                  </li>
                  <li
                   >
                    <a class="sidenav-item-link" href="{{ route('evento.index')}}">
                      <i class="mdi mdi-calendar"></i>
                      <span class="nav-text">Eventos</span>
                    </a>
                  </li>
              </ul>

            </div>

            <div class="sidebar-footer">
              <div >
                <ul >
                  <li>
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </aside>

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">Painel de Controle</span>

              <div class="navbar-right ">
               

                <ul class="nav navbar-nav">
                 
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="<?=Config::get('constantes.SRC_ADMIN')?>images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block">John Doe</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="user-profile.html">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text">Perfil</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

            @if (session('sucesso'))
            <div class="alert alert-success" role="alert">
              {{ session('sucesso')}}
            </div>
            @endif
            @yield('content')
    
        
         
          

        
          

      </div>
    </div>
    



    
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/jquery/jquery.min.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/simplebar/simplebar.min.js"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    
                    
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/apexcharts/apexcharts.js"></script>
                    
                    
                    
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
                    
                    
                    
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
                    
                    
                    
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/daterangepicker/moment.min.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/daterangepicker/daterangepicker.js"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>
                    
                    
                    
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                    
                    
                    
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>plugins/toaster/toastr.min.js"></script>

                    
                    
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>js/mono.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>js/chart.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>js/map.js"></script>
                    <script src="<?=Config::get('constantes.SRC_ADMIN')?>js/custom.js"></script>

                    


                    <!--  -->


  </body>
</html>