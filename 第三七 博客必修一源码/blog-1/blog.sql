--创建数据库默认是utf8_general_ci
CREATE DATABASE blog DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

--创建表

CREATE TABLE posts(id INT auto_increment,title VARCHAR(255),body TEXT,PRIMARY KEY(id));

--插入数据

INSERT INTO posts(title,body) VALUES('我的第一篇博客','这就是我的第一篇博客内容');
INSERT INTO posts(title,body) VALUES('我的第二篇博客','这就是我的第二篇博客内容');
INSERT INTO posts(title,body) VALUES('PHP不是太难学','这就是PHP不是太难学博客内容');