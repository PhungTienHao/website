
<!DOCTYPE html>
<html>
<head>
    <title>Random Number Generator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>Random Number Generator</h1>
    <p>Click the button to generate a random number between 1 and 10:</p>
    <button id="generate-btn" onclick="generateNumber()">Generate</button>
    <p id="result"></p>
</div>
<style>
    <script>
    .container {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
    }

    h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    button {
        padding: 10px 20px;
        font-size: 24px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #3e8e41;
    }

    p {
        font-size: 24px;
        margin-top: 20px;
    }
</style>
<script>
    function generateNumber() {
        var min = 1;
        var max = 10;
        var random = Math.floor(Math.random() * (max - min + 1)) + min;
        document.getElementById("result").innerHTML = "Your random number is: " + random;
    }
</script>
</body>
</html>

