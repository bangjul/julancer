<!-- Kategori & List barang -->
<section class="category-top-section">
    <div class="ui container">
        <div class="ui stackable grid">
            <div class="three wide column">
                <div class="category-section">
                    <div class="ui vertical borderless menu square" id="category-lowongan">

                        <div class="item">
                            <div class="ui header">
                                Kategori
                            </div>
                        </div>
                        <?php 
                        $list_kategory = ['Website Development', 'CEO Marketing', 'Mobile App', 'Design dan Multimedia', 'Data Entry', 'Writing'];
                        for($i = 0; $i < sizeof($list_kategory); $i++){ 
                            echo '<a class="item kategori">'.$list_kategory[$i].'</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="thirteen wide column">
                <div class="title-product-section">
                    <section class="ui padded segment square">
                        <div class="ui container">
                            <div class="ui fluid action input">
                              <input type="text" placeholder="Search...">
                              <button class="ui icon button">
                                <i class="search icon"></i>
                              </button>
                            </div>
                            <br>
                            <div class="field">
                                <select class="ui fluid dropdown">
                                  <option value="LT">Lowongan Terbaru</option>
                                     
                                      <option value="BT">Bayaran Tertinggi</option>
                                      <option value="LS">Lowongan Sedikit Pelamar</option>
                                      <option value="AB">Akan Berahir</option>
                                      
                                </select>
                              </div>

                        </div>
                    </section>

                <section class="ui very padded segment square">
                    <div class="ui container">
                        <div class="ui divided items">
                            <?php for($x = 0; $x < 5; $x++) {
                                echo '<div class="item">';
                                    echo '<div class="image">
                                        <img src="public/images/grav.png">
                                    </img>
                                    </div>';
                                    $tgl=date('d-m-Y');
                                    echo '<div class="content">
                                            <a class="header">'.
                                                'Membutuhkan Pembuatan Website '.($x + 1).
                                            '</a>
                                            <div class="meta">
                                                <span class="cinema">'.'Posted '.$tgl.'</span>
                                            </div>
                                            <div class="description">
                                                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem 
                                                </p>
                                            </div>
                                            <div class="extra">
                                                <div class="ui label">
                                                <i class="dollar icon"></i>
                                                200
                                                </div>
                                                <div class="ui label">
                                                <i class="calendar icon"></i>
                                                30 Juli 2017
                                                </div>
                                                <div class="ui divider" ></div>
                                                <a href="?p=lowongan-detail">
                                                    <div class="ui right floated primary button">
                                                      Buka
                                                      <i class="right chevron icon"></i>
                                                    </div>
                                                </a>
                                           </div>';
                                    echo '</div>';
                                echo '</div>';
                               
                                }
                            ?>

                        </div>
                    </div>
                </section> 

                          <!-- <div class="item">
                            <div class="image">
                              <img src="public/images/grav.png">
                            </div>
                            <div class="content">
                              <a class="header">Membutuhkan Pembuatan Website Dinamis</a>
                              <div class="meta">
                                <span class="cinema">Posted 20 Mei 2017</span>
                              </div>
                              <div class="description">
                                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem  </p>
                              </div>
                              <div class="extra">
                                <div class="ui label"><i class="dollar icon"></i> 200</div>
                                <div class="ui label"><i class="calendar icon"></i> 30 Juli 2017</div>
                              </div>
                              <div class="ui divider" ></div>
                              <div class="ui right floated primary button">
                                  Buka
                                  <i class="right chevron icon"></i>
                                </div>
                            </div>
                          </div>

                        </div>
                    </div>
                    </section> -->


                    <!-- <section class="ui very padded segment square" id="list-item">
                        <div class="ui container">
                            <div class="ui four stackable cards">

                                <?php for($x = 0; $x < 8; $x++) {
                                    echo '<div class="card">';
                                    echo '<a class="image" href="?p=content-detail">
                                        <img src="public/images/gravicloth-logo.png">
                                    </a>';
                                    echo '<div class="content">
                                            <a class="header" href="#">'.
                                                'Kaos '.($x + 1).
                                            '</a>
                                            <div class="meta">
                                                <a>'.'Rp '.((10000 * $x) + 10000).'</a>
                                            </div>
                                        </div>';
                                    echo '</div>';
                                }
                                ?>

                            </div>
                        </div>
                    </section> -->

                </div>
            </div>

        </div>
    </div>
</section>