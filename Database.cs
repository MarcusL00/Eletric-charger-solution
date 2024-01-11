using System;
using System.Data.SqlClient;

class Program
{
    static void Main()
    {
        // Replace the connection string with your actual database connection string
        string connectionString = "Data Source=your_server;Initial Catalog=your_database;User ID=your_username;Password=your_password";

        // Create a SqlConnection using the connection string
        using (SqlConnection connection = new SqlConnection(connectionString))
        {
            try
            {
                // Open the database connection
                connection.Open();

                // Perform database operations here
                // For example, execute a SQL query
                string sqlQuery = "SELECT * FROM YourTable";
                using (SqlCommand command = new SqlCommand(sqlQuery, connection))
                {
                    using (SqlDataReader reader = command.ExecuteReader())
                    {
                        while (reader.Read())
                        {
                            // Access data from the reader
                            // Example: string value = reader.GetString(0);
                        }
                    }
                }
            }
            catch (Exception ex)
            {
                // Handle exceptions
                Console.WriteLine("Error: " + ex.Message);
            }
            finally
            {
                // Close the database connection
                connection.Close();
            }
        }
    }
}
