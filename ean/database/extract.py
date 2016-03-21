#!/usr/bin/python

from xml.dom.minidom import parse
import xml.dom.minidom

# Open XML document using minidom parser
dt = xml.dom.minidom.parse("property-data.xml")
dl = dt.documentElement
tables=dl.getElementsByTagName("table")
for i in range(tables.length):
	tableName=str(tables[i].attributes.get('id').value)
	sql="CREATE TABLE "+tableName+"(\n"
	for tr in tables[i].getElementsByTagName("tbody")[0].getElementsByTagName("tr"):
		sql=sql+ str(tr.getElementsByTagName("td")[0].firstChild.toxml()).strip()+" "+str(tr.getElementsByTagName("td")[1].firstChild.toxml()).strip()+",\n"
		#if(len(str(tr.getElementsByTagName("td")[0].firstChild.toxml()))>50):
			#print str(tr.getElementsByTagName("td")[0].firstChild.toxml())
	print sql.rstrip(",\n")+");\n"

#COPY ActivePropertyList FROM '/home/tigris/ActivePropertyList.txt' ( FORMAT CSV, DELIMITER('|'), HEADER ) ;
# GRANT USAGE ON SCHEMA public to cyclos;
# GRANT SELECT ON ALL SEQUENCES IN SCHEMA public TO cyclos;
# GRANT SELECT ON ALL TABLES IN SCHEMA public TO cyclos;
