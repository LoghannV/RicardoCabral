<?php

include_once('php/header.php');
 $arrText = ['Poste economico 1 Caixa','Poste Padrão 1 Caixa','Poste Padrao Visor Aereo 1 caixa',
    'Poste Economico 2 Caixas','Poste Padrão 2 Caixas','Poste Cemig 5,0 X 150 1 Caixa VR',
    'Poste Econômico 3 Caixas','Poste Padrão 3 Caixas','Poste Duplo T','Poste Padrão 7,5X600 1 Caixa TC',
    'Poste Padrao 4 Caixas','Poste Padrão subterrâneo 1 caixa VL 100a e 200a','Poste Padrão 7,5X600 1 Caixa Barramento'
];
?>

<body>
    <div class="container-fluid h-50 d-flex justify-content-center align-items-center" id="principal"
        style=" background: url('img/postes2.png'); background-size:cover;">
        <h1 class="display-1 text-center mx-auto text-white" style="backdrop-filter: blur(10px);">
            Postes Padrão <br> <strong class="text-green">CPFL</strong>
        </h1>
    </div>
    <div class="container-fluid justify-content-center align-items-center bg-success">
        <div class="mx-auto w-50 d-flex justify-content-center align-items-center">
            <p class="fw-bold fs-5 w-50 text-white text-center">
                13 MODELOS PARA ATENDER SEU IMÓVEL

                DENTRO DOS PADRÕES DE SEGURANÇA CPFL
            </p>
        </div>
        <div class="mx-auto w-100">
            <img src="img/rede.png" class="mx-auto d-block" alt="..." />
        </div>

        <div class="w-100 d-flex flex-wrap justify-content-around align-items-center mt-2">
            <?php for($i = 1; $i<14;$i++){ ?>
            <div class="card" style="width:500px;">
                <img src=<?php echo "img/postes/ps".$i.".png";?> class="card-img-top" alt="...">
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