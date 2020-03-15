const express = require('express');
const shopController = require('../controller/productController');
const router = express.Router();

router.get('/', shopController.getProducts);
router.post('/', shopController.getFilteredProducts);

module.exports = router;