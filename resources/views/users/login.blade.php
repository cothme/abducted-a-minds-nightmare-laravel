<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link href="{{asset('js/navbar.js')}}">
    <style type="text/css">
        @font-face {
            font-family: AileronLight;
            src: url('{{asset('/fonts/Aileron-Light.woff2')}}');
        }
        @font-face{
            font-family: Noto Sans JP;
            src: url('{{asset('/fonts/NotoSansJP-VariableFont_wght.ttf')}}');
            font-weight: 300;
        }
        </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        abductedblack: "#212529",
                        abductedpink: "#C63D65",
                        abducteddarkpink: "#803047",
                        abducteddarkerpink: "#45232D",
                    },
                    screens: {
                        'xsm': '375px',
                    },
                    fontFamily: {
                        sans: ['AileronLight']
                    },
                    backgroundImage: {
                        'hero-pattern': "url('/img/hero-pattern.svg')",
                    },
                },    
            },
        };
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Mind's Nightmare</title>
</head>
<body>
    
</body>