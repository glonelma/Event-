const mongoose = require('mongoose');

const eventSchema = new mongoose.Schema({
    title: { type: String, required: true },
    description: { type: String, required: true },
    date: { type: Date, required: true },
    category: { type: String, enum: ['modeling', 'dance', 'music'], required: true },
    location: { type: String, required: true },
});

// Export the Event model
module.exports = mongoose.model('Event', eventSchema);
