<html>
<head>
    <title> Form </title>
</head>

<style>
    body {
        /* set the webpage background color */
        background-color: pink;
    }

    h1 {
        text-align: center;
    }

    h2 {
        /* set the header color, allignment and font */
        color: purple;
        text-align: center;
        font-size: 28px;
    }

    .main-form {
        /* set the label's css design, direction of the input box arrangement, color and font */
        display: flex;
        flex-direction: column;
        color: green;
        font-size: 20px;
    }

    /*start sini - buat design utk navigation menu */
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: lightblue;
    }

    li { 
        float: left;
    }

    li a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }

    .active {
        background-color: red;
    }
    /*habis sini - buat design utk navigation menu */


</style>

<body>
    
    <h1> <i> Welcome to Learning Port </i> </h1>

    <h2> EMPLOYER'S PERSONAL INFORMATION </h2>

    <div>
    <ul>
        <li><a href="#home" class="active"> Home </a></li>
        <li><a href="#aboutus"> About Us </a></li>
        <li><a href="#register"> Interview Application </a></li>
        <li><a href="#Login"> Login </a></li>
    </ul> <br>
    </div>

    <form class = "main-form" action = "server/success.php">

        <!-- Everything in vertical arrangement -->
        <!-- One line input -->
        <label for = "fullName" > Full Name : </label>
        <input type = "text" id = "fullName" placeholder = "Please enter your full name here" > <br>

        <!-- Multiple lines input -->
        <label for = "addr" > Address : </label>
        <input type = "text" id = "addr" value = "A-3-20 blablabla..." > <br>

        <!-- Limited no of digit input --> 
        <label for = "ic" > I/C No : </label>
        <input type = "text" id = "ic" maxlength = "12" placeholder = "Enter 12 digit I/C number" > <br>

        <!-- email (requires @ symbol) -->
        <label for = "email" > Email : </label>
        <input type = "email" id = "email" placeholder = "Enter valid email address"> <br>

        <div>
            <!-- Everything in default arrangement --> 
            <!-- checkbox -->
            <label for = "gender" > Gender : </label>

            <input type = "checkbox" id = "gender" value = "male" >
            <label for = "box1" > Male </label>

            <input type = "checkbox" id = "gender" value = "female" >
            <label for = "box2" > Female </label> <br> <br>

            <!-- calendar (dd/mm/yy) -->
            <label for = "d.o.b" > Date of Birth : </label>
            <input type = "date" id = "d.o.b" > <br> <br>
            
            <!-- calendar date and time (dd/mm/yy) (hr/min/s) -->
            <label for = "birthdayTime" > Birthday ( Date and time ) : </label>
            <input type = "datetime-local" id = "birthdayTime" > <br> <br>

            <!-- file upload -->
            <label for = "pic" > Passport Picture : </label>
            <input type = "file" id = "pic" > <br> <br>

            <!-- number field (quantity) -->
            <label for = "siblings" > No of Siblings : </label>
            <input type = "number" id = "siblings" min = "1" max = "20" > <br> <br>

            <!-- range field -->
            <label for = "range" > How much do you love this page (In a scale of 0-5) : </label>
            <input type = "range" id = "range" min = "0" max = "5" > <br> <br>
 
            <!-- phone no with format -->
            <label for = "phone" > Phone No : </label>
            <input type = "tel" id = "phone" pattern = "[0-9]{3}-[0-9}{8}" >
            <small> Format: 01x-xxxxxxxx </small> <br> <br>

            <!-- time input -->
            <label for = "iv" > At what time do you available to attend the interview? </label>
            <input type = "time" id = "iv" > <br> <br>

            <!-- button -->
            <input type = "submit" value = "SUBMIT" >
    
        </div>

    </form>
</body>
</html>
