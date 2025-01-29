const express = require('express');
const router = express.Router();
const User = require('../models/user');

// User registration
router.post('/register', async (req, res) => {
    const { username, password, email } = req.body;
    const user = new User({ username, password, email });

    try {
        const newUser = await user.save();
        res.status(201).json({ message: 'User registered', user: newUser });
    } catch (err) {
        res.status(400).json({ message: err.message });
    }
});

// User login
router.post('/login', async (req, res) => {
    const { username, password } = req.body;

    try {
        const user = await User.findOne({ username });
        if (!user) {
            return res.status(400).json({ message: 'Invalid credentials' });
        }

        const isMatch = await user.comparePassword(password);
        if (!isMatch) {
            return res.status(400).json({ message: 'Invalid credentials' });
        }

        res.json({ message: 'Login successful', user });
    } catch (err) {
        res.status(500).json({ message: err.message });
    }
});

// Export the router
module.exports = router;
