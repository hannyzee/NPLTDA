 <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url('assets/images/users/profile.png');?>" alt="user" /> 
                             <!-- this is blinking heartbit-->
                            <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text"> 
                            <h5><?php echo $_SESSION["userid"];?></h5>
                            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                            <a href="<?php echo base_url('auth/logout');?>" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>

                        <div class="dropdown-menu animated flipInY">
                        <!-- text--> 
                        <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->  
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text--> 
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="<?php echo base_url('auth/logout');?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->  
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                         <li class="nav-devider"></li>
                         <li> <a class="" href="<?php echo base_url('home/dashboard');?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        <li class="nav-small-cap">PROJECT SECTION</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Project</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('project/clients');?>">Client </a></li>
                                <li><a href="<?php echo base_url('project/projects');?>">Project</a></li>
                                <li><a href="<?php echo base_url('project/details');?>">Project Log</a></li>
                            </ul>
                        </li>
                         <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Employee</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('employee/contract');?>">Register</a></li>
                                <li><a href="<?php echo base_url('employee/contacts');?>">Contact</a></li>
                            </ul>
                        </li>
                         <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Work Details <span class="label label-rouded label-danger pull-right">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="expense.php">Project Expenses</a></li>
                                <li><a href="<?php echo base_url('timecard/timecards');?>">Time Card</a></li>
                                <li><a href="<?php echo base_url('timecard/timecardexpenses');?>">Time Card Expense </a></li>
                                <li><a href="<?php echo base_url('timecard/expense_details');?>">Expense Log</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-hashtag"></i><span class="hide-menu">Payment Section</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="payment.php">Bills</a></li>
                                <li><a href="#">Invoice</a></li>
                            </ul>
                        </li> 
                          <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Report</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo base_url('report/reports');?>">Generate Reports</a></li>
                        </ul>    
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->