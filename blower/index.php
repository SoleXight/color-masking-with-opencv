
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Whistle Blower</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   
    .input_val{
      padding-left: 0px !important;
    }
  </style>
</head>
<body style="font-family:Times New Roman;background-color:#FAFAFA;">
<?php include "header.php"; ?>
<br><br><br>
<div style="margin-left: 120px;">

  <div class="container" style="margin-top: 100px; margin-left: 230px;">
    <!-- <h2 style="margin-left:13px; background-color: red;"><b>BLOW WHISTLE</b></h2> -->
    <div class="row">
      <form class="form-horizontal">
    <div class="form-group">
      <div class="form-group">
      <!-- <div class="col-md-6 input_val"> -->  
        <label style="font-size: 15px;" class="col-xs-2">Name of the Company:</label> 
      <div class="col-xs-8"><select class="form-control" id="company" style="border-color: #216582;"onchange='CheckColors(this.value);'>
          <option>--Select--</option>
          <option>Pied Piper</option>
          <option>Hooli</option>
          <option>FixNix</option>
          <option>Other</option>

        </select>
      <br>
      <div class="form-group">
         <div class="col-xs-12">
            <input type="text" name="color" id="color" placeholder="Enter Your Company Name"  style='display:none;border-color: #216582;'/ class="form-control">
         </div>
     </div>
                    <!-- <div class="input-group control-group2 after-add-more2" >
                      <button class="btn btn-success add-more2" type="button" style="margin-top: -54px;margin-left: 800px;border-color: #216582;"><i class=" glyphicon glyphicon-plus"></i></button>
                    </div>-->
    </div>
    <!--<input type="text" name="color" id="color" style='display:none;'/>-->
    
     <!--<div class="copy2 hide">
                   <div class="col-md-9 input_val">
                      <div class="container control-group2 input-group"> 
                       <div class="row">
                         <div class="col-md-9 input_val">
                                <input type="text" placeholder="Write Your Company Name" class="form-control" id="persons" style="width: 790px;border-color: #216582">
                            </div>
                            <br>
                         <div class="col-md-9">
                             <button class="btn btn-danger remove2" type="button" style="margin-top: -54px;margin-left: 790px;"><i class="glyphicon glyphicon-remove" ></i></button>
                         </div>
                       </div>
                      </div>
                  </div>
          </div>-->
  </div>
      <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Category:</label>
        <div class="col-xs-8">
        <select class="form-control" id="category" style="border-color: #216582;">
          <option>--Select--</option>
          <option>Accounting and Other Financial Impropriety</option>
          <option>Bribery or Corruption</option>
          <option>Money Laundering</option>
          <option>Sanctions</option>
          <option>Theft/Fraud</option>
          <option>Health & Safty</option>
        </select>
      </div>
    </div><br>
     
      <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Relationship:</label>
        <div class="col-xs-8">

        <select class="form-control" id="association" style="border-color: #216582;">
          <option>--Select--</option>
          <option>Employee</option>
           <option>Temporary Employee</option>
          <option>Contractror</option>
          <option>Consultant</option>
          <option>Former Employee</option>

        </select>
      </div>
    </div><br>

      <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Encounter:</label>
        <div class="col-xs-8">
        <select class="form-control" id="aware" style="border-color: #216582;">
          <option>--Select--</option>
          <option>It happened to me</option>
          <option>I observed it</option>
          <option>Told to me by co-worker</option>
          <option>Told to me by someone outside the company</option>
          <option>I heared it</option>
        </select>
      </div>
    </div><br>

     <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Department:</label>
        <div class="col-xs-8">
        <select class="form-control" id="DepartmentPR" style="border-color: #216582;">
          <option>--Select--</option>
          <option>Marketing</option>
          <option>Software</option>
          <option>Development</option>
          <option>Sales</option>
          <option>Risk</option>
          <option>Research</option>
          <option>HR</option>
          <option>Health</option>
