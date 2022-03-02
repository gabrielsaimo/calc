<?php
if(!empty($_REQUEST)){echo '&nbsp i &nbsp j &nbsp k <br>';
    echo '['.$a1=$_POST['a1'];echo ' &nbsp '.$a2=$_POST['a2'];echo ' &nbsp'.$a3=$_POST['a3'];echo '] <br>';
    echo '['.$b1=$_POST['b1'];echo ' &nbsp '.$b2=$_POST['b2'];echo ' &nbsp'.$b3=$_POST['b3'];echo '] <br>';

    'i('.$ui=$a2*$b3.') -i('.$ni=$a3*$b2.')';
    'j('.$uj=$a3*$b1.') -j('.$nj=$a1*$b3.')';
    'k('.$uk=$a1*$b2.') -k('.$nk=$a2*$b1.')';

    echo' i('.$a2.'.'.$b3.') -i('.$a3.'.'.$b2.') &nbsp';
    echo' j('.$a3.'.'.$b1.') -j('.$a1.'.'.$b3.') &nbsp';
    echo' k('.$a1.'.'.$b2.') -k('.$a2.'.'.$b1.') <br>';
    $f1 = $ui - $ni; $f2 = $uj - $nj; $f3 = $uk - $nk;

    echo 'Resultado = ('.$f1.' '.$f2.' '.$f3.')';}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<form  method="POST" action="index.php" id="resut">
<table class="tb2">
    <tr>
        <td></td><td>V1</td><td>V2</td><td>V3</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="text" required name="a1" placeholder="6.10x³">
        </td>
        <td>
            <input type="text" required name="a2" placeholder="6.10x³">
        </td>
        <td>
            <input type="text" required name="a3" placeholder="6.10x³">
        </td>
    </tr>
    <tr>
        <td></td> <td>F1</td><td>F2</td><td>F3</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="text" required name="b1" placeholder="6.10x³">
        </td>
        <td>
            <input type="text" required name="b2" placeholder="6.10x³">
        </td>
        <td>
            <input type="text" required name="b3" placeholder="6.10x³">
        </td>
    </tr>
</table>
    <button type="submit" value="entrar" id="entrar" name="entrar" data-loading-btn class="">
        <span data-loaded-msg="Thank you!">Go</span>
    </button>
</form>

</body>
</html>