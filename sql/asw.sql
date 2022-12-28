CREATE TABLE Voluntarios (
    data_nasc DATE,
    email       VARCHAR (30)      NOT NULL,
    nome        VARCHAR (30)      NOT NULL,
    genero      VARCHAR (15)      NOT NULL,
    CC          INT (8)           NOT NULL,
    pass        VARCHAR (30)      NOT NULL,
    nrTele      INT (15)          NOT NULL,
    concelho    VARCHAR (25)      NOT NULL,
    freguesia   VARCHAR (25)      NOT NULL,
    distrito    VARCHAR (25)      NOT NULL,
    nrCartaCon  INT (9)           NOT NULL,
    areaGeografica VARCHAR(30)    NOT NULL,
    foto        VARCHAR (100)     NOT NULL,

    PRIMARY KEY (email)
);

CREATE TABLE Instituicoes (
    email       VARCHAR (30)      NOT NULL,
    nome        VARCHAR (30)      NOT NULL,
    morada      VARCHAR (50)      NOT NULL,
    pass        VARCHAR (30)      NOT NULL,
    nrTele      INT (15)          NOT NULL,
    concelho    VARCHAR (25)      NOT NULL,
    freguesia   VARCHAR (25)      NOT NULL,
    distrito    VARCHAR (25)      NOT NULL,
    descricao   VARCHAR (100)     NOT NULL,
    
    PRIMARY KEY (email)
);

CREATE TABLE Preferencias(
    diaSemana VARCHAR(30)         NOT NULL,
    horaDoDia TIME,
    email  VARCHAR(30),        

    FOREIGN KEY (email) REFERENCES Voluntarios(email)
);

CREATE TABLE tem (
    email       VARCHAR (30)      NOT NULL,
--
    CONSTRAINT pk_tem
    PRIMARY KEY (email),
--
    CONSTRAINT fk_tem_email
    FOREIGN KEY (email) REFERENCES Voluntarios(email)
--
);

CREATE TABLE interagem (
    emailV       VARCHAR (30),
    emailI       VARCHAR (30),
--    
    CONSTRAINT pk_interagem
    PRIMARY KEY (emailV, emailI),
--
    CONSTRAINT fk_interagem_emailV
    FOREIGN KEY (emailV) REFERENCES Voluntarios(email),
--
    CONSTRAINT fk_interagem_emailI
    FOREIGN KEY (emailI) REFERENCES Instituicoes(email)
);


CREATE TABLE possuem (
    emailI       VARCHAR (30),
    emailP       VARCHAR (30),
    ID           INT(3),
--    
    CONSTRAINT pk_possuem
    PRIMARY KEY (ID),
--
    CONSTRAINT fk_possuem_emailI
    FOREIGN KEY (emailI) REFERENCES Instituicoes(email),
--
    CONSTRAINT fk_possuem_emailP
    FOREIGN KEY (emailP) REFERENCES Perfil(ID)
);

CREATE TABLE Doacoes (
    id INT(3),
    periocidadeSemanal VARCHAR(30),
    localRecolha VARCHAR(30),
    horaRecolha TIME,

    PRIMARY KEY (id)
);

CREATE TABLE Perfil (
    ID INT(3),
    tipoInstituicao VARCHAR(30),
    tipoDoacoes VARCHAR(30),
    
    PRIMARY KEY (ID)
)