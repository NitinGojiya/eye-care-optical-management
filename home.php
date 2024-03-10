<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
        list-style: none;
        text-decoration: none;
        scroll-behavior: smooth;
        border: none;
        outline: none;
    }
    :root{
        --bg-color: #191919;
        --secont-bg-color: #101010;
        --main-color: #00a3c8;
        --text-color: #000;
        --second-color: #000;
        --other-color: #808080;

        --h1-font: 7rem;
        --h2-font: 7rem;
        --p-font: 1.1rem;
    }
    
    header{
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* background: transparent; */
        background-color: #fff;
        padding: 28px 11%;
        border-bottom: 1px solid transparent;
        transition: all ease .50s;
    }
    .logo{
        color: #000;
        font-size: 40px;
        font-weight: bold;
    }
    .logo span{
        color:red;
    }
    .navlist{
        display: flex;
    }
    #menu-icon{
        font-size: 42px;
        color: var(--text-color);
        z-index: 10001;
        cursor: pointer;
        display: none;
    }
    .navlist a{
        color: var(--second-color);
        font-size: var(--p-font);
        font-weight: 600;
        margin: 0 40px;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
    }
    .navlist a:hover{
        color: var(--main-color);
        font-size: 18px;
        text-shadow: 0 10px 10px 0 var(--main-color);
        transition: all ease .30s;
    }
    section{
        padding: 120px 19% 100px;
    }
    .home{
        position: relative;
        min-height: 100vh;
        width: 100%;
        background: url(home.jpg);
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        background: url('background.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .hero-text h3{
        font-family: 'Caveat', cursive;
        color: var(--second-color);
        font-size: 60px;
        font-weight: 600;
        text-align: left;
        margin-left: 16px;
    }
    .hero-text h4{
        font-family: 'Caveat', cursive;
        color: var(--second-color);
        font-size: 60px;
        font-weight: 600;
        text-align: left;
    }
    .hero-text h1{
        font-family: 'Caveat', cursive;
        font-size: 150px;
        color: var(--text-color);
        font-weight: 800;
        letter-spacing: 2px;
    }
    .hero-text span{
        color: #00a3c8;
    }
    .home{
        display: flex;
        flex-direction: column;
        justify-content:flex-start;
        align-items: flex-start;
    }
    #button {
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #2ba8fb;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

#button:hover {
  background-color: #6fc5ff;
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);
}

