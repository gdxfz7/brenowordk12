<?php
session_start();
include "conect.php";
if (!isset($_SESSION['id']) || $_SESSION['tipo'] !== 'admin') header("Location: entrar.php");

$res = $conn->query("SELECT ID, UtilizadorID, Local, TipoProblema, Descricao, DataSolicitacao, Estado FROM Solicitacoes");

?>
<!DOCTYPE html>
<html lang="pt">
<head><meta charset="UTF-8"><title>Painel Admin</title></head>
<body>
    <h2>Painel do Administrador</h2>
    <table border="1" cellpadding="6">
        <tr><th>ID</th><th>Utilizador</th><th>Local</th><th>Tipo</th><th>Descrição</th><th>Data</th><th>Estado</th></tr>
        <?php while ($r = $res->fetch_assoc()) { ?>
            <tr>
                <td><?= $r['ID'] ?></td>
                <td><?= $r['utilizador'] ?></td>
                <td><?= $r['Local'] ?></td>
                <td><?= $r['TipoProblema'] ?></td>
                <td><?= $r['Descricao'] ?></td>
                <td><?= $r['DataSolicitacao'] ?></td>
                <td><?= $r['Estado'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <p><a href="painelinicial.php">Voltar</a></p>
</body>
</html>

