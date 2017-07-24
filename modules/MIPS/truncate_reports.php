<?php
/*
 * Truncate old MIPS reports
 *
 * Copyright (C) 2015 - 2017      Suncoast Connection
 * 
 * LICENSE: This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0
 * See the Mozilla Public License for more details. 
 * If a copy of the MPL was not distributed with this file, You can obtain one at https://mozilla.org/MPL/2.0/.
 * 
 * @author  Art Eaton <art@suncoastconnection.com>
 * @author  Bryan lee <leebc@suncoastconnection.com>
 * @package LibreHealthEHR 
 * @link    http://suncoastconnection.com
 * @link    http://librehealth.io
 *
 * Please support this product by sharing your changes with the LibreHealth.io community.
 */
require_once '../../interface/globals.php';
include_once("$srcdir/api.inc");

?>	
<form action="truncate_reports.php" method="post">	
<?php
if($_POST['formSubmit'] == "Submit") 
{
sqlStatement("TRUNCATE TABLE `report_results`;");
sqlStatement("TRUNCATE TABLE `report_itemized`;");
echo "Table 'reports_results' truncated and 'report_itemized'.   Old reports deleted.";
}
?>
<html>
<b>This will delete all old reports!</b>
<input type="submit" name="formSubmit" value="Submit" />
</html>
</form>