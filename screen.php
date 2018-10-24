<?php
require_once('controllers/Check.php');
$Checkclass = new Checkclass();
$Checkclass->Member();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>
<link href="font/stylesheet.css" rel="stylesheet">
<style>
  /*
  http://meyerweb.com/eric/tools/css/reset/
  v2.0 | 20110126
  License: none (public domain)
  */
  html, body, div, span, applet, object, iframe,
  h1, h2, h3, h4, h5, h6, p, blockquote, pre,
  a, abbr, acronym, address, big, cite, code,
  del, dfn, em, img, ins, kbd, q, s, samp,
  small, strike, strong, sub, sup, tt, var,
  b, u, i, center,
  dl, dt, dd, ol, ul, li,
  fieldset, form, label, legend,
  table, caption, tbody, tfoot, thead, tr, th, td,
  article, aside, canvas, details, embed,
  figure, figcaption, footer, header, hgroup,
  menu, nav, output, ruby, section, summary,
  time, mark, audio, video {
      font-size: 100%;
      font: inherit;
  }
  /* HTML5 display-role reset for older browsers */
  body {
      line-height: 1;
  }
  table {
      border-collapse: collapse;
      border-spacing: 0;
  }
  /* common styles */
  .page {
      background: #fff;
      width: 920px;
      margin: 0 auto;
      padding: 20px 20px 0 20px;
      overflow: hidden;
  }
  .font-container {
      overflow-x: auto;
      overflow-y: hidden;
      white-space: nowrap;
  }
  h1 {
      position: relative;
      background: #444;
      font-size: 32px;
      color: #fff;
      padding: 10px 20px;
      margin: 0 -20px 12px -20px;
  }
  pre {
      display: block;
      position: relative;
      padding: 9px;
      margin: 0 0 10px;
      font-family: Monaco, Menlo, Consolas, "Courier New", monospace !important;
      font-size: 13px;
      line-height: 1.428571429;
      color: #333;
      font-weight: normal !important;
      font-style: normal !important;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      overflow-x: auto;
      border-radius: 4px;
  }
  pre:after {
      display: block;
      position: absolute;
      right: 0;
      top: 0;
      content: 'Usage';
      line-height: 1;
      padding: 5px 8px;
      font-size: 12px;
      color: #767676;
      background-color: #fff;
      border: 1px solid #ccc;
      border-right: none;
      border-top: none;
      border-radius: 0 4px 0 4px;
      z-index: 10;
  }
