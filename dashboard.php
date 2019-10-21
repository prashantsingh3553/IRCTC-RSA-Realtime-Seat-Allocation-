<?php session_start();
    include_once 'dbms.in.php';
    $racq="select * from rac";
	$racres=mysqli_query($conn,$racq) or die("Can't Execute Query...");

    $q1="select * from pnr where seat_no like 'S1%' ";
	$res1=mysqli_query($conn,$q1) or die("Can't Execute Query...");
    $q2="select * from pnr where seat_no like 'S2%' ";
	$res2=mysqli_query($conn,$q2) or die("Can't Execute Query...");
    $q3="select * from pnr where seat_no like 'S3%' ";
	$res3=mysqli_query($conn,$q3) or die("Can't Execute Query...");
    $q4="select * from pnr where seat_no like 'S4%' ";
	$res4=mysqli_query($conn,$q4) or die("Can't Execute Query...");
    $q5="select * from pnr where seat_no like 'S5%' ";
	$res5=mysqli_query($conn,$q5) or die("Can't Execute Query...");
    $q6="select * from pnr where seat_no like 'S6%' ";
	$res6=mysqli_query($conn,$q6) or die("Can't Execute Query...");


    $q7="select * from pnr where seat_no like 'A1%' ";
	$ac1=mysqli_query($conn,$q7) or die("Can't Execute Query...");

    $q8="select * from pnr where seat_no like 'A2%' ";
	$ac2=mysqli_query($conn,$q8) or die("Can't Execute Query...");

    $q9="select * from pnr where seat_no like 'A3%' ";
	$ac3=mysqli_query($conn,$q9) or die("Can't Execute Query...");

    $q10="select * from pnr where seat_no like 'B1%' ";
	$ac4=mysqli_query($conn,$q10) or die("Can't Execute Query...");

    $q11="select * from pnr where seat_no like 'B1%' ";
	$ac5=mysqli_query($conn,$q11) or die("Can't Execute Query...");

     $q12="select * from wait ";
	$wait=mysqli_query($conn,$q12) or die("Can't Execute Query...");

    $q13="select * from rac1 ";
	$rac=mysqli_query($conn,$q13) or die("Can't Execute Query...");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-saarni</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">

    <link href="js/popper.min.js" rel="stylesheet">
    
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>

