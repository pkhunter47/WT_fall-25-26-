<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Metadata -->
    <title>Protik Biswas - Computer Science Student</title>
    <meta name="author" content="Protik Biswas">
    <meta name="description" content="Personal portfolio webpage of Protik Biswas, a computer science student seeking internship opportunities.">
    <meta name="keywords" content="Protik Biswas, portfolio, computer science, internship, education, contact">
    
    <!-- Optional Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        main {
            max-width: 900px;
            margin: 20px auto;
            padding: 0 20px;
        }
        section {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        form button {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #555;
        }
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: #fff;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Header with navigation -->
    <header>
        <h1>Protik Biswas</h1>
        <nav>
            <a href="#bio">About Me</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Main content -->
    <main>
        <!-- Biography Section -->
        <section id="bio">
            <h2>About Me</h2>
            <p>Hello! I'm Protik Biswas, a computer science student passionate about web development, data analysis, and creating innovative solutions. I am currently seeking internship opportunities to apply my skills in real-world projects and contribute to dynamic teams.</p>
        </section>

        <!-- Education Section -->
        <section id="education">
            <h2>Education</h2>
            <table>
                <thead>
                    <tr>
                        <th>Degree</th>
                        <th>Institution</th>
                        <th>Year</th>
                        <th>GPA/Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bachelor of Science in Computer Science</td>
                        <td>XYZ University</td>
                        <td>2021 - Present</td>
                        <td>3.8/4.0</td>
                    </tr>
                    <tr>
                        <td>Higher Secondary Certificate</td>
                        <td>ABC College</td>
                        <td>2019 - 2021</td>
                        <td>85%</td>
                    </tr>
                    <tr>
                        <td>Secondary School Certificate</td>
                        <td>LMN High School</td>
                        <td>2017 - 2019</td>
                        <td>90%</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Contact Form Section -->
        <section id="contact">
            <h2>Contact Me</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message..." required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        &copy; 2025 Protik Biswas. All Rights Reserved.
    </footer>

</body>
</html>
