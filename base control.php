<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control panel</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script type="text/javascript">

    

    function direction(val){
        data = val;
        $.ajax({url:"data.php", method: "POST", data:data, success:function(res){

        
        }})
    }
    </script>
</head>

<body>

    <h1 id="title" style="text-align: center;">Robot base control panel</h1>

    <br>
    <br>

<div style="text-align: center">
<button onclick="direction('f')" style="width: 110px; margin:10px; padding: 10px 20px; border-radius: 25px">forward</button>
</div>

<div style="text-align: center;">
<button onclick="direction('l')" style="display: inline-block; width:110px; margin:10px; padding: 10px 20px; border-radius: 25px">left</button>
<button onclick="direction('s')" style="display: inline-block; width:110px; margin:10px; border-color:red; padding: 10px 20px; border-radius: 25px">stop</button>
<button onclick="direction('r')" style="display: inline-block; width:110px; margin:10px; padding: 10px 20px; border-radius: 25px">right</button>
</div>

<div style="text-align: center">
<button onclick="direction('b')" style="width: 110px; margin:10px; padding: 10px 20px; border-radius: 25px">backward</button>
</div>

<div>

</div>

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "5f212bcc-fdbc-4541-9f0d-6c98b95201af", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "af6d7e67-3f9d-44e3-853e-9bbfd7449a93", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script> 


</body>



</html>

