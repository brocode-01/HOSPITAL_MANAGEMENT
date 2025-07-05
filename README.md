# HOSPITAL_MANAGEMENT

Description
--
The Hospital Management System is a web-based application designed to streamline hospital operations. It provides distinct functionalities for doctors, patients, and administrators. The system features a Doctor's Page, a User Page, a Sign-Up Page, and a seamless appointment booking mechanism. All patient data is securely stored and managed using a MySQL database.


The project is built with:

Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
Features
1. Doctor Page
Displays doctor profiles with relevant details (specialization, availability, etc.).
Allows doctors to view and manage their appointment schedules.
2. User Page
User dashboard for patients to manage their accounts.
Patients can view their upcoming appointments and medical history.
3. Sign-Up and Login
New users can register for the system by providing personal information.
Secure login mechanism for doctors and patients.
4. Appointment Booking
Patients can book appointments by selecting their preferred doctor and time slot.
Real-time validation of availability.
5. Database Integration
Patient records, doctor details, and appointments are stored in a MySQL database.
Ensures data integrity and security with efficient schema design.
Tech Stack
Frontend
HTML: Provides the structure for the web pages.
CSS: Styles the web pages for a user-friendly interface.
JavaScript: Adds interactivity to enhance user experience.
Backend
PHP: Handles server-side operations and database interactions.
Database
MySQL: Manages data storage for users, doctors, and appointments.
**Installation and Setup**
Prerequisites
Ensure you have the following installed:

XAMPP or WAMP server (to run PHP and MySQL locally).
A modern web browser (e.g., Chrome, Firefox).
Steps
1. **Clone the Repository**
   git clone https://github.com/your-username/hospital-management-system.git  
   cd hospital-management-system
2. **Set Up the Database**
    Import the hospital_management.sql file into your MySQL database.
    Configure database credentials in the config.php file:
   <?php  
     $servername = "localhost";  
     $username = "root";  
     $password = "";  
     $dbname = "hospital_management";  
     ?>  
3.  **Run the Application**
    Start your local server (XAMPP/WAMP).
    Place the project folder in the htdocs directory.
    Open a web browser and go to:
    http://localhost/hospital-management-system/  
**File Structure**
hospital-management-system/  
├── css/  
│   └── styles.css        # Stylesheet for the application  
├── js/  
│   └── scripts.js        # JavaScript for interactivity  
├── includes/  
│   ├── config.php        # Database configuration  
│   ├── functions.php     # Reusable PHP functions  
├── views/  
│   ├── doctor.php        # Doctor page  
│   ├── patient.php       # Patient dashboard  
│   ├── signup.php        # Sign-Up page  
│   ├── login.php         # Login page  
├── sql/  
│   └── hospital_management.sql   # Database schema and sample data  
└── index.php             # Landing page  





