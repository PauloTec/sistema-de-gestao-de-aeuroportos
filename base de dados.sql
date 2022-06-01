-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Maio-2022 às 18:53
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gest_aeroporto_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aeroporto`
--

CREATE TABLE `aeroporto` (
  `id_aeroporto` int(10) UNSIGNED NOT NULL,
  `nome_aeroporto` varchar(45) DEFAULT NULL,
  `pais_aeroporto` varchar(45) DEFAULT NULL,
  `cidade_aeroporto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aeroporto`
--

INSERT INTO `aeroporto` (`id_aeroporto`, `nome_aeroporto`, `pais_aeroporto`, `cidade_aeroporto`) VALUES
(1, '4 de Fevereiro', 'Angola', 'Luanda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aviao`
--

CREATE TABLE `aviao` (
  `id_aviao` int(10) UNSIGNED NOT NULL,
  `numero_aviao` varchar(45) DEFAULT NULL,
  `numero_lugares_aviao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aviao`
--

INSERT INTO `aviao` (`id_aviao`, `numero_aviao`, `numero_lugares_aviao`) VALUES
(1, '3', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_funcionario`
--

CREATE TABLE `categoria_funcionario` (
  `id_Categoria_funcionario` int(10) UNSIGNED NOT NULL,
  `nome_categoria_funcionario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_funcionario`
--

INSERT INTO `categoria_funcionario` (`id_Categoria_funcionario`, `nome_categoria_funcionario`) VALUES
(3, 'supervisor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nome_cliente` varchar(45) DEFAULT NULL,
  `genero_cliente` varchar(10) DEFAULT NULL,
  `data_nasc_passageiro` date DEFAULT NULL,
  `morada_cliente` varchar(45) DEFAULT NULL,
  `nacionalidade_cliente` varchar(45) DEFAULT NULL,
  `email_cliente` varchar(45) DEFAULT NULL,
  `telefone_cliente` varchar(45) DEFAULT NULL,
  `senha_cliente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `genero_cliente`, `data_nasc_passageiro`, `morada_cliente`, `nacionalidade_cliente`, `email_cliente`, `telefone_cliente`, `senha_cliente`) VALUES
(1, 'Teste', 'm', '2000-02-12', 'teste', 'teste', 'teste@gmail.com', '999999999', '12345'),
(2, 'samuel', 'm', '2002-02-19', 'palanca', 'Angolana', 'skissanga2@gmail.com', '925396385', '2002');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_Funcionario` int(10) UNSIGNED NOT NULL,
  `nome_funcionario` varchar(35) DEFAULT NULL,
  `Data_nasc_funcionario` date DEFAULT NULL,
  `genero_funcionario` varchar(10) DEFAULT NULL,
  `telefone_funcionario` varchar(45) NOT NULL,
  `morada_funcionario` varchar(45) DEFAULT NULL,
  `senha_funcionario` varchar(20) NOT NULL,
  `Categoria_funcionario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_Funcionario`, `nome_funcionario`, `Data_nasc_funcionario`, `genero_funcionario`, `telefone_funcionario`, `morada_funcionario`, `senha_funcionario`, `Categoria_funcionario_id`) VALUES
(5, 'chefe', '2000-05-02', 'm', '999999999', 'teste', '12345', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `data_voo` datetime NOT NULL,
  `origem_voo` varchar(45) NOT NULL,
  `destino_voo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `voo`
--

CREATE TABLE `voo` (
  `id_voo` int(10) UNSIGNED NOT NULL,
  `numero_voo` int(11) DEFAULT NULL,
  `data_voo` date DEFAULT NULL,
  `origem_voo` varchar(45) DEFAULT NULL,
  `destino_voo` varchar(45) DEFAULT NULL,
  `aeroporto_id` int(10) UNSIGNED NOT NULL,
  `funcionario_id` int(10) UNSIGNED NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `aviao_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `voo`
--

INSERT INTO `voo` (`id_voo`, `numero_voo`, `data_voo`, `origem_voo`, `destino_voo`, `aeroporto_id`, `funcionario_id`, `cliente_id`, `aviao_id`) VALUES
(1, 1, '2022-05-03', 'Luanda', 'Londres', 1, 5, 1, 1),
(2, 34, '2022-05-23', 'Luanda', 'Nova Iorque', 1, 5, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aeroporto`
--
ALTER TABLE `aeroporto`
  ADD PRIMARY KEY (`id_aeroporto`);

--
-- Indexes for table `aviao`
--
ALTER TABLE `aviao`
  ADD PRIMARY KEY (`id_aviao`);

--
-- Indexes for table `categoria_funcionario`
--
ALTER TABLE `categoria_funcionario`
  ADD PRIMARY KEY (`id_Categoria_funcionario`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_Funcionario`),
  ADD KEY `fk_Funcionario_Categoria_funcionario` (`Categoria_funcionario_id`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indexes for table `voo`
--
ALTER TABLE `voo`
  ADD PRIMARY KEY (`id_voo`),
  ADD KEY `fk_voo_aeroporto1` (`aeroporto_id`),
  ADD KEY `fk_voo_funcionario1` (`funcionario_id`),
  ADD KEY `fk_voo_cliente1` (`cliente_id`),
  ADD KEY `fk_voo_aviao1` (`aviao_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aeroporto`
--
ALTER TABLE `aeroporto`
  MODIFY `id_aeroporto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aviao`
--
ALTER TABLE `aviao`
  MODIFY `id_aviao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categoria_funcionario`
--
ALTER TABLE `categoria_funcionario`
  MODIFY `id_Categoria_funcionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_Funcionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voo`
--
ALTER TABLE `voo`
  MODIFY `id_voo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_Funcionario_Categoria_funcionario` FOREIGN KEY (`Categoria_funcionario_id`) REFERENCES `categoria_funcionario` (`id_Categoria_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `voo`
--
ALTER TABLE `voo`
  ADD CONSTRAINT `fk_voo_aeroporto1` FOREIGN KEY (`aeroporto_id`) REFERENCES `aeroporto` (`id_aeroporto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voo_aviao1` FOREIGN KEY (`aviao_id`) REFERENCES `aviao` (`id_aviao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voo_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voo_funcionario1` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id_Funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
