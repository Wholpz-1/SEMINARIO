<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cita</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }



    table{
        font-size: x-small;
    }

   
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray;
    }
    .information {
            background-color: #f39c12;
            color: #000;
            margin: 0px;
        }

        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
</style>

</head>
<body>


  <table width="100%">
    <tr>
        <td valign="top"><img data-imagetype="External" src="./img/captura.png" 
            width="204px" height="150px" style="border-top-width:0; border-right-width:0; border-bottom-width:0; border-left-width:0"></td>
        <td align="right">
            <h1>Renap</h1>
            
        </td>
    </tr>

  </table>

  <table width="100%" border="1">
      <thead>
          <tr style="background-color:#f39c12 ">
              <th colspan="2">Nombre</th>
              <th>Dpi</th>
              <th>No. Cita</th>
          </tr>
     </thead>
     <tbody>
          <tr>
              <td colspan="2">{{$cita->user->name}}</td>
              <td>{{$cita->user->dpi}}</td>
              <td>{{$cita->id}}</td>
          </tr>

          <tr style="background-color:#f39c12 ">
              <th colspan="3">Sucursal</th>
              <th>Fecha Solicitud</th>
              
          </tr>

          <tr>
              <td colspan="3">{{$cita->sucursal->sucursal}}</td>
              <td>{{$fecha}}</td>
              
          </tr>

      </tbody>  

  </table>

<br>
 

 

  <table border="1" width="100%">
    <thead style="background-color: #f39c12;">
      <tr>
        
        <th width="30%" >Servicio</th>
        <th>Ventanilla</th>
        <th>Fecha Atencion</th>
        <th>Hora</th>
        
      </tr>
    </thead>
    <tbody >
        
        



      <tr>
        <td >{{$cita->servicio->nombre}}</td>
        <td >{{$cita->ventanilla->ventanilla}}</td>
        <td>{{$cita->fecha}}</td>
        <td>{{$cita->horaventanilla->hora}}</td>  
      </tr>


    
 
    </tbody>

  </table>




  <div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} -Todos lo derechos reservados.
            </td>
            <td align="right" style="width: 50%;">
                RENAP
            </td>
        </tr>

    </table>
</div>

</body>
</html>