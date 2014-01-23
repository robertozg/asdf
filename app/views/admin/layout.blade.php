<!DOCTYPE HTML>
<html lang="es">
<img src="css/hombre-bienvenido.png" style="float:right"/>
@if(Auth::check())
@endif

{{ HTML::style('css/style.css') }}

<body class="fondo">

<h3>Administrador</h3> 

	<table align="center" class="links">
	<tr> 
	<td>{{  HTML::link('usuarios','Usuarios')  }} </td> 
	<td>{{  HTML::link('recursos','Recursos')  }} </td> 
	<td>{{  HTML::link('reservas','Reservas')  }} </td>  
	<td>{{  HTML::link('logout','Logout')  	   }} </td> 
	</tr> 
	</table>

@yield('content')
</body>
</html>