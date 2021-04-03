
<!DOCTYPE html>
<html>
<head>
  <title> View Whistle - BlockChain</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://momentjs.com/downloads/moment.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
 <script type="text/javascript">

    var tip_data ={}
    var tip_no =''
    var conversations = ''
  function clickt(){
    
    var tipNo = $("input").val();
    tip_no = tipNo
    $.ajax({
      url:"https://5d1b152edd81710014e8825d.mockapi.io/fixnix/whistle/"+tipNo,
      method:"GET",
      type:"json",
      success:function(data){
        tip_data = data;
        var messages_array = data.conversations.split("##")
        var messages_list = []
        for(var i =0 ;i<messages_array.length;i++){
          var result = messages_array[i].split("-")
          var datalist ={
            user_type:result[0],
            message: result[1],
            time: result[2]
          }
          messages_list.push(datalist)
        }
        $(".container").removeClass('hide')
        $("#tipNo").text(data.tipNo)
        $("#createdAt").text(data.createdAt)
        $("#companyName").text(data.companyName)
        $("#category").text(data.category)
        $("#association").text(data.association)
        $("#howdoyouaware").text(data.howdoyouaware)
        $("#personsInvolved").text(data.personsInvolved)
        $("#monetaryValue").text(data.monetaryValue)
        $("#authknows").text(data.authknows)//auth
        $("#nature").text(data.nature)
        $("#place").text(data.place)
        $("#Reward").text(data.Reward)
        $("#DepartmentPR").text(data.DepartmentPR)
        $("#DepartmentIn").text(data.DepartmentIn)
        $("#Designation").text(data.Designation)
        $("#NameAuth").text(data.NameAuth)
        $("#EmailAuth").text(data.EmailAuth)
        $("#PhoneAuth").text(data.PhoneAuth)
        $("#WBUpdate").text(data.WBUpdate)
        $("#MUpdate").text(data.MUpdate)


        $("#encryptedSecret").text(data.encryptedSecret)
        conversations = ''
        for (var i=0; i<messages_list.length;i++){
          conversations+="<p class='labelt "+ (messages_list[i].user_type == "Investigator"? "investigator": "blower") + "'>"+messages_list[i].user_type+" : "+ messages_list[i].message  +"<span style='font-size:10px; float: right'>" + moment(messages_list[i].time).fromNow() + "</span></p>"
        }
        console.log(conversations)
        $(".conversations").html(conversations?conversations:"<p> Please start the conversation</p>")
      }
    })
     $.ajax({
      url:"http://5d1b152edd81710014e8825d.mockapi.io/fixnix/whistle/1/investigator/"+tipNo,
      method:"GET",
      type:"json",
      success:function(data){
        tip_data = data;
        var messages_array = data.conversations.split("##")
        var messages_list = []
        for(var i =0 ;i<messages_array.length;i++){
          var result = messages_array[i].split("-")
          var datalist ={
            user_type:result[0],
            message: result[1],
            time: result[2]
          }
          messages_list.push(datalist)
        }
        $(".container").removeClass('hide')
        $("#WBUpdate").text(data.WBUpdate)
        $("#MUpdate").text(data.MUpdate)
        $("#encryptedSecret").text(data.encryptedSecret)
        
      }
    })
  }
  function messagesent(){
    var message = $("#query").val();
    var time = new Date()
    var text = "Blower-"+message+"-"+time
    var exists = tip_data.conversations.split("##")
    if(exists.length==0){
      tip_data.conversations = tip_data.conversations 
    }else if(exists.length>0){
      tip_data.conversations = tip_data.conversations +"##"+text
    }
    $.ajax({
      url:"https://5d1b152edd81710014e8825d.mockapi.io/fixnix/whistle/"+tip_no,
      method:"PUT",
      type:"json",
      data:tip_data,
      success:function(data){
        $("#query").val("");
        conversations+="<p class='labelt investigator'> Investigator "+ message  +"<span style='font-size:10px; float: right'>" + moment(time).fromNow() + "</span></p>"
        $(".conversations").html(conversations?conversations:"<p> Please start the conversation</p>")
      }
    })
  }
  setInterval(()=>{
    var tip = $("input").val();
    if(tip){
      clickt()
    }
  },2000)
</script>
<style>
  
  .hide{
    display: none;
  }
  .investigator {
    color: #000;
  }
  .blower{
    color: #8ac6d1;
  }
  .message{
    font-size: 11px;
  }
  .labelt{
    font-size: 13px;
  }


  .collapsible {
  
  cursor: pointer;
  width: 9%;
  border: none;
  text-align: right;
  outline: none;
  font-size: 15px;
  background: #FAFAFA;

 

}


