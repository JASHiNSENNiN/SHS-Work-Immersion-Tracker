import mymodule from "https://smtpjs.com/v3/smtp.js";

function sendEmail() {
  Email.send({
    SecureToken: "4e632808-d279-430d-95be-3160ff33cdc7",
    To: "aldeakel27@gmail.com",
    From: document.getElementById("email").value,
    Subject: "New Contact Form Enquiry",
    Body:
      "Name :" +
      document.getElementById("name").value +
      "<br> Email : " +
      document.getElementById("email").value +
      "<br> Message : " +
      document.getElementById("message").value,
  }).then((message) => alert(message));
}
