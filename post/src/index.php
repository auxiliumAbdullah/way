<?php
// Include FB configuration file
$page_access_token = 'EAAJa4ZAAcdhEBAOYijM3mqZBlbQ1kTOctxqdcSvU0eaW4ZBY9fmfHnSkYWgKR6EZAOHVOn1dx71xsxuEW5rzCJyLjJZCkTLQHwP8dCZCKqop8qZAYd6Eke3Fsba0iDxIazBdpFmIbEpX4IpSZCOMn1Pby5Nkvxj0ATCd4re0KeMx0wZDZD';
$page_id = '100086898894789';

$data['picture'] = "http://www.example.com/image.jpg";
$data['link'] = "http://www.example.com/";
$data['message'] = "Your message";
$data['caption'] = "Caption";
$data['description'] = "Description";
$data['access_token'] = $page_access_token;

$post_url = 'https://graph.facebook.com/'.$page_id.'/feed';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($ch);
print_r($return);
curl_close($ch);
?>