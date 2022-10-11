<?php
include_once("main.php");
function drawheader($id){
  if($id==0){
    $nombre="Anonimo";
  }else{
    $consulta="SELECT NOMBRE FROM USUARIO WHERE EMAIL='".$id."'";
    $exec=db_query($consulta);
    $contenido=db_fetch_array($exec);
    $nombre=$contenido[0];
  }
    ?>
     <header>
  
  <div id="header">
    <div class="header-container container">
	 <div class="row">
      <div class="logo"> <a href="index.php?variable=<?php echo $id;?>" title="Flavours HTML">
        <div><img src="images/logo.png" alt="Flavours Store"></div>
        </a> </div>
      <div class="fl-nav-menu">
       
          <nav>
            <div class="mm-toggle-wrap">
              <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
            </div>
            <div class="nav-inner">
              <!-- BEGIN NAV -->
              <ul id="nav" class="hidden-xs">
                <li class="mega-menu"><a href="categorias.php?variable=<?php echo $id?>" class="level-top"><span>Categorias</span></a>
                <!--Categoria Ropa y Zapatos-->
                <li class="mega-menu"><a href="grid.html" class="level-top"><span>Ropa y Zapatos</span></a>
              <div class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Tienda Fashion</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="botas-modernas.html" class=""><span>Botas modernas</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="lumister.html" class=""><span>Lumister</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/bags.html" class=""><span>Bolsas</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/hobo-handbags.html" class=""><span>Chaquetass</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/hobo-handbags.html" class=""><span>Zapatos Casuales</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Mujeres</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/beaded-handbags.html"><span>Sandalias </span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/fabric-handbags.html"><span>Casual</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/handbags.html"><span>Botas</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/leather-handbags.html"><span>Deporte</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/leather-handbags.html"><span>Exterior</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Hombre</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/flat-shoes.html"><span>Deportes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/flat-sandals.html"><span>Tennis de moda</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/boots.html"><span>Botas</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/heels.html"><span>Casuales</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/heels.html"><span>Exterior</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Niños</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/bracelets.html"><span>Casuales</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#"><span>Deportes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/pendants.html"><span>Exterior</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/pins-brooches.html"><span>Botas</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/pins-brooches.html"><span>Pantuflas</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Niñas</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/casual-dresses.html"><span>Casuales</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/evening.html"><span>Botas</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/designer.html"><span>Exterior</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/party.html"><span>Suecos</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/party.html"><span>Deportes</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#/swimwear.html"><span>Para Bebés</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/swimsuits.html"><span>Carter's</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/beach-clothing.html"><span>Sandalias</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/clothing.html"><span>Para Dormir</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/bikinis.html"><span>Atlético</span></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--nav-block nav-block-center-->
                    <div class="col-2">
                      <div class="menu_image"><a href="#" title=""><img src="images/menu_image.png" alt="menu_image"></a></div>
                    </div>
                  </div>
                  <!--level0-wrapper2--> </div>
              </div>
                </li>
                <!--Categoria de electronicos-->
                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Electrónicos</span></a>
                  <div class="level0-wrapper dropdown-6col">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>TV & Video</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/sport-shoes.html"><span>Televisores</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/casual-shoes.html"><span>Monitores</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/leather-shoes.html"><span>Limpieza</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/canvas-shoes.html"><span>Pantallas</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/canvas-shoes.html"><span>Accesorios</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Equipos Home Teather</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/casual-dresses.html"><span>Bocinas</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/evening.html"><span>Accesorios</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/designer.html"><span>Monitores centrales</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/party.html"><span>Cables y Conectores</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Cámaras & Video</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/coats.html"><span>Cámaras de video</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/formal-jackets.html"><span>Estuches</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/leather-jackets.html"><span>Fotografía</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/blazers.html"><span>Accesorios</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Celulares y Accesorios</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/fasttrack.html"><span>Celulares</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/casio.html"><span>Cargadores & Accesorios</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/titan.html"><span>Vehículos</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/tommy-hilfiger.html"><span>Social Docks</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#/sunglasses.html"><span>Audifonos</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/ray-ban.html"><span>Alámbricos</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/fasttrack.html"><span>Bluetooth</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/police.html"><span>Dockers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/oakley.html"><span>Gamming</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#/accesories.html"><span>VideoJuegos</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/accesories/backpacks.html"><span>PS5</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/accesories/wallets.html"><span>Consolas</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/accesories/laptops-bags.html"><span>Para PC</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/accesories/belts.html"><span>Accesorios</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                        <!--nav-block nav-block-center-->
                        <div class="nav-add">
                          <div class="push_item">
                            <div class="push_img"><a href="#"><img src="images/menu-img1.jpg" alt="menu item 1"></a></div>
                           
                          </div>
                          <div class="push_item">
                           <div class="push_img"><a href="#"><img src="images/menu-img2.jpg" alt="menu item 2"></a></div>
                           
                          </div>
                          <div class="push_item">
                           <div class="push_img"><a href="#"><img src="images/menu-img3.jpg" alt="menu item 3"></a></div>
                     
                          </div>
                          <div class="push_item push_item_last">
                          <div class="push_img"><a href="#"><img src="images/menu-img4.png" alt="menu item 4"></a></div>
                      
                          </div>
                        </div>
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <!--Categoria de Computadoras-->
                <li class="mega-menu"><a href="grid.html" class="level-top"><span>Computadoras</span></a>
              <div class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="#/mobiles.html"><span>Computadoras y Tablets</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/mobiles/samsung.html"><span>Laptos</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/mobiles/nokia.html"><span>Computadoras de Escritorio</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/mobiles/iphone.html"><span>Computadoras Gamming</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/mobiles/sony.html"><span>Tablest y ipad's</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Monitores</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/mobile-memory-cards.html"><span>Monitores LCD</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/cases-covers.html"><span>Monitores Curve</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/mobile-haedphones.html"><span>Limpieza</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.html"><span>Accesorios</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#/cameras.html"><span>Accesorios</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/cameras/camcorders.html"><span>Tinta y Toner para impresoras</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/cameras/point-shoot.html"><span>Accesorios para proyector</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/cameras/digital-slr.html"><span>Cables y Accesorios</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#camera-accesories.html"><span>Teclados y Mouses</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#/audio-video.html"><span>Dispositivos de redes</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/audio-video/mp3-players.html"><span>Adaptadores de red</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/audio-video/ipods.html"><span>Transportadores de red</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/audio-video/speakers.html"><span>Interruptores</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/audio-video/video-players.html"><span>Routers</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#/computer.html"><span>Dispositivos y Almacenamiento</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/external-hard-disk.html"><span>Discos duros externos</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/computer/pendrives.html"><span>Unidades Flash</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/computer/headphones.html"><span>Unidades de estados solidos interno</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/computer/pc-components.html"><span>Discos duros internos</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#/home-appliances.html"><span>Partes y Componentes de computadora</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/vaccum-cleaners.html"><span>Componentes internos</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/indoor-lighting.html"><span>Componentes de laptop</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/kitchen-tools.html"><span>Componentes externos</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/water-purifier.html"><span>Computadora de placa reducida</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="#/home-appliances.html"><span>Impresoras y Tinta</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#/vaccum-cleaners.html"><span>Impresoras de etiqueta</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/indoor-lighting.html"><span>Impresoras láser</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/kitchen-tools.html"><span>Impresoras de inyección de tinta</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="#/water-purifier.html"><span>Impresoras matriciales</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--level0-wrapper2--> 
                  
                </div>
              </div>
                </li>
                <!--Categoria de Belleza y Salud-->
                <li class="mega-menu"><a href="grid.html" class="level-top"><span>Belleza y Salud</span></a>
                  <div class="level0-wrapper dropdown-6col">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <ul class="level0">
                            <li class="level1 nav-6-1 parent item"><a href="#/mobiles.html"><span>Todo en belleza</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/samsung.html"><span>Cuidado personal</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/nokia.html"><span>Cuidado del cabello</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/iphone.html"><span>Cuidado de la piel</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/sony.html"><span>Cosméticos</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Belleza Premium</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/mobile-memory-cards.html"><span>Amika</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/cases-covers.html"><span>Azzaro</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobile-haedphones.html"><span>Clarins</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.html"><span>CND</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.html"><span>Creed</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#/cameras.html"><span>Cuidado profesional de la piel</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/cameras/camcorders.html"><span>Limpiadores</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/cameras/point-shoot.html"><span>Cuidado de los ojos</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/cameras/digital-slr.html"><span>Protección Solar</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#camera-accesories.html"><span>Cuidado corporal</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#camera-accesories.html"><span>Aceites y Sueros</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#/audio-video.html"><span>Salón de belleza & Spa</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/mp3-players.html"><span>Champú</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/ipods.html"><span>Acondicionador</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/speakers.html"><span>Maquillaje</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/video-players.html"><span>Estilizado</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#/computer.html"><span>Grooming para hombres</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/external-hard-disk.html"><span>Crema para pelo</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/computer/pendrives.html"><span>Manos</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/computer/headphones.html"><span>Aromatizante</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/computer/pc-components.html"><span>Cremas</span></a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!--level0-wrapper2--> 
                      
                    </div>
                  </div>
                </li>
                <!--Categoria de Deportes-->
                <li class="mega-menu"><a href="grid.html" class="level-top"><span>Bebés</span></a>
                  <div class="level0-wrapper dropdown-6col">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <ul class="level0">
                            <li class="level1 nav-6-1 parent item"><a href="#/mobiles.html"><span>Juguetes y juegos de mesa</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/samsung.html"><span>Juguetes por edad</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/nokia.html"><span>Figuras de Acción</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/iphone.html"><span>Artes y manualidades</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobiles/sony.html"><span>Juguetes de construcción</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Bebé</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/mobile-memory-cards.html"><span>Accesorios y Ropa</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/cases-covers.html"><span>Articulos de viaje</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/mobile-haedphones.html"><span>Cambio de pañales</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.html"><span>Cuidado del bebé</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#/cameras.html"><span>Pañales y Accesorios</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/cameras/camcorders.html"><span>Pañalera</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/cameras/point-shoot.html"><span>Pañales de tela</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/cameras/digital-slr.html"><span>Pañales desechables</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#camera-accesories.html"><span>Talcos</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#/audio-video.html"><span>Videojuegos infantiles</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/mp3-players.html"><span>Consolas</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/ipods.html"><span>De memoria</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/speakers.html"><span>Más deseado</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/audio-video/video-players.html"><span>Ofertas relámpago</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#/computer.html"><span>Adolenscentes</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/external-hard-disk.html"><span>External Hard Disk</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/computer/pendrives.html"><span>Pendrives</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/computer/headphones.html"><span>Headphones</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/computer/pc-components.html"><span>PC Components</span></a></li>
                              </ul>
                            </li>
                            <li class="level1 nav-6-1 parent item"><a href="#/home-appliances.html"><span>Launchpad</span></a>
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"><a href="#/vaccum-cleaners.html"><span>Juguetes y VideoJuegos</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/indoor-lighting.html"><span>Electronicos para niños</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/kitchen-tools.html"><span>Rompocabezas</span></a></li>
                                <li class="level2 nav-6-1-1"><a href="#/water-purifier.html"><span>Lo más vendido</span></a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!--level0-wrapper2--> 

                    </div>
                  </div>
                </li>                         
              </ul>
              <!--nav-->
              </div>
              </nav>
        </div>
        <!--row-->
      </div>
      <div class="fl-header-right">
        <div class="fl-links">
          <div class="no-js"> <a title="Company" class="clicker"></a>
            <div class="fl-nav-links">
              
              <ul class="links">
                <li><?php echo $nombre;?></li>
                <li><a href="wishlist.php?variable=<?php echo $id?>" title="Wishlist">Lista de deseados</a></li>
                <li><a href="checkout.php?variable=<?php echo $id?>" title="Checkout">Checkout</a></li>
                <?php
                  if($id==0){
                    echo "<li class='last'><a href='login.php' title='Login'><span>Iniciar sesion</span></a></li>";
                  }else{
                    echo "<li class='last'><a href='index.php' title='Login'><span>Cerrar Sesion</span></a></li>";
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="fl-cart-contain">
          <div class="mini-cart">
            <div class="basket"> <a href="shopping-cart.html"> </a> </div>
            <div class="fl-mini-cart-content">
              <div class="block-subtitle">
                <div class="top-subtotal">2 items, <span class="price">$449.99</span> </div>
                <!--top-subtotal-->
                <!--pull-right-->
              </div>
              <!--block-subtitle-->
              <ul class="mini-products-list" id="cart-sidebar">
                <li class="item first">
                  <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                    <div class="product-details">
                      <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->
                      <strong>1</strong> x <span class="price">$179.99</span>
                      <p class="product-name"><a href="product-detail.html">Retis lapen casen</a></p>
                    </div>
                  </div>
                </li>
                <li class="item last">
                  <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                    <div class="product-details">
                      <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->
                      <strong>1</strong> x <span class="price">$80</span>
                      <p class="product-name"><a href="product-detail.html">Retis lapen casen</a></p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="actions">
                <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
               
              </div>
              <!--actions-->
            </div>
            <!--fl-mini-cart-content-->
          </div>
        </div>
        <!--mini-cart-->
        <div class="collapse navbar-collapse">
              
            </div>
        <!--links-->
      </div>
    </div>
	</div>	
  </header>
    <?php
}

function drawfooter(){
   ?>
   <footer>
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
	<div class="newsletter-row">
      <div class="container">
    
          <!-- Footer Newsletter -->
          
          
        </div>
      </div>
      <!--footer-column-last--> 
    </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12 col-lg-3">
		  
			</div>
			
			 <div class="col-sm-9 col-xs-12 col-lg-9">
           
            
            
            
			
			
			</div>
          </div>
		 
          <!--col-sm-12 col-xs-12 col-lg-8-->
          <!--col-xs-12 col-lg-4-->
   
        <!--row-->
        
        <div class="footer-top">
      <div class="row">
      
          <div class="col-xs-12 col-sm-4">
           
          </div>
          <div class="col-sm-4 col-xs-12 coppyright"> © 2022 Universidad Mariano Galvez. Todos los derechos reservados. </div>
          <div class="col-xs-12 col-sm-4">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>

		
      </div>
	  
      <!--container-->
    </div>
    <!--footer-inner-->
    
    

    <!-- BEGIN SIMPLE FOOTER -->
  </footer>
   <?php 
}

?>