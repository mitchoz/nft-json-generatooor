<?php

include("vars.php");


for($i=$startnumber;$i<$maxSupply+$startnumber;$i++)
{
    if($addNumbers)
        $vname = $name." #".$i."/".$maxSupply;
    else $vname = $name;

    if($printoutput)
    {
        echo "-----------";
        echo "\n";
        echo "Creating NFT Metadata for:";
        echo "\n";
        echo $vname;
        echo "\n";
        echo $description;
        echo "\n";
        echo "\n";
        echo $image;
        echo "\n";
        echo $image_url;
        echo "\n";
        echo $thumbnail_url;
        echo "\n";
        echo "\n";

        echo "*Traits:*";
        echo "\n";
        foreach($traits as $key=>$value)
        {
            echo $key.":".$value;
            echo "\n";
        }
        echo "\n";
    }

    $obj = new stdClass();
    $obj->name = $vname;
    $obj->description = $description;
    $obj->image = $image;
    $obj->image_url = $image_url;
    $obj->thumbnail_url = $thumbnail_url;

    if(isset($animation_url) && $animation_url != "")
        $obj->animation_url = $animation_url;

    if(isset($external_url) && $external_url != "")
        $obj->external_url = $external_url;

    
    if(count($traits) > 0)
    {
        $obj->attributes = [];
        foreach($traits as $key=>$value)
        {
                $trait = new stdClass();
                $trait->trait_type = $key;
                $trait->value = $value;
                array_push($obj->attributes,$trait);
        }
    }
    
    
    $json = json_encode($obj);

    echo $json;

    if($addNumberToFilename)
        $writeto = $filenameroot."_".$i;
    else
        $writeto = $filenameroot;

    if(!file_exists($dir."/".$exportfolder))
        mkdir($dir."/".$exportfolder);
        
    if (file_put_contents($dir."/".$exportfolder."/".$writeto.".json", $json))
        echo "JSON file created for #".$i;
    else 
        echo "Error creating json file for #".$i;

    


}





?>