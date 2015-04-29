function addProduct(product)
{
  var productFormObj = document.getElementById(product);
  var size = productFormObj.size.options[productFormObj.size.selectedIndex].text;
  var quantity = productFormObj.quantity.value;
  var everythingOK = true;

  if (!validateQuantity(quantity))
  {
    alert("Error: Invalid quantity.");
    everythingOK = false;
  }

  if (everythingOK)
  {
    alert("Added to cart!");
    return true;
  }

  return false;
}



function validateQuantity(quantity)
{
  if (quantity.length > 0)
    return !isNaN(quantity);
  return false;
}
