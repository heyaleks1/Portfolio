const nodemailer = require('nodemailer');
let mailTransporter = nodemailer.createTransport({
    service: "gmail",
    auth:{
        user: "heyaleks22222@gmail.com",
        pass: "ayzdutcumameulem"
    }
})

send();

async function send() {
    const result = await transporter.sendMail({
        from: "heyaleks22222@gmail.com",
        to: "oceboosting@gmail.com",
        subject: "Form submission",
        text: "Test"
    });

    console.log(JSON.stringify(result, null, 4));
}