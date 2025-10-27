# 🧑‍🎓 Student-Section Management System (Laravel MVC CRUD)

## 📘 Description / Overview
The **Student-Section Management System** is a web-based CRUD (Create, Read, Update, Delete) application developed using the **Laravel Framework**.  
It allows users to manage student and section records efficiently by performing basic database operations through a user-friendly interface.  
This project was created as part of the **Midterm Examination** to demonstrate understanding of **Laravel MVC architecture**, **database management**, and **web development fundamentals**.

---

## 🎯 Objectives
- To apply the **Model-View-Controller (MVC)** architecture in building a web application.
- To perform CRUD operations (Create, Read, Update, Delete) using Laravel.
- To implement database migrations and relationships between students and sections.
- To demonstrate proper routing, validation, and controller logic.
- To enhance understanding of Laravel Blade templates for dynamic web pages.

---

## ⚙️ Features / Functionality
✅ **Student Management**
- Add new student records.  
- View list of all students.  
- Edit and update existing student information.  
- Delete unwanted student entries.

✅ **Section Management**
- Add, edit, and delete sections.  
- Assign students to specific sections.  
- Display section details and the list of enrolled students.

✅ **Additional Features**
- User-friendly interface using Blade templates.  
- Validation for required form inputs.  
- Flash messages for success and error notifications.

---

## 🛠️ Installation Instructions

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/Jhigaldo00/student-section-crud.git
cd student-section-crud
2. composer install
npm install
3.cp .env.example .env
4.DB_DATABASE=student_section_db
DB_USERNAME=root
DB_PASSWORD=
5. php artisan serve
access the app at https://127.0.0.1/student


💻 Usage
For Students:

1. Click on Students tab.
2. Add a new student by filling up the form.
3.Edit or delete student records when needed.
For Sections:
1.Go to the Sections page.
2.Add or update section details.
3. Assign students to a section.

Screeshot for Code Snippet
// StudentController.php
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'section_id' => 'required|exists:sections,id',
    ]);

    Student::create($validated);

    return redirect()->route('students.index')->with('success', 'Student added successfully!');
}

👥 Contributors

Name: Jade Hidalgo    
Course: [BSIT 4-C]
Collaborators: Marivic Floresca

📜 License
This project is licensed under the MIT License — you are free to use, modify, and distribute this project with attribution.


