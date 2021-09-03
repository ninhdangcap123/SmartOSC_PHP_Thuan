
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    	<title>Student Management Login </title>
	    <!-- Bootstrap Core CSS -->
	    <link href="Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	    <!-- MetisMenu CSS -->
	    <link href="Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="Public/dist/css/sb-admin-2.css" rel="stylesheet">
	    <!-- Custom Fonts -->
	    <link href="Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="Public/dist/css/jquery.validate.css" />
	</head>
	<body>
	 <h2 align="center">Student Record Management System</h2>
	    <div class="container">
	        <br><br><br><br>
	            <div class="col-md-4 col-md-offset-4">
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                     <h3 class="panel-title">Sign In</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form action="" method="post">
	                            <fieldset>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Login Id"  id="id" name="id" type="text" autofocus autocomplete="off">
	                                </div>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
	                                </div>
	                                <!-- Change this to a button or input when using this as a form -->
	                                <input type="submit" value="login" name="submit" class="btn btn-lg btn-success btn-block">
	                            </fieldset>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- jQuery -->
	    <script src="Public/bower_components/jquery/dist/jquery.min.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>
	    <!-- Custom Theme JavaScript -->
	    <script src="Public/dist/js/sb-admin-2.js"></script>
	 <script src="Public/dist/jquery-1.3.2.js" type="text/javascript"></script>
	 <script src="Public/dist/jquery.validate.js" type="text/javascript"></script>
	 <script type="text/javascript">
	            jQuery(function(){
	                jQuery("#id").validate({
	                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
	                    message: "Should be a valid id"
	                });
	                jQuery("#password").validate({
	                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
	                    message: "Should be a valid password"
	                });
	            });
	        </script>
	</body>
	</html>
