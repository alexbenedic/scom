<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta http-equiv="refresh" content="10" >-->
<style>
.responsive {
  width: 100%;
  height: auto;
}
    img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
    h2 {
text-align: center;
  
}
    a {
      color:antiquewhite;  
        font-size: 20px;
    }
    a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}
</style>
       <script>
    setInterval(function() {
 var x = Math.floor((Math.random() * 100) + 1);

        if (x < 20) {
        document.getElementById("myImg").src = "img/Full.png";
        }
        else if (x < 40) {
        document.getElementById("myImg").src = "img/nes.png";
        }
        else if (x < 60) {
        document.getElementById("myImg").src = "img/cs.png";
        }
        else if (x < 80) {
         document.getElementById("myImg").src = "img/ns.png";
        }
        else if (x < 100) {
        document.getElementById("myImg").src = "img/all.png";
        }
}, 60000);
    </script>
</head>
<body style="background-color:grey;">
<img src="https://i.ibb.co/bv3k6Sp/RHBlogo.png" alt="RHBlogo" border="0" style="height:50px;">

 <img id="myImg"  src="img/Full.png" alt="Malaysia" class="responsive" width="1080" height="720">

<table style="width:100%; text-align:center;">
    <tr>
    <th><a href="http://192.168.0.111:3000/d/jeiHBH2Mk/streetwatch-dashboard" target="_blank">North</a></th>
    <th><a href="http://192.168.0.111:3000/d/jeiHBH2Mk/streetwatch-dashboard" target="_blank">Central</a></th>
    <th><a href="http://192.168.0.111:3000/d/jeiHBH2Mk/streetwatch-dashboard" target="_blank">South</a></th>
    </tr>
    <tr>
    </tr>
    <tr>
    <th><a href="http://192.168.0.111:3000/d/jeiHBH2Mk/streetwatch-dashboard" target="_blank">East Coast</a></th>
    <th><a href="http://192.168.0.111:3000/d/jeiHBH2Mk/streetwatch-dashboard" target="_blank">Sabah</a></th>
    <th><a href="http://192.168.0.111:3000/d/jeiHBH2Mk/streetwatch-dashboard" target="_blank">Sarawak</a></th>
    </tr>
    </table>  


</body>
</html>
