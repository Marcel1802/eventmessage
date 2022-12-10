# Event banner + event management


## What is this project about?

I created a PHP script that returns an image, depending on the time of the day, the month and on if it is a special day like christmas or new years day as a server banner for my teamspeak server.  
I added the possibility to add text below the image by adding an entry to a MySQL / MariaDB database.
If the event created in the database will take place within the next 3 weeks, the text is displayed below the image.
The only possibility to add a new event was to connect to the database directly.

In this project, I will also add the possibility to manage the event entries in the database via a web app frontend.


## Example image for the server banner

This is what the image looks like
![text](docs/testimg-text.png)  


## Architecture

All components will run as docker containers

The components are / will be:

+ web server for the server banner (supports PHP)
+ Database for the event entries (I use MariaDB at the moment)
+ web server for the Angular frontend
+ Quarkus (Java) backend for the frontend requests
+ Keycloak auth (for the frontend and backend, using OpenID Connect)