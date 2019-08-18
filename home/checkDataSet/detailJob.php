<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard M2MutPro</title>

  <!--STYLESHEET-->
  <!--=================================================-->
  <!--Open Sans Font [ OPTIONAL ]-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


  <!--Bootstrap Stylesheet [ REQUIRED ]-->
  <link href="../css/bootstrap.min.css" rel="stylesheet">


  <!--Nifty Stylesheet [ REQUIRED ]-->
  <link href="../css/nifty.min.css" rel="stylesheet">


  <!--Nifty Premium Icon [ DEMONSTRATION ]-->
  <link href="../css/demo/nifty-demo-icons.min.css" rel="stylesheet">


  <!--DataTables [ OPTIONAL ]-->
  <link href="../plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="../plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

  <!--Bootstrap Validator [ OPTIONAL ]-->
  <link href="../plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
  <!--JAVASCRIPT-->
  <!--=================================================-->

  <!--Pace - Page Load Progress Par [OPTIONAL]-->
  <link href="../plugins/pace/pace.min.css" rel="stylesheet">
  <script src="../plugins/pace/pace.min.js"></script>


  <!--jQuery [ REQUIRED ]-->
  <script src="../js/jquery.min.js"></script>


  <!--BootstrapJS [ RECOMMENDED ]-->
  <script src="../js/bootstrap.min.js"></script>


  <!--NiftyJS [ RECOMMENDED ]-->
  <script src="../js/nifty.min.js"></script>


  <!--=================================================-->

  <!--Font Awesome [ OPTIONAL ]-->
  <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!--Ion Icons [ OPTIONAL ]-->
  <link href="../plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
  <!--Ion Icons [ OPTIONAL ]-->
  <link href="../plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
  <!--Themify Icons [ OPTIONAL ]-->
  <link href="../plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
  <!--Premium Line Icons [ OPTIONAL ]-->
  <link href="../premium/icon-sets/icons/line-icons/premium-line-icons.min.css" rel="stylesheet">
  <link href="../plugins/spinkit/css/spinkit.min.css" rel="stylesheet">
  <script src="../plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

  <!--DataTables [ OPTIONAL ]-->
  <link href="../plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="../plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

  <!--DataTables [ OPTIONAL ]-->
  <script src="../plugins/datatables/media/js/jquery.dataTables.js"></script>
  <script src="../plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="../plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="../js/jobs/loadResponseView.js"></script>
  <script src="../js/jobs/summaryJob.js"></script>

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="" class="navbar-brand">
                        <img src="../img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">M2MutPro</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->

                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->

                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">

                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                </div>


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                  <div class="row">
                    <div class="panel">
                      <div class="panel-body">
                          <div class="fixed-fluid">
                              <div class="fixed-md-250 pull-sm-left fixed-right-border">

                                  <!-- Simple profile -->
                                  <div class="text-center">
                                      <div class="pad-ver">
                                          <img src="../img/profile-photos/11.png" class="img-lg img-circle" alt="Profile Picture">
                                      </div>
                                  </div>
                                  <hr>

                                  <!-- Profile Details -->
                                  <p class="pad-ver text-main text-sm text-uppercase text-bold">Job's data</p>
                                  <ul>
                                    <li>
                                      <i class="fa fa fa-anchor icon-lg icon-fw"></i>
                                      <span class="menu-title jobID"></span>
                                    </li>
                                    <br>
                                    <li>
                                      <i class="fa fa fa-code icon-lg icon-fw"></i>
                                      <span class="menu-title nameJob"></span>
                                    </li>
                                    <br>
                                    <li>
                                      <i class="fa fa fa-calendar icon-lg icon-fw"></i>
                                      <span class="menu-title startDate"></span>
                                    </li>

                                    <br>
                                    <li>
                                      <i class="fa fa fa-balance-scale icon-lg icon-fw"></i>
                                      <span class="menu-title kindModel"></span>
                                    </li>

                                    <br>
                                    <li>
                                      <i class="fa fa fa-pie-chart icon-lg icon-fw"></i>
                                      <span class="menu-title examples"></span>
                                    </li>
                                    <br>
                                    <li>
                                      <i class="fa fa fa-file icon-lg icon-fw"></i>
                                      <span class="menu-title response"></span>
                                    </li>
                                    <br>
                                    <li>
                                      <i class="fa fa fa-envelope icon-lg icon-fw"></i>
                                      <span class="menu-title notification"></span>
                                    </li>
                                  </ul>

                                  <hr>
                              </div>
                              <div class="fluid">

                                <div class="panel">
                                  <div class="panel-title">
                                      View Response Distribution
                                  </div>

                                  <div class="panel-body">
                                    <div id="detailResponse">
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12 col-md-12">

                      <div class="panel panel-bordered panel-primary">

                        <div class="panel-heading">
                          <h3 class="panel-title">
                            Important information
                          </h3>
                        </div>
                        <div class="panel-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div>
              <form id="frmEliminar" action="" method="POST">
                <!-- Modal -->
                <div class="modal fade" id="myModalCancel" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalEliminarLabel">Cancel Job</h4>
                      </div>
                      <div class="modal-body">
                        Are you sure to cancel the job?<strong data-name=""></strong>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="cancel-Job" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
              </form>
            </div>

            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="../img/profile-photos/11.png" alt="Profile Picture">
                                        </div>

                                        <p class="mnp-name">
                                            User View
                                        </p>
                                    </div>
                                </div>

                                <ul id="mainnav-menu" class="list-group">

                                  <li class="list-header">Dashboard</li>

                                  <li>
          						                <a href="../query/">
          						                    <i class="fa fa fa-list"></i>
          						                    <span class="menu-title">Query Job</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../dataSet/">
          						                    <i class="fa fa fa-archive"></i>
          						                    <span class="menu-title">Data Sets Demo</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../about">
          						                    <i class="fa fa fa-users"></i>
          						                    <span class="menu-title">About Us</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../userManual">
          						                    <i class="fa fa fa-file"></i>
          						                    <span class="menu-title">How to use</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../">
          						                    <i class="fa fa fa-home"></i>
          						                    <span class="menu-title">Home</span><i class="arrow"></i>
          						                </a>

          						            </li>

						            </ul>

                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div>






            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2019 Developed by <a href="http://pesb2.cl/"> PESB2 Group, </a>Centre for Biothecnology and Bioengineering, FCFM, University of Chile</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

   <!-- modal section -->
</body>
</html>
