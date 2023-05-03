<?  
  $conn=mysqli_connect("localhost","centtanetzIVgk","QP3*l{b6zdbv","central-net-db");
 
if(trim($_GET["action"])=="delRateDate")
	{	
	 $conn=mysqli_connect("localhost","centtanetzIVgk","QP3*l{b6zdbv","central-net-db");
		if(trim($_GET["parent"])=="Date")
			{
				$conn->query("delete from rates_dates where Id=".(int)$_GET["id"]);
			}
		if(trim($_GET["parent"])=="Rate")
			{
				$conn->query("delete from dest_rates where Id=".(int)$_GET["id"]);
				$conn->query("delete from rates_dates where IdRates=".(int)$_GET["id"]);
 
			}
	}


 
elseif(trim($_GET["action"])=="getRates")
	{
 
	 
?>
<input type="hidden" name="RateId[]" value="<?=trim($_GET["nRows"])?>">
<div class="col-md-8">
						<div>
							<fieldset>
							<h6>Deluxe</h6>
							<table cellpadding="5">
								<tr>
									<td align="center" >Air Adult</td>
									<td align="center" >Air Child</td>
									<td align="center" >1 private PAX Supp</td>
									<td align="center" >P.P.DBL</td>
									<td align="center" >SGL Supp</td>
									<td align="center" >TRP Reduc</td>
									<td align="center" >Child </td>
								</tr>
								<tr>
									<td>$<input type="text" size="4" name="GoldenAir<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenAirChild<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenSingle<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenDBL<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenSGL<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenTRP<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenCHILD<?=trim($_GET["nRows"])?>[]" ></td>
								</tr>

							</table>
							</fieldset>
						</div>
		
						<div>
							<fieldset>
							<h6>First Class</h6>
							<table cellpadding="5">
								<tr>
									<td align="center" >Air Adult</td>
									<td align="center" >Air Child</td>
									<td align="center" >1 private PAX Supp</td>
									<td align="center" >P.P.DBL</td>
									<td align="center" >SGL Supp</td>
									<td align="center" >TRP Reduc</td>
									<td align="center" >Child </td>
								</tr>
								<tr>
									<td>$<input type="text" size="4" name="SilverAir<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="SilverAirChild<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="SilverSingle<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="SilverDBL<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="SilverSGL<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="SilverTRP<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4"  name="SilverCHILD<?=trim($_GET["nRows"])?>[]" ></td>
								</tr>

							</table>
							</fieldset>
						</div>
		
		
						<div>
							<fieldset>
							<h6>Tourists</h6>
							<table cellpadding="5">
								<tr>
									<td align="center" >Air Adult</td>
									<td align="center" >Air Child</td>
									<td align="center" >1 private PAX Supp </td>
									<td align="center" >P.P.DBL</td>
									<td align="center" >SGL Supp</td>
									<td align="center" >TRP Reduc</td>
									<td align="center" >Child </td>
								</tr>
								<tr>
									<td>$<input type="text" size="4" name="BronzeAir<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="BronzeAirChild<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="BronzeSingle<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="BronzeDBL<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="BronzeSGL<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="BronzeTRP<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="BronzeCHILD<?=trim($_GET["nRows"])?>[]" ></td>
								</tr>

							</table>
							</fieldset>
						</div>
				</div>
				
				<div style="display:inline;width:27%;">
				<?
				$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$today =date("Y/m/d", $today );
				?>
				
				<? if(trim($_GET["radio"])!="extension" && trim($_GET["radio2"])=="dates")
					{
				?>
				
				<fieldset>
				<h6>ADD DATES</h6>
				<table cellpadding="3" width="100%">
					<tbody id="RateDate<?=trim($_GET["nRows"])?>">
					<input type="hidden" name="rowsId[]" value="<?=trim($_GET["nRows"])?>">
						<tr id="RateDateSub<?=trim($_GET["nRows"])?>_1" ><td><input type="date" size=14 value="<?=$today?>"   name="DDate<?=trim($_GET["nRows"])?>[]"  onclick='displayCalendar(this , "yyyy/mm/dd", this )'  id="datesID_<?=trim($_GET["nRows"])?>_1"  onchange="chkDupDate(this.value , this , 0)" >&nbsp;<a href="javascript:removeFile( 'RateDateSub<?=trim($_GET["nRows"])?>_1' )"  >Remove Date</a></td></tr>
					</tbody>
				</table>
				<TABLE><TR><TD><a href="javascript:addNewDate('RateDate<?=trim($_GET["nRows"])?>' , <?=trim($_GET["nRows"])?> , '<?=$today?>' , 'date'  )">add NEW </a></TD></TR></TABLE>
				</fieldset>
				<?
					}
				else
					{

					?>
				<fieldset>
				<h6>ADD Date Range</h6>
				<table cellpadding="3" width="100%">
				<tr><td width="35%" >From</td><td width="65%" >To</td></tr>
				</table>
				<table cellpadding="3" width="100%">
					<tbody id="RateDate<?=trim($_GET["nRows"])?>">
					<input type="hidden" name="rowsId[]" value="<?=trim($_GET["nRows"])?>">
						<tr id="RateDateSub<?=trim($_GET["nRows"])?>_1" ><td>
							
							<input type="date" size=14 value="<?=$today?>"   name="FDate<?=trim($_GET["nRows"])?>[]"  onclick='displayCalendar(this , "yyyy/mm/dd", this )' onchange="chkDupDate(this.value , this ,0 )" id="datesID_<?=trim($_GET["nRows"])?>_1" >&nbsp;<input type="text" size=14 value="<?=$today?>"   name="TDate<?=trim($_GET["nRows"])?>[]"  onclick='displayCalendar(this , "yyyy/mm/dd", this )' >


						&nbsp;<a href="javascript:removeFile( 'RateDateSub<?=trim($_GET["nRows"])?>_1' )"  >Remove </a></td></tr>
					</tbody>
				</table>
				<TABLE><TR><TD><a href="javascript:addNewDate('RateDate<?=trim($_GET["nRows"])?>' , <?=trim($_GET["nRows"])?> , '<?=$today?>' , 'month' )">add NEW </a></TD></TR></TABLE>
				</fieldset>
					
					
					<?
					   
				    }
				?>
					
				</div>
			 

 		<div class="col-md-12"  style="margin: 10px;width:100%;float:left;"><a href="javascript:removeFile( 'rate_<?=trim($_GET["nRows"])?>' )"  >Remove Rate</a></div>
<div class="col-md-12" style="margin:10px" > <hr/> </div>
<?
	}
	
?>


 