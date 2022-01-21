<?php

$dir = __DIR__;

//Generator Config

$filenameroot = "";
$addNumberToFilename = true;
$printoutput = true; //Print individual NFT data to console while generator is running
$addNumbers = true; //Add the version number to the name

$exportfolder = "export";


//Mandatory Input
$maxSupply = 5; //This is the max supply of tokens that can be created through sharing
$startnumber = 1; //The number of the first NFT. Generator will run until $maxSupply+$startnumber

$name = "Your name";
$description = "Your project description";

//(Best is to upload the following data onto IPFS for safe storage)
$image = "";
$image_url = "";
$thumbnail_url = "";

//Optional Input
$animation_url = "";
$external_url = "";

//Additional Properties and traits
$traits = []; //["propertyA" => 1, "propertyB" => 2];








?>
