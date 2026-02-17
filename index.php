<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form action="save.php" method="POST">
    Name: <input type="text" name="name" required><br><br>

    Age: <input type="number" name="age" required><br><br>

    Course: <input type="text" name="course" required><br><br>

    Year of Study:
    <select name="year_of_study" required>
        <option value="Year 1">Year 1</option>
        <option value="Year 2">Year 2</option>
        <option value="Year 3">Year 3</option>
        <option value="Year 4">Year 4</option>
    </select><br><br>

    Email: <input type="email" name="email" required><br><br>

    <input type="submit" value="Save Student">
</form>

<br>
<a href="view.php">View Students</a>

</body>
</html>
