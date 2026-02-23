<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Background Colors</title>
</head>
<body style="background-color: {{$spalva}};">
    <div>
        <h1>Irašykite norimą spalvą</h1>
        <p>Spalva, kurią įrašysite bus nuspalvintas naršyklės fonas</p>
        <input type="text" placeholder="Įrašykite spalvą">
        <button type="submit">Keisk spalvą</button>
    </div>
    <script>
        const bodyTag = document.querySelector('body');
        const colorInput = document.querySelector('input');
        const colorBtn = document.querySelector('button');

        const changeBgColor = _ => {

            if (colorInput.value == null) {
                const warning = document.createElement('p');
                warning.textContent = 'Nėra tokios spalvos';
                bodyTag.append(warning);

            }

            bodyTag.style.backgroundColor = colorInput.value;
        };

        colorBtn.addEventListener('click', changeBgColor);
    </script>
</body>
</html>