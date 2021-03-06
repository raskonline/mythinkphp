#选择myblog
USE myblog;
SHOW TABLES;

#系统管理员表
DROP TABLE IF EXISTS bg_user;
CREATE TABLE IF NOT EXISTS bg_user(
  id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '用户编号',
  name CHAR(20) NOT NULL COMMENT '账号',
  pwd  CHAR(32) NOT NULL COMMENT '密码'
)ENGINE=INNODB DEFAULT CHARSET=UTF8 ;
DESC bg_user;

#博客分类表
DROP TABLE IF EXISTS bg_catalog;
CREATE TABLE IF NOT EXISTS bg_catalog(
  id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '分类编号',
  name CHAR(50) NOT NULL COMMENT '分类名称'
)ENGINE=INNODB DEFAULT CHARSET=UTF8 ;
DESC bg_catalog;

#博客文章表
DROP TABLE IF EXISTS bg_article;
CREATE TABLE IF NOT EXISTS bg_article(
  id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '文章编号',
  title CHAR(60) NOT NULL COMMENT '标题',
  author CHAR(60) COMMENT '作者',
  summary CHAR(255) COMMENT '摘要',
  keywords CHAR(255) COMMENT '关键字',
  content TEXT NOT NULL COMMENT '内容',
  photo CHAR(100) COMMENT '图片',
  click INT(6) COMMENT '点击量',
  state SMALLINT COMMENT '是否推荐：1推荐，0不推荐',
  ptime INT COMMENT '发布时间',
  cid INT NOT NULL COMMENT '文章分类编号',
  CONSTRAINT article_catalog_id FOREIGN KEY(id) REFERENCES bg_catalog(id)
)ENGINE=INNODB DEFAULT CHARSET=UTF8 ;
DESC bg_article;


#网站友情链接表
DROP TABLE IF EXISTS bg_link;
CREATE TABLE IF NOT EXISTS bg_link(
  id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '链接编号',
  title CHAR(50) NOT NULL COMMENT '链接名称',
  url  CHAR(255) NOT NULL COMMENT '链接URL',
  des CHAR(255) NOT NULL COMMENT '描述'
)ENGINE=INNODB DEFAULT CHARSET=UTF8 ;
DESC bg_link;
