
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