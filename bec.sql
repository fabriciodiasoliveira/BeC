CREATE TABLE loja(
	loja_id BIGINT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
	lat DECIMAL,
	longt DECIMAL)
	`created_at` timestamp NULL DEFAULT current_timestamp(),
	`updated_at` timestamp NULL DEFAULT NULL
ENGINE = InnoDB;
CREATE TABLE departamento(
	departamento_id BIGINT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
	loja_id BIGINT,
	`created_at` timestamp NULL DEFAULT current_timestamp(),
	`updated_at` timestamp NULL DEFAULT NULL
	FOREIGN KEY (loja_id)
	REFERENCES loja (loja_id)
	ON DELETE RESTRICT
	ON UPDATE NO ACTION)
ENGINE = InnoDB;
CREATE TABLE produto(
	produto_id BIGINT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
	preco DECIMAL,
        imagem VARCHAR(255),
	loja_id BIGINT,
	departamento_id BIGINT,
	`created_at` timestamp NULL DEFAULT current_timestamp(),
	`updated_at` timestamp NULL DEFAULT NULL
	FOREIGN KEY (loja_id)
	REFERENCES loja (loja_id)
	ON DELETE RESTRICT
	ON UPDATE NO ACTION,
	FOREIGN KEY (departamento_id)
	REFERENCES departamento (departamento_id)
	ON DELETE RESTRICT
	ON UPDATE NO ACTION)
ENGINE = InnoDB;