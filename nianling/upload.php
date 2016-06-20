<?php
// require_once 'UploadFile.class.php';
date_default_timezone_set("Asia/Taipei");

$config = array(
	'UPLOAD_MAX_SIZE' => 5145728,
	'IMAGE_UPLOAD_FILE_EXT' => 'png,gif,jpg,jpeg',
	'UPLOADS_STOARGE_URL'=>'http://iceshi-avatar.stor.sinaapp.com/',
	'UPLOADS_STOARGE_DOMAIN'=>'avatar'
);

if(isset($_POST['file']) && !empty($_POST['file'])) {
	$img = str_replace('data:image/png;base64,', '', $_POST['file']);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	// $ex = explode(",", $_POST['file']);//分割data-url数据
	// $filter = explode('/', trim($ex[0], ';base64'));//获取文件类型
	// error_log($_POST['file']);
	// error_log($filter[1]);
	// $img = base64_decode(str_replace($filter[1], '', $ex[1]));//图片解码

	$new_name = date("YmdHis") . '_' . rand(10000, 99999) . '.png';
	// $tmp_name = "temp.png";

	// $success = file_put_contents($new_name, $data);

	// if (!$success) {
	// 	echo "fail";
	// 	return;
	// }

	$upload = new SaeStorage();
	$result = $upload->write($config["UPLOADS_STOARGE_DOMAIN"], $new_name, $data);
	// $result = $upload->upload($config["UPLOADS_STOARGE_DOMAIN"], $new_name, $tmp_name);
	if(!$result) {
		echo "fail";
	} else {
		$re = array('url'=>$result);
		echo json_encode($re);
	}

} else {
	echo "fail";
}

// $target_dir = "uploads/";

// $target_file = $target_dir . basename($_FILES["file"]["name"]);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["file"]["tmp_name"]);
//     if($check !== false) {
//         // echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         // echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// // Check if file already exists
// // if (file_exists($target_file)) {
// //     echo "Sorry, file already exists.";
// //     $uploadOk = 0;
// // }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     // echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     // echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     //     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//     // } else {
//     //     echo "Sorry, there was an error uploading your file.";
//     // }
// 	// $upload = new UploadFile();
// 	// $upload->maxSize = $config["UPLOAD_MAX_SIZE"];
// 	// $upload->allowExts = explode(',', strtolower($config["IMAGE_UPLOAD_FILE_EXT"]));
// 	// $upload->savePath =  $config["UPLOADS_STOARGE_URL"];
// 	// $today = toDate(time(), 'Ymd');
// 	// $upload->savePath = $upload->savePath.$today.'/';
// 	// if(!$upload->upload()) {
// 	// 	print ($upload->getErrorMsg());
// 	// }
// 	$new_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $imageFileType;
// 	$tmp_name = $_FILES["fileToUpload"]["tmp_name"];
// 	$upload = new SaeStorage();
// 	$result = $upload->upload($config["UPLOADS_STOARGE_DOMAIN"], $new_name, $tmp_name);
// 	if(!$result) {
// 		alert("上传失败");
// 	} else {
// 		$re = array('url'=>$result);
// 		echo json_encode($re);
// 	}
// }

// function toDate($time, $format = 'Y-m-d H:i:s') {
//     if (empty($time)) {
//         return '';
//     }
//     $format = str_replace('#', ':', $format);
//     return date(($format), $time);
// }

// function alert($msg) {
//     header('Content-type: text/html; charset=UTF-8');
//     $json = new Services_JSON();
//     echo $json->encode(array('error' => 1, 'message' => $msg));
//     exit;
// }

?>
