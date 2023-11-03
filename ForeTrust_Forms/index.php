<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration division</title>
</head>

<body>
    <form action="foretrust_Back.php" method="POST" class="form">                 
        <div class="header">
            <img src="img/Foretrust.png" alt="" width="300px">
        </div>
    <div id="page1">
        <h1 style="text-align: center; color: #4CAF50; font-size: 25px;">Registration Form</h1>
        <div class="separater"></div>
        <div id="divPage1">
            <!-- Your personal indivation fields here -->
            <label for="fname">First Name:</label>
            <input type="text" id="name" name="fname" placeholder="Enter Your First Name" required><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="name" name="lname" placeholder="Enter Your Last Name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email (optional)"><br>

            <label for="phone">Phone:</label>
            <input type="number" id="name" name="phone" placeholder="Enter Your Phone No. (optional)"><br>

            <label for="g_name">Guardian's Name:</label>
            <input type="text" id="guardian_name" name="g_name" placeholder="Enter Guardian Name" required><br>

            <label for="g_number">Guardian's Phone Number:</label>
            <input type="number" id="guardian_phone" name="g_number" placeholder="Enter Your Guardian Phone No." required><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" placeholder="Enter Your Address" required></textarea><br>

            <button type="button" onclick="navigateToPage2()">Next</button>
            <a href="view.php">
                <button type="button" onclick="navigateToPage3()">View</button>
            </a>
        </div>
    </div>

    <div id="page2" style="display: none;">
        <h1 style="text-align: center; color: #4CAF50; font-size: 25px;">Qualifications and Course Indivation</h1>
        <div class="separater"></div>
        <div id="divPage2">
            <!-- Your qualifications and course indivation fields here -->
            <label for="edu_qual">Educational Qualification:</label>
            <input type="text" id="edu_qualification" name="edu_qual" placeholder="Enter Your Educational Qualification" required><br>

            <label for="other_qual">Other Qualification:</label>
            <input type="text" id="other_qualification" name="other_qual" placeholder="Enter Any Other Qualification (optional)"><br>

            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" placeholder="Enter Your Occupation" required><br>

            <label for="state_of_origin">State of Origin:</label>
            <input type="text" id="state_of_origin" name="nationality" placeholder="Enter Your State of Origin" required><br>

            <!-- <label for="id_card">ID Card Number:</label>
            <input type="text" id="id_card_number" name="id_card" placeholder="Enter Your" required><br> -->

            <label for="course">Course Applied For:</label>
            <select type="text" id="course_applied" name="course" required>
                <option value="Basic Computer Training ">Basic Computer Training </option>
                <option value="Operating System">Operating System</option>
                <option value="Database Design Management">SQL</option>
                <option value="Computer Networking">Computer Networking</option>
                <option value="Computer Hardware Management"> Computer Hardware Management</option>
                <option value="FrontEnd">FrontEnd</option>
                <option value="HTML & CSS">HTML and CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Computer Graphic Design">Computer Graphic Design</option>
                <option value="Backened">Backend</option>
                <option value="Python">Python</option>
                <option value="Backened">PHP</option>
                <option value="c">C</option>
                <option value="c++">C++</option>
                <option value="c#">C#</option>
                <option value="Java">Java</option>
                <option value="Java">Full Stack</option>
                <option value="Computer Indivation Security">Cyber Security</option>
                <option value="Machine Learning"> Machine Learning</option>
                <option value="Cloud Computing"> Cloud Computing</option>
                <option value="Mobile Computing"> Mobile Computing</option>
                <option value="Computer Visualization"> Computer Visualization</option>
                <option value="Publication Authoring Tools Technology">Publication Authoring Tools & Technology</option>
            </select> <br>

            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" placeholder="Enter Your Duration" required><br>

            <label for="date_admit">Date of Admission:</label>
            <input type="date" id="admission_date" name="date_admit" required><br>

            <label for="fee">Fee:</label>
            <input type="number" id="fee" name="fee" placeholder="Enter Your Fee" required><br>

            <label for="mod_payment">Mode of Payment:</label>
            <select id="payment_mode" name="mod_payment" required>
                <option value="advance">Advance</option>
                <option value="part_payment">Part-Payment</option>
                <option value="full_payment">Full Payment</option>
            </select><br>
            <button type="button" onclick="navigateToPage1()">Back</button>
        </div>
        <button type="submit" value="submit" class="full-btn">
            <a href=""></a>Submit
        </button>
    </div>

</form>
</body>
<script src="script.js"></script>

</html>