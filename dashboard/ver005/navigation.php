       <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
               <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="LocalEdge" height="34" width="150">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              <li><a href="index.php"><i class="fa fa-home fa-lg dark-gray"></i> Home</a></li>
                <!--<li class="dropdown">-->
                <li><a href="admin-inbox.php"><i class="fa fa-envelope dark-gray"></i>  Inbox </a></li>
                <li><a href="#" data-toggle="modal" data-target="#supportModal"><i class="fa fa-comments fa-lg dark-gray"></i>  Support</a></li>
  
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user dark-gray"></i> Welcome, John <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="special" data-toggle="modal" data-target="#basicModal"><i class="fa fa-suitcase fa-fw dark-gray"></i> Change Account</a>
                        </li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear dark-gray"></i> Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa fa-file-text-o dark-gray"></i> Terms & Conditions</a>
                        </li>
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-lock dark-gray"></i> Privacy</a>
                        </li>-->
                        <li class="divider"></li>
                        <li><a class="logout" href="#"><i class="fa fa fa-sign-in fa-fw white"></i> Log out</a>
                            </li>  
                        
                    </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           <?php require 'side-nav.php'; ?>
            <!-- /.navbar-static-side -->
        </nav>