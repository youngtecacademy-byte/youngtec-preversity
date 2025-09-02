// server.js
const express = require('express');
const multer = require('multer');
const path = require('path');
const app = express();
const PORT = 5000;

// Storage settings
const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, 'uploads/'); // Ensure uploads/ folder exists
  },
  filename: (req, file, cb) => {
    cb(null, Date.now() + path.extname(file.originalname));
  }
});
const upload = multer({ storage });

// Handle assignment submission
app.post('/upload', upload.single('fileUpload'), (req, res) => {
  const { assignmentTitle, studentName, comments } = req.body;

  if (!req.file) {
    return res.status(400).send('No file uploaded.');
  }

  res.send(`
    <h2>✅ Assignment Submitted Successfully!</h2>
    <p><strong>Student:</strong> ${studentName}</p>
    <p><strong>Assignment:</strong> ${assignmentTitle}</p>
    <p><strong>File:</strong> ${req.file.filename}</p>
    <p><strong>Comments:</strong> ${comments || "None"}</p>
    <a href="/uploads/${req.file.filename}" download>📥 Download Uploaded File</a>
  `);
});

// Serve uploaded files
app.use('/uploads', express.static('uploads'));

// Start server
app.listen(PORT, () => console.log(`🚀 Server running on http://localhost:${PORT}`));
