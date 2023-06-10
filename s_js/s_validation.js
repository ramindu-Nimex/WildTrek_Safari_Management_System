document.getElementById('login-form').addEventListener('submit', function(event) {
   var usernameInput = document.getElementById('userName');
   var passwordInput = document.getElementById('password');
 
   if (!userNameInput.value || !passwordInput.value) {
     event.preventDefault(); // Prevent form submission
     alert('Please fill in all the required fields.');
   }
 });

 function validateForm() {
   var x = document.forms["loginform"]["UserName"]["Password"].value;
   if (x == "") {
     alert("User name and password must be filled out");
     return false;
   }
 }
