  <?php

  if (!isset($_SESSION['login'])) {
  		header('location:index.php?Controller=Student&action=login');
  }

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
      <title>Edit Subject</title>
    <!-- Bootstrap Core CSS -->
    <link href="Public/bower_components/bootstrap/dist/css/bootstrap.min.css"	rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="Public/bower_components/metisMenu/dist/metisMenu.min.css"	rel="stylesheet">
    <!-- Custom CSS -->
    <link href="Public/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="Public/bower_components/font-awesome/css/font-awesome.min.css"	rel="stylesheet" type="text/css">
  </head>

  <body>
  <form method="post" >
  	<div id="wrapper">
    	<?php include('App/View/pages/leftbar.php')?>;
    	<div id="page-wrapper">
    	<div class="row">
    	<div class="col-lg-12">
    	<h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
    	</div>
    	</div>
    	<div class="row">
      	<div class="col-lg-12">
        	<div class="panel panel-default">
          	<div class="panel-heading">Edit Subject</div>
          	<div class="panel-body">
            	<div class="row">
              	<div class="col-lg-10">
                	<div class="form-group">
                  	<div class="col-lg-4">
                  	   <label>Subject 1</label>
                  	</div>
                    
                  	<div class="col-lg-6">
                      <input class="form-control" name="sub1" id="sub1"  value="<?php echo $res->sub1;?>" required="required">
                  	</div>
                	</div>
                	<br><br>

                	<div class="form-group">
                  	<div class="col-lg-4">
                  	   <label>Subject 2</label>
                  	</div>

                  	<div class="col-lg-6">
                      <input class="form-control" name="sub2" id="sub2" value="<?php echo $res->sub2;?>" required="required">
                  	</div>
                	</div>
                	<br><br>

                	<div class="form-group">
                  	<div class="col-lg-4">
                  	   <label>Subject 3</label>
                  	</div>

                  	<div class="col-lg-6">
                        <input class="form-control" name="sub3" id="sub3" value="<?php echo $res->sub3;?>" required="required">
                  	</div>
                	</div>
                	<br><br>

                	<div class="form-group">
                  	<div class="col-lg-4">
                  	   <label>Date</label>
                  	</div>

                  	<div class="col-lg-6">
                  	   <input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="udate">
                  	</div>
                	</div>
              	</div>
              	<br><br>

              	<div class="form-group">
                	<div class="col-lg-4">
                	</div>

                	<div class="col-lg-6"><br><br>
                	   <input type="submit" class="btn btn-primary" name="submit" value="Update Course"></button>
                	</div>
                </div>

              </div>
              </div>
          	</div>
        	</div>
      	</div>
    	</div>
  	</div>


  	<script src="Public/bower_components/jquery/dist/jquery.min.js"		type="text/javascript"></script>
  	<script src="Public/bower_components/bootstrap/dist/js/bootstrap.min.js"		type="text/javascript"></script>
  	<!-- Metis Menu Plugin JavaScript -->
  	<script src="Public/bower_components/metisMenu/dist/metisMenu.min.js"		type="text/javascript"></script>
  	<!-- Custom Theme JavaScript -->
  	<script src="Public/dist/js/sb-admin-2.js" type="text/javascript"></script>
  </form>
  </body>
  </html>
