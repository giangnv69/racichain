<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png">
    <meta property="og:image" content="{{ __BASE_URL__ }}/img/logo.jpg">
    {{--<meta property="og:image:type" content="image/png">--}}
    {{--<meta property="og:image:width" content="1024">--}}
    {{--<meta property="og:image:height" content="1024">--}}
    <meta name="twitter:card" content="photo">
    <style>

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 400;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-devanagari-400-normal-478b3ab7.woff2') format("woff2"),url(/assets/poppins-devanagari-400-normal-aa135e25.woff) format("woff");
            unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 400;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-ext-400-normal-cb8bdeab.woff2') format("woff2"),url(/assets/poppins-latin-ext-400-normal-8090b590.woff) format("woff");
            unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 400;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-400-normal-7d93459d.woff2') format("woff2"),url(/assets/poppins-latin-400-normal-2db0a254.woff) format("woff");
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 500;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-devanagari-500-normal-721c714f.woff2') format("woff2"),url(/assets/poppins-devanagari-500-normal-bcd6da7c.woff) format("woff");
            unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 500;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-ext-500-normal-5f9d6298.woff2') format("woff2"),url(/assets/poppins-latin-ext-500-normal-bc24119c.woff) format("woff");
            unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 500;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-500-normal-cd36de20.woff2') format("woff2"),url(/assets/poppins-latin-500-normal-6f35fc59.woff) format("woff");
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 600;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-devanagari-600-normal-d036ece3.woff2') format("woff2"),url(/assets/poppins-devanagari-600-normal-f52c9cac.woff) format("woff");
            unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 600;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-ext-600-normal-9c15f7b0.woff2') format("woff2"),url(/assets/poppins-latin-ext-600-normal-77cfbe04.woff) format("woff");
            unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 600;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-600-normal-f4e80d9d.woff2') format("woff2"),url(/assets/poppins-latin-600-normal-90ae1c77.woff) format("woff");
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 700;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-devanagari-700-normal-6197a412.woff2') format("woff2"),url(/assets/poppins-devanagari-700-normal-5dd4bbb9.woff) format("woff");
            unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 700;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-ext-700-normal-4ce2c84c.woff2') format("woff2"),url(/assets/poppins-latin-ext-700-normal-7d00d48d.woff) format("woff");
            unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 700;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-700-normal-9338e65f.woff2') format("woff2"),url(/assets/poppins-latin-700-normal-630ac4e1.woff) format("woff");
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 800;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-devanagari-800-normal-41f4bb66.woff2') format("woff2"),url(/assets/poppins-devanagari-800-normal-1e93199b.woff) format("woff");
            unicode-range: U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 800;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-ext-800-normal-e1a48072.woff2') format("woff2"),url(/assets/poppins-latin-ext-800-normal-f92f180c.woff) format("woff");
            unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-display: swap;
            font-weight: 800;
            src: url('{{ __BASE_URL__ }}/fonts/poppins-latin-800-normal-60bf0aba.woff2') format("woff2"),url(/assets/poppins-latin-800-normal-993bd790.woff) format("woff");
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
        }
    </style>
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/slick-theme.min.css">
    <link rel="stylesheet" href="{{ __BASE_URL__ }}/css/home.css">
    <script src="public/js/app.js" defer></script>
    <link href="public/css/app.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body>
<div id="app">
