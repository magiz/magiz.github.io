<?php
set_time_limit(0);
require_once 'mercali.php';
$trt = file_get_contents('tor.torrent');
$torrent = new Torrent( $trt );
echo '<br>private: ', $torrent->is_private() ? 'yes' : 'no', 
	 '<br>name: ', $torrent->name(), 
	 '<br>comment: ', $torrent->comment(), 
	 '<br>piece_length: ', $torrent->piece_length(), 
	 '<br>size: ', $torrent->size( 2 ),
	 '<br>hash info: ', $torrent->hash_info(),
	 '<br>stats: ';
var_dump( $torrent->scrape() );
echo '<br>content: ';
var_dump( $torrent->content() );

?>