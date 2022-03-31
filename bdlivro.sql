-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Mar-2022 às 00:20
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlivro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblclientes`
--

CREATE TABLE `tblclientes` (
  `idcliente` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `tel` int(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblclientes`
--

INSERT INTO `tblclientes` (`idcliente`, `cliente`, `tel`, `endereco`, `email`) VALUES
(1, 'felipe', 3335, 'end 1', 'felipe@nome'),
(10, 'jose', 3334, 'end 2', 'jose@aaaa'),
(13, 'felipe', 8040, 'end 3', 'FELIPE@NOME'),
(18, 'diego', 8040, 'ENDEREÇO 1', 'diego@aaaa'),
(19, 'Felipe', 99999999, 'endereço', 'FELIPE@NOME');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbldepart`
--

CREATE TABLE `tbldepart` (
  `iddepart` int(11) NOT NULL,
  `nomedepart` varchar(30) NOT NULL,
  `idfunc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbldepart`
--

INSERT INTO `tbldepart` (`iddepart`, `nomedepart`, `idfunc`) VALUES
(0, 'adiministração', '4'),
(1, 'adiministração', '0'),
(2, 'dev', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblestoque`
--

CREATE TABLE `tblestoque` (
  `idproduto` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `qtdmax` int(11) NOT NULL,
  `qtdmin` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `fornecedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblestoque`
--

INSERT INTO `tblestoque` (`idproduto`, `produto`, `qtd`, `qtdmax`, `qtdmin`, `preco`, `fornecedor`) VALUES
(1, 'coxinha', 5, 30, 1, 1, '0'),
(3, 'pastel', 7, 30, 1, 3, '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblfornecedores`
--

CREATE TABLE `tblfornecedores` (
  `idF` int(11) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `fornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblfornecedores`
--

INSERT INTO `tblfornecedores` (`idF`, `cnpj`, `fornecedor`) VALUES
(2, '99999999', 'cha de trovão'),
(3, '99999999', 'chá de trovão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblfunc`
--

CREATE TABLE `tblfunc` (
  `idfunc` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `iddepart` varchar(50) NOT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblfunc`
--

INSERT INTO `tblfunc` (`idfunc`, `nome`, `cargo`, `iddepart`, `salario`) VALUES
(1, 'felipe', 'php', '0', 3000),
(2, 'felipe', 'php', '0', 3000),
(3, 'felipe', 'php', '2', 3000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblvendas`
--

CREATE TABLE `tblvendas` (
  `idvenda` int(11) NOT NULL,
  `datavenda` date NOT NULL,
  `idproduto` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idfunc` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `precototal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblvendas`
--

INSERT INTO `tblvendas` (`idvenda`, `datavenda`, `idproduto`, `idcliente`, `idfunc`, `qtd`, `precototal`) VALUES
(1, '0000-00-00', 1, 1, 1, 5, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblclientes`
--
ALTER TABLE `tblclientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `tbldepart`
--
ALTER TABLE `tbldepart`
  ADD PRIMARY KEY (`iddepart`);

--
-- Índices para tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `tblfornecedores`
--
ALTER TABLE `tblfornecedores`
  ADD PRIMARY KEY (`idF`);

--
-- Índices para tabela `tblfunc`
--
ALTER TABLE `tblfunc`
  ADD PRIMARY KEY (`idfunc`);

--
-- Índices para tabela `tblvendas`
--
ALTER TABLE `tblvendas`
  ADD PRIMARY KEY (`idvenda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblclientes`
--
ALTER TABLE `tblclientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tblfornecedores`
--
ALTER TABLE `tblfornecedores`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblfunc`
--
ALTER TABLE `tblfunc`
  MODIFY `idfunc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblvendas`
--
ALTER TABLE `tblvendas`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
