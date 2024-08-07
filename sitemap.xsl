<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>
    <xsl:template match="/">
        <html>
            <body>
                <h2>Sitemap</h2>
                <table border="1">
                    <tr>
                        <th>URL</th>
                    </tr>
                    <xsl:for-each select="urlset/url">
                        <tr>
                            <td>
                                <xsl:value-of select="loc"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:stylesheet>
