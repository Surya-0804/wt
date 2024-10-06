<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.io.*, javax.servlet.*, javax.servlet.http.*"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Authentication Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-top: 0;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <%
            String username = request.getParameter("username");
            String password = request.getParameter("password");

            // Dummy credentials for demonstration
            String validUsername = "admin";
            String validPassword = "123";

            if (username != null && password != null) {
                if (username.equals(validUsername) && password.equals(validPassword)) {
                    out.println("<h2>Login successful!</h2>");
                    out.println("<a href='login.jsp'>Back to Login</a>");
                } else {
                    out.println("<h2>Invalid username or password. Please try again.</h2>");
                    out.println("<a href='login.jsp'>Back to Login</a>");
                }
            } else {
                out.println("<h2>Please enter both username and password.</h2>");
                out.println("<a href='login.jsp'>Back to Login</a>");
            }
        %>
    </div>
</body>
</html>
