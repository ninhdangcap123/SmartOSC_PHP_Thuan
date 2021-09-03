<?php
require('App/Model/Database.php');
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
class Subject_Model
{
  function showCourse()
  {
      $db = Database::getInstance();
      $mysqli = $db->getConnection();
      $query = "SELECT * FROM tbl_course ";
      $stmt= $mysqli->query($query);
      return $stmt;
  }
  function showSubject()
  {
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query = "SELECT * FROM subject ";
    $stmt= $mysqli->query($query);
    return $stmt;
  }
  function showSubject1($sid)
  {
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query = "SELECT * FROM subject where subid='$sid' ";
    $stmt= $mysqli->query($query);
    return $stmt;
  }
  function create_subject($cshort,$cfull,$sub1,$sub2,$sub3)
  {
      if($cshort=="")
      {
          echo "<script>alert('Select Course Short Name')</script>";
      }
      else if($cfull=="")
      {
          echo "<script>alert('Select Course Full Name')</script>";
      }
      else
      {
          $db = Database::getInstance();
          $mysqli = $db->getConnection();
          $query = "insert into subject(cshort,cfull,sub1,sub2,sub3)values(?,?,?,?,?)";
          $stmt= $mysqli->prepare($query);
          if(false===$stmt)
          {
            trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
          }
          else
          {
            $stmt->bind_param('sssss',$cshort,$cfull,$sub1,$sub2,$sub3);
            $stmt->execute();
            echo "<script>alert('Subjects Added Successfully')</script>";
          }
        }
    }
    function edit_subject($sub1,$sub2,$sub3,$udate,$id)
  	{
  	    $db = Database::getInstance();
  			$mysqli = $db->getConnection();
  			$query = "update subject set sub1=?,sub2=? ,sub3=?,update_date=? where subid=?";
  			$stmt= $mysqli->prepare($query);
  			$stmt->bind_param('ssssi',$sub1,$sub2,$sub3,$udate,$id);
  			$stmt->execute();
  	    echo '<script>';
  	    echo 'alert("Subject Updated Successfully")';
  	    echo '</script>';
  	}
    function del_subject($id)
  	{
  	    $db = Database::getInstance();
  	    $mysqli = $db->getConnection();
  	    $query="delete from subject where subid=?";
  	    $stmt= $mysqli->prepare($query);
  	    $stmt->bind_param('i',$id);
  			$stmt->execute();
  	    echo "<script>alert('Subject has been deleted')</script>";
  			echo "<script>window.location.href='index.php?Controller=Subject&action=view-subject'</script>";
  	}

}
?>
