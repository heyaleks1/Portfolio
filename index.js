const express = require('express')
const app = express();
const port = 3000;
const nodemailer = require("nodemailer");
const multiparty = require("multiparty");

app.use(express.static('public'));
app.use("/public", express.static(process.cwd() + "/public")); //make public static
app.listen(port, () => {
    console.log('Listening on port 3000')
})

app.route('/').get((req, res) => {
    res.sendFile(process.cwd() + "/public/index.html")
})
const transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    port: 587,
    auth: {
      user: "heyaleks22222@gmail.com",
      pass: "ayzdutcumameulem",
    },
  });

// verify connection configuration
transporter.verify(function (error, success) {
    if (error) {
      console.log(error);
    } else {
      console.log("Server is ready to take our messages");
    }
  });
  
  app.post("/send", (req, res) => {
    let form = new multiparty.Form();
    let data = {};
    form.parse(req, function (err, fields) {
      Object.keys(fields).forEach(function (property) {
        data[property] = fields[property].toString();
      });
      console.log(data);
      const mail = {
        sender: `${data.name} <${data.email}>`,
        to: "oceboosting@gmail.com", // receiver email,
        subject: "New form",
        text: `${data.name} <${data.email}> \n${data.message}`,
      };
      transporter.sendMail(mail, (err, data) => {
        if (err) {
          console.log(err);
          res.status(500).send("Something went wrong.");
        } else {
          res.status(200).send("Email successfully sent to recipient!");
        }
      });
    });
  });
  
  //Index page (static HTML)
  app.route("/").get(function (req, res) {
    res.sendFile(process.cwd() + "/index.html");
  });