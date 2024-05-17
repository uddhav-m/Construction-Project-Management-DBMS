# Construction Company Database Management System


https://github.com/uddhav-m/Construction-Project-Management-DBMS/assets/142710952/d12243af-8fd1-4ea2-86a1-b6be3c825c5b


Welcome to the Construction Company Database Management System! This project is designed to help construction companies efficiently manage their projects, materials, and employees.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
  

## Features

- **Project Management**: View, create, and manage construction projects.
- **Materials Management**: Track and organize construction materials.
- **Employee Management**: Maintain a database of employees and their details.

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## Installation

Follow these steps to get the project up and running on your local machine:

1. **Clone the Repository**
   ```sh
   git clone https://github.com/your-username/construction-company-management-system.git

2. **Navigate to the Project Directory**
   ```sh
   cd construction-company-management-system
3. **Set Up the Database**
  
  -  Create a database named construction_db.
  - Import the SQL file located in the database folder:
    ```sh
       mysql -u your-username -p construction_db < database/construction_db.sql

4.**Configure the Database Connection**

  - Update the dbconfig.php file with your database credentials:
    ```sh
    <?php
        $servername = "localhost";
        $username = "your-username";
        $password = "your-password";
        $dbname = "construction_db";
    ?>

5. **Start the Server**

 - If you're using XAMPP, move the project folder to the htdocs directory.
 - Start the Apache and MySQL services from the XAMPP control panel.
 - Access the project in your browser at http://localhost/construction-company-management-system.

## Usage
- Home Page: Provides an overview of the system.
- Projects: View and create new projects.
- Materials: Manage materials used in the projects.
- Employees: Add and view employee details.

## Contributing
  We welcome contributions to enhance the functionality and user experience of this project. Here are some ways you can contribute:

  Report bugs and suggest features via Issues.
  Fork the repository, make your changes, and submit a pull request.




   


