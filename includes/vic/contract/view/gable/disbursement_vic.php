<?php 
// ***************************** Shop Drawings ********************************************//
echo "<tr><td colspan=\"8\" class=\"subheading\">Disbursements</td></tr>";
echo "<tr><td><input type=\"hidden\" name=\"id[65]\" value=\"{$getCFID[65]}\" />";
        $disburses = array();
		while ($disburse = mysql_fetch_array($resultdisb)) {
		$disburses[] = $disburse;}
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[65]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[65]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[65]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[65]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[65]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[65]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[65]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[65]\" value=\"{$getQty[65]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[65]\" value=\"{$getLength[65]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[65]\" value=\"{$getRRP[65]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[65]\" value=\"{$getCost[65]}\"></td></tr>";

// ***************************** Certifier ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[66]\" value=\"{$getCFID[66]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[66]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[66]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[66]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[66]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[66]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[66]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[66]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[66]\" value=\"{$getQty[66]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[66]\" value=\"{$getLength[66]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[66]\" value=\"{$getRRP[66]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[66]\" value=\"{$getCost[66]}\"></td></tr>";

// ***************************** Council ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[67]\" value=\"{$getCFID[67]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[67]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[67]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[67]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[67]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[67]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[67]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[67]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[67]\" value=\"{$getQty[67]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[67]\" value=\"{$getLength[67]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[67]\" value=\"{$getRRP[67]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[67]\" value=\"{$getCost[67]}\"></td></tr>";

// ***************************** Lands Title Office ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[68]\" value=\"{$getCFID[68]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[68]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[68]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[68]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[68]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[68]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[68]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[68]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[68]\" value=\"{$getQty[68]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[68]\" value=\"{$getLength[68]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[68]\" value=\"{$getRRP[68]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[68]\" value=\"{$getCost[68]}\"></td></tr>";

// ***************************** Crane Hire ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[69]\" value=\"{$getCFID[69]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[69]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[69]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[69]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[69]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[69]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[69]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[69]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[69]\" value=\"{$getQty[69]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[69]\" value=\"{$getLength[69]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[69]\" value=\"{$getRRP[69]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[69]\" value=\"{$getCost[69]}\"></td></tr>";

// ***************************** Genie Lift ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[70]\" value=\"{$getCFID[70]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[70]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[70]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[70]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[70]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[70]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[70]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[70]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[70]\" value=\"{$getQty[70]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[70]\" value=\"{$getLength[70]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[70]\" value=\"{$getRRP[70]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[70]\" value=\"{$getCost[70]}\"></td></tr>";

// ***************************** Training Levy ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[71]\" value=\"{$getCFID[71]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[71]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[71]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[71]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[71]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[71]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[71]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[71]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[71]\" value=\"{$getQty[71]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[71]\" value=\"{$getLength[71]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[71]\" value=\"{$getRRP[71]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[71]\" value=\"{$getCost[71]}\"></td></tr>";

// ***************************** Indemnity Insurance ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[72]\" value=\"{$getCFID[72]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[72]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[72]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[72]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[72]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[72]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[72]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[72]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[72]\" value=\"{$getQty[72]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[72]\" value=\"{$getLength[72]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[72]\" value=\"{$getRRP[72]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[72]\" value=\"{$getCost[72]}\"></td></tr>";

// ***************************** Electrician ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[73]\" value=\"{$getCFID[73]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[73]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[73]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[73]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[73]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[73]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[73]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[73]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[73]\" value=\"{$getQty[73]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[73]\" value=\"{$getLength[73]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[73]\" value=\"{$getRRP[73]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[73]\" value=\"{$getCost[73]}\"></td></tr>";

// ***************************** Engineering ********************************************//


echo "<tr><td><input type=\"hidden\" name=\"id[74]\" value=\"{$getCFID[74]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[74]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[74]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[74]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[74]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[74]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[74]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[74]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[74]\" value=\"{$getQty[74]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[74]\" value=\"{$getLength[74]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[74]\" value=\"{$getRRP[74]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[74]\" value=\"{$getCost[74]}\"></td></tr>";

// ***************************** Material Deliveries ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[75]\" value=\"{$getCFID[75]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[75]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[75]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[75]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[75]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[75]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[75]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[75]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[75]\" value=\"{$getQty[75]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[75]\" value=\"{$getLength[75]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[75]\" value=\"{$getRRP[75]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[75]\" value=\"{$getCost[75]}\"></td></tr>";

