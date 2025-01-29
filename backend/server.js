const app = require('./app');
const mongoose = require('mongoose');
require('dotenv').config();

// Connect to MongoDB
const connectDB = require('./config/db');

connectDB();

// Start server
const PORT = process.env.PORT || 5000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
