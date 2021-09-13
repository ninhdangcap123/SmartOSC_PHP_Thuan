<?php
	require('App/Model/Database.php');
	class Student_Model
	{
		function login($loginid,$password)
			{
		      	if(!ctype_alpha($loginid) || !ctype_alpha($password))
					{
			        	echo "<script>alert('Either LoginId or Password is Missing')</script>";
			      	}
				else
					{
						$db = Database::getInstance();
						$mysqli = $db->getConnection();
						$query = "SELECT loginid, password FROM tbl_login where loginid=? and password=? ";
						$stmt= $mysqli->prepare($query);
						if(false===$stmt)
							{
								trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
							}
					  	else
							{
								$stmt->bind_param('ss',$loginid,$password);
								$stmt->execute();
								$stmt->bind_result($loginid,$password);
								$rs=$stmt->fetch();
							}
						if(!$rs)
						  	{
								echo "<script>alert('Invalid Details')</script>";
								header('location:index.php?Controller=Student&action=login');
							}					
					}
			}
		
		function showSession()
			{
				$db = Database::getInstance();
				$mysqli = $db->getConnection();
				$query = "SELECT * FROM session  ";
				$stmt= $mysqli->query($query);
				return $stmt;
			}

		function showCountry()
			{
				$db = Database::getInstance();
				$mysqli = $db->getConnection();
				$query = "SELECT * FROM countries ";
				$stmt= $mysqli->query($query);
				return $stmt;
			}

		function showCourse()
	  		{
			 	$db = Database::getInstance();
			    $mysqli = $db->getConnection();
			    $query = "SELECT * FROM tbl_course ";
			    $stmt= $mysqli->query($query);
			    return $stmt;    
	  		}

		function showState()
			{
				$db = Database::getInstance();
				$mysqli = $db->getConnection();
				$query = "SELECT * FROM states ";
				$stmt= $mysqli->query($query);
				return $stmt;
			}

		function showCity()
			{
				$db = Database::getInstance();
				$mysqli = $db->getConnection();
				$query = "SELECT * FROM cities ";
				$stmt= $mysqli->query($query);
				return $stmt;
			}

		function showStudents()
			{
				$db = Database::getInstance();
				$mysqli = $db->getConnection();
				$query = "SELECT * FROM registration ";
				$stmt= $mysqli->query($query);
				return $stmt;
			}

		function showStudents1($id)
			{
				$db = Database::getInstance();
				$mysqli = $db->getConnection();
				$query = "SELECT * FROM registration  where id='".$id."'";
				$stmt= $mysqli->query($query);
				return $stmt;
			}

		function register($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
	                $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
					$pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$session)
			{
     			$db = Database::getInstance();
     			$mysqli = $db->getConnection();
      			$query = "INSERT INTO `registration` (`course`, `subject`, `fname`, `mname`, `lname`, `gender`, `gname`, `ocp`,`income`, `category`, `pchal`, `nationality`, `mobno`, `emailid`, `country`, `state`, `dist`, `padd`, `cadd`, `board`, `board1`,`roll`,`roll1`,`pyear`,`yop1`,`sub`,`sub1`,`marks`,`marks1`, `fmarks`,`fmarks1`,`session`,regno)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$reg=rand();
				$stmt= $mysqli->prepare($query);
				if(false===$stmt)
					{
					     trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
					}
			    else
					{
						$stmt->bind_param('sssssssssssssssssssssssssssssssss',$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,$nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,$pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$session,$reg);
						$stmt->execute();
					}
   			}

		function edit_std($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
		            $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
					$pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id)
			{

			 	$db = Database::getInstance();
				$mysqli = $db->getConnection();
				$query = "update registration set course=?,subject=?,fname=?,mname=?,lname=?,gender=?,gname=?,ocp=?, income=?,category=?,pchal=?,nationality=?,mobno=?,emailid=?,country=?,state=?,dist=?
			        ,padd=?,cadd=?,board=?,roll=?,pyear=?,sub=?,marks=?,fmarks=?,board1=?,roll1=?,yop1=?,sub1=?
			        ,marks1=?,fmarks1=? where id=?";

				$stmt= $mysqli->prepare($query);
				if(false===$stmt)
					{
						trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
					}
				$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssi',$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,$nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,$pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id);

			  	if ( false===$rc )
					{
				      	die('bind_param() failed: ' . htmlspecialchars($stmt->error));
				  	}
				$rc=$stmt->execute();
				if ( false==$rc )
					{
					    die('execute() failed: ' . htmlspecialchars($stmt->error));
					}
			
			}

		function del_std($id)
			{

			   	$db = Database::getInstance();
			    $mysqli = $db->getConnection();
			    $query="delete from registration where id=?";
			    $stmt= $mysqli->prepare($query);
			    $stmt->bind_param('i',$id);
				$stmt->execute();
			  
			}

	}

?>
