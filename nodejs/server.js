var io = require('socket.io').listen(3000);
//var mongo = require("mongodb");
//var mongodbUri = "mongodb://127.0.0.1/tracker"
console.log('server started at port 3000');

var mysql      = require('mysql');




io.on('connection', function(socket){
  	console.log('a user connected');
  	socket.on('disconnect', function(){
		console.log('user disconnected');
  	});



  	socket.on("data_send", function(obj){

  		//console.log(new Date().getTime());
  		var connection = mysql.createConnection({
		  host     : 'localhost',
		  user     : 'root',
		  password : 'mysqlpassword',
		  database : 'rudrone'
		});
 		connection.connect(function(err){
			if(!err) {
			    console.log("Database is connected ... \n\n");  
			} else {
			    console.log("Error connecting database ... \n\n");  
			}
		});
  		var post = {lat: obj['lat'], lon: obj['lon'], device_id: obj['device_id'], datetime: parseInt(new Date().getTime().toString().substring(0, 10))}
  		connection.query('insert into locations SET ?', post, function(err, result) {
  			if (err) {
	            console.log(err.message);
	        } else {
	            console.log('data was inserted');    
	        }
  		});
  		connection.end();
		
	    //console.log(obj);
	});
     
});

