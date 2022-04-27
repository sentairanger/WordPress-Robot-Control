# WordPress-Robot-Control

## Introduction

This is a fun project that is an extension of the LAMP server tutorial provided by the Raspberry Pi Foundation which is located [here](https://projects.raspberrypi.org/en/projects/lamp-web-server-with-wordpress/0). This time I used a web page on my website hosted on my Web Server to control my robot Torvalds.

## Getting Started

The text file `webserver.txt` provides the updated instructions to install the needed packages for the web server. The LAMP server uses Apache for the web server, MySQL for the database and PHP to serve dynamic web pages. The Python code in the repository is used to control the direction of the robot. Make sure to move the Python code to the `/var/www/html` directory for this to work. I have also provided a `robots.php` file to create the buttons for robot control. 

To add PHP to Wordpress once you have installed everything you will need to add the XYZ PHP Code plugin. Go to Plugins and then search for XYZ PHP Code and then install it. Then go to the plugin and click on `Add New PHP Code Snippet`. Provide the title and then go to the PHP code I have provided, copy it and then paste. Then click on `Create`. To test this out first copy the Shortcode Snippet and then go to Pages and create a new Page. Add a title and then paste the Shortcode. Then make sure whatever robot you have is booted and then you need to SSH into the robot and enable pigpio with the command `sudo pigpiod`. Next, press the buttons and it should work. However, there will be an issue with permissions so be sure to update the permissions with the `sudo visudo` command and add this line: `www-data ALL=(ALL) NOPASSWD: ALL`. Warning: don't do this unless you know what you are doing. You can remove the permissions once you are done.

Update: I have added the `robot2.php` for continuous movement. However, there will be an issue after you run the robot. The issue is that the python commands will be in queue and won't recognize when they stopped. To resolve this you can use the `pkill` command and run `sudo pkill python`. This will terminate the queued Python commands. 

## Pictures

This is the screenshot of what the final result should look like

![Robot](https://github.com/sentairanger/WordPress-Robot-Control/blob/main/wordpress-robot.png)

This is the next screenshot with the continuous buttons

![robot](https://github.com/sentairanger/WordPress-Robot-Control/blob/main/wordpress-robot2.png)
