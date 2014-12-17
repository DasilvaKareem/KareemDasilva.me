<html>
  <head>
  	<link rel="stylesheet" href="css/bootstrap.css">
    <script>
      function gen(){

        var adjectives = ["Cool","Masked","Bloody","Lame"]
  var animals = ["Hamster","Moose","Lama","Duck"]

  // Random numbers are made
  var randomNumber1 = parseInt(Math.random() * adjectives.length);
  var randomNumber2 = parseInt(Math.random() * animals.length);
  var name = adjectives[randomNumber1] + " " + animals[randomNumber2];
  document.getElementById('place').innerHTML=name;
}   

      
    </script>
  </head>
  <body>
  <button onclick="gen()">click</button>
  <h1 id="place"></h1>

 
  </body>
</html>