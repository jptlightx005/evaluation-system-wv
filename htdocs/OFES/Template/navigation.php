<!-- START NAVIGATION -->
       <nav class="navbar navbar-default navbar" role="navigation">
           
           
           <div class="container">
               
               <div class="masthead">
                   
                <ul class="nav nav-justified">

                    <li <?php if($pageid==1){echo 'class="active"';}?>><a href="?page=1">Home</a></li>
                    <li <?php if($pageid==2){echo 'class="active"';}?>><a href="?page=2">About us</a></li>
                    <li <?php if($pageid==3){echo 'class="active"';}?>><a href="?page=3">Contact us</a></li>
                    
                        <li><a href="#" class="btn dropdown-toggle " data-toggle="dropdown" role="button" aria-                            haspopup="true" aria-expanded="false">Log in<span class="caret"></span></a>

                            <ul class="dropdown-menu">

                               <!-- Button trigger modal -->
                                <a href="student_login.php"><button type="button" class="btn btn-info btn-lg" >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;as Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button></a>
                                 <a href="teacher_login.php"><button type="button" class="btn btn-warning btn-lg" >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;as Teacher&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button></a>
                                
                                
                            </ul>

                        </li>
               
                </ul>
                   
               </div>
               
            </div>
           
        </nav>
        <!-- END NAVIGATION -->