function validateContactForm()
{
  var contactFormObj = document.getElementById("contactForm");
  var name = contactFormObj.name.value;
  var email = contactFormObj.email.value;
  var everythingOK = true;

  if (!validateName(name))
  {
    alert("Error: Invalid name.");
    everythingOK = false;
  }

  if (!validateEmail(email))
  {
    alert("Error: Invalid email.");
    everythingOK = false;
  }

  if (everythingOK)
  {
    alert("Message sent!")
    return true;
  }

  return false;
}



function validateName(name)
{
  var p = name.search(/^[-'\w\s]+$/);
  if (p != 0)
    return false;
  else
    return true;
}



function validateEmail(email)
{
  var p = email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
  if (p != 0)
    return false;
  else
    return true;
}
