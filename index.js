const express = require('express')
const app = express();
const port = 3000;

app.use(express.static('public'))

app.get('/', (req, res) => {
    res.send("hello world")
})

app.listen(port, () => {
    console.log('Hi aleks bitch')
})

app.get('/aleks', (req, res) => {
    let arr = [10, 2, 1, 5];
    let result = 0;
    for (let i = 0; i < arr.length-2; i++) {
        result = (arr[i] + arr[i+1]) - (arr[i+1] + arr[i+2]);
        console.log(result);
    }
    res.send(result);
})