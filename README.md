# 🧾 Form Filling Website with AWS CI/CD and MySQL Database

This project is a simple HTML/PHP-based form filling website deployed on an EC2 instance using AWS CI/CD services: CodeCommit, CodeBuild, CodeDeploy, and CodePipeline. Submitted data is stored in a MySQL database on the same EC2 instance.

---

## 🌐 Tech Stack

- **Frontend**: HTML + CSS
- **Backend**: PHP
- **Database**: MySQL
- **CI/CD**: AWS CodeCommit + CodeBuild + CodeDeploy + CodePipeline
- **Server**: Apache (httpd)
- **OS**: Amazon Linux 2 (EC2)

-- Login to MySQL
mysql -u root -p

-- Create DB
CREATE DATABASE formdb;

-- Use it
USE formdb;

-- Create table
CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


---

🧾 Sample:  Output


![image](https://github.com/user-attachments/assets/ecda51e2-1a15-46e2-ba54-d7d846b89893)
![image](https://github.com/user-attachments/assets/ad2cf4a4-ff5b-496a-a58f-9cf71d80c391)

## 📁 Project Structure

```bash
form-app/
├── index.html          # Frontend form
├── submit.php          # Handles form submission & DB insert
├── style.css           # CSS styling
├── scripts/            # Optional bash scripts for CodeDeploy
│   ├── install_dependencies.sh
│   └── start_server.sh
├── appspec.yml         # CodeDeploy config
└── buildspec.yml       # CodeBuild config```




