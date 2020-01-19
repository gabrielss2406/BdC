-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2019 às 18:38
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bdc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(40) NOT NULL,
  `cat_slug` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`cat_id`, `cat_nome`, `cat_slug`) VALUES
(1, 'web - básico', 'curso, web, programação, iniciante, básico, bdc, melhores, h'),
(2, 'web - sistemas', 'curso, web, programação, bdc, melhores, js, node.js, php, ja'),
(3, 'banco de dados', 'curso, database, banco de dados, básico, iniciante, melhores'),
(4, 'lógicas', 'curso, programação, básico, iniciante, visualg, POO'),
(5, 'i.a.', 'curso, python, IA, inteligencia artificial, melhores, bdc'),
(6, 'desktop - básico', 'cursos, programação, básico, iniciante, desktop, java, c#, c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cursos`
--

CREATE TABLE `tb_cursos` (
  `cur_cod` int(11) NOT NULL,
  `cur_id_materia` int(11) DEFAULT NULL,
  `cur_nome` varchar(50) NOT NULL,
  `cur_descricao` varchar(60) NOT NULL,
  `cur_valor` decimal(4,2) NOT NULL,
  `cur_horas_curso` int(11) NOT NULL,
  `cur_imagem_string` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`cur_cod`, `cur_id_materia`, `cur_nome`, `cur_descricao`, `cur_valor`, `cur_horas_curso`, `cur_imagem_string`) VALUES
(1, 1, 'Web - Introdução', 'HTML, CSS, JS', '50.00', 60, 'car-1.jpg'),
(2, 4, 'Lógica de Programação', 'Visualg e noções de C', '20.00', 25, 'car-2.jpg'),
(3, 4, 'POO com JAVA/PHP', 'Sua escolha', '75.00', 90, 'car-3.jpg'),
(4, 5, 'Python Básico', 'O básico antes da IA', '30.00', 45, 'car-4.jpg'),
(5, 6, 'C#', 'Web / Desktop', '35.00', 60, 'car-5.jpg'),
(6, 2, 'Node.js', 'Uma Framework de JS', '45.00', 50, 'car-6.jpg'),
(7, 3, 'Modelagem', 'Inicio do Banco de Dados', '25.00', 35, 'car-7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`cur_cod`),
  ADD KEY `cur_id_materia` (`cur_id_materia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `cur_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD CONSTRAINT `tb_cursos_ibfk_1` FOREIGN KEY (`cur_id_materia`) REFERENCES `tb_categorias` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
