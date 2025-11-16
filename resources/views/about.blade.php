@extends("layout.app")
@section("styles")
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
<section class="mainsection">
   
</section>