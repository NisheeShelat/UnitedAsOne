<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>United As One-Home
    </title>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  #font-family: 'Poppins', sans-serif;
   font: arial;    
    }
    .header{
        position: inherit;
/*
        overflow: hidden;
       position:fixed;
        top: 0;
        width: 100%;
*/
       padding-bottom: 20px;
       /*background:linear-gradient(#0E365A,white); */
        background:#111; 
        text-align: center;
        color: white;
       font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        margin-bottom: 20px;
    }
    #menu a{
    padding: 0px 30px;
    height: 30px;
    border-right: 1px solid cornflowerblue;
    }
    #menu a{
    text-decoration: none;
    text-transform: uppercase;
    font-size: 20px;
    /*color:#0E365A;*/
    color:white;
    line-height: 30px;
    transition: font-size 0.3s ease;
    -webkit-transition: font-size 0.3s ease;
    -moz-transition: font-size 0.3s ease;
    -o-transition: font-size 0.3s ease;
    -ms-transition: font-size 0.3s ease;
    }
    #menu  a:hover, #menu a.active{
    font-size: 25px;
    font-weight: bold;
/*    color:black;*/
     color:cornflowerblue;
    }
    #menu a:last-child{
    border-right: none;
     }


    #slider{
        overflow: hidden;
/*        margin-top:145px;*/
        
        
    }
    #slider figure{
        position: relative;
        width: 500%;
        margin: 0;
        left: 0;
        animation: 20s slider infinite;
    }
    #slider figure img{
        width: 10%;
        height: 350px;
        float: left;
        
    }
    @keyframes slider{
        0%{left: 0;}
        20%{left:0;}
        25%{left:-100%;}
        45%{left:-100%;}
        50%{left:-200%;}
        70%{left:-200%;}
        75%{left:-300%;}
        95%{left:-300%;}
        100%{left:-400%;}
    }
    
       .sidebars{
    display: flex;
    flex-wrap: wrap;
    margin: 0px 42px;
    padding-top: 30px;
    font-size: 25px;
    color: white;
    margin-bottom: 20px;
        
}
.sidebarwrapper{
    padding: 0px 5px;
    flex: 50%;
    
    
}
.sidebar{
    
    height: 100%;
    width: 100%;
    border: 1px solid white;  
    border-radius: 20px;
    padding: 10px 30px;
    flex:50%;
    margin-bottom: 20px;
}
.sidebar h3{
    color:cornflowerblue;
    font-size: 30px;
    text-align: center;
    padding-bottom: 10px;
    }
    #leftsidebar{
        background: #111;
    }
         #rightsidebar{
        background: #111;
    }

    .video{
padding-top: 20px;
    padding-bottom: 20px;}


footer{
      position: relative;
      bottom: 0px;
      width: 100%;
      background: #111;
      font-family: 'Poppins', sans-serif;
        }
.main-content{
      display: flex;
      color: white;
    }
.main-content .box{
      flex-basis: 50%;
      padding: 10px 20px;
    }
.box h2{
      font-size: 1.125rem;
      font-weight: 600;
      text-transform: uppercase;
    }
.box .content{
      margin: 20px 0 0 0;
      position: relative;
    }
.box .content:before{
      position: absolute;
      content: '';
      top: -10px;
      height: 2px;
      width: 100%;
      background: #1a1a1a;
    }
.box .content:after{
      position: absolute;
      content: '';
      height: 2px;
      width: 15%;
      background: cornflowerblue;
      top: -10px;
    }
.left .content p{
      text-align: justify;
    }
.left .content .social{
      margin: 20px 0 0 0;
    }
.left .content .social a{
      padding: 0 2px;
    }
.left .content .social a span{
      height: 40px;
      width: 40px;
      color: #d9d9d9;
      background: #1a1a1a;
      line-height: 40px;
      text-align: center;
      font-size: 18px;
      border-radius: 5px;
      transition: 0.3s;
    }
.left .content .social a span:hover{
      background: cornflowerblue;
    color: black;
    }
.center .content .fas{
      font-size: 1.4375rem;
      background: #1a1a1a;
      height: 45px;
      width: 45px;
      line-height: 45px;
      text-align: center;
      border-radius: 50%;
      transition: 0.3s;
      cursor: pointer;
    }
.center .content .fas:hover{
      background: cornflowerblue;
    color: black;
    }
.center .content .text{
      font-size: 1.0625rem;
      font-weight: 500;
      padding-left: 10px;
    }
.center .content .phone{
      margin: 15px 0;
    }
.right form .text{
    
      font-size: 1.0625rem;
      margin-bottom: 2px;
      color: #656565;

    }
.right form .msg{
      margin-top: 10px;
      background: #151515;
      
    
    }
