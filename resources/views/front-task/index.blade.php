<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="main">
    <div class="header">
        <nav>
            <div class="item">
                <a href="#first" class="btn btn-success item">Первый</a>
            </div>
            <div class="item fill-width">
                <input type="text" class="form-control item">
                <a href="#search" class="btn btn-success item">Перейти</a>
            </div>
            <div class="item">
                <a href="#last" class="btn btn-success item">Последний</a>
            </div>
        </nav>
    </div>
    <div class="content">
        <div id="cardContainer"></div>
    </div>
</div>
</body>
<script>
    class Storage {
        constructor() {
            this.stringsArray = [];
        }

        init() {
            this.wait(1000);
            for (let i = 0; i < 501; i++) {
                this.stringsArray.push((Math.random() + 1).toString(36).substring(7));
            }
            this.wait(1000);
        }

        get() {
            return this.stringsArray
        }

        wait(ms) {
            let current_date = Date.now();
            while (current_date + ms > Date.now()) {
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const firstPost = new Storage();
        firstPost.init();
        let ar = firstPost.get()
        let html = '';
        for (let i = 1; i < ar.length; i++) {
            let index = i;
            if (i === 1) {
                index = 'first';
            } else if (i === ar.length - 1) {
                index = 'last';
            }
            html += '<p id="' + index + '">' + i + ') ' + ar[i] + '</p>';
        }
        document.getElementById('cardContainer').innerHTML += html;

        $('a').on('click', function () {
            let href = $(this).attr('href');
            if (href === '#search') {
                let valueInput = $('input').val();
                if (!valueInput) {
                    alert('Необходимо заполнить поле');
                } else {
                    href = '#' + valueInput;
                }
            }
            $('html, body').animate({
                scrollTop: $(href).offset().top - 40
            }, {
                duration: 370,
                easing: "linear"
            });
            return false;
        });

    }, false);
</script>
</html>
