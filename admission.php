
<?php   

session_start();
require_once('db_con.php');
$student_name = $_POST['st_name'];
$student_father_name = $_POST['st_father_name'];
$student_mother_name = $_POST['st_mother_name'];
$student_class_name = $_POST['st_class_name'];
$student_roll = $_POST['st_roll'];
$student_id = $_POST['st_id'];
$isTrue = false;

// name validation
$valid_name = ctype_alpha(str_replace(' ','',$student_name));
$valid_name = htmlspecialchars($valid_name);
// father name validation
$valid_father_name = ctype_alpha(str_replace(' ','',$student_father_name));
$valid_father_name = htmlspecialchars($valid_father_name);
// mother name validation
$valid_m_name = ctype_alpha(str_replace(' ','',$student_mother_name));
$valid_m_name = htmlspecialchars($valid_m_name);
// student roll validation
$valid_s_roll = ctype_digit($student_roll);
$valid_s_roll = htmlspecialchars($valid_s_roll);
// student id validation
$valid_s_id = ctype_alnum($student_id);
$valid_s_id = htmlspecialchars($valid_s_id);

switch($student_class_name){
       case "one": 
        $_SESSION['student_class_name_show'] ="$student_class_name"; 
          break;
       case "two": 
        $_SESSION['student_class_name_show'] ="$student_class_name"; 
         break;
       case "three":
        $_SESSION['student_class_name_show'] ="$student_class_name"; 
        break;
       case "four": 
        $_SESSION['student_class_name_show'] ="$student_class_name"; 
        break;
        case "five": 
          $_SESSION['student_class_name_show'] ="$student_class_name"; 
            break;
          case "six": 
            $_SESSION['student_class_name_show'] ="$student_class_name"; 
            break;
          case "seven":
            $_SESSION['student_class_name_show'] ="$student_class_name"; 
           break;
          case "eight": 
            $_SESSION['student_class_name_show'] ="$student_class_name"; 
           break;
           case "nine":
            $_SESSION['student_class_name_show'] ="$student_class_name"; ;
          break;
         case "ten": 
          $_SESSION['student_class_name_show'] ="$student_class_name"; 
          break;
          
       default:
       $_SESSION['student_class_error'] ="Please select the class";
       header("location: index.php"); 
} 


// student name input
if($student_name == true){
if($valid_name == true){
  $_SESSION['student_name_show'] ="$student_name";
 
}else{

  $_SESSION['student_name_error'] ="Please use only letter";
  $isTrue = true;
}
}else{
  $_SESSION['student_name_error'] ="Please fill the name";
  $isTrue = true;

}
// student father name input
if($student_father_name==true){
if($valid_father_name == true){
  $_SESSION['student_father_name_show'] ="$student_father_name";
 
}else{
  $_SESSION['student_father_name_error'] ="Invalid Name";
  $isTrue = true;

}
}else{
  $_SESSION['student_father_name_error'] ="Please fill the father name";
  $isTrue = true;

}
// student Mother name input
if($student_mother_name == true){
if($valid_m_name == true){
  $_SESSION['student_mother_name_show'] ="$student_mother_name";
}else{
  $_SESSION['student_mother_name_error'] ="Invalid Name";
  $isTrue = true;

}
}else{
  $_SESSION['student_mother_name_error'] ="Please fill the mother name";
  $isTrue = true;

}
// student roll input
if($student_roll==true){
if($valid_s_roll == true){
  $_SESSION['student_roll_show'] ="$student_roll";
}else{
  $_SESSION['student_roll_error'] ="Invalid Roll";
  $isTrue = true;

}
}else{
  $_SESSION['student_roll_error'] ="Please fill the roll";
  $isTrue = true;

}

// student id input
if($student_id==true){
if($valid_s_id == true){
  $_SESSION['student_id_show'] ="$student_id";
}else{
  $_SESSION['student_id_error'] ="Invalid Id";
  $isTrue = true;

}
}else{
   $_SESSION['student_id_error'] ="Please fill the id";
   $isTrue = true;
}

if($isTrue){
  header("location: index.php");
}else{
 
  $db_insert = "INSERT INTO admit_infos(s_name,s_f_name,s_m_name,s_class,s_roll,s_sc_id) 
   VALUES('$student_name','$student_father_name','$student_mother_name','$student_class_name','$student_roll','$student_id')";

  $db_query = mysqli_query($db_connt,$db_insert) ;
  header("location: index.php");
}

?>

