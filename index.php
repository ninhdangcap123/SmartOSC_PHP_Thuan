<?php
session_start();

 if (isset($_GET['Controller']))
 {
  $controller = $_GET['Controller'];
 }
 else
 {
  $controller = '';
 }

 switch ($controller)
 {
      case 'Student':
         include "App/Controller/Student/Student_Controller.php";
         break;

      case 'Subject':
          include "App/Controller/Subject/Subject_Controller.php";
          break;

      case 'Course':
        include "App/Controller/Course/Course_Controller.php";
        break;






 }
 ?>
