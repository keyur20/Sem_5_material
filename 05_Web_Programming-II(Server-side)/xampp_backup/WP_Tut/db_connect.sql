CREATE TABLE dataform 
(
    
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `number` int(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `gender` enum('male', 'female') NOT NULL


); 

