USE persons_list;
CREATE TABLE
    persons (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        phone VARCHAR(50)
    ) ENGINE=INNODB;