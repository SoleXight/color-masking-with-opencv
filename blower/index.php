
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