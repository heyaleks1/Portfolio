const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const taskSchema = new Schema({
    task:{
        type: String,
        required: true
    },
    category: {
        type: String,
        required: true
    }
    date: {
        type: Date,
        required: true
    }
})

const Task = mongoose.model('Task', taskSchema);
module.exports = Task;