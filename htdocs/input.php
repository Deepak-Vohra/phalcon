print "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\n";
print "    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";
print "\n";
print "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n";
print "<head>\n";
print "   \n";
print "  <script language=\"JavaScript\" type=\"text/javascript\">\n";
print "//<![CDATA[\n";
print "\n";
print "  function validateCatalogId(){\n";
print "  var xmlHttpRequest=init();\n";
print "  function init(){\n";
print "  if (window.XMLHttpRequest) {\n";
print "  return new XMLHttpRequest();\n";
print "  } else if (window.ActiveXObject) {\n";
print "  return new\n";
print "  ActiveXObject(\"Microsoft.XMLHTTP\");\n";
print "  }\n";
print "  }\n";
print "  var\n";
print "  catalogId=document.getElementById(\"catalogId\");\n";
print "  xmlHttpRequest.open(\"GET\",\n";
print "  \"/validateForm.php?catalogId=\"+encodeURIComponent(catalogId.value), true);\n";
print "  xmlHttpRequest.onreadystatechange=processRequest;\n";
print "  xmlHttpRequest.send(null);\n";
print "  function processRequest(){\n";
print "  if(xmlHttpRequest.readyState==4){\n";
print "  if(xmlHttpRequest.status==200){\n";
print "  processResponse();\n";
print "  }\n";
print "  }\n";
print "  }\n";
print "  function processResponse(){\n";
print "  var xmlMessage=xmlHttpRequest.responseXML;\n";
print "  var catalog=xmlMessage.getElementsByTagName(\"catalog\")[0].firstChild.nodeValue;\n";
print "  if(catalog=\"CatalogId is not Defined\"){\n";
print "  var\n";
print "  validationMessage=document.getElementById(\"validationMessage\");\n";
print "  validationMessage.innerHTML = \"CatalogId is not defined\";\n";
print "\n";
print "  var journalElement=document.getElementById(\"journal\");\n";
print "  journalElement.value = \"\";\n";
print "  var publisherElement=document.getElementById(\"publisher\");\n";
print "  publisherElement.value = \"\";\n";
print "  var editionElement=document.getElementById(\"edition\");\n";
print "  editionElement.value = \"\";\n";
print "  var titleElement=document.getElementById(\"title\");\n";
print "  titleElement.value = \"\";\n";
print "  var authorElement=document.getElementById(\"author\");\n";
print "  authorElement.value = \"\";\n";
print "  }\n";
print "  else{\n";
print "  var validationMessage=document.getElementById(\"validationMessage\");\n";
print "  validationMessage.innerHTML = \"\";\n";
print "\n";
print "  var journal=xmlMessage.getElementsByTagName(\"journal\")[0].firstChild.nodeValue;\n";
print "  var publisher=xmlMessage.getElementsByTagName(\"publisher\")[0].firstChild.nodeValue;\n";
print "  var edition=xmlMessage.getElementsByTagName(\"edition\")[0].firstChild.nodeValue;\n";
print "  var title=xmlMessage.getElementsByTagName(\"title\")[0].firstChild.nodeValue;\n";
print "  var author=xmlMessage.getElementsByTagName(\"author\")[0].firstChild.nodeValue;\n";
print "\n";
print "  var journalElement=document.getElementById(\"journal\");\n";
print "  journalElement.value = journal;\n";
print "  var publisherElement=document.getElementById(\"publisher\");\n";
print "  publisherElement.value = publisher;\n";
print "\n";
print "  var editionElement=document.getElementById(\"edition\");\n";
print "  editionElement.value = edition;\n";
print "  var titleElement=document.getElementById(\"title\");\n";
print "  titleElement.value = title;\n";
print "  var authorElement=document.getElementById(\"author\");\n";
print "  authorElement.value = author;\n";
print "  }\n";
print "  }\n";
print "  }\n";
print "  //]]>\n";
print "  </script>\n";
print "\n";
print "  <title></title>\n";
print "</head>\n";
print "\n";
print "<body>\n";
print "  <h1>PHP Ajax Web Application</h1>\n";
print "\n";
print "  <form name=\"validationForm\"  id=\"validationForm\">\n";
print "    <table>\n";
print "      <tr>\n";
print "        <td>Catalog Id:</td>\n";
print "\n";
print "        <td><input type=\"text\" size=\"20\" id=\"catalogId\" name=\"catalogId\" onkeyup=\n";
print "        \"validateCatalogId()\" /></td>\n";
print "\n";
print "        <td>\n";
print "          <div id=\"validationMessage\"></div>\n";
print "        </td>\n";
print "      </tr>\n";
print "\n";
print "      <tr>\n";
print "        <td>Journal:</td>\n";
print "\n";
print "        <td><input type=\"text\" size=\"20\" id=\"journal\" name=\"journal\" /></td>\n";
print "      </tr>\n";
print "\n";
print "      <tr>\n";
print "        <td>Publisher:</td>\n";
print "\n";
print "        <td><input type=\"text\" size=\"20\" id=\"publisher\" name=\"publisher\" /></td>\n";
print "      </tr>\n";
print "\n";
print "      <tr>\n";
print "        <td>Edition:</td>\n";
print "\n";
print "        <td><input type=\"text\" size=\"20\" id=\"edition\" name=\"edition\" /></td>\n";
print "      </tr>\n";
print "\n";
print "      <tr>\n";
print "        <td>Title:</td>\n";
print "\n";
print "        <td><input type=\"text\" size=\"20\" id=\"title\" name=\"title\" /></td>\n";
print "      </tr>\n";
print "\n";
print "      <tr>\n";
print "        <td>Author:</td>\n";
print "\n";
print "        <td><input type=\"text\" size=\"20\" id=\"author\" name=\"author\" /></td>\n";
print "      </tr>\n";
print "    </table>\n";
print "  </form>\n";
print "</body>\n";
print "</html>\n";