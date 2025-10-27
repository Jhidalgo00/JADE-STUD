<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="form-table">
            <tr>
                <td>
                    <label for="studentNumber">Student Number</label>
                    <input type="text" id="studentNumber" name="studentNumber" value="{{ $student->studentNumber }}" required>
                </td>
                <td>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" value="{{ $student->lname }}" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" value="{{ $student->fname }}" required>
                </td>
                <td>
                    <label for="mi">Middle Initial</label>
                    <input type="text" id="mi" name="mi" value="{{ $student->mi }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $student->email }}">
                </td>
                <td>
                    <label for="contactNumber">Contact Number</label>
                    <input type="text" id="contactNumber" name="contactNumber" value="{{ $student->contactNumber }}">
                </td>
            </tr>
        </table>

        <div style="margin-top: 20px; text-align: center;">
            <button type="submit">Update</button>
            <a href="{{ route('students.index') }}" class="back-link">Back</a>
        </div>
    </form>
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
    margin-bottom: 20px;
    font-size: 26px;
}

/* Form Table */
.form-table {
    width: 100%;
    border-spacing: 15px;
}

.form-table td {
    vertical-align: top;
}

/* Labels */
label {
    font-weight: bold;
    color: #34495e;
    display: block;
    margin-bottom: 6px;
}

/* Inputs */
input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #bdc3c7;
    border-radius: 6px;
    font-size: 14px;
    transition: 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52,152,219,0.3);
}

/* Update Button */
button {
    padding: 10px 20px;
    background: #cba1dc;
    border: none;
    border-radius: 6px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #1e8449;
}

/* Back Link */
.back-link {
    margin-left: 15px;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    background: #7f8c8d;
    color: #fff;
    font-size: 15px;
    transition: 0.3s;
}

.back-link:hover {
    background: #636e72;
}

</style>