CREATE TABLE IF NOT EXISTS `wellness_programe`(
    id bigint(20) NOT NULL auto_increment,
    date datetime default NULL,
    pid bigint(20) default NULL,
    user varchar(255) default NULL,
    groupname varchar(255) default NULL,
    authorized tinyint(4) default NULL,
    activity tinyint(4) default NULL,    
    name varchar(255) default NULL,
    gender varchar(255) default NULL,
    cancer varchar(255),
    heart_disease varchar(255),
    weight_problem varchar(255),
    others varchar(255),
    condition_crictical varchar(255),
    symptoms longtext,
    document longtext,
    PRIMARY KEY (id)
) ENGINE=InnoDB;