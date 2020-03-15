const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');

const app = express();

const shopRoutes = require('./routes/shop');

app.set('view engine', 'ejs');
app.set('views', __dirname + '/views');

app.use(express.static(path.join(__dirname, 'public')));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(shopRoutes);

app.listen(3000);