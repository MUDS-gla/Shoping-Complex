function credit() {
    var x = document.getElementById("inumber");
    var a = document.getElementById("im");
    var b = document.getElementById("iy");
    var y = document.getElementById("icvv");
    if (x.value.length != 16) {
        alert("Enter valid Credit number");
        return false;
    }
    if (a.value.length != 2) {
        alert("Enter valid month number");
        return false;
    }
    if (b.value.length != 4) {
        alert("Enter valid year number");
        return false;
    }
    if (y.value.length != 3) {
        alert("Enter valid cvv number");
        return false;
    }

    return true;
}