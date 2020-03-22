<html>
    <head>
    <title>BPI</title>
    </head>
    <link type="text/css" rel="stylesheet" src="css/style.css">
   <body style="background-color: cadetblue">
    <form method="post" action="addmission/store.php">
    <fieldset>
        <legend>Admission
        </legend>
        <label>Admission Fee:
            <input type="checkbox"  name="a_fee_yes">
            Yes
            <input type="checkbox"   name="a_fee_no">
            No
        </label><br>
        <label>Semester Fee:</label>
        <input type="text" name="sem_fee">
        <br>
        <label>Admission Date:
            <input type="date" name="a_date" placeholder="Must Enter Admission Date"></label><br>
        <label>Class Roll:
            <input type="" name="c_roll"></label><br>

        <label>Student Name (Bangla):
            <input type="text" name="st_nm_bangla" placeholder="Enter Student Name Here In Bangla" required></label><br>
        <label>Upload Photo:</label>
        <input type="file" name="p_file">
        <br>
        <label>Student Name:
            <input type="text" name="st_nm" placeholder="Enter Student Name Here" required></label><br>
        <label>Father Name:
            <input type="text" name="fname" placeholder="Enter Father Name Here" required></label><br>
        <label>Mother Name:
            <input type="text" name="mname" placeholder="Enter Mother Name Here" required></label><br>
        <label>SSC Roll:
            <input type="text" maxlength="11" name="ssc_roll" placeholder="Enter SSC Roll"></label><br>
        <label>SSC Registration:
            <input type="text" name="ssc_reg" placeholder="Enter SSC Registration Number"></label><br>
        <label>SSC Year:
            <input type="text" name="ssc_year" placeholder="Must Enter Your SSC Year"></label><br>
        <label>SSC GPA:
            <input type="text" name="ssc_gpa" placeholder="Must Enter Your SSC GPA"></label><br>
        <select name="technology">
            <option>...Technology...</option>
            <option>Computer</option>
            <option>Electrical</option>
            <option>Automobile</option>
            <option>Architecture</option>
            <option>Mechanical</option>
            <option>Civil</option>
            <option>Surveying</option>
        </select></label><br>

        <label>Admission Approval:
            <input type="checkbox"  name="a_a_yes">
            Yes
            <input type="checkbox"  name="a_a_no">
            No
        </label><br>
        <label>User ID:
            <input type="text" name="u_id" placeholder="Enter User ID" required></label><br>
        <label>Application ID:
            <input type="text" name="application_id" placeholder="Enter Application ID" required></label><br>


        <label>Gender:
            <input type="checkbox" name="female">
            Female
            <input type="checkbox" name="male">
            Male
        </label><br>
        <label>Date Of Birth:
            <input type="date" name="dob" placeholder="Must Enter Date Of Birth"></label><br>
        <label>Address:
            <input type="text" name="street" placeholder="Street Address"><br>
            <input type="text" name="address" placeholder="Address Line 2"><br>
            <input type="text" name="city" placeholder="City"><br>
            <input type="text" name="state" placeholder="State/Provience/Region"><br>
            <input type="text" name="postal" placeholder="Postal/ZipCode"><br>
            <select name="country">
                <option>...Country...</option>
                <option>Bangladesh</option>
                <option>India</option>
                <option>Pakistan</option>
                <option>Bhutan</option>
                <option>Sweden</option>
                <option>Canada</option>
            </select></label><br>
        <label>Student Mobile Number:
            <input type="text" maxlength="11" name="st_mobile" placeholder="xxxxxxxxx"></label><br>

        <label>Father Mobile Number:
            <input type="text" maxlength="11" name="f_mobile" placeholder="xxxxxxxxx"></label><br>

        <label>Mother Mobile Number:
            <input type="text" maxlength="11" name="m_mobile" placeholder="xxxxxxxxx"></label><br>
        <label>Guardian Mobile Number:
            <input type="text" maxlength="11" name="g_mobile" placeholder="xxxxxxxxx"></label><br>

        <select name="board">
            <option>...SSC Board...</option>
            <option>Rajshahi</option>
            <option>Rangpur</option>
            <option>Khulna</option>
            <option>Dhaka</option>
            <option>Barishal</option>
            <option>Chittagong</option>
        </select></label><br>

        <label>Passport Photo:
            <input type="checkbox" name="p_p_yes">
            Yes
            <input type="checkbox" name="p_p_no">
            No
        </label><br>
        <label>Upload Testimonial:</label>
        <input type="file" name="t_file">
        <br>
        <label>Upload Original Mark Sheet:</label>
        <input type="file" name="m_file">
        <br>
        <label>Remark:
            <input type="checkbox" name="r_yes">
            Yes
            <input type="checkbox" name="r_no">
            No
        </label><br>
        <label>Remark Pay:
            <input type="checkbox" name="re_yes">
            Yes
            <input type="checkbox" name="re_no">
            No
        </label><br>
        <label>Payment ID:
            <input type="text" name="pay_id" placeholder="Enter Payment ID"></label><br>
        <select name="institute">
            <option>...Admission Institute...</option>
            <option>BPI</option>
            <option>REI</option>
        </select></label><br>
        <select name="ref_by">
            <option>...Referred  By...</option>
            <option>Student</option>
            <option>Teacher</option>
            <option>Staff</option>
        </select></label><br>
        <label>Referred Student Name:
            <input type="text" name="ref_st_nm" placeholder="Enter Referred Student Name"></label><br>
        <select name="ref_st_tech">
            <option>...Referred Student Technology...</option>
            <option>Computer</option>
            <option>Electrical</option>
            <option>Automobile</option>
            <option>Architecture</option>
            <option>Mechanical</option>
            <option>Civil</option>
            <option>Surveying</option>
        </select></label><br>
        <label>Referred Student Roll:
            <input type="text" name="ref_st_roll" placeholder="Enter Referred Student Roll"></label><br>
        <label>Referred Student Session:
            <input type="text" name="ref_st_session" placeholder="Enter Referred Student Session"></label><br>
        <label>Referred Student Mobile:
            <input type="text" maxlength="11" name="ref_st_mobile" placeholder="Enter Referred Student Mobile"></label><br>


        <input type="submit">
        
    </fieldset> 
    </form>
       </body>
    
    
</html>