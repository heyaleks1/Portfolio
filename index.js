const express = require('express')
const app = express();
const port = 3000;

//start connecting to MongoDB Atlas database, not currently in use
/*let mongoose = require("mongoose");
let validator = require("validator");

require('dotenv').config()

mongoose.connect(process.env.MONGO_URI, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});
*/
//end connecting to database

app.use(express.static('public'));

app.listen(port, () => {
    console.log('Server is up and running')
})

app.get('/aleks', (req, res) => {
    res.send("aleks")
})