// ***************************** Site Labour ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[76]\" value=\"{$getCFID[76]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[76]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[76]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[76]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[76]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[76]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[76]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[76]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[76]\" value=\"{$getQty[76]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[76]\" value=\"{$getLength[76]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[76]\" value=\"{$getRRP[76]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[76]\" value=\"{$getCost[76]}\"></td></tr>";

// ***************************** Traveling Fix 1& 2 ********************************************//


echo "<tr><td><input type=\"hidden\" name=\"id[77]\" value=\"{$getCFID[77]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[77]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[77]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[77]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[77]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[77]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[77]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[77]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[77]\" value=\"{$getQty[77]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[77]\" value=\"{$getLength[77]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[77]\" value=\"{$getRRP[77]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[77]\" value=\"{$getCost[77]}\"></td></tr>";

// ***************************** Delivery Distance ********************************************//


echo "<tr><td><input type=\"hidden\" name=\"id[78]\" value=\"{$getCFID[78]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[78]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[78]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[78]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[78]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[78]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[78]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[78]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[78]\" value=\"{$getQty[78]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[78]\" value=\"{$getLength[78]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[78]\" value=\"{$getRRP[78]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[78]\" value=\"{$getCost[78]}\"></td></tr>";

// ***************************** Accomodation ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[79]\" value=\"{$getCFID[79]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[79]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[79]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[79]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[79]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[79]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[79]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[79]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[79]\" value=\"{$getQty[79]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[79]\" value=\"{$getLength[79]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[79]\" value=\"{$getRRP[79]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[79]\" value=\"{$getCost[79]}\"></td></tr>";

// ***************************** Factory Labour ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[80]\" value=\"{$getCFID[80]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[80]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[80]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[80]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[80]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[80]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[80]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[80]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[80]\" value=\"{$getQty[80]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[80]\" value=\"{$getLength[80]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[80]\" value=\"{$getRRP[80]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[80]\" value=\"{$getCost[80]}\"></td></tr>";

// ***************************** Other ********************************************//

echo "<tr><td><input type=\"hidden\" name=\"id[81]\" value=\"{$getCFID[81]}\" />";
		foreach($disburses as $disburse) {
		if ($disburse['cf_id'] == $getID[81]) { 
      	echo $disburse['description'];	
		echo "<input type=\"hidden\" class=\"desc\" name=\"desc[81]\" value=\"".$disburse['description']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"invent\" name=\"invent[81]\" value=\"".$disburse['inventoryid']."\" readonly=\"readonly\" />".
		"<input type=\"hidden\" class=\"descrrp\" name=\"descrrp\" value=\"".$disburse['rrp']."\" readonly=\"readonly\" />".
        "<input type=\"hidden\" class=\"desccost\" name=\"desccost\" value=\"".$disburse['cost']."\" readonly=\"readonly\" /></td>";
			
// Webbing
echo"<td><input type=\"hidden\" class=\"webbing\" name=\"webbing[81]\" value=\"\" readonly=\"readonly\" /></td>";   

// Colours
echo"<td><input type=\"hidden\" class=\"colour\" name=\"colour[81]\" value=\"\" readonly=\"readonly\" /></td>";
     	
// Paint and Powder
echo"<td><input type=\"hidden\" name=\"paint[81]\" value=\"\" readonly=\"readonly\" /></td>";

// Unit of Measurement
echo "<td><input type=\"text\" name=\"uom[81]\" id=\"uom\" readonly=\"readonly\" value=\"".$disburse['uom']."\"></td>";	
		}
		else { echo " ";}
		}

// Unit Quantity	
echo "<td><input type=\"text\" class=\"qtylen\" name=\"qty[81]\" value=\"{$getQty[81]}\"></td>";

// Length or Width
echo "<td><input type=\"hidden\" name=\"slength[81]\" value=\"{$getLength[81]}\" readonly=\"readonly\" /></td>";

// Total RRP
echo "<td><input type=\"text\" class=\"rrpd\" readonly=\"readonly\" name=\"rrp[81]\" value=\"{$getRRP[81]}\"><input type=\"hidden\" class=\"cstd\" name=\"cst[81]\" value=\"{$getCost[81]}\"></td></tr>";
?>