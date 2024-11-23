function validateLoginForm() {
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  if (email === "") {
    alert("Email Address is required.");
    return false;
  } else if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (password === "") {
    alert("Password is required.");
    return false;
  } else if (password.length < 8) {
    alert("Password should be at least 8 characters long.");
    return false;
  }

  alert("Login successful!");
  // Redirect to memberEvents.html after successful registration
  // window.location.href = "memberEvents.html";
  return false; // Prevent form from submitting traditionally
}
