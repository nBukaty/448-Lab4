function Validate(form){
  var valid = true;
  //get the number of hats to order
  var wHat = form.wHat.value;
  var bHat = form.bHat.value;
  var gHat = form.gHat.value;

  //get the user info and shipping selection
  var username = form.username.value;
  var password = form.password.value;
  var shipping = form.sMethod.value;

  if(isNaN(wHat) || isNaN(bHat) || isNaN(gHat) || wHat < 0 || bHat < 0 || gHat < 0){
    valid = false;
    alert("please select valid product quantities");
  }
  
  if(wHat+bHat+gHat === 0){
    valid = false;
  }
  //this code adapted from http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
  var checkEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(!checkEmail.test(username)){
    valid = false;
    alert("Please enter a valid email address in the username field");
  }

  if(password === ""){
    valid = false;
    alert("Please enter a password");
  }
  return valid;
}
