<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK FONT AWESOME -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous' />
    <!-- LINK CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Bakery</title>
</head>

<body style="min-height: 200vh;">
    <a class="wafixed" href="https://wa.me/085755739249" target="_blank">
        <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa-brands fa-whatsapp fa-stack-1x fa-inverse"></i>
        </span>
    </a>
    <a class="igfixed" href="https://www.instagram.com/invites/contact/?i=h8foczvrrxs1&utm_content=1v5rtvo" target="_blank">
        <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
        </span>
    </a>

    <!-- NAVBAR START -->
    <header>
        <div class="navbar">
            <div class="container">
                <div class="box-navbar">
                    <div class="logo">
                        <h1>Bakery Berkah</h1>
                    </div>
                    <ul class="menu">
                        <li class="tod"><a href="#home">HOME</a></li>
                        <li class="tod"><a href="#service">SERVICE</a></li>
                        <li class="tod"><a href="#product">PRODUCT</a></li>
                        <li class="tod"><a href="#pemesanan">PEMESANAN</a></li>
                        <li class="tod"><a href="#myteam">MY TEAM</a></li>
                    </ul>
                    <i class="fa-solid fa-bars menu-bar"></i>
                </div>
            </div>
        </div>
        <div class="hero" id="home">
            <div class="container">
                <div class="box-hero">
                    <div class="box">
                        <h1>Roti Pilihan Terbaik <br>
                            Kado Spesial Untuk Keluarga</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Sint, alias!</p>
                        <button>Selengkapnya</button>
                    </div>
                    <div class="box">
                        <img src="https://images.pexels.com/photos/3071821/pexels-photo-3071821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" style="border-radius: 10%;">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- NAVBAR END -->

    <!-- SERVICE START -->
    <div class="service" id="service" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="jdl">
                <h1>SERVICE</h1>
            </div>
            <div class="box-service">
                <div class="box" data-aos="fade-up-right" data-aos-duration="1000">
                    <i class="fa-solid fa-coins"></i>
                    <h4>Harga Terjangkau</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, optio.</p>
                </div>
                <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                    <i class="fa-solid fa-certificate"></i>
                    <h4>Sudah Terverifikasi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, optio.</p>
                </div>
                <div class="box" data-aos="fade-up-left" data-aos-duration="1000">
                    <i class="fa-solid fa-people-roof"></i>
                    <h4>Aman dan Terpercaya</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, optio.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE END -->

    <!-- PRODUCT START -->

    <!-- PRODUCT END -->

    <!-- PEMESANAN START -->
    <div class="pesanan" id="pemesanan" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="box-pesanan">
                <div class="jdl">
                    <h1>PEMESANAN</h2>
                </div>
                <div class="box">
                    <label for="namapesanan" data-aos="fade-right" data-aos-duration="1000">Nama Lengkap</label>
                    <br>
                    <input type="text" name="namapesanan" data-aos="fade-left" data-aos-duration="1000">
                    <br>
                    <br>
                    <br>
                    <label for="NamaMenu" data-aos="fade-right" data-aos-duration="1000">Nama Menu</label>
                    <br>
                    <input type="text" name="NamaMenu" data-aos="fade-left" data-aos-duration="1000">
                    <br>
                    <br>
                    <br>
                    <label for="JumlahPesanan" data-aos="fade-right" data-aos-duration="1000">Jumlah Pesanan</label>
                    <br>
                    <input type="number" name="JumlahPesanan" data-aos="fade-left" data-aos-duration="1000">
                    <br>
                    <br>
                    <br>
                    <input class="button" type="submit" value="Simpan Pesanan" data-aos="zoom-in" data-aos-duration="1000">
                </div>
            </div>
        </div>
    </div>

    <!-- PEMESANAN END -->

    <!-- MY TEAM START -->
    <div class="myteam" id="myteam" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="jdl">
                <h1>MY TEAM</h1>
            </div>
            <div class="box-myteam">
                <div class="box" data-aos="fade-right" data-aos-duration="500">
                    <img src="https://scontent.fsub8-1.fna.fbcdn.net/v/t1.18169-9/19732287_250219268805462_2782260732444763038_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=174925&_nc_eui2=AeFvgu0nVvsc4djU8kXCY5tPBvmvDFmlaJsG-a8MWaVom-RYvXjlS2I0agtQaIiINgSZeL82a_aNr1td7s6O7by1&_nc_ohc=3_lYJ2forIwAX_lzBM3&_nc_ht=scontent.fsub8-1.fna&oh=00_AfD03fAliL06mrHoCfcjDbyDHmK7GTl8BPD27widPqn2Yg&oe=63C76FAF" style="border-radius: 15px;" alt="">
                    <h3 style="color: white;">MUHAMMAD DANIRIYAN PERMANA</h3>
                    <p style="color: white;">2202041106</p>
                    <button><i class="fa-brands fa-whatsapp"></i></button>
                    <button><i class="fa-brands fa-instagram"></i></button>
                    <button><i class="fa-brands fa-facebook"></i></button>
                    <button><i class="fa-brands fa-youtube"></i></button>
                </div>
                <div class="box" data-aos="fade-left" data-aos-duration="500">
                    <img src="https://scontent.fsub8-2.fna.fbcdn.net/v/t1.18169-9/20431315_115086512477076_9179856307320647405_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHGyEe_4WnmBfPq7xyMhr78gYhTjcit4n6BiFONyK3ifgN6LkMbQCrQCSpqwYkU4pnvGwe_gjYBu-UqS7SW13GV&_nc_ohc=PIr751l9sqkAX_CFs79&_nc_ht=scontent.fsub8-2.fna&oh=00_AfAKg0axb3dNmZj05HQE971XBmOZEJ8fdaAAXz2ExP_ZZg&oe=63C76417" style="border-radius: 15px;" alt="">
                    <h3 style="color: white;">MUHAMMAD HUSNUN NI'AM</h3>
                    <p style="color: white;">2353642</p>
                    <button><i class="fa-brands fa-whatsapp"></i></button>
                    <button><i class="fa-brands fa-instagram"></i></button>
                    <button><i class="fa-brands fa-facebook"></i></button>
                    <button><i class="fa-brands fa-youtube"></i></button>
                </div>
                <div class="box" data-aos="fade-right" data-aos-duration="500">
                    <img src="https://scontent.fsub8-2.fna.fbcdn.net/v/t1.18169-9/20431315_115086512477076_9179856307320647405_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHGyEe_4WnmBfPq7xyMhr78gYhTjcit4n6BiFONyK3ifgN6LkMbQCrQCSpqwYkU4pnvGwe_gjYBu-UqS7SW13GV&_nc_ohc=PIr751l9sqkAX_CFs79&_nc_ht=scontent.fsub8-2.fna&oh=00_AfAKg0axb3dNmZj05HQE971XBmOZEJ8fdaAAXz2ExP_ZZg&oe=63C76417" style="border-radius: 15px;" alt="">
                    <h3 style="color: white;">WILUJENG AMELIA</h3>
                    <p style="color: white;">6475838282</p>
                    <button><i class="fa-brands fa-whatsapp"></i></button>
                    <button><i class="fa-brands fa-instagram"></i></button>
                    <button><i class="fa-brands fa-facebook"></i></button>
                    <button><i class="fa-brands fa-youtube"></i></button>
                </div>
                <div class="box" data-aos="fade-left" data-aos-duration="500">
                    <img src="https://scontent.fsub8-2.fna.fbcdn.net/v/t1.18169-9/20431315_115086512477076_9179856307320647405_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHGyEe_4WnmBfPq7xyMhr78gYhTjcit4n6BiFONyK3ifgN6LkMbQCrQCSpqwYkU4pnvGwe_gjYBu-UqS7SW13GV&_nc_ohc=PIr751l9sqkAX_CFs79&_nc_ht=scontent.fsub8-2.fna&oh=00_AfAKg0axb3dNmZj05HQE971XBmOZEJ8fdaAAXz2ExP_ZZg&oe=63C76417" style="border-radius: 15px;" alt="">
                    <h3 style="color: white;">MUHAMMAD JAZA ILHAM ASY'ARI</h3>
                    <p style="color: white;">223434523</p>
                    <button><i class="fa-brands fa-whatsapp"></i></button>
                    <button><i class="fa-brands fa-instagram"></i></button>
                    <button><i class="fa-brands fa-facebook"></i></button>
                    <button><i class="fa-brands fa-youtube"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- MY TEAM END -->

    <!-- FOOTER START -->
    <footer class="footer">
        <div class="footer-left">
            <h3>Payment Method</h3>
            <div class="credit-cards">
                <img src="img/visa.png" alt="">
                <img src="img/mastercard.png" alt="">
                <img src="img/paypal.png" alt="">
            </div>
            <p class="footer-copy">&copy; 2022 Bakery Berkah</p>
        </div>

        <div class="footer-center">
            <div>
                <a href="http://"><i class="fa-solid fa-location-dot"></i></a>
                <p style="color: white;"><span>Indonesia</span> Jawa Timur, Jombang</p>
            </div>
            <div>
                <a href="http://"><i class="fa fa-phone"></i></a>
                <p style="color: white;">+628 575-573-9249</p>
            </div>
            <div>
                <a href="mailto:"><i class="fa fa-envelope"></i></a>
                <p style="color: white;">
                    <a link rel="stylesheet" href="#">bakeryberkah@gmail.com </a>
                </p>
            </div>
        </div>


        <div class="footer-right">
            <p class="footer-about">
                <span>About</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsa qui et impedit architecto officia sint natus libero.
                Quo autem error enim unde tenetur perspiciatis corrupti doloremque temporibus? Minima, rem.
            </p>

            <div class="footer-media">
                <a href="http://"><i class="fa-brands fa-youtube"></i></a>
                <a href="http://"><i class="fa-brands fa-facebook"></i></a>
                <a href="http://"><i class="fa-brands fa-twitter"></i></a>
                <a href="http://"><i class="fa-brands fa-linkedin"></i></a>
                <a href="http://"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- FOOTER END -->





    <!-- LINK JAVASCRIPT -->
    <script src='script.js'></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>