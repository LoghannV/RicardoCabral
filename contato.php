<?php

include_once('php/header.php');

?>

<body>
    <div class="container-fluid h-50 d-flex justify-content-center align-items-center" id="principal"
        style=" background: url('img/postegaragem.jpg');background-size:cover;">
        <div class="w-75 d-flex">
            <div class="w-50">
                <p class="text-white fs-4 w-50 text-justify">
                    <strong> FUNCIONAMENTO</strong><br>
                    Segunda a Sexta das 8h às 18h
                    Sábado das 8h às 13h
                </p>
                <p class="text-white fs-4 w-50 text-justify">
                    <strong>ONDE ESTAMOS</strong><br>
                    Avenida Tancredo Neves nº212 Chácara Campos Elíseos
                    CEP 13050-254 - Campinas/SP
                </p>
            </div>

            <form class="container mx-auto w-50 bg-white p-2" style="border-radius:10px;">
                <p class="fs-4 text-center ">CONTATE-NOS VIA EMAIL</p>

                <div class="form-group">
                    <input type="text" class="form-control" id="nome" placeholder="Nome" required />
                </div>
                <div class="form-group mt-1">
                    <input type="email" class="form-control" id="email" placeholder="E-mail" required />
                </div>
                <div class="form-group mt-1" id="telefone">
                    <input type="text" class="form-control" placeholder="(xx) xxxxx-xxxx" required />
                </div>
                <div class="form-group mt-1">
                    <textarea class="form-control" id="mensagem" rows="3" placeholder="Digite sua mensagem aqui"
                        required></textarea>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mt-1">
                    <button class="btn btn-green text-success" type="button" href="#">Enviar mensagem</button>
                </div>
            </form>
        </div>
    </div>



    <?php
    include_once('php/footer.php');
    ?>
</body>