#IfNotTable visitors_table
CREATE TABLE `visitors_table` (
  `id`         bigint(20) NOT NULL AUTO_INCREMENT,
  `date`       timestamp DEFAULT CURRENT_TIMESTAMP,
  `fname`       varchar(255) DEFAULT NULL,
  `user`       varchar(255) DEFAULT NULL,
  `groupname`  varchar(255) DEFAULT NULL,
  `authorized` tinyint(4)   DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
#EndIf

#IfNotRow visitors_table groupname groupname
INSERT INTO `visitors_table` (`fname`, `user`, `groupname`, `authorized`) VALUES ('sK', 'Kifs', 'groupname', '11');
#EndIf

---#IfNotColumn visitors_table date
--ALTER TABLE `visitors_table` DROP COLUMN `date`;
--#EndIf

#IfMissingColumn visitors_table date
ALTER TABLE `visitors_table` ADD `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ; 
#EndIf

#IfRow2D visitors_table id 4 fname sk
UPDATE `visitors_table` SET fname='kishore',user='Kishorem',groupname='Kishoregroup' WHERE id='4' AND fname='sk';
#EndIf

#IfNotRow layout_options title task3
 INSERT INTO layout_options (form_id, source, field_id, title, group_id, seq, uor, fld_length, fld_rows, titlecols, datacols, data_type, edit_options, default_value, description, max_length, list_id, list_backup_id ) VALUES ('DEM','F','task3','Task3','1','19','1','10','0','1','1','2','','','Task For sql Upgrade via localhost','20','','');
#EndIf

#IfMissingColumn patient_data task3
ALTER TABLE `patient_data` ADD task3 text NULL;
#EndIf
