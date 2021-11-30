<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Homepage</title>
</head>
<body>
    
    <div class="container">
        <div class="title">
            <span class="heading">Student Result Management System</span>
        </div>
        
        <div class="nav">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="login.php" target"blank">Admin Login</a>
                </li>
                <li class="dropdown" onclick="toggleDisplay('1')">
                    <a href="#" class="dropbtn">Faculties &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="1">
                        <a href="">Arts</a>
                        <a href="">Science</a>
                        <a href="">Commerce</a>
                        <a href="">Technology</a>
                        <a href="">Sports</a>
                        <a href="">Others</a>
                    </div>
                </li>
                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn">Student &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="2">
                        <a href="">Admissions</a>
                        <a href="">Scholarship</a>
                        <a href="">Examination</a>
                        <a href="./login.php">Results</a>
                        <a href="">Manage Results</a>
                    </div>
                </li>
            </ul>
        </div>
    
        <div class="background firstsection">
            <img src="images/Background.jpg" alt="img" style="width:1200px;">
        </div>
    
        <div class="main">
            <span>About the University</span>
            <p>The Galgotias University, Uttar Pradesh, sponsored by Smt. Shakuntala Educational and Welfare Society, has been established by state of Uttar Pradesh under section 2(f) of the UGC Act, 1956 vide The Galgotias University Uttar Pradesh Act, 14 of 2011. The University commenced its operation from the academic session 2011-12.

Galgotias University opened its door to the first batch of approximately 1,700 undergraduate and post-graduate students in July of 2011. Now in year 2021, the university has grown to more than 13000 students. Galgotias University aspires to be and is on a fast-track to become an internationally recognized university that excels in multidisciplinary and interdisciplinary education, research and innovation, educating globally competitive graduates with potential to become leaders in their fields of endeavour. The graduates will have deep knowledge within their fields but will also excel in problem solving skills, will be aware of the societal context of their chosen profession, will function effectively in teams, will have good communications skills and above all, be life-long learners.

The 'students-first' philosophy is a big reason why Galgotias University is consistently ranked among India's top universities. The focus of Galgotias University is on low student-to-faculty ratio that promotes plenty of personal attention and mentoring opportunities.</p>
    
            <div class="info">
                <div>
                    <span>Courses</span> <hr>
                    <p>Still deciding what you want to study at university? Browse the full range of options with our course guides, a detailed information about types of program, specializations and career prospects.</p>
                </div>
                <div>
                    <span>Admissions</span> <hr>
                    <p>Whether your new to campus or are looking for more information on campus activities you can find information about admissions and financial aid here</p>
                </div>
                <div>
                    <span>Library</span> <hr>
                    <p>Be the first to know. Stay informed and up to date with the upcoming technology. Get varied knowledge right from social events to newest research topics by clicking the link</p>
                </div>
                <div>
                    <span>Campus Region</span> <hr>
                    <p>Welcome to Campus, a multipurpose WordPress theme. Go ahead and click around, there is a ton of new stuff to check out. For more information</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer--contact">
                <span>Contact Us</span>
                <p>dayanand.jul@gmail.com</p>
                <p>+91-9931378403</p>
            </div>
            <div class="footer--info">
                <span>Important Links</span>
                <a href="homepage.html">Home</a>
                <a href="login.php">Admin Login</a>
                <a href="login.php">Results</a>
            </div>
        </div>

    </div>

</body>
</html>