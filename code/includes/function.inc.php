<?php
    function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat){
        
        $result;
        if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidUid($username){
        
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
            else{
                $result = false;
            }
            return $result;
    }

    function invalidEmail($email){
        
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function pwdMatch($pwd, $pwdrepeat){
        
        $result;
        if($pwd !== $pwdrepeat) {
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function uidExists($conn, $username, $email){
        
        $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=accountalreadyexists");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        
        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $name, $email, $username, $pwd){
        
        $sql = "INSERT INTO users (usersName, usersEmail, usersUid, UsersPwd) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../signup.php?error=none");
        exit();
    }

    function emptyInputLogin($username, $pwd){
        
        $result;
        if(empty($username) || empty($pwd)) {
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $username, $pwd){
        $uidExists = uidExists($conn, $username, $username); //connected to function uidExists

        if($uidExists === false){
            header("location: ../login.php?error=userexists");
            exit();
        }

        $pwdHashed = $uidExists["usersPwd"];
        $checkpwd = password_verify($pwd, $pwdHashed);

        if($checkpwd === false){
            header("location: ../login.php?error=wrongpwd");
            exit();
        }

        else if($checkpwd === true){
            session_start();
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["useruid"] = $uidExists["usersUid"];
            header("location: ../index.php");
            exit();
        }
    }

    function getUsersData($usersId){
        $array = array();
        $query = mysqli_query("SELECT * FROM 'users' where 'usersId' =" .$usersId);
        while($row = mysqli_fetch_assoc($query)){

            $array['usersId'] = $row['usersId'];
            $array['usersName'] = $row['userName'];
            $array['usersEmail'] = $row['usersEmail'];
            $array['usersUid'] = $row['usersUid'];
            $array['phone'] = $row['phone'];
            $array['address'] = $row['address'];
            $array['usertype'] = $row['usertype'];
        }
        return $array;
    } 

    function getId($usersName){
        $query = mysqli_query("SELECT usersId FROM users where usersName =". $usersName);
        while($row = mysqli_fetch_assoc($query)){
            return $row['usersid'];
        }
    }

