<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 id="text"></h1>


<button id="start">start</button>
<button id="stop">stop</button>
</body>

<script>
    let element = document.getElementById("text");
    const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
    recognition.lang = "en-US";
    recognition.continuous = true;

    document.getElementById("start").onclick = () => recognition.start();
    document.getElementById("stop").onclick = () => recognition.stop();

    recognition.onresult = (event) => {
        for (const result of event.results){
            element.innerText = result[0].transcript;
        }
    }
</script>
</html>