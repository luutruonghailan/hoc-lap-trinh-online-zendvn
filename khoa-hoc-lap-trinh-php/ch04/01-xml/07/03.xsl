<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

	<xsl:template match="/book">
		<html>
			<head>
				<title>XSL tutorial</title>
			</head>
		</html>
		<body>
			<h1>Khóa học lập trình PHP</h1>
			<h3>Cách nhúng XSL vào XML</h3>
			<ul>
				<li>Tên khóa học: <xsl:value-of select="title" /></li>
				<li>Tác giả: <xsl:value-of select="author" /></li>
				<li>Số trang: <xsl:value-of select="pages" /></li>
				<xsl:if test="weight &gt; 600">
					<li>
						Trọng lượng: <xsl:value-of select="weight" />
									 <xsl:value-of select="weight/@units" />
					</li>
				</xsl:if>
			</ul>
			
		</body>
	
	</xsl:template>
</xsl:stylesheet>