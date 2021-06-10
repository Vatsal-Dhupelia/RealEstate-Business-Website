function valid() {
  var result = true;
  var name = document.getElementById("fname");
  var address = document.getElementById("add");
  var pin = document.getElementById("pcode");
  var district = document.getElementById("district");
  var city = document.getElementById("city");
  var state = document.getElementById("state");
  var Email = document.getElementById("Email");
  var phone = document.getElementById("phone");

  if (name.value.length == 0) {
    alert("Please enter your name!");
    result = false;
    return result;
  }
  if (address.value.length == 0) {
    alert("Please enter address of your property!");
    result = false;
    return result;
  }
  if (pin.value.length == 0) {
    alert("Please enter Postal Code!");
    result = false;
    return result;
  }
  if (district.value.length == 0) {
    alert("Please enter District!");
    result = false;
    return result;
  }
  if (city.value.length == 0) {
    alert("Please enter City!");
    result = false;
    return result;
  }
  if (state.value.length == 0) {
    alert("Please enter State!");
    result = false;
    return result;
  }
  if (Email.value.length == 0) {
    alert("Please enter your Email!");
    result = false;
    return result;
  }
  if (phone.value.length == 0) {
    alert("Please enter your Phone Number!");
    result = false;
    return result;
  }

  //email validation
  var atindex = Email.value.indexOf("@");
  var dotindex = Email.value.lastIndexOf(".");
  if (atindex < 1 || dotindex > Email.length - 2 || dotindex - atindex < 3) {
    alert("Enter valid Email address!");
    result = false;
    return result;
  }

  //phone num validation
  if (phone.value == NaN || phone.value.length != 10) {
    alert("Enter valid Mobile Number!");
    result = false;
    return result;
  }

  //pin code validation
  if (pin.value == NaN || pin.value.length != 6) {
    alert("Enter valid Postal code!");
    result = false;
    return result;
  }
  return result;
}
