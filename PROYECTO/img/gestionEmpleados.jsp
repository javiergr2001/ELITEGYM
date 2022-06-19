<%-- 
    Document   : gestionEmpleados
    Created on : 02-feb-2022, 14:27:26
    Author     : jose
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Empresa2022</title>
        <script>
            function mostrarMensaje() {
                alert("${param.mensaje}");
            }
        </script>
    </head>
    <body onload="${empty param.mensaje?"":"mostrarMensaje()"}">
        <header>
            <jsp:include page="encabezadoAdmin.jsp">
                <jsp:param name="titulo" value="Gestión de Empleados"/>
            </jsp:include>
        </header>
        <br>
        <h2>Gestión de Empleados</h2>
        <br>
        <a href="altaEmpleado.jsp">Dar de Alta Empleado</a>
        <br>
        <a href="MostrarEmpleados">Modificar / Eliminar Empleado</a>
        <br>
        <a href="SeleccionarDestinatario">Enviar e-mail a Empleado</a>
    </body>
</html>
