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
Destination varchar(280),
DestinationID uuid,
CenterLongitude numeric(5),
CenterLatitude numeric(5),
StateProvince varchar(2),
Country varchar(3));
CREATE TABLE RegionEANHotelIDMapping(
RegionID int,
EANHotelID int);
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
CREATE TABLE ActivePropertyList(
EANHotelID int,
SequenceNumber int,
Name varchar(70),
Address1 varchar(50),
Address2 varchar(50),
City varchar(50),
StateProvince varchar(2),
PostalCode varchar(15),
Country varchar(2),
Latitude numeric(8,5),
Longitude numeric(8,5),
AirportCode varchar(3),
PropertyCategory int,
PropertyCurrency varchar(3),
StarRating numeric(2,1),
Confidence int,
SupplierType varchar(3),
Location varchar(80),
ChainCodeID varchar(5),
RegionID int,
HighRate numeric(19,4),
LowRate numeric(19,4),
CheckInTime varchar(10),
CheckOutTime varchar(10));
CREATE TABLE ActivePropertyList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
Name varchar(70),
Location varchar(80),
CheckInTime varchar(10),
CheckOutTime varchar(10));
CREATE TABLE PropertyTypeList(
PropertyCategory int,
LanguageCode varchar(5),
PropertyCategoryDesc varchar(256));
CREATE TABLE PropertyTypeList_xx_XX(
PropertyCategory int,
LanguageCode varchar(5),
PropertyCategoryDesc varchar(256));
CREATE TABLE ChainList(
ChainCodeID int,
ChainName varchar(30));
CREATE TABLE PropertyDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PropertyDescription TEXT);
CREATE TABLE PropertyDescriptionList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyDescription TEXT);
CREATE TABLE PolicyDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PolicyDescription TEXT);
CREATE TABLE PolicyDescriptionList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
SectionTypeID int,
PolicyDescription TEXT);
CREATE TABLE PropertyFeesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyFeesDescription TEXT);
CREATE TABLE PropertyFeesList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyFeesDescription TEXT);
CREATE TABLE PropertyMandatoryFeesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyMandatoryFeesDescription TEXT);
CREATE TABLE PropertyMandatoryFeesList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyFeesDescription TEXT);
CREATE TABLE RecreationDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PropertyFeesDescription TEXT);
CREATE TABLE RecreationDescriptionList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
RecreationDescription TEXT);
CREATE TABLE PropertyAmenitiesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyAmenitiesDescription TEXT);
CREATE TABLE PropertyAmenitiesList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyAmenitiesDescription TEXT);
CREATE TABLE PropertyBusinessAmenitiesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyBusinessAmenitiesDescription TEXT);
CREATE TABLE PropertyBusinessAmenitiesList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyBusinessAmenitiesList TEXT);
CREATE TABLE PropertyLocationList(
EANHotelID int,
LanguageCode varchar(5),
PropertyLocationDescription TEXT);
CREATE TABLE PropertyLocationList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyLocationDescription TEXT);
CREATE TABLE PropertyNationalRatingsList(
EANHotelID int,
LanguageCode varchar(5),
PropertyNationalRatingsDescription TEXT);
CREATE TABLE PropertyNationalRatingsList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyNationalRatingsDescription TEXT);
CREATE TABLE PropertyRenovationsList(
EANHotelID int,
LanguageCode varchar(5),
PropertyRenovationsDescription TEXT);
CREATE TABLE PropertyRenovationsList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyRenovationsDescription TEXT);
CREATE TABLE PropertyRoomsList(
EANHotelID int,
LanguageCode varchar(5),
PropertyRoomsDescription TEXT);
CREATE TABLE PropertyRoomsList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyRoomsList TEXT);
CREATE TABLE AreaAttractionsList(
EANHotelID int,
LanguageCode varchar(5),
AreaAttractions TEXT);
CREATE TABLE AreaAttractionsList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
AreaAttractions TEXT);
CREATE TABLE DiningDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PropertyDiningDescription TEXT);
CREATE TABLE DiningDescriptionList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
PropertyDiningDescription TEXT);
CREATE TABLE SpaDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
SpaDescription TEXT);
CREATE TABLE SpaDescriptionList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
SpaDescription TEXT);
CREATE TABLE WhatToExpectDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
WhatToExpect TEXT);
CREATE TABLE WhatToExpectList_xx_XX(
EANHotelID int,
LanguageCode varchar(5),
WhatToExpect TEXT);
CREATE TABLE HotelImageList(
EANHotelID int,
Caption varchar(70),
URL varchar(300),
Width int,
Height int,
ByteSize int,
ThumbnailURL varchar(300),
DefaultImage bit);
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
CREATE TABLE RoomTypeList(
EANHotelID int,
RoomTypeID int,
LanguageCode varchar(5),
RoomTypeImage varchar(256),
RoomTypeName varchar(200),
RoomTypeDescription TEXT);
CREATE TABLE RoomTypeList_xx_XX(
EANHotelID int,
RoomTypeID int,
LanguageCode varchar(5),
RoomTypeName varchar(200),
RoomTypeDescription TEXT);
