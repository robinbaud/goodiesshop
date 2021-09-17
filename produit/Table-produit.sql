CREATE TABLE produit (
    id_produit INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    reference VARCHAR(20) NOT NULL ,
    categorie VARCHAR(20) NOT NULL ,
    titre VARCHAR(100) NOT NULL ,
    description TEXT NOT NULL ,
    couleur VARCHAR(20) NOT NULL ,
    taille VARCHAR(5) NOT NULL ,
    public ENUM('m', 'f', 'mixte') NOT NULL ,
    photo VARCHAR(250) NOT NULL ,
    prix INT(3) NOT NULL ,
    stock INT(3) NOT NULL ,
    UNIQUE (reference)
) ENGINE = InnoDB;