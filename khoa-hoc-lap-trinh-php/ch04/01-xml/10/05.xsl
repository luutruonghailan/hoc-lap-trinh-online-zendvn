<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

	<xsl:template match="/">
		<html>
			<head>
				<title>XSL tutorial</title>
			</head>
		</html>
		<body>
			<h1>Khóa học lập trình PHP</h1>
			<h3>Cách nhúng XSL vào XML</h3>
			<div>
				<!-- Tinh phi van chuyen -->
				<xsl:for-each select="//book">
					<h3>
						<xsl:value-of select="title" /><br />
						<xsl:value-of select="weight" /><xsl:value-of select="weight/@units" /><br />
					</h3>
					US: <xsl:value-of select="round((weight div 100)*(shipping/US))" /><br />
					EU: <xsl:value-of select="round((weight div 100)*(shipping/EU))" /><br />
					VN: <xsl:value-of select="(weight div 100)*(shipping/VN)" /><br />
					<hr />
				</xsl:for-each>
			
				
			</div>
		</body>
	
	</xsl:template>
</xsl:stylesheet>