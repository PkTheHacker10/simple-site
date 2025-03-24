# **LAMP Stack Learning Project Documentation**

## **1️⃣ Introduction**

### **Project Name:** *Simple LAMP Stack with Docker*

A beginner-friendly **LAMP (Linux, Apache, MySQL, PHP) stack** running inside Docker for learning and testing purposes. 

---

## **2️⃣ Project Structure**

```
.
├── docker-compose.yml
├── Dockerfile
├── README.md
└── simple-site
    ├── config
    │   ├── env.json
    │   └── mysite.conf
    ├── db                       # Folder that mounted for Database storage in host machine 
    |
    ├── libs
    │   └── __loader.php
    ├── scripts
    │   └── entry.sh
    └── src                      # Folder that mounted for src files in host machine to make it easy to edit. 
        ├── blog.php
        ├── __classes
        │   ├── _auth.class.php  # Handles authentication functions
        │   └── _db.class.php    # Handles database interactions
        ├── home.php
        ├── img                 
        │   ├── bg.jpg
        │   ├── blog1.jpg
        │   ├── blog2.jpg
        │   └── blog3.jpg
        ├── index.php
        ├── login.php
        ├── logo.svg
        ├── signup.php
        └── __templates         # Contains templates and can be included to other pages
            ├── alerts          
            │   ├── login-s-alert.php
            │   └── signup-s-alert.php
            ├── components
            │   ├── blog.php
            │   ├── footer.php
            │   ├── heading.php
            │   ├── nav.php
            │   └── not_found.php
            ├── index.php
            ├── login.php
            └── signup.php
```

---

## **3️⃣ Setup & Installation**

### **📌 Prerequisites**

- Docker & Docker Compose installed
- Basic understanding of PHP & MySQL

### **🚀 Steps to Run**

1. Clone the repository

   ```bash
   git clone https://github.com/PkTheHacker10/simple-site.git
   cd simple-site
   ```

2. Start the Docker containers

   ```bash
   sudo docker-compose up -d
   ```

3. Open the app in a browser

   ```
   http://localhost:80
   ```

4. To stop the containers

   ```bash
   sudo docker-compose down
   ```

---

## **4️⃣ Features**

✔ Dockerized LAMP stack\
✔ Modular PHP programming (`_auth.class.php`, `_db.class.php`)\
✔ Environment-based configuration (`env.json`)\
✔ Templatization using reusable components (`__templates/`)\
✔ Secure environment variable retrieval for database connection\
✔ Used Tailwindcss 

---

## **5️⃣ Configuration**

### **🔧 Environment Configuration (`config/env.json`)**

```json
{
  "database": {
    "servername": "database",
    "username": "root",
    "password": "example",
    "db": "lamp"
  }
}
```

---

## **6️⃣ Security Considerations**

⚠ **SQL Injection (SQLi)**: The project uses raw SQL queries, making it vulnerable to SQL Injection. Implement **prepared statements** to mitigate risks.
⚠ **Default Credentials**: The database uses a default root password (`example`). Change it to a strong password before deployment.
⚠ **Directory Listing**: Disable directory listing in Apache to prevent file exposure.
⚠ **Input Validation**: Sanitize and validate user inputs to prevent malicious attacks.

---

## **8️⃣Credits & License**  
- Author: **Pevinkumar A**  
- License: **MIT**  

---

### **🔥 Final Notes**  
This documentation provides a clear, structured **overview** of simple **LAMP project**, making it easier to understand, maintain, and share.This is only to make my learning as documented and i'm also not that much good developer but i can develop sites and im still learing ,so **if i need improments,issues or tips to make it more flexible ,reusable please let me know .It will help me to imporve myself**.Thank you   


