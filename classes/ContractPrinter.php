<?php

class ContractPrinter
{
    public function printContracts($contracts)
    {
        if ($contracts->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Nome do Banco</th>
                        <th>Verba</th>
                        <th>Código do Contrato</th>
                        <th>Data de Inclusão</th>
                        <th>Valor</th>
                        <th>Prazo</th>
                    </tr>";

            while ($row = $contracts->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["nome_banco"]."</td>
                        <td>".$row["verba"]."</td>
                        <td>".$row["codigo_contrato"]."</td>
                        <td>".$row["data_inclusao"]."</td>
                        <td>".$row["valor"]."</td>
                        <td>".$row["prazo"]."</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "Nenhum resultado encontrado.";
        }
    }
}
