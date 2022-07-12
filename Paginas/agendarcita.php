<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr" prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# book: http://ogp.me/ns/book# profile: http://ogp.me/ns/profile# video: http://ogp.me/ns/video# product: http://ogp.me/ns/product#">
  <head>
    <meta name="description" content="Pagina para contratar un servicio">
    <meta name="author" content="Tatiana Moreno">
    <meta name="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <meta name="keywords" content="contactos de abogados, abogados derecho bancario, abogados laborales cerca de mi"/>
    <title>Contacto Alhera & Asociados</title><!--TITULO DE LA PAGINA-->
    <link rel = "icon" href = "../iconos/contacto.png" type = "image/x-icon">
    <meta title="ALHERA & ASOCIADOS un grupo de abogados y contadores fiscalistas que buscan brindar el mejor servicio."/>
    <meta name="description" content="Grupo de abogados y contadores fiscalistas especializados del cual pretende brindar el mejor sevicio de abogados."/>
    <script language="javascript" type="text/javascript">
      function mandar (resultado){
        if (resultado){
          document.formularioNuevaCita.action="grabarNuevaCita.php";
        } else {
           document.formularioNuevaCita.action="index.php";
        }
        document.formularioNuevaCita.submit();
      }
    </script>
  </head>

  <body>
    <header>
        <div id="subheader">
      <!--<div id="Logotipo" >>
        <a href="index.html" id="H"><img src="Imagenes/Logo.jpg" alt="Logo" id="Logo1"></a>
            </div>-->
            <div id="titulo">
        <a href="../index.html"><img src="../Imagenes/logo2.png" id="Logo2"></a>
                <H3>CORPORATIVO JURIDICO, CONTABLE, FISCAL</H3>
            </div>
        </div>
        </header>
        <!--SECCION DEL NAVEGADOR CON REDIRECCIONAMIENTO A PAGINAS-->
        <nav>
            <ul>
                <li><a href="../index.html">INICIO</a></li>
                <li><a href="Derecho Laboral.html">Derecho Laboral</a></li>
                <li><a href="Derecho Penal.html">Derecho Penal</a></li>
                <li><a href="Derecho Familiar.html">Derecho Familiar</a></li>
                <li><a href="Derecho Civil.html">Derecho Civil</a></li>
                <li><a href="Derecho Mercantil.html">Derecho Mercantil</a></li>
                <li><a href="Contabilidad.html">Contabilidad</a></li>
                <li><a href="Fiscal.html">Fiscal</a></li>
            </ul>
        </nav>
    <?php
// Se incluye el miniscript de tratamiento de fechas
      include ("inc/fechas.php");
// Se muestra la fecha en curso.
      echo ("CITA PARA EL DÍA: ".$diaActual." del ".$mesActual." de ".$annioActual.salto);
	?>
    <form action="" method="post" name="formularioNuevaCita" id="formularioNuevaCita">
	  <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
      <table width="500" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="73">Hora:</td>
          <td width="427">Cita:</td>
        </tr>
        <tr>
          <td><select name="hora" id="hora">
          <?php
            for ($i=0;$i<24;$i++){
              echo ("<OPTION VALUE='");
              printf ("%02s",$i);
              echo ("'>");
              printf("%02s",$i);
              echo ("</OPTION>".salto);
            }
          ?>
          </select></td>
          <td rowspan="3"><textarea name="asunto" cols="50" rows="5" id="asunto"></textarea></td>
        </tr>
        <tr>
          <td>Minutos:</td>
        </tr>
        <tr>
          <td><select name="minutos" id="minutos">
          <?php
            for ($i=0;$i<51;$i+=10){
              echo ("<OPTION VALUE='");
              printf ("%02s",$i);
              echo ("'>");
              printf("%02s",$i);
              echo ("</OPTION>".salto);
            }
          ?>
          </select></td>
        </tr>
      </table>
      <table width="500" height="44" border="0" cellpadding="0" cellspacing="0">
        <tr align="center">
          <td width="248"><input name="grabarCita" type="button" id="grabarCita" value="Grabar la cita" onClick="javascript:mandar(true);"></td>
          <td width="252"><input name="anularCita" type="button" id="anularCita" value="Cancelar" onClick="javascript:mandar(false);"></td>
        </tr>
      </table>
  </form>
  <section id="Redes">
                    <div class="email"><a href="#"><img href="../Imagenes/email.png" height="30%" width="30%"></a></div>
                    <div class="twitter"><a href="http://www.twitter.com"><img href="../Imagenes/email.png" height="30%" width="30%"></a></div>
                    <div class="youtube"><a href="http://www.youtube.com"><img href="../Imagenes/email.png" height="30%" width="30%"></a></div>
                    <div class="facebook"><a href="http://www.facebook.com/"><img href="../Imagenes/email.png" height="30%" width="30%"></a></div>
            </section>
    </section>
    <!--PIE DE PAGINA-->
        <footer>
            <p>Realizado y dise&ntilde;ado por: <b>Tatiana Moreno</b></p>
            <p> Copyright &copy; 2020 </p>
        </footer>
        <script src="JavaScript/jquery-3.3.1.slim.min.js"></script>
        <script src="JavaScript/popper.min.js"></script>
        <script src="JavaScript/bootstrap.min.js"></script>
  </body>
</html>