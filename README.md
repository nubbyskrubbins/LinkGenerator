LinkGenerator
=============

Translate relative links into absolute links. Useful so you don't have to worry about changing your links from development on a local web server to a live web server.

Note that you need to route your relative URLs to your web root, and then to the destination. This is important so that LinkGenerator can create an absolute URL correctly.

For example, to generate a link for 

root/dir1/file1.php

You would have to use this relative URL:

../../root/dir1/file1.php
