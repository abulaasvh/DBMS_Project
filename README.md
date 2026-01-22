# 📚 Student Attendance Management System


**A complete attendance management system** for schools and colleges. **Teachers mark attendance** and **manage students/teachers**

## 🛠️ **What You Need**

| **Tool** | **Version** | **Why?** |
|----------|-------------|----------|
| **PHP** | 7.0 or higher | Backend programming language |
| **MySQL** | 5.7 or higher | Database to store data |
| **Apache** | 2.4+ | Web server |
| **Browser** | Any recent version | To view the application |
| **XAMPP/WAMP** | Latest | Local development environment |


## 📁 **Project Folder Structure**
student-attendance-system/

├── index.html → Home/Dashboard page

├── students/ → All student-related files

│ ├── add_student.php → Form to add new student

│ ├── view_students.php → Display all students

│ └── get_students.php

├── teachers/ → Teacher management files

│ ├── view_teachers.php → Display all teachers

├── attendance/ → All attendance-related files

│ ├── mark_attendance.php → Mark daily attendance

│ ├── get_attendance.php → View attendance records

├── database/

│ ├── config.php → Database connection settings

│ └── DB file → Database tables structure

│ └──test_connection.php → to connect the database

## 🚀 **How to Set Up**

Follow these steps to run the project on your PC.

### 1️⃣ Install XAMPP
- Download XAMPP from: https://www.apachefriends.org
- Install with default settings

---

### 2️⃣ Start Server
- Open **XAMPP Control Panel**
- Click **Start** for:
  - **Apache**
  - **MySQL**
- Both should turn **GREEN** ✅

---

### 3️⃣ Clone the Repository
Open **Command Prompt / Terminal** and run (in VS code):

```bash
git clone https://github.com/abulaasvh/DBMS_Project
```

**Move the project folder to:**

C:\xampp\htdocs\attendance_system

---

### 4️⃣**Create Database**

**Open browser** → http://localhost/phpmyadmin

**Click New**

Database name: ```attendance_system```

**Click Create**

**Import** 

- db.sql 

- in.sql

---

### 5️⃣ **Run the Project**

**Open browser and go to:**

```http://localhost/attendance_system/```


# 🎉 Project is now running!


