@extends("layout.app");
   @section("styles");
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
            font-size:23px;
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
        .content{
            display:flex;
             border:1px solid black;
        }
        .img{
            height:300px;
            width: 400px;
        
        }
    </style>
    @endsection 

  
    <section id="content" class = "mainsection">
        <div >
            <h1 class="header">Home page</h1>
            <div >
                <h1>Who we are?</h1>
                <div class="content">
                 <p class= "p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa numquam, consequuntur labore unde facere adipisci saepe et maxime voluptate eveniet quo! Sapiente dignissimos esse quis error perspiciatis voluptatem corrupti eligendi. 
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iusto maiores aliquam maxime magnam. Alias recusandae repellat aut laboriosam incidunt voluptate, labore molestias obcaecati ex, provident non, doloremque corporis officiis.  
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minus sunt, debitis nostrum obcaecati aspernatur culpa reiciendis facere magnam consequatur. Consequatur odit fuga cum suscipit omnis optio blanditiis similique minus!
                 </p>
                 <img class="img" src="https://media.istockphoto.com/id/1883285965/photo/an-unrecognizable-businesswoman-working-in-her-office-on-her-computer.webp?a=1&b=1&s=612x612&w=0&k=20&c=jx0Npn3jxtWjL7WpGzKtfL58_OxprChBqUmUSXXF-gY=" alt="">
    </div>
            </div>
        </div>
    </section>
   
