<?php
  require('App/Model/BaseModel.php');

  class Subject_Model extends BaseModel
    {
      function showCourse()
        {
            
            $showCourse = "SELECT * FROM tbl_course ";
            $this = BaseModel::show($showCourse);
            return $this;
        }
      function showSubject()
        {
          
          $showSubject = "SELECT * FROM subject ";
          $this = BaseModel::show($showSubject);
          return $this;
        }
      function showSubject1($sid)
        {
          
          $showSubject1 = "SELECT * FROM subject where subid='$sid' ";
          $this = BaseModel::show($showSubject1);
          return $this;
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
                
                $create = "insert into subject(cshort,cfull,sub1,sub2,sub3)values(?,?,?,?,?)";
                $this = BaseModel::create($create,$cshort,$cfull,$sub1,$sub2,$sub3);
                return $this;
            }
        }
      function edit_subject($sub1,$sub2,$sub3,$udate,$id)
      	{
      	    
      			$edit = "update subject set sub1=?,sub2=? ,sub3=?,update_date=? where subid=?";
      			$this = BaseModel::edit($edit,$sub1,$sub2,$sub3,$udate,$id);
            return $this;
      	    
      	}
      function del_subject($id)
      	{
      	    
      	    $del="delete from subject where subid=?";
      	    $this = BaseModel::del($del,$id);
            return $this;
      	    
      	}

    }
?>
