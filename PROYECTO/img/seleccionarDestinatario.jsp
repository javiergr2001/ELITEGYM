<%-- 
    Document   : mostrarEmpleados
    Created on : 04-feb-2022, 14:24:28
    Author     : javie
--%>

<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Empresa2022</title>
    </head>
    <body>
        <header>
            <jsp:include page="encabezadoAdmin.jsp">
                <jsp:param name="titulo" value="Empleados"/>
            </jsp:include>
        </header>
        <table>
            <tr><th>Nombre</th><th>Apellidos</th><th>Usuario</th><th>Salario</th><th>e-mail</th><th>Administrador</th></tr>
            <c:forEach items="${empleados}" var="emp">
                <tr>
                    <td><c:out value="${emp.nombre}"/></td>
                    <td><c:out value="${emp.apellidos}"/></td>
                    <td><c:out value="${emp.usuario}"/></td>
                    <td><c:out value="${emp.salario}"/></td>
                    <td><c:out value="${emp.email}"/></td>
                    <td><c:out value="${emp.administrador?'Sí':''}"/></td>
                    <td>
                        <a href="EnviarEmail?usuario=${emp.usuario}">Enviar e-mail</a>
                    </td>
                </tr>
            </c:forEach>
        </table>
    </body>
</html>
