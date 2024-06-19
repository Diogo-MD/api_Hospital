CREATE DATABASE hospital;

USE hospital;

CREATE TABLE tbl_status (
  id_status INT PRIMARY KEY AUTO_INCREMENT,
  descricao VARCHAR(20) NOT NULL
);

CREATE TABLE tbl_tipos_procedimento (
  id_tipo_procedimento INT PRIMARY KEY AUTO_INCREMENT,
  descricao_procedimento VARCHAR(50) NOT NULL
);

CREATE TABLE tbl_cargos (
  id_cargo INT PRIMARY KEY AUTO_INCREMENT,
  descricao_cargo VARCHAR(50) NOT NULL
);

CREATE TABLE tbl_funcionarios (
  id_funcionario INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(30) NOT NULL,
  sobrenome VARCHAR(30) NOT NULL,
  id_cargo INT NOT NULL,
  FOREIGN KEY (id_cargo) REFERENCES tbl_cargos(id_cargo)
);

CREATE TABLE tbl_pacientes (
  id_paciente INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(30) NOT NULL,
  sobrenome VARCHAR(30) NOT NULL,
  email VARCHAR(150) UNIQUE,
  cep INT,
  logradouro VARCHAR(150),
  numero INT,
  bairro VARCHAR(50),
  cidade VARCHAR(100),
  uf CHAR(2),
  id_status INT NOT NULL,
  FOREIGN KEY (id_status) REFERENCES tbl_status(id_status)
);

CREATE TABLE tbl_prontuarios (
  id_prontuario INT PRIMARY KEY AUTO_INCREMENT,
  id_paciente INT NOT NULL,
  data_cadastro DATETIME NOT NULL,
  FOREIGN KEY (id_paciente) REFERENCES tbl_pacientes(id_paciente)
);

CREATE TABLE tbl_procedimentos_exame (
  id_procedimentos_exame INT PRIMARY KEY AUTO_INCREMENT,
  id_tipo_procedimento INT NOT NULL,
  FOREIGN KEY (id_tipo_procedimento) REFERENCES tbl_tipos_procedimento(id_tipo_procedimento)
);

CREATE TABLE tbl_exames (
  id_exame INT PRIMARY KEY AUTO_INCREMENT,
  id_prontuario INT NOT NULL,
  id_funcionario_solicitante INT NOT NULL,
  id_procedimentos_exame INT NOT NULL,
  data_solicitacao DATETIME NOT NULL,
  FOREIGN KEY (id_prontuario) REFERENCES tbl_prontuarios(id_prontuario),
  FOREIGN KEY (id_funcionario_solicitante) REFERENCES tbl_funcionarios(id_funcionario),
  FOREIGN KEY (id_procedimentos_exame) REFERENCES tbl_procedimentos_exame(id_procedimentos_exame)
);

CREATE TABLE tbl_consultas (
  id_consulta INT PRIMARY KEY AUTO_INCREMENT,
  id_pronturario INT NOT NULL,
  id_funcionario_atendimento INT NOT NULL,
  detalhes VARCHAR(255),
  FOREIGN KEY (id_pronturario) REFERENCES tbl_prontuarios(id_prontuario),
  FOREIGN KEY (id_funcionario_atendimento) REFERENCES tbl_funcionarios(id_funcionario)
);