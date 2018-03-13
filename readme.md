# How to run/test this application
Basic steps for installing and configuring application in your systerm 

Step 1

Copy the git repository address and clone it on your serve location var/www/html/
    
    git clone 'https://git_repository_address'
    sudo apt-get install nodejs

Step 2

Create one folder on your local directory and install npm using terminal commands.

    npm install

Step 3

Create helloworld.js file in your local folder/directory paste the bellow code on this file.
    
    var http = require("http");
   
    http.createServer(function (request, response) {
    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.end('Hello World\n');
    }).listen(8081);
    
    console.log('Server running at http://127.0.0.1:8081/');

Step 4

Open your terminal. Go to your local directory path. Execute/run the helloworld.js to start the server as follows 

    node helloworld.js
    
Step 5 

Check out your output.

    Server running at http://127.0.0.1:8081/
    
Go to the above ( http://127.0.0.1:8081/ ) ipaddress and you will get final output.
