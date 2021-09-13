<?php

  include('App/Model/Course/Course.php');
  $obj=new Course_Model();

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
      case 'add-course':
        if(isset($_POST['submit']))
          {
              $obj->create_course($_POST['course-short'],$_POST['course-full'],$_POST['cdate']);
              echo "<script>alert('Course Added Successfully')</script>";
          }
        include "App/View/pages/Course/add-course.php";
        break;

      case 'view-course':
        $rs=$obj->showCourse();
        if(isset($_GET['del']))
          {
              $obj->del_course(intval($_GET['del']));
              echo "<script>alert('Course has been deleted')</script>";
              echo "<script>window.location.href='index.php?Controller=Course&action=view-course'</script>";
          }
        include "App/View/pages/Course/view-course.php";
        break;

      case 'edit-course':
        $id=$_GET['cid'];
        $rs=$obj->showCourse1($id);
        $res=$rs->fetch_object();
        if(isset($_POST['submit']))
          {
              $obj->edit_course($_POST['course-short'],$_POST['course-full'],$_POST['udate'],$id);
              echo '<script>';
              echo 'alert("Course Updated Successfully")';
              echo '</script>';
              echo "<script>window.location.href='index.php?Controller=Course&action=view-course'</script>";
          }
        include "App/View/pages/Course/edit-course.php";
        break;

      default:
      include "App/View/pages/Course/add-course.php";
      break;
    }

?>
