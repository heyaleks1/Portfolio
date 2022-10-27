const express = require('express')
const app = express();
const port = 3000;
const nodemailer = require("nodemailer");
const multiparty = require("multiparty");

app.use(express.static('public'));

app.listen(port, () => {
    console.log('Listening on port 3000')
})

app.route('/').get((req, res) => {
    res.sendFile(process.cwd() + "/index.html")
})

//get the form by its id
const form = document.getElementById("form"); 

//1.
const formEvent = form.addEventListener("submit", (event) => {
  event.preventDefault();

  //2.
  let mail = new FormData(form);

  //3.
  sendMail(mail);
})