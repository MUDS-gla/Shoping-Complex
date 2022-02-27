function validation() {
    var x = document.getElementById("ipincode");
    if (x.value.length != 6) {
        alert("please enter valid pincode");
        return (false);
    }
    var a = document.getElementById("ipassword");
    var b = document.getElementById("icpassword");

    if (a.value != b.value) {
        alert("Please correctly confirm the password");
        return (false);
    }

}

function ale(){
    alert("duplicate entries");
}