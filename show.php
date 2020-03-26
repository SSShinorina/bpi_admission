<?php
include_once ("../src/Admission.php");
$obj1=new Admission();
$obj1->setData($_GET);
$item=$obj1->show();

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


    <tr>
        <td><?php echo $item['id'] ?></td>
        <td><?php echo $item['a_fee'] ?></td>
        <td><?php echo $item['sem_fee'] ?></td>
        <td><?php echo $item['a_date'] ?></td>
        <td><?php echo $item['c_roll']?></td>
        <td><?php echo $item['st_nm_bangla'] ?></td>
        <td><img src="<?php echo $item['u_photo']?>"></td>
        <td><?php echo $item['st_nm'] ?></td>
        <td><?php echo $item['f_nm'] ?></td>
        <td><?php echo $item['m_nm'] ?></td>
        <td><?php echo $item['ssc_roll'] ?></td>
        <td><?php echo $item['ssc_reg'] ?></td>
        <td><?php echo $item['ssc_year'] ?></td>
        <td><?php echo $item['ssc_gpa'] ?></td>
        <td><?php echo $item['tech'] ?></td>
        <td><?php echo $item['a_approval'] ?></td>
        <td><?php echo $item['u_id'] ?></td>
        <td><?php echo $item['a_id'] ?></td>
        <td><?php echo $item['gender'] ?></td>
        <td><?php echo $item['dob'] ?></td>
        <td><?php echo $item['address'] ?></td>
        <td><?php echo $item['street'] ?></td>
        <td><?php echo $item['city'] ?></td>
        <td><?php echo $item['state'] ?></td>
        <td><?php echo $item['postal'] ?></td>
        <td><?php echo $item['country'] ?></td>
        <td><?php echo $item['st_number'] ?></td>
        <td><?php echo $item['f_number'] ?></td>
        <td><?php echo $item['m_number'] ?></td>
        <td><?php echo $item['g_number'] ?></td>
        <td><?php echo $item['ssc_board'] ?></td>
        <td><?php echo $item['pp_photo'] ?></td>
        <td><img src="<?php echo $item['u_testimonial']?>"></td>
        <td><img src="<?php echo $item['u_mark']?>"></td>
        <td><?php echo $item['remark'] ?></td>
        <td><?php echo $item['remark_pay'] ?></td>
        <td><?php echo $item['payment_id'] ?></td>
        <td><?php echo $item['a_institute'] ?></td>
        <td><?php echo $item['reffered_by'] ?></td>
        <td><?php echo $item['ref_st_nm'] ?></td>
        <td><?php echo $item['ref_st_tech'] ?></td>
        <td><?php echo $item['ref_st_roll'] ?></td>
        <td><?php echo $item['ref_st_session'] ?></td>
        <td><?php echo $item['ref_st_mobile'] ?></td>

    </tr>

</table>

</html>


