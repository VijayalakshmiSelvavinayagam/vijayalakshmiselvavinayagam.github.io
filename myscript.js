function sendMail() {
    var link = "vijayalakshmiselvavinayagam@gmail.com"
             + "?cc=myCCaddress@example.com"
             + "&subject=" + encodeURIComponent(document.getElementById('subject').value)
             + "&body=" + encodeURIComponent(document.getElementById('message').value)
    ;
    
    window.location.href = link;
}