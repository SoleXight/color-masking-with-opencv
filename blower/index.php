
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

         <!-- <option>HQ-Management</option>
          <option>HQ-Workers</option>
          <option>R&D-Workers</option>
          <option>HR</option>
          <option>Health</option>-->
        </select>
      </div>
    </div><br>


      <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Location:</label>
        <div class="col-xs-8">
        <input type="text" placeholder="Place" class="form-control" id="placeofoccurance" style="border-color: #216582;">
      </div>
      <!--  <div class="col-md-6 input_val">
        <label style="font-size: 13px;">Person(s) Involved:</label>
        <input type="text" placeholder="Person Name" class="form-control" id="persons">
      </div> -->
    </div><br>


     <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Monetary value:</label>
        <div class="col-xs-8">
        <select class="form-control" id="fraud" style="border-color: #216582;">
          <option>--Select--</option>
          <option>$0 to $100,000</option>
          <option>$100,000 to 200,000</option>
          <option>$200,000 to $300,000</option>
          <option>$300,000 to $400,000</option>
          <option>$400,000 to $500,000</option>
        </select>
      </div>
    </div><br>

      <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Period:</label>
        <div class="col-xs-8">
        <select class="form-control" id="periodofincident" style="border-color: #216582;">
          <option>--Select--</option>
          <option>once</option>
          <option>one week</option>
          <option>1 to 3months</option>
                </select>
      </div>
    </div><br>

    
     <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">People Involved:</label>
        <div class="col-xs-8">
          <input type="radio" name="aware" value="peos" checked="checked">Not Aware&nbsp;&nbsp;&nbsp;
          <input type="radio" name="aware" value="peo" >Aware  
      </div>
    </div>
    

    <div id="people" class="container" style="margin-left: 16%;">
      <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Name:</label>
        <input type="text" placeholder="Name" class="form-control" id="persons" style="border-color: #216582;">
      </div>
      <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Designation:</label>
        <input type="text" placeholder="Designation" class="form-control" id="Designation" style="border-color: #216582;">
      </div>
      <div class="col-md-2 input_val" style="width: 21%;">
        <label style="font-size: 13px;">Department:</label>
        <input type="text" placeholder="Department" class="form-control" id="DepartmentIn" style="border-color: #216582;">
      </div>
    
    <div class="input-group control-group after-add-more">
            <div class="input-group-btn"> 
              <button class="btn btn-success add-more" type="button" style="margin-top: 24px;"><i class="glyphicon glyphicon-plus"></i></button>
            </div>
          </div>
   <div class="copy hide">
            <div class="container control-group input-group" style="margin-left: -14px;">
              <!-- <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here"> -->
              <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Name:</label>
        <input type="text" placeholder="Name" class="form-control" id="personsplus" style="border-color: #216582;">
      </div>
      <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Designation:</label>
        <input type="text" placeholder="Designation" class="form-control" id="Designation" style="border-color: #216582;">
      </div>
      <div class="col-md-2 input_val" style="width: 21%;">
        <label style="font-size: 13px;">Department:</label>
        <input type="text" placeholder="Department" class="form-control" id="Department" style="border-color: #216582;">
      </div>
                <button class="btn btn-danger remove" type="button" style="margin-top: 24px;"><i class="glyphicon glyphicon-remove"></i></button>
            </div>
          </div>
  </div><br>


      <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Your details:</label>
        <div class="col-xs-8">
         <input type="radio" name="radio1" value="Anonymous"  checked="checked" id="Anonymous">Keen to be Anonymous
         <input type="radio" name="radio1" value="disclose" id="disclose">Keen to disclose
      </div>
    </div>

      <div id="details" class="container" style="margin-left: 16%;">
         <div class="col-md-3 input_val">
           <label style="font-size: 13px;">Name:</label>
           <input type="text" placeholder="Name" class="form-control"  style="border-color: #216582;">
        </div>
      <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Email:</label>
        <input type="text" placeholder="Email" class="form-control"  style="border-color: #216582;">
      </div>
      <div class="col-md-3 input_val" style="width: 21%;">
        <label style="font-size: 13px;">Phone no:</label>
        <input type="text" placeholder="Phone" class="form-control"  style="border-color: #216582;">
      </div>
        

          <div class="input-group control-group3 after-add-more3">
             <div class="input-group-btn"> 
              <button class="btn btn-success add-more3" type="button" style="margin-top: 24px;"><i class="glyphicon glyphicon-plus"></i></button>
             </div>
          </div>
   <div class="copy6 hide">
            <div class="container control-group3 input-group" style="margin-left: -14px;">
              <!-- <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here"> -->
              <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Name:</label>
        <input type="text" placeholder="Name" class="form-control"  style="border-color: #216582;">
      </div>
      <div class="col-md-3 input_val">
          <label style="font-size: 13px;">Email:</label>
          <input type="text" placeholder="Email" class="form-control" style="border-color: #216582;">
      </div>
      <div class="col-md-2 input_val" style="width: 21%;">
        <label style="font-size: 13px;">Phone No:</label>
        <input type="text" placeholder="Phone Number" class="form-control" style="border-color: #216582;">
      </div>
                <button class="btn btn-danger remove3" type="button" style="margin-top: 24px;"><i class="glyphicon glyphicon-remove"></i></button>
            </div>
          </div>
    </div><br>


      
      <div class="form-group">
           <label style="font-size: 15px;" class="col-xs-2">Are Authorities aware:</label>
           <div class="col-xs-8">
           <input type="radio" checked="checked" name="radio2" value="NO" id="authknows">No
           <input type="radio" name="radio2" value="YES" id="authknows">Yes
         </div>
    </div>


    <div id="auth" class="container" style="margin-left: 16%;">
        <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Name:</label>
        <input type="text" placeholder="Name" class="form-control" id="NameAuth" style="border-color: #216582;">
        </div>
        <div class="col-md-3 input_val">
        <label style="font-size: 13px;">Email:</label>
        <input type="text" placeholder="Email" class="form-control" id="EmailAuth" style="border-color: #216582;">
         </div>
        <div class="col-md-3 input_val" style="width: 21%;">
        <label style="font-size: 13px;">Phone no:</label>
        <input type="text" placeholder="Phone" class="form-control" id="PhoneAuth" style="border-color: #216582;">
        </div>
    </div><br>

  <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">Incident Information:</label>
        <div class="col-xs-7">
        <textarea type="text" placeholder="Incident Information" class="form-control" id="nature" style="height: 150px;border-color: #216582;width: 795px;"></textarea>
        </div>
        <div class="col-xs-2">
        <label aria-hidden="true" style="margin-left:85px;">Artifacts<i class="btn btn-danger btn-block"><span class="glyphicon glyphicon-paperclip"></span></i>
          <input type="file" style="display:none" /></label>
        </div>
   </div>

    
    <div class="form-group">
        <label style="font-size: 15px;" class="col-xs-2">In case of reward:</label>
        <div class="col-xs-8">
        <input type="radio" name="radio3" value="self">Self
        &nbsp; &nbsp; &nbsp;<input type="radio" name="radio3" value="donate">Donate 
       </div>
  </div>
                     <!--In Case of reward -->

                        <div id="peoples" class="container" style="margin-left: 16%;">
                                           <div class="col-md-3 input_val">
                                        <input type="text" placeholder="Account Holder Name" class="form-control" style="border-color: #216582;">
                                      </div>
                                  <div class="col-md-3 input_val">
                                     <input type="text" placeholder="Non-Profitable" class="form-control" style="border-color: #216582;">
                                  </div>
                                   <div class="col-md-2 input_val" style="width: 21%;">
                                      <input type="text" placeholder="IFSC Code" class="form-control" style="border-color: #216582;">
                                  </div>
                      </div>


                       <div id="donates" class="container"style="margin-left: 16%;">
                                 <div class="col-md-3 input_val">
                                        <input type="text" placeholder="Person Information" class="form-control" style="border-color: #216582;">
                                      </div>
                                  <div class="col-md-3 input_val">
                                   <input type="text" placeholder="Account Information" class="form-control" style="border-color: #216582;">
                                 </div>
                                   <div class="col-md-2 input_val" style="width: 21%">
                                      <input type="text" placeholder="Prize" id="Reward" class="form-control" style="border-color: #216582;">
                                 </div>      
                        </div>



      <div class="col-md-4 input_val">
   <button type="button" style="margin-left:840px;margin-top: 50px;" class="btn btn-primary" data-toggle="modal" data-target="#blow" onclick="blowwhistle();"><i class="fa fa-podcast" title="Blow the Whistle" style="font-size:17px;color:white;">Blow the Whistle</i></button>
        <div class="modal fade" id="blow" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Whistle Blowed</h4>
              </div>
              <div class="modal-body">
                This is your <b style="color: black">Tip # -<span id="tip"></span></b>, and this is your your sceret code make sure you remember this for your future use. <br> <b style="color: black">Your Secret Code -<span id="tip"></span></b>.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div><br>