#button:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}
.head{
    color: #00a3c8;
}
.staff{
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    width: 800px;
}
.staff1{
    height: 260px;
    width: 200px;
    background-color: #00a3c8;
    background: url('staff1.jpeg');
    background-position:center;
     background-size:cover;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    font-size: 1.2rem;
}
.text{
    background-color: #fff;
}
.Facilities{
    background-color: #00a3c8;
}
.Facilities div{
   margin-top: 30px;
}
.main-frame{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 40px;
}
.frame{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.contact{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    align-items: center;
    gap: 8rem;
    background-color: #00a3c8;
}
.left-contact{
    display: flex;
    align-items: center;
    text-align: center;
    flex-direction: column;
}
.right-contact h2{
    font-family: 'Dosis', sans-serif;
    font-size: var(--h2-font);
    font-weight: 800;
    margin-bottom: 5px;
}
.right-contact p{
    color: #fff;
    font-size: var(--p-font);
    line-height: 30px;
}
</style>
</head>
<body>
    <!--header section-->
    <header class="sticky">
        <span class="logo"><span>E</span>ye<span>C</span>are</span>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#staff">Our Staff</a></li>
            <li><a href="#Facilities">Facilities</a></li>
            <li><a href="#optical">Optical Details</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Admin</a></li>
            
        </ul>
    </header>

    <section class="home" id="home">
            <div class="hero-text">
                <h3><span>Life</span> Is All</h3>
                <h3>About Your</h3>
                <h1><span>Vision</span></h1>
            </div>
            <div>
                <a href="book.php"><button id="button">Make An Appointment</button></a>
            </div>
    </section>
<section class="" id="staff">
       <div class="head">
            <h1>Our Staff Details</h1>
       </div> 
<div class="staff" >
            <div class="staff1">
                <div>
                <div class="text">Dr.Axar Makvana</div>
                        <div class="text">10 Year Experience</div>
                </div>
                
                        
            </div>

            <div class="staff1">
                <div>
                <div class="text">Dr.Axar Makvana</div>
                        <div class="text">10 Year Experience</div>
                </div>
                
                        
            </div>
            <div class="staff1">
                <div>
                <div class="text">Dr.Axar Makvana</div>
                        <div class="text">10 Year Experience</div>
                </div>
                
                        
            </div>
            <div class="staff1">
                <div>
                <div class="text">Dr.Axar Makvana</div>
                        <div class="text">10 Year Experience</div>
                </div>
                
                        
            </div>
        </div>
      
</section>
<section class="Facilities" id="Facilities">
   <div>
    <h1>Our Facilities</h1>
   </div>
<div>
        <h3 style="text-decoration: underline; color:#fff;">Patient Insurance Information:</h3>
        <p>Cashless hospitalization is a facility provided by the insurers wherein the insured can get admitted and undergo the required treatment without paying directly for the medical expenditure. The medical expense, thus incurred, shall be settled by the company directly with the hospital. The Cashless claim facility can be obtained only at the hospital network the service provider has a tie-up with.</p>
    </div>
    <div>
        <h3 style="text-decoration: underline; color:#fff;">What is a Cashless hospitalization ?</h3>
        <p>Cashless hospitalization is a facility provided by the insurers wherein the insured can get admitted and undergo the required treatment without paying directly for the medical expenditure. The medical expense, thus incurred, shall be settled by the company directly with the hospital. The Cashless claim facility can be obtained only at the hospital network the service provider has a tie-up with.</p>
    </div>
    <div>
        <h3 style="text-decoration: underline; color:#fff;">What is a network hospital ?</h3>
        <p>Network Hospitals are those hospitals that your service provider has an agreement with. In case of hospitalization if you get admitted to a Network Hospital you will be eligible for cashless hospitalization subject to the other terms and conditions mentioned in your policy being fulfilled. In case you are admitted to a Non-network Hospital, you will have to settle the bills directly to the hospital and then seek reimbursement through your service provider .</p>
    </div>
</section>
<section class="optical" id="optical">
    <div>
        <h1>Optical details </h1>
    </div>
  <div class="main-frame">     
<div class="frame">
            <div class="frame-pic">
                <img src="frame1.webp" height="100px">
            </div>
            <div class="frame-name">
            PIERRE CARDIN
            </div>
        </div>
        <div class="frame">
            <div class="frame-pic">
                <img src="frame1.webp" height="100px">
            </div>
            <div class="frame-name">
            PIERRE CARDIN
            </div>
        </div>
        <div class="frame">
            <div class="frame-pic">
                <img src="frame1.webp" height="100px">
            </div>
            <div class="frame-name">
            PIERRE CARDIN
            </div>
        </div>
        <div class="frame">
            <div class="frame-pic">
                <img src="frame1.webp" height="100px">
            </div>
            <div class="frame-name">
            PIERRE CARDIN
            </div>
        </div>
        <div class="frame">
            <div class="frame-pic">
                <img src="frame1.webp" height="100px">
            </div>
            <div class="frame-name">
            PIERRE CARDIN
            </div>
        </div>
        <div class="frame">
            <div class="frame-pic">
                <img src="frame1.webp" height="100px">
            </div>
            <div class="frame-name">
            PIERRE CARDIN
            </div>
        </div>
        <div class="frame">
            <div class="frame-pic">
                <img src="frame1.webp" height="100px">
            </div>
            <div class="frame-name">
            PIERRE CARDIN
            </div>
        </div>
</div>
</section>
<section class="contact" id="contact">
            <div class="left-contact">
            <h2>**Customer Support:**</h2><br>
            - Email: support@EYE.com<br>
            - Phone: +1 (800) 123-4567 (Mon-Fri, 9:00 AM - 6:00 PM EST)<br><br>
            <h2>**For any  Support:**</h2><br>
            - Email: techsupport@eyecare.com<br>
            - Phone: +1 (800) 987-6543 (Mon-Fri, 9:00 AM - 6:00 PM EST)
            </div>

            <div class="right-contact">
                <h2>
                    Contact
                </h2>
                <p>Thank you for visit our website ! We value your feedback and inquiries. Please feel free to reach out to us through any of the following channels:</p>
            </div>
        </section>
</body>
</html>