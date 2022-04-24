<div class="content-wrapper">
	<h4> <b>Case</b> <small class="text-muted">/ Visitors</small>
    </h4>
    <hr>
	<div class="row">
        <div class="col-md-9 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
                <div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Detail Visitors Country</h4>
							<p class="card-description">
								
							</p>
							<table border="0" width="100%">
								<?php 
								$country_code = array("AF","AX","AL","DZ","AS","AD","AO","AI","AG","AR","AM","AW","AU","AT","AZ","BH","BD","BB","BY","BE","BZ","BJ","BM","BT","BO","BA","BW","BR","IO","VG","BN","BG","BF","MM","BI","CV","KH","CM","CA","BQ","KY","CF","TD","CL","CN","CX","CO","KM","CK","CR","CI","HR","CU","CW","CY","CZ","CD","DK","DJ","DM","DO","EC","EG","SV","GQ","ER","EE","SZ","ET","FK","FO","FJ","FI","FR","GF","PF","GA","GE","DE","GH","GI","GR","GL","GD","GP","GU","GT","GG","GN","GW","GY","HT","HN","HK","HU","IS","IN","ID","IR","IQ","IE","IM","IL","IT","JM","JP","JE","JO","KZ","KE","KI","XK","KW","KG","LA","LV","LB","LS","LR","LY","LI","LT","LU","MO","MG","MW","MY","MV","ML","MT","MH","MQ","MR","MU","YT","MX","FM","MD","MC","MN","ME","MS","MA","MZ","NA","NR","NP","NL","NC","NZ","NI","NE","NG","NU","NF","KP","MK","MP","NO","OM","PK","PW","PS","PA","PG","PY","PE","PH","PL","PT","PR","QA","CG","RE","RO","RU","RW","BL","SH","KN","LC","MF","PM","VC","WS","SM","ST","SA","SN","RS","SC","SL","SG","SX","SK","SI","SB","SO","ZA","KR","SS","ES","LK","SD","SR","SJ","SE","CH","SY","TW","TJ","TZ","TH","BS","GM","TL","TG","TK","TO","TT","TN","TR","TM","TC","TV","UG","UA","AE","GB","US","UY","UZ","VU","VA","VE","VN","VI","WF","EH","YE","ZM","ZW","OTHER");
								$country_name = array("Afghanistan","Aland Islands","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","British Indian Ocean Territory","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burma","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Caribbean Netherlands","Cayman Islands","Central African Republic","Chad","Chile","China","Christmas Island","Colombia","Comoros","Cook Islands","Costa Rica","Cote d'Ivoire","Croatia","Cuba","Curacao","Cyprus","Czechia","Democratic Republic of the Congo","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Eswatini","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","Gabon","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nauru","Nepal","Netherlands","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Niue","Norfolk Island","North Korea","North Macedonia","Northern Mariana Islands","Norway","Oman","Pakistan","Palau","Palestinian Territory","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Republic of the Congo","Reunion","Romania","Russia","Rwanda","Saint Barthelemy","Saint Helena","Saint Kitts and Nevis","Saint Lucia","Saint Martin","Saint Pierre and Miquelon","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Sint Maarten","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Svalbard","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","The Bahamas","The Gambia","Timor-Leste","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands","Wallis and Futuna","Western Sahara","Yemen","Zambia","Zimbabwe", "Other");
								
								$case = $_GET['case'];
								$sqlrole = mysqli_query($con,"SELECT * FROM visitors where id_case='$case'");
								foreach ($sqlrole as $row) { ?>       
								<tr>
									<td valign="top">
										<table border="0" cellspacing="5">
										<?php
										$total_visitor = 0;
											for($x = 0; $x <= 242; $x++){
														
												if($row[$country_code[$x]]>0 )
												{
													$total_visitor += $row[$country_code[$x]];
													echo "<tr>
														<td width='60'><font face='arial' size='2'><b>".$country_code[$x]."</b></font></td>
														<td width='30'>
															<img height='12' src='../vendor/images/flags/4x3/".$country_code[$x].".svg' width='16'>
														</td>
														<td width='220'><font face='arial' size='2'>".$country_name[$x]."</font></td>
														<td><font face='arial' size='2'><b>".$row[$country_code[$x]]."</b></font></td>
														</tr>";
												}
											}
								}
										?>
										
												<br>
												<tr>
														<td width='60'><font face='arial' size='2'><b> </b></font></td>
														<td width='30'>
															<img height='12' src='' width='16'>
														</td>
														<td width='220'><font face='arial' size='2'><b>TOTAL VISITORS</b></font></td>
														<td><font face='arial' size='2'><b><?=$total_visitor;?></b></font></td>
												</tr>	
										</table>
									</td>
								</tr>
							</table>
						</div>
					</div>
                </div>
			</div>
        </div>
    </div>
</div>