.Code{
  font-size: 35px;
  text-align: center;
}
.Details{
  font-size: 25px;
  color: whitesmoke;
}
.NickName{
  font-size: 75px;
  /* text-align: right; */
  color: whitesmoke;
}
.County{
  font-size: 30px;
  /* text-align: right; */
  color: whitesmoke;
}
</style>
</head>
<body onload="to_image()">
<?php
include('controllers/Connect.php');
$strSQL = "SELECT * FROM account WHERE ID = '".$_SESSION['ID']."' ";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
 ?>
  <div id="content_page_data">

  <div id="my_rectangle" style='text-align:justify; width:961px; max-width:961px;'>
    <table id="Table_01" width="961" height="961" border="0" cellpadding="0" cellspacing="0" class="demo" style="font-family: 'Bangna New'; font-weight: normal; font-style: italic; ">
    	<tr>
    		<td colspan="11">
    			<img src="images/card_01.png" width="960" height="191" alt=""></td>
    		<td >
    			<img src="images/spacer.gif" width="1" height="191" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="7">
    			<img src="images/card_02.png" width="523" height="186" alt=""></td>
    		<td colspan="4" rowspan="5">
    			<img src="images/photo/<?php echo $objResult["Photo"]; ?>" width="437" height="441" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="186" alt=""></td>
    	</tr>
    	<tr>
    		<td rowspan="14">
    			<img src="images/card_04.png" width="53" height="583" alt=""></td>
    		<td colspan="4" background="images/card_05.png" width="398" height="38" class="Code">
    			PMY<?php echo $objResult["Teamcode"]; ?>-<?php echo $objResult["Membercode"]; ?></td>
    		<td colspan="2" rowspan="5">
    			<img src="images/card_06.png" width="72" height="266" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="38" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4">
    			<img src="images/card_07.png" width="398" height="33" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="33" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="2" rowspan="3">
    			<img src="images/card_08.png" width="124" height="195" alt=""></td>
    		<td>
    			<img src="images/qrcode/<?php echo $objResult["QR"]; ?>" width="140" height="141" alt=""></td>
    		<td rowspan="3">
    			<img src="images/card_10.png" width="134" height="195" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="141" alt=""></td>
    	</tr>
    	<tr>
    		<td rowspan="2">
    			<img src="images/card_11.png" width="140" height="54" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4">
    			<img src="images/card_12.png" width="437" height="11" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="11" alt=""></td>
    	</tr>
    	<tr>
    		<td rowspan="9">
    			<img src="images/card_13.png" width="67" height="317" alt=""></td>
    		<td colspan="4" background="images/card_14.png" width="402" height="37" class="Details">
    			<?php echo $objResult["Facebook"];?></td>
    		<td colspan="4">
    			<img src="images/card_15.png" width="397" height="37" alt=""></td>
    		<td rowspan="9">
    			<img src="images/card_16.png" width="41" height="317" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="37" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="6">
    			<img src="images/card_17.png" width="486" height="28" alt=""></td>
    		<td colspan="2" rowspan="4" background="images/card_18.png" width="313" height="104" class="NickName">
    			<?php echo $objResult["Nickname"];?></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4" background="images/card_19.png" width="402" height="38" class="Details">
    			<?php echo $objResult["LineID"]; ?></td>
    		<td colspan="2" rowspan="7">
    			<img src="images/card_20.png" width="84" height="252" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="38" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4">
    			<img src="images/card_21.png" width="402" height="31" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4" rowspan="2" background="images/card_22.png" width="402" height="38" class="Details">
    			<?php echo $objResult["IG"]; ?></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="7" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="2" rowspan="2">
    			<img src="images/card_23.png" width="313" height="57" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4">
    			<img src="images/card_24.png" width="402" height="26" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="26" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4" background="images/card_25.png" width="402" height="38" class="Details">
    			<?php echo $objResult["Phone"]; ?></td>
    		<td rowspan="2">
    			<img src="images/card_26.png" width="128" height="119" alt=""></td>
    		<td background="images/card_27.png" width="185" height="38" class="County">
    			<?php echo $objResult["County"];?></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="38" alt=""></td>
    	</tr>
    	<tr>
    		<td colspan="4">
    			<img src="images/card_28.png" width="402" height="81" alt=""></td>
    		<td>
    			<img src="images/card_29.png" width="185" height="81" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="81" alt=""></td>
    	</tr>
    	<tr>
    		<td>
    			<img src="images/spacer.gif" width="53" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="67" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="57" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="140" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="134" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="71" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="83" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="128" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="185" height="1" alt=""></td>
    		<td>
    			<img src="images/spacer.gif" width="41" height="1" alt=""></td>
    		<td></td>
    	</tr>
    </table>
<?php
mysqli_close($con);
?>
</div>
  <br>
  <image id="theimage"></image>
  <br />
  <a href="#" class="" onclick="to_image()"> คลิกที่นี่ หากบัตรตัวแทนไม่แสดง </a>

  </div>

<script type="text/javascript" src="html2canvas.js"></script>

<script type="text/javascript">
//ส่วนที่ 1 แปลง html เป็น canvas ใน html5
html2canvas(document.getElementById("my_rectangle"),{ //ต้องการแปลก div id เท่ากับ my_rectangle เป็น canvas
    onrendered: function(canvas) {// ฟังก์ชั่น เมื่อทำงานเสร็จ
        canvas.id = "someId"; // กำหนด id ให้กับ canvas นั้น เพื่ออ้างอิงใช้งานในภายหลัง
        canvas.style.display="none";// ซ่อน canvas นั้นไม่ต้องแสดง หรือจะแสดงก็ได้ โดยตัดบรรทัดนี้ออก
        document.getElementById("content_page_data").appendChild(canvas);// ให้ canvas ที่สร้างอยู่ใน div id ที่เรากำหนด
        document.getElementById("my_rectangle").hidden = true;
    }
});
// ส่วนที่ 2 แปลง canvas ให้เป็นรูปภาพ สามารถ คลิกขวา และบันทึก เป็น png ไฟล์ ได้
function to_image(){
    var canvas = document.getElementById("someId"); // เรียกใช้ canvas ที่ถูกสร้างขึ้น อ้างอิงตาม id ที่กำหนดก่อนหน้า
    document.getElementById("theimage").src = canvas.toDataURL();
    //นำ canvas แปลงเป็นข้อมูล url แล้วแสดงใน element img รูปภาพ
    Canvas2Image.saveAsPNG(canvas);//แสดงเป็นไฟล์รูปภาพ png

}
</script>



  </body>
</html>
