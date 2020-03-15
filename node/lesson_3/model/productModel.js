const fs = require('fs');
const path = require('path');

const p = path.join(
    path.dirname(process.mainModule.filename),
    'data',
    'items.json'
  );

const getProductsFromFile = cb => {
    fs.readFile(p, (err, fileContent) => {
      if (err) {
        cb([]);
      } else {
        cb(JSON.parse(fileContent));
      }
    });
  };

  module.exports = class Product {
    constructor(tags, imageUrl, price, name, description) {
      this.tags = tags;
      this.imageUrl = imageUrl;
      this.price = price;
      this.name = name;
      this.description = description;
    }
    static fetchAll(cb) {
      getProductsFromFile(cb);
    }
  }
  

