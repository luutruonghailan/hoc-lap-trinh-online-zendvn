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
				<!-- Tinh so tien duoc giam gia -->
				<xsl:for-each select="//book">
					<h3>
						<xsl:value-of select="title" /><br />
					
					</h3>
					Price: <xsl:value-of select="price/real" /><br />
					Saleoff: <xsl:value-of select="price/saleoff" /><br />
					Down: <xsl:value-of select="price/real - price/saleoff" /><br />
					% Down: <xsl:value-of select="round(100-(price/saleoff div price/real)*100)" /><br />
					<hr />
				</xsl:for-each>
			
				
			</div>
		</body>
	
	</xsl:template>
</xsl:stylesheet>