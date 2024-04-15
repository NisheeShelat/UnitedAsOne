<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>United As One-Solutions
    </title>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    body{
    font: Arial, Helvetica, sans-serif;
    
}
*{
    box-sizing: border-box;
    font: arial;
    margin:0;
    padding:0;
        }
/*
        #h3{

            top:10;
            position:fixed;
            background-color: #111;
            width:auto;
            text-align: center;
        }
*/
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
         img{
        background: cover;
        margin-bottom: 15px;
}
         .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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
    }
   .sidebars{
    display: flex;
    flex-wrap: wrap;
    font-size: 25px;
    margin: 0px 30px;
    padding-top: 30px;
   
    color: white;
        
}
        h4{
            color: cornflowerblue;
            padding: 5px;
        }
    
    .sidebar p{
            font-size: 25px;
            padding: 10px;
        }
.sidebarwrapper{
    padding: 15px;
    flex: 50%;
    
    
}
.sidebar{
    
    height: 500px;
    width: 100%;
    border: 1px solid #111;  
    border-radius: 20px;
  
/*    flex:50%;*/
    overflow: hidden;
    margin-bottom: 20px;
    
}
.sidebar h3{
    color:cornflowerblue;
    font-size: 30px;
    margin-bottom: 15px;
    text-align: center;
    
        }
         a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    background: cornflowerblue;
    text-decoration: none;
    color:black;
       margin: 10px 500px;
             padding: 5px 20px;
}
    a.button:hover{
         background: #000;
      color: #d9d9d9;
    }
    
    #solution_box{
        background: #111;
        overflow: hidden;
        padding-top: 20px;
        padding-left: 30px;
         height: auto;
    width: 100%;
    border: 1px solid #111;  
    border-radius: 20px;
    margin-bottom: 20px;
    }
        #solution_box p{
            padding: 10px;
        }
    
    #rightsidebar{
        background: #111;
        padding-top: 20px;
        padding-left: 30px;
         overflow: hidden;
        overflow-y: scroll;
    }
         #leftsidebar{
        background: #111;
        overflow: hidden;
        overflow-y: scroll;
              padding-top: 20px;
              padding-left: 30px;
        }
        ::-webkit-scrollbar {
          width: 10px;

        }
        ::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 20px;
        margin-top: 10px;
            margin-bottom: 10px;

            
    }
       ::-webkit-scrollbar-thumb {
  background: #888;
   

}


