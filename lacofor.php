<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="ok">
</form>


<?php
/*$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezenbro");
foreach($meses as $mes){
    echo "O mês é ". $mes."\n";
}*/

if(isset($_GET)){
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key;
        echo "Valor do campo: ". $value;
        echo "<hr>";
    }
}


