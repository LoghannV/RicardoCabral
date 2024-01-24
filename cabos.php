<?php

include_once('php/header.php');
$arrText = ['Cabo Flexível 750 Preto','Cabo Flexível 750 Azul'];
?>

<body>
    <div class="container-fluid h-50 d-flex justify-content-center align-items-center" id="principal"
        style=" background: url('img/cabos-eletricos.jpeg'); background-size:cover;">
        <h1 class="display-1 text-center mx-auto text-white" style="backdrop-filter: blur(10px);">
            Cabos <strong class="text-green">Elétricos</strong>
        </h1>
    </div>
    <div class="container-fluid justify-content-center align-items-center bg-success">

        <div class="mx-auto w-50 d-flex justify-content-center align-items-center">
            <p class="fw-bold fs-5 w-75 text-white text-center">
            NA POSTES PITON, ATENDEMOS NOSSOS CLIENTES COM

DEMANDAS DOS CABOS ELÉTRICOS 750 NAS MEDIDAS

1,5mm, 2,5mm, 4mm, 6mm, 10mm, 16mm, 25mm, 35mm, 50mm, 70mm e 95mm
            </p>
        </div>
        <div class="w-100 d-flex flex-wrap justify-content-around align-items-center mt-2">
            <?php for($i = 1; $i<3;$i++){ ?>
            <div class="card" style="width:500px;">
                <img src=<?php echo "img/cabos/cs".$i.".jpg";?> class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $arrText[$i-1]; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <?php
    include_once('php/footer.php');
    ?>
</body>