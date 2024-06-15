# yForms v2.0
A wordpress plugin to create dynamic forms for your website

Date created: 3 Jan 2023
Updated: 14 June 2024
Current Version: 2.0
Author: Priyansh JS. Yadav

Steps to use:
1. Download the .ZIP file from "https://github.com/intelkid7/yForms/"
2. Open WordPress
3. Go to plugins
4. Click on "Add Plugin"
5. Click on "Upload Plugin"
6. Upload the .ZIP file from your PC (generally the "Downloads" folder) to WordPress
7. Click on "Install" and you will be redirected to the "Activate Plugin" Page
8. Activate the plugin
9. Now you are set to use the plugin
10. To test it out go to Pages->Create New Page
11. Click on the '+' icon and then look out for the "shortcode [/]" option
12. Click on it and you shall be able to write a shortcode now
13. Insert the following shortcode - "[y_forms fields="fields, you, want, seperated, by, commas" labels="field, labels, you, want, seperated, by, commas" display_type="blocks/table"]"
14. Here's an example of a simple shortcode - [y_forms fields="email, username" labels="Email, Username" display="table"] (Note that it is not necessary to write fields and labels as the same)
15. To save the details of the form to your database follow the below steps:
16. Login to PhpMyAdmin
17. Create a new database by the name "wordpress"
18. Create a new table in the database by the name "wp_user_data" by adding the following SQL command - "CREATE TABLE `wordpress`.`wp_user_data` (`email` VARCHAR(30) NOT NULL , `username` VARCHAR(30) NOT NULL , `age` INT NOT NULL , `gender` CHAR(1) NOT NULL , `mobile_number` INT(11) NOT NULL , `password` VARCHAR(16) NOT NULL ) ENGINE = InnoDB;"
19. Now you are all set for storing your user data in your database.

**Update 3.0 coming soon!**
