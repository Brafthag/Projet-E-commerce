const http = require('http');
const url = require("url");
const querystring = require('querystring');
const EventEmitter = require('events').EventEmitter;


var server = http.createServer(function(req, res) {
  const page = url.parse(req.url).pathname;
  const params = querystring.parse(url.parse(req.url).query);
  const jeu = new EventEmitter();
  console.log(page);
  res.writeHead(200, {"Content-Type": "text/html"});
  res.write('<!DOCTYPE html>'+
  '<html>'+
  '    <head>'+
  '        <meta charset="utf-8" />'+
  '        <title>Ma page Node.js !</title>'+
  '    </head>'+ 
  '    <body>'+
  '     	<p>Voici un paragraphe <strong>HTML</strong> !</p>'+
  '    </body>'+
  '</html>')

  
  if (page == '/') {

    res.write('Vous êtes à l\'accueil, que puis-je pour vous ?');

  }

  else if (page == '/sous-sol') {

      res.write('Vous êtes dans la cave à vins, ces bouteilles sont à moi !');

  }

  else if (page == '/etage/1/chambre') {

      res.write('Hé ho, c\'est privé ici !');

  }

  else {
    res.writeHead(404, {"Content-Type": "text/html"});
    res.write("Cette page n'existe pas");
  }

  if ('prenom' in params && 'nom' in params) {
    res.write('Vous vous appelez ' + params['prenom'] + ' ' + params['nom']);
  }

  jeu.on('gameover', function(message){
    console.log(message);
  });

  jeu.emit('gameover', 'Vous avez perdu !');
  res.end();
});

server.on('close', function() { // On écoute l'évènement close
    console.log('Bye bye !');
})


server.listen(8080);
//server.close(); // 