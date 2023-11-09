const app = require('express')();

app.get('/', (req, res) => res.send('Hi'));

module.exports = () => {
  app.listen(3000);
}