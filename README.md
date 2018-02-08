## CodeIgniter3.1-starter4

This project can be used as a starter for a webapp built with CodeIgniter 3.1.

This starter builds on [CodeIgniter3.1-starter3](https://github.com/jedi-academy/CodeIgniter3.1-starter3),
adding an entity model and enhancing the collection models to use it.

**controllers/Welcome.php** has been modified to set the name of the desired
view file as a *data* parameter, and to then invoke the inherited *render*
method to trigger presentation.

A view template is provided. The CSS has been extracted to an appropriate file
in the public folder. Styling could be improved by using a CSS framework, like
Bootstrap.

The **application/config/autoload.php** configuration has been modified
to preload the template parser library and the url helper.

Sessions have been enabled in this starter, using `/tmp` as the folder to store them in.

Configure your web server or virtual host so that your project's
document root maps to this **public** folder inside your project.

Team Agreement
-equally contribute 
-collaborate
-don't push to master
-bring up questions 
-remember to change the changelog
-turn your gpg sign on

