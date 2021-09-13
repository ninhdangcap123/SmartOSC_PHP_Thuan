<?php
  require('App/Model/Database.php');
  class Course_Model
    {
      function create_course($cshort,$cfull,$cdate)
        {
          
            $db = Database::getInstance();
            $mysqli = $db->getConnection();
            $query = "insert into tbl_course(cshort,cfull,cdate)values(?,?,?)";
            $stmt= $mysqli->prepare($query);
              if(false===$stmt)
                {
                   trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
                }
              else
                {
                   $stmt->bind_param('sss',$cshort,$cfull,$cdate);
                   $stmt->execute();
                }
        }
      function showCourse()
        {
            $db = Database::getInstance();
            $mysqli = $db->getConnection();
            $query = "SELECT * FROM tbl_course ";
            $stmt= $mysqli->query($query);
            return $stmt;
        }
      function showCourse1($cid)
        {
            $db = Database::getInstance();
            $mysqli = $db->getConnection();
            $query = "SELECT * FROM tbl_course  where cid='".$cid."'";
            $stmt= $mysqli->query($query);
            return $stmt;
        }
      function edit_course($cshort,$cfull,$udate,$id)
        {
             $db = Database::getInstance();
             $mysqli = $db->getConnection();
             $query = "update tbl_course set cshort=?,cfull=? ,update_date=? where cid=?";
             $stmt= $mysqli->prepare($query);
             $stmt->bind_param('sssi',$cshort,$cfull,$udate,$id);
             $stmt->execute();
        }
       function del_course($id)
        {
             $db = Database::getInstance();
             $mysqli = $db->getConnection();
             $query="delete from tbl_course where cid=?";
             $stmt= $mysqli->prepare($query);
             $stmt->bind_param('s',$id);
             $stmt->execute();    
        }
    }
?>
