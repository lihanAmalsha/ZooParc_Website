function validateVolunteerForm() {
  const fullName = document.getElementById("fullName").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const availability = document.getElementById("availability").value;
  const message = document.getElementById("message").value.trim();

  if (fullName === "") {
    alert("Full Name is required.");
    return false;
  }

  if (email === "") {
    alert("Email Address is required.");
    return false;
  } else if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (phone === "") {
    alert("Phone Number is required.");
    return false;
  } else if (!/^\d{10}$/.test(phone)) {
    alert("Please enter a valid 10-digit phone number.");
    return false;
  }

  if (availability === "") {
    alert("Please select your availability.");
    return false;
  }

  if (message === "") {
    alert("Please tell us why you want to volunteer.");
    return false;
  }

  alert("Thank you for signing up to volunteer with Zooparc!");
  // Optionally redirect to a thank you page
  return true;
}
