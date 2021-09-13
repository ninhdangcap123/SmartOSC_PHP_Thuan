<?php
  require('App/Model/BaseModel.php');
  class Course_Model extends BaseModel
    {
      function create_course($cshort,$cfull,$cdate)
        {
          
            $create = "insert into tbl_course(cshort,cfull,cdate)values(?,?,?)";
            $this = BaseModel::create($create,$cshort,$cfull,$cdate);
            return $this;
        }
      function showCourse()
        {
            
            $show = "SELECT * FROM tbl_course ";
            $this = BaseModel::show($show);
            return $this;
        }
      function showCourse1($cid)
        {
            
            $show1 = "SELECT * FROM tbl_course  where cid='".$cid."'";
            $this = BaseModel::show($show1);
            return $this;
            
        }
      function edit_course($cshort,$cfull,$udate,$id)
        {
             
            $edit = "update tbl_course set cshort=?,cfull=? ,update_date=? where cid=?";
            $this = BaseModel::edit($edit,$cshort,$cfull,$udate,$id);
            return $this;
             
        }
       function del_course($id)
        {
             
            $del="delete from tbl_course where cid=?";
            $this = BaseModel::del($del,$id);
            return $this;
        }
    }
?>
