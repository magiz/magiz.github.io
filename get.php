<?php
set_time_limit(0);

$id = $_GET["id"];
$data = json_decode(file_get_contents("https://www.blogger.com/feeds/327279793114393343/posts/default/$id?alt=json"));
$info = (array) $data->entry->title;
$title = $info['$t'];
$info = (array) $data->entry->content;
$length = strpos($info['$t'], ';');
$file = base64_decode(substr($info['$t'], 0, $length - 1));
$description = substr($info['$t'], $length + 1);

require_once 'mercali.php';

$torrent = new Torrent( $file );
//echo '<br>private: ', $torrent->is_private() ? 'yes' : 'no', 
$title = $torrent->name(); 
$comment = $torrent->comment();
$piece_length = $torrent->piece_length();
$size =$torrent->size( 2 );
$hash_info=$torrent->hash_info();
//var_dump( $torrent->content() );


?>