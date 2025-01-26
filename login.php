<?php
class LoginPage {
    public function renderLoginForm() {
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <title>Halaman Login</title>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background-color: #f0f2f5;
                    font-family: Arial, sans-serif;
                }
                .loading-container {
                    text-align: center;
                    padding: 20px;
                    background-color: white;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                }
                .loading-container input {
                    margin: 10px 0;
                    padding: 10px;
                    width: 250px;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                }
                .loading-container button {
                    background-color: #4CAF50;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: pointer;
                }
            </style>
        </head>
        <body>
            <div class="loading-container">
                <h2>Login</h2>
                <form action="cv.php" method="post">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <button type="submit">Masuk</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    }
}

// Render login form
$loginPage = new LoginPage();
$loginPage->renderLoginForm();
?>
