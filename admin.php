<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    .main-top{
            display: flex;
            width: 100%
        }
        .main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #00a3c8;
            color: #000;
            position: relative;
            padding: 50px;
            width: 100%;
        }
        .tbody{
            display: flex;
            flex-direction: row;
            gap: 3rem;
            flex-wrap: wrap;
            border-bottom: #000 3px solid;
        }
        .tbody th{
            align-items: center;
            text-align: center;
            font-size: 1.3rem;
            width: 200px;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .tbody td{
            align-items: center;
            text-align: center;
            font-size: 1.5rem;
            width: 200px;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .button{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        .btn1{
            color: #fff;
            background-color: darkblue;
            height: 50px;
            width: 100px;
            font-size: 20px;
            border-radius: 5px;
        }
        .main{
            position: relative;
            padding: 125px;
            width: 100%;
        }
        .main-top{
            display: flex;
            width: 100%
        }
        .thead{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .th{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: darkblue;
            height: 60px;
        }
        .th div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
            font-weight: 600;
            
        }
        .contain{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #191c24;
            color: #ffffff;
            transition: ease .5s;
            height: 60px;
        }
        .contain div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
        }
        .action-btn{ 
            border: #000 1px solid ;
            background-color: darkblue;
            color: #ffffff;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<header class="sticky" id="home">
        <span class="logo"><span>E</span>ye<span>C</span>are</span>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#today">Home</a></li>
            <li><a href="#today">Today Apoiment</a></li>
            <li><a href="#all">Apoiments</a></li>
            <li><a href="#complete">Completed</a></li>
        </ul>
    </header>
   
    <section class="main" id="today">
        <div class="main-top">
                <h1 style="color: #fff; text-decoration:underline; margin-bottom:20px;">Today Appointment</h1>
            </div>
            <div class="thead">
        <div class="th">
            <div>Name</div>
            <div>Customer Mobile No</div>
            <div>Date</div>
            <div>Massage</div>
            <div>Customer Email</div>
            
            <div>Checkup Type</div>
            <div>Action</div>
        
           
        </div>
        <?php
    $con = mysqli_connect('localhost', 'root', '', "eyecare");
    $d= date("Y-m-d");
    $sql = "SELECT * FROM `appointment` where date='$d' and status='pending'";
    $result = mysqli_query($con, $sql);
    if ($result) 
    {
        while ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="contain">
            <div><?php echo $row['fname'].' '.$row['lname']; ?></div>
            <div><?php echo $row['contact']; ?></div>
            <div><?php echo $row['date']; ?></div>
            <div><?php echo $row['message']; ?></div>
            <div><?php echo $row['contact']; ?></div>
        
            <div><?php echo $row['type']; ?></div>
            <div><a href="check.php?id=<?php echo $row['id']; ?>"><button >Checked</button></a>
                </div>
          
               
        </div>
            <?php
        }}
        ?>
    </div>
        </section>

  <!--appoinments-->
  <section class="main" id="all">
        <div class="main-top">
                <h1 style="color: #fff; text-decoration:underline; margin-bottom:20px;">All Appointment</h1>
            </div>
            <div class="thead">
        <div class="th">
            <div>Name</div>
            <div>Customer Mobile No</div>
            <div>Date</div>
            <div>Massage</div>
            <div>Customer Email</div>
            
            <div>Checkup Type</div>
        
           
        </div>
        <?php
    $con = mysqli_connect('localhost', 'root', '', "eyecare");
    $d= date("Y-m-d");
    $sql = "SELECT * FROM `appointment` where status='pending'";
    $result = mysqli_query($con, $sql);
    if ($result) 
    {
        while ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="contain">
            <div><?php echo $row['fname'].' '.$row['lname']; ?></div>
            <div><?php echo $row['contact']; ?></div>
            <div><?php echo $row['date']; ?></div>
            <div><?php echo $row['message']; ?></div>
            <div><?php echo $row['contact']; ?></div>
        
            <div><?php echo $row['type']; ?></div>
          
               
        </div>
            <?php
        }}
        ?>
    </div>
        </section>
  <!--end appoinments-->
  <section class="main" id="complete">
        <div class="main-top">
                <h1 style="color: #fff; text-decoration:underline; margin-bottom:20px;">Patient History</h1>
            </div>
            <div class="thead">
        <div class="th">
            <div>Name</div>
            <div>Customer Mobile No</div>
            <div>Date</div>
            <div>Massage</div>
            <div>Customer Email</div>
            
            <div>Checkup Type</div>
        
           
        </div>
        <?php
    $con = mysqli_connect('localhost', 'root', '', "eyecare");
    $d= date("Y-m-d");
    $sql = "SELECT * FROM `appointment`";
    $result = mysqli_query($con, $sql);
    if ($result) 
    {
        while ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="contain">
            <div><?php echo $row['fname'].' '.$row['lname']; ?></div>
            <div><?php echo $row['contact']; ?></div>
            <div><?php echo $row['date']; ?></div>
            <div><?php echo $row['message']; ?></div>
            <div><?php echo $row['contact']; ?></div>
        
            <div><?php echo $row['type']; ?></div>
          
               
        </div>
            <?php
        }}
        ?>
    </div>
        </section>
</body>
</html>