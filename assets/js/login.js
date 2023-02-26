// UI variables
const form = document.querySelector("#form");
(email = document.querySelector("#email")),
  (password = document.querySelector("#password"));
// listen for submit
form.addEventListener("submit", (e) => {
  // prebent form from submitting
  e.preventDefault();

  // get input values
  const emailValue = email.value.trim(),
    passwordValue = password.value.trim();

  if (emailValue === "") {
    showError(email, "Email cannot be empty");
  } else if (!emailValidate(emailValue)) {
    showError(email, "Enter a correct email");
  } else {
    showSuccess(email);
  }

  if (passwordValue === "") {
    showError(password, "Password cannot be empty");
  } else {
    showSuccess(password);
  }
});

//  error
function showError(input, message) {
  const formControl = input.parentElement;
  formControl.className = "form-group error";
  formControl.querySelector(".small").innerText = message;
}

// display error
function displayError(message) {
  const div = document.createElement("div");
  div.className = "alert";
  div.innerText = message;
  const container = document.querySelector(".container");
  container.insertBefore(div, form);
}

// success
function showSuccess(input) {
  formControl = input.parentElement;
  formControl.className = "form-group success";
}

// email Validation
function emailValidate(emailVal) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(emailVal).toLowerCase());
}

$(document).ready(function () {
  $("form").submit(function (e) {
    e.preventDefault();
    const email = $("#email").val();
    const password = $("#password").val();
    const submit = $("#submit").val();

    $.ajax({
      type: "POST",
      url: "includes/login.inc.php",
      data: {
        email: email,
        password: password,
        submit: submit,
      },
      success: function (data, status, settings) {
        if (data[0]["user_role"] == "admin") {
          window.location = "admin/dashboard.php";
        } else if (data[0]["user_role"] == "user") {
          window.location = "watchlist.php";
        }
      },
    });
  });
});
