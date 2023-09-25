SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSSACTION;
SET time_zone ="+00:00";

CREATE TABLE 'form'(
    id int NOT NULL,
    'name' varchar(255) NOT NULL,
    'email' varchar(255) NOT NULL,
    'number' varchar(255) NOT NULL,
    'date' datetime NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE 'form'
ADD PRIMARY KEY ('id');

ALTER TABLE 'form'
MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

