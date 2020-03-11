<?php


class Admission
{
    public $a_fee_yes;
    public $s_fee_no;
    public $sem_fee;
    public $a_date;
    public $c_roll;
    public $st_nm_bangla;
    public $p_file;
    public $st_nm;
    public $fname;
    public $mname;
    public $ssc_roll;
    public $ssc_reg;
    public $ssc_year;
    public $ssc_gpa;
    public $technology;
    public $a_a_yes;
    public $a_a_no;
    public $u_id;
    public $application_id;
    public $female;
    public $male;
    public $dob;
    public $country;
    public $st_mobile;
    public $f_mobile;
    public $m_mobile;
    public $g_mobile;
    public $board;
    public $p_p_yes;
    public $p_p_no;
    public $t_file;
    public $m_file;
    public $r_yes;
    public $r_no;
    public $re_yes;
    public $re_no;
    public $pay_id;
    public $institute;
    public $ref_st_nm;
    public $ref_st_tech;
    public $ref_st_roll;
    public $ref_st_session;
    public $ref_st_mobile;
    public $street;
    public $address;
    public $city;
    public $sate;
    public $postal;


    public function setData($data = '')
    {
        if (array_key_exists('a_fee_yes', $data)) {
            $this->a_fee_yes = $data['a_fee_yes'];
        }
        if (array_key_exists('s_fee_no', $data)) {
            $this->s_fee_no = $data['s_fee_no'];
        }
        if (array_key_exists('sem_fee', $data)) {
            $this->sem_fee = $data['sem_fee'];
        }
        if (array_key_exists('a_date', $data)) {
            $this->a_date = $data['a_date'];
        }
        if (array_key_exists('c_roll', $data)) {
            $this->c_roll = $data['c_roll'];
        }
        if (array_key_exists('lst_nm_bangla', $data)) {
            $this->lst_nm_bangla = $data['lst_nm_bangla'];
        }
        if (array_key_exists('p_file', $data)) {
            $this->p_file = $data['p_file'];
        }
        if (array_key_exists('st_nm', $data)) {
            $this->st_nm = $data['st_nm'];
        }
        if (array_key_exists('fname', $data)) {
            $this->fname = $data['fname'];
        }
        if (array_key_exists('mname', $data)) {
            $this->mname = $data['mname'];
        }
        if (array_key_exists('ssc_roll', $data)) {
            $this->ssc_roll = $data['ssc_roll'];
        }
        if (array_key_exists('ssc_reg', $data)) {
            $this->ssc_reg = $data['ssc_reg'];
        }
        if (array_key_exists('ssc_year', $data)) {
            $this->ssc_year = $data['ssc_year'];
        }
        if (array_key_exists('ssc_gpa', $data)) {
            $this->ssc_gpa = $data['ssc_gpa'];
        }
        if (array_key_exists('technology', $data)) {
            $this->technology = $data['technology'];
        }
        if (array_key_exists('a_a_yes', $data)) {
            $this->a_a_yes = $data['a_a_yes'];
        }
        if (array_key_exists('a_a_no', $data)) {
            $this->a_a_no = $data['a_a_no'];
        }
        if (array_key_exists('u_id', $data)) {
            $this->u_id = $data['u_id'];
        }
        if (array_key_exists('application_id', $data)) {
            $this->application_id = $data['application_id'];
        }
        if (array_key_exists('female', $data)) {
            $this->female = $data['female'];
        }
        if (array_key_exists('male', $data)) {
            $this->male = $data['male'];
        }
        if (array_key_exists('dob', $data)) {
            $this->dob = $data['dob'];
        }
        if (array_key_exists('country', $data)) {
            $this->country = $data['country'];
        }
        if (array_key_exists('st_mobile', $data)) {
            $this->st_mobile = $data['st_mobile'];
        }
        if (array_key_exists('f_mobile', $data)) {
            $this->f_mobile = $data['f_mobile'];
        }
        if (array_key_exists('m_mobile', $data)) {
            $this->m_mobile = $data['m_mobile'];
        }
        if (array_key_exists('g_mobile', $data)) {
            $this->g_mobile = $data['g_mobile'];
        }
        if (array_key_exists('board', $data)) {
            $this->board = $data['board'];
        }
        if (array_key_exists('p_p_yes', $data)) {
            $this->p_p_yes = $data['p_p_yes'];
        }
        if (array_key_exists('p_p_no', $data)) {
            $this->p_p_no = $data['p_p_no'];
        }
        if (array_key_exists('t_file', $data)) {
            $this->t_file = $data['t_file'];
        }
        if (array_key_exists('m_file', $data)) {
            $this->m_file = $data['m_file'];
        }
        if (array_key_exists('r_yes', $data)) {
            $this->r_yes = $data['r_yes'];
        }
        if (array_key_exists('r_no', $data)) {
            $this->r_no = $data['r_no'];
        }
        if (array_key_exists('re_yes', $data)) {
            $this->re_yes = $data['re_yes'];
        }
        if (array_key_exists('re_no', $data)) {
            $this->re_no = $data['re_no'];
        }
        if (array_key_exists('pay_id', $data)) {
        $this->pay_id = $data['pay_id'];
        }
        if (array_key_exists('institute', $data)) {
        $this->institute = $data['institute'];
        }
        if (array_key_exists('ref_st_nm', $data)) {
            $this->ref_st_nm = $data['ref_st_nm'];
        }
        if (array_key_exists('ref_st_tech', $data)) {
            $this->ref_st_tech = $data['ref_st_tech'];
        }
        if (array_key_exists('ref_st_roll', $data)) {
            $this->ref_st_roll = $data['ref_st_roll'];
        }
        if (array_key_exists('ref_st_session', $data)) {
            $this->ref_st_session = $data['ref_st_session'];
        }
        if (array_key_exists('ref_st_mobile', $data)) {
            $this->ref_st_mobile = $data['ref_st_mobile'];
        }
        if (array_key_exists('street', $data)) {
            $this->street = $data['street'];
        }
        if (array_key_exists('address', $data)) {
            $this->address = $data['address'];
        }
        if (array_key_exists('city', $data)) {
            $this->city = $data['city'];
        }
        if (array_key_exists('sate', $data)) {
        $this->sate = $data['sate'];
        }
        if (array_key_exists('postal', $data)) {
            $this->postal = $data['postal'];
        }

    }

