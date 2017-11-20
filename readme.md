Setting up MAMP (https://www.mamp.info/en/#controlcenter) by installing WordPress to it: https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP

Used this tutorial to learn PHP in 15 minutes:
https://www.youtube.com/watch?v=ZdP0KM49IVk
My tests for this tutorial is in the learning folder.

This is an exercise to learn to code PHP with MySQL. It allows users to view a database of cars, edit/delete certain cars with restrictions, and add new entries.

How to run it:
Fork and clone this repository
Open MAMP
Start servers
Open WebStart page
Go to main page: http://localhost:8888/
Click on the folder or go to: http://localhost:8888/automobile/ to see results

In MySQLi format, it's able to:
- show a list at automobile-list.php of all the cars,
- Have a link to edit a specific car when clicked on, takes you to automobile-edit.php
- Do form field validation on server side, make sure all fields are required and of appropriate types
- Form validation:
  - year > 1950
  - 5 < weight < 10
  - model (one of following): mercedes, audi, ford, honda, toyota, chevrolet (not case sensitive)
- add new column: sales_email, required, valid e-mail format

If I can at a later time:
- refactor code to MVC best practices
- add a search function
- add a reset database list to the prerecorded ones (without having to do so on Command Line)
- work on design with CSS

The first version does not use MVC best practices and can be found in the non-MVC folder.
The index.php now uses MVC best practices by drawing the Model, Controller, and Views from inside the MVC folder.
