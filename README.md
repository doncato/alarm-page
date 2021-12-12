# alarm-page
A simple Sci-Fi-like alarm animation Web-page purely written in HTML, CSS and PHP
This page is just a basic silly alarm animation. It just blinks red and black and stuff.
The idea for this is to be a fun little website which anyone can fullscreen for fun (maybe a prank?)
or maybe also as screen for video producer. Maybe you could also open this page if an application encouters
an error? Use this for whatever you want :). And if you can, host it publicly for others to enjoy. Thanks!

## Setup
Just throw this repo onto anything that runs PHP (e.g. a php development server, apache2, nginx, ...),
enter the url in any web browser and you should be got to go.

## Customization
You can also customize the content of the site via either
+ the url-parameters with GET Requests (e.g. `https://example.com/alarm?argument=value`)
+ the header information with POST Requests.

You can set these things:
+ speed (in milliseconds): `speed=3000`
+ head (the text displayed at the top): `header=DANGER!`
+ msg (the message in the center): `message=ALERT!`
+ footer (a message displayed in the bottom left): `footer=ERROR!`
+ disable slider (a slider animation at the very bottom): `no_slider=true`

**NOTES:**
+ As long as the no_slider argument has *any* value it will be interpreted as `true`
+ Text fields can be set to `none` (must be lowercase) to hide them completely
+ You could use this customization to also inject html code (e.g. make a link, etc.)

## Contributing
There are 3 ways to contribute:
1. Report Issues/Bugs/Suggestions to the `Issues` section on this project
2. To implement something new or make changes fork this repository, commit the changes and file a pull request with a description of the changes.
3. If you (want to) make the site publicly available add your url to the `hosts.txt` file and follow step 2.

Thanks.