    public function store()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=admission', 'root', '');

            $sql = "INSERT INTO `st_info`(`id`, `photo`, `Technology`, `c_roll`, `Admission_Approval`, `User_Id`, 
`Application_Id`, `st_nm_bangla`, `st_nm`, `fname`, `mname`, `admission_date`, `ssc_board`, `ssc_roll`, `ssc_reg`, 
`ssc_year`, `photo_pp`, `Testimonial`, `Org_mark_sheet`, `Remark`, `Remark_pay`, `pay_id`, `photo_pick`, `House_no`, 
`Village`, `Post`, `District`, `st_mobile`, `f_mobile`, `m_mobile`, `police_station`, `g_mobile`, `admission_int`, 
`refered_by`, `ref_st_name`, `ref_st_tech`, `ref_st_roll`, `ref_st_session`, `ref_st_mobile`, `remarks`, `ssc_gpa`, 
`dob`, `sex`) 
VALUES (:id,:photo,:technology,:c_roll,:Admission_Approval,:user_id,:aplication_id,:st_nm_bangla,st_nm,fname,:mname,:admission_date,
:ssc_board,:ssc_roll,:ssc_reg,:ssc_year,:photo_pp,:testimonial,:org_mark_sheet,:remark,:remark_pay,:pay_id,:photo_pick,
:house_no,:village,:post,:district,:st_mobile,:f_mobile,:m_mobile,:police_station,:g_mobile,:admission_int,:refered_by,
:ref_st_name,:ref_st_tech,:ref_st_roll,:ref_st_session,:ref_st_mobile,:remarks,:ssc_gpa,:dob,:sex);";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => null,
                ':photo' => $this->p_file,
                ':technology' => $this->technology,
                ':c_roll' => $this->c_roll,
                ':Admission_Approval' => $this->a_a_yes,
                ':user_id' => $this->u_id,
                ':aplication_id' => $this->application_id,
                ':st_nm_bangla' => $this->st_nm_bangla,
                ':st_nm' => $this->st_nm,
                ':fname' => $this->fname,
                ':mname' => $this->mname,
                ':admission_date' => $this->a_date,
                ':ssc_board' => $this->board,
                ':ssc_roll' => $this->ssc_roll,
                ':ssc_reg' => $this->ssc_reg,
                ':ssc_year' => $this->ssc_year,
                ':photo_pp' => $this->p_p_yes,
                ':testimonial' => $this->t_file,
                ':org_mark_sheet' => $this->m_file,
                ':remark' => $this->r_yes,
                ':remark_pay' => $this->re_yes,
                ':pay_id' => $this->pay_id,
                ':photo_pick' => $this->p_p_yes,
                ':house_no' => $this->street,
                ':village' => $this->address,
                ':post' => $this->city,
                ':district' => $this->sate,
                ':st_mobile' => $this->st_mobile,
                ':f_mobile' => $this->f_mobile,
                ':m_mobile' => $this->m_mobile,
                ':police_station' => $this->postal,
                ':g_mobile' => $this->g_mobile,
                ':admission_int' => $this->institute,
                ':refered_by' =>  null,
                ':ref_st_name' => $this->ref_st_nm,
                ':ref_st_tech' => $this->ref_st_tech,
                ':ref_st_roll' => $this->ref_st_roll,
                ':ref_st_session' => $this->ref_st_session,
                ':ref_st_mobile' => $this->ref_st_mobile,
                ':remarks' =>  null,
                ':ssc_gpa' => $this->ssc_gpa,
                ':dob' => $this->dob,
                ':sex' => null
            ));
//            if ($stmt) {
////                session_start();
////                $_SESSION['message'] = 'Registration Successfull';
////                $_SESSION['user'] = $this->email;
////                header('location:signin.php');
//            }


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

    public function show()
    {
//        $email = $info['email'];
//        $password = $info['password'];
        $pdo = new PDO('mysql:host=localhost;dbname=admission', 'root', '');
        $sql = "SELECT * FROM `st_info`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array());
        // $stmt->bindParam(1, $this->email);
        // $stmt->bindParam(2, $this->password);
        //  $stmt->execute();

//        $stmt->setFetchMode(PDO::FETCH_ASSOC);
//        $stmt->execute();
//        $data = $stmt->fetchAll();
//        print_r($data);
//        if ($stmt->rowCount() === 1) {
//            header('location:profile.php');
//        }
//        else if($stmt->rowCount() !== 1){
//            $_SESSION['message']="Invalid Input";
//            header('location:signin.php');
//        }
//
//    }
    }


    /**
     *
     */



}