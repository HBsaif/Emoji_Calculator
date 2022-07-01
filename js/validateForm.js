function validateForm() {
    // This function will check the input fields properly filled or not
    var num1 = document.forms["myForm"]["num1"].value;
    var num2 = document.forms["myForm"]["num2"].value;
    var operator = document.forms["myForm"]["operator"].value;

    if (num1 == "" || num2 == "" || operator == "null") {
        alert("Please enter the numbers and select operator correctly!");
        return false;
    }
}