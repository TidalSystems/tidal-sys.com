<?  
  $conn=mysqli_connect("localhost","centtanetzIVgk","QP3*l{b6zdbv","central-net-db");
 
if(trim($_GET["action"])=="delRateDategroup")
	{	
	 $conn=mysqli_connect("localhost","centtanetzIVgk","QP3*l{b6zdbv","central-net-db");
		if(trim($_GET["parent"])=="Date")
			{
				$conn->query("delete from rates_dates_group where Id=".(int)$_GET["id"]);
			}
		if(trim($_GET["parent"])=="Rate")
			{
				$conn->query("delete from dest_rates_group where Id=".(int)$_GET["id"]);
				$conn->query("delete from rates_dates_group where IdRates=".(int)$_GET["id"]);
 
			}
	}


 
elseif(trim($_GET["action"])=="getRatesgroup")
	{
 
	 
?>
<input type="hidden" name="RateIdgroup[]" value="<?=trim($_GET["nRows"])?>">
<div class="col-md-8">
						<div>
							<fieldset>
					 
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
									<td>$<input type="text" size="4" name="GoldenAir2<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenAirChild2<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenSingle2<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenDBL2<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenSGL2<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenTRP2<?=trim($_GET["nRows"])?>[]" ></td>
									<td>$<input type="text" size="4" name="GoldenCHILD2<?=trim($_GET["nRows"])?>[]" ></td>
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
					<tbody id="RateDategroup<?=trim($_GET["nRows"])?>">
					<input type="hidden" name="rowsId[]" value="<?=trim($_GET["nRows"])?>">
						<tr id="RateDateSubgroup<?=trim($_GET["nRows"])?>_1" ><td><input type="date" size=14 value="<?=$today?>"   name="DDategroup<?=trim($_GET["nRows"])?>[]"  onclick='displayCalendar(this , "yyyy/mm/dd", this )'  id="datesIDgroup_<?=trim($_GET["nRows"])?>_1"  onchange="chkDupDategroup(this.value , this , 0)" >&nbsp;<a href="javascript:removeFile( 'RateDateSubgroup<?=trim($_GET["nRows"])?>_1' )"  >Remove Date</a></td></tr>
					</tbody>
				</table>
				<TABLE><TR><TD><a href="javascript:addNewDategroup('RateDategroup<?=trim($_GET["nRows"])?>' , <?=trim($_GET["nRows"])?> , '<?=$today?>' , 'date'  )">add NEW </a></TD></TR></TABLE>
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
					<tbody id="RateDategroup<?=trim($_GET["nRows"])?>">
					<input type="hidden" name="rowsId[]" value="<?=trim($_GET["nRows"])?>">
						<tr id="RateDateSubgroup<?=trim($_GET["nRows"])?>_1" ><td>
							
							<input type="date" size=14 value="<?=$today?>"   name="FDate<?=trim($_GET["nRows"])?>[]"  onclick='displayCalendar(this , "yyyy/mm/dd", this )' onchange="chkDupDate(this.value , this ,0 )" id="datesID_group<?=trim($_GET["nRows"])?>_1" >&nbsp;<input type="date" size=14 value="<?=$today?>"   name="TDate<?=trim($_GET["nRows"])?>[]"  onclick='displayCalendar(this , "yyyy/mm/dd", this )' >


						&nbsp;<a href="javascript:removeFilegroup( 'RateDateSub<?=trim($_GET["nRows"])?>_1' )"  >Remove </a></td></tr>
					</tbody>
				</table>
				<TABLE><TR><TD><a href="javascript:addNewDategroup('RateDate<?=trim($_GET["nRows"])?>' , <?=trim($_GET["nRows"])?> , '<?=$today?>' , 'month' )">add NEW </a></TD></TR></TABLE>
				</fieldset>
					
					
					<?
					   
				    }
				?>
					
				</div>
			 

 		<div class="col-md-12"  style="margin: 10px;width:100%;float:left;"><a href="javascript:removeFilegroup( 'rate_group<?=trim($_GET["nRows"])?>' )"  >Remove Rate</a></div>
<div class="col-md-12" style="margin:10px" > <hr/> </div>
<?
	}
	
?>


 