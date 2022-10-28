const express = require('express')
const app = express();
const port = 3000;

let mongoose = require("mongoose");
let validator = require("validator");

require('dotenv').config()

mongoose.connect(process.env.MONGO_URI, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

app.use(express.static('public'));

app.listen(port, () => {
    console.log('Server is up and running')
})

app.get('/aleks', (req, res) => {
    res.send("aleks")
})