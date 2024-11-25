<?php
exit('<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSONP</title>
</head>
<body>
    <h1>JSONP Practice</h1>
    <button id="get" onclick="get()">Get</button>
    <script>
        function get() {
            const script = document.createElement("script")
            script.src = "http://127.0.0.1:9091/jsonp.php"
            document.body.appendChild(script)
        }

        function updateDOM(obj) {
            const result = document.createElement("p");
            result.innerHTML = obj.name
            const parent = document.getElementById("get").parentNode
            const btn = document.getElementById("get");
            parent.insertBefore(result, btn);
            alert(`Welcome ${obj.username}!`);
            console.log(obj);
        }
    </script>
</body>
</html>');
?>