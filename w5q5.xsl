<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match = "MCA">
<html>
<head>
	<title> Style sheet for w5q5.xml </title>
</head>
<body>
<h2> MCA Student Description </h2>
<span style = "font-style: italic; color: blue;"> Enrolment:
</span>
<xsl:value-of select = "Enrolment" /> <br />
<span style = "font-style: italic; color: blue;"> Name:
</span>
<xsl:value-of select = "name" /> <br />
<span style = "font-style: italic; color: blue;"> Department:
</span>
<xsl:value-of select = "department" /> <br />
<span style = "font-style: italic; color: blue;"> Semester:
</span>
<xsl:value-of select = "semester" /> <br />
<span style = "font-style: italic; color: blue;"> Year of Join:
</span>
<xsl:value-of select = "YOJ" /> <br />
<span style = "font-style: italic; color: blue;"> E-Mail:
</span>
<xsl:value-of select = "email" /> <br />
</body>
</html>
</xsl:template>
</xsl:stylesheet>