<%-- 
    Document   : enviarEmail
    Created on : 17-feb-2022, 20:10:41
    Author     : jose
--%>

<%@page contentType="text/html" pageEncoding="latin1"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=latin1">
        <title>Empresa2022</title>
    </head>
    <body>
        <header>
            <jsp:include page="encabezadoAdmin.jsp">
                <jsp:param name="titulo" value="Empleados"/>
            </jsp:include>
        </header>
        <br>
        <h2>Enviar e-mail a ${destinatario.nombre} ${destinatario.apellidos}</h2>
        <form action="EnviarEmail" method="post">
            <input type="hidden" name="usuario" value="${destinatario.usuario}">
            <label>Asunto</label>
            <input type="text" name="subject" required="">
            <br>
            <label>Texto del Mensaje</label>
            <textarea name="text"></textarea>
            <br>
            <label>Contraseña</label>
            <input type="password" name="password" required="">
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>
