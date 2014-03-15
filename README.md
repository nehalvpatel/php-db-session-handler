Database SessionHandler PHP class
=================================

Abstract DbSessionHandler. Test and working for MySQL. It uses PDO driver.

Recommended database session table
----------------------------------

```sql
CREATE TABLE `sessions` (
	`ID` varchar(63) CHARACTER SET ascii NOT NULL DEFAULT '',
	`Data` text,
	`Expire` int(10) unsigned DEFAULT NULL,
	PRIMARY KEY (`ID`),
	KEY `Expire` (`Expire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```