<?php
use KubAT\PhpSimple\HtmlDomParser;

function main(array $args) : string {

    $instaboxHTML = HtmlDomParser::str_get_html(file_get_contents($args['instaURL']));

    foreach ($instaboxHTML->find('track-trace') as $trackTrace) {
        $shipmentJson = htmlspecialchars_decode($trackTrace->attr[':shipment']);
    }

    return $shipmentJson;

}
