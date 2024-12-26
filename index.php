<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maru man
    </title>
</head>
<body>
    <div class="logo">
        <h1>marelign yimer</h1>
        <!-- logo -->
         <h3>compputer science</h3>
    </div>
    <div class="navbar" id="mynavbar">
        <a href="index.php">HOME</a>
        <a href="form.php">form</a>
        <div class="dropdown">
            <button class="dropdownbtn">tutorials</button>
            <div class="tutor">
                <a href="https://www.w3schools.com/">html</a>
                <a href="https://www.codecademy.com/">css</a>
                <a href="https://www.w3schools.com/">js</a>
                <a href="https://www.bing.com/ck/a?!&&p=d4d3ce8bff49bee51d67ed530dbb140a43b14ee5c5a6ac2bd95f1feae085aa0aJmltdHM9MTczNTA4NDgwMA&ptn=3&ver=2&hsh=4&fclid=37624390-78c4-668e-22d7-571e79b567f5&psq=sql+online+tutorial&u=a1aHR0cHM6Ly93d3cudHV0b3JpYWxzcG9pbnQuY29tL3NxbC9pbmRleC5odG0&ntb=1">sql</a>
                <a href="https://www.udemy.com/">php</a>
            </div>
        </div>
        <a href="contact.php">CONTACT</a>
        <a href="about.php">ABOUT</a>
        <a href="php.php" class="ri">LOGIN </a>
        <a href="signUp.php" class="ri">SIGNUP</a>
        <a href="javascript:void(0);" class="icon" style="font-size:15px ;" onclick="myFunction()">&#9776;</a>

    </div>
    <div class="cont">
        <h1><span id="s"> learn</span> <br><span id="l">technology</span></h1>
        <p class="para" id="p">
        learn technology from scrach is make powerfull!
        <!-- descriptipn -->
        </p>
        <button class="learn"><a href="#">start now</a></button>
    </div>
     <script>
       
    //     function myFunction(){
    // var a = document.getElementById("mynavbar");
    // if (a.className === "navbar") {
    //     a.className+= "responsive";
    // } else {
    //     a.className = "navbar";
    // }

    function myFunction() {
    var navbar = document.getElementById("mynavbar");
    navbar.classList.toggle("responsive");
}


    </script> 
</body>
</html>