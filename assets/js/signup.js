// UI variables
const form = document.querySelector("#form");
(nameinput = document.querySelector("#name")),
  (username = document.querySelector("#username")),
  (email = document.querySelector("#email")),
  (password = document.querySelector("#password")),
  (password2 = document.querySelector("#password2")),
  (submit = document.querySelector("#submit"));

// listen for submit
form.addEventListener("submit", (e) => {
  // prebent form from submitting
  e.preventDefault();

  // console.log(username.value);
  // console.log(email.value);
  // console.log(password.value);
  // console.log(password2.value);

  // get input values
  const usernameValue = username.value.trim(),
    emailValue = email.value.trim(),
    nameValue = nameinput.value,
    passwordValue = password.value.trim(),
    password2Value = password2.value.trim();

  if (usernameValue === "") {
    showError(username, "Username cannot be empty");
  } else {
    showSuccess(username);
  }
  if (nameValue === "") {
    showError(nameinput, "name cannot be empty");
  } else {
    showSuccess(nameinput);
  }

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

  if (password2Value === "") {
    showError(password2, "Password cannot be empty");
  } else if (password2Value !== passwordValue) {
    showError(password2, "Password do not match");
  } else {
    showSuccess(password2);
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
// getting data from html form using ajax
$(document).ready(function () {
  $("form").submit(function (e) {
    e.preventDefault();
    const name = $("#name").val();
    const email = $("#email").val();
    const username = $("#username").val();
    const password = $("#password").val();
    const password2 = $("#password2").val();
    const submit = $("#submit").val();

    $.ajax({
      type: "POST",
      url: "includes/signup.inc.php",
      data: {
        username: username,
        email: email,
        name: name,
        password: password,
        password2: password2,
        submit: submit,
      },
      success: function (response) {
        console.log("success");
      },
    });
  });
});
