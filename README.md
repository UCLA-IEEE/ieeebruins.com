# IEEE at UCLA

## Setting up a Local PHP Server with MAMP
The tool that I use to set up a local PHP server is called MAMP.  
You can download it here: [MAMP](https://www.mamp.info/en/)  
No, you do not have to download MAMP Pro. Just download MAMP.  
Basically you can download it, and run it. Within MAMP's settings, you can
choose which folder MAMP serves files from.  
Once you're started up MAMP and have it pointed to the correct project
directory, you can visit `localhost:8000` or something and view the website.

## A possibly better way to start a local PHP server... with just PHP
For some reason my MAMP won't start it's Apache server anymore... which means
I can't view the website and develop on my computer. Luckily I found a possibly
better and lighter way of starting a PHP server - just use PHP itself.  

Downloading MAMP means that you have PHP  
To confirm, I ran `php -v` to get the version # of PHP and it actually returned
something so that I knew I had PHP installed.  
If you have PHP 5.4 or newer, you can actually use PHP itself to start a PHP
server. The commands to run would look something like this:  

`cd ~/ieeebruins.org // navigate to local repository`  
`php -S localhost:8000 // start PHP server at port 8000`  
Visit `localhost:8000` on your web browser (chrome) to view the website
