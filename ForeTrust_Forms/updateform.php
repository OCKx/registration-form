<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="img/updateform.css">
    <title>Document</title>
</head>
<body>
    <div class="update-container">
        <h1 style="color: #4caf4f;">Updated Record</h1>
        
        <form class="update-form" action="update.php" method="POST">
            <h4 style="text-align: center; color: #2980b9">update requires student id</h4>
            <div class="separater"></div>
            <label for="id_num">ID:</label>
            <input type="number" id="id_num" name="id" placeholder="Enter id num" required><br>
            <div class="separater"></div><br>
            
            <label for="name">First Name:</label>
            <input type="text" id="name" name="fname" placeholder="Enter First Name">

            <label for="name">Last Name:</label>
            <input type="text" id="name" name="lname" placeholder="Enter Last Name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Email">

            <label for="phone">Phone:</label>
            <input type="text" id="name" name="phone" placeholder="Enter Phone No."><br>

            <label for="g_name">Guardian's Name:</label>
            <input type="text" id="guardian_name" name="g_name" placeholder="Guardian Name" ><br>

            <label for="g_number">Guardian's Phone Number:</label>
            <input type="tel" id="guardian_phone" name="g_number" placeholder="Enter Guardian Phone Number"><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob"><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>

            <label for="edu_qual">Educational Qualification:</label>
            <input type="text" id="edu_qualification" name="edu_qual" placeholder="Enter Educational Qualification"><br>

            <label for="other_qual">Other Qualification:</label>
            <input type="text" id="other_qualification" name="other_qual"  placeholder="Enter Other"><br>

            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" placeholder="Enter Your Occupation"><br>

            <label for="state_of_origin">State of Origin:</label>
            <input type="text" id="state_of_origin" name="nationality" placeholder="Enter Your State of Origin"><br>

            <label for="course">Course Applied For:</label>
            <select type="text" id="course_applied" name="course">
                <option value="Basic_Computer_Training ">Basic Computer Training </option>
                <option value="Operating_System">Operating System</option>
                <option value="Database_Design_Management">Database Design and Management</option>
                <option value="Computer_Networking">Computer Networking</option>
                <option value="Computer_Hardware_Management"> Computer Hardware Management</option>
                <option value="FrontEnd">FrontEnd</option>
                <option value="HTML_CSS">HTML and CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Computer_Graphic_Design">Computer Graphic Design</option>
                <option value="Python">Python</option>
                <option value="Backened">Backend</option>
                <option value="c">C</option>
                <option value="c++">C++</option>
                <option value="c#">C#</option>
                <option value="Java">Java</option>
                <option value="Computer_Information Security">Computer & Information Security</option>
                <option value="Machine_Learning"> Machine Learning</option>
                <option value="Cloud_Computing"> Cloud Computing</option>
                <option value="Mobile_Computing"> Mobile Computing</option>
                <option value="Computer_Visualization"> Computer Visualization</option>
                <option value="Publication_Authoring_Tools_Technology">Publication Authoring Tools & Technology</option>
            </select> <br>

            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" placeholder="Enter Duration"><br>

            <label for="date_admit">Date of Admission:</label>
            <input type="date" id="admission_date" name="date_admit"><br>

            <label for="fee">Fee:</label>
            <input type="number" id="fee" name="fee" placeholder="Enter Amount"><br>

            <label for="mod_payment">Mode of Payment:</label>
            <select id="payment_mode" name="mod_payment">
                <option value="advance">Advance</option>
                <option value="part_payment">Part-Payment</option>
                <option value="full_payment">Full Payment</option>
            </select><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" placeholder="Enter Your Address"></textarea><br>
            <a href="view.php"> << Go Back</a> <br>
            <input type="submit" class="click" value="Update Record">

        </form>
    </div>
</body>
<script src="script.js"></script>
</html>