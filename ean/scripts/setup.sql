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

CREATE TABLE ActivePropertyList_Multi_Language(
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

CREATE TABLE PropertyTypeList_Multi_Language(
PropertyCategory int,
LanguageCode varchar(5),
PropertyCategoryDesc varchar(256);

CREATE TABLE ChainList(
ChainCodeID int,
ChainName varchar(30));

CREATE TABLE PropertyDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PropertyDescription TEXT);

CREATE TABLE PropertyDescriptionList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyDescription TEXT);

CREATE TABLE PolicyDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PolicyDescription TEXT);

CREATE TABLE PolicyDescriptionList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
SectionTypeID int,
PolicyDescription TEXT);

CREATE TABLE PropertyFeesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyFeesDescription TEXT);

CREATE TABLE PropertyFeesList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyFeesDescription TEXT);

CREATE TABLE PropertyMandatoryFeesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyMandatoryFeesDescription TEXT);

CREATE TABLE RecreationDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PropertyFeesDescription TEXT);

CREATE TABLE RecreationDescriptionList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
RecreationDescription TEXT);

CREATE TABLE PropertyAmenitiesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyAmenitiesDescription TEXT);

CREATE TABLE PropertyAmenitiesList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyAmenitiesDescription TEXT);

CREATE TABLE PropertyBusinessAmenitiesList(
EANHotelID int,
LanguageCode varchar(5),
PropertyBusinessAmenitiesDescription TEXT);

CREATE TABLE PropertyBusinessAmenitiesList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyBusinessAmenitiesList TEXT);

CREATE TABLE PropertyLocationList(
EANHotelID int,
LanguageCode varchar(5),
PropertyLocationDescription TEXT);

CREATE TABLE PropertyLocationList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyLocationDescription TEXT);

CREATE TABLE PropertyNationalRatingsList(
EANHotelID int,
LanguageCode varchar(5),
PropertyNationalRatingsDescription TEXT);

CREATE TABLE PropertyNationalRatingsList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyNationalRatingsDescription TEXT);

CREATE TABLE PropertyRenovationsList(
EANHotelID int,
LanguageCode varchar(5),
PropertyRenovationsDescription TEXT);

CREATE TABLE PropertyRenovationsList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyRenovationsDescription TEXT);

CREATE TABLE PropertyRoomsList(
EANHotelID int,
LanguageCode varchar(5),
PropertyRoomsDescription TEXT);

CREATE TABLE PropertyRoomsList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyRoomsList TEXT);

CREATE TABLE AreaAttractionsList(
EANHotelID int,
LanguageCode varchar(5),
AreaAttractions TEXT);

CREATE TABLE AreaAttractionsList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
AreaAttractions TEXT);

CREATE TABLE DiningDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
PropertyDiningDescription TEXT);

CREATE TABLE DiningDescriptionList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
PropertyDiningDescription TEXT);

CREATE TABLE SpaDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
SpaDescription TEXT);

CREATE TABLE SpaDescriptionList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
SpaDescription TEXT);

CREATE TABLE WhatToExpectDescriptionList(
EANHotelID int,
LanguageCode varchar(5),
WhatToExpect TEXT);

CREATE TABLE WhatToExpectList_Multi_Language(
EANHotelID int,
LanguageCode varchar(5),
WhatToExpect TEXT);

