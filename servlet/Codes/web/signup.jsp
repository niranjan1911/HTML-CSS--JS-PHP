<%-- 
    Document   : signup
    Created on : Oct 3, 2019, 7:06:22 PM
    Author     : Admin
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <body>
        <div class="container">
            </br><h3 style="margin-left: 23vw;">Register here...</h3></br>
        <form action="new.jsp">
            <div class="form-group">
                &nbsp;&nbsp;<h4>Name:</h4><input style="margin-left: 10vw" type="text" class="form-control w-50" name="name" placeholder="Name">
            </br></div>
            <div class="form-group">
            <div class="form-group">
                  <h4>Username:</h4><input style="margin-left: 10vw" type="text" class="form-control w-50" name="username" placeholder="Username">
            </br></div>
            <div class="form-group">
                <h4>password:</h4><input style="margin-left: 10vw" type="password" class="form-control w-50" name="password" placeholder="Password">
            </br></div>
            <div class="form-group">
                <button style="margin-left: 20vw" class="btn btn-success" type="submit">Submit</button>
                <button style="margin-left: 5vw" class="btn btn-danger" type="Reset">Reset</button>
            </div>
        </form>
        </div>
    </body>
  
</html>