::-webkit-scrollbar-thumb:hover {
  background: #555;
}
            footer{
      position: relative;
      bottom: 0px;
      width: 100%;
        margin-top: 10px;
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
    <body>
           <header class="header">
        
       <h1 style="font-size: 60px">United As One</h1>
        <nav>
        <div id="menu">
            
                <a href="home.php" > Home</a>
                <a href="registration.php" > Registration</a>
                <a href="solution.php"  class="active">Solutions </a>
               <a href="donation.php"> Donation</a>
                <a href="incident.php" > Incidents</a>
            <a href="aftereffects.php" >After Effects </a>
            <a href="solution.php#footer">About Us </a>
                
            </div>
            
</nav>
   </header>
        <div id="back">
            <div class="sidebars">
                <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                         <div id="h3">
                         <h3 >Booms</h3>
                             </div>
                         <img src="sol1.PNG" alt="Booms" class="center">
                        <p> Booms are floating dividers used for containment and diversion. They can be made of materials like metal or plastic, and are anchored around an oil spill or across waterway entrances. Winds and tides will often enable spilled oil to circumnavigate any man-made dividers that only sit on the water’s surface. This is why booms are specifically designed to sit both above and below the waterline.</p>

<p>Oil spills release large amounts of unrefined oil into the ocean, where it eventually collects on the surface. While oil is heavier than water, it is also less dense, which is why it separates and floats.</p>

<p>Most booms include the upper divider and lower “skirt” that ensure oil remains within the boom. There are other types of booms, such as sorbent and fire booms. Sorbent booms are made of absorbent materials that sponge up oil, but they can’t contain oil for long because they don’t include a skirt. Sorbent booms may be used for smaller spills in calmer waters, instead of in larger, harsher environments. Fire booms are rarely used, and are a part of the in-situ burning method that is explained later in this article.</p>
                
                </div>
                 </div>
                 <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                         <h3>Skimmers</h3>
                         <img src="sol2.PNG" alt="Skimmers" class="center">
                        <p> Collecting and separating oil from water has traditionally been a delicate, time-consuming process. Skimmers – composed of an array of different mechanical devices – are the most preferred method of removing oil from water. To increase cleanup efficiency, oil spill responders use skimmers in tandem with booms to concentrate the oil for collection. They have also been experimenting with various skimmer technologies, analyzing which methods are the most effective. While skimmers work well for their designed purpose, they are limited by their size, by the quantity of oil they can separate and by the speed with which they can operate.</p>

<p>Each skimmer design is sensitive to factors such as debris and rough waters. This is one reason why safety and emergency management professionals are working to design more durable and faster skimmers. Some skimmers use conveyor belts to remove oil into a containment reservoir, while others are suction based. Regardless of the type of skimmer that is used, the retrieved oil is either saved for its initial purpose or appropriately destroyed. During an oil spill, containment and damage control take precedence over any salvaging concerns.</p>
                
                </div>
                 </div>
                 <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                       <h3>  Dispersants</h3>
                         <img src="sol3.PNG" alt="Dispersants" class="center">
                         
                    <p>     Oil dispersants are the chemical mixture of surface-active substances added to colloid, to accelerate, and to improve the separation of particles and to prevent them from clumping with each other. Chemical surfactants are amphiphilic compounds, which can reduce surface and interfacial tension by accumulating at the interface of immiscible fluids, and increase the solubility and mobility of hydrophobic or insoluble organic compound.</p>
<p>The ocean is a carefully balanced ecosystem with its own defense systems. When spills occur, dispersants assist these natural ocean defenses by helping diffuse the oil. Dispersants are chemicals sprayed onto oil slicks. They help break up, or disperse, the oil into small drops. Then, natural-born microbes in the dispersal agents eat the crude oil and attack it more efficiently. Additionally, the turbulence created by tides and winds helps further dissipate the oil. Dispersants are necessary for the largest spills, and emergency management experts are working toward widening their use.</p>
                
                </div>
                 </div>
                  <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                        <h3>In-Situ Burning</h3>
                         <img src="sol4.PNG" alt=" In-Situ Burning" class="center">
                         <p>In-situ burning is the term given to the process of burning floating oil at sea, at or close to the site of a spill. In order to undertake burning, the oil must be concentrated and an ignition source applied. Burning oil at seas has, in ideal conditions, the potential to remove relatively large amounts of oil from the sea surface.</p>
<p>A rarely used mitigation method, in-situ burning eliminates oil directly from the water as opposed to collecting and containing it. The in-situ method is implemented in the following way. An oil slick is surrounded by fire booms that are made of fire-retardant materials. Then the oil is burned off with as much control as possible. While this burning method is fast and effective, it does come with costs. Plants, aquatic life and land creatures can be consumed by the fire. Also, the oil burning leaves a toxic residue on the water that must be removed before it negatively impacts the environment. Because of these factors, in-situ burns are only used in calm waters that do not have dense plant and animal populations.</p>
                
                </div>
                 </div>
                <div class="sidebarwrapper">
                     <div id="solution_box">
                    <p>  If we have explored n number of solutions , there still might me a (N+1)th solution that is unexplored.</p>
                         <p> As Mahatama Gandhiji had once said,<i> "You must be the change you wish to see in the world."</i></p>
                         <p>If you feel you have got that solution please submit it, as it might help our community to become a better place.</p>
                         <p> Please click the below button to fill in your solution.</p>
                           <a href="user_solution.php" class="button">Submit Solution</a>
                 
            
                
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
              <a href="#"><span class="fab fa-instagram"></span></a>
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