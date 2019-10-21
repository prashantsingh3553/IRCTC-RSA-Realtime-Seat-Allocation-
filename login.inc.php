<?php session_start();

if(isset($_POST['submit']))
{
    include_once 'dbms.in.php';
    
    $uid=mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
    
    echo $uid;
    echo $pwd;
    
     if(empty($uid)||empty($pwd))
    {
        header("Location:login.php?login=empty");
        exit();
    }
    else
    {
        $sql="SELECT * from users where tte_no='$uid'";
        $result=mysqli_query($conn,$sql);
         $resultcheck=mysqli_num_rows($result);
                
                if($resultcheck<1)
                {
                    header("Location:./login.php");
                    exit();
                }
                else
                {
                    if($row=mysqli_fetch_assoc($result))
                    {
                        if($row['pass']==$pwd)
                        {
							
							    header("location:./dashboard.php");
							
                        }
                    }
                    else
                    {
                        echo("Wrong");
                    }
                }
    }
}
?>