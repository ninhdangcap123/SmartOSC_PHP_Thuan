<?php

  include('App/Model/Subject/Subject.php');
  $obj=new Subject_Model();

  if (isset($_GET['action']))
    {
      $action = $_GET['action'];
    }
  else 
    {
     $action = '';
    }

  switch ($action) 
    {
      case 'add-subject':
        $rs=$obj->showCourse();
        $rs1=$obj->showCourse();
        if(isset($_POST['submit']))
          {
              $obj->create_subject($_POST['course-short'],$_POST['course-full'],$_POST['sub1'],$_POST['sub2'],$_POST['sub3']);
              echo "<script>alert('Subjects Added Successfully')</script>";
          }
        include "App/View/pages/Subject/add-subject.php";
        break;

      case 'view-subject':
        $rs=$obj->showSubject();
        if(isset($_GET['del']))
          {
              $obj->del_subject(intval($_GET['del']));
              echo "<script>alert('Subject has been deleted')</script>";
              echo "<script>window.location.href='index.php?Controller=Subject&action=view-subject'</script>";
          }
        include "App/View/pages/Subject/view-subject.php";
        break;

      case 'edit-sub':
        $id=$_GET['sid'];
        $rs=$obj->showSubject1($id);
        $res=$rs->fetch_object();
        if(isset($_POST['submit']))
          {
              $id=$_GET['sid'];
              $obj->edit_subject($_POST['sub1'],$_POST['sub2'],$_POST['sub3'],$_POST['udate'],$id);
              echo '<script>';
              echo 'alert("Subject Updated Successfully")';
              echo '</script>';
          }
        include "App/View/pages/Subject/edit-sub.php";
        break;

      default:
      include "App/View/pages/Subject/add-subject.php";
      break;
    }
 ?>
