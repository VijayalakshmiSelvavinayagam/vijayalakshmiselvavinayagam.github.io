<?php
$to = 'Vijayalakshmiselvavinayagam@email.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'svijishalom@email.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>

<html>
    <head>
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type = "text/css" href = "style1.css" rel = "stylesheet">
    </head>
    <body>
    <div class = "container">
        <div class = "header">
            <br>
            <img class = "pics" src = "images/mypic.jpg">
            <p class = "title">Vijayalakshmi Selvavinayagam</p>
            <a href = "https://www.linkedin.com/in/vijayalakshmiselvavinayagam/" target = "#"><img class = "media" src = "images/linkedin.png" 
                onmouseover = "this.src='images/linkedin1.png'" onmouseout = "this.src='images/linkedin.png'"></a>
            <a href = "https://github.com/VijayalakshmiSelvavinayagam" target = "#"><img class = "media" src = "images/github.png" onmouseover = "this.src='images/github1.png'" 
                onmouseout = "this.src='images/github.png'"></a>
            <a href = "https://twitter.com/Viji_89" target = "#"><img class = "media" src = "images/twitter.png" onmouseover = "this.src='images/twitter1.png'" 
                onmouseout = "this.src='images/twitter.png'"></a>
            <a href = "https://twitter.com/Viji_89" target = "#"><img class = "media" src = "images/email.png" onmouseover = "this.src='images/email1.png'" 
                onmouseout = "this.src='images/email.png'"></a>
            <a href = "https://vijayalakshmiselvavinayagam.medium.com" target = "#"><img class = "media" src = "images/medium.png" onmouseover = "this.src='images/medium1.png'" 
                onmouseout = "this.src='images/medium.png'"></a>
        </div>
        <br><br>
        <div class = "wrapper">
        <div class = "menu">
            <a href = "index.html" class = "animation">About me</a>
            <a href = "skills.html" class = "animation">Skills</a> 
            <a href = "workexp.html" class = "animation">Work Experience</a> 
            <a href = "contact.html" class = "animation">Contact</a>           
        </div>
        <br><br>
        <div class = "content">
            <h2 style = "text-align: center;">Contact Us</h2>
            <form style = "text-align: center;" action="contactus.php" method="post">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name"><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <label for="email">Email ID</label><br>
                <input type="text" id="email" name="email"><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <label for="subject">Subject</label><br>
                <input type="text" id="subject" name="subject"><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <label for="message">Message</label><br>
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea><br><br><br><br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <input name="submit" type="submit" value="Send a Mail" /> <br>
                <a href = "Vijayalakshmi_Resume.pdf">See my Resume</a>
            </form>
                      
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
        </div>
        <br><br><br><br><br>
        <div class = "footer">
            <h3>Copyright by Vijayalakshmi</h3>
        </div>
       </div>
    </div>
    </body>
</html>