const Product = require("../model/productModel");

exports.getProducts = (req, res, next) => {
    Product.fetchAll(products => {
      res.render('shop', {
        prods: products,
        pageTitle: 'Shop',
        path: '/',
        hasProducts: products.length > 0,
        activeShop: true,
        productCSS: true
      });
    });
  };

  exports.getFilteredProducts = (req, res, next) => {
    const search = req.body.searchInput;
    Product.fetchAll(products => {
      res.render('shopFiltered', {
        prods: products,
        searchInput: search,
        pageTitle: 'Search Results',
        path: '/shopFiltered',
        hasProducts: products.length > 0,
        activeShop: true,
        productCSS: true
      });
    });
  };