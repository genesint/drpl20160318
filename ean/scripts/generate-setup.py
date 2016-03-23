#!/usr/bin/python

from xml.dom.minidom import parse
import xml.dom.minidom
import os
# Get the file name
folder="xml"
filelist=os.listdir("xml")

def appendsql(filename):
	filepath="xml"+os.path.sep+filename
	# Open XML document using minidom parser
	dt = xml.dom.minidom.parse(filepath)
	dl = dt.documentElement
	tables=dl.getElementsByTagName("table")
	print filename,":",tables.length
	sql_txt=''
	for i in range(tables.length):
		tableName=str(tables[i].attributes.get('id').value)
		print filename,":",tableName
		sql="CREATE TABLE "+tableName+"(\n"
		for tr in tables[i].getElementsByTagName("tbody")[0].getElementsByTagName("tr"):
			sql=sql+ str(tr.getElementsByTagName("td")[0].firstChild.toxml()).strip()+" "+str(tr.getElementsByTagName("td")[1].firstChild.toxml()).strip()+",\n"
		#if(len(str(tr.getElementsByTagName("td")[0].firstChild.toxml()))>50):
			#print str(tr.getElementsByTagName("td")[0].firstChild.toxml())
		sql=sql.replace('nvarchar','varchar');
		fo.write(sql.rstrip(",\n")+");\n")

fo=open('sql/setup.sql','w')
for filename in filelist: appendsql(filename)
fo.close()
#COPY ActivePropertyList FROM '/home/tigris/ActivePropertyList.txt' ( FORMAT CSV, DELIMITER('|'), HEADER ) ;
# GRANT USAGE ON SCHEMA public to cyclos;
# GRANT SELECT ON ALL SEQUENCES IN SCHEMA public TO cyclos;
# GRANT SELECT ON ALL TABLES IN SCHEMA public TO cyclos;
