<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
    
        <table class="form-table">
            <tr>
                <td>
                    <label for="studentNumber">Student Number</label>
                    <input type="text" name="studentNumber" id="studentNumber" required>
                </td>
                <td>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" required>
                </td>
                <td>
                    <label for="mi">Middle Initial</label>
                    <input type="text" name="mi" id="mi">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email">
                </td>
                <td>
                    <label for="contactNumber">Contact Number</label><br>
                    <input type="text" name="contactNumber" id="contactNumber">
                </td>
            </tr>
        </table>

        <div style="margin-top: 20px; text-align: center;">
            <button type="submit">Save</button>
            <a href="{{ route('students.index') }}" class="back-link">Back</a>
        </div>
    </form>
</div>

<style>
    /* Container */
.container {
    max-width: 700px;
    margin: 50px auto;
    padding: 25px;
    background: #e7D66B;
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

/* Buttons */
button {
    padding: 10px 20px;
    background: #3498db;
    border: none;
    border-radius: 6px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #2980b9;
}

/* Back Link */
.back-link {
    margin-left: 15px;
    text-decoration: none;
    color: #CBA1dc;
    font-size: 15px;
    transition: color 0.3s;
}

.back-link:hover {
    color: #e7D66B
    text-decoration: underline;
}

</style>