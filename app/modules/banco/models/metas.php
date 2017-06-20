<?php

//--CADASTRO--
// Ciente
// Tipo (Corrent ou poupança)
// Numero da conta
// Limite da conta

//--FUNÇÕES--
// Saque
// Deposito
// Transferẽncia
// Extrato


//--CONTA--
// Valor em conta --> Cliente
// Numero da conta --> Cliente

//--------------------------------------------

//LÓGICA

//SAQUE
//Verificar se a conta existe
//Verificar se o valor em conta é suficiente
//saque = valor em conta - saque
// Se o saque for maior que o valor da conta, será descontado do limite.



// DEPOSITO
// *Mesma coisa do saque*
// Deposito = valor em conta + deposito


//TRANSFERÊNCIA
// Verificar se a conta atual existe
// Verificar se a conta destino existe
// Verificar se o valor da conta atual é suficiente
// Transferência = Saldo conta atual - Valor transferido(Saldo conta destino + Transferência);
// Cobrar 5 reais de conta corrente
// Cobrar 2 reais de conta poupança
// Extrato da conta 5 reais
// Valores do desconto vão para o banco


//EXTRATO
// Exibir valor atual em conta


//LIMITE
// Verificar se o limite foi utilizado.
// Quando não houver mais saldo na conta, descontará do limite
// Quando cair dinheiro na conta, deverá cobrir os gastos com o limite
// Será cobrada uma taxa adicional de 20 reais na primeira utilização do limite (Em cada mês)


/*
CLIENTES
create table `clientes` (
    `idCliente` int(10) not null AUTO_INCREMENT,
    `nomeCliente` varchar(70) not null,
    `numeroConta` int(6) not null,
    `tipoConta` varchar(30) not null,
    primary key (`idCliente`)
    )
*/


// CRIAR FUNÇÃO DELETE
    // FUNÇÃO DELENTE($idCampo)
//Try
// instancia o "Clientes" em uma "variavel" fazendo um findFirst no seu "id"
// verificar se a variavel é false
// Se for, gerar um erro na tela
// Caso contrário, retorna [sucesso e a variavel->delete()]


//CRIAR FUNÇÃO GET(TUDO)
//try
// Cria uma variavel
//Faço o instanciomento(Na variavel acim) e faço um find e abro array
// Condições true, concatenando com o $this->getconditons
//Defino as colunas => $this->partialFields,
// E o limit é igual ao próprio limit
// fecha o array
// fecha o find
//retorna a variavel
// Fecha o try com os exception


/*
FUNÇÃO EDIT ($idCampo)
TRY
CRIA UMA VARIAVEL PUT, com o Di request lá e um getPut
Cria outra variavel e faz o instanciamento
Faz o findfirst, cria as conditions e columns,
Verifica se a variavel (Com instacioamento) é falsa
Se for, mostra um exception

usa a variavel criada e faz os metodos Setters (com isset), com o IF/Else ternário para pegar os campos
depois de declarar todos os campos que deseja pegar, salva no banco de DB
e retorn o valor
finaliza o try e adiciona os exception*/


/*
FUNÇÃO ADICIONAR
Try
cria variavel
instancia objeto
faz o set com o di e request
salva no banco
retorna a variavel
finaliza o try
adiciona os exeption
*/



/*
    Conta origem
    conta destino
    valor


*/

/*
    extrato

Não precisa ter um campo no banco para isso, ele apenas pode ser a visualização de todos os outros campos.

*/
