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
                        <p>Temukan kebahagiaanmu di dalam kreasi kue kami yang nikmat dengan tampilan nan memikat</p>
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
                    <i class="fa-solid fa-shop"></i>
                    <h4>Pengambilan Di Toko</h4>
                    <p>Pesan di website dan jemput kuemu langsung ditoko, sambil berkenalan dengan kreasi lainnya yang tak kalah nikmat.</p>
                    <center><button>Info Toko</button></center>
                </div>
                <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                    <i class="fa-solid fa-truck"></i>
                    <h4>Pengiriman Seluruh Indonesia</h4>
                    <p>Nikmati kue pilihan Bakery Berkah dimanapun anda berada, layanan pengiriman ke seluruh Indonesia.</p>
                    <center><button>Pesan Sekarang</button></center>
                </div>
                <div class="box" data-aos="fade-up-left" data-aos-duration="1000">
                    <i class="fa-light fa-moped"></i>
                    <h4>Layanan Antar</h4>
                    <p>Pengantaran lebih aman dengan kurir internal Bakery Berkah yang Berpengalaman.</p>
                    <center><button>Info Pengiriman</button></center>
                </div>
            </div>
        </div>
    </div>
 
    <!-- SERVICE END -->

    <!-- PRODUCT START -->
    <div class="Product" id="product" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="konten width-80">
            <h1>PRODUCT</h1>

            <div class="konten_cards">
                <div class="card_new" style="background-image:url('https://images.pexels.com/photos/1055272/pexels-photo-1055272.jpeg?auto=compress&cs=tinysrgb&w=600');">
                    <div class="card-overlay">
                        <h4>Chiffon Mini cake</h4>
                        <h2 style="color:#ff3838; ">Rp.150,000</h2>
                        <p>Menghadirkan kelembutan dan rasa yag manis khas yang membuatmu ketagihan.</p>
                        <p>Varian Rasa :</p>
                        <ul>
                            <li> Red velved</li>
                            <li> chocholate cheese</li>
                        </ul>
                        <center><button>BUY NOW</button></center>
                    </div>
                </div>
                <div class="card_new" style="background-image:url('https://images.pexels.com/photos/1291712/pexels-photo-1291712.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                    <div class="card-overlay">
                        <h4>chocholate caramel cake</h4>
                        <h2 style="color:#ff3838; ">Rp.250,000</h2>
                        <p>Paduan antara karamel dan kue coklat spons yang menggoda</p>
                        <p>Varian Rasa :</p>
                        <ul>
                            <li> Strwberry cheese</li>
                            <li> pandan cheese</li>
                        </ul>
                        <center><button>BUY NOW</button></center>
                    </div>
                </div>
                <div class="card_new" style="background-image:url('https://images.pexels.com/photos/4669210/pexels-photo-4669210.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                    <div class="card-overlay">
                        <h4>cookies almond chips</h4>
                        <h2 style="color:#ff3838; ">Rp.90,000</h2>
                        <p>Tampilannya yang menggoda sama seperti kenikmatan coklat yang didalamnya.</p>
                        <p>Varian Rasa :</p>
                        <ul>
                            <li> blueberry</li>
                            <li> caramel</li>
                        </ul>
                        <center><button>BUY NOW</button></center>
                    </div>
                </div>
            
            </div>
        </div>
    </div>


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
                <a href="https://goo.gl/maps/awvvsSeAPDiaerPB8"><i class="fa-solid fa-location-dot"></i></a>
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