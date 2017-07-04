/*function to validate password
* if password and password confirmation missmatch it returns error massage
*/
function validateForm() {
    var x = document.forms["register"]["password"].value;
    var y = document.forms["register"]["password_confirm"].value;
    if (x != y) {
        document.getElementById("warning").innerHTML ="Password do not match";
        return false;
    }
}
//add question 
function showMcq() {
   document.getElementById('mcqblade').style.display = "block";
}
function showParagraph() {
   document.getElementById('paragraph').style.display = "block";
}
function showText() {
   document.getElementById('text').style.display = "block";
}
function showSection() {
   document.getElementById('section').style.display = "block";
}
function showDate() {
   document.getElementById('date').style.display = "block";
}
function showDropdown() {
   document.getElementById('dropdown').style.display = "block";
}