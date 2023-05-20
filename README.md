# Basic MVC Framework

This is a basic MVC `(Model-View-Controller) framework `built from scratch in PHP. The framework follows the MVC architectural pattern to organize and structure your PHP web application code.

# Features

Separation of concerns: The framework encourages a clear separation of concerns by dividing your application logic into models, views, and controllers.

`Routing`: The framework provides a routing mechanism that maps URLs to controller actions, allowing you to define custom routes and handle HTTP requests easily.
`Database Integration`: The framework supports integration with a database, allowing you to perform CRUD (Create, Read, Update, Delete) operations on your data using model classes.
...
To get started with the basic MVC framework, follow these steps:

`Clone the repository(fork the repo)`
Configure your web server (e.g., Apache) to point to the project's root directory.
Set up a database and update the database configuration in the config/database.php file.

Start building your application by creating models, views, and controllers within the designated directories.
Define initialize the route as you wish. check the `libraries/Core.php` file to map URLs to controller actions.
Access your application in a web browser and navigate to the defined routes to see the framework in action.

# Folder Structure

The folder structure of the basic MVC framework is as follows:

`app`: Contains the application code, including models, views, controllers, and other helpers.

`config`: Holds configuration files for the framework, such as database configuration and other settings.

`public`: The publicly accessible folder that serves as the entry point for your application.

`README.md`: This file, providing an overview and instructions for the basic MVC framework.

`Contributions`
Contributions to the basic MVC framework are welcome! If you find any issues, have suggestions for improvements, or would like to add new features, feel free to open an issue or submit a pull request.

`Acknowledgements`
This basic MVC framework was inspired by various PHP frameworks and follows best practices in MVC architecture and PHP development.

# Note

It is important to visit the `.htaccess` in the public folder and change the `RewriteBase` to your specific `folder/public`
