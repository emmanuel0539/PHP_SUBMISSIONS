<!DOCTYPE html>
<html>
<head>
    <title>HTTP Header Information</title>
</head>
<body>

<h2>Header Information</h2>

<button onclick="getHeaders()">Get Headers</button>

<pre id="result"></pre>

<script>

function getHeaders() {

    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "data.txt", true);

    xhttp.send();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("result").innerHTML =
                this.getAllResponseHeaders();

        }

    };

}

</script>

</body>
</html>