<body class="heavy-rain-gradient" style="height: 100vh;">

    <!--Main Navigation-->
    <header> 

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">
            
            <div class="flex-center pt-3" style="height: 20vh;">
                <img src="img/ir.svg" class="img-fluid">
            </div>

            <div class="list-group list-group-flush pt-3">
                <a href="dashboard.php" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard</a>
                <a href="profile.html" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Profile</a>
                <a href="challan.html" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-map mr-3"></i>Challan</a>
                <a href="login.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-sign-out mr-3"></i>Logout</a>
            </div>
        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-3 mx-lg-2">
        <div class="container-fluid mt-2">

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="dashboard.php">Home</a>
                        <span>/</span>
                        <span>Dashboard</span>
                    </h4>

                    <form class="d-flex justify-content-center">
                        <!-- Default input -->
                        <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                        <button class="btn btn-primary btn-sm my-0 p" type="submit">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>

                </div>

            </div>
            <!-- Heading -->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- List group links -->
                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Train No.
                                    <span class="badge badge-success badge-pill pull-right">15478</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Train Name
                                    <span class="badge badge-danger badge-pill pull-right">Sampark Kranti</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">From
                                    <span class="badge badge-primary badge-pill pull-right">Lucknow</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">To
                                    <span class="badge badge-primary badge-pill pull-right">Pune</span>
                                </a>
                            </div>
                            <!-- List group links -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
                
                <!--Grid column-->
                <div class="col-md-8 mb-4">

                    <!--Grid row-->
                    <div class="row wow fadeIn">

                        <!--Grid column-->
                        <div class="col-md-12 mb-1">

                            <!--Card-->
                            <div class="card">

                                <!--Card content-->
                                <div class="card-body">

                                    <div class="flex-center">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-sl-tab" data-toggle="pill" href="#pills-sl" role="tab" aria-controls="pills-sl" aria-selected="true">SL</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-ac-tab" data-toggle="pill" href="#pills-ac" role="tab" aria-controls="pills-ac" aria-selected="false">AC</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-rac-tab" role="tab" data-toggle="modal" data-target="#rac-modal" aria-controls="pills-rac" aria-selected="false" style="color: #007bff;">RAC</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-sl" role="tabpanel" aria-labelledby="pills-sl-tab">
                                            <div class="btn-toolbar flex-center" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group mr-2" role="group" aria-label="first-group">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#s1-modal">S1</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#s2-modal">S2</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#s3-modal">S3</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#s4-modal">S4</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#s5-modal">S5</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#s6-modal">S6</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-ac" role="tabpanel" aria-labelledby="pills-ac-tab">
                                            <div class="btn-toolbar flex-center" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group mr-2" role="group" aria-label="first-group">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#a1-modal">A1</button>
                                                     <button type="button" class="btn btn-default" data-toggle="modal" data-target="#a2-modal">A2</button>
                                                     <button type="button" class="btn btn-default" data-toggle="modal" data-target="#a3-modal">A3</button>
                                                   
                                                </div>
                                                <div class="btn-group mr-2" role="group" aria-label="second-group">
                                                     <button type="button" class="btn btn-default" data-toggle="modal" data-target="#b1-modal">B1</button>
                                                     <button type="button" class="btn btn-default" data-toggle="modal" data-target="#b2-modal">B2</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row wow fadeIn">

                        <!--Grid column-->
                        <div class="col-md-12 mb-4">

                            <!--Card-->
                            <div class="card flex-center">

                                <!--Card content-->
                                <div class="card-body">
                                    
                                    <form action="status.inc.php" method="post">
                                        
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#wait-modal">Waiting List</button>

                                            <button class="btn btn-sm btn-default" type="submit" name="submit">Update</button>

                                            <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#updatedrac-modal">Updated RAC Status</button>
                                        </div>
                                    
                                    </form>
                                    
                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            
            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card flex-center">

                        <!--Card content-->
                        <div class="card-body">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-md btn-primary" id="test">Train Schedule</button>
                                <button type="button" class="btn btn-md btn-primary">Live Status</button>
                            </div>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card flex-center">

                        <!--Card content-->
                        <div class="card-body" id="demo">
                            
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <script>
                $(document).ready(function(){
                    $('[id="test"]').click(function(){
                        $.getJSON("https://indianrailapi.com/api/v2/TrainSchedule/apikey/a69eb564699f3a348763fa39af6feb92/TrainNumber/22686/", function(result){

                            $.each(result.Route, function(i, field){

                                var myJSON = JSON.stringify(result.Route[i], null, " ");
                                $('[id="demo"]').append('<p>' + myJSON + '</p>');

                            });

                        });
                    });
                });
            </script>

        </div>

    </main>
    <!--Main layout-->

    <!-- Modal -->
    <div class="modal fade" id="s1-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">S1</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                        
                                while($row=mysqli_fetch_assoc($res1))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";
                            ?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover1" title="" data-img="" onclick="funcVideo()">QR</button></td>
                                    <td><button type="button" class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover" title="" data-img="img/fp.gif">FP</button></td>
                                    <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
     <!-- Modal -->
    <div class="modal fade" id="s2-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">S2</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($res2))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td>
                                    <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
     <!-- Modal -->
    <div class="modal fade" id="s3-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">S3</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($res3))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td><?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
     <!-- Modal -->
    <div class="modal fade" id="s4-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">S4</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($res4))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td><?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
     <!-- Modal -->
    <div class="modal fade" id="s5-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">S5</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($res5))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td>
                                     <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="s6-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">S6</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($res6))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td>
                                    <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal -->
    <div class="modal fade" id="rac-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">RAC</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($racres))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td>
                                    <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="a1-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">A1</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                        
                                while($row=mysqli_fetch_assoc($ac1))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";
                            ?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover1" title="" data-img="" onclick="funcVideo()">QR</button></td>
                                    <td><button type="button" class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover" title="" data-img="img/fp.gif">FP</button></td>
                                    <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="a2-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">A2</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                        
                                while($row=mysqli_fetch_assoc($ac2))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";
                            ?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover1" title="" data-img="" onclick="funcVideo()">QR</button></td>
                                    <td><button type="button" class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover" title="" data-img="img/fp.gif">FP</button></td>
                                    <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="a3-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">A3</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                        
                                while($row=mysqli_fetch_assoc($ac3))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";
                            ?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover1" title="" data-img="" onclick="funcVideo()">QR</button></td>
                                    <td><button type="button" class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover" title="" data-img="img/fp.gif">FP</button></td>
                                   <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="b1-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">B1</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                        
                                while($row=mysqli_fetch_assoc($ac4))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";
                            ?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover1" title="" data-img="" onclick="funcVideo()">QR</button></td>
                                    <td><button type="button" class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover" title="" data-img="img/fp.gif">FP</button></td>
                                    <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="b2-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">B2</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                        
                                while($row=mysqli_fetch_assoc($ac5))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";
                            ?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover1" title="" data-img="" onclick="funcVideo()">QR</button></td>
                                    <td><button type="button" class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit" data-toggle="popover" title="" data-img="img/fp.gif">FP</button></td>
                                    <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
         <!-- Modal -->
    <div class="modal fade" id="wait-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Waiting</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($wait))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td>
                                   <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    
         <!-- Modal -->
    <div class="modal fade" id="updatedrac-modal" tabindex="-1" role="dialog" aria-labelledby="rac-model-label" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document" style="width: 95%;">
            <div class="modal-content flex-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Updated RAC</h5>
                </div>
                <div class="modal-body" style="margin-top: 0px; padding-top: 0px;">
                    <table id="dtBasicExample" class="table table-striped table-bordered m-5" cellspacing="0" style="width : 80%;">
                        <thead>
                            <tr>
                                <th class="th-sm">PNR</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Class</th>
                                <th class="th-sm">Seat No.</th>
                                <th class="th-sm">From</th>
                                <th class="th-sm">To</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Sex</th>
                                <th class="th-sm">ID Number</th>
                                <th class="th-sm">Scan QR</th>
                                <th class="th-sm">Scan FP</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <?php 
                            
                                while($row=mysqli_fetch_assoc($rac))
                                {
                                    
                                    echo "<tr>
                                    <td>$row[pnr_no]</td>
                                    <td>$row[name]</td>
                                    <td>$row[class]</td>
                                    <td>$row[seat_no]</td>
                                    <td>$row[from1]</td>
                                    <td>$row[to1]</td>
                                    <td>$row[age]</td>
                                    <td>$row[sex]</td>
                                    <td>$row[adhaar_no]</td> ";?>
                                    <td><button class="btn btn-sm btn-primary" style="margin-top: -5px; margin-bottom: -5px;" type="submit">QR</button></td>
                                    <td><button class="btn btn-sm btn-success" style="margin-top: -5px; margin-bottom: -5px;" type="submit">FP</button></td>
                                    <?php 
                                        if($row["status"] == 0)
                                        { ?>
                                           <td class="flex-center" style="font-size: 1em; color: #ff0000;">&Chi;</td>
                                            <?php
                                        } 
                                        else
                                        {
                                            ?>
                                            <td class="flex-center" style="font-size: 1em; color: green;">&radic;</td>
                                            <?php
                                            
                                        } ?>
                                    
                                   
                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    
    

    <!-- Central Modal Small -->
    <div class="modal fade" id="fp-modal" tabindex="-1" role="dialog" aria-labelledby="fp-modal-label" aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm modal-side modal-top-right" role="document">

            <div class="modal-content">
                <!--<div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>-->
                <div class="modal-body m-2">
                    <img src="img/fp.gif" style="width: 250px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Central Modal Small -->

    <!--Footer-->
    <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn" style="position: fixed; bottom: 0; width: 100%;">

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright :
            <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> mindWelders </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="popover"]').popover(
            {
                html: true,
                trigger: 'click',
                placement: 'bottom',
                content: function(){return '<img src="'+$(this).data('img') + '" width="200" />';}
            });
        })

        setTimeout(function () {
            $('#pop').popover('hide');
        }, 1500);

    </script>

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="popover1"]').popover(
            {
                html: true,
                trigger: 'click',
                placement: 'bottom',
                content: function(){return '<video width=250 height=250 id="video" autoplay></video>';}
            });
        })

        function funcVideo() {
            navigator.getUserMedia = (  navigator.getUserMedia ||
                                        navigator.webkitGetUserMedia ||
                                        navigator.mozGetUserMedia ||
                                        navigator.msGetUserMedia );
            if (navigator.getUserMedia) {
                navigator.getUserMedia (

                    // constraints
                    {
                        video: true,
                        audio: false
                    },

                    // successCallback
                    function(localMediaStream) {
                        video = document.querySelector('video');
                        video.src = window.URL.createObjectURL(localMediaStream);
                        webcamStream = localMediaStream;
                    },

                    // errorCallback
                    function(err) {
                        console.log("The following error occured: " + err);
                    }
                );
            } else {
                console.log("getUserMedia not supported");
            }
        }
    </script>

</body>

</html>