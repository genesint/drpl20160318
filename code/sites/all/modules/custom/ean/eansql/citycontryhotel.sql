SELECT  
row_number() over () as id,
a.eanhotelid,
a.name, 
a.city,
a.country,
a.lowrate, 
a.checkintime, 
a.checkouttime,
a.propertycurrency, 
a.location,
b.caption,
b.thumbnailurl,
b.url INTO cityhotelcountry FROM activepropertylist a JOIN hotelimagelist b on a.eanhotelid=b.eanhotelid


SELECT  
row_number() over () as id,
a.eanhotelid,
a.name, 
a.city,
a.country,
a.location,
a.starrating,
a.lowrate, 
a.highrate,
a.checkintime, 
a.checkouttime,
a.propertycurrency, 
b.caption,
b.thumbnailurl,
b.url,
c.propertydescription
INTO xlist01 
FROM 
activepropertylist a 
JOIN hotelimagelist b on a.eanhotelid=b.eanhotelid
JOIN propertydescriptionlist c on a.eanhotelid=c.eanhotelid

SELECT  
row_number() over () as id,
a.eanhotelid,
a.name, 
a.city,
a.country,
a.location,
a.starrating,
a.lowrate, 
a.highrate,
a.checkintime, 
a.checkouttime,
a.propertycurrency, 
b.caption,
b.thumbnailurl,
b.url,
c.propertydescription,
d.propertyamenitiesdescription	
INTO xlist02 
FROM 
activepropertylist a 
LEFT JOIN hotelimagelist b ON a.eanhotelid=b.eanhotelid
LEFT JOIN propertydescriptionlist c ON a.eanhotelid=c.eanhotelid
LEFT JOIN propertyamenitieslist d ON a.eanhotelid=d.eanhotelid
