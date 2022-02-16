# Form_sanitizer
2 functions which work together to sanitize the the information from a form from SQL_Inyection.

## How to use the 2 functions
Once you copied the functions to your php site just run the 'SQLProtection' function with the information you've aquired from the form and the function will return an array of this same information sanitized so you can place the elements of the variable into a query something like this:

* $_POST=SQLProtection($_POST);
