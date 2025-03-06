function validate(event) {
    const password = document.getElementById("password");
    if (password.value.length < 8) {
        alert("Password must be at least 8 characters long");
        event.preventDefault();
    }
}