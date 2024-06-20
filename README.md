# yForms v2.1.1
A wordpress plugin to create dynamic forms for your website

- Date created: 3 Jan 2023
- Updated: 20 June 2024
- Current Version: 2.2
- Author: Priyansh JS. Yadav

**What's New?**
  - Bug Fixes
  - About & Instructions Page
  - Custom Redirect URL
  - Custom Database Name
  - Custom Table Name
  - Enhanced shortcode (Now have full control over your forms and yet feel like coding!)
  - New Fields (Gender and Age)

### Steps to use:
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
17. Head over to the "yForms Settings" tab in the WordPress side menu
18. Enter the "Redirect URL". This is the URL you want the user to redirect to after clicking the submit button
19. Enter the name of your database you want to store data into.
    - ##### NOTE: The database should exist in your PhpMyAdmin
20. Enter the table name where you want to store your data into.
    - ##### NOTE: You don't need to create a table, it will be created on its own. It is recommanded to use a new table name
21. Hit the "Save Changes" button and you are ready to go!
22. You can head over to the "About & Instructions" section to know more about the shortcodes

### Steps to clone and customize
##### NOTE: This tutorial assumes that you have WordPress installed in your local environment
1. Clone the repository in your the folder you have your WordPress installation under "wp-content/plugins/"
   ```
   git clone https://github.com/intelkid7/yForms.git
   ```
2. Open the repository folder inside a code editor (Example: Visual Studio Code)
3. Open WordPress admin dashboard
4. Go to the Plugins tab
5. You will be able to see the plugin there
6. That's it! Now you can use & customize the plugin the way you want

**Update 3.0 coming soon!**
