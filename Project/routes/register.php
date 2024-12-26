<html>
<head>
    <title>Online Voting System - Registration</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <script>
        function validateAge() {
            const dob = document.getElementById('dob').value;
            const birthDate = new Date(dob);
            const today = new Date();
            const age = today.getFullYear() - birthDate.getFullYear();
            const monthDifference = today.getMonth() - birthDate.getMonth();
            
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age < 18) {
                alert("You must be 18 years or older to register for voting.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <center>
        <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>
        <hr>

        <h2>Registration</h2>
        <form action="../api/register.php" method="POST" enctype="multipart/form-data" onsubmit="return validateAge();">
            <input type="text" name="name" placeholder="Name" required>&nbsp;
            <input type="number" name="mob" placeholder="Mobile" required><br><br>
            <input type="password" name="pass" placeholder="Password" required>&nbsp;
            <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
            <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
            <input type="date" id="dob" name="dob" required style="width: 31%;" placeholder="Date of Birth"><br><br>
            <div id="upload" style="width: 30%;">
                Upload image: <input type="file" id="profile" name="image" required>
            </div><br>
            <div id="upload" style="width: 30%;">
                Select your role:
                <select name="role">
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select><br>                   
            </div><br>
            <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
            Already a user? <a href="../">Login here</a>
        </form>
    </center>
</body>
</html>
