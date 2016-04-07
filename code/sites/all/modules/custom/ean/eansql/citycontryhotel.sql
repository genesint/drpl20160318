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
b.url INTO cityhotelcountry FROM activepropertylist a JOIN hotelimagelist b on a.eanhotelid=b.eanhotelid limit 5000