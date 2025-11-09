<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
        nav{
            padding:20px;
            background-color:black;
            width:100%;
        }
        nav>ul{
            display:flex;
            width:100%;
            gap:30px;
            justify-content:center;
            list-style:none;
        }
        nav > ul > li > a{
            color:white;
            text-decoration:none;
            font-size:30px;
        }
        section{
            width:100%;
            text-align:center;
        }
        section >div{
            height: 450px;
            width: 100%;
        }
        .p{
            margin:16px;
        }
        .header{
            font-size:50px;
            margin-top:24px;
            
        }
        .foter{
            padding:20px;
            background-color:black;
     

        }
        footer >div > h1{
            color: white;
            text-align:center;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/home">home</a></li>
            <li><a href="/services">services</a></li>
            <li><a href="/about">about</a></li>
            <li><a href="/contact">contact</a></li>
        </ul>
    </nav>
    <section>
        <div>
            <h1 class="header">Home page</h1>
            <div>
                <h1>Who we are?</h1>
                 <p class= "p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa numquam, consequuntur labore unde facere adipisci saepe et maxime voluptate eveniet quo! Sapiente dignissimos esse quis error perspiciatis voluptatem corrupti eligendi. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minus sunt, debitis nostrum obcaecati aspernatur culpa reiciendis facere magnam consequatur. Consequatur odit fuga cum suscipit omnis optio blanditiis similique minus!
                 </p>
                 

            </div>
        </div>
    </section>
    <footer>
    <div class="foter">
       <h1>2025 &copy; desined by Fatima Rezaie </h1>
    </div>
    </footer>
</body>
</html>