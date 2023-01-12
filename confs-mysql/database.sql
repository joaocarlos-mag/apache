CREATE TABLE fabricante
(
  nome INT NOT NULL,
  id INT NOT NULL,
  cnpj INT NOT NULL,
  PRIMARY KEY (id),
  UNIQUE (cnpj)
);

CREATE TABLE produto
(
  nome INT NOT NULL,
  id INT NOT NULL,
  valor INT NOT NULL,
  id_fabricante INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (id_fabricante) REFERENCES fabricante(id)
);
