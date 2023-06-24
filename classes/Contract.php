<?php

class Contract
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getContracts()
    {
        $sql = "SELECT Tb_banco.nome AS nome_banco, Tb_convenio.verba, Tb_contrato.codigo AS codigo_contrato, Tb_contrato.data_inclusao, Tb_contrato.valor, Tb_contrato.prazo
                FROM Tb_contrato
                INNER JOIN Tb_convenio_servico ON Tb_contrato.convenio_servico = Tb_convenio_servico.codigo
                INNER JOIN Tb_convenio ON Tb_convenio_servico.convenio = Tb_convenio.codigo
                INNER JOIN Tb_banco ON Tb_convenio.banco = Tb_banco.codigo";

        return $this->db->executeQuery($sql);
    }
}
