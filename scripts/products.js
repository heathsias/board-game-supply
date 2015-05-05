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

  // everything checks out. Display info as alert:
  // for each item: quantity, style, description, total item cost
  // total cost
  if (everythingOK)
  {
    /* display for each item: summary, cost, total cost
       then display: total cost
    */

    alert("Added to cart!");
    return true;
  }

  return false;
}



function validateQuantities(quantities)
{
  for (var i = 0; i < quantities.length; ++i)
  {
    if (isNaN(quantities[i]))
    {
      return false;
    }
  }
  return true;
}
