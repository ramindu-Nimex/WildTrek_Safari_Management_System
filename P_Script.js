// P_Script.js
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
  header.classList.toggle("sticky", window.scrollY > 0);
});

window.addEventListener("pageshow", function(event) {
  var form = document.getElementById("myForm");
  if (event.persisted) {
    form.reset();
  }
});

function validateForm() {
  let FullName = document.forms["myForm"]["FullName"].value;
  let Email = document.forms["myForm"]["Email"].value;
  let BookingFor = document.forms["myForm"]["BookingFor"].value;
  let countR = document.forms["myForm"]["countR"].value;
  let countA = document.forms["myForm"]["countA"].value;
  let countC = document.forms["myForm"]["countC"].value;
  let CheckIntime = document.forms["myForm"]["CheckIntime"].value;
  let CheckOuttime = document.forms["myForm"]["CheckOuttime"].value;


  if (FullName === "") {
    alert("Full Name must be filled out");
    return false;
  }

  if (Email === "") {
    alert("Email must be filled out");
    return false;
  }

  if (BookingFor === "") {
    alert("Booking For must be filled out");
    return false;
  }

  if (countR === "") {
    alert("Room Type must be filled out");
    return false;
  }

  if (countA === "") {
    alert("No Of Adults must be filled out");
    return false;
  }

  if (countC === "") {
    alert("No Of Children must be filled out");
    return false;
  }

  if (CheckIntime === "") {
    alert("Check In time must be filled out");
    return false;
  }

  if (CheckOuttime === "") {
    alert("Check Out time must be filled out");
    return false;
  }
  if (!validateDates()) {
    alert("Check-out date cannot be earlier than check-in date");
    return false;
  }
return true;
}
function validateDates() {
  var checkInDate = new Date(document.getElementById("CheckIntime").value);
  var checkOutDate = new Date(document.getElementById("CheckOuttime").value);

  if (checkOutDate < checkInDate) {
    return false;
  }
  return true;
}



/*
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 0);
}
);

//clear form
window.addEventListener("pageshow", function(event) {
  var form = document.getElementById("myForm");
  if (event.persisted) {
    form.reset(); // Clear form fields if navigating back
  }
});



function validatemyForm() {
    // Get the values of the name and email fields
    let FullName = document.forms["myForm"]["FullName"].value;
    let Email = document.forms["myForm"]["Email"].value;
    let BookingFor = document.forms["myForm"]["BookingFor"].value;
    let countR = document.forms["myForm"]["countR"].value;
    let countA = document.forms["myForm"]["countA"].value;
    let countC = document.forms["myForm"]["countC"].value;
    let CheckIntime = document.forms["myForm"]["CheckIntime"].value;
    let CheckOuttime = document.forms["myForm"]["CheckOuttime"].value;
  
    // Perform validation
    if (FullName == "") {
        alert("Full Name must be filled out");
        return false;
    }
    
    if (Email == "") {
        alert("Email must be filled out");
        return false;
    }

    if (BookingFor == "") {
        alert("Booking For must be filled out");
        return false;
    }

    if (countR == "") {
      alert("Room Type must be filled out");
      return false;
    }

    if (countA == "") {
        alert("No Of Adults must be filled out");
        return false;
    }

    if (countC == "") {
        alert("No Of Children must be filled out");
        return false;
    }

    if (CheckIntime == "") {
        alert("Check In time must be filled out");
        return false;
    }

    if (CheckOuttime == "") {
        alert("Check Out time must be filled out");
        return false;
    }

    return true;
}


//Date Pick
function validateDates() {
  var checkInDate = new Date(document.getElementById("CheckIntime").value);
  var checkOutDate = new Date(document.getElementById("CheckOuttime").value);

  if (checkOutDate < checkInDate) {
    alert("Check-out date cannot be earlier than check-in date");
    return false;
  }

  return true;

}

//disable previous dates
var today = new Date().toISOString().slice(0, 16);

document.getElementsByName("CheckIntime")[0].min = today;
document.getElementsByName("CheckOuttime")[0].min = today;


//Room count

  var roomCount = document.getElementById("countR").value;
  var adultCount = document.getElementById("countA").value;
  
  if (roomCount < adultCount) {
    alert("The Bed count cannot be less than the number of adults.");
    return false;
  }
  
  return true;
*/

