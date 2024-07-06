# Online Voting System

## Project Description

The Online Voting System is a web-based application designed to facilitate secure and efficient voting processes. Built using PHP and MySQL, this system allows eligible voters to cast their votes remotely, ensuring the integrity and confidentiality of their choices. The system includes user authentication, secure vote casting, and real-time vote counting features.

## Table of Contents

- [Project Description](#project-description)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- User registration and authentication
- Secure vote casting
- Real-time vote counting
- User-friendly interface
- Role-based access for candidates and voters

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- JavaScript
- XAMPP (for local development environment)

## Installation

To run this project locally, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/online_voting_using_php_sql.git
    ```

2. **Navigate to the project directory:**
    ```bash
    cd online_voting_using_php_sql
    ```

3. **Start XAMPP and ensure Apache and MySQL are running.**

4. **Create a database:**
    - Open `phpMyAdmin` and create a new database named `votingsystem`.
    - Import the `votingsystem.sql` file located in the `database` folder to set up the necessary tables.

5. **Configure the database connection:**
    - Open `actions/connect.php` and update the database credentials if necessary:
      ```php
      $conn = mysqli_connect('localhost', 'root', '', 'votingsystem');
      ```

6. **Move the project files to the XAMPP `htdocs` directory:**
    - Copy the entire project folder to `C:\xampp\htdocs\`.

7. **Access the project in your web browser:**
    - Open your browser and navigate to `http://localhost/online_voting_using_php_sql`.

## Usage

1. **Register as a new user:**
    - Navigate to the registration page and fill out the required details.
  
2. **Login:**
    - Use your credentials to log in as a voter or candidate.

3. **Cast your vote:**
    - Voters can view the list of candidates and cast their vote.
    - Candidates can view their vote count.

4. **Logout:**
    - Use the logout button to securely end your session.

## Contributing

Contributions are welcome! If you would like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.





