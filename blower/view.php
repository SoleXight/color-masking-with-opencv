
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