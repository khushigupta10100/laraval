<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
				initial-scale=1.0">

    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- For font family Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href=
"https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Domestic Service</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(background1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(248, 250, 251, 0.936);
            background-blend-mode: multiply;
            background-position: center;
            color: #2b12b9;
        }

        h1,
        h3 {
            text-align: center;
            text-transform: uppercase;
        }

        h1 {
            position: relative;
            max-width: max-content;
            margin: 2rem auto 5rem auto;
        }

        h1::after {
            content: "";
            position: absolute;
            width: 75%;
            height: 5px;
            background-color: rgb(19, 26, 161);
            bottom: -2rem;
            left: 25px;
        }



        .services-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .service-card {
            cursor: pointer;
            width: 300px;
            margin: 20px;
            padding: 2rem 20px 20px 20px;
            text-align: center;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }



        .service-card:hover {
            box-shadow: 0 0 30px 0 rgb(22, 22, 186);
            transform: scale(1.1);
        }



        @media (max-width: 768px) {
            .service-card {
                width: 100%;
            }

        }

        img {
            display: block;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <h1>painter Service</h1>
    <div class="services-container">
        <div class="service-card">
            <div class="icon-container">

            </div>

            <img src="painter1.jpg" alt="Profile Photo">
            <h2>Name: Pitambar Sahu </h2>
            <p>Age: 30</p>
            <p>Gender: Male</p>
            <p>Type: Full time</p>
            <p>"Transforming spaces with precision and flair, our painting experts bring your vision to life,
                brushstroke by brushstroke."

            </p>


            <a href="booking" class="button">Book Service</a>
        </div>

        <div class="service-card">
            <div class="icon-container">

            </div>
            <img src="painter2.jpg" alt="Profile Photo">
            <h2>Name: Devanshu Misra</h2>
            <p>Age: 25</p>
            <p>Gender: Male</p>
            <p>Type: part time time</p>
            <p>"Transforming spaces with precision and flair, our painting experts bring your vision to life,
                brushstroke by brushstroke."

            </p>


            <a href="booking" class="button">Book Service</a>
        </div>

        <div class="service-card">
            <div class="icon-container">

            </div>
            <img src="painter3.jpg" alt="Profile Photo">
            <h2>Name: Tarun Bhagat</h2>
            <p>Age: 22</p>
            <p>Gender: Male</p>
            <p>Type: Full time</p>
            <p>"Transforming spaces with precision and flair, our painting experts bring your vision to life,
                brushstroke by brushstroke."

            </p>


            <a href="booking" class="button">Book Service</a>
        </div>


    </div>
</body>

</html>
