//menu.js
//Nathan Stengel and Heath Sias

var isShowing = false; /* boolean flag to check if the drop-down menu is showing */
var menuSelect = null;   /* var that stores a menu item */

//Show the drop-down menu with the given id, if it exists, and set flag
function show(id)
{
    hide(); /* hides the previous menuItem menu*/
    menuSelect = document.getElementById(id);
    if (menuSelect != null)
    {
        menuSelect.style.visibility = 'visible';
        isShowing = true;
    }
}

//Hide the currently visible drop-down menu and set flag
function hide()
{       
    if (isShowing) menuSelect.style.visibility = 'hidden';
    isShowing = false;
}
