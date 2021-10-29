<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-cale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<style>

</style>
<body>
    <div class="range">
        <div class="sliderValue">
            <span>100</span>
        </div>
        <div class="field">
            <div class="value left">0</div>
            <input type="range" min="0" max="200" value="100" step="1">
            <div class="value right">200</div>
        </div>
       
    </div>


    
    <script>
        const sliderValue = document.querySelector("span");
        const inputSlider = document.querySelector("input");
        inputSlider.oninput = (()=>{
            let value = inputSlider.value;
            sliderValue.textContent = value;
            sliderValue.style.left =(value/2) + "%";
            sliderValue.classList.add("show");
        });
        inputSlider.onblur = (()=>{
            sliderValue.classList.remove("show");
        });
    </script>
</body>
</html>