const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const connectDB = require('./config/db');
const eventRoutes = require('./routes/events');
const userRoutes = require('./routes/users'); 

const app = express();

// Middleware
app.use(cors());
app.use(bodyParser.json());

// Connect to MongoDB
connectDB();

// Use routes
app.use('/api/events', eventRoutes);
app.use('/api/users', userRoutes); 

module.exports = app;

