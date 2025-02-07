Here's your updated **README.md** with the **corrected screenshot headings** and **directory structure**:

---

# **Health Risk Predictor (HRP)**  

## **Overview**  
Health Risk Predictor (HRP) is a web application designed to predict medical diseases based on user-inputted symptoms and medical history. It provides **personalized workout recommendations** and **prescriptions** to help users manage their health better.  

Built using **HTML, CSS, JavaScript, PHP, and MySQL**, HRP aims to bridge the gap between **self-diagnosis** and **professional medical consultation**.  

---

## **Features**  
✔ **User Authentication** – Secure login and registration with encrypted password storage.  
✔ **Symptom-based Disease Prediction** – Users can input symptoms to receive potential disease predictions.  
✔ **Personalized Prescriptions** – Provides prescription recommendations based on diagnosed diseases.  
✔ **Workout Suggestions** – Suggests medical rehabilitation workouts for health improvement.  
✔ **User Profile Management** – Users can update account details and manage their medical history.  
✔ **Admin Dashboard** – Admins can manage users, view medical data, and perform CRUD operations.  
✔ **Dark Mode Support** – A user-friendly interface with dark mode for better accessibility.  
✔ **Search History Tracking** – Users can view their past searches for symptom analysis.  

---

## **Tech Stack**  
- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  

---

## **Project Directory Structure**  
```
📂 HRP (Root)
├── 📂 img/                     # Image assets
├── .htaccess                   # Server configuration
├── connect.php                 # Database connection
├── homepage.php                # Dashboard Page
├── index.html                  # Front Page
├── index1.html                 # Admin Page
├── user_profile.html           # User Profile Page
├── register.php                # Sign-Up Backend
├── sign.html                   # Login Page
├── signup.css                  # Sign-Up Page Styles
├── style.css                   # Main Stylesheet
├── script.js                   # JavaScript Functions
├── logout.php                  # Logout Functionality
└── ...
```

---

## **Database Structure**  
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

---

## **Installation Guide**  
### **Prerequisites:**  
- XAMPP/WAMP (for local development)  
- PHP and MySQL installed  
- Web browser (Chrome, Firefox, etc.)  

### **Steps:**  
1. Clone the repository:  
   ```sh
   git clone https://github.com/your-username/RISKGUARDAI.git
   ```
2. Move the project to your XAMPP/WAMP `htdocs` folder.  
3. Import the `hrp_database.sql` file into MySQL.  
4. Start Apache and MySQL services.  
5. Open a browser and visit:  
   ```
   http://localhost/RISKGUARAI
   ```

---

## **Screenshots**  

### **1️⃣ Front Page (index.html)**
![Front Page](https://github.com/user-attachments/assets/fe74ad8a-991b-4424-bfb2-ebe8ae5eff4b)

### **2️⃣ Sign-Up Page (register.php)**
![Sign-Up Page](https://github.com/user-attachments/assets/f8bf2f39-c6e4-4478-b4a9-7c300ce48fdd)

### **3️⃣ Login Page (sign.html)**
![Login Page](https://github.com/user-attachments/assets/fd5d6d38-d536-410e-9ec2-759c746419fa)

### **4️⃣ Dashboard Page (homepage.php)**
![Dashboard Page](https://github.com/user-attachments/assets/57522b76-62dd-4dc4-91f2-d5327de4e06b)

### **5️⃣ User Profile Page (user_profile.html)**
![{A23F9A81-EE2A-4F1D-B109-9B1E3D5B0B61}](https://github.com/user-attachments/assets/01e1d1b2-6ad8-4895-a43b-76970b791221)


### **6️⃣ Admin Page (index1.html)**
![image](https://github.com/user-attachments/assets/9ccd176a-4b4c-4988-b11c-3ceef9659b82)



---

## **Usage**  
1. **Sign Up / Log In** to access the dashboard.  
2. Enter symptoms to predict possible diseases.  
3. View prescribed medications and recommended workouts.  
4. Manage your profile and medical history.  
5. Admins can log in to manage users and data.  

---

## **Contributing**  
Contributions are welcome! Feel free to submit a pull request or report issues.  

---

## **License**  
This project is open-source and available to everyone.

---

## **Contact**  
📧 **Email:** eimaanfatima208.com  
🔗 **GitHub:** [GitHub Profile](https://github.com/eimaanfatima208)  

---

