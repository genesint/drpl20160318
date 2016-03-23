CREATE TABLE CityCoordinatesList(
RegionID int,
RegionName varchar(255),
Coordinates TEXT);
CREATE TABLE AirportCoordinatesList(
AirportID int,
AirportCode varchar(3),
AirportName varchar(70),
Latitude numeric(9,6),
Longitude numeric(9,6),
MainCityID int,
CountryCode varchar(2));
CREATE TABLE AliasRegionList(
RegionID int,
LanguageCode varchar(5),
AliasString varchar(255));
CREATE TABLE AliasRegionList_xx_XX(
RegionID int,
LanguageCode varchar(5),
AliasString varchar(255));
CREATE TABLE CountryList(
CountryID int,
LanguageCode varchar(5),
CountryName varchar(256),
CountryCode varchar(2),
Transliteration varchar(256),
ContinentID int);
CREATE TABLE CountryList_xx_XX(
CountryID int,
LanguageCode varchar(5),
CountryName varchar(256));
CREATE TABLE ParentRegionList(
RegionID int,
RegionType varchar(50),
RelativeSignificance varchar(3),
SubClass varchar(50),
RegionName varchar(255),
RegionNameLong varchar(510),
ParentRegionID int,
ParentRegionType varchar(50),
ParentRegionName varchar(255),
ParentRegionNameLong varchar(510));
CREATE TABLE RegionList_xx_XX(
RegionID int,
LanguageCode varchar(5),
RegionName varchar(255),
RegionNameLong varchar(510));
CREATE TABLE NeighborhoodCoordinatesList(
RegionID int,
RegionName varchar(255),
Coordinates TEXT);
CREATE TABLE PointsOfInterestCoordinatesList(
RegionID int,
RegionName varchar(255),
RegionNameLong varchar(510),
Latitude numeric(9,6),
Longitude numeric(9,6),
SubClassification varchar(20));
CREATE TABLE RegionCenterCoordinatesList(
RegionID int,
RegionName varchar(255),
CenterLatitude numeric(9,6),
CenterLongitude numeric(9,6));
CREATE TABLE Destination_Detail(
Destination varchar,
DestinationID uniqueidentifier,
CenterLongitude numeric,
CenterLatitude numeric,
StateProvince varchar,
Country varchar);
CREATE TABLE RegionEANHotelIDMapping(
RegionID int,
EANHotelID int);
