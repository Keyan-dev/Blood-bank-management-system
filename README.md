# Blood Bank Management System

## Overview
This project is a Blood Bank Management System developed using PHP and MySQL. It provides a platform for blood donors to register themselves and for hospitals or blood banks to manage blood inventory, blood requests, and donor information.

## Features
- User Registration: Donors can register themselves by providing necessary details such as name, contact information, blood type, etc.
- Blood Inventory Management: Hospitals or blood banks can manage their blood inventory, including adding, updating, and deleting blood units.
- Blood Request Management: Hospitals can place requests for blood units, and administrators can assign available blood units to fulfill these requests.
- Donor Management: Administrators can view and manage donor information, including approving or rejecting donor registrations.

## Technologies Used
- PHP
- MySQL
- HTML
- CSS
- XAMPP (Apache, MySQL)

## Installation
1. Install XAMPP: Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Clone this repository into the `htdocs` folder of your XAMPP installation.
3. Import the SQL file (`database.sql`) provided in the `sql` folder into your MySQL database.
4. Configure database connection in `config.php` file located in the `includes` folder.
5. Start the Apache and MySQL servers from the XAMPP control panel.
6. Open a web browser and navigate to `http://localhost/blood_bank_management_system` to access the application.

## Usage
- Once the application is set up and running, users can register themselves as donors.
- Hospitals or blood banks can manage their inventory and requests by logging in as administrators.
- Administrators can manage donor registrations and approve/reject them as necessary.

