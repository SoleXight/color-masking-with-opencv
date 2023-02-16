
 <!DOCTYPE html>
<html>
<head>
	<title>Reviewer - BlockChain</title>
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
			/*url:"https://5d1b152edd81710014e8825d.mockapi.io/fixnix/investigator/"+tipNo,*/
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
				$("#authknows").text(data.authknows)
                $("#nature").text(data.nature)
				$("#place").text(data.place)
				$("#Reward").text(data.Reward)
                $("#DepartmentPR").text(data.DepartmentPR)
                $("#DepartmentIn").text(data.DepartmentIn)
                $("#Designation").text(data.Designation)
                $("#NameAuth").text(data.NameAuth)
                $("#EmailAuth").text(data.EmailAuth)
                $("#PhoneAuth").text(data.PhoneAuth)
               /* $("#SMLoss").text(data.SMLoss)
                $("#MOperandi").text(data.MOperandi)
                $("#WBUpdate").text(data.WBUpdate)
                $("#MUpdate").text(data.MUpdate) */
                

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
			/*url:"https://5d1b152edd81710014e8825d.mockapi.io/fixnix/whistle/"+tipNo,*/
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
                $("#SMLoss").text(data.SMLoss)
                $("#MOperandi").text(data.MOperandi)
                $("#WBUpdate").text(data.WBUpdate)
                $("#MUpdate").text(data.MUpdate) 
                

				$("#encryptedSecret").text(data.encryptedSecret)
				
			}
		})
	}
	
	function messagesent(){
		var message = $("#query").val();
		var time = new Date()
		var text = "Investigator-"+message+"-"+time
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
			Updatebutton()
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
<body style="font-family:Times New Roman;background-color:#FAFAFA;" >
<?php include "header.php"; ?>

<div style="margin-left: 120px;">
<div class="container" style="margin-top: 150px;margin-left: 35%;">
	
	<div class="form-group" style="margin-left: -10px;">
		<div class="col-md-3">
			<input type="text" name="search" id="search" class="form-control col-md-3" placeholder="Enter the Tip Number">
			
		</div>
		<div class="col-md-2">
			
			<input type="button" id="submit" onclick="clickt()" style="background-color: green;" class="btn btn-danger" value="View Tip Details" style="">
		</div>
	</div>
</div><br>
</div>
<hr>

<div style="margin-left: 120px;">

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

<!--<div class="container hide" id="data" style="border:2px solid #C3C8C6; margin-left: -18px; height: 90px;">	-->
	
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
	</div>

<br>
 <div class="container hide" id="authknowsarea" style="border:0px; /*solid #C3C8C6;*/ margin-left: -18px; height: 90px;">	
	     <div class="row form-group">
			<div class="col-md-3">
				 <label style="font-size: 14px;margin-left: 90px;">Authority's Name</label><br>
				<span id="NameAuth" class="form-control" style="font-size: 13px;margin-left: 90px; "></span>
			</div>
          <div class="col-md-4">
			<label style="font-size: 14px;margin-left: 90px;">Authority's Email_ID</label><br>
				<span id="EmailAuth" class="form-control" style="font-size: 13px;margin-left: 90px; "></span>
			</div>
			<div class="col-md-3">
			<label style="font-size: 14px;margin-left: 90px;">Authority's Phone No.</label><br>
				<span id="PhoneAuth" class="form-control" style="font-size: 13px;margin-left: 90px; "></span>		
             </div>
			
	</div>
           
</div><br>

  <button class="collapsible" ><img src="histroy.png" style="height: 40px; width: 40px;margin-left: 70PX;"><b>Conversation</b></button>
  <div id="demo" class="collapse">
  <div style="min-height: 200px; max-height: 100px; overflow: auto;border:1px solid #C3C8C6;width: 970px; margin-left: 90PX;"><h2> Conversations History</h2>
        	<div class="conversations"></div>
      
      </div>
   </div>
 <!--<div class="container hide" style="margin-top: 50px;margin-left: 80px;">
  <button data-toggle="collapse" data-target="#demo"><img src="histroy.png" style="height: 40px; width: 40px;"></button>

  <div id="demo" class="collapse">
  <div style="min-height: 300px; max-height: 300px; overflow: auto;border:1px solid #C3C8C6;width: 950px;"><h2>Histroy</h2>
        	<div class="conversations"></div>
      
      </div>
   </div>

</div><br>


</div>-->
<hr>
</div>
</div>
<div class="container hide" style="border:0px solid #C3C8C6; margin-left:-70px; ">

	<h3 style="margin-left:470px;"><strong>Investigation Details</strong></h3>
	<br>
	</div>
	<hr>
	
	 <div class="container hide" style="margin-left: -90px;margin-left: 200px;"> 
			      <label style="font-size: 15px;margin-top: 20px; margin-left:10px;" class="col-xs-2">People Involved:</label>
			  

			 <div class="container hide" style="border:0px solid #C3C8C6; height: 900px; position: absolute; border-collapse:separate; ">
				 <div id="people1" class="container" style="margin-left: 11%;">
				 	<br>
			   
			    <div class="col-md-3 input_val">
			      <label style="font-size: 13px;">Name:</label>
			     <!--<input type="text" placeholder="Name" class="form-control" id="persons" style="border-color: #216582;" >-->
			      <span id="personsInvolved" class="form-control" style="font-size: 13px; "></span>
			    </div>
			    <div class="col-md-4 input_val">
			      <label style="font-size: 13px;">Designation:</label>
			      <!--<input type="text" placeholder="Designation" class="form-control" style="border-color: #216582;">-->
			      <span id="Designation" class="form-control" style="font-size: 13px; "></span>
			    </div>
			    <div class="col-md-3 input_val" style="width: 29%;">
			      <label style="font-size: 13px;">Department:</label>
			     <!-- <input type="text" placeholder="Department" class="form-control" style="border-color: #216582;">-->
			     <span id="DepartmentIn" class="form-control" style="font-size: 13px; "></span>
			    </div>
			  
			 <div class="input-group control-group after-add-more">
			          <div class="input-group-btn"> 
			            <button class="btn btn-success add-more" type="button" style="margin-top: 24px;margin-left: 60px;"><i class="glyphicon glyphicon-plus"></i></button>
			          </div>
			        </div>

			                                            
			       



			 <div class="copy hide">
			          <div class="container control-group input-group" style="margin-left: -14px;">
			            <!-- <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here"> -->
			            <div class="col-md-3 input_val">
			      <label style="font-size: 13px;">Name:</label>
			      <input type="text" placeholder="Name" class="form-control" id="persons" style="border-color: #216582;">
			    </div>
			    <div class="col-md-4 input_val">
			      <label style="font-size: 13px;">Designation:</label>
			      <input type="text" placeholder="Designation" class="form-control" style="border-color: #216582;">
			    </div>
			    <div class="col-md-3 input_val" style="width: 29%;">
			      <label style="font-size: 13px;">Department:</label>
			      <input type="text" placeholder="Department" class="form-control" style="border-color: #216582;">
			    </div>
			              <button class="btn btn-danger remove" type="button" style="margin-top: 24px;margin-left: 60px;"><i class="glyphicon glyphicon-remove"></i></button>
			          </div>
			        </div>
			</div><br><br>
			                                          <!--Edit image png section-->

			            <!-- <div class="">
			        	<div class="">
			            <a href=""><img src="edit.png"style="height: 35px;width: 35px; margin-left: 1210px; margin-top: -140px"></a> 
			        </div></div>-->   

			    
			<div class="container control-group input-group" style="margin-left: 12%;">
				<div class="row">
			       	<div class="col-md-3 input_val" style="width: 24%;">

			       <label style="font-size: 14px;">Reported Monetory</label><br>
			       <span id="monetaryValue" class="form-control" style="font-size: 13px;"></span>   
			      <!--<select class="form-control" id="fraud" style="border-color: #216582;">
			        <option>--Select--</option>
			        <option>$0 to $100,000</option>
			        <option>$100,000 to 200,000</option>
			        <option>$200,000 to $300,000</option>
			        <option>$300,000 to $400,000</option>
			        <option>$400,000 to $500,000</option>
			      </select>-->
			    </div>
			     
			     <div class="col-md-4 input_val"style="margin-left: 10px;width: 32%;">
					<label style="font-size: 14px;">Suspected Monetory loss</label><br>
				    <span id="SMLoss" class="form-control" style="font-size: 13px;"></span>   
					</div>

					<div class="col-md-2 input_val" style="width: 29%;">
					<label style="font-size: 14px;">Modus Operandi</label><br>
					<span id="MOperandi" class="form-control" style="font-size: 13px;"></span>   
			      <!-- <select class="form-control " id="fraud" style="border-color: #216582;">
			        <option>--Select--</option>
			        <option>Cash</option>
			        <option>Inperson</option>
			        <option>Not Applicable</option>

			      </select> -->
					
					</div>

			   </div>     
			</div>

			 <div class="container hide"><br>
			</div>
			<div class="form-group">
				   <label style="font-size: 15px; margin-top: 10px; margin-right: 40px;" class="col-xs-1">WhistleBlower Update:</label> 
			      	<div class="col-md-5" style="width: 72%;height: 50px;">
			      		<span id="WBUpdate" class="form-control" style="font-size: 13px;height: 150px;width: 975px;"></span>

				    <!-- <textarea type="text" class="form-control" placeholder="Give WhistleBlower on update" style="height: 150px;width: 975px;"> </textarea> -->
					</div>
			    </div>

			<!-- <div class="">
			        	<div class="">
			            <a href=""><img src="send.png"style="height: 40px;width: 40px; margin-left: 1195px; margin-top: 10px"></a> 
			        </div></div>-->


			    <br><br><br><br>
                
			    <br><br><br><br>
			  
			  
			   <div class="form-group">
				   <label style="font-size: 15px;" class="col-xs-1">Management Update </label>
					<div class="col-md-8" style="width: 72%;height: 50px;">
					<span id="MUpdate" class="form-control" style="font-size: 13px;height: 150px;width: 975px;margin-left: 40px;"></span>	
					<!-- <textarea type="text" class="form-control"  placeholder="Ask WhistleBlower for more Info" style="height: 150px;border-color: #216582;width:975px;margin-left: 40px;"> </textarea> -->	
					
					</div><br/><br/><br/><br/>
			        <!--<div class="">
			        	<div class="">
			            <a href=""><img src="send.png"style="height: 40px;width: 40px; margin-left: 1170px; margin-top: -15px"></a> 
			        </div></div>-->
					<!-- This is the reviewer added contents. Rewards Section -->
			      <br><br>						
			             <div class="form-group">
			              <label style="font-size: 15px; margin-top:70px;" class="col-xs-1 ">Rewards </label>
			              <br/><br/><br/><br/>

			               <div class="col-xs-8">
			               <input type="radio" name="aware" value="peos" checked="checked"style="margin-left: 40px;">Self &nbsp;&nbsp;&nbsp;
			               <input type="radio" name="aware" value="peo" style="margin-left: 290px;">Donate
			        
					    </div>
					  </div>
					
			 <div id="people" class="container" style="margin-left: 16%;">
			    <div class="col-md-3 input_val" style="margin-left: -720px;margin-top: 20px;">
			        <input type="text" placeholder="Self" class="form-control" style="border-color: #216582;">
			    </div>
			     </div>
			   


             <div id="peoples" class="container" style="margin-left: 16%;">
			    <div class="col-md-3 input_val" style="margin-right: 400px;">
			       <input type="text" placeholder="Non-Profitable" class="form-control" style="border-color: #216582;margin-left: 280px; margin-top: 11px;">
			    </div>

			  </div>
<!-- 
			    <div class="col-md-3"><button class="btn btn-danger" style="margin-left:340%;margin-top:-20px; width:50%; position: absolute;">Thanks</button>
					</div> -->
     <br><br>


			   
                   <div class="form-group">
			               <div class="col-xs-8">
			               <input type="radio" name="aware" value="peo1" checked="checked" style="margin-left: 140px;"><b>Resolution </b>&nbsp;&nbsp;&nbsp;
			               <input type="radio" name="aware" value="peo2" style="margin-left: 240px;"><b>Re-Investigate</b>
			        
					    </div>
					  </div>
                





                <div id="peop1" class="container">   
                  <textarea type="text" placeholder="Resolution" class="form-control" id="nature" style="height: 150px;border-color: #216582;width: 975px; margin-left: 140px;"></textarea>
      </div>
			     
			       
				    <!-- <label style="font-size: 15px;" class="col-xs-1">Resolution </label>
					 <div class="col-md-8" style="width: 72%;height: 50px;">-->
					
			       

               <div id="peop2" class="container">
			          <textarea type="text" placeholder="Re-Investigate" class="form-control" id="nature" style="height: 150px;border-color: #216582;width: 975px; margin-left: 140px;"></textarea>
			    </div>
			    


				    <!-- <label style="font-size: 15px;" class="col-xs-1">Re-Investigate </label>
					 <div class="col-md-8" style="width: 72%;height: 50px;">-->
					
			        

			          <div class="col-xs-2" style="margin-left: 1190px;margin-top: -120px;">
				      <label aria-hidden="true">Artifacts<i class="btn btn-danger btn-block"><span class="glyphicon glyphicon-paperclip"></span></i>
				        <input type="file" style="display:none" /></label>
			       </div>
			        
			       
			    
			        <div class="col-md-3"><button class="btn btn-danger" style="margin-left:1150px;margin-top:50px; width: 50%; position: absolute;" data-toggle="modal" data-target="#update">Update</button>
					</div><br><br>

					<div class="modal" id="update">
			    <div class="modal-dialog">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header">
			          
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">
			         <h3 class="modal-title" style="margin-left: 130px;">Succssfully Updated!</h3>
			        </div>
			        
			        <!-- Modal footer -->
			        <div class="modal-footer">
			          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        </div>
			        
			      </div>
			    </div>
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
			          
			        </div>

			        <div class="modal-footer" >
			        	<div class="col-md-9" style="margin-top: 10px;">
					<input type="text" id="query" name="" class="form-control" placeholder="Ask more info...">
				</div>
				<div class="col-md-3"><input type="button" onclick="messagesent()" name="" class="btn btn-primary" value="Send Message" style="background-color: #2E9461;"></div>
			        </div>
			      </div>
			  </div>
			</div> 
			     

			     <div class="img" style="position: absolute;  margin-left: 1090px; margin-top: -620px;">
				
					<a href="" style="text-decoration: underline;" data-toggle="modal" data-target="#myModal"><i class='fa fa-comments' style="font-size: 48px;margin-left: 200%;color:  #2E9461;" title="Review"></i></a>
				</div>

      </div>
   </div>
</div>
</div>


</div>

<br><br>

</body> 

</html>


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

<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


<script>
$(document).ready(function(){
  $("#peoples").hide();

$("input[type='radio']").change(function(){
if($(this).val()=="peos")
{
$("#peoples").hide();
$("#people").show();
}
if($(this).val()=="peo")
{