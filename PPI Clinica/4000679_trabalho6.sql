-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb33.awardspace.net
-- Generation Time: Mar 18, 2022 at 12:44 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4000679_trabalho6`
--

-- --------------------------------------------------------

--
-- Table structure for table `Agenda`
--

CREATE TABLE `Agenda` (
  `Codigo` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Horario` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CodigoMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `BasedeEndereçosAJAX`
--

CREATE TABLE `BasedeEndereçosAJAX` (
  `CEP` varchar(9) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `Logradouro` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Funcionario`
--

CREATE TABLE `Funcionario` (
  `DataContrato` date NOT NULL,
  `Salario` double NOT NULL,
  `SenhaHash` varchar(100) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Medico`
--

CREATE TABLE `Medico` (
  `Codigo` int(11) NOT NULL,
  `Especialidade` varchar(50) NOT NULL,
  `CRM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Paciente`
--

CREATE TABLE `Paciente` (
  `Peso` float NOT NULL,
  `Altura` float NOT NULL,
  `TipoSanguineo` varchar(5) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Pessoa`
--

CREATE TABLE `Pessoa` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `Logradouro` varchar(50) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Agenda`
--
ALTER TABLE `Agenda`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `medico_fkk` (`CodigoMedico`);

--
-- Indexes for table `BasedeEndereçosAJAX`
--
ALTER TABLE `BasedeEndereçosAJAX`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Funcionario`
--
ALTER TABLE `Funcionario`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `Medico`
--
ALTER TABLE `Medico`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `Paciente`
--
ALTER TABLE `Paciente`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `Pessoa`
--
ALTER TABLE `Pessoa`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Agenda`
--
ALTER TABLE `Agenda`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `BasedeEndereçosAJAX`
--
ALTER TABLE `BasedeEndereçosAJAX`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `Pessoa`
--
ALTER TABLE `Pessoa`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Agenda`
--
ALTER TABLE `Agenda`
  ADD CONSTRAINT `medico_fkk` FOREIGN KEY (`CodigoMedico`) REFERENCES `Medico` (`Codigo`);

--
-- Constraints for table `Funcionario`
--
ALTER TABLE `Funcionario`
  ADD CONSTRAINT `funcionario_fk` FOREIGN KEY (`Codigo`) REFERENCES `Pessoa` (`Codigo`);

--
-- Constraints for table `Medico`
--
ALTER TABLE `Medico`
  ADD CONSTRAINT `medico_fk` FOREIGN KEY (`Codigo`) REFERENCES `Funcionario` (`Codigo`);

--
-- Constraints for table `Paciente`
--
ALTER TABLE `Paciente`
  ADD CONSTRAINT `paciente_fk` FOREIGN KEY (`Codigo`) REFERENCES `Pessoa` (`Codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
