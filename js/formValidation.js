function valid() {
  var result = true;
  var name = document.getElementById("name");
  var Email = document.getElementById("Email");
  var phone = document.getElementById("phone");
  var message = document.getElementById("message");
  if (name.value.length == 0) {
    alert("Please enter your name!");
    result = false;
    return result;
  }
  if (Email.value.length == 0) {
    alert("Please enter your Email!\nSo we can reach out you back:)");
    result = false;
    return result;
  }
  if (phone.value.length == 0) {
    alert("Please enter your Phone Number!\nSo we can reach out you back:)");
    result = false;
    return result;
  }
  if (message.value.length == 0) {
    alert("You haven't entered any message for us!");
    result = false;
    return result;
  }

  //email validation
  var atindex = Email.value.indexOf("@");
  var dotindex = Email.value.lastIndexOf(".");
  if (atindex < 1 || dotindex > Email.length - 2 || dotindex - atindex < 3) {
    alert("Enter valid Email address!");
    result = false;
  }

  //phone num validation
  if (phone.value == NaN || phone.value.length != 10) {
    alert("Enter valid Mobile Number!");
    result = false;
  }
  return result;
}
