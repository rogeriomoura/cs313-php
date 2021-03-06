const express = require('express');

const router = express.Router();

const products = [];

// /admin/add-product => GET
router.get('/add-product', (req, res, next) => {
  res.render('add-product', {
    pageTitle: 'Add Product',
    path: '/admin/add-product',
    formsCSS: true,
    productCSS: true,
    activeAddProduct: true
  });
});

// /admin/add-product => POST
router.post('/add-product', (req, res, next) => {
  console.log(req.body);
  products.push({ title: req.body.title, summary: req.body.summary });
  console.log(products);
  res.redirect('/');
});

exports.routes = router;
exports.products = products; // exporting to the sop.js file to be displayed on the screen
