import java.sql.*; 
class CreateTable 
{ 
public static void main(String args[]) throws SQLException 
	{
		final String driver = "oracle.jdbc.driver.OracleDriver"; 
		final String url = "jdbc:oracle:thin:@localhost:1521:xe"; 
		final String USERNAME = "SYSTEM"; 
		final String PASSWORD = "TECHNAMRIT"; 
		try
		{ 
		Class.forName(driver); 
		Connection conn = DriverManager.getConnection(url, USERNAME, PASSWORD); 
		String sql = "CREATE TABLE PRODUCTS (id NUMBER(11), NAME VARCHAR2(64))"; 
		Statement statement = conn.createStatement(); 
		statement.execute(sql); 
		System.out.println("Table Created Successfully !");
		conn.close(); 
		} 
		catch(ClassNotFoundException e)
		{ 
		System.out.println("Requested Class Not Found");
		}
	} 
}