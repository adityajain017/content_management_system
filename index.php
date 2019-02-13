<?php include 'header.html' ?>
<?php include 'login/loginheader.php' ?>
        <div id="page-wrapper" >
                                <div id="page-inner">
                                    <div class="row">
                                        <div class="col-lg-12">
                                         <h2>CMS DASHBOARD</h2>   
                                        </div>
                                    </div>              
                                     <!-- /. ROW  -->
                                      <hr />

                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="container">

                                                   <div class="container">

                                                                <!--Message from redirection-->
                                                                <div class="alert alert-success  alert-dismissable">
                                                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                                <strong>
                                                                <?php 
                                                                    if(isset($_GET['message']))
                                                                    {  
                                                                        $message= $_GET['message'];
                                                                        echo $message; 
                                                                    }
                                                                    else{
                                                                        echo 'Welcome User ! We are happy to serve you.';
                                                                    }
                                                                ?>




                                                                </strong>
                                                        </div><!--Message Closed-->


                                        </div>
                                        </div>
                                      <!-- /. ROW  --> 
                                                <div class="row text-center pad-top">
                                      <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                                          <div class="div-square">
                                               <a href="login/createpage.php" >
                     <i class="fa fa-plus-square fa-5x"></i>
                                          <h4>Create Page</h4>
                                          </a>
                                          </div>


                                      </div> 

                                      <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                                          <div class="div-square">
                                               <a href="login/view_page.php" >
                     <i class="fa fa-file fa-5x"></i>
                                          <h4>View Pages</h4>
                                          </a>
                                          </div>


                                      </div>
                                                    
                                    
                                         <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                                          <div class="div-square">
                                               <a href="login/edit_page.php" >
                     <i class="fa fa-pencil-square-o fa-5x"></i>
                                          <h4>Edit Pages</h4>
                                          </a>
                                          </div>


                                      </div>
									  
									  
                                      <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                                          <div class="div-square">
                                               <a href="login/deletepage.php" >
                     <i class="fa fa-trash fa-5x"></i>
                                          <h4>Delete Pages</h4>
                                          </a>
                                          </div>


                                      </div>
									  
									 


                                      


                         <!-- /container -->

                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="js/jquery-2.2.4.min.js"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script type="text/javascript" src="js/bootstrap.js"></script>
                        <!-- The AJAX login script -->
                                               <script src="js/login.js"></script></center>
                                         </div>
                                      </div>
                                  </div>

                        </div>
             <!-- /. PAGE INNER  --></div>
</div>
         <!-- /. PAGE WRAPPER  -->
    
 <?php include 'footer.html' ?>
   