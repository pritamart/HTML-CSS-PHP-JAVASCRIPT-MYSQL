<html>

	<body>
	<%
		int num=Integer.parseInt(request.getParameter("n1"));
	 	long fact=1;
		for(int i=1;i<=num;i++)
		{
	
			fact=fact*i;
			
	
		}
	%>
	
	<b> The factorial is: </b> <%=fact%>


	</body>
</html>
