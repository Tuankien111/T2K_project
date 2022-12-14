<?php
$obj = json_decode($data['DB']);
if (count($obj) > 0) { ?>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-12 col-lg-6 border-end" style="user-select: none;">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image"> <img data-img="<?= $obj[0]->product_img ?>" src="<?= $obj[0]->product_img ?>" id="addimg" width="350">
                        </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li><img onclick="changeImage(this)" src="<?= $obj[0]->product_img ?>" width="75">
                                </li>
                                <li><img onclick="changeImage(this)" src="/t2k/public/image/id<?= $obj[0]->product_id ?>-1.jpg" width="75">
                                </li>
                                <li><img onclick="changeImage(this)" src="/t2k/public/image/id<?= $obj[0]->product_id ?>-2.jpg" width="75">
                                </li>
                                <li><img onclick="changeImage(this)" src="/t2k/public/image/id<?= $obj[0]->product_id ?>-3.jpg" width="75">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="return">
                    <a href="http://localhost/t2k/Product"><i class="fa-regular fa-circle-left"></i></a>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="p-3 right-side">
                        <div class="d-flex align-items-center">
                            <img id="_3hs" src="/t2k/public/image/icon-3h.svg" alt="">
                            <h4 id="addname" data-name="<?= $obj[0]->product_name ?>" class="title" style="padding-left: 5px;"><?= $obj[0]->product_name ?></h4>
                        </div>
                        <div class="content">
                            <p id="addid" data-id="<?= $obj[0]->product_id ?>">M??: <?= $obj[0]->product_code ?></p>
                            <?php if (isset($_SESSION['user_id'])) {
                                echo   '<input type="hidden" id="addiduser" value="' . $_SESSION['user_id'] . '">';
                            } ?>
                        </div>

                        <div style="font-size: 1rem; font-weight: 700;" class="product-price">
                            <p style="color: #d62435; margin-bottom: 0;
                                        text-decoration: line-through;" class="last-price"><?= number_format(($obj[0]->product_price) / 0.95) ?> VN??</p>
                            <p style="color: #005cb8; font-size: 30px;" id="addprice" data-price="<?= $obj[0]->product_price ?>" class="new-price"><span><?= number_format($obj[0]->product_price) ?> VN?? (sale 5%)</span></p>
                        </div>
                        <div class="Chosing mt-2" style="position: relative;"> <span style="font-size: 16px; font-weight: 400;">Ch???n k??ch c???:</span>
                            <div class="Size">
                                <form method="post">
                                    <input id="10" name="option" type="radio" value="10">
                                    <label for="10">10</label>
                                    <input id="11" name="option" type="radio" value="11">
                                    <label for="11">11</label>
                                    <input id="12" name="option" type="radio" value="12">
                                    <label for="12">12</label>
                                    <input id="13" name="option" type="radio" value="13">
                                    <label for="13">13</label>
                                    <input id="14" name="option" type="radio" value="14">
                                    <label for="14">14</label>
                                </form>
                            </div>
                            <p>
                                <a class="guide-link" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                                    H?????ng d???n ch???n k??ch c???
                                </a>
                                <a class="guide-close collapse" id="collapse" data-bs-toggle="collapse" href="#collapse" aria-expanded="true" role="button"><i class="fa-solid fa-xmark"></i></a>
                            </p>
                            <div class="collapse" id="collapse">
                                <div class="guide-body">
                                    <h5>H?????ng d???n ??o size nh???n</h5>
                                    <div class="step1">
                                        <p>1. D??ng d??y ??o qu???n quanh kh???p
                                            tay, ????nh d???u v??? tr?? c???t nhau</p>
                                        <img style="height: 44px; padding-left: 10px;" src="/t2k/public/image/do-duong-kinh.png" alt="">
                                    </div>
                                    <div class="step2">
                                        <p>2. D??ng th?????c ??o chi???u d??i c???a d??y
                                            v???a ??o ???????c (????n v??? cm)</p>
                                        <img style=" height: 25px; padding-left: 10px; margin-top: 10px;" src="/t2k/public/image/do-chieudai-cua-day.png" alt="">
                                    </div>
                                    <div class="measure">K??ch th?????c b???n ??o ???????c l??:
                                        <input type="text" id="size-input" autocomplete="off"> cm <br>
                                        <span style="font-style: italic; font-size: 13px;">(V?? d???: 4.7)</span>
                                        <br><span>Size nh???n c???a b???n l??: <span id="result"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="wrapper mt-3" style="border: 1px solid black;">
                            <span class="minus">???</span>
                            <span id="quatity" name="quatity" class="number">1</span>
                            <span class="add">+</span>
                        </div>


                        <div class="row col-12" id="notice">
                            <div class="notice col-12 mt-3 mb-3">
                                <div class="top col-12">
                                    <p style="margin:0 ; padding-left: 10px;">??u ????i:</p>
                                </div>
                                <div class="bot col-12">
                                    <span><i class="fa-solid fa-circle-check" style="margin-right: 5px ;"></i>Nh???p m??
                                        <span style="font-weight: 500; color:brown;">QRPAYPNJ</span> gi???m ?????n 499k khi
                                        thanh to??n <a href="">VNPAY-QR</a></span> <br>
                                    <span><i class="fa-solid fa-circle-check" style="margin-right: 5px ;"></i>Mi???n ph??
                                        v???n chuy???n khi mua tr???c tuy???n</a></span>
                                </div>
                            </div>
                        </div>
                        <form method="post" class="buttons gap-2 col-12">
                            <!-- <input type="number" id="quatity" name="quatity" min="0" value="1"> -->

                            <button type="submit" id="addtocart" class="btn btn1 col-lg-12 col-12"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>MUA NGAY</button>
                            <button class="btn btn2 col-lg-12 col-12"><i class="fa-solid fa-basket-shopping" style="margin-right: 10px;"></i>
                                MUA T???I C???A H??NG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion mt-5">
            <div class="card-descriptions mt-2">
                <div class="card-header">
                    <a class="btn-btn collapsed" data-bs-toggle="collapse" href="#collapse_1" role="button" aria-expanded="false" aria-controls="collapse_1">
                        Th??ng s???
                        <span><i class="fas"></i></span>
                    </a>
                </div>
            </div>
            <div class="collapse" id="collapse_1">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">T??n s???n ph???m: <?= $obj[0]->product_name ?></li>
                        <li class="list-group-item list-group-item-secondary">Xu???t x???: Vi???t Nam</li>
                        <li class="list-group-item ">Ch???t li???u: <?php
                                                                if ($obj[0]->material_id == 1) {
                                                                    echo "V??ng";
                                                                } elseif ($obj[0]->material_id == 2) {
                                                                    echo "B???c";
                                                                } else {
                                                                    echo "B???ch kim";
                                                                } ?></li>
                        <li class="list-group-item list-group-item-secondary">Gi???i t??nh: Unisex</li>
                        <li class="list-group-item ">M?? s???n ph???m: <?= $obj[0]->product_code ?></li>
                    </ul>
                </div>
            </div>

            <div class="card-descriptions mt-2">
                <div class="card-header">
                    <a class="btn-btn collapsed" data-bs-toggle="collapse" href="#collapse_2" role="button" aria-expanded="false" aria-controls="collapse_2">
                        M?? t??? s???n ph???m
                        <span><i class="fas"></i></span>
                    </a>
                </div>
            </div>
            <div class="collapse" id="collapse_2">
                <div class="card-body">
                    <p>V???i ki???u d??ng th???i th?????ng c??ng nh???ng vi??n ???? ????nh xung quanh b??? m???t chi???c nh???n tr??n ch???t li???u
                        b???c 92.5,
                        PNJSilver mang ?????n chi???c nh???n v???i v??? ?????p tr??? trung nh??ng kh??ng k??m ph???n ph?? c??ch, gi??p c??c c??
                        g??i tr??ng
                        th???t n???i b???t.</p>
                    <p>PNJSilver hi???u r???ng, c??c c?? g??i lu??n c?? ?????c quy???n ???????c l??m ?????p v?? t???a s??ng ????? t???o n??n phong
                        c??ch ri??ng
                        c???a ch??nh m??nh. ????? th???a s???c s??ng t???o v???i l???a ch???n ri??ng c???a t???ng c?? g??i, n??ng c?? th??? k???t h???p
                        nhi???u items
                        kh??c ????? d??? d??ng mix&match v???i nhau t??y theo c?? t??nh th???i trang v?? lu??n refresh di???n m???o m???i ng??y
                        nh??.</p>
                </div>
            </div>


            <div class="card-descriptions mt-2">
                <div class="card-header">
                    <a class="btn-btn collapsed" data-bs-toggle="collapse" href="#collapse_4" role="button" aria-expanded="false" aria-controls="collapse_4">
                        C??u h???i th?????ng g???p
                        <span><i class="fas"></i></span>
                    </a>
                </div>
            </div>
            <div class="collapse" id="collapse_4">
                <div class="card-body">
                    <div class="item">
                        <h3>Mua Online c?? ??u ????i g?? ?????c bi???t cho t??i?</h3>
                        <p>PNJ mang ?????n nhi???u tr???i nghi???m mua s???m hi???n ?????i khi mua Online:
                            <br> - ??u ????i ?????c quy???n Online v???i h??nh th???c thanh to??n ??a d???ng.
                            <br> - ?????t gi??? h??ng Online, nh???n t???i c???a h??ng.
                            <br> - Mi???n ph?? giao h??ng t??? 1-7 ng??y tr??n to??n qu???c v?? giao h??ng trong 3 gi??? t???i m???t s??? khu
                            v???c trung
                            t??m v???i c??c s???n ph???m c?? g???n nh??n 3 gi???.
                            <br> - Tr??? g??p 0% l??i su???t v???i ????n h??ng t??? 3
                            tri???u.
                            <br> - L??m s???ch trang s???c tr???n ?????i, kh???c t??n mi???n ph?? theo y??u c???u (t??y k???t c???u s???n ph???m) v??
                            ch??nh s??ch b???o h??nh,
                            ?????i tr??? d??? d??ng t???i h??? th???ng PNJ tr??n to??n qu???c.
                            <br> PNJ h??n h???nh ph???c v??? qu?? kh??ch qua Hotline
                            <a href="tel:1800545457" style="font-weight:600;color:#2e74b5;">1800 5454 57
                            </a> (08:00-21:00, mi???n ph?? cu???c g???i).
                        </p>
                    </div>
                    <div class="item">
                        <h3>N???u ?????t mua Online m?? s???n ph???m kh??ng ??eo v???a th?? c?? ???????c ?????i kh??ng?</h3>
                        <p>PNJ c?? ch??nh s??ch thu ?????i trang s???c v??ng trong v??ng 48 gi???, ?????i ni/ size trang s???c b???c trong
                            v??ng 72 gi???. Qu?? kh??ch s??? ???????c ??p d???ng ?????i tr??n h??? th???ng PNJ to??n qu???c.</p>
                    </div>
                    <div class="item">
                        <h3>S???n ph???m ??eo l??u c?? x???n m??u kh??ng, b???o h??nh nh?? th??? n??o?</h3>
                        <p>Do t??nh ch???t h??a h???c, s???n ph???m c?? kh??? n??ng oxy h??a, xu???ng m??u. PNJ c?? ch??nh s??ch b???o h??nh
                            mi???n ph?? v??? l???i k??? thu???t, n?????c xi:
                            <br>- Trang s???c v??ng: 6 th??ng.
                            <br>- Trang s???c b???c: 3 th??ng.
                            <br>Ngo??i ra, PNJ c??ng cung c???p d???ch v??? si??u ??m l??m s???ch b???ng m??y chuy??n d???ng (si??u ??m,
                            kh??ng xi)
                            mi???n ph?? tr???n ?????i t???i h??? th???ng c???a h??ng.
                        </p>
                    </div>
                    <div class="item">
                        <h3>T??i mu???n xem tr???c ti???p, c???a h??ng n??o c??n h??ng?</h3>
                        <p>V???i h??? th???ng c???a h??ng tr???i r???ng kh???p to??n qu???c, qu?? kh??ch vui l??ng li??n h??? Hotline
                            <a href="tel:1800545457" style="font-weight:600;color:#2e74b5;">1800 5454 57
                            </a>
                            (08:00-21:00, mi???n ph?? cu???c g???i) ????? ki???m tra c???a h??ng c??n h??ng v?? t?? v???n ch????ng tr??nh khuy???n
                            m??i Online tr?????c khi ?????n c???a h??ng.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5 text-center">C?? th??? b???n quan t??m</h2>
        <div class="row-card-rec d-flex justify-content-center mt-5 " style="margin-left: -20px; user-select: none;">
            <?php $obj2 = json_decode($data['DB2']);
            $index = (int)($data['rd_img']);
            for ($i = 0; $i < 4; $i++) {
                $num = $index + $i;
                if ($num >= 30) {
                    $num = $i;
                } ?>

                <div class="card-rec col-lg-3">
                    <a href="http://localhost/t2k/Detail/ShowDetail/<?= $obj2[$num]->product_id ?>">
                        <img src="<?= $obj2[$num]->product_img ?>" alt="">
                        <div class="card-rec-title"><?= $obj2[$num]->product_name ?></div>
                        <div class="card-rec-price"><?= number_format($obj2[$num]->product_price) ?></div>
                    </a>
                </div>
            <?php } ?>


        </div>
    <?php }
        $obj3 = json_decode($data['DB3']) ;?>
    <form class="cart-button">
        <a href="http://localhost/t2k/Cart"><i class="fa-solid fa-cart-shopping"></i></a>
        <span class="quantity"><?=count($obj3)?></span>
    </form>