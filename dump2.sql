SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE feedback;
USE feedback;


CREATE TABLE feed (
  id int(11) NOT NULL,
  rating int(11) NOT NULL DEFAULT 0,
  comment longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE feed
  ADD PRIMARY KEY (id);


ALTER TABLE feed
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;
