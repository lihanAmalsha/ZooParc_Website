const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const submitButton = document.getElementById("submit");

submitButton.onclick = function () {
  if (emailInput.value == "admin" && passwordInput.value == "admin123") {
    alert("LOGIN INTO THE ADMIN PANEL");
    window.location.href = "adminpanel.php";
  } else {
    alert("Invalid email or password");
  }
};
