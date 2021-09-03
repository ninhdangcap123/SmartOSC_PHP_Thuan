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
	    	<title>View Course</title>
	    <link href="Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	    <link href="Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	    <link href="Public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	    <link href="Public/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
	    <link href="Public/dist/css/sb-admin-2.css" rel="stylesheet">
	    <link href="Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	    <div id="wrapper">
	    <?php include('App/View/pages/leftbar.php')?>;
	    <nav>
	    <div id="page-wrapper">
		    <div class="row">
		    <div class="col-lg-12">
		    <h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
		    </div>
		    </div>
		    <div class="row">
			    <div class="col-lg-12">
				    <div class="panel panel-default">
					    <div class="panel-heading">
					    View Session
					    </div>
					    <div class="panel-body">
					    <div class="form-group">
								<div class="col-lg-2">
								<label>Session<span id="" style="font-size:11px;color:red">*</span></label>
								</div>
						    <div class="col-lg-4">
									<?php while($res=$rs->fetch_object())
									{
									if($res->status==1)
									{
									?>
									<input type="radio" name="gender" id="male" value="<?php echo $res->session;?>" checked required="required">&nbsp;&nbsp;
									<?php echo $res->session;?>
									<br>
									<?php  } ?>
									<input type="radio" name="gender" id="male" value="<?php echo $res->session;?>" checked required="required">&nbsp;&nbsp;
									<?php echo $res->session;?>
									<br>
								  <?php }?>
								</div>
						    	<input type="submit" class="btn btn-primary" name="submit" value="Update Session">
								</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>


	    <script src="Public/bower_components/jquery/dist/jquery.min.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>
	    <!-- DataTables JavaScript -->
	    <script src="Public/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	    <script src="Public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	    <!-- Custom Theme JavaScript -->
	    <script src="Public/dist/js/sb-admin-2.js"></script>
	    <script>
	    $(document).ready(function() {
	        $('#dataTables-example').DataTable({
	                responsive: true
	        });
	    });
	    </script>
	</body>
	</html>
