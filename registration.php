<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>United As One-Registration
    </title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
       function validform(){
           var name=document.getElementById("name").value;
          var email=document.getElementById("email").value;
         var number=document.getElementById("number").value;
       var country=document.getElementById("country").value;
           var check=1;
//       var duration=document.getElementById("duration").value;
//       var about_us=document.getElementById("about_us").value;
           
           
           
               if (name==""){
                    document.getElementById("name").style.borderColor="red";
                    console.log(false);
                   }

                   else{
                       document.getElementById("name").style.borderColor="#222222";
                       console.log(true);
                   }
           
            
               if (email==""){
                    document.getElementById("email").style.borderColor="red";
                   console.log(false);
                  }

                   else{
                       document.getElementById("email").style.borderColor="#222222";
                       console.log(true);
                   }
           
           
               if (number==""){
                    document.getElementById("number").style.borderColor="red";
                    console.log(false);
                  }

                   else{
                       document.getElementById("number").style.borderColor="#222222";
                       console.log(true);
                   }
           
           
               if (country==""){
                    document.getElementById("country").style.borderColor="red";
                    console.log(false);
                  }

                   else{
                       document.getElementById("country").style.borderColor="#222222";
                       console.log(true);
                   }
             var form = document.getElementById("form");
            function handleForm(event) { event.preventDefault(); } 
            form.addEventListener('submit', handleForm);
       }
           
          
        
           
          
           
           
       
    
    </script>
    
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
    border-right: 1px solid blue;
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
        height: 900px;
    }
       
        #inbox{
           background-color: #111; 
          text-align: center;
          position:relative;
            width:700px;
            border: 1px solid #111;  
             border-radius: 20px;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: white;
        }
        #form{
            font-size: 20px;
            
        }
        
        label{
        padding-bottom: 10px;
        display:inline-block;
        width:350px;
        margin-right:30px;
        position:relative;
        text-align:left;
        
           
        }
        ::placeholder { 
  color: cornflowerblue;
  opacity: 1;
}
form .register button{
    height: 40px;
      width:300px;
      border: none;
      outline: none;
      background:cornflowerblue;
      color: black;
      font-size: 1.0625rem;
      font-weight: 500;
      cursor: pointer;
      transition: .3s;
      margin-bottom: 10px;
        }
   form .register button:hover{
        background: #000;
      color: #d9d9d9;
        }
        input,select{
            padding-right: 150px;
            font-size: 1.0625rem;
            height: 40px;
/*      background: #CDCDCD;*/
      background: #151515;
      padding-left: 10px;
      border: 1px solid #222222;
    color: white;
        }
        textarea{
            padding-right: 150px;
            font-size: 1.0625rem;
/*      background: #CDCDCD;*/
      background: #151515;
      padding-left: 10px;
      border: 1px solid #222222;
    color: white;
}
        #duration{

        width: 310px;
        padding:10px;
            text-align: center;
            
        }
        #about_us{

        width: 310px;
        padding:10px;
            text-align: center;
            
        }
        #reason{

        width: 310px;
        padding:10px;
            text-align: center;
            
        }

        fieldset{
        border: none;
            font-size: 20px;
        width:600px;
        margin:0px auto;
        }
        
        footer{
      position: relative;
      bottom: 0px;
      width: 100%;
      background: #111;
      font-family: 'Poppins', sans-serif;
        margin-top: 20px;
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
      background:  cornflowerblue;
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
      background: cornflowerblue;
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
                <a href="registration.php" class="active"> Registration</a>
                <a href="solution.php">Solutions </a>
               <a href="donation.php" > Donation</a>
                <a href="incident.php"> Incidents</a>
            <a href="aftereffects.php">After Effects </a>
            <a href="registration.php#footer">About Us </a>
                
            </div>
            
</nav>
   </header>
        
        <div  id='back'> 
           
    <div id='inbox'>
       
      
            
        <p style="font-size: 25px ;padding-top: 10px;">Please fill in this form to keep getting timely updates from us.</p><br>
        <p style="padding-left: 10px;">* required</p><br>
        <form name='reg_form' id="form" method="" onsubmit="validform()">
            <fieldset>
                <label for="name"> *Name:</label><br>
            <input type="text" placeholder=" Nishee Shelat" name="name" id="name" ><br><br>
            
        <label for="email">*Email:</label><br>
        <input type="text" placeholder=" xyz@gmail.com" name="email" id="email" ><br><br>
            
        <label for="number">*Contact  Number:</label><br>
        <input type="tel" placeholder=" 8369066288" name="number" id="number" ><br><br>
            
        <label for="country">*Country:</label><br>
        <input type="text" placeholder="India" name="country" id="country" ><br><br>
        
        <label for="duration" >*How frequently should we update you?</label><br>
            <select name="duration" id="duration" >
              <option value="Weekly">Weekly</option>
              <option value="Monthly">Monthly</option>
              <option value="Quaterly">Quaterly</option>
              <option value="Annualy">Anually</option>
             </select><br><br>
        <label for="about_us" >*How did you get to know about us?</label><br>
             <select name="about_us" id="about_us" required>
              <option value="Friend">Friend</option>
              <option value="Family">Family</option>
              <option value="Advertisement">Advertisement</option>
              <option value="Social_Media">Social Media</option>
              </select><br><br>
        <label for="reason" >Reason for registering with us:</label><br>
            <textarea id="reason" placeholder="Please enter your reason here."></textarea>
                <br><br>
                <div class="register">
                    <button type="submit"  >Register</button>
                    </div>
                </fieldset>
        </form>

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