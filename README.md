# yForms v2.1
A wordpress plugin to create dynamic forms for your website

- Date created: 3 Jan 2023
- Updated: 20 June 2024
- Current Version: 2.1
- Author: Priyansh JS. Yadav

**What's New?**
  - Bug Fixes
  - Custom Redirect URL
  - Enhanced shortcode (Now have full control over your forms and yet feel like coding!)
  - New Fields (Gender and Age)

Steps to use:
1. Download the .ZIP file from https://github.com/intelkid7/yForms/ (Code -> Download .ZIP)
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
14. Here's an example of a simple shortcode - [y_forms fields="email, passcode" labels="Email, Password" display="table"] (Note that it is not necessary to write fields and labels as the same)
    - ##### NOTE: The fields need to be entered as they are. You can change the labels but changing the fields will result in errors. For more information on fields you can visit the Plugin information page in your admin sidebar
16. To save the details of the form to your database follow the below steps:
17. Login to PhpMyAdmin
18. Create a new database by the name "wordpress"
19. Create a new table in the database by the name "wp_user_data" by adding the following SQL command - "CREATE TABLE `wordpress`.`wp_user_data` (`email` VARCHAR(30) NOT NULL , `username` VARCHAR(30) NOT NULL , `age` INT NOT NULL , `gender` CHAR(1) NOT NULL , `mobile_number` INT(11) NOT NULL , `password` VARCHAR(16) NOT NULL ) ENGINE = InnoDB;"
20. Now you are all set for storing your user data in your database.

**Update 3.0 coming soon!**
