<?php

if(!is_dir("./teste1")) {
    mkdir('./teste1', 0777);
    
echo "Pasta teste 1 criada com sucesso!";
}
echo "A pasta já existe.";


if (!is_dir("./teste2/teste3")) {
    mkdir('./teste2/teste3', 0777, true);

    echo "Pasta teste2 e teste3 criada com sucesso!";
}
echo "As pastas já existem.";

?>