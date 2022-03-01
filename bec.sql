CREATE TABLE loja(
	loja_id BIGINT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
	lat DECIMAL,
	longt DECIMAL)
ENGINE = InnoDB;
CREATE TABLE departamento(
	departamento_id BIGINT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
	loja_id BIGINT,
	FOREIGN KEY (loja_id)
    REFERENCES loja (loja_id)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
CREATE TABLE produto(
	produto_id BIGINT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
	preco DECIMAL,
	loja_id BIGINT,
	departamento_id BIGINT,
	FOREIGN KEY (loja_id)
    REFERENCES loja (loja_id)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION,
    FOREIGN KEY (departamento_id)
    REFERENCES departamento (departamento_id)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;