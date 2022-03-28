<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HI Cal!</h1>
    <img src="https://c.tenor.com/E8K-oIs7yosAAAAC/milk-and-mocha-i-love-you.gif" alt="" srcset="">
    <h1>kamu sayang aku ga?</h1>
    <button id="btn_sayang" onclick="alert('Iloveyou jelek')">Sayang</button>
    <button id="btn_gamau" onclick="gasayang(this)" style="position: absolute;">enggak</button>

</body>
<script>
    function gasayang(id) {
        var sayang = document.getElementById('btn_sayang');
        var i = Math.floor(Math.random() * 300) + 1;
        var j = Math.floor(Math.random() * 100) + sayang.offsetTop;
        id.style.left = i + 'px';
        id.style.top = j + 'px';
    }
</script>

</html>
