DROP DATABASE college_system;
CREATE DATABASE college_system;
CREATE TABLE depart(
    id_dep INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    depart VARCHAR(50)
);
CREATE TABLE special(
    id_speci INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_deps INT NOT NULL,
    name_speci	VARCHAR(30),
    CONSTRAINT fk_depart_sp_id FOREIGN KEY(id_deps) REFERENCES depart(id_dep)
);
CREATE TABLE wishes(
    id_wish	INT	NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Id_depw	INT	NOT NULL,
    id_speciw INT NOT NULL,
    CONSTRAINT fk_departw_id FOREIGN KEY(Id_depw) REFERENCES depart(id_dep),
    CONSTRAINT fk_specialw_id FOREIGN KEY(id_speciw) REFERENCES special(id_speci)
);
CREATE TABLE school_study(
    id_sc_st INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_sc_st VARCHAR(50),
    type_sc_st VARCHAR(50)
);
CREATE TABLE top_available(
    id_t_aval INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_dep_top INT NOT NULL,
    id_speci_top INT NOT NULL,
    percent FLOAT(10),
    count_sit INT,
    CONSTRAINT fk_departop_id FOREIGN KEY(id_dep_top) REFERENCES depart(id_dep),
    CONSTRAINT fk_specialtop_id FOREIGN KEY(id_speci_top) REFERENCES special(id_speci)
);
CREATE TABLE accept(
    id_accept INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    deci_accept VARCHAR(30),
    type_accept VARCHAR(50)
);
DROP TABLE school_study;
CREATE TABLE school_study(
    id_reg INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_reg VARCHAR(255),
    phone_reg VARCHAR(15)
);
CREATE TABLE student_stud(
    id_stud INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_stud VARCHAR(255),
    date_brith VARCHAR(255),
    place_brith	VARCHAR(30),
    phone_stud INT UNIQUE,
    pid_stud INT UNIQUE,
    type_pid VARCHAR(20),
    nationality	VARCHAR(20),
    num_sit_sc INT UNIQUE,
    name_sc_st VARCHAR(30),
    date_sc_st Date,       
    date_reqest	Date,
    email VARCHAR(255),
    papers VARCHAR(255)
);
CREATE TABLE student_choice(
    id_student_choice INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id__stud INT NOT NULL,
    -- id_sc_stud INT NOT NULL,
    -- id_wish_stud INT NOT NULL,
    id_dep_stud	INT NOT NULL,
    id_speci_stud INT NOT NULL,
    -- CONSTRAINT fk_school_id FOREIGN KEY(id_sc_stud) REFERENCES school_study(id_reg),
    CONSTRAINT fk_student_stud_id FOREIGN KEY(id__stud) REFERENCES student_stud(id_stud),
    -- CONSTRAINT fk_wishestud_id FOREIGN KEY(id_wish_stud) REFERENCES wishes(id_wish),
    CONSTRAINT fk_departstud_id FOREIGN KEY(id_dep_stud) REFERENCES depart(id_dep),
    CONSTRAINT fk_specialstud_id FOREIGN KEY(id_speci_stud) REFERENCES special(id_speci)
);