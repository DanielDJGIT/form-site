# 📝 Stylish Form Filling Website with AWS CI/CD

This project is a simple and stylish form-filling website built with **HTML, CSS, and PHP**, deployed on **Amazon EC2** using a **CI/CD pipeline powered by AWS CodePipeline, CodeBuild, and CodeDeploy**. All submitted form data is stored in a **MySQL database**.

---

## 🌐 Live Preview

Visit: `http://<your-ec2-public-ip>/index.html`

---

## 🎯 Features

- ✨ Clean, modern UI with responsive CSS
- 🧾 Simple HTML form: Name and Email
- 📥 Submissions saved to MySQL database
- 🔁 Fully automated CI/CD pipeline via AWS
- ☁️ Hosted on Amazon EC2 with Apache server

---

## 🧱 Tech Stack

| Layer         | Technology                          |
|---------------|--------------------------------------|
| Frontend      | HTML + Custom CSS                   |
| Backend       | PHP                                 |
| Database      | MySQL                               |
| Web Server    | Apache on Amazon EC2                |
| Version Control | Git + GitHub                     |
| CI/CD         | AWS CodePipeline, CodeBuild, CodeDeploy |
| Storage       | Amazon S3 (artifact storage)        |

---

## 📁 Folder Structure

---

## 💡 Setup & Deployment

### 1. Prerequisites

- AWS account
- GitHub account
- EC2 instance (Amazon Linux 2)
- IAM roles:
  - `EC2CodeDeployRole`
  - `CodeDeployServiceRole`
  - `AWSCodePipelineServiceRole`
- S3 bucket for CodeBuild artifacts

---

### 2. Database Setup (MySQL)

```sql
CREATE DATABASE formdb;

USE formdb;

CREATE TABLE submissions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

---

✅ Ready to upload to GitHub  
✅ Follows best practices  
✅ Easy to modify and scale

Let me know if you’d like:
- PDF export  
- A dark mode version  
- A `Dockerfile` for container deployment  
- The same app using Node.js backend

I'm happy to help further!





