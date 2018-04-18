# IEEE at UCLA Main Website

[![JavaScript Style Guide](https://img.shields.io/badge/code_style-standard-brightgreen.svg)](https://standardjs.com)
[![styled with prettier](https://img.shields.io/badge/styled_with-prettier-ff69b4.svg)](https://github.com/prettier/prettier)

## Setting up a development environment

Clone repo: `git clone https://github.com/UCLA-IEEE/ieeebruins.com.git`  
Download [Node](https://nodejs.org/en/)  
Change into the directory and run `npm install` to install this project's dependencies

Download [MAMP](https://www.mamp.info/en/)  
Run MAMP, go to Preferences > Web Server and change the root directory
to point to this repo.  
Start the MAMP servers and visit `localhost:88888` (Mac) or
`localhost` (Windows) to view the website.

## Deployment

#### Deploying to development site

Run `make deploy-development` and input the password to the server

#### Deploying to production site

Run `make deploy-production` and input the password to the server
