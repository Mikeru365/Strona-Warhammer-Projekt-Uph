function przekieruj() {
    var select = document.getElementById("opcjeAdmina");
    var selectedOption = select.options[select.selectedIndex].value;
    window.location = selectedOption;
}
