export function loginVerify() {
  console.log("jquery is working");

  $("#login-form").on("submit", (event) => {
    event.preventDefault();
    let formData = new FormData($("#login-form")[0]);
    $.ajax({
      url: "login",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: (response) => {
        let { success, message } = response;
        if (success) {
          window.location.href = "<?= base_url() ?>dashboard";
        } else {
          //refresh the csrf token for the hidden input
          $('input[name="<?= csrf_token() ?>"]').val(response.csrf_test_name);
          alert(message);
        }
      },
      error: (error) => {
        console.log(error);
      },
    });
  });
}

export function signupVerify() {
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
}
