<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <script src="https://kit.fontawesome.com/ad96519a55.js" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/ad96519a55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

 <style>
        body{
                 background-size: cover;
    background-repeat: no-repeat;
          background-image: image-set("background.jpg.jpg") 
        }  


.container{
  display: flex;
  gap: 10px;
  background-color: none;
  
  
}

.listproduct{
  display: block;
  margin: 45px 21px;
  background-color: rgba(10, 92, 146, 0.308);
  border-radius: 15px;
  width: 215px;
  height: 300px;
}
.menu{
  display: block;
  margin: 0px 0px;
  padding: 0;
}
img{
  height: 150px;
  width: 150px;
  margin: 25px 35px;
}
P{
  margin: 0px 0px;
  text-align: center
}
button{
  margin: 0px  20px;
  border: none;
  width: 100px;
  height: 30px;
  font-family: Helvetica, sans-serif;
  background-color: rgb(248, 143, 6);
  border-radius: 5px ;
  color: white;
  
}

.addcart i{
  color: black;
}
.sale{
  margin: 15px 555px;
  font-size: 30px;
}
.listproduct.items.img{
  width: 90%;
  filter: drop-shadow(0 50px 20px #0009);
  border-radius: 10px;
}
.listproduct{
  display: grind;
  grid-template-columns: repeat(4,1fr);
  gap: 25px;
 
}
.listproduct.items{
  background-color: #eeeee6;
  padding: 20px;
  border-radius: 20px;

}
.listproduct.items h2{
 font-weight: 400;
 margin: 0px 40px;
 padding: 0px 50px;

}
.items h2{
  text-align: center;
  color:rgb(255, 255, 255)
}
.listproduct.items.price{
  letter-spacing: 7px;
  font-size: small;
}
.listproduct.items.button2{
  background-color: #f19407;
  color:rgb(255, 253, 253);
  padding: 5px 10px;
  
  margin-top: 10px;
  border: none;
  cursor: pointer;
}
      .dropdown{
            display: inline-block;
            padding: 0px;
            margin: 0px;
            
            
        }
        .dropdown i{
            width: 100px;
            font-size: 20px;
        }
        .dropdown button{
            background-color: rgb(2, 2, 2);
            color: white;
            padding: 0px 0px;
            border: none;
            cursor: pointer;
            margin: 15px 0px;
            
        
        }
        .dropdown a{
            display: block;
            color: rgb(253, 252, 252);
         text-decoration: none;
         padding: 10px 15px; 
        }
        .dropdown .content{
            position: absolute;
            background-color:  rgb(0, 0, 0);
            min-width: 99px;
            display: none;
             margin: 5px 5px;
             font-weight: 400;
             font-family:  Helvetica, sans-serif;
          
            
        }
       .dropdown:hover .content{
            display: block;
       }
       .dropdown:hover .button{
             background-color: hsl(0, 3%, 62%);
       }
       .dropdown a:hover{
        background-color: hsl(0, 2%, 34%);
       }
       
     .onlist ul {
      display: flex;
      margin: 0px 0px;
      text-align: center;
      text-decoration: none;
      font-size: 19px;
      margin: 5px 350px;
     }
      .onlist  a{
      color: rgb(255, 255, 255);
      text-decoration: none;
      font-weight: 200;
      font-size: 10px;
      margin: 0px 0px;
      text-align: center;
     }
     .onlist  a:hover{
       color: rgb(126, 121, 121);
    opacity: 1;
}
     
       .onlist-for li{
display: inline-flex;
text-align: center;
margin: 0px 0px;
padding: 5px 60px;
font-weight: 400;
text-decoration: none;
font-size: 10px;
       }

       .logo{
        margin:0px;
        
       }
       .logo img{
      background-color: black;
      float: right;
        height: 35px;
        width: 55px;
        border-radius: 15px;
        
       
       }
       .header{
        background-color: none;
        
       }
       .mynav{
       
        text-decoration: none;
        list-style-type: none;
        width: 95px;
        height: 30px;
        display: inline-block;
       }
       .mynav img{
         height: 30px;
         width:30px ;
         border-radius: 15px;
       
       }
       .myimglist{
        height: 30px;
        
        display: inline-flex;
       }
       .myimglist h4{
        margin: 0px;
        padding: 35px 0px;
        color: rgb(245, 147, 1);
        font-size: 15px;
        font-family: Helvetica, sans-serif;
        
       }
        span{
          display: inline-flex;
        margin: 0px 35px;
        color: white;
        font-family: Helvetica, sans-serif;
        font-size: 10px;
       }
        h2{
         margin: 0px 35px; 
        color: orange;
        font-size: 15px;
       }
       h4{
        font-size: 10px;
        color:white ;
        margin: 0px 33px;
        font-family: Helvetica, sans-serif;
       }
       .myinfo{
        display: inline-flex;
        width: 5px;
        gap: 1px;
       }
  </style>
  <body>
 

  <header>
    <div class="mynav">
      <div class="myimglist">
    <img src="IMG-20260514-WA0006.jpg">
      </div>
      <h2>CEO</h2>
      <div class="myinfo">
    <h4>Kenneth Mankge</h4>
      </div>
    </div>
      <div class="headercontanier">
        <ul>
          <li><a href="bedrooms.html">BedRooms</a></li>
           <li><a href="shops.html">Shorps</a></li>
            <li><a href="decorations.html">Decorations</a></li>
             <li><a href="Doors.html">Doors</a></li>
        </ul>

      </div>
        </headernav>
    </header>
  </div>

 <div class="onlist">
  <div class="onlist-for">
    <ul>
    <li><a href="decorations.html">Style</a></li>
     <li><a href="on sales.html">On Sales</a></li>
      <li><a href="exotic.html">Exotic</a></li>
      
      <li><a href="dinning room.html">Dinning Room</a></li>

      </ul>
  </div>
 </div>  
<br>
 <div class="container">
  <div class="listproduct">
     <div class="items">
        <img src="download.avif">
           <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
      
     </div>
    </div>
         
           <div class="listproduct">
     <div class="items">
        <img src="images (28).jpg">
               <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
      
     </div>
    </div>
           
             <div class="listproduct">
     <div class="items">
        <img src="shopping (8).avif" alt="">
         <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
     </div>
    </div>

             <div class="listproduct">
     <div class="items">
        <img src="shopping (7).avif">
              <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
      
     </div>
    </div>

        <div class="listproduct">
     <div class="items">
        <img src="shopping (7).avif">
              <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
      
     </div>
    </div>
  </div>

 <div class="container">
  <div class="listproduct">
     <div class="items">
        <img src="shopping (6).avif">
         <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
     </div>
    </div>
         
           <div class="listproduct">
     <div class="items">
        <img src="images (27).jpg">
           <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
    
     </div>
    </div>
           
             <div class="listproduct">
     <div class="items">
        <img src="360_F_565755935_GLp4UQXwqgB4wYBGorgOVWm6NqU1taTE.jpg">
           <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
  
     </div>
    </div>

             <div class="listproduct">
     <div class="items">
        <img src="images (29).jpg">
           <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
     
     </div>
    </div>

          <div class="listproduct">
     <div class="items">
        <img src="images (29).jpg">
           <h2>Name Product<h2>
          <div class="price">R200</div>
   <button class="add cart">Add <i class="fa-solid fa-cart-arrow-down"></i></button>
     
     </div>
    </div>
  </div>
<br>
<br>




<footer>
     <div class="footerContanier">
         <div class="socialicons">
            <a href=""><i class="fa-brands fa-twitter"></i></a>
             <a href=""><i class="fa-brands fa-facebook"></i> </a>
              <a href=""><i class="fa-brands fa-tiktok"></i></a>
               <a href=""><i class="fa-brands fa-instagram"></i> </a>
                <a href=""><i class="fa-solid fa-message"></i></a>
         </div>
                  <div class="footernav"> 
                   <H3>Follow Us !!</H3>
                  </div>
                            
                             </div>
     </div>
  <div class="footerButton">
  <P>Copyrights Reserved Designer By<span class="desinger">Ntokozo Mankge</span></P>
</footer>

</body>
</html>
<?php

  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){
           session_abort();

    header("Location:index.php");
 }
?>