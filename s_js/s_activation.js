function searchUsers() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mysearch");
  filter = input.value.toLowerCase();
  table = document.getElementById("usertable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    var found = false;

    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        if (txtValue.toLowerCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
    }

    if (found) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}

 function confirmDeactive() {
    let txt = "Are you sure to deactivate this account?";
   if(!txt){
    return false;
   }
  } 

