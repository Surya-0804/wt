<?php
    $users=[
        "user1"=>"password1",
        "user2"=> "password2"
    ];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];

        if(isset($users[$username])){
            if($password==$users[$username]){
                echo "Login Successfull";
            }else{
                echo "Invalid Password";
            }
        }else{
            echo "Invalid Username";
        }
    }
?>