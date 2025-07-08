const { MongoClient } = require('mongodb');

const uri = process.env.MONGODB_URI; // Store your connection string in Vercel environment variables
const dbName = 'portfolio';

module.exports = async (req, res) => {
  if (req.method !== 'POST') {
    res.status(405).json({ success: false, message: 'Method not allowed' });
    return;
  }

  const { name, email, subject, message } = req.body || {};

  // Validate
  if (!name || !email || !subject || !message) {
    res.status(400).json({ success: false, message: 'All fields are required.' });
    return;
  }
  if (!/^[^@]+@[^@]+\.[^@]+$/.test(email)) {
    res.status(400).json({ success: false, message: 'Invalid email address.' });
    return;
  }

  try {
    const client = await MongoClient.connect(uri, { useNewUrlParser: true, useUnifiedTopology: true });
    const db = client.db(dbName);
    const collection = db.collection('contacts');
    await collection.insertOne({
      name,
      email,
      subject,
      message,
      submitted_at: new Date()
    });
    await client.close();
    res.status(200).json({ success: true, message: 'Thank you for contacting me. I will contact you soon' });
  } catch (err) {
    res.status(500).json({ success: false, message: 'Failed to save your message.', error: err.message });
  }
}; 

