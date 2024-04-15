<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>United As One- After Effects
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
             border-radius: 10px;
/*             border:5px double white;*/
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
                <a href="solution.php">Solutions </a>
               <a href="donation.php" > Donation</a>
                <a href="incident.php" > Incidents</a>
            <a href="aftereffects.php" class="active">After Effects </a>
            <a href="aftereffects.php#footer">About Us </a>
                
            </div>
            
</nav>
   </header>
        <div id="back">
            <div class="sidebars">
                <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                         <h3>Effects on Environments in Water</h3>
                         <img src="after1.PNG" alt="Effects on Environments in Water" class="center">
                         <p>The oil environmental impact on water in damaging in a variety of ways. When there are oil spills in the ocean or freshwater, it does not blend with the water. Oil floats on the surface of salt and fresh water. Over a very short period of time, the oil spreads out into a very thin layer across the surface of the water. This can block sunlight from reaching oceanic environments, which can severely impact producers and, thus, the entire food chain of an ecosystem.</p>

<h4>Slick Expands</h4>

<p>This layer, called a slick, expands until the oil layer is extremely thin and can spread hundreds of miles wide. This layer is called a sheen and is usually less than 0.01 mm thick. Oil spills on the surface of the water are subjected to the whims of weather, waves and currents. Thus, an oil spill far out at sea can be carried ashore by wave and current action.</p>

<p>Rough seas can split an oil slick apart, carrying some oil in one direction and more in another. In contrast, a near shore oil spill can be totally controlled by currents and wave action that causes the oil to come ashore, damaging marine shoreline habitat.</p>

<h4>Oil Breakdown</h4>

<p>Different types of oil react differently when spilled. Some evaporate in small amounts, while others break down quicker. After the sheen breaks down, a moderate amount of oil will break down and be deposited on the bottom of the ocean.</p>

<p>Certain types of microbes will break apart and consume the oil, but this in no way makes up for the damage done during the spill. In addition, when oil spills in the ocean break apart and sink to the ocean floor, it contaminates the underwater habitat, too.</p>
                
                </div>
                 </div>
                 <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                         <h3>Oil Environmental Impact on the Coastline</h3>
                         <img src="after2.PNG" alt="Oil Environmental Impact on the Coastline" class="center">
                         <p>Perhaps the most visual part of an oil spill is the harsh effects oil has on the coastline. Pictures of oil covered birds and sea mammals are common. Oil is thick and sticks to everything it touches. While the most visual part of the damage might be the birds and wildlife you see on TV, consider that the oil covers everything right down to a grain of sand. Every rock, piece of driftwood, saw grass, sand, soil and microscopic habitat is destroyed or affected by the thick oil that washes ashore after a spill.</p>

<p>Unless there is a concerted effort to clean the shoreline, oil will stay on shore until weather and time break the oil down. The process is extremely slow, which is why so many environmentalists work diligently to clean beach areas, rocks and shoreline that have been contaminated. The gooey mass that makes up an oil slick litters the shoreline with ugly black tar.</p>

<p>What makes it so very dangerous is that the coastline is where so much marine life is concentrated. Typically, shore areas are the nurseries for fish and marine life, in addition to being the home of many young marine mammals.</p>
                
                </div>
                 </div>
                 <div class="sidebarwrapper">
                     <div id="leftsidebar" class="sidebar">
                       <h3>  Marine Life Direct Impact</h3>
                         <img src="after3.PNG" alt="Marine Life Direct Impact" class="center">
<p>Marine and coastal life can be contaminated in a number of ways, through poison by ingestion, destruction of habitat and direct contact with oil. For example, when oil floats on the water surface, a marine mammal that surfaces in the center of the slick ingests the oil. Marine animals and organisms that swim through the slick area can also ingest oil through their gills.</p>

<p>Even if a marine animal is miles from the oil spill, but they eat another organism that was close by, they'll ingest that oil, which is poisonous. Ingesting oil can cause any number of problems besides death and sickness. If an animal or other marine organisms ingests oil, it can affect their ability to reproduce and produce viable offspring.</p>

<h4>Oil Environmental Impact on Habitat and Wildlife</h4>

<p>Habitat destruction is all too obvious with an oil spill. The most visible would be seen on shore, but beneath the water there is a very delicate balance in the reefs and shallow water habitats. Plankton, producers at the bottom of the food chain, are often killed by oil spills as a result of changes to the water and lack of sunlight beneath the oil slick.</p>

<p>This effect moves right on up the food chain. Of particular concern are the very delicate sea animals, such as clams and mussels that feed on plankton.</p>

<p>Direct contact with oil harms any organism that comes in contact with the oil. For example, when oil cakes the feathers of a bird, it keeps their feather from repelling water. Oil also weighs down the bird, keeping it from flying. If a bird isn't cleaned of the oil, it's a sure license to death. Many birds also ingest deadly amounts of oil trying to clean their feathers.</p>

<p>The same holds true for marine mammals. Marine mammal fur acts as an insulator to keep the animal warm in the coldest waters. When oil saturates the fur, it ruins the ability of the fur to retain heat. Again, marine mammals can ingest the oil when trying to clean their fur.</p>
                
                </div>
                 </div>
                  <div class="sidebarwrapper">
                     <div id="rightsidebar" class="sidebar">
                        <h3> Long-Term Impacts</h3>
                         <img src="after4.PNG" alt=" Long-Term Impacts" class="center">
<p>There are detrimental long-term effects of an oil spill on humans. One example of this is with the native Inuit peoples near the Exxon Valdez oil spill in Prince William Sound in Alaska in 1989. With much of their ecosystem destroyed, the tribes were forced to rely on government assistance to continue their lives in the area. With all manner of sea life destroyed, the culture could not continue to flourish and became essentially a welfare community with a very poor economy.</p>
                        <p> The overall cost and challenge of cleaning up an oil spill is enormous. Since oil spills can occur anywhere in the ocean or near land, the resources needed to repair the situation in a timely manner are generally not located near the site. This becomes even more expensive when a location is remote. The general ways to clean up an oil spill are varied and cause their own environmental effects.</p>

<p>One preferred method is the introduction of microorganisms that cause the oil to herd to the surface and turn into an almost gel-like substance. One drawback with this system is that a number of bacteria are created which break down the hydrocarbons. Once most of the oil slick is broken down, the bacteria move onto other materials containing hydrocarbons. Controlled burning can also be used. However this method causes a large amount of air pollution and can get out of control very easily, spreading the fire to other areas. Detergents are also beneficial in fighting an oil slick. But like the microorganisms, these have long-term effects on the ecosystems. According to NOAA, detergents kill coral reefs.</p>
                
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