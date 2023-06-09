 function confirmDeactive() {
  let text = "Are you sure to deactivate the profile.";
  if (confirm(text) == true) {
    text = "Deactivated successfully";
  } else {
    text = "deactivation cacelled.";
  }
  document.getElementById("demo").innerHTML = text;
}   



