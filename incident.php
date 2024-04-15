<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>United As One-Incidents
    </title>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
   font: arial;    
    }
    img{
        background: cover;
        margin-bottom: 15px;
}
    a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    background: cornflowerblue;
    text-decoration: none;
    color:black;
        
       margin: 10px 230px;
        padding: 10px 20px;
}
    a.button:hover{
         background: #000;
      color: #d9d9d9;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
    .sidebar p
    {
        font-size: 20px;
        text-align: center;
        padding:0px 15px;
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
    #back{
       
        background-image:url(registration2.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        position: relative;
        height: 100%;
        margin-bottom: 20px;
    }
   
    
  .sidebars{
    display: flex;
    flex-wrap: wrap;
    font-size: 25px;
    margin: 20px 40px;
    padding-top: 30px;
   color: white;
     
        
}
.sidebarwrapper{
    padding: 10px;
    flex: 50%;
    
    
}
.sidebar{
    
    height: 100%;
    width: 100%;
    border: 1px solid #111;  
    border-radius: 20px;
    padding-top:15px;
    
/*    flex:50%;*/
    overflow: hidden;
    
    
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
            
                <a href="home.php" > Home</a>
                <a href="registration.php" > Registration</a>
                <a href="solution.php">Solutions </a>
               <a href="donation.php" > Donation</a>
                <a href="incident.php" class="active"> Incidents</a>
            <a href="aftereffects.php">After Effects </a>
            <a href="incident.php#footer">About Us </a>
                
            </div>
            
</nav>
   </header>
    <div id="back">
     <div class="sidebars">
                 <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                         <h3>The Amoco Cadiz Oil Spill (1978)</h3>
                <img src="1.PNG" alt="The Amoco Cadiz Oil Spill (1978)" class="center">
                         <p>The Amoco Cadiz, a very large crude carrier stocked with nearly 69 million gallons of light crude oil, ran aground on shallow rocks off the coast of Brittany, France, on the morning of March 16, 1978.</p><br>
                         <a href="incident1.html" class="button">Read More</a>
                </div>
                 </div>
                 <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                         <h3>The Atlantic Empress Oil Spill (1979)</h3>
                <img src="2.PNG" alt="The Atlantic Empress Oil Spill (1979)" class="center">
                         <p>The Atlantic Empress disaster released an estimated 90 million gallons of oil into the Atlantic Ocean some 16 km (10 miles) off the islands of Trinidad and Tobago. </p>
                        <br>
                           <a href="incident2.html" class="button">Read More</a>
                </div>
                 </div>
          <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                         <h3>The Ixtoc 1 Oil Spill (1979)</h3>
                <img src="3.PNG" alt="The Ixtoc 1 Oil Spill (1979)" class="center">
                         <p>Mexico’s Ixtoc 1 accident released up to 140 million gallons of crude oil into the Bay of Campeche between June 1979 and March 1980.</p>
                          <br>
                           <a href="incident3.html" class="button">Read More</a>
                </div>
                 </div>
                     <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                          <h3>The Castillo de Bellver Oil Spill (1983)</h3> 
                <img src="4.PNG" alt="The Castillo de Bellver Oil Spill (1983)" class="center">
                         <p>A fire aboard the oil tanker Castillo de Bellver in August 1983 was responsible for the tanker’s capsizing.</p>
                          <br>
                           <a href="incident4.html" class="button">Read More</a>
        </div>
         </div>
         <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                         <h3>The Incidents at the Nowruz Oil Field (1983)</h3>
                <img src="5.PNG" alt="The Incidents at the Nowruz Oil Field (1983)" class="center">
                         <p>On February 10, 1983, an Iranian oil platform above the Nowruz oil field in the northern Persian Gulf was struck by a tanker.The impact caused the platform to list 45 degrees, and corrosion and wave energy worked to topple the platform and rupture the platform’s wellhead.  </p>
                          <br>
                           <a href="incident5.html" class="button">Read More</a>
            </div>
            </div>
          <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                          <h3>The Persian Gulf War Oil Spill (1991)</h3> 
                <img src="6.PNG" alt="The Persian Gulf War Oil Spill (1991)" class="center">
                         <p>On August 2, 1990, Iraq’s leader, Saddam Hussein, ordered the invasion and occupation of Kuwait with the apparent aim of acquiring that nation’s large oil reserves, canceling a large debt Iraq owed Kuwait, and expanding Iraqi power in the region .</p>
                          <br>
                           <a href="incident6.html" class="button">Read More</a>
            </div>
             </div>
          <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                         <h3>The Kolva River Spill (1994)</h3>
                <img src="7.PNG" alt="The Kolva River Spill (1994)" class="center">
                         <p>The Kolva River oil spill was caused by a breach in a corroded oil pipeline in the Russian Arctic.Oil pooled around the rupture site for eight months, contained by a dike, but the dike later gave way, spilling roughly 84 million gallons of oil into the Kolva River.</p>
                          <br>
                           <a href="incident7.html" class="button">Read More</a>
            </div>
            </div>
         <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                          <h3>BP’s Deepwater Horizon Oil Spill (2010)</h3> 
                <img src="8.PNG" alt="BP’s Deepwater Horizon Oil Spill (2010)" class="center">
                         <p>The largest accidental oil spill in history began in the Gulf of Mexico on April 20, 2010, after a surge of natural gas blasted through a cement well cap that had recently been installed to seal a well drilled by the Deepwater Horizon oil platform. </p>
                          <br>
                           <a href="incident8.html" class="button">Read More</a>
            </div>
             </div>
        </div>
    </div>
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