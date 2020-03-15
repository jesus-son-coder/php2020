<html>
<head>
    <title>Le garage de Bob - R&eacute;sultats de la Commande</title>
</head>
<body>
    <h1>Le garage de Bob</h1>
    <br>
    <h2>Formulaire de commande</h2>

    <form action="04_process_order_with_exceptions_handler.php" method="post" >
        <table border="0">
            <thead>
                <tr bgcolor="#cccccc">
                    <td width=150>Articles</td>
                    <td width=15>Quantité</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pneus</td>
                    <td align="left"><input type="text" name="qte_pneus" size="4" maxlength="3"></td>
                </tr>
                <tr>
                    <td>Huiles</td>
                    <td align="left"><input type="text" name="qte_huiles" size="4" maxlength="3"></td>
                </tr>
                <tr>
                    <td>Bougies</td>
                    <td align="left"><input type="text" name="qte_bougies" size="4" maxlength="3"></td>
                </tr>
                <tr>
                    <td>Adresse de livraison</td>
                    <td>
                        <textarea name="adresse" id="" cols="30" rows="2"></textarea>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center" bgcolor="#eeeeff">
                        <input type="submit" value="Passer commande" />
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
<?php
/*
$path = $_SERVER['DOCUMENT_ROOT'] . "01_PHP_Fondamentals/01_POO/02_gestion_Exceptions/orders/";
print_r($path);
die(); */
?>