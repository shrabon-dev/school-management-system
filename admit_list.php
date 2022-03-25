<?php require_once('include/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
<?php

require_once('db_con.php');



$db_select = "SELECT * FROM admit_infos" ;
$data_query = mysqli_query($db_connt,$db_select);
$data_arr = mysqli_fetch_assoc($data_query);



echo"<table> <tr><th>Student Name </th><th>Student Father Name </th><th> Student Mother Name </th>
<th> Student Class </th><th> Student Roll </th><th> Student Class ID </th></tr>";
while($data_arr = mysqli_fetch_assoc($data_query)){

    echo "<tr><td>".$data_arr['s_name']."</td><td>".$data_arr['s_f_name']."</td><td>".$data_arr['s_m_name'].
    "</td><td>".$data_arr['s_class']."</td><td>".$data_arr['s_roll']."</td><td>".$data_arr['s_sc_id']."</td></tr>";
}
echo"</table>";
echo"<br>";
?>

                     </div>
        <div class="col-lg-12">
        <div class="add">
           <a href="index.php">&#8592; Addmission Student</a>
        </div>
        </div>
    </div>
</div>

        

<?php require_once('include/footer.php'); ?>