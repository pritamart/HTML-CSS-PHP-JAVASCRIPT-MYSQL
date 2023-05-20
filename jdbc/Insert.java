import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
public class Insert 
{
public static void main(String[] args) throws SQLException 
		{
		final String driver = "oracle.jdbc.driver.OracleDriver"; 
		final String url = "jdbc:oracle:thin:@localhost:1521:xe"; 
		final String USERNAME = "SYSTEM"; 
		final String PASSWORD = "TECH"; 
		String sql="insert into products values(103,'MONITOR')";
		String commit="Commit";
        Connection conn=null;
		try 
			{
            Class.forName(driver).newInstance();
            conn = DriverManager.getConnection(url,USERNAME,PASSWORD);
			Statement st= conn.createStatement();
            st.executeUpdate(sql);
			System.out.println("Data Inserted successfully !");
			st.executeUpdate(commit);
            System.out.println("Commit Successful!");
			conn.close();
 			} 
		catch (ClassNotFoundException e) 
			{
            System.out.println("Requested Class Not Found !");
			e.printStackTrace();
			}
		catch (SQLException e) 
			{
            System.out.println("SQL Exception Occurred");
			e.printStackTrace();
			}
		catch (Exception e) 
			{
            System.out.println("Exception Occurred");
			e.printStackTrace();
			}
    	}
 
}