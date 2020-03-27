<?php
include_once ("../src/Admission.php");
$obj1=new Admission();
$items=$obj1->show();
?>
<html>


<table border="1">
    <tr>
        <td>Serial</td>
        <td>Admission Fee</td>
        <td>Semester Fee</td>
        <td>Admission Date</td>
        <td>Class Roll</td>
        <td>Student Name (Bangla)</td>
        <td>Photo</td>
        <td>Student Name</td>
        <td>Father Name</td>
        <td>Mother Name</td>
        <td>SSC Roll</td>
        <td>SSC Registration</td>
        <td>SSC Year</td>
        <td>SSC GPA</td>
        <td>Technology</td>
        <td>Admission Approval</td>
        <td>User ID</td>
        <td>Application ID</td>
        <td>Gender</td>
        <td>Date Of Birth</td>
        <td>Address</td>
        <td>street</td>
        <td>city</td>
        <td>state</td>
        <td>postal</td>
        <td>country</td>
        <td>Student Mobile Number</td>
        <td>Father Mobile Number</td>
        <td>Mother Mobile Number</td>
        <td>Guardian Mobile Number</td>
        <td>SSC Board</td>
        <td>Passport Photo</td>
        <td>Testimonial</td>
        <td>Original Mark Sheet</td>
        <td>Remark</td>
        <td>Remark Pay</td>
        <td>Payment ID</td>
        <td>Admission Institute</td>
        <td>Referred  By</td>
        <td>Referred Student Name</td>
        <td>Referred Student Technology</td>
        <td>Referred Student Roll</td>
        <td>Referred Student Session</td>
        <td>Referred Student Mobile</td>

    </tr>
<?php
foreach ($items as $data){

    ?>

    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['a_fee'] ?></td>
        <td><?php echo $data['sem_fee'] ?></td>
        <td><?php echo $data['a_date'] ?></td>
        <td><?php echo $data['c_roll'] ?></td>
        <td><?php echo $data['st_nm_bangla'] ?></td>
        <td><img src="<?php echo $data['u_photo']?>"></td>
        <td><?php echo $data['st_nm'] ?></td>
        <td><?php echo $data['f_nm'] ?></td>
        <td><?php echo $data['m_nm'] ?></td>
        <td><?php echo $data['ssc_roll'] ?></td>
        <td><?php echo $data['ssc_reg'] ?></td>
        <td><?php echo $data['ssc_year'] ?></td>
        <td><?php echo $data['ssc_gpa'] ?></td>
        <td><?php echo $data['tech'] ?></td>
        <td><?php echo $data['a_approval'] ?></td>
        <td><?php echo $data['u_id'] ?></td>
        <td><?php echo $data['a_id'] ?></td>
        <td><?php echo $data['gender'] ?></td>
        <td><?php echo $data['dob'] ?></td>
        <td><?php echo $data['address'] ?></td>
        <td><?php echo $data['street'] ?></td>
        <td><?php echo $data['city'] ?></td>
        <td><?php echo $data['state'] ?></td>
        <td><?php echo $data['postal'] ?></td>
        <td><?php echo $data['country'] ?></td>
        <td><?php echo $data['st_number'] ?></td>
        <td><?php echo $data['f_number'] ?></td>
        <td><?php echo $data['m_number'] ?></td>
        <td><?php echo $data['g_number'] ?></td>
        <td><?php echo $data['ssc_board'] ?></td>
        <td><?php echo $data['pp_photo'] ?></td>
        <td><img src="<?php echo $data['u_testimonial']?>"></td>
        <td><img src="<?php echo $data['u_mark']?>"></td>
        <td><?php echo $data['remark'] ?></td>
        <td><?php echo $data['remark_pay'] ?></td>
        <td><?php echo $data['payment_id'] ?></td>
        <td><?php echo $data['a_institute'] ?></td>
        <td><?php echo $data['reffered_by'] ?></td>
        <td><?php echo $data['ref_st_nm'] ?></td>
        <td><?php echo $data['ref_st_tech'] ?></td>
        <td><?php echo $data['ref_st_roll'] ?></td>
        <td><?php echo $data['ref_st_session'] ?></td>
        <td><?php echo $data['ref_st_mobile'] ?></td>
    </tr>
    
    <?php } ?>

</table>

</html>


