CREATE TABLE bfb.nomina (
	id INT auto_increment NOT NULL,
	first_name varchar(100) NULL,
	last_name varchar(100) NULL,
	doc_id varchar(24) NULL,
	salary DECIMAL NULL,
	CONSTRAINT nomina_pk PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

ALTER TABLE bfb.nomina MODIFY COLUMN salary decimal(10,2) DEFAULT NULL NULL;
ALTER TABLE bfb.nomina ADD CONSTRAINT nomina_unique UNIQUE KEY (doc_id);


creacion 
INSERT INTO nomina (first_name, last_name, doc_id, salary) VALUES ("pedro", "jimenez", "ÄA3433", 900.56)