<?php  session_start(); ?>
<?php require_once('include/header.php'); ?>
<div class="container">
    <div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-8">
       <h1>Admission From</h1>
      

    <div class="form_opt">
        <form action="admission.php" method="post">
            <div class="block">
            <label for="s_name">Student Name: </label>
            <input type="text" id="s_name" name="st_name" value="<?=(isset($_SESSION['student_name_show']))?  $_SESSION['student_name_show']:'' ?>">
            </div>
            <div class="out_put"><?=isset($_SESSION['student_name_error'])?$_SESSION['student_name_error']:'';?></div>


            <div class="block">
            <label>Student Father's Name: </label>
            <input type="text" name="st_father_name"  value="<?=(isset($_SESSION['student_father_name_show']))?  $_SESSION['student_father_name_show']:'' ?>">
            </div>
            <div class="out_put"><?=isset($_SESSION['student_father_name_error'])?$_SESSION['student_father_name_error']:'';?></div>


            <div class="block">
            <label>Student Mother's Name: </label>
            <input type="text" name="st_mother_name"  value="<?=(isset($_SESSION['student_mother_name_show']))?  $_SESSION['student_mother_name_show']:'' ?>">
            </div>
            <div class="out_put"><?=isset($_SESSION['student_mother_name_error'])?$_SESSION['student_mother_name_error']:'';?></div>


            <div class="block">
            <label for="s_class">Class: </label>
            <select name="st_class_name" id="s_class">
                <option value="" selected>Select Class</option>
                <option value="one">One</option>
                <option value="two">Two</option>
                <option value="three">Three</option>
                <option value="four">Four</option>
                <option value="five">Five</option>
                <option value="six">Six</option>
                <option value="seven">Seven</option>
                <option value="eight">Eight</option>
                <option value="nine">Nine</option>
                <option value="ten">Ten</option>
            </select>
            </div>
            <div class="out_put"><?=isset($_SESSION['student_class_error'])?$_SESSION['student_class_error']:'';?></div>


            <div class="block">
            <label for="s_roll">Roll No: </label>
            <input type="number" id="s_roll" name="st_roll"  value="<?=(isset($_SESSION['student_roll_show']))?  $_SESSION['student_roll_show']:'' ?>">
            </div>
            <div class="out_put"><?=isset($_SESSION['student_roll_error'])?$_SESSION['student_roll_error']:'';?></div>


            <div class="block">
            <label for="s_id">Student ID: </label>
            <input type="number" id="s_id" name="st_id"  value="<?=(isset($_SESSION['student_id_show']))?  $_SESSION['student_id_show']:'' ?>">
            </div>
            <div class="out_put"><?=isset($_SESSION['student_id_error'])?$_SESSION['student_id_error']:'';?></div>

     <button class="bg-sucess" type="submit" name="submit">Submit</button>
        </form>
        <div class="list">
            <a href="admit_list.php">View Student's List &#8594;</a>
        </div>
    </div>
</div>
<div class="col-lg-2"></div>
</div>
</div>
    

<?php require_once('include/footer.php'); ?>

<?php session_unset(); ?>