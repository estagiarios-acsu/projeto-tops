<?php
session_start();

$_SESSION["top"] = 8;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <!--====SCROLL===-->

    <script src="https://unpkg.com/scrollreveal"></script>

    <!--=== CSS ===-->
    <link rel="stylesheet" href="../css/tops.css">
    <title>Document</title>

    <!--====MAP====-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
    integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
     integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
     crossorigin=""></script>
</head>

<body>
    <!--==== HEADER ====-->
    <header class="nav-bar">
        <div class="logo">
            <img src="../assets/logopmm.png" alt="logo-mpe">
        </div>


        <div class="hamburger-menu">
            <input type="checkbox" name="" id="menu__toogle">
            <label for="menu__toogle" class="menu__btn">
                <span></span>
            </label>

            <ul class="menu__box">
                <li class="icons"><img src="./assets/icons/house.svg" class="icon__menu" alt=""><a href="../index.php"
                        class="menu__item">Home</a></li>
                <li class="icons"><img src="./assets/icons/info-circle.svg" class="icon__menu" alt=""><a href="../menu/sobre.php"
                        class="menu__item">Sobre</a></li>
                <li class="icons"><img src="./assets/icons/calendar-date.svg" class="icon__menu" alt=""><a href="../menu/agenda.php"
                        class="menu__item">Agenda</a></li>
                <li class="icons"><img src="./assets/icons/telephone.svg" class="icon__menu" alt=""><a href="#contato"
                        class="menu__item">Contato</a></li>
            </ul>
        </div>

        <nav class="menu">
            <ul>
                <a href="../index.php"><li>Home</li></a>
                <a href="../menu/sobre.php"><li>Sobre</li></a>
                <a href="../menu/agenda.php"><li>Agenda</li></a>
                <a href="#contato"><li>Contato</li></a>
            </ul>
        </nav>
    </header>

    <!--====MAIN====-->
    <main class="container">
        <div class="row">
            <div class="side-menu">
                <ul class="navbar-nav">
                    <li class="menu-items nav-item active" onclick="geral()">
                        <a>Geral</a>
                    </li>
                    <li class="menu-items" onclick="agenda()">
                        <a>Agenda Territorial</a>
                    </li>
                    <li class="menu-items" onclick="perfil()">
                        <a>Perfil do Território</a></li>
                    <li class="menu-items" onclick="colegiados()">
                        <a>Grupos Colegiados</a></li>
                    <li class="menu-items" onclick="calendario()">
                        <a href="calendarioR/index.php">Calendário TOP-8</a></li>
                    <li class="menu-items" onclick="download()">
                        <a>Arquivos Para Download</a></li>
                    <li class="menu-items" onclick="media()">
                        <a>Media</a></li>
                </ul>
            </div>
            <div class="content-right">
                <!--====GERAL====-->
                <section class="geral">
                    <div class="content-top">
                      <div>
                          <h1 title="Territorios Produtivos">Geral</h1>
                          <p>Itapebussu, Rato, Lagoa do juvenal, Manuel guedes, Vertentes do lagedo, Antônio Marques, Boqueirão</p>
                      </div>
                      <div class="btn-exit">
                        <a href="../index.php"><button class="bn632-hover bn18">Voltar</button></a>
                      </div>
                    </div>
                    <div class="content-half">
                        <div class="cont-half">
                            <span class="top-topic">Unidade Territorial</span>
                            <span class="top-subtopic">Top-8</span>
                        </div>
                        <div class="cont-half">
                            <span class="top-topic">Responsavel</span>
                            <span class="top-subtopic">Articulação</span>
                        </div>
                        <div class="cont-half">
                            <span class="top-topic">Contato</span>
                            <span class="top-subtopic">(85) 9XXXX-XXXX</span>
                        </div>
                    </div>
                    <div class="text-cont-top">
                        <p></p>
                    </div>
                    <div id="map"></div>
                </section>
                <!--====Agenda Territorial====-->
                <section class="agenda">
                    <div class="content-top">
                        <div>
                            <h1 title="Territorios Produtivos">Agenda Territorial</h1>
                            <p>Área Verde, Outra Banda, Parque das Rosas, São Benedito, Pau Serrado</p>
                        </div>
                        <div class="btn-exit">
                          <a href="../index.php"><button class="bn632-hover bn18">Voltar</button></a>
                        </div>
                      </div>
                </section>
                <!--====Perfil do Território====-->
                <section class="perfil">
                    <div class="content-top">
                        <div>
                            <h1 title="Territorios Produtivos">PERFIL DO TERRITÓRIO</h1>
                            <p>Área Verde, Outra Banda, Parque das Rosas, São Benedito, Pau Serrado</p>
                        </div>
                        <div class="btn-exit">
                          <a href="../index.php"><button class="bn632-hover bn18">Voltar</button></a>
                        </div>
                    </div>

                    <div class="content-equipments">
                        <div>
                            <p>1. Equipamentos Publicos Educação</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Escolas</th>
                                        <th>Localidade</th>
                                        <th>Natureza</th>
                                        <th>Zona</th>
                                        <th>Endereço</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="30%">Antonio Freitas De Oliveira Emef</td>
                                        <td>Rato De Baixo</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Florencio Barroso De Albuquerque Emeief</td>
                                        <td>Rato De Baixo</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Jose Mamede Da Nobrega Emeief</td>
                                        <td>Rato De Cima</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"><p></p></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Padre Bernard Rene Louis Coursol Cei</td>
                                        <td>Rato De Baixo</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Antonio Ivan Marques Cei</td>
                                        <td>Serra Do Lagedo</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Imaculada Conceicao Emeief</td>
                                        <td>Serra Do Lagedo</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Jose De Sousa Albuquerque Emef</td>
                                        <td>Lagoa Do Juvenal</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nova Vida Cei</td>
                                        <td>>Lagoa Do Juvenal</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Francisca Iracema Campos Araujo Cei</td>
                                        <td>Itapebussu</td>
                                        <td>Pública</td>
                                        <td>Urbano</td>
                                        <td width="20%"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!--Grupos Colegiados-->
                <section class="colegiados">
                    <div class="content-top">
                        <div>
                            <h1 title="Territorios Produtivos">Grupos Colegiados</h1>
                            <p>Área Verde, Outra Banda, Parque das Rosas, São Benedito, Pau Serrado</p>
                        </div>
                        <div class="btn-exit">
                          <a href="../index.php"><button class="bn632-hover bn18">Voltar</button></a>
                        </div>
                      </div>
                </section>

                <!--Calendario do Top-->
                <section class="calendario">
                    <div class="content-top">
                        <div>
                            <h1 title="Territorios Produtivos">Calendário Top-1</h1>
                            <p>Área Verde, Outra Banda, Parque das Rosas, São Benedito, Pau Serrado</p>
                        </div>
                        <div class="btn-exit">
                          <a href="../index.php"><button class="bn632-hover bn18">Voltar</button></a>
                        </div>
                      </div>
                </section>

                <!--Download-->
                <section class="download">
                    <div class="content-top">
                        <div>
                            <h1 title="Territorios Produtivos">Arquivos Para Download
                            </h1>
                            <p>Área Verde, Outra Banda, Parque das Rosas, São Benedito, Pau Serrado</p>
                        </div>
                        <div class="btn-exit">
                          <a href="../index.php"><button class="bn632-hover bn18">Voltar</button></a>
                        </div>
                      </div>
                </section>

                <!--Media-->
                <section class="media">
                    <div class="content-top">
                        <div>
                            <h1 title="Territorios Produtivos">Media
                            </h1>
                            <p>Área Verde, Outra Banda, Parque das Rosas, São Benedito, Pau Serrado</p>
                        </div>
                        <div class="btn-exit">
                          <a href="../index.php"><button class="bn632-hover bn18">Voltar</button></a>
                        </div>
                      </div>
                </section>
                
            </div>
        </div>
    </main>


    <!--====FOOTER====-->
    <footer>

        <div class="content-footer">
            <div class="content-footer-left">
                <img src="../assets/logopmm.png">
                <p></p>
            </div>
            <div class="content-footer-right">
                <a name="contato"></a>
                <h1>ACOMPANHE</h1>
                <div class="social-media">
                    <a href="https://www.instagram.com/prefeituramaranguape/"><img src="../assets/icons/icons8-instagram.svg" alt=""></a>
                    <a href="https://www.facebook.com/prefeituramaranguapeoficial/?locale=pt_BR"><img src="../assets/icons/icons8-facebook-novo.svg" alt="" srcset=""></a>
                    <a href="https://www.youtube.com/c/PrefeituradeMaranguape"><img src="../assets/icons/icons8-reproduzir-youtube.svg" alt="" srcset=""></a>
                </div>
            </div>
        </div>

        <div class="copy">Copyright &copy 2022
            Prefeitura Municipal
            de Maranguape.</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function(){
            $('li').on('click', function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            })
        })
    </script>

    <script src="../tops/top.js"></script>
    <script>

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', { foo: 'bar', attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' }).addTo(map);

        var map = L.map('map').setView([-4.0306,-38.9209], 13);

        var marker = L.marker([-4.0287, -38.9257]).addTo(map)
        marker.bindPopup("<b>Top-8</b><br>Itapebussu").openPopup();
        ;

        var marker = L.marker([-4.0266, -38.9740]).addTo(map)
        marker.bindPopup("<b>Top-8</b><br>Lagoa do Juvenal").openPopup();
        ;

        var marker = L.marker([-4.0745, -38.8946]).addTo(map)
        marker.bindPopup("<b>Top-8</b><br>Manoel Guedes").openPopup();
        ;

        var marker = L.marker([-4.01029, -38.90631]).addTo(map)
        marker.bindPopup("<b>Top-8</b><br>Vertentes do lagedo").openPopup();
        ;

        var marker = L.marker([-4.05103, -38.98687]).addTo(map)
        marker.bindPopup("<b>Top-8</b><br>Boqueirão").openPopup();
        ;
    </script>
</body>

</html>
