const mongoose = require('mongoose')



const Staff = mongoose.Schema(
    {
        id : Number,
        name : String,
        address : String,
        phone_number : Number,
        position : String,
    }
)

module.exports = mongoose.model('Staff',Staff);