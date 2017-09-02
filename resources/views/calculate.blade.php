<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unit Price Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/normalize.min.css">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background-color: #f5f8fa;
            font-size: 16px;
            color: #636b6f;
            font-family:
                -apple-system, system-ui, BlinkMacSystemFont, "Ubuntu",
                "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
            margin: 0 2rem;
        }
        main {
            margin-bottom: 2rem;
        }
        fieldset {
            -webkit-box-flex: 1;
                -ms-flex: 1;
                    flex: 1;
        }
        label {
            display: block;
        }
        input:not(:last-child) {
            margin-bottom: 1rem;
        }
        footer {
            text-align: center;
        }
        .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
        }
    </style>
</head>
<body>
<main>
    <h1>Do it</h1>
    <p>Use this to compare unit prices of two products, &amp; it&rsquo;s all done <mark>client side</mark>!</p>

    <form id="form">
        <div class="flex">
            <fieldset>
                <legend>Product 1</legend>

                <label for="units">Units in item (g, oz, mL)</label>
                <input type="number" name="item1[units]" id="units" min="0" placeholder="1000" required>

                <label for="price">Price</label>
                <input type="number" name="item1[price]" id="price" min="0" placeholder="20.99" step="0.01" required>
            </fieldset>
            <fieldset>
                <legend>Product 2</legend>

                <label for="units2">Units in item (g, oz, mL)</label>
                <input type="number" name="item2[units]" id="units2" min="0" placeholder="1000" required>

                <label for="price2">Price</label>
                <input type="number" name="item2[price]" id="price2" min="0" placeholder="20.00" step="0.01" required>
            </fieldset>
        </div>
        <button>Compute</button>
    </form>
    <div id="result"></div>
</main>
<footer>By <a href="https://github.com/CoryRay" target="_blank" rel="noopener">Cory Rodriguez</a></footer>
<script>
    'use strict';

    document.getElementById('form').addEventListener('submit', function(event) {
        event.preventDefault();

        const units  = document.getElementById('units').value;
        const price  = document.getElementById('price').value * 100;
        const units2 = document.getElementById('units2').value;
        const price2 = document.getElementById('price2').value * 100;

        // const REGEX = /\d+\.\d{2}/;

        const cpu1 = price / units / 100;
        const cpu2 = price2 / units2 / 100;

        const resultsContainer = document.getElementById('result');

        resultsContainer.innerHTML =
        `<p>Product 1 unit price is <mark>&#36;${cpu1}</mark>.</p>
         <p>Product 2 unit price is <mark>&#36;${cpu2}</mark>.</p>`;
    })
</script>
</body>
</html>
