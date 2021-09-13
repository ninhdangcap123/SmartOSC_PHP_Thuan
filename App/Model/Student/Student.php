<?php
	require('App/Model/BaseModel.php');
	class Student_Model extends BaseModel
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
						$pdo = $db->getConnection();
						$query = "SELECT loginid, password FROM tbl_login where loginid=? and password=? ";
						$stmt= $pdo->prepare($query);
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
				
				$showSession = "SELECT * FROM session  ";
				$this = BaseModel::show($showSession);
            	return $this;
			}

		function showCountry()
			{
				
				$showCountry = "SELECT * FROM countries ";
				$this = BaseModel::show($showCountry);
            	return $this;
			}

		function showCourse()
	  		{
			 	
			    $showCourse = "SELECT * FROM tbl_course ";
			    $this = BaseModel::show($showCourse);
            	return $this;
	  		}

		function showState()
			{
				
				$showState = "SELECT * FROM states ";
				$this = BaseModel::show($showState);
            	return $this;				
			}

		function showCity()
			{
				
				$showCity = "SELECT * FROM cities ";
				$this = BaseModel::show($showci);
            	return $this;
			}

		function showStudents()
			{
				
				$showStudents = "SELECT * FROM registration ";
				$this = BaseModel::show($showStudents);
            	return $this;
			}

		function showStudents1($id)
			{
				
				$showStudents1 = "SELECT * FROM registration  where id='".$id."'";
				$this = BaseModel::show($showStudents1);
            	return $this;
			}

		function register($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
	                $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
					$pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$session)
			{
     			
      			$query = "INSERT INTO `registration` (`course`, `subject`, `fname`, `mname`, `lname`, `gender`, `gname`, `ocp`,`income`, `category`, `pchal`, `nationality`, `mobno`, `emailid`, `country`, `state`, `dist`, `padd`, `cadd`, `board`, `board1`,`roll`,`roll1`,`pyear`,`yop1`,`sub`,`sub1`,`marks`,`marks1`, `fmarks`,`fmarks1`,`session`,regno)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$reg=rand();
				$stmt= $pdo->prepare($query);
				if(false===$stmt)
					{
					     trigger_error("Error in query");
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
				$edit = "update registration set course=?,subject=?,fname=?,mname=?,lname=?,gender=?,gname=?,ocp=?, income=?,category=?,pchal=?,nationality=?,mobno=?,emailid=?,country=?,state=?,dist=?
			        ,padd=?,cadd=?,board=?,roll=?,pyear=?,sub=?,marks=?,fmarks=?,board1=?,roll1=?,yop1=?,sub1=?
			        ,marks1=?,fmarks1=? where id=?";
				
				$this = BaseModel::edit($edit,$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,$nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,$pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id;
            	return $this;
  					
			
			}

		function del_std($id)
			{			   	
			    $del="delete from registration where id=?";
			    $this = BaseModel::del($del,$id);
            	return $this;
			  
			}

	}

?>
