CREATE TABLE x_article (id BIGINT AUTO_INCREMENT, paper_id BIGINT, title TEXT NOT NULL, url VARCHAR(255) NOT NULL, sumarry TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX paper_id_idx (paper_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE x_paper (id BIGINT AUTO_INCREMENT, name VARCHAR(200) NOT NULL, avatarpath VARCHAR(200), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE x_article ADD CONSTRAINT x_article_paper_id_x_paper_id FOREIGN KEY (paper_id) REFERENCES x_paper(id);
