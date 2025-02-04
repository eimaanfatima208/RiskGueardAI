# Health Risk Predictor (HRP)

## Overview
Health Risk Predictor (HRP) is a web application designed to predict medical diseases based on user-inputted symptoms and medical history. It provides personalized workout recommendations and prescriptions to help users manage their health better. Built using **HTML, CSS, JavaScript, PHP, and MySQL**, HRP aims to bridge the gap between self-diagnosis and professional medical consultation.

## Features
- **User Authentication**: Secure login and registration with encrypted password storage.
- **Symptom-based Disease Prediction**: Users can input symptoms to receive potential disease predictions.
- **Personalized Prescriptions**: Provides prescription recommendations based on diagnosed diseases.
- **Workout Suggestions**: Suggests medical rehabilitation workouts for health improvement.
- **User Profile Management**: Allows users to update their account details and manage medical history.
- **Admin Dashboard**: Admins can manage users, view medical data, and perform CRUD operations.
- **Dark Mode Support**: A user-friendly interface with dark mode for better accessibility.
- **Search History Tracking**: Users can view their past searches for symptom analysis.

## Tech Stack
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Database Structure
HRP uses a well-structured relational database with the following tables:
- **User Table** – Stores user details.
- **Medical History Table** – Maintains medical history records.
- **MedicalUser Table** – Links users to their medical histories.
- **SymptomUser Table** – Stores user-searched symptoms & search history.
- **Disease Table** – Contains disease-related data.
- **Symptoms Table** – Stores all possible symptoms.
- **Workout Table** – Stores medical rehabilitation workouts.
- **Prescription Table** – Contains disease prescriptions.
- **SymptomDisease Table** – Links symptoms to diseases.
- **DiseasePrescription Table** – Links diseases to prescriptions.
- **WorkoutPrescription Table** – Links workouts to prescriptions.

## Installation
### Prerequisites:
- XAMPP/WAMP (for local development)
- PHP and MySQL installed
- Web browser (Chrome, Firefox, etc.)

### Steps:
1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/HRP.git
   ```
2. Move the project to your XAMPP/WAMP `htdocs` folder.
3. Import the `hrp_database.sql` file into MySQL.
4. Start Apache and MySQL services.
5. Open a browser and visit:
   ```
   http://localhost/RISKGUARDAI
   ```

## Usage
1. **Sign Up / Log In** to access the dashboard.
2. Enter symptoms to predict possible diseases.
3. View prescribed medications and recommended workouts.
4. Manage your profile and medical history.
5. Admins can log in to manage users and data.

## Contributing
Contributions are welcome! Feel free to submit a pull request or report issues.

## License
This project is open-source and available under the **MIT License**.

##Screenshots

![image](https://github.com/user-attachments/assets/fd5d6d38-d536-410e-9ec2-759c746419fa)

Prototype1: (P1) register a new member

![image](https://github.com/user-attachments/assets/f8bf2f39-c6e4-4478-b4a9-7c300ce48fdd)

Prototype2: (P2) Login Page

![image](https://github.com/user-attachments/assets/fe74ad8a-991b-4424-bfb2-ebe8ae5eff4b)

Prototype3: (P3) Front Page

![image](https://github.com/user-attachments/assets/57522b76-62dd-4dc4-91f2-d5327de4e06b)

Prototype4: (P4) Dashboard Page

![{1401BE12-A75E-4E5D-9CC3-F55C5755713A}](https://github.com/user-attachments/assets/70486cb9-bddd-4e15-8721-c09bf3cb5744)

Prototype5: (P5) User Profile Page

![{5238630A-C06E-4826-8ECB-077120C50F6E}](https://github.com/user-attachments/assets/a8499d7e-b5ba-4697-839e-a748d21353b4)

Prototype6: (P6)  Admin  Page
---
### Contact
For any queries or contributions, feel free to reach out:
- **Email:** eimmanfatima208.com
- **GitHub:** https://github.com/eimaanfatima208
