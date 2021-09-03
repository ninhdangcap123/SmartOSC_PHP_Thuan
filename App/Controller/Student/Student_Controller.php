<?php
  include('App/Model/Student/Student_Model.php');
  $obj=new Student_Model();
  if (isset($_GET['action']))
  {
   $action = $_GET['action'];
  }
  else {
   $action = '';
  }

  switch ($action)
  {
    case 'login':
      if(isset($_POST['submit']))
      {
      	 $_SESSION['login']=$_POST['id'];
      	 $obj->login($_POST['id'],$_POST['password']);
      }
      include "App/View/pages/Student/login.php";
      break;

    case 'logout':
      include "App/View/pages/Student/logout.php";
      break;

    case 'register':
      $rs=$obj->showCourse();
      $rs1=$obj->showCountry();
      $rs2=$obj->showState();
      $rs3=$obj->showCity();
      $ses=$obj->showSession();
      $res1=$ses->fetch_object();
      if(isset($_POST['submit']))
      {
          $obj->register($_POST['course-short'],$_POST['c-full'],$_POST['fname'],$_POST['mname'],$_POST['lname'],
                    $_POST['gname'],$_POST['ocp'],$_POST['gender'],$_POST['income'],$_POST['category'],
                    $_POST['ph'],$_POST['nation'],$_POST['mobno'],$_POST['email'],$_POST['country'],$_POST['state'],
                    $_POST['city'],$_POST['padd'],$_POST['cadd'],$_POST['board1'],$_POST['board2'],$_POST['roll1'],
                    $_POST['roll2'],$_POST['pyear1'],$_POST['pyear2'],$_POST['sub1'],$_POST['sub2'],$_POST['marks1'],
                    $_POST['marks2'],$_POST['fmarks1'],$_POST['fmarks2'] ,$_POST['session']);
      }
      include "App/View/pages/Student/register.php";
      break;

    case 'session':
      $rs=$obj->showSession();
      include "App/View/pages/Student/session.php";
      break;

    case 'edit-std':
      $id=$_GET['id'];
      $rs=$obj->showStudents1($id);
      $res=$rs->fetch_object();
      $c=$res->course;
      $cname=$obj->showCourse1($c);
      $res1=$cname->fetch_object();
      $rs1=$obj->showCourse();
      $rs2=$obj->showCountry();
      $rs3=$obj->showState();
      $rs4=$obj->showCity();
      if(isset($_POST['submit']))
      {
         $obj->edit_std($_POST['course-short'],$_POST['c-full'],$_POST['fname'],$_POST['mname'],$_POST['lname'],
                      $_POST['gender'],$_POST['gname'],$_POST['ocp'],$_POST['income'],$_POST['category'],$_POST['ph'],
                      $_POST['nation'],$_POST['mobno'],$_POST['email'],$_POST['country'],$_POST['state'],$_POST['city'],
                      $_POST['padd'],$_POST['cadd'],$_POST['board1'],$_POST['board2'],$_POST['roll1'],$_POST['roll2'],
                      $_POST['pyear1'],$_POST['pyear2'],$_POST['sub1'],$_POST['sub2'],$_POST['marks1'],$_POST['marks2'],
                      $_POST['fmarks1'],$_POST['fmarks2'] ,$_GET['id']);
      }
      include "App/View/pages/Student/edit-std.php";
      break;

    case 'view':
      $rs=$obj->showstudents();
      if(isset($_GET['del']))
      {
        $obj->del_std(intval($_GET['del']));
      }
      include "App/View/pages/Student/view.php";
      break;

    case 'dashboard':
      include "App/View/pages/dashboard.php";
      break;

    default:
    include "App/View/pages/Student/login.php";
      break;



}





 ?>
