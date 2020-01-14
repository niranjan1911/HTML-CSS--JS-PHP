<%-- 
    Document   : welcome
    Created on : Sep 25, 2019, 11:06:46 PM
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
                 Class.forName("com.mysql.jdbc.Driver");
Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/db1","root","");
Statement st= con.createStatement();
        try{
        String userid=request.getParameter("username");
        String pwd=request.getParameter("password");
        ResultSet rs = st.executeQuery("select * from login where usename = '"+userid+"'");
        out.print(" Username:" + userid + " Password:" + pwd);
        if (rs.next())
        {
            if(rs.getString(3).toString().equals(pwd))
            {   
               
               
                %><center><%out.print("Welcome " + userid + "...");
                  
                %></center><%
            }
            else
            {
                %><center><%out.print("Invalid Password!..");%></center><%
            }
        }
        else
        {
            %><center><%out.print("No data found!..");%></center><%
        }
        //   out.print("Data inserted");
        }
        catch(Exception e)
        {
            out.println(e);
        }
    %>
</h1>
    </body>
</html>
