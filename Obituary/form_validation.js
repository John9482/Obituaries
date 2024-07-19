function validateForm() {
    // Get form elements
    var name = document.getElementById("name").value;
    var dob = document.getElementById("date_of_birth").value;
    var dod = document.getElementById("date_of_death").value;
    var content = document.getElementById("content").value;
    var author = document.getElementById("author").value;

    // Check if all fields are filled
    if (name == "" || date_of_birth == "" || date_of_death == "" || content == "" || author == "") {
        alert("All fields must be filled out");
        return false;
    }

    // Validate date of birth
    if (!isValidDate(date_of_birth)) {
        alert("Please enter a valid date of birth");
        return false;
    }

    // Validate date of death
    if (!isValidDate(date_of_death)) {
        alert("Please enter a valid date of death");
        return false;
    }

    // Additional custom validations can be added here

    return true;
}

function isValidDate(dateString) {
    var date = new Date(dateString);
    return !isNaN(date.getTime());
}

