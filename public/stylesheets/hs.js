//initialize hs.js by adding <script>var eMail = "yourEmail@domain.com"; </script> to home page --> 
if(!eMail){
    //add owners email here if not adding in homepage
    var eMail = "";
}


var hsSubmitMessage = function () {
       
        
    if (!document.getElementById('hsName').value) {
        alert("Invalid Name");
        return;
    }
    if (!document.getElementById('email').value) {
        alert("Invalid email");
        return;
    }
    if (!document.getElementById('phone').value) {
        alert("Invalid phone");
        return;
    }
   
    if (!document.getElementById('subject').value) {
        alert("Invalid subject");
        return;
    }
    if (!document.getElementById('message').value) {
        alert("Invalid message");
        return;
    }

    var dataObj = {}
    dataObj['name'] = document.getElementById('hsName').value;
    dataObj['email'] = document.getElementById('email').value;
    dataObj['phone'] = document.getElementById('phone').value;
    dataObj['subject'] = document.getElementById('subject').value;
    dataObj['message'] = document.getElementById('message').value;



    //email form
    window.location.href = "mailto:" + eMail + "?subject=" + dataObj['subject'] + "&body=" + dataObj['message'];

};

var hsSubscribe = function () {
    window.location.href = "mailto:" + eMail + "?subject=Customer%20wants%20to%20subscribe!!!" + "&body=Please%20subscribe%20me%20to%20a%20newsletter!";  

}