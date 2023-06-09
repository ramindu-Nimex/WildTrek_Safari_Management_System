function myFunction() {
    var txt;
    if (confirm("Are you sure?Do You want to DELETE?")) {
      txt = "You pressed OK!";
    } else {
      txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
  }