<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contant="width=device=width, initial-scale=1.0">
        <title>Моя первая CMS</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                max-width: 800px;
                margin: 50px auto;
                padding: 20px;
                background-color: #f4f4f4;
            }
            .php-info {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Welcome to my first CMS</h1>
        <p>This is static texet written by HTML</p>

        <div class="php.info">
            <h2>And this is dynamic content from PHP:</h2>
            <?php
                echo "<p>Hello, I'm Server! Today is: <strong>" . date('d.m.Y.') . "</strong></p>";
                $serverMessage = "This message was generated and sent to your browser.";
                echo "<p>$serverMessage</p>";
            ?>
        </div>
    </body>
</html>