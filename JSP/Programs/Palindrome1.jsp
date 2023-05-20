<!DOCTYPE html>
<html>
<head>
	<title>Palindrome check using JSP</title>
</head>
<body bgcolor="lightgreen">
	<%!
		public String checkPalindrome(String str) {
			String pal;
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

			return pal;
		}
	%>

	<h1 align="center">Palindrome check:<br><%=checkPalindrome(request.getParameter("inputtext"))%></h1>

</body>
</html>