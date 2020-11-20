CREATE TABLE `students` ( 
  `admNo` INT(10) NOT NULL AUTO_INCREMENT ,
  `firstName` VARCHAR(255) NOT NULL , 
  `lastName` VARCHAR(255) NOT NULL , 
  `dateofBirth` DATE NOT NULL , 
  `school` VARCHAR(8) NOT NULL , 
  `course` VARCHAR(8) NOT NULL , 
  PRIMARY KEY (`admNo`)
) ENGINE = InnoDB;

INSERT INTO `students` 
  (`admNo`, `firstName`, `lastName`, `dateofBirth`, `school`, `course`) 
  VALUES
  (1, 'David', 'Kamau', '1997-04-10', 'SCES', 'BICS'),
  (2, 'Mary', 'Otieno', '1998-03-29', 'SCES', 'BBIT'),
  (3, 'Wendy', 'Kirui', '1997-11-11', 'SCES', 'BTC'),
  (4, 'Moustafa', 'Ali', '1998-07-02', 'SCES', 'BICS'),
  (5, 'Fatuma', 'Khadija', '1997-12-13', 'SCES', 'BICS');
