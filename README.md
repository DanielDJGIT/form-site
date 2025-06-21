## 📝 Form Filling Website (No Database) with AWS CI/CD

This is a simple, elegant form-filling web app built with **HTML, CSS, and PHP**, deployed using **AWS CI/CD services**. Submitted form data is processed by PHP and displayed back to the user — **no database is used**.

---

## 🎯 Features

- 📄 HTML form with modern CSS styling
- ⚙️ PHP backend handles and displays submitted data
- 🚀 CI/CD using:
  - GitHub (source control)
  - AWS CodePipeline
  - AWS CodeBuild
  - AWS CodeDeploy
- 🌐 Hosted on Amazon EC2 with Apache

---

## 📁 Project Structure


---

## 💻 Demo

- Visit: `http://<your-ec2-public-ip>/index.html`
- Fill out your name and email
- You'll see a confirmation message showing your submission

---

## 💡 Technologies Used

| Layer        | Stack                  |
|--------------|------------------------|
| Frontend     | HTML + CSS             |
| Backend      | PHP (no DB)            |
| Server       | Amazon EC2 (Apache)    |
| CI/CD        | GitHub, CodePipeline, CodeBuild, CodeDeploy |
| Infra        | S3 for artifacts       |

---

## 🔧 AWS CI/CD Workflow

1. **Push code** to GitHub
2. **CodePipeline** detects changes and triggers build
3. **CodeBuild** packages the files
4. **S3** stores build artifacts
5. **CodeDeploy** deploys artifacts to EC2
6. Apache serves the application

---

## 🧾 Sample: `submit.php` Output

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    echo "<h2>Thank you for submitting your details!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>
