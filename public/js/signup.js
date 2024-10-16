$(document).ready(() => {
    console.log("jquery is working");
  let signForm = $("#signup-form");

  signForm.on("submit", (event) => {
    event.preventDefault();
    let formData = new FormData(signForm[0]);

    $.ajax({
      url: "signup",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: (response) => {
        console.log(response, response.csrf_test_name);
        $('input[name="<?= csrf_token() ?>"]').val(response.csrf_test_name);
      },
      error: (error) => {
        console.log(error);
      },
    });
    console.log(formData);
  });
});