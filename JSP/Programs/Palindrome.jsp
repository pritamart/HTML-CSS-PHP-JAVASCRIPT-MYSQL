<!DOCTYPE html>
<html>
<head>
	<title>Palindrome check using JSP</title>
</head>
<body bgcolor="lightgreen">
	<%
		String str = request.getParameter("inputtext"), pal;
		int flag = 0, len = str.length();

		for (int i=0; i <= len/2; i++) {
			if (str.charAt(i)!=str.charAt(len-i-1)) {
				flag = 1;
				break;
			}
		}

		if (flag == 1)
			pal = "Not a palindrome";
		else
			pal = "Palindrome";
	%>

	<h1 align="center">Palindrome check:<br><%=pal%></h1>

</body>
</html>