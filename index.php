<?php

require_once 'torrent_api.php';

// get torrent infos
// magnet to torrent
// http://itorrents.org/torrent/6DB538D2905C891384FF42F13281041C3FA6EFF0.torrent
//1 byte is equal to 0.000001 megabytes
//1 byte is also equal to 0.00000095367432 megabytes
//$torrent = new Torrent( './test.torrent' );
$torrent = new Torrent( 'https://www.freetutorials.us/wp-content/uploads/2018/07/FreeTutorials.Us-Udemy-adobe-illustrator-advance-vector-artwork.zip.torrent' );
//$torrent = new Torrent( 'http://itorrents.org/torrent/6DB538D2905C891384FF42F13281041C3FA6EFF0.torrent' );

echo '<br>private: ', $torrent->is_private() ? 'yes' : 'no', 
	 '<br>annonce: ', $torrent->announce(), 
	 '<br>name: ', $torrent->name(), 
	 '<br>comment: ', $torrent->comment(), 
	 '<br>piece_length: ', $torrent->piece_length(), 
	 '<br>size: ', $torrent->size( 2 ),
	 '<br>hash info: ', $torrent->hash_info();

//var_dump( $torrent->scrape() );
//echo '<br>content: ';
//var_dump( $torrent->content() );
echo "<br>";
$total_files = count($torrent->content());
echo "Total Number of Files inside this Torrent = ".$total_files;
echo "<br>";
$nama = $torrent->content(2);
foreach($nama as $x => $x_value) {
    echo $x . ", Size=" . $x_value;
    echo "<br>";
}
//print_r($obj);
//print_r((array) json_decode($namas));



//print_r($torrent);

//$content = implode("<br>",$torrent->content(5));
//echo $content;
//echo '<br>source: ',
//	 $torrent;

//echo $torrent->magnet(); // use $torrent->magnet( false ); to get non html encoded ampersand
//var_dump( $torrent->magnet() );
echo "<br><br><br><br>";
//var_dump( $torrent->magnet( false ) );
echo $torrent->magnet( false );
