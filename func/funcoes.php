<?php
function listarRegistroDoisParametro($tabela, $campos, $idcampo, $idparametro, $idCampo2, $idparametro2, $ativo)
{
    $conn = conectar();
    try {
        if (is_numeric($idparametro)) {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $idcampo = ? AND $idCampo2 = ? AND ativo = '$ativo' ");
            $sqlLista->bindValue(1, $idparametro, PDO::PARAM_INT);
            $sqlLista->bindValue(2, $idparametro2, PDO::PARAM_STR);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            };
        } else {
            return 'Variável Não é aceita!';
        }
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

function listarTodosRegistros(){
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT idbanner, img, titulo, descricao, video, cadastro, alteracao, ativo FROM banner b");
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    }catch
    (PDOException $e) {
        return ($e->getMessage());
    };
    $conn = null;
}