CREATE TABLE groups(
   group_id INT,
   group_name VARCHAR(50) NOT NULL,
   PRIMARY KEY(group_id)
);

CREATE TABLE users(
   user_id INT AUTO_INCREMENT,
   user_name VARCHAR(50) NOT NULL,
   user_email VARCHAR(255) NOT NULL,
   user_pass VARCHAR(255) NOT NULL,
   group_id INT NOT NULL,
   PRIMARY KEY(user_id),
   UNIQUE(user_name),
   UNIQUE(user_email),
   FOREIGN KEY(group_id) REFERENCES groups(group_id)
);
