const express = require('express');
const path = require('path');

const app = express();

app.listen(8080, () => {
  console.log("app listening on port 8080")
});

app.get('/', (req, res) => {
  res.sendFile(path.resolve(`${__dirname}/index.html`));
})

app.get('/sharedobject', (req, res) => {
  res.sendFile(path.resolve(`${__dirname}/sharedobject-info.html`));
})

app.get('/shareddrive', (req, res) => {
  res.sendFile(path.resolve(`${__dirname}/shareddrive.html`));
})