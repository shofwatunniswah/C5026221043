<html>
    <head>
        <title>CSS</title>
        <link rel="stylesheet" href="styleT2.css">
        <style>
            body {
                color: blueviolet;
            }
            p, div{
                text-align: center;
            }
            .salam{
                font-size: larger;
                text-align: right;
                font-weight: bold;
                text-transform: uppercase;
            }
            .garisbawah{

                text-decoration: underline;
                color: black;
            }
        </style>
    </head>
    <body>
        <!--Inline CSS, digunakan jika hanya 1 bagian di halaman yang berbeda-->
        Halo <b style="
        color:#ef7b7b;
        text-decoration: underline;
        font-size: 24px;
        text-shadow: 2px 2px 4px rgb(240, 215, 215);
        ">apa</b> kabar?<br>
        <b style="
        color: aquamarine;
        font-size: 24 px;
        text-shadow: 2px 2px #ef7b7b;
        ">
            halo apa kabar?>
        </b>
        <!--Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="salam garisbawah">Halo apa kabar?</div>

        <!--External File, digunakan untuk global 1 situs-->
        <span class="sembunyi">Halo apa kabar?</sp san>
        <p>Halo apa kabar?</p>
        Halo apa kabar? <br>
        <p>piye kabarmu leeeee</p>

    </body>
</html>
