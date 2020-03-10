<?php


class addmission
{
    public $a_fee_yes;
    public $s_fee_no;
    public $sem_fee;
    public $a_date;
    public $c_roll;
    public $lst_nm_bangla;
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
        } if (array_key_exists('pay_id', $data)) {
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

    }

    public function store()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=addmission', 'root', '');

            $sql = "INSERT INTO `users` (`user_id`, `email`, `password`) VALUES (:id, :email, :pass);";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => null,
                ':email' => $this->email,
                ':pass' => $this->password
            ));
            if ($stmt) {
                session_start();
                $_SESSION['message'] = 'Registration Successfull';
                $_SESSION['user'] = $this->email;
                header('location:signin.php');
            }


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
    public function edit()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=project-1', 'root', '');

            $query = 'UPDATE `users` SET fname = :fname, mname =:mname, lname= :lname, dob=:dob, hobby=:hobby,interest=:interest WHERE id= :id';
            $stmt = $pdo->prepare($query);
            $result = $stmt->execute(array(

                ':fname' => $this->firstname,
                ':mname' => $this->middlename,
                ':lname' => $this->lastname,
                ':dob' => $this->dob,
                ':hobby' => $this->hobby,
                ':interest' => $this->interest
            ));

            if ($result) {
                $_SESSION['message'] = "Sucessfully Updated";
                header('location:signin.php');
            }

            echo $stmt->rowCount(); // 1
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function login()
    {
//        $email = $info['email'];
//        $password = $info['password'];
        $pdo = new PDO('mysql:host=localhost;dbname=project-1', 'root', '');
        $sql = "SELECT * FROM `users` WHERE email=:email AND password=:password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':email' => $this->email, ':password' => $this->password));
        // $stmt->bindParam(1, $this->email);
        // $stmt->bindParam(2, $this->password);
        //  $stmt->execute();

//        $stmt->setFetchMode(PDO::FETCH_ASSOC);
//        $stmt->execute();
//        $data = $stmt->fetchAll();
//        print_r($data);
        if ($stmt->rowCount() === 1) {
            header('location:profile.php');
        }
        else if($stmt->rowCount() !== 1){
            $_SESSION['message']="Invalid Input";
            header('location:signin.php');
        }
//
//    }
    }


    /**
     *
     */



}