.content {
  display: none;
  overflow: hidden;
  
}
</style>
</head>
<body style="font-family:Times New Roman; background-color:#FAFAFA;">
<?php include "header.php"; ?>
<div style="margin-left: 120px;">

  <div class="container" style="margin-top: 150px;margin-left: 35%;">
    
    <div class="form-group" style="margin-left: -10px;">
      <div class="col-md-3">
        <input type="text" name="search" id="search" class="form-control col-md-3" placeholder="Enter the Tip Number">
        
      </div>
      <div class="col-md-2">
        
        <input type="button" id="submit" onclick="clickt()" style="background-color:#3e8e9d;" class="btn btn-danger" value="View Tip Details" style="">
      </div>
    </div>
  </div><br><hr>


  <div class="container hide" id="data" style="border:0px solid #C3C8C6;margin-left: 180px;"  ><br>
     <!-- <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;"> -->

      <div class="row form-group">        
        <div class="col-md-2">  
          <label style="font-size: 14px;margin-left: 90px;">Tip No</label><br>
             <span id="tipNo" class="form-control" style="font-size: 13px;margin-left: 90px;"></span> 
        </div>
        <div class="col-md-3">
          <label style="font-size: 14px;margin-left: 90px;">Created Date</label><br>
          <span id="createdAt" class="form-control" style="font-size: 13px; margin-left: 90px;"></span>
        </div>
        <div class="col-md-5">
          <label style="font-size: 14px;margin-left: 90px;">Name of the Company </label><br>
          <span id="companyName" class="form-control" style="font-size:13px;margin-left: 90px;"></span>
        </div>

         </div> 
  <br>
     
      
     <!--<div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;">-->

         <div class="row form-group">
        
        <div class="col-md-10">
          <label style="font-size: 14px;margin-left: 90px;">Incident Informations</label>
          <span id="nature" class="form-control"  style="font-size: 13px;margin-left: 90px; height:100px;"></span>
        </div>

         </div>

     
  <br>

  <!--<div class="container hide" id="data" style="border:2px solid #C3C8C6; margin-left: -18px; height: 90px;">  -->
    
  <!--</div>-->

    <!-- <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;">-->
      <div class="row form-group">
        <div class="col-md-3">
          <label style="font-size: 14px;margin-left: 90px;">Category</label><br>
          <span id="category" class="form-control"style="font-size: 13px;margin-left: 90px;"></span>
        </div>
        <div class="col-md-3">
          <label style="font-size: 14px;margin-left: 90px;">Relationship</label><br>
          <span id="association" class="form-control" style="font-size: 13px;margin-left: 90px;"></span>
        </div>
        <div class="col-md-4">
          <label style="font-size: 14px;margin-left: 90px;">Encounter</label><br>
          <span id="howdoyouaware" class="form-control" style="font-size: 13px;margin-left: 90px;"></span>
        </div>

      </div>
  <br>
    <!--   <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;"> -->
          <div class="row form-group">
        
        <div class="col-md-5">
          <label style="font-size: 14px;margin-left: 90px;">Department</label><br>
          <span id="DepartmentPR" class="form-control"  style="font-size: 13px;margin-left: 90px;"></span>
        </div>
        <div class="col-md-5">
          <label style="font-size: 14px;margin-left: 90px;">Place</label><br>
          <span id="place" class="form-control" style="font-size: 13px; margin-left: 90px;"></span>
        </div>
           </div>
     

  <br>

   <!--<div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;">-->
      <div class="row form-group">
              


        <!--<div class="col-md-5">
          <label style="font-size: 14px;margin-left: 90px;">Persons Involved</label><br>
          <span id="personsInvolved" class="form-control" style="font-size: 13px; margin-left: 90px;"></span>
        </div>-->
        <div class="col-md-5">
          <label style="font-size: 14px;margin-left: 90px;">Authorities Know</label><br>
          <span id="authknows" class="form-control" style="font-size: 13px;margin-left: 90px;"></span>
        </div>

        <div class="col-md-5">
          <label style="font-size: 14px;margin-left: 90px;">Reward</label><br>
          <span id="Reward" class="form-control" style="font-size: 13px; margin-left: 90px;"></span>
        </div>
    </div><br>


   


    <div class="row form-group" class="container hide" id="authknowsarea">
          <div class="col-md-3">
          <label style="font-size: 14px;margin-left: 90px;">Authority's Name</label><br>
          <span id="NameAuth" class="form-control" style="font-size: 13px;margin-left: 90px;"></span>
           </div>
          <div class="col-md-4">
          <label style="font-size: 14px;margin-left: 90px;">Authority's Email ID</label><br>
          <span id="EmailAuth" class="form-control" style="font-size: 13px;margin-left: 90px;"></span>
           </div>
          <div class="col-md-3">
          <label style="font-size: 14px;margin-left: 90px;">Authority's Phone No.</label><br>
          <span id="PhoneAuth" class="form-control" style="font-size: 13px;margin-left: 90px;"></span>
         </div>

   </div>
          <br>
          <br>
          <div class="form-group">
             <label style="font-size: 15px; margin-left:75px;" class="col-md-10">WhistleBlower Update:</label> 
                <div class="col-md-8 " >
              <!-- <textarea type="text" class="form-control" placeholder="Give WhistleBlower on update" style="height: 150px;width: 940px; margin-left: 84px;"> </textarea> -->
             <span id="WBUpdate" class="form-control" style="height: 150px;width: 940px;margin-left: 84px;"></span>    
            </div>
          </div>
          <br><br>
         <div class="form-group">
        <label style="font-size: 15px; margin-left:75px;" class="col-md-10">Management Update:</label>
        <div class="col-xs-8">
          <span id="MUpdate" class="form-control" style="height: 150px;width: 944px;margin-left: 82px;"></span>
        <!-- <textarea type="text"  class="form-control" id="" style=""></textarea> -->
       <br><br><br>
        </div>

        
  </div>

    <button class="collapsible"><img src="histroy.png" style="width:40px;margin-top:300px; position: absolute; z-index: 101; left: 400px;"><b>Conversation</b></button>

    <div id="demo" class="collapse">
    <div style="min-height: 200px; max-height: 80px; overflow: auto;border:1px solid #C3C8C6;width: 970px; margin-left: 90px;"><h2>Conversations History</h2>
            <div class="conversations"></div>
        </div>
     </div>

   <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" >&times;</button>
                  <h4 class="modal-title">Blower - Investigator's Conversation's</h4>
                </div>
                <div class="modal-body" style="min-height: 300px; max-height: 300px; overflow: auto;">
                  <div class="conversations"></div>
                  