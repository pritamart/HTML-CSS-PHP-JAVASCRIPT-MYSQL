<!DOCTYPE html>
<html>
<head>
	<title>Palindrome check using JSP</title>
	<style>
	table {
		margin: auto;
		width: 900px;
		border: 4px solid skyblue;
		padding: 5px;
		background-color: lightgoldenrodyellow;
		font-weight: bold;
		border-radius: 15px;
		font-size: 40px;
	}

	body {
		background-color: lightseagreen;
	}

	h1 {
		text-align: center;
		font-family: Tahoma;
		text-decoration: underline;
		color: darkslateblue;
		font-size: 100px;
	}

	button {
		border-radius: 7px;
		background-color: lightseagreen;
		color: lightgoldenrodyellow;
		font-family: Tahoma;
		font-size: 40px;
	}

	input {
		font-weight: bold;
		size: 100 px;
		font-size: 40px;
	}
	</style>
</head>
<body>
	<h1>File Copy using JSP</h1>

	<br><br>

	<%@ page import="java.io.File"%>
	<%@ page import="java.io.FileNotFoundException"%>
	<%@ page import="java.util.Scanner"%>

	<%
		String inputfile = request.getParameter("inputfile");
		String outputfile = request.getParameter("outputfile");
		try {
			File f0 = new File(inputfile);
			Scanner dataReader = new Scanner(f0);
			String fileData = "";

			while(dataReader.hasNextLine()) {
				fileData += dataReader.nextLine();
			}

			dataReader.close();

			FileWriter f1 = new FileWriter(outputfile);
			f1.write(fileData);
			f1.close();
		}
		catch(Exception e) {
			out.println("Exception!");
		}
	%>
</body>