.right form input, .right form .msgForm{
      width: 100%;
      font-size: 1.0625rem;
      background: #151515;
      padding-left: 10px;
      border: 1px solid #222222;
    color: white;
    }


.right form input{
      height: 35px;
    }
.right form .btn{
      margin-top: 10px;
    }
.right form .btn button{
      height: 40px;
      width: 100%;
      border: none;
      outline: none;
      #background: #2222aa;
      background: cornflowerblue;
      #background: #0000e6;
      color: black;
      font-size: 1.0625rem;
      font-weight: 500;
      cursor: pointer;
      transition: .3s;
    }
.right form .btn button:hover{
      background: #000;
      color: #d9d9d9;
    }
.bottom center{
      padding: 5px;
      font-size: 0.9375rem;
      background: #151515;
      color: #656565;

    }
.bottom center span{
      color: #656565;

    }
.bottom center a{
      color:  cornflowerblue;
      text-decoration: none;

    }
.bottom center a:hover{
      text-decoration: underline;
    }
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}
    
    
</style>
    
</head>
<body class="body">
    <header class="header">
        
       <h1 style="font-size: 60px">United As One</h1>
        <nav>
        <div id="menu">
            
                <a href="home.php" class="active"> Home</a>
                <a href="registration.php" > Registration</a>
                <a href="solution.php">Solutions </a>
               <a href="donation.php" > Donation</a>
                <a href="incident.php"> Incidents</a>
            <a href="aftereffects.php">After Effects </a>
            <a href="home.php#footer">About Us </a>
                
            </div>
            
</nav>
   </header>
     <div id="slider">
         <figure>
    <img src="image1.png" alt="Image 1" id="image1" >
        <img src="image2.png" alt="Image 2" id="image2">
         <img src="image3.png" alt="Image 3" id="image3">
         <img src="image4.png" alt="Image 4" id="image4">
        <img src="image1.png" alt="Image 1" id="image1" >
             <img src="image2.png" alt="Image 2" id="image2">
         <img src="image3.png" alt="Image 3" id="image3">
         <img src="image4.png" alt="Image 4" id="image4">
             <img src="image1.png" alt="Image 1" id="image1" >
        <img src="image2.png" alt="Image 2" id="image2">
             </figure>
    </div>
    <main>
        <div class="sidebars">
                 <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                
                <h3>What are oil spills?</h3>
              <p>  Contamination of seawater due to an oil pour, as a result of an accident or human error, is termed an oil spill. Oil is among the most important energy sources in the world and because of its uneven distribution, it is transported by ships across the oceans and by pipelines across the lands. This has resulted in several accidents in the past while transferring the oil to vessels, during transportation, breaking of pipelines, as well as while drilling in the earth’s crust.</p>
<!--                          <iframe width="560" height="315" src="https://www.youtube.com/embed/OH1mrUjc_9U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
           <div class="video">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/UkATPicHIo4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
                     </div>
                 </div>
                 <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                 <h3>How do oil spills impact the world?</h3>
                <p>Oils spills at sea or in coastal areas are of particular concern because of the risk to fragile ecosystems and associated livelihoods. Because most oils float on top of water, the greatest effect of oil spills is on life that is on or near the surface of the water.Oil can harm birds and marine mammals as it can coat their fur or feathers and limit their ability to swim, float or fly. Oil is toxic to many fishes and can block sunlight from reaching algae.</p>
                         <div class="video">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/SA-_KRTDVLU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                 </div>
                    
            
            </div>
        </div>
    </main>
    <footer id="footer">
      <div class="main-content">
        <div class="left box">
          <h2>
About us</h2>
<div class="content">
            <p>
               >United As One has been assisting with search and rescue, relief, recover, and rebuilding since 2018. Our volunteers all over the world make this possible.Your donations make this possible. 
</p>
<div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#p"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
</div>
</div>
<div class="center box">
          <h2>
Address</h2>
<div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Mumbai,India</span>
            </div>
<div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91-8369066288</span>
            </div>
<div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">abc@example.com</span>
            </div>
</div>
</div>
<div class="right box">
          <h2>
Contact us</h2>
<div class="content">
            <form action="#">
              <div class="email">
                <div class="text">
Email *</div>
<input type="email" required>
              </div>
<div class="msg">
                <div class="text">
Message *</div>

<textarea id=".msgForm" rows="2" cols="25" required style="background: #151515 ; color: white"></textarea> 
              
              <br />
<div class="btn">
<button type="submit">Send</button>
              </div>

                </div>
    </form>
   
    </div>
          </div>
    </div>
         <div class="bottom">
<center>
          <span class="credit" style="text-align: center">Created By <a href="#">United As One</a> | </span>
          <span class="far fa-copyright" style="text-align: center"></span> 2020 All rights reserved.
        </center>
</div>
      </footer>
   
</body>
</html>