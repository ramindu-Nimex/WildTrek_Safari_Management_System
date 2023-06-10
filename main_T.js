function searchTable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("mySection");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];

      if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
          } else {
              tr[i].style.display = "none";
          }
      }
  }
}



function validateForm() {
    var adminId = document.getElementsByName("admin_Id_T")[0].value;
    var packageType = document.querySelector('input[name="Package_Type_T"]:checked').value;
  var roomClass = document.querySelector('select[name="Room_Class_Id_T"]').value;

    if (!validateAdminId(adminId)) {
      alert("Invalid Admin ID. Admin ID must be 5 characters long and start with a capital letter.");
      return false;
    }

    if (packageType === 'LUXURY' && !roomClass.startsWith('D')) {
        alert("You can only select room classes starting with 'Deluxe' for Luxury packages.");
        return false;
      }
    if (packageType === 'Family' && !roomClass.startsWith('S')) {
        alert("You can only select room classes starting with 'Standard' for Luxury packages.");
        return false;
      }
    if (packageType === 'Couple' && !roomClass.startsWith('L')) {
        alert("You can only select room classes starting with 'Lodge' for Luxury packages.");
        return false;
      }
    if (packageType === 'Adventure' && !roomClass.startsWith('T')) {
        alert("You can only select room classes starting with 'Tree House' for Luxury packages.");
        return false;
      }

 

    return true;
  }

  function validateAdminId(adminId) {
    
    if (adminId.length !== 5) {
      return false;
    }
    if (adminId.charAt(0) !== adminId.charAt(0).toUpperCase()) {
      return false;
    }
    return true;
  }
  
  

  