<html>
<body>
<form method="post">
<table cellspacing="5px">
<tr>
<td>Enter the name</td>
<td>:<input type="text" name="name1" id="name1"> </td>
</tr>
<tr>
<td>Enter the email address</td>
<td>:<input type="text" name="email1" id="email1"></td>
</tr>
<tr>
<td colspan="2"><input type="submit"></td>
</tr>
</table>
</form>
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%! Connection connection = null;
	Statement stmt = null;
%>
<% if(request.getParameter("name1")!=null && request.getParameter("email1")!=null){
		Class.forName("com.mysql.jdbc.Driver");
		connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root", "");
		stmt = connection.createStatement();
		String cmd = "INSERT INTO `user` (`Name`, `Email`) VALUES ('"+request.getParameter("name1")+"', '"+request.getParameter("email1")+"');";
		stmt.executeUpdate(cmd);
		out.println("Query executed successfully");
  }
%>
</body>
</html>