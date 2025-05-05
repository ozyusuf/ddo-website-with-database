# Guestbook Web Application

This is a simple PHP-based guestbook application that allows users to submit their name and a message, which are stored in a MySQL database and displayed on the homepage.

## 🚀 Features

- Visitors can submit their name and a message
- Messages are saved to a MySQL database
- All entries are displayed on the homepage
- Simple and clean UI with custom CSS

## 📂 Project Structure

```
guestbook/
├── config.php         # Database configuration file
├── index.php          # Main page with form and message list
├── save.php           # Handles form submission and saves data
└── css/
    └── style.css      # Stylesheet for the UI
```

## 🛠️ Setup Instructions

1. **Clone the repository or copy the files:**
   ```bash
   git clone https://github.com/your-username/ddo-website-with-database.git
   ```

2. **Create the database:**
   - Set up a MySQL database named `guestbook` (or modify the name in `config.php`).
   - Create a table using the following SQL:
     ```sql
     CREATE TABLE messages (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         message TEXT NOT NULL,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

3. **Configure database access:**
   - Edit `config.php` and update your database username, password, and host if needed.

4. **Run the app:**
   - Use a local server like XAMPP, WAMP, or MAMP and open `index.php` in the browser.

## 🧰 Technologies Used

- PHP
- MySQL
- HTML/CSS

## ⚠️ Notes

- This is a basic application intended for learning purposes.
- No input validation or protection against SQL injection is included. Use prepared statements and input sanitization for production environments.

## 📬 Contact

For questions or feedback, feel free to reach out via GitHub.

