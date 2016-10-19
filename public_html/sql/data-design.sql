DROP TABLE IF EXISTS lot;
DROP TABLE IF EXISTS catalog;
DROP TABLE IF EXISTS company;

CREATE TABLE company (
	companyId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	companyLogo VARCHAR(32),
	companyAddress VARCHAR(256),
	companyBuyerPremium INT,
	companyShippingPolicy TEXT,
	companyPaymentPolicy TEXT
);

CREATE UNIQUE INDEX companyCompanyId ON company (companyId);
CREATE UNIQUE INDEX companyCompanyAddress ON company (companyAddress) ;

CREATE TABLE catalog (
	catalogId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	calalogName VARCHAR(128),
	catalogCompanyId INT,
	FOREIGN KEY catalogCompanyId (catalogCompanyId) REFERENCES company(companyId)
);


CREATE TABLE lot (
	lotId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	lotName VARCHAR(128) NOT NULL,
	lotStartBid INT NOT NULL,
	lotValueEstimate INT NOT NULL,
	lotDescription TEXT,
	lotImage VARCHAR(64),
	lotCatalogId INT,
	FOREIGN KEY lotCatalogId (lotCatalogID) REFERENCES catalog(catalogId)
);
