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
                        увеличение мощности
                    </h3>
                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        SPEED LIM (изменение ограничения скорости)
                    </h3>

                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        NO DPF (отключение сажевого фильтра)
                    </h3>

                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        NO EGR (отключение системы рицеркуляции отработанных газов)
                    </h3>
                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        NO ADBLUE (отключение системы впрыска мочевины)
                    </h3>
                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        NO SWIRL (отключение вихревых заслонок)
                    </h3>
                </div>
                <div class="repair_block_item">
                    <h3 class="repair_h3_title">
                        DTC (селективное отключение ошибок)
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/components/footer.php"); ?>