<?php


function listarTodosRegistros($campos, $tabela, $ativo)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ?  ");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        }
        ;
    } catch
    (PDOException $e) {
        return ($e->getMessage());
    }
    ;
}

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
            }
            ;
        } else {
            return 'Variável Não é aceita!';
        }
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    }
    ;
}

function listarRegistroDoisParametro2($tabela, $campos, $idcampo, $idparametro, $ativo)
{
    $conn = conectar();
    try {
        if (is_numeric($idparametro)) {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $idcampo = ? AND ativo = '$ativo' ");
            $sqlLista->bindValue(1, $idparametro, PDO::PARAM_INT);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            }
            ;
        } else {
            return 'Variável Não é aceita!';
        }
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    }
    ;
}

function listarRegistroDoisParametro2A($tabela, $campos, $idcampo, $idparametro, $ativo)
{
    $conn = conectar();
    try {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $idcampo = ? AND ativo = '$ativo' ");
            $sqlLista->bindValue(1, $idparametro, PDO::PARAM_STR);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            }
            ;
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    }
    ;
}

function inserirRegistrosReturnId($tabela, $campos, $valores)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("INSERT INTO $tabela ($campos) VALUES ($valores, NOW())");
        $resul = $sqlLista->execute();
        if ($resul === false) {
            $conn->rollback();
            return false;
        } else {
            $id = $conn->lastInsertId();
            return $id;
        }
        ;
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    }
    ;
}

function inserirRegistros($tabela, $campos, $valores)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("INSERT INTO $tabela ($campos) VALUES ($valores, NOW())");
        $resul = $sqlLista->execute();
        if ($resul === false) {
            $conn->rollback();
            return false;
        } else {
            return true;
        }
        ;
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    }
    ;
}