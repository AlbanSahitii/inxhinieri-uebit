$(document).ready(function () {
  $("form").submit(function (e) {
    e.preventDefault();
    const email = $("#email").val();
    const subject = $("#subject").val();
    $.ajax({
      type: "POST",
      url: "includes/contact.inc.php",
      data: {
        email: email,
        subject: subject,
      },
      success: function (response) {
        // setTimeout(1000);
        console.log("success");
      },
    });
  });
});
