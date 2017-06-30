# IEEE at UCLA

## Setting up a development environment with MAMP
The tool that I use to set up a local Apache/PHP server is called MAMP.  
Download it here: [MAMP](https://www.mamp.info/en/)  
No, you don't have to download MAMP Pro. Just download MAMP.

Download it, and run it. Within MAMP's settings, you can
specify which folder MAMP serves files from. The location you'll serve
from will probably look like: `~/ieeebruins.org`

Once you're started up MAMP and have it pointed to the correct project
directory, you can visit `localhost:8888` to view the website.

**Note:** You don't need a PHP server if you're only viewing HTML files.
PHP is only necessary to execute PHP code in PHP files.

## Development Cycle
Right now the **master** branch is protected, meaning you guys **can't push
to it** (you can definitely pull from it though). You guys will be
developing your features on your own individual branches. Name your
branches after you name (i.e. jeffrey) or the feature you're working on
(i.e. sponsors). Once you guys think your features are ready to be merged
into the master branch, you will go to Github, and make a **pull request**
for your branch to be merged to master. I will then approve the pull
request, SSH into our servers, and update the website.

**Fun Fact:** On Bluehost is a copy of the master branch. When I SSH into
our servers, I just do `git pull origin master` and the website pulls
all changes from the master branch.

## Planned File Structure

/ieeebruins.org  
-- /public  
----- /css  
----- /js  
----- /images  
----- favicon.ico  
-- /views  
----- /includes  
-------- navbar.html  
-------- footer.html  
----- about.php  
----- sponsors.php  
----- lab.php  
-- index.php  
-- README.md  
-- .gitignore  
-- .htaccess

**Note:** It's a modern standard to structure a website's files like
this - separating files into a /views and /public folder. Another reason
I chose to structure it this way is because it'll be easier to transform
our website to a node application, since node applications have the same
front end file structure.

# Style Guide
A style guide is necessary to ensure that we're all writing code that
is readable to each other, and someone else viewing our code. It also
prevents our code from getting out of hand  

These will be as close to modern standards as it can, just so you don't
think that I'm making you conform to my picky bullshit. That being said,
some of it will indeed be my picky bullshit.

## HTML

1. Always use single quotes for strings unless you **have to** use double
quotes.  
Example:  
`class='navbar'` instead of `class="navbar"`

2. Always 'close' tags, even if the element is just a single tag.  
Example:  
`<br />` instead of `<br>`  
`<input ... />` instead of
`<input ... >`  
`<meta ... />` instead of `<meta ... >`

## CSS

1. Brackets. Always put the left bracket on the same line, and not a
newline.  
Example:
```
// this
body {
  ...
}  
// instead of
body
{
  ...
}
```

## JavaScript

1. Always use ES6 syntax when you can. ES6 is a modern JS standard. Not the most recent, but getting extremely popular right now.  
Example:  
`let name = 'Jeffrey'` instead of `var name = 'Jeffrey'`  
`() => { ... }` or `(arguments) => { ... }` instead of `function ()
{ ... }` or `function (argument) { ... }` *when writing quick JS functions
or callback functions. These are called 'arrow' functions.*  
To be continued ...

2. Always use single quotes for strings unless you **have to** use double
quotes.  
Example:  
`let name = 'Jeffrey Chan'` instead of `let name = "Jeffrey Chan"`  
`let pickupLine = "Hey, let's get coffee" // single and double quotes`

3. Brackets. Always put the left bracket on the same line, and not a
newline.  
Example:
```
// this
function getName() {
  ...
}
// instead of
function getName()
{
  ...
}
```

# Training Notes

## Git and Github

##### What is Git
Git is a **version control system** that helps manages large software
projects. It tracks the changes we make to our code and stores them.
If we ever need to see our past changes, or go back to
a previous version of the project, Git does that for us and removes all
the hassle.

I personally like to think of Git as a tree of photos of your project.
When you need to save the changes you've made to your code, you "take a
picture of your project" at the time and "append it onto a tree
of changes". If you're ever feeling nostalgic, you can checkout an
older picture on the tree and view it.

And that's not far from the truth. Git is actually implemented as a tree -
it is a tree of commits. Commits are essentially snapshots of your code
and the changes you've made to it. If you can figure out how to append
new commits onto this tree, and checkout old commits on the tree, you've
essentially mastered Git.

##### What is Github
So Git essentially lets you build a tree with all the changes you've ever
made to your code. Why not put that tree onto a website and let others
download it and contribute to it? That's all Github really is - a place
where you can place your projects (and the tree of commits associated
with it), allowing others to download it, contribute to it, and push it
back onto the same platform. It allows developers to simultaneously work
on the same project, and also keep every developer's code consistent
with each other since they can all pull from Github, thus reducing the
huge hassle of making sure each developer has the most update version of
the code.

##### Example Commands
`git clone [*repoLocation]` is a command that lets you download
a repository for the first time from a remote location (such as Github).

`git status` is a command that provides some useful info on the current
status of your repository.

`git add` is a command that tells git which changes you want to add
to the next commit. Remember, you can think of a commit as a snapshot
of the changes you've made to your project. This command simply allows
you to choose which changes to put into the snapshot.

`git commit` is the command that forms a commit from the changes that
have been staged (added by `git add`). All commits have a long hash
associated with it, and a commit message that describes the contents of
the commit. You can think of the commit message as snapchat caption.

`git checkout -b [*branchName]` is the command that lets you create new
branches in your project. You'll all be creating your branches.

`git push` is the command that lets you push all your local commits
to a remote repository (like the one on Github). Pushing your changes
to Github would look something like `git push origin [*branchName]` to
push onto your respective branch.

`git pull` is the command that lets you pull and changes you *don't* have
on your local tree. You'll want to use this to make sure you're working
on the most recent version of the code, which may have been modified by
your fellow team mmembers.

## Our Back End Architecture

We currently use [Bluehost](https://www.bluehost.com/) for our hosting
service. It provides us with an Apache server, a MySQL database, and a
PHP ... engine?

##### What is a server?
Your browser (Chrome, Edge, Safari) is essentially a *client*. When you use
your browser to view a webpage (new.ieeebruins.com), your browser makes a
*request* to a *server*. A server is just a computer connected to the
internet that contains the webpage files you want to see. Your browser is
essentially requests to the server "Hey, can I see the index.html for
new.ieeebruins.com?" and the server will simply respond "Yeah, here you go."
and send your browser the HTML file to render. Such is a simple example of
the *HTTP protocol* that clients and servers perform to transfer files
across the internet to each other.

##### What is Apache
Basically server software that a computer runs so that they can serve files.

##### What is PHP
PHP is a preprocessor. You may have learned that when compiling C++, there's
a preprocessor module that goes through your code and replaces statements
like `#include<stdio.h>` with the actual code for the stdio.h library.
PHP essentially does just that. Before the index.php file is sent to your
browser it goes through the PHP engine. PHP goes through the file, executes
any PHP code it sees, and then the file can finally be sent to your browser
for viewing.

A quick example can be seen in our own index.php file. The line:  
`<?php include('./includes/navbar.html'); ?>`  
is ran by PHP before sent out from the server. It essentially replaces
itself with the navbar.html code that exists within the /includes folder.
Such is how we will append our navbar to each page on the website.

##### What is MySQL?
Not important right now.

## Front End vs Back End

##### What's the difference between front end and back end?
An quick way to think about it would be to think of the front end as
everything that *does* runs in the browser, and the back end as
everything that *doesn't*.  

**Front End:**  
HTML, CSS, and JavaScript are rendered and ran in the browser. Thus,
everything you write with these languages is front end.

**Back End:**  
Rails, Django, PHP, and node.js are frameworks for setting up a server,
and thus are not ran in the browser. Thus, they are back end languages or
frameworks.  
**Note:** JavaScript used in node.js is not considered front end.

**DevOps:**  
Honestly I'm still trying to figure out what this is myself.

# Extra

## An alternate way to start a PHP server (Optional)
Downloading MAMP means that you have PHP installed.  
Run `php -v` in your terminal/Git Bash view the version of your PHP.  
If you have PHP 5.4 or newer, you can actually use PHP to start a PHP
server.

`cd ~/ieeebruins.org // navigate to local repository`  
`php -S localhost:8000 // start PHP server at port 8000`  
Visit `localhost:8000` on your web browser to view the website
