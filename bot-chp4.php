<?php
$access_token = 'IK/tNVMKN8lsxq0jg/xdDMERkVzOa6eD1sLOtlcJItVaSxROA58JYkS9Aa9apRSTLhCBp3OPLgPXxub4Geocqg+Yf/QcOqgE6hSABva8JtELVKUpwiajs1mEb3FStMOaEjrSXfbw5BOgfBjmlN31SQdB04t89/1O/w1cDnyilFU=';
// Get POST body content
//ตัวแปรรายการอุปกรณ์
$pole = "49.เสาคอนกรีต 8 9 9.3 เมตร\n50.เสาคอนกรีต 12 12.2 14 14.3 16 เมตร\n…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$crossarm = "51.คาน คอร.\n52.เหล็กคอนเคเบิ้ลอากาศ\n53.เหล็กรูปรางน้ำ\n54.คอน คอร\n55.คอน คอร สปัน\n56.คอนคอร สปันสำหรับเข้าปลานสาย…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$cross_eq = "57.สลักเกลียวตลอด\n58.สลักเกลียวห่วงกลม\n59.สลักเกลียวหัวหกเหลี่ยม\n60.สลักเกลียว\n61.สลักห่วงกลม\n62.เหล็กประกับคอนแบบท้าวแขน\n63.เหล็กฉากรับคอนสาย\n64.เหล็กประกับคอน\n65.นัทรูปห่วง\n66.แหวนสปริง\n67.แหวนสี่เหลี่ยมแบน\n…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$stub = "68.แผ่นสมอบกคอนกรีตเสริมเหล็ก\n69.แผ่นห่วงสำหรับสายยึดโยง\n70.สลักห่วงแบบธรรมดาเดี่ยว\n71.สัตบโบลท์\n72.เสาต่อม่อ คอร\n73.กายการ์ด\n74.สมอบกคอนกรีตอัดแรง\n75.ก้านสมอบกแบบห่วงสองร่อง\n76.ก้านสมอบกแบบห่วงกลม\n7.อุปกรณ์ประกอบท้าวแขน\n78.กายทิมเบิลสำหรับสายยึดโยง\n79.ยูแคล้มป์\n…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$li = "80.ท่อ PVC\n81.กราวด์วายแคล้มป์\n82.กราวด์วายร์แคล้มป์ สำหรับเสาคอนกรีต สำหรับเหล็กฉากรับสายล่อฟ้า\n83.เหล็กฉากรับสายล่อฟ้า\n84.หลักดิน\n85.เหล็กรูปรางน้ำ รับสายล่อฟ้า\n86.แหวนสี่เหลี่ยมโค้ง\n87.ลวดเหล็กกลม\n88.ลวดเหล็กตีเกลียว\n …พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$insulator = "89.สเตรนแคล้มป์แบบตรง\n90.สเตรนแคล้มป์ พร้อมแคล้มป์ปิ้งคีปเปอร์\n91.ชัสเพนชั่นแคล้มป์ แบบเคลวิส\n92.ที่จับลูกรอก\n93.ลูกถ้วยก้านตรง\n94.ลูกถ้วยโพสท์ไทพ์\n95.ลูกรอกแรงต่ำ\n96.ลูกถ้วยสำหรับสายยึดโยง\n97.ลูกถ้วยแขวน\n98.ก้านลูกถ้วย\n99.แร็ค\n100.ลูกถ้วยไลน์โพสท์ไทพ์ ลูกถ้วยพินโพสท์ไทพ์\n…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$conduc = "101.ลูกถ้วยไลน์โพสท์ไทพ์ ลูกถ้วยพินโพสท์ไทพ์\n102.เคเบิลอากาศอะลูมิเนียม\n103.สายอะลูมิเนียมชนิดกลมตันหุ้มฉนวน พีวีซี. เข้ามิเตอร์แรงต่ำ\n104.สายทองแดงตีเกลียวหุ้มฉนวนครอสลิงค์\n105.หางปลาเจาะรูตามมาตรฐาน เนมา สำหรับสายอะลูมิเนียม\n106.ชุดต่อปลายสายเคเบิล สำหรับภายนอกอาคาร 1\n107.ชุดต่อปลายสายเคเบิล สำหรับภายนอกอาคาร 2\n108.เคเบิลอากาศแรงสูง ชนิดพันเกลียว 22kV\n109.ทิมเบิลเคลวิส สำหรับปรีฟอร์มเข้าปลายสาย\n110.คอมเปาด์ ช่วยสัมผัสทางไฟฟ้า ซิลิโคนคอมเปาด์ สำหรับทาลูกถ้วย\n111.สายอะลูมิเนียมแกนเหล็ก\n112.สายอะลูเนียมเปลือย\n113.สายอะลูมิเนียมหุ้มฉนวน พีวีซี\n114.สายอะลูมิเนียมเจือ\n115.พี.จี. คอนเนคเตอร์ สลักเดี่ยว\n116.คอนเนคเตอร์ เข้าปลายสาย\n117.พี.จี. คอนเนคเตอร์ สลักคู่\n118.พี.จี. คอนเนคเตอร์ สลัก 3 ตัว\n119.หลอดต่อสายชนิดบีบไม่รับแรงดึงสายอะลูมิเนียม\n120.หลอดต่อสายชนิดบีบรับแรงดึง สายเอซีเอสอาร์\n121.หลอดต่อสายชนิดบีบรับแรงดึง สายอะลูมิเนียม\n122.หลอดต่อสายชนิดบีบไม่รับแรงดึงสายอะลูมิเนียมแกนเหล็ก\n123.แคล้มป์เข้าปลายสาย\n124.คอนเนคเตอร์ชนิดบีบ แบบเอซ\n125.ฮอทไลน์แคล้มป์\n126.ปรีฟอร์มไลน์การ์ด\n127.ที่แขวนสายหุ้มฉนวนเต็มพิกัดตีเกลียว\n128.หัวเคเบิลใช้ภายนอกอาคาร\n129.หัวเคเบิลสำหรับ เอ๊กแอลพีอี เคเบิล\n130.ปรีฟอร์มอาร์เมอร์ร็อค\n131.ปรีฟอร์มเข้าปลายสายสำหรับเคเบิลอากาศแรงสูง\n132.เคเบิลสเปเซอร์สำหรับ 22-33 พร้อมห่วงรัด kV\n133.ไวเบรชั่นแดมเปอร์ แบบสไปแรล\n134.แผ่นพลาสติกหุ้มสาย พร้อมเส้นไนล่อนรัดสาย 2 เส้น\n135.สลักเกลียวตะขอแขวน สำหรับเข้าปลายสาย และทางโค้ง\n136.แคล้มป์แขวนสำหรับสายเคเบิลอากาศ ชนิดพันเกลียว\n137.สลักเกีลียวตะขอแขวน\n138.ลวดอะลูมิเนียมแบน 1x10 ลวดอะลูมิเนียมกลม 4.0 ลวดอะลูมิเนียมกลมหุ้มฉนวน 4.0\n139.เคเบิลใต้ดินทองแดง\n140.คอนเนคเตอร์ชนิดบีบ แบบเอช\n141.แคล้มป์แขวนสายเคเบิล\n142.พีวีวี.เทป เทปพันเคเบิลอากาศแรงสูง]…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$meter = "143.ตู้อะลูมิเนียมใช้ในอาคาร\n144.ตู้สำหรับมิเตอร์ พร้อมซีที. แรงต่ำ\n145.ดีมานด์มิเตอร์ชนิดสะสม 3 เฟส\n146.ทีโอยูมิเตอร์ เอเอ็มอาร์มิเตอร์ และอุปกรณ์\n147.ไม้แป้นรองรับมิเตอร์\n148.วาร์อาวร์มิเตอร์\n149.วัตต์อาวร์มิเตอร์ ซิงเกิลเฟส 2 สาย 220 V\n150.วัตต์อาวร์มิเตอร์ 3 เฟส 4 สาย\n151.ซี.ที.ใช้นอกอาคาร 22 kV 1 \n152.ซี.ที.ใช้นอกอาคาร 22 kV  2\n153.ซี.ที.ใช้นอกอาคาร 33 kV  1\n154.ซี.ที.ใช้นอกอาคาร 33 kV  2\n155.ซี.ที. แรงต่ำใช้นอกอาคาร 500 V\n156.ซี.ที. หนึ่งเฟส ใช้นอกอาคาร\n…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$protec = "157.ฐานฟิวส์ สำหรับ ดี-คาทริดจ์ฟิวส์\n158.ดรอพเอาต์ ฟิวส์คัตเอาต์ หนึ่งอินซูเลเตอร์ 1\n159.ดรอพเอาต์ ฟิวส์คัตเอาต์ หนึ่งอินซูเลเตอร์ 2\n160.ฟิวส์ลิงค์ อีอีไอ-เนมา แบบ k หรือแบบไฮเลิร์จ\n161.ฟิวส์สวิตซ์แรงต่ำ 1x400แอมป์ 500V\n162.กับดักเลิร์จแรงสูง\n163.เอชอาร์ซีฟิวส์แรงต่ำ มาตรฐาน ดิน 43620\n164.กับดักเลิร์จ 250-500 V\n165.ชุดเพาเวอร์ฟิวส์ ชนิด อี\n166.แอร์เบรคสวิตซ์ 3 ขา\n167.สวิตซ์ตัดตอนแรงสูง หนึ่งขา  22 kV แบบอินไลน์\n168.สวิตซ์ตัดตอนแรงสูง หนึ่งขา\n169.สวิตซ์เปิดได้เมื่อมีโหลด 3 เฟส ชนิด เอสเอฟซิคซ์\n170.เซคชั่นนัลไลเซอร์ 3 เฟส 33 kV 400 A\n171.เซอร์กิตเบรคเกอร์แรงต่ำ\n172.รีโคลสเซอร์ 3 ขา\n173.แวคคิวอั้มสวิตซ์ 3 เฟส 33 kV 400 แอมป์\n174.สวิตซ์เปิดได้เมื่อมีโหลด 3 ขา 33 kV 600 A\n175.โหลดเบรคสวิตซ์ 3 ขา 22 kV 600 A 40 kA\n176.ออยล์สวิตซ์ 22 kV 300A 33 kV 300A\n…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$tran = "177.เหล็กจับขอบถังหม้อแปลงสำหรับยึดสายแรงต่ำ\n178.คะแปซิเตอร์ 3 เฟส ใช้ในอาคาร\n179.คะแปซิเตอร์ 3 เฟส ใช้นอกอาคาร\n180.คะแปซิเตอร์ หนึ่งเฟส สองบุชชิ่งใช้นอกอาคาร\n181.คะแปซิเตอร์ หนึ่งเฟส ใช้ในอาคาร\n182.คะแปซิเตอร์ หนึ่งเฟส ใช้นอกอาคาร\n183.คะแปซิเตอร์หนึ่งเฟส หนึ่งบุชชิ่งใช้นอกอาคาร\n184.ที่แขวนคะแปซิเตอร์ 11 - 33 kV\n185.เหล็กแขวนท่อ พีวีซี.\n186.หม้อแปลง 3 เฟส แบบปิดผนึก\n187.หม้อแปลง 1 เฟส หนึ่งบุชชี่ง\n188.หม้อแปลง 1 เฟส สองบุชชี่ง\n189.หม้อแปลง 3 เฟส\n190.หม้อแปลงชนิด CPS  1 เฟส หนึ่งบุชชี่ง\n191.หม้อแปลง CPS 1 เฟส สองบุชชิ่ง\n…พิมพ์เลขที่หัวข้อที่้ต้องการได้เลยครับ";
$street = "192.สวิตซ์เวลาวงจรเดี่ยว ใช้ภายนอก\n193.กิ่งโคมไฟถนน แบบที่ 3\n194.โคมฟลูออเรสเซนต์และโคมแสงจันทร์\n195.ชุดสวิตช์สำหรับควบคุมไฟถนนชนิดพลังแสง\n…พิมพ์เลขที่หัวข้อที่ต้องการได้เลยครับ";
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			$userid = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];
						
            $csv = array_map('str_getcsv', file('sta.csv'));
            $findName = iconv("utf-8","tis-620",$text);
	    $findName = strtoupper($findName);
			//$findName = strtoupper($findName);
            foreach($csv as $values)
            {
		    
             if(trim($values[1])==$findName or $values[2]==$findName or $values[3]==$findName) {  // index 0 contains the name
                 $Myd = iconv("tis-620","utf-8",$values[0]);  // index 1 contains the googlemap link  
		     $findresult = "success";
		     $messages = [
				'type' => 'text',
				'text' => $Myd ];
	     }
			 }
			//สร้างข้อความภาคผนวก
			if($Myd=="905"){
				$messages = array(
					'type'=> 'template',
					'altText'=> 'กรุณาเลือกภาคผนวก',
				         'template'=>array(
						 'type'=>'buttons',
						 'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
						 'text'=>'กรุณาเลือกภาคผนวก',
				                   'actions'=>array(
							   
							         array('type'=> 'message','label'=> 'ภาคผนวก ก','text'=> 'ภาคผนวก ก'),
							         array('type'=> 'message','label'=> 'ภาคผนวก ข','text'=> 'ภาคผนวก ข'),
								 array('type'=> 'message','label'=> 'ภาคผนวก ค','text'=> 'ภาคผนวก ค'),  
								 array('type'=> 'message','label'=> 'ภาคผนวก ง','text'=> 'ภาคผนวก ง')  
								   
								   )
					                   )
					
					
					);
						  
			}
			//จบสร้างข้อความภาคผนวก
			////เข้าโหมดระเบียบ
			if ($Myd=="901") {
		                // Build message to reply back
				$findresult = "N/A";
			$messages = array(
					 'type'=> 'template',
                                          'altText'=> 'ระเบียบก่อสร้างปี 59 กรุณาเลือกหมวด',
                                           'template'=>array (
                                                             'type'=> 'carousel',
                                                         'columns'=> array(
							   
						                    array(
							            'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
								    'title'=>'ระเบียบก่อสร้างปี59 กรุณาเลือกหมวด',    
								    'text'=> 'หมวดที่1 สำรวจออกแบบ ประมาณการ',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'คุณเลือกหมวดที่ 1'
                                                                                            )
                                                                                      )//action col1
								     ),
								     array(
							            'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
							            'title'=>'ระเบียบก่อสร้างปี59 กรุณาเลือกหมวด', 
								    'text'=> 'หมวดที่2 การดำเนินการก่อสร้าง',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'คุณเลือกหมวดที่ 2'
                                                                                            )
                                                                                      )//action col2
							             ),
							              array(
								    'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',      
							           'title'=>'ระเบียบก่อสร้างปี59 กรุณาเลือกหมวด', 
								    'text'=> 'หมวดที่3 อำนาจอนุมัติ',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'คุณเลือกหมวดที่ 3'
                                                                                            )
                                                                                      )//action col3
								     ),
								   array(
							          'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
							           'title'=>'ระเบียบก่อสร้างปี59 กรุณาเลือกหมวด', 
								    'text'=> 'ภาคผนวก',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'ภาคผนวก'
                                                                                            )
									               
                                                                                      )//action col4
								     )
								 
								 
								 
								 
								     ) //array columns
                                                            )//array templete
				                    
                                            ); //array messages 
			
			 }
			/////จบเข้าโหมดระะเบียบ
			 if($text=="คุณเลือกแผนกแรงสูง"){ 
			    $Myd = "1.การปักเสา เสาตอม่อ\n2.การติดตั้งคอน ลูกถ้วย และประกอบอนด์ไวร์\n3.การติดตั้งเหล็กรับสายล่อฟ้า\n4.การฝังสมอบก และประกอบยึดโยงระบบจำหน่าย\n5.การฝังสมอบก และประกอบยึดโยงสายล่อฟ้า\n6.การพาดสายไฟ ระยะหย่อนยาน\n7.การพาดสายล่อฟ้า ระยะหย่อนยาน\n8.ระยะห่าง ความสูงของสายไฟ\n9.การพันและผูกลูกถ้วย\n10.การต่อสาย พันเทป(\n11.การเชื่อมสาย สายแยก พันเทป\n12.การเข้าปลายสาย\n13.การตัดต้นไม้\n14.การทาสีเสา\n15.การพ่นสี หมายเลขเสา\n16.การยึดโยง\n17.การต่อลงดิน\n18.การติดตั้งกับดักเสิร์จแรงสูง\nต้องการดูแบบมาตรฐานหัวข้อไหนสามารถพิมพ์เลขที่หัวข้อได้เลย";
			
			 $messages = [
				'type' => 'text',
				'text' => $Myd 
			           ];
			 }
			 if($text=="คุณเลือกแผนกหม้อแปลง"){ 
			    $Myd = "34.การติดตั้งหม้อแปลง (ระยะความสูง,ทิศทาง\n35.การติดตั้งคอน ลูกถ้วย และประกอบบอนด์ไวร์\n36.การพาดสายแรงสูงเข้าหม้อแปลง และลำดับเฟส\n37.การผูกสายไฟกับลูกถ้วย\n38.การติดตั้งกับดักเสิร์จแรงสูง หางปลา\n39.การติดตั้งดร็อปเอาท์ พินเทอร์มินอล และฟิวส์ลิงค์\n40.การติดตั้งคอนสปัน 3,200 มม.ระยะความสูง\n41.การเข้าสายบุชชิ่งหม้อแปลง หางปลา ฉนวนครอบุชชิ่ง\n42.การติดตั้งสายแรงต่ำ และลำดับเฟส\n43.การติดตั้งกับดักเสิร์จแรงต่ำ\n44.การติดตั้งคอนสำหรับ LT ,LT สวิตซ์ และฟิวส์แรงต่ำ\n45.การติดตั้งที่จับขอบถัง,เหล็กแขวน ท่อร้อยสายแรงต่ำ\n46.เทคตอนกรีตที่คาน โคนเสา\n47.การต่อลงดิน\n48.ความต้านทานดินต่อจุด\nต้องการดูแบบมาตรฐานหัวข้อไหนสามารถพิมพ์เลขที่หัวข้อได้เลย";
			$messages = [
				'type' => 'text',
				'text' => $Myd   
			              ];
			 }
			 if($text=="คุณเลือกแผนกแรงต่ำ"){ 
			    $Myd = "19.การปักเสา เสาตอม่อ\n20.การติดตั้งคอน แร็ค\n21.การฝังสมอบก และประกอบยึดโยง\n22.การพาดสายไฟ ระยะหย่อนยาน\n23.ระยะห่าง ความสูงของสายไฟ\n24.การผูกสายไฟกับลูกรอกแรงต่ำ\n25.การต่อสาย พันเทป\n26.การเชื่อมสาย สายแยก พันเทป\n27.การเข้าปลายสาย\n28.การติดตั้งกับดักเสิร์จแรงต่ำ\n29.การทาสีเสา\n30.การพ่นสีเสา หมายเลขเสา\n31.การยึดโยง\n32.การต่อลงดิ\n33.ค่าความต้านทานดินรวม\nต้องการดูแบบมาตรฐานในหัวข้อไหนสามารถพิมพ์เลขที่หัวข้อได้เลย";
			$messages = [
				'type' => 'text',
				'text' => $Myd    
			             ];
			 }
			if($text=="Pea Smart Location"){$Myd = "Pea Smart Location เป็นระบบค้นหาพิกัดที่ตั้ง หม้อแปลง ดรอฟเอ๊าท์ สวิซต์ ในระบบจำหน่ายของ กฟต.1 สามารถค้นหาได้โดยพิมพ์ รหัส PEA หม้อแปลง หรือ รหัสดรอฟเอ็าท์ฟิวส์ เช่น PTH04S-30,/24-005152";$messages = ['type' => 'text','text' => $Myd];}
			if($text=="ข้อมูลยานพาหนะ"){$Myd = "ข้อมูลยานพาหนะ สามารถค้นหาข้อมูลยานพาหนะของ กฟต.1 ได้โดยการพิมพ์หมายเลขทะเบียน เช่น กธ-6340";$messages = ['type' => 'text','text' => $Myd];}
			if($text=="เสา"){$Myd = $pole;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="คอนสาย คาน"){$Myd =  $crossarm;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="อุปกรณ์ยึดคอนสาย"){$Myd = $cross_eq;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="เสาตอม่อ ยึดโยง"){$Myd = $stub;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="ล่อฟ้า การต่อลงดิน"){$Myd = $li;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="ลูกถ้วยฉนวน"){$Myd = $insulator;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="สายไฟฟ้า"){$Myd = $conduc;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="มิเตอร์ ซี.ที วี.ที"){$Myd = $meter;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="ป้องกันและสวิตช์"){$Myd = $protec;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="หม้อแปลงไฟฟ้า"){$Myd = $tran;$messages = ['type' => 'text','text' => $Myd];}
			if($text=="อุปกรณ์ไฟถนน"){$Myd = $street;$messages = ['type' => 'text','text' => $Myd];}
			 if($Myd=="999"){ 
				 $findresult = "success";
			    $messages = array(
					 'type'=> 'template',
                                          'altText'=> 'อุปกรณ์ในระบบจำหน่าย',
                                           'template'=>array (
                                                             'type'=> 'carousel',
                                                             'columns'=> array(
						                               array(
										     'thumbnailImageUrl'=>'https://pea-standard.herokuapp.com/PIC1.jpg',
								                     'title'=>'อุปกรณ์ในระบบจำหน่าย',    
								                     'text'=> 'กรุณาเลือกหมวด',
                                                                                        'actions'=>array (
                                                                                                           array(
                                                                                                                 'type'=> 'message',
                                                                                                                 'label'=> 'เสา',
                                                                                                                 'text'=> 'เสา'
                                                                                                                 ),
									                                   array(
                                                                                                                'type'=> 'message',
                                                                                                                 'label'=> 'คอนสาย คาน',
                                                                                                                 'text'=> 'คอนสาย คาน'
                                                                                                                  ),
												           array(
                                                                                                                'type'=> 'message',
                                                                                                                 'label'=> 'อุปกรณ์ยึดคอนสาย คาน',
                                                                                                                 'text'=> 'อุปกรณ์ยึดคอนสาย'
                                                                                                                  )
                                                                                                                  )//action col1
								            ),
								     array(
							            'thumbnailImageUrl'=>'https://pea-standard.herokuapp.com/PIC1.jpg',
							            'title'=>'อุปกรณ์ในระบบจำหน่าย', 
								    'text'=> 'กรุณาเลือกหมวด',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เสาตอม่อ ยึดโยง',
                                                                                            'text'=> 'เสาตอม่อ ยึดโยง'
                                                                                            ),
									    array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'ล่อฟ้า การต่อลงดิน',
                                                                                            'text'=> 'ล่อฟ้า การต่อลงดิน'
                                                                                            ),
									 array(
                                                                                             'type'=> 'message',
                                                                                              'label'=> 'ลูกถ้วยฉนวน',
                                                                                               'text'=> 'ลูกถ้วยฉนวน'
                                                                                                                  )
                                                                                      )//action col2
							             ),
							              array(
							           'thumbnailImageUrl'=>'https://pea-standard.herokuapp.com/PIC1.jpg',
							           'title'=>'อุปกรณ์ในระบบจำหน่าย', 
								    'text'=> 'กรุณาเลือกหมวด',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'สายไฟฟ้า',
                                                                                            'text'=> 'สายไฟฟ้า'
                                                                                            ),
									    array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'มิเตอร์ ซี.ที วี.ที',
                                                                                            'text'=> 'มิเตอร์ ซี.ที วี.ที'
                                                                                            ),
									    array(
                                                                                             'type'=> 'message',
                                                                                              'label'=> 'ป้องกันและสวิตช์',
                                                                                           'text'=> 'ป้องกันและสวิตช์'
                                                                                                                  )
                                                                                      )//action col3
								     ),
								   array(
							           'thumbnailImageUrl'=>'https://pea-standard.herokuapp.com/PIC1.jpg',
							           'title'=>'มาตรฐานงานก่อสร้างกรุณาเลือกแผนก', 
								    'text'=> 'อุปกรณ์ในระบบจำหน่าย',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'หม้อแปลงไฟฟ้า',
                                                                                            'text'=> 'หม้อแปลงไฟฟ้า'
                                                                                            ),
									    array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'อุปกรณ์ไฟถนน',
                                                                                            'text'=> 'อุปกรณ์ไฟถนน'
                                                                                            ),
									    array(
                                                                                                                'type'=> 'message',
                                                                                                                 'label'=> 'อื่นๆ',
                                                                                                                 'text'=> 'other'
                                                                                                                  )
									               
                                                                                      )//action col4
								     )
								 
								 
								 
								 
								     ) //array columns
                                                            )//array templete
				                    
                                            ); //array messages 
			 }
			
			
			 if ($text=="มาตรฐานงานก่อสร้าง"){
				 $findresult = "N/A";
				 $messages = array(
					 'type'=> 'template',
                                          'altText'=> 'มาตรฐานงานก่อสร้างกรุณาเลือกแผนก',
                                           'template'=>array (
                                                             'type'=> 'carousel',
                                                         'columns'=> array(
							   
						                    array(
							           'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
								    'title'=>'มาตรฐานงานก่อสร้างกรุณาเลือกแผนก',    
								    'text'=> 'แผนกแรงสูง',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'คุณเลือกแผนกแรงสูง'
                                                                                            )
                                                                                      )//action col1
								     ),
								     array(
								    'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
							            'title'=>'มาตรฐานงานก่อสร้างกรุณาเลือกแผนก', 
								    'text'=> 'แผนกหม้อแปลง',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'คุณเลือกแผนกหม้อแปลง'
                                                                                            )
                                                                                      )//action col2
							             ),
							              array(
								  'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
							           'title'=>'มาตรฐานงานก่อสร้างกรุณาเลือกแผนก', 
								    'text'=> 'แผนกแรงต่ำ',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'คุณเลือกแผนกแรงต่ำ'
                                                                                            )
                                                                                      )//action col3
								     ),
								   array(
							          'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
							           'title'=>'มาตรฐานงานก่อสร้างกรุณาเลือกแผนก', 
								    'text'=> 'อุปกรณ์ในระบบจำหน่าย',
                                                                    'actions'=>array (
                                                                                      array(
                                                                                            'type'=> 'message',
                                                                                            'label'=> 'เลือก',
                                                                                            'text'=> 'equip'
                                                                                            )
									               
                                                                                      )//action col4
								     )
								 
								 
								 
								 
								     ) //array columns
                                                            )//array templete
				                    
                                            ); //array messages 
			 }
			///เลือก mode
			if($Myd==""){
				$messages = array(
					'type'=> 'template',
					'altText'=> 'Pea smart query',
				         'template'=>array(
						 'type'=>'buttons',
						 'thumbnailImageUrl'=>'https://line-ptr-switch.herokuapp.com/PIC2.jpg',
						 'text'=>'กรุณาเลือกสิ่งที่ต้องการ',
				                   'actions'=>array(
							   
							         array('type'=> 'message','label'=> 'ระเบียบก่อสร้างปี 59','text'=> 'ระเบียบก่อสร้างปี 59'),
							         array('type'=> 'message','label'=> 'มาตรฐานงานก่อสร้าง','text'=> 'มาตรฐานงานก่อสร้าง'),
								 array('type'=> 'message','label'=> 'Pea Smart Location','text'=> 'Pea Smart Location'),  
								 array('type'=> 'message','label'=> 'ข้อมูลยานพาหนะ','text'=> 'ข้อมูลยานพาหนะ')  
								   
								   )
					                   )
					
					
					);
						  
			}/////จบเลือกโหมด
                // Build message to reply back
			

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		
			
		}
	}
	//// getdisplay
	$url = 'https://api.line.me/v2/bot/profile/'.$userid;

   $headers = array('Authorization: Bearer ' . $access_token);
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   //curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   $result = curl_exec($ch);
   curl_close($ch);
   $displayname = $result;
	//end get

}
$Ti = date("H:i:s",mktime(date("H")+7, date("i")+0, date("s")+0));
$Da = date("d.m.y");
$strFileName = "stadis.csv";
$objFopen = fopen($strFileName, 'a');
//$findName1 = iconv("tis-620","utf-8",$findName);
$strText1 = "\n".$Da.",".$Ti.",".$findName.",".$findresult.",".$displayname;
fwrite($objFopen, $strText1);
fclose($objFopen);

echo "OK";
