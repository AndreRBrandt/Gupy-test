<?php

require_once 'database.php';
require_once 'contract.php';
require_once 'contract_printer.php';

// Configurações do banco de dados
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "db";

// Conecta ao banco de dados
$db = new Database($servername, $username, $password, $dbname);

// Instancia a classe Contract
$contract = new Contract($db);

// Obtém os contratos
$contracts = $contract->getContracts();

// Instancia a classe ContractPrinter
$printer = new ContractPrinter();

// Imprime os contratos
$printer->printContracts($
