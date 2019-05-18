-- Up 
CREATE TABLE genes
(
    id INTEGER,
    name TEXT,
    PRIMARY KEY(id)
);

CREATE TABLE breeds
(
    id INTEGER,
    name TEXT,
    PRIMARY KEY(id)
);


-- Down 
DROP TABLE genes
DROP TABLE breeds