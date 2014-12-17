<html>
  <head>
    


  	<link rel="stylesheet" href="css/bootstrap.css">
     <style>
      body{
        background-color:#577492;
      }
    </style>   
    <script>
      function def(){
         document.getElementById("yo").style.visibility="hidden";
      }
      function gen(){

        var adjectives = ["Super","Ultra","Mega","Dark","Fire","Power","Ice","Cougar","Cat","Dog"]
  var animals = ["Man","Woman","Boy","Girl"]
  var superhero = ['Super Man','Super Girl','Power Girl']


  // Random numbers are made
  var randomNumber1 = parseInt(Math.random() * adjectives.length);
  var randomNumber2 = parseInt(Math.random() * animals.length);
  var name = adjectives[randomNumber1] + " " + animals[randomNumber2];
  

  document.getElementById('place').innerHTML=name;
    for(var i=0;i<animals.length;i++){
      if(name==superhero[i]){
        var yoname = prompt("Enter your YO name");
        document.getElementById("common").innerHTML="Thats already a super hero";
        document.getElementById("superhero").value= yoname;
        var show = document.getElementById("yo").style.visibility="visible";
       

      }
  }
}   
      
    </script>
  </head>
  <body onload="def()">
  <div class="text-center">
  <button class="btn btn-primary" onclick="gen()">Generate</button>
  <h1 id="place"></h1>
    <form id="yo" method="post" action="request.php">
    <input id="superhero" type="text" name="user">
    <h2 id="common"></h2>
      <button>YO</button>
    </form>

  
 </div>
  </body>
</html>