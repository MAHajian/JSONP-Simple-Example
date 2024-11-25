<?php
exit('<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSONP</title>
</head>
<body>
    <h1>JSONP Practice</h1>
    <span id="output"></span><br>
    <button onclick="get()" style="margin-top: 10">Get</button>
    <script>
        function get() {
            const script = document.createElement("script")
            script.src = "http://127.0.0.1:9091/jsonp.php"
            document.body.appendChild(script)
        }

        function updateDOM(obj) {
            document.getElementById("output").innerHTML = `Name: ${obj.name}`;
            alert(`Welcome ${obj.username}!`)
        }
    </script>
</body>
</html>');
?>