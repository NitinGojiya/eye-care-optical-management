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
    </style>
</head>
<body>
<header class="sticky">
        <span class="logo"><span>E</span>ye<span>C</span>are</span>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#staff">Today Apoiment</a></li>
            <li><a href="#Facilities">Apoiments</a></li>
            <li><a href="#optical">Completed</a></li>
        </ul>
    </header>
    <section class="main">
    <?php
    $con = mysqli_connect('localhost', 'root', '', "dj");
    $sql = "select * from qurey";
    $result = mysqli_query($con, $sql);
    if ($result) 
    {
        while ($row = mysqli_fetch_array($result)) {
    ?>
           <table class="main">
                <tr class="tbody">
                    <th>Name :</th>
                    <td><?php echo $row['0']; ?></td>
                    <th>Customer Mobile No :</th>
                    <td><?php echo $row['2']; ?></td>
                    
                </tr>
                <tr class="tbody">
                    <th>Date :</th>
                    <td><?php echo $row['2']; ?></td>
                    <th>Massage :</th>
                    <td><?php echo $row['2']; ?></td>
                </tr>
                <tr class="tbody">
                    <th>Customer Email :</th>
                    <td><?php echo $row['1']; ?></td>
                    <th>Checkup Type :</th>
                    <td><?php echo $row['3']; ?></td>    
                </tr>
                        
            </table>

            <td><button name="cancel" type="submit" class="btn1">Checked</button></td>
       <?php     
       }
    }
        ?>
        </section>
</body>
</html>