#!/usr/bin/php
<?php
# Creates a UDP server on port 1040 and prints the output

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
$address = 0;
socket_bind($socket, $address, 1040);

$buffer = '';
$length = 1024;

while (true)
{
	if ($gotBytes = socket_recv($socket , $buffer , $length , MSG_DONTWAIT))
	{
		print "\nGot $gotBytes bytes: $buffer";
	}
	else
	{
		print ".";
		usleep (100000);
	}
}
print "Exited loop.";


socket_shutdown($socket);
socket_close($socket);

?>