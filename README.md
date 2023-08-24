# CodeAlpha_Survey_form
A web application that facilitates the creation and completion of multi-page surveys. This  allow users to create surveys with multiple pages, save their progress across pages, and finally submit the collected data. The collected data is stored in a database, providing a versatile solution for survey data management.
# Multi-Page Survey Web Application

## Project Description
This web application enables the creation, completion, and management of multi-page surveys. Users can create surveys with multiple pages, save their progress, and submit collected data. The collected data can be stored in an SQL database or sent via email. The project uses PHPMyAdmin for database management and XAMPP as the local server.

## Features
- Create multi-page surveys with various question types.
- Seamlessly save and resume survey progress across pages.
- Choose to store data in an SQL database or send it via email.
- Responsive design for a user-friendly experience.
- Real-time validation of user inputs.
- Data summarization before final submission.
- Admin dashboard to manage and analyze survey data.


## Screenshots

## SurveyFormPage1

![SurveyFormpage1](https://github.com/chandhu2102/CodeAlpha_Survey_form/assets/93365365/f7f0bc2a-cd0f-44dd-b637-4b5136ae2172)

## SurveyFormPage2

![SurveyformPage2](https://github.com/chandhu2102/CodeAlpha_Survey_form/assets/93365365/dd2b150d-bfc0-4e8a-9767-0bc24143a67d)

## SurveyFormPage3

![SurveyFormPage3](https://github.com/chandhu2102/CodeAlpha_Survey_form/assets/93365365/b4efc244-4b11-4907-9042-f0b4915e17c5)

## SurveyFormPage4
![SurveyFormpage4](https://github.com/chandhu2102/CodeAlpha_Survey_form/assets/93365365/135d1b94-5c1d-48e2-8b5c-8ad33cb29b0a)

## SurveyFormPage5
![SurveyFormPage5](https://github.com/chandhu2102/CodeAlpha_Survey_form/assets/93365365/83565692-06e9-4e7f-ab12-1a379e5453a1)

##Survey Responses stored in database

![database](https://github.com/chandhu2102/CodeAlpha_Survey_form/assets/93365365/89ea512f-3a57-4723-8abf-aa5cd216b1bc)

## Technologies Used
- Frontend: HTML, CSS, JavaScript 
- Backend: PHP (with XAMPP server)
- Database: MySQL via PHPMyAdmin
- Email Integration: Nodemailer (for email submissions)

## Setup Instructions
1. Install XAMPP and start the Apache and MySQL services.
2. Clone the repository: `git clone <repository-url>`
3. Place the project folder in the XAMPP htdocs directory.
4. Import the database structure using PHPMyAdmin:
   - Access PHPMyAdmin at `http://localhost/phpmyadmin`
   - Create a new database named 'survey_app'
   - Import the database structure from the 'database' folder.
5. Configure database credentials in `config.php`.
6. Install Nodemailer for email submission: `npm install nodemailer`
7. Start the project in your web browser: `http://localhost/your-project-folder`

## Usage
1. Create surveys from the admin dashboard or use pre-existing ones.
2. Respondents can access surveys, save progress, and submit data.
3. Data can be stored in the MySQL database or sent via email.
4. Admins can view and manage survey data through the dashboard.

## Contributing
Contributions are welcome! Feel free to submit pull requests for bug fixes, new features, or improvements.

## Contact
For any inquiries, contact us at rchandralekha21@gmail.com.


