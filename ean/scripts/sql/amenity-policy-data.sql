CREATE TABLE AttributeList(
AttributeID int,
LanguageCode varchar(5),
AttributeDesc varchar(255),
Type varchar(15),
SubType varchar(15));
CREATE TABLE AttributeList_xx_XX(
AttributeID int,
LanguageCode varchar(5),
AttributeDesc varchar(255));
CREATE TABLE PropertyAttributeLink(
EANHotelID int,
AttributeID int,
LanguageCode varchar(5),
AppendTxt varchar(800));
CREATE TABLE PropertyAttributeLink_xx_XX(
EANHotelID int,
AttributeID int,
LanguageCode varchar(5),
AppendTxt varchar(800));
