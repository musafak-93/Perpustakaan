<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perpustakaan</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body id="body" class="light">

        <header class="header">
            <div class="container">
                <div class="landing-page">
                    <div class="title-landing">
                        <h1 class="title">Perpustakaan</h1>
                        <p>Universitas Muhammadiyah Yogyakarta</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="navbar">
            <div class="header-left">
                <div class="logo">
                    <h1 id="text">UMY</h1>
                </div>
            </div>
            <a href="#"><span class="fa fa-bars menu-icon"></span></a>
            <span class="menu-icon"></span>
            <div class="header-right navigation">
                <a href="/team#team">Team</a>
                <a href="#anggota">Katalog</a>
                <a href="#perkenalan">Perkenalan</a>
            </div>
        </div>
        <main class="theme">
            <section id="perkenalan">
                <div class="intro">
                    <div class="intro-left">
                        <h1>Universitas Muhammadiyah Yogyakarta</h1>
                    </div>
                    <div class="intro-right">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Repudiandae, hic sit veritatis unde doloribus sunt
                            qui
                            enim assumenda reiciendis quisquam beatae ex nostrum
                            mollitia ab dolorum at numquam illo quo. Lorem ipsum
                            dolor sit amet consectetur, adipisicing elit.
                            Molestiae
                            consequatur corporis neque qui nobis. Distinctio
                            deleniti reiciendis dolorum neque eum iste quam
                            laborum
                            ad corrupti, omnis similique cupiditate totam
                            recusandae. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Harum ducimus ut dolorem
                            provident?
                            Veniam sint, corporis mollitia rem porro, possimus
                            dolore inventore incidunt similique exercitationem
                            modi
                            perferendis delectus non amet. Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Corrupti corporis
                            iusto, culpa atque unde doloremque dolorum ad neque
                            inventore illo. Maiores amet provident ea doloremque
                            reiciendis, magnam fugiat veritatis atque?</p>
                    </div>
                </div>
            </section>

            <section id="anggota">
                <div class="team-wrapper">
                    <div class="container">
                        <div class="heading">
                            <i class="fa fa-book fa-5x teams-icon"></i>
                            <!-- <h2 id="text">Kami Beranggotakan :</h2> -->
                        </div>
                        <div class="teams">
                            @foreach ($data_buku as $item)
                            <div class="team">
                                <div class="team-icon">
                                    <i class="fa fa-book-pile"></i>
                                    <img src="image/book.png" width="25%">
                                    <a href="instagram.com" class="instagram">
                                        <i class="fa fa-search"></i>
                                        Lihat Selengkapnya
                                    </a>
                                </div>
                                <p id="text" class="penulis-buku">{{$item -> pengarang}}</p>
                                <h3 class="judul-buku">{{$item -> judul_buku}}</h3>
                                <p id="text" class="penulis-buku">{{$item -> penerbit}}</p>
                                <p id="text" class="penulis-buku">{{$item -> tahun_terbit}}</p>
                                <p id="text" class="txt-contents">{{$item -> sinopsis}}</p>
                                <p id="text" class="txt-contents penulis-buku" style="font-size: 10px">Kategori : {{$item -> kategori}}</p>
                                    <a href="" class="lihat-selengkapnya"><p >Lihat selengkapnya...</p></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <div class="switch-wrapper">
                <label for="" class="label-toggle">Dark Mode</label><br>
                <label for="toggle" class="switch">

                    <input id="toggle" onclick="theme()" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </main>
        <footer>
            <div class="footer-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 item text">
                                <h3>Universitas Muhammadiyah Yogyakarta</h3>
                                <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                            </div>
                            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                        </div>
                        <p class="copyright">UMY © 2022</p>
                    </div>
            </div>
        </footer>
    </body>
</html>

<script src="js/main.js"></script>
