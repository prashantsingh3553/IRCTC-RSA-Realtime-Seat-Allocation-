<?php session_start();
    include_once 'dbms.in.php';

    $p="select * from rac1 where status=0";
	$r1=mysqli_query($conn,$p) or die("Can't Execute Query...");

     while($row=mysqli_fetch_assoc($r1))
                                {
                                    
                                        
                                            
                                        while(1)
                                        {
                                                $q1="select * from rac limit 1";
                                                if($row10=mysqli_query($conn,$q1))
                                                {
                                                    $row1=mysqli_fetch_assoc($row10);

                                                    if($row1["status"]== 1)
                                                    {

                                                        $var=$row1['pnr_no'];

                                                        $q2="delete from rac where pnr_no = '$var'";
                                                        mysqli_query($conn,$q2);
                                                        $var1=$row1['pnr_no'];
                                                        $var2=$row1['name'];
                                                        $var3=$row1['class'];
                                                        $var4=$row['seat_no'];
                                                        $var5=$row['from1'];
                                                        $var6=$row1['to1'];
                                                        $var7=$row1['age'];
                                                        $var8=$row1['sex'];
                                                        $var9=$row1['adhaar_no'];
                                                        $q3="insert into rac1 values('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9',0,1,1)";
                                                        mysqli_query($conn,$q3);
                                                        $mobile="8007678890";
                                                        $message= $var4." Your Seat From ".$var5." to ".$var6." is confirmed";
                                                        $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8007678890&Password=Agoodboy123&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=garungmZ5PVjInKRd02Q4Sa9kcwtlA") ,true);
                                                        if ($json["status"]==="success") {
                                                            echo $json["msg"];
                                                            //your code when send success
                                                        }else{
                                                            echo $json["msg"];
                                                            //your code when not send
                                                        }

                                                        break;
                                                    }
                                                    else
                                                    {
                                                        $var=$row1['pnr_no'];
                                                        $q2="delete from rac where pnr_no = '$var'";
                                                        mysqli_query($conn,$q2);
                                                    }
                                                }
                                        }
                                        
                                        
                                        
                                        
                                        while(1)
                                        {
                                                 $q4="select * from rac limit 1";
                                                 if($row14=mysqli_query($conn,$q4))
                                                 {
                                                      $row4=mysqli_fetch_assoc($row14);
                                                        if($row4["status"]==1)
                                                        {
                                                            $var=$row4['pnr_no'];
                                                            $q5="delete from rac where pnr_no = '$var' ";
                                                            mysqli_query($conn,$q5);
                                                            $var1=$row4['pnr_no'];
                                                            $var2=$row4['name'];
                                                            $var3=$row4['class'];
                                                            $var4=$row['seat_no'];
                                                            $var5=$row['from1'];
                                                            $var6=$row4['to1'];
                                                            $var7=$row4['age'];
                                                            $var8=$row4['sex'];
                                                            $var9=$row4['adhaar_no'];
                                                            $q3="insert into rac1 values('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9',0,1,1)";
                                                            mysqli_query($conn,$q3);
                                                            
                                                             $mobile="8007678890";
                                                                $message= $var4." Your Seat From ".$var5." to ".$var6." is confirmed";
                                                                $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8007678890&Password=Agoodboy123&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=garungmZ5PVjInKRd02Q4Sa9kcwtlA") ,true);
                                                                if ($json["status"]==="success") {
                                                                    echo $json["msg"];
                                                                    //your code when send success
                                                                }else{
                                                                    echo $json["msg"];
                                                                    //your code when not send
                                                                }
                                                                

                                                            break;
                                                        }
                                                        else
                                                        {
                                                            $var=$row4['pnr_no'];
                                                            $q2="delete from rac where pnr_no = '$var'";
                                                            mysqli_query($conn,$q2);
                                                        }
                                                 }
                                        }
                                             
                                        
                                }




        $q="select * from pnr where status=0";
	    $row9=mysqli_query($conn,$q) or die("Can't Execute Query...");

  
                            
                                while($row=mysqli_fetch_assoc($row9))
                                {
                                    
                                        
                                         while(1)
                                        {
                                                $q1="select * from rac limit 1";
                                                if($row10=mysqli_query($conn,$q1))
                                                {
                                                    $row1=mysqli_fetch_assoc($row10);

                                                    if($row1["status"]== 1 )
                                                    {

                                                        $var=$row1['pnr_no'];

                                                        $q2="delete from rac where pnr_no = '$var'";
                                                        mysqli_query($conn,$q2);
                                                        $var1=$row1['pnr_no'];
                                                        $var2=$row1['name'];
                                                        $var3=$row1['class'];
                                                        $var4=$row['seat_no'];
                                                        $var5=$row['from1'];
                                                        $var6=$row1['to1'];
                                                        $var7=$row1['age'];
                                                        $var8=$row1['sex'];
                                                        $var9=$row1['adhaar_no'];
                                                        $q3="insert into rac1 values('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9',0,1,1)";
                                                        mysqli_query($conn,$q3);
                                                        
                                                        
                                                                $mobile="8007678890";
                                                                $message= $var4." Your Seat From ".$var5." to ".$var6." is confirmed";
                                                                $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8007678890&Password=Agoodboy123&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=garungmZ5PVjInKRd02Q4Sa9kcwtlA") ,true);
                                                                if ($json["status"]==="success") {
                                                                    echo $json["msg"];
                                                                    //your code when send success
                                                                }else{
                                                                    echo $json["msg"];
                                                                    //your code when not send
                                                                }
                                                                
                                                        


                                                        $val=$row['pnr_no'];
                                                        $qt="delete from pnr where pnr_no = '$val'";
                                                        mysqli_query($conn,$qt);
                                                        break;
                                                    }
                                                    else
                                                    {
                                                        $var=$row1['pnr_no'];
                                                        $q2="delete from rac where pnr_no = '$var'";
                                                        mysqli_query($conn,$q2);
                                                    }
                                                }
                                        }
                                        
                                        
                                        
                                        
                                        while(1)
                                        {
                                                 $q4="select * from rac limit 1";
                                                 $row14=mysqli_query($conn,$q4);
                                                  $row4=mysqli_fetch_assoc($row14);
                                                    if($row4["status"]==1)
                                                    {
                                                        $var=$row4['pnr_no'];
                                                        $q5="delete from rac where pnr_no = '$var' ";
                                                        mysqli_query($conn,$q5);
                                                        $var1=$row4['pnr_no'];
                                                        $var2=$row4['name'];
                                                        $var3=$row4['class'];
                                                        $var4=$row['seat_no'];
                                                        $var5=$row['from1'];
                                                        $var6=$row4['to1'];
                                                        $var7=$row4['age'];
                                                        $var8=$row4['sex'];
                                                        $var9=$row4['adhaar_no'];
                                                        $q3="insert into rac1 values('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9',0,1,1)";
                                                         
                                                        

                                                        mysqli_query($conn,$q3);
                                                        
                                                        $mobile="8007678890";
                                                        $message= $var4." Your Seat From ".$var5." to ".$var6." is confirmed";
                                                        $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8007678890&Password=Agoodboy123&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=garungmZ5PVjInKRd02Q4Sa9kcwtlA") ,true);
                                                        if ($json["status"]==="success") {
                                                            echo $json["msg"];
                                                            //your code when send success
                                                        }else{
                                                            echo $json["msg"];
                                                            //your code when not send
                                                        }
                                                        
                                                        break;
                                                    }
                                                    else
                                                    {
                                                        $var=$row4['pnr_no'];
                                                        $q2="delete from rac where pnr_no = '$var'";
                                                        mysqli_query($conn,$q2);
                                                    }
                                        }
                                        
                                    
        
                                }
                        header("Location:./dashboard.php");
                          

?>