</div>
</div>
</div>

 </form>
  <br><br>
        <div class="form-group" style="margin-left: 70%;"> </div>
      </div>
    </div>
</body>
</html>
<script>
$(document).ready(function(){
  $("#people").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="peos")
{
$("#people").hide();
}
if($(this).val()=="peo")
{
$("#people").show(); 
}
});
});
</script>
<script>
        function addRow(){
          var table = document.getElementById('myTable');
          //var row = document.getElementById("myTable");
          var x = table.insertRow(1);
          var e =table.rows.length-1;
          var l =table.rows[e].cells.length;
          //x.innerHTML = "&nbsp;";
          for (var c =0,  m=l; c < m; c++) {
            table.rows[1].insertCell(c);
            table.rows[1].cells[c].innerHTML  = "<input type='text' class='form-control'>";
            }
          }
</script>

<script>
$(document).ready(function(){
  $("#details").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show(); 
}
});
});
</script>


<script>
$(document).ready(function(){
  $("#auth").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="NO")
{
$("#auth").hide();
}
if($(this).val()=="YES")
{
$("#auth").show(); 
}
});
});
</script>


<script type="text/javascript">
  function  blowwhistle(){
  var blowdata = {
    companyName : $("#company").val(),
    category :$("#category").val(),
    association :$("#association").val(),
    howdoyouaware :$("#aware").val(),