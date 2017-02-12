<?php include('Configuration/setup.php'); ?>

<!-- START NAVIGATION -->
       <nav class="navbar navbar-default navbar" role="navigation">
           
           
           <div class="container">
               
               <div class="masthead">
                   
             <p class="navbar-text"><b>ID Number:</b> <?php echo $user['studentsID']; ?></p>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">

                           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['firstname'].' '.$user['middlename'].' '.$user['lastname'];?><?php echo $teacher['fname'].' '.$teacher['mname'].' '.$teacher['lname'];?><b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                            <li ><a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log out</a></li>
                            </ul>


                        </li>

                    </ul>
                   
            
               </div>
               
            </div>
           
        </nav>
        <!-- END NAVIGATION -->