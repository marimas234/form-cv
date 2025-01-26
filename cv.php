<?php
class CVPage {
    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function renderCV() {
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <title>CV Saya</title>
            <style>
                @keyframes slideFromLeft {
                    0% { 
                        opacity: 0;
                        transform: translateX(-100%);
                    }
                    100% { 
                        opacity: 1;
                        transform: translateX(0);
                    }
                }

                body {
                    font-family: 'Arial', sans-serif;
                    max-width: 800px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #f4f4f4;
                }
                .cv-container {
                    background-color: white;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                }
                .section {
                    animation: slideFromLeft 1s ease-out;
                    opacity: 0;
                    animation-fill-mode: forwards;
                }
                .section:nth-child(2) { animation-delay: 0.2s; }
                .section:nth-child(3) { animation-delay: 0.4s; }
                .section:nth-child(4) { animation-delay: 0.6s; }
                .section:nth-child(5) { animation-delay: 0.8s; }

                .header {
                    text-align: center;
                    border-bottom: 2px solid #4CAF50;
                    padding-bottom: 20px;
                    animation: slideFromLeft 1s ease-out;
                }
                .skills {
                    display: flex;
                    justify-content: space-between;
                }
            </style>
        </head>
        <body>
            <div class="cv-container">
                <div class="header">
                    <h1>CV PRIBADI</h1>
                    <h3>Selamat Datang, <?php echo htmlspecialchars($this->username); ?>!</h3>
                </div>

                <div class="section">
                    <h2>Informasi Pribadi</h2>
                    <p><strong>Nama:</strong> Rahmad Hidayat</p>
                    <p><strong>Email:</strong> [rahmadhidayat6875@anda.com]</p>
                    <p><strong>Telepon:</strong> [083801290313]</p>
                </div>

                <div class="section">
                    <h2>Pendidikan</h2>
                    <p><strong>S1 Sistem Informasi</strong><br>
                    Universitas Sriwijaya, [2026]</p>
                </div>

                <div class="section">
                    <h2>Keahlian</h2>
                    <div class="skills">
                        <ul>
                            <li>PHP</li>
                            <li>HTML/CSS</li>
                            <li>JavaScript</li>
                        </ul>
                        <ul>
                            <li>Database MySQL</li>
                            <li>Laravel Framework</li>
                            <li>Git & Version Control</li>
                        </ul>
                    </div>
                </div>

                <div class="section">
                    <h2>Pengalaman Kerja</h2>
                    <p><strong>Web Developer</strong><br>
                    Pertamina, 2026</p>
                </div>
            </div>
        </body>
        </html>
        <?php
    }
}

// Proses login sederhana
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        $cvPage = new CVPage($username);
        $cvPage->renderCV();
    } else {
        echo "Username atau password tidak boleh kosong!";
    }
} else {
    header("Location: login.php");
    exit();
}
?>
