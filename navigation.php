    <div id="header">
      <img alt="JabRef title" src="/images/title2.png" />
      <a href="https://github.com/JabRef/jabref"><img id="fork" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
    </div>

<?php 

$fullpath = split('/', $HTTP_SERVER_VARS["SCRIPT_FILENAME"]);
$filename = $fullpath[count($fullpath)-1]; 

function navigate($URL, $name, $shortname, $file) {

  if($file==$URL) {
    $URL="#";
  }

  echo "        <li><a href=\"",$URL,"\" title=\"",$name,"\">",$shortname,"</a></li>\n";

}

echo"    <div id=\"navcontainer\">
      <ul id=\"navlist\">
";  

    navigate("/index.php","Welcome page","Overview",$filename);
    navigate("/faq.php","Frequently Asked Questions","FAQ",$filename);
    navigate("/documentation.php","Documentation.php","Documentation",$filename);
    navigate("/resources.php","Download JabRef resources: journal abbreviation lists and export filters","Resources",$filename);
    navigate("/screenshots.php","Some Screenshots","Screenshots",$filename);
    navigate("/revisionhistory.php","History and documentation about JabRef releases","History",$filename);
    navigate("/contact.php","Contact the JabRef people","Contact",$filename);
    navigate("/download.php","The JabRef Download page at Sourceforge","Download",$filename);

echo"      </ul>
    </div>
";  

?>
