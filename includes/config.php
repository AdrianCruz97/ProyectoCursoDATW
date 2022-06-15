<?php

// Archivo de la API para configurar los datos entregados a la misma y a partir de los cuales se calculará el 
// presupuesto.

class partPriceConfig{
    
    //units: mm = millimeters, EUR = Euro, g = grams
    
    public static $materials = array(
        "ABS"=>         array("fullName"=>"Acrylonitrile Butadiene Styrene", "price"=>array("amount"=>0.30, "unit"=>"EUR/g"),  "canBeVaporPolished"=>true,  "density"=>array("amount"=>1.04, "unit"=>"g/cm^3"), "colors"=>array("#000000","#FFFFFF","#FFFAE0","#FF0F0F","#FF8324","#FFA8C8","#F7FF00","#70FF33","#140AA3","#8921FF","#9291B5","#87593E")),
        "PLA"=>         array("fullName"=>"Polylactic acid",                 "price"=>array("amount"=>0.20, "unit"=>"EUR/g"),  "canBeVaporPolished"=>true,  "density"=>array("amount"=>1.25, "unit"=>"g/cm^3"), "colors"=>array("#000000","#FFFFFF","#FFFAE0","#FF0F0F","#FF8324","#FFA8C8","#F7FF00","#70FF33","#140AA3","#8921FF","#9291B5","#87593E")),
        "PC"=>          array("fullName"=>"Polycarbonate",                   "price"=>array("amount"=>0.60, "unit"=>"EUR/g"),  "canBeVaporPolished"=>true,  "density"=>array("amount"=>1.20, "unit"=>"g/cm^3"), "colors"=>array("#000000","#FFFFFF","#FFFAE0","#FF0F0F","#FF8324","#FFA8C8","#F7FF00","#70FF33","#140AA3","#8921FF","#9291B5","#87593E")),
        "Nylon"=>       array("fullName"=>null,                              "price"=>array("amount"=>0.45, "unit"=>"EUR/g"),  "canBeVaporPolished"=>false, "density"=>array("amount"=>1.25, "unit"=>"g/cm^3"), "colors"=>array("#000000","#FFFFFF","#FF0F0F","#70FF33","#140AA3","clear")),
        "TPE"=>         array("fullName"=>"Thermoplastic elastomer",         "price"=>array("amount"=>0.60, "unit"=>"EUR/g"),  "canBeVaporPolished"=>false, "density"=>array("amount"=>1.10, "unit"=>"g/cm^3"), "colors"=>array("clear")),
    );
    
    public static $printingCost = array("amount"=>"4.00","unit"=>"EUR/hour");
    
    public static $slicerParams = array(
        "slicers"=>array("cura")
    );
    
    public static $layerHeights = array(
        "rugoso"=>   array("amount"=>0.3,"unit"=>"mm"),
        "medio"=>    array("amount"=>0.2,"unit"=>"mm"),
        "fino"=>     array("amount"=>0.1, "unit"=>"mm")
    );
    
    public static $printSpeeds = array(
        "default"=> array("amount"=>40,"unit"=>"mm/s")
    );
}