<!DOCTYPE html>
<html>
<head>
    <title>AJAX Callback Example</title>
</head>
<body>

<h2>AJAX Callback Function</h2>

<button onclick="loadData()">Load Data</button>

<p id="result"></p>

<script>

function loadData() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            showData(this.responseText);

        }

    };

    xhttp.open("GET", "data.txt", true);

    xhttp.send();
}


// Callback function
function showData(data) {

    document.getElementById("result").innerHTML = data;

}

</script>

</body>
</html>