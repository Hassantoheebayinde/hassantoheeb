//Declaration of variables
    var http = require("http");
    var fs = require("fs");
    var body = "";

//Creation of server
    http.createServer(function(req, res){
    console.log(req, res);
    res.writeHead(200, { "Content-Type": "text/html"});

//Reading the html file
    fs.readFile('./index.html', function(err,data){
        if(err){
            res.writeHead(404);
        }
        else{
            res.write(data);
        }
        res.end();
    });

//creation of file
    fs.writeFile("storage_folder/message.txt", body, function(err){
        if(err) {
            throw err;
        }
        else{
            console.log("saved");
        }
    });

//writing to the file created
    req.on('data', function(data){
        body += data.toString();
    });
})
// Listening to port 3000
.listen(3000);