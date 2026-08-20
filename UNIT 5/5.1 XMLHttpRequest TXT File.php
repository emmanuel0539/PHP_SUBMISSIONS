<!DOCTYPE html>
<html>
<head>
    <title>AJAX - Retrieve TXT File</title>
</head>
<body>

<h2>AJAX Example</h2>

<button onclick="loadData()">Get Data</button>

<p id="result"></p>

<script>

function loadData() {

    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "data.txt", true);

    xhttp.send();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("result").innerHTML =
                this.responseText;

        }

    };

}

</script>

</body>
</html>