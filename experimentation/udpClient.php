#!/usr/bin/php
<?php
# Creates a UDP client to 127.0.0.1 on port 1040 and prints the output

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
$address = "127.0.0.1";
socket_connect($socket, $address, 1040);

$buffer = '';

$data=array('apple', 'pear', 'bananana', 'orange');

foreach ($data as $item)
{
	# TODO check this line
	if (socket_send ($socket , $item, strlen($item),false))
	{
		print "Sent $item\n";
	}
	sleep (1);
}
print "Exited loop.";


socket_shutdown($socket);
socket_close($socket);

?>