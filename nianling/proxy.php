<?php
require_once 'facepp_sdk.php';



$facepp = new Facepp();
$facepp->api_key       = '12a36e850a345207111e7115223c3dc4';
$facepp->api_secret    = 'xH7iHyVrXK74Di0yzrvlcegr_WIzwNIn';

#detect local image
$params['img']          = $_FILES['file']['tmp_name'];
$params['attribute']    = 'gender,age,race,smiling,glass,pose';

// $_FILES['file']['tmp_name'] = imagescale($_FILES['file']['tmp_name'], 1000);
$fileName = "/Library/WebServer/Documents/svn/iceshi/3/nianling/demo.png";
echo file_exists($fileName);
$imgstream = file_get_contents($fileName);
$im = imagecreatefromstring($imgstream);
$newOne = imagescale($im, 1000);
imagejpeg($newOne, "shit.jpg");
imagedestroy($newOne);



echo getimagesize("shit.jpg");
echo "shit";


return;

$response               = $facepp->execute('/detection/detect',$params);



#detect image by url
// $params['url']          = 'http://iceshi-avatar.stor.sinaapp.com/IMG_0205.JPG';
// $response               = $facepp->execute('/detection/detect',$params);
// print_r($response);

if($response['http_code'] == 200) {
    #json decode
    $data = json_decode($response['body'], 1);
    echo $response['body'];
    #get face landmark
    // foreach ($data['face'] as $face) {
    //     $response = $facepp->execute('/detection/landmark', array('face_id' => $face['face_id']));
    //     print_r($response);
    // }

    // #create person
    // $response = $facepp->execute('/person/create', array('person_name' => 'unique_person_name'));
    // print_r($response);

    // #delete person
    // $response = $facepp->execute('/person/delete', array('person_name' => 'unique_person_name'));
    // print_r($response);

} else {
	echo $response['http_code'];
}

