<?php
$title = "Диагностика";
require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/components/header.php");
?>
<div class="container">
    <div class="repair block_mt">
        <div class="repair_block_cont">
            <div class="repair_image">
                <img src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/img/car.png" alt="">
            </div>
        </div>
        <div class="repair_block_cont">
            <h2 class="h2_title">Товарные группы запчастей</h2>
            <div class="repair_block_items">
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        проверка на собственном стенде
                    </h3>
                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        диагностика и ремонт форсунок системы Common Rail
                    </h3>

                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        форсунок непосредственного впрыска GDI и D-4
                    </h3>

                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        кодирование и коррекция форсунок
                    </h3>
                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        печать протокола проверки
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/components/footer.php"); ?>