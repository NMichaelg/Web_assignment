// Function to toggle between Login and Register forms
function toggleForm(formType) {
  const loginForm = document.getElementById("login-form");
  const registerForm = document.getElementById("register-form");

  if (formType === "login") {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
  } else {
    loginForm.style.display = "none";
    registerForm.style.display = "block";
  }
}

// Validate login form data
document
  .getElementById("submit-login")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (!username || !password) {
      alert("Please fill in all fields.");
    } else {
      alert("Login Successful!");
      // Here, you can add actual login handling (e.g., send data to server)
    }
  });

// Validate register form data
document
  .querySelector("#register-form form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const newUsername = document.getElementById("new-username").value;
    const newPassword = document.getElementById("new-password").value;
    const email = document.getElementById("email").value;

    if (!newUsername || !newPassword || !email) {
      alert("Please fill in all fields.");
    } else if (!validateEmail(email)) {
      alert("Please enter a valid email address.");
    } else {
      alert("Registration Successful!");
      toggleForm("login");
    }
  });

// Email validation helper function
function validateEmail(email) {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(String(email).toLowerCase());
}

function init() {}
// Initialize with login form visible
toggleForm("login");
