function processProductForm()
{
  var productFormObj = document.getElementById('productForm');

  // get T-Shirt data
  var teeDescription = document.getElementById('teeDescription').innerHTML;
  var teeStyle = productFormObj.teeStyle.options[productFormObj.teeStyle.selectedIndex].text;
  var teePrice = document.getElementById("teePrice").innerHTML;
  var teeQuantity = productFormObj.teeQuantity.value;

  // get Travel mug data
  var mugDescription = document.getElementById("mugDescription").innerHTML;
  var mugStyle = productFormObj.mugStyle.options[productFormObj.mugStyle.selectedIndex].text;
  var mugPrice = document.getElementById("mugPrice").innerHTML;
  var mugQuantity = productFormObj.mugQuantity.value;

  // get Dice data
  var diceDescription = document.getElementById("diceDescription").innerHTML;
  var diceStyle = productFormObj.diceStyle.options[productFormObj.diceStyle.selectedIndex].text;
  var dicePrice = document.getElementById("dicePrice").innerHTML;
  var diceQuantity = productFormObj.diceQuantity.value;

  // get user data
  var name = productFormObj.name.value;
  var email = productFormObj.email.value;

  var descriptions = [teeDescription, mugDescription, diceDescription];
  var styles = [teeStyle, mugStyle, diceStyle];
  var prices = [teePrice, mugPrice, dicePrice];
  var quantities = [teeQuantity, mugQuantity, diceQuantity];

  // validate quantities
  var everythingOK = true;
  if (!validateQuantities(quantities))
  {
    alert("Error: Invalid quantity.");
    everythingOK = false;
  }

  // validate name
  else if (!validateName(name))
  {
    alert("Error: Invalid name.");
    everythingOK = false;
  }

  // validate email address
  else if (!validateEmail(email))
  {
    alert("Error: Invalid email address.");
    everythingOK = false;
  }

  // everything checks out. Display info as alert:
  // for each item: quantity, style, description, total item cost
  // total cost
  if (everythingOK)
  {
    var summaryMessage = "Place Order?\n----------------------------------------------------------------------";
    var orderTotal = 0.0;
    for (var i = 0; i < quantities.length; ++i)
    {
      if (quantities[i].length > 0 && quantities[i] > 0)
      {
        summaryMessage += "\n$" + (prices[i] * quantities[i]).toFixed(2) + "  " + quantities[i] + " x " + styles[i] + " " + descriptions[i] + "\n";
        orderTotal += (prices[i] * quantities[i]);
      }
    }
    summaryMessage += "----------------------------------------------------------------------\nOrder Total: $" + orderTotal.toFixed(2);
    return confirm(summaryMessage);
  }

  return false;
}



function validateQuantities(quantities)
{
  var numItems = 0;
  for (var i = 0; i < quantities.length; ++i)
  {
    if (isNaN(quantities[i]))
    {
      return false;
    }

    if (quantities[i].length > 0)
    {
      numItems++;
    }
  }
  return numItems > 0;
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
