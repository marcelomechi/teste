<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">



	
/* O menu da barra lateral */
.sidebar {
  height: 100%; /* 100% altura */
  width: 50px !important; /* 0 largura - altere isso com JavaScript */
  position: fixed; /* Fique no lugar */
  z-index: 1; /* Fique no topo */
  top: 0;
  left: 0;
  /*background-color: #111; /* Black*/
  overflow-x: hidden; /* Desativar rolagem horizontal */
  padding-top: 60px; /* Coloque o conteúdo de 60px a partir do topo */
  transition: 0.5s; /* Efeito de transição de 0,5 segundo para deslizar na barra lateral */
}


#mySidebar{
  width: 50px;
}

/* Os links da barra lateral 
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}*/

/* Quando você passa o mouse sobre os links de navegação, muda sua cor */
.sidebar a:hover {
 /* color: #f1f1f1;*/
}

/* Aprenda a pronunciar
Posicione e estilize o botão Fechar (canto superior direito) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* O botão usado para abrir a barra lateral */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  /*background-color: #444;*/
}

/* Conteúdo da página de estilo - use isso se você quiser enviar o conteúdo da página para a direita quando abrir a navegação lateral */
#main {
  transition: margin-left .5s; /* Se você quiser um efeito de transição */
  padding: 20px;
  margin-left: 50px;
}

/* Em telas menores, nas quais a altura é menor que 450 px, altere o estilo do sidenav (menos preenchimento e um tamanho de fonte menor) 
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
*/

  header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }

</style>

     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>
 <div class="row">
    <div class="container">    
        <ul id="sidebar" class="sidenav">
            <li><div class="user-view">
              <div class="background">
                <img src="images/computador.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/marcelo.jpg"></a>
              <a href="#!name"><span class="white-text name">Marcelo Mechi</span></a>
              <a href="#!email"><span class="white-text email">marcelo.goncalves@brbpo.com.br</span></a>
            </div></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header">Point<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#!">Apontamentos</a></li>
                        <li><a href="#!">Gerencial</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header">Quadro<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#!">Gerenciar</a></li>
                        <li><a href="#!">Dados Funcionários</a></li>
                        <li><a href="#!">Parametrizar</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header">Demandas<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#!">Atendimento</a></li>
                        <li><a href="#!">Nova Demanda</a></li>
                        <li><a href="#!">Minhas Demandas</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header">Planejamento<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#!">Faturamento</a></li>
                        <li><a href="#!">Dimensionamento</a></li>
                        <li><a href="#!">Escala de Pausa</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </li>
            <div class="divider"></div>
            <li><a class="waves-effect" href="#!"><i class="material-icons">show_chart</i>Secao</a></li>
        </ul>
          
    </div>
</div>

<div id="main" class="">
     <a href="#" onclick="openNav()" data-target="sidebar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <!--<a href="#" onclick="openNav()"  data-activates="mySidebar"  class="button-collapse visible-only-small-screen"><i class="material-icons">menu</i></a>-->
    <!-- caso eu queira que abra em um clique <button class="openbtn" onclick="openNav()">&#9776;BARRA FILHA DA PUTAAAAAA</button> -->
</div>

<script src="js/jquery-3.4.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="js/materialize.min.js"></script>
</body>
</html>

<script>
/* Definir a largura da barra lateral para 250px e a margem esquerda do conteúdo da página para 250px */

$(document).ready(function(){

 $('.collapsible').collapsible();

  /* inicia a sidenav */
   $(".sidenav").sidenav({

   });

})

function openNav() {
  //document.getElementById("mySidebar").style.width = "250px";
  //document.getElementById("mySidebar").style.transition = "1s";
  document.getElementById("main").style.marginLeft = "650px";
  document.getElementById("main").style.transition = "1s";
  collapseAll2()
}

/* Defina a largura da barra lateral como 0 e a margem esquerda do conteúdo da página como 0 */
function closeNav() {
 // document.getElementById("mySidebar").style.width = "50px";
  //document.getElementById("mySidebar").style.transition = "1s";
  document.getElementById("main").style.marginLeft = "50px";
  document.getElementById("main").style.transition = "1s";
  collapseAll()
}

function expandAll(){
  $(".collapsible-header").addClass("active");
  $(".collapsible").collapsible({accordion: false});
}

function collapseAll(){
  $(".collapsible-header").removeClass(function(){
    return "active";
  });
  $(".collapsible").collapsible({accordion: true});
  $(".collapsible").collapsible({accordion: false});
}

  $( "#sidebar" ).hover(
    function() {
       openNav()     
    }, function() {
      closeNav() 
    }
);

  function collapseAll2() { 
  $(".collapsible-header").removeClass(function() { 
    return "active"; 
    }); 
    $("#expand").fadeIn(); 
    $("#collapse").fadeOut(); 
    var instance = M.Collapsible.getInstance($('.collapsible')); 
    instance.close()
  }


  /*
  $( "#slide-out" ).hover(
    function() {
      //$('.button-collapse').sideNav('show');        
    }, function() {
    collapseAll()
    }
);
*/


	</script>