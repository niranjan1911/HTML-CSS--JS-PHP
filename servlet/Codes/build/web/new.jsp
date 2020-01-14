<%-- 
    Document   : new
    Created on : Oct 3, 2019, 7:19:32 PM
    Author     : Admin
--%>

<%@page import = "java.sql.*;"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <body>
        <h1>
             <%
                 
        try{
        String uname=request.getParameter("name");
        String userid=request.getParameter("username");
        String pwd=request.getParameter("password");
        
        Class.forName("com.mysql.jdbc.Driver");
                 Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/db1","root","");
                 Statement st= con.createStatement();
        
        int i = st.executeUpdate("insert into login values ('"+uname+"','"+userid+"','"+pwd+"')");
        
        %><center><%out.print("Successfully registred..");%></center><%
        //   out.print("Data inserted");
        }
        catch(Exception e)
        {
            out.println(e);
        }
    %>
        <center><a href="index.jsp"><button class="btn btn-success">Login</button></a></center>
</h1>
    </body>
</html>
