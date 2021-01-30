<!DOCTYPE html>

  <html lang="pt-br" dir="ltr">
    <head>
      <title>Início | Portfólio Renata Marques</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Renata de Castro M. - EQUIPE SOL">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta charset="utf-8">

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/style-index.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="icon" href="img/person.png" type="image/png" />
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
   
      
      <style>

      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      } 

      a{
      text-decoration: none;
    }
      body{
          background: #303030;
      }

      label {
          display: inline-block;
          max-width: 100%;
          margin-bottom: 0px;
          margin-top: 25px;
          font-weight: 700;
      }

      nav{
          display: flex;
          height: 80px;
          width: 100%;
          background: #2D2D2D;
          align-items: center;
          justify-content: space-between;
          padding: 0 50px 0 20px;
          font-weight: 700;
          font-family: 'Roboto Condensed', sans-serif;
          flex-wrap: wrap;
      }

      nav .logo{
          color: #fff;
          font-size: 20px;
          font-weight: 600;
          text-decoration: none;
      }

      nav .logo a:hover{
          color: #ddd;
          text-decoration: none;
          font-size: 20px;
          transition: all 0.3s ease;
          font-weight: 600;
      }

      nav .logo a{
        color: white;
      }

      nav .logo img{
          width: 40%;
          padding-top: 10px;
      }

      nav ul{
          display: flex;
          flex-wrap: wrap;
          z-index: 1;
          list-style: none;
      }

      nav ul li{
          margin: 0 5px;
      }
            
      nav ul li a{
          color: #F5D83D;
          text-decoration: none;
          font-size: 18px;
          font-weight: 500;
          padding: 8px 15px;
          border-radius: 5px;
          letter-spacing: 1px;
          transition: all 0.3s ease;
          padding-right: 35px;
          padding-left: 35px;
          font-size: 14px;
          font-weight: 700;
          align-content: center;
          text-align: center;
      }
            
      nav ul li a.active,
      nav ul li a:hover{
          color: #fff;
          text-decoration: none;
          background-color: transparent;
          /* background: #fff; */
      }

      nav .menu-btn i{
          color: #fff;
          font-size: 30px;
          cursor: pointer;
          display: none;
      }
      input[type="checkbox"]{
          display: none;
      }

      @media (max-width: 1000px){
        nav{
          padding: 0 40px 0 50px;
        }
      }

      /* !!! */
      @media (max-width: 350px) {
        nav .logo{
          width: 180px;
          padding-bottom: 10px;
        }

        nav {
          padding: 0 20px 0 20px;
        }

        .banner {
          width: 100%;
          height: 430px;
          padding-left: 23px;
          /* display: table-row-group; */
          padding-top: 37px;
        }

        .banner .titulo {
          font-size: 33px;
          line-height: 45px;
        }
      }

      @media (max-width: 920px) {
        nav .menu-btn i{
            display: block;
        }

        .menu-distant{
            padding-right: 0 !important;
            padding: 0;
        }

        #click:checked ~ .menu-btn i:before{
          content: "\f00d";
        }

        nav ul{
          position: fixed;
          top: 80px;
          left: -100%;
          background: #2D2D2D;
          height: 100vh;
          width: 100%;
          text-align: center;
          display: block;
          transition: all 0.3s ease;
        }

        #click:checked ~ ul{
          left: 0;
        }

        nav ul li{
          width: 100%;
          margin: 7px 0;
        }

        nav ul li a{
          width: 100%;
          margin-left: -100%;
          display: block;
          font-size: 20px;
          transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        #click:checked ~ ul li a{
          margin-left: 0px;
        }

        nav ul li a.active,
        nav ul li a:hover{
          background: none;
          color: #fff;
        }
      }

    .no-show-desktop{
      display: none;
    }

    .no-show-mobile{
      display: none;
    }

    ::-webkit-scrollbar{
      width: 10px;
    }

    ::-webkit-scrollbar-track{
      border: 7px solid rgb(19, 19, 19);
      box-shadow: inset 0 0 2.5px 2px rgb(0,0,0,0.5);
    }

    ::-webkit-scrollbar-thumb{
      background: linear-gradient(
      45deg,
      #FFEF5A,
      #FFEF5A
      );
      border-radius: 3px;
    }

    .hero-image {
      background-color: #303030;
      height: 460px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      margin: 0;
    }

    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .bem-vindo{
      text-align: left;
      padding-top: 3%;
      padding-bottom: 2%;
      color: white;
      padding-right: 11%;
      line-height: 55px;
      font-size:36px;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      letter-spacing: 1px;
    }

    .banner{
      text-align: right;
      padding-top: 8%;
      color: white;
      line-height: 60px;
      font-size:35px;
      font-family: 'Poppins', sans-serif;
      letter-spacing: 1px;
    }

    .button {
      border: none;
      color: #ddd;
      padding: 1px 40px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 10px;
      margin: 4px 2px;
      cursor: pointer;
      font-family: 'Josefin Sans', sans-serif;
    }

    .button1 {
      background-color: transparent; 
      font-weight: 800;
      color: #FFEF5A; 
      border: 2px solid #FFEF5A;
      font-family: 'Josefin Sans', sans-serif;
      transition: 0.3s;
    }

    .button1:hover {
      background-color: #FFEF5A; 
      font-weight: 600;
      color: #000; 
      border: 2px solid #FFEF5A;
      font-family: 'Josefin Sans', sans-serif;
      transition: 0.5s;
    }


    .button-vermais {
      border: none;
      padding: 30px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 10px;
      margin: 4px 2px;
      cursor: pointer;
      font-family: 'Josefin Sans', sans-serif;
    }

    .button1-vermais {
      background-color: transparent; 
      font-weight: 800;
      color: #24AE91; 
      border: 2px solid #24AE91;
      font-family: 'Josefin Sans', sans-serif;
      transition: 0.3s;
    }

    .button1-vermais:hover {
      background-color: #0000; 
      font-weight: 600;
      color: #fff; 
      border: 2px solid #fff;
      font-family: 'Josefin Sans', sans-serif;
      transition: 0.5s;
    }

    .img-banner img{
        width: 78%;
        padding-top: 80px;
        padding-left: 198px;
    }

    @media screen and (min-width: 1400px){
      nav ul li {
        margin: 0 16px;
      }

      .img-banner img{
        width: 90%;
        padding-top: 0;
        padding-left: 150px;
      }

      .bem-vindo{
        text-align: right;
        padding-top: 8%;
        color: white;
        padding-right: 11%;
        line-height: 60px;
        font-size:40px;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 1px;
      }

      .button {
        border: none;
        color: #ddd;
        padding: 4px 60px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 11px;
        margin: 4px 2px;
        cursor: pointer;
        font-family: 'Josefin Sans', sans-serif;
      }

      .button1 {
        background-color: transparent; 
        font-weight: 800;
        color: #000; 
        border: 2px solid #000;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.3s;
      }

      .button1-projeto {
        background-color: transparent; 
        font-weight: 800;
        color: #000; 
        border: 2px solid #000;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.3s;
      }

      .button1-projeto:hover {
        background-color: #0B342C; 
        font-weight: 600;
        color: #fff; 
        border: 2px solid #000;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.5s;
      }

      .footer{
        background-color: #1D1D1D;
        width: 100%;
        height: 220px !important;
      }

      .footer .rede-social{
        background-color: #1D1D1D;
        align-content: center;
        color: #5a5a5a;
        align-items: center;
        -moz-box-align: center;
        padding-left: 110px;
        line-height: 32px;
        padding-top: 25px;
      }

      .footer .rede-social a{
          color: #2d2d2d;
          text-decoration: none;
          font-size: 18px;
          font-weight: 500;
      }
      
       /* .rede-social a{
        text-decoration: none;
        align-content: center;
        color: #5a5a5a !important;
      } */

      .footer .logo-footer{
        background-color: #1D1D1D;
        align-content: center;
        align-items: center;
        -moz-box-align: center;
        padding-left: 120px;
      }


      .footer .logo-footer img{
        width: 65%;
      }

      .rede-social img{
        width: 70% !important;
        padding-top: 10px;
      }

      .ver-mais{
        padding-left: 45%;
      }

      .button-vermais {
        border: none;
        padding: 30px 100px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 11px;
        margin: 4px 2px;
        cursor: pointer;
        font-family: 'Josefin Sans', sans-serif;
      }

      .button1-vermais {
        background-color: transparent; 
        font-weight: 800;
        color: #24AE91; 
        border: 2px solid #24AE91;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.3s;
      }

        nav ul li a {
          
          font-size: 18px;
          
        }
        nav {
          display: flex;
          height: 100px;
        }

        nav .logo img {
          width: 45%;
          padding-top: 5px;
        }

        .banner .titulo {
            color: black;
            text-align: left;
            font-weight: 700;
            max-width: 510px;
            font-size: 58px;
            text-transform: uppercase;
        }
        .banner .autor {
            font-size: 17px;
            margin: 0;
            text-transform: uppercase;
            padding: 0;
        }

        .button-projeto {
            
            padding: 4px 65px;
            
        }
    }

    .banner{
    color: black;
      text-align: left;
      padding-left: 80px;
      font-size: 50px;
      height: 450px;
      padding-top: 80px;
      width: 50%;
      font-family: 'Josefin Sans', sans-serif;
      margin: 0;
    }

    .banner .titulo{
      color: black;
      text-align: left;
      font-weight: 700;
      max-width: 510px;
      font-size: 50px;
      text-transform: uppercase;
    }

    .banner .autor{
      font-size: 15px;
      margin: 0;
      text-transform: uppercase;
      padding: 0;
    }

    .row{
      width: 100%;
    }

    .row-2{
      width: 100%;
      display: -webkit-inline-box;
      padding: 0;
    }

    .ver-mais{
      height: 100px;
      background-color: #303030;
      width: 100%;
      align-content: center;
      align-items: center;
      -moz-box-align: center;
      padding-left: 42%;
      padding-top: 5px;
    }

    .footer{
      background-color: #141414;
      width: 100%;
      align-content: center;
      align-items: center;
      -moz-box-align: center;
      height: 200px;
    }

    .footer .rede-social{
      background-color: #141414;
      align-content: center;
      align-items: center;
      -moz-box-align: center;
      padding-left: 110px;
          font-family: 'Roboto', sans-serif;
      color: #5a5a5a;
      padding-top: 30px;
    }

    .footer .logo-footer{
      background-color: #141414;
      align-content: center;
      align-items: center;
      -moz-box-align: center;
      padding-left: 120px;
    }

    .footer .logo-footer img{
      width: 65%;
    }

    .rede-social img{
      width: 70%;
    }

    .avaliacao-star{
      width: 4%;
    }

    @media screen and (max-width: 700px){

      .avaliacao-star{
          width: 5% !important;
        }

        nav .logo img{
          width: 30%;
          padding-top: 0px;
        }

      .hero-image{
        height: 640px;
      }

      .no-show-desktop{
        display: block;
      }

      .banner .autor{
        line-height: 30px;
        padding: 21px 0;
      }

      .bem-vindo{
        font-size: 20px;
        line-height: 37px;
        text-align: center !important;
        padding-right: 0;
        padding-left: 0;
      }

      .button{
        padding: 16px 58px;
      }

      .banner{
        width: 100%;
        height: 430px;
        padding-left: 43px;
        /* display: table-row-group; */
        padding-top: 60px;
      }

      .banner .titulo{
        font-size: 35px;
        line-height: 45px;
      }

      .row-2{
        display: block;
      }

      .button-projeto {
        border: none;
        color: #ddd;
        padding: 1px 65px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 2px;
        cursor: pointer;
        font-family: 'Josefin Sans', sans-serif;
      }

      .button1-projeto {
        background-color: transparent; 
        font-weight: 800;
        color: #000; 
        border: 2px solid #000;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.3s;
      }

      .button1-projeto:hover {
        background-color: #0B342C; 
        font-weight: 600;
        color: #fff; 
        border: 2px solid #000;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.5s;
      }

      .button-vermais {
        border: none;
        padding: 30px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 2px;
        cursor: pointer;
        font-family: 'Josefin Sans', sans-serif;
      }

      .button1-vermais {
        background-color: transparent; 
        font-weight: 800;
        color: #24AE91; 
        border: 2px solid #24AE91;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.3s;
      }

      .button1-vermais:hover {
        background-color: #0000; 
        font-weight: 600;
        color: #fff; 
        border: 2px solid #fff;
        font-family: 'Josefin Sans', sans-serif;
        transition: 0.5s;
      }

      .ver-mais{
        padding: 0;
        text-align: center;
        align-content: center;
        align-items: center;
      }

      .img-banner img{
        width: 100%;
        padding-top: 0;
        /* padding-left: 50px; */
        padding-left: 0;
      }

      .footer .rede-social{
        text-align: center;
        align-content: center;
        align-items: center;
        padding: 20px;
      }

      .rede-social img{
        width: 10%;
      }

      .footer .logo-footer{
        padding: 10px;
        text-align: center;
        padding-top: 40px;
      }

      .footer .logo-footer img{
        width: 30%;
      }

      .no-show-mobile{
        display: none;
      }

      .hero-image .row{
        padding-right: 0;
        padding-left: 0;
        margin: 0;
      }
    }  

    ::-webkit-scrollbar{
      width: 10px;
    }

    ::-webkit-scrollbar-track{
      border: 7px solid rgb(19, 19, 19);
      box-shadow: inset 0 0 2.5px 2px rgb(0,0,0,0.5);
    }

    ::-webkit-scrollbar-thumb{
      background: linear-gradient(
      45deg,
      #FFEF5A,
      #FFEF5A
      );
      border-radius: 3px;
    }

    .hero-image strong{
      font-weight: 600;
    }

   

    .descricao{
        font-size: 12px;
        color: #BCBCBC;
        padding-top: 10px;
        line-height: 20px;
    }

    .menu-distant{
        padding-right: 110px;
    }

        .column {
          float: left;
        width: 440px;
        margin-top: 5%;
        padding: 20px 40px 20px 40px;
        margin-bottom: 5%;
        font-family: 'Roboto', sans-serif;
        height: 400px;
        }

        /* Clear floats after the columns */
        .row-column:after {
        content: "";
        display: table;
        clear: both;
        }

        .go-down{
        /* padding-right: 10px; */
        background-color: #303030;
        padding: 0;
        /* padding-bottom: 10px; */
        margin: 0;
        text-align: center;
    }
   
   .row-column a:hover{
color: white;
   }

   .footer-title{
    color: white;
    font-weight: 700;
   }

   .row-column:after {
        content: "";
        display: table;
        clear: both;
        }

        .row-column{
          width: 100% !important;
          margin: 0 !important;
        }

        
   .card {
      background-color: #131212;
      color: #BCBCBC;
      transition: 0.3s;
      width: 100%;
      height: 100%;
  }

    .card:hover {
      background-color: #FFEF5A;
      color: #131212;
      transition: all 0.9s ease;
      box-shadow: 20px 50px 20px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 2px 16px;
      width: 100%;
    }

    .container h4{
      padding: 30px 0 10px 17px;
      font-size: 28px;
      width: 90%;
      line-height: 34px;
    }

    .container p{
      padding: 5px 0 10px 17px;
      font-size: 14px;
      line-height: 22px;
      width: 95%;
    }

  </style>
    </head>
      <body>
        <nav>
          <div class="logo">
            <a href="index.php">
                RENATA MARQUES
                <!-- <img src="img/logo-black.png" alt="RENATA DE CASTRO MARQUES"/> -->
            </a>
          </div>
        <input type="checkbox" id="click">
          <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
          </label>

          <ul>
            <li><a class="active" href="index.php">INÍCIO</a></li>
            <li><a href="projetos.php">PROJETOS</a></li>
            <li><a href="codigos.php">CÓDIGOS</a></li>
            <li class="menu-distant"><a href="codigos.php">SOBRE MIM</a></li>
            <li><a href=meu-perfil.php>CONTATO</a></li>
        
          </ul>

        </nav>


        <div class="hero-image" id="hero-image">
          <div class="row">

            <div class="col-sm-6 img-banner">
              <img src="img/person.png" alt="personagem" />
              <!-- <img src="img/img-banner.png" alt="personagem"/> -->
            </div>

           
            <div class="col-sm-6 bem-vindo">
                <hr style="border-top: 5px solid white; width: 60%;" />
                PORTFÓLIO | RENATA DE CASTRO MARQUES
              <br /> 

              <div class="descricao">Programadora e designer, me formei no<br />
                Instituto Federal de São Paulo e pretendo<br />
                atuar na área de TI.
              </div>
               <br />

              <a href="sobre.php">
                <button class="button button1">VER MAIS</button>
              </a>
            </div>

          </div>

          
          <div class="go-down">
            <a href="#texto">
              <img src="img/down.png">
            </a>
          </div>

        </div>

        <!-- <div class="row-column" id="texto">
            <a href="">
                <div class="column" style="background-color:#FFEF5A; margin-left: 80px; margin-right: 40px;">
                <h2 style="color: black; font-weight: 600; font-size: 28px;">VEJA ALGUNS<br />DOS MEUS <br />PROJETOS</h2>
                <p style="color: rgb(61, 61, 61);">atualizado 14/01/2020</p>
                </div>
            </a>
            <a href="https://github.com/recmarques">
                <div class="column" style="background-color:#525252; margin-left: 60px; margin-right: 60px;">
                    <h2 style="color: #BCBCBC; font-weight: 600; font-size: 28px;">CÓDIGOS <br />(GITHUB)</h2>
                    <p style="color: gray;">atualizado 14/01/2020</p>
                </div>
            </a>
            <a href="">
                <div class="column" style="background-color:#525252; margin-left: 40px; margin-right: 80px;">
                    <h2 style="color: #BCBCBC; font-weight: 600; font-size: 28px;">MINHAS REDES<br />SOCIAIS</h2>
                    <p style="color: gray;">atualizado 14/01/2020</p>
                </div>
            </a>
          </div> -->



  

  <div class="row-column" id="texto">
    <a href="projetos.php">
      <div class="column">
            
        <div class="card">
          <!-- <img src="img/person.png" alt="Avatar" style="width:100%"> -->
          <div class="container">
            <!-- <img src="img/person.png" width="40%"/> -->
            <h4><b>MEUS<br />PROJETOS</b></h4>
            <!-- <p>Um projeto voltado à disponibilidade de material didático para alunos do IFSP!</p> -->
          </div>
        </div>
        
    </div>
    </a>

    <a href="codigos.php">
      <div class="column">
            
        <div class="card">
          <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
          <div class="container">
            <h4><b>CÓDIGOS DE SITES (GITHUB)</b></h4>
            
            <!-- <p>Um projeto voltado à disponibilidade de material didático para alunos do IFSP!</p> -->
          </div>
        </div>
        
    </div>
    </a>

    <a href="sobre.php">
      <div class="column">
            
        <div class="card">
          <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
          <div class="container">
            <h4><b>MEU CURRÍCULO GERAL</b></h4>
          
            <!-- <p>Um projeto voltado à disponibilidade de material didático para alunos do IFSP!</p> -->
          </div>
        </div>
        
    </div>
    </a>
  </div>

  <div class="footer">
     
        <div class="col-sm-3 rede-social" style="text-align: center;">
          <a href="https://www.facebook.com/" target="_blank">
            <img src="img/user.png" alt="user"/>
            </a>
        </div>

        <div class="col-sm-2 rede-social">
         <h5 class="footer-title">EXPLORE</h5><br />
         <a href="index.php">Início</a>
          <br />
          <a href="projetos.php">Projetos</a>
          <br />
          <a href="index.php">Códigos</a>
          <br />
          <a href="index.php">Contato</a>
        </div>

        <div class="col-sm-4 rede-social">
          <h5 class="footer-title">CONTATO</h5><br />
          Mande um e-mail para <a href="mailto:renatacmarques29@gmail.com">renatacmarques29@gmail.com</a>.

          Responderei assim que possível!
        </div>


        <div class="col-sm-3 logo-footer" >
          <a href="sobre.php">
          <!-- <img src="img/jaci.png" alt="jaci logo"/> -->
          </a>
        </div>

  </div>
 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
  </html>