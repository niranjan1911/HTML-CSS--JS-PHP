<%-- 
    Document   : index
    Created on : Sep 25, 2019, 11:01:27 PM
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
            </br><h3 style="margin-left: 33vw;">Enter the details...</h3></br>
            <form action="welcome" method="post">
            <div class="form-group">
                  <input style="margin-left: 20vw" type="text" class="form-control w-50" name="username" placeholder="Username">
            </br></div>
            <div class="form-group">
                <input style="margin-left: 20vw" type="password" class="form-control w-50" name="password" placeholder="Password">
            </br></div>
            <div class="form-group">
                <button style="margin-left: 30vw" class="btn btn-success" type="Submit">Submit</button>
                <button style="margin-left: 5vw" class="btn btn-danger" type="Reset">Reset</button>
            </div>
        </form>
        </div>
    </body>
  
</html>
