<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
    <h1>Student Details</h1>

    <table class="student-table">
        <tr>
            <th>Student Number</th>
            <td>{{ $student->studentNumber }}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{ $student->lname }}</td>
        </tr>
        <tr>
            <th>First Name</th>
            <td>{{ $student->fname }}</td>
        </tr>
        <tr>
            <th>Middle Initial</th>
            <td>{{ $student->mi }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $student->email }}</td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td>{{ $student->contactNumber }}</td>
        </tr>
    </table>

    <div class="student-actions" style="margin-top:20px; justify-content:center;">
        <a href="{{ route('students.index') }}">Back</a>
        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>

<style>
    /* Container */
.container {
    max-width: 700px;
    margin: 40px auto;
    padding: 25px;
    background: #e7d66b;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
}

/* Title */
.container h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 25px;
    font-size: 26px;
}

/* Student Table */
.student-table {
    width: 100%;
    border-collapse: collapse;
}

.student-table th,
.student-table td {
    padding: 12px 15px;
    border: 1px solid #e0e0e0;
    text-align: left;
    font-size: 15px;
}

.student-table th {
    background: #f4f6f7;
    color: #2c3e50;
    width: 30%;
    font-weight: bold;
}

.student-table tr:nth-child(even) td {
    background: #fafafa;
}

/* Actions */
.student-actions {
    display: flex;
    gap: 12px;
    justify-content: center;
    margin-top: 20px;
}

/* Links */
.student-actions a {
    padding: 8px 15px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

/* Back Button */
.student-actions a[href*="students.index"] {
    background: #7f8c8d;
    color: #fff;
}
.student-actions a[href*="students.index"]:hover {
    background: #636e72;
}

/* Edit Button */
.student-actions a[href*="students.edit"] {
    background: #3498db;
    color: #fff;
}
.student-actions a[href*="students.edit"]:hover {
    background: #2980b9;
}

/* Delete Button */
.student-actions button {
    padding: 8px 15px;
    border-radius: 6px;
    border: none;
    background: #e74c3c;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
    transition: background 0.3s;
}
.student-actions button:hover {
    background: #c0392b;
}

</style>