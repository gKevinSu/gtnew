<?php

namespace Component
{
	class ProductEngine{
		
		private $catalog;

		function __construct(){
			$this -> catalog = array();
			$serials = array(
            'led-downlight'=>'LED Downlight',
            'led-grid-light'=>'LED Grid Light',
            'led-spotlight'=>'LED Spotlight',
            'led-tube'=>'LED Tube',
            'led-track-light'=>'LED Track Light',
            'led-panel-light'=>'LED Panel Light',
            'led-strip'=>'LED Strip',
            'led-flood-light'=>'LED Flood Light');
			foreach ($serials as $catagory => $value) {
				$this -> catalog[$catagory] = array();
            $this -> catalog[$catagory]['name'] = $value;
            $this -> catalog[$catagory]['catagory'] = $catagory;
            //$this -> catalog[$catagory]['products'] = array();
			}
			//add downlight
         $led_downlight = array();
			$led_downlight['GT-DL0135W'] = array(
'pid' => 'GT-DL0135W',
'name' => 'LED Downlight',
'discription' => 'Voltage: 100-240V 
Wattage:35W    
Size: D230*72mm
Cut-out size: D195mm
Luminous Flux: 3000LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 90°
Material: Aluminum+Glass                                                                             
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '11.jpg
');
			$led_downlight['GT-DL0125W-15W-9W'] = array(
'pid' => 'GT-DL0125W/15W/9W',
'name' => 'LED Downlight',
'discription' => 'Voltage: 100-240V  
Wattage:25W/15W/9W   
Size: D190*59mm/ D140*58.5mm/ D105*47mm
Cut-out size: D165mm/ D125mm/ D93mm
Luminous Flux: 2100LM/1250LM/750LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 90°Material: Aluminum+Glass                                                                             
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '11.jpg
');
			$led_downlight['GT-DL0240W'] = array(
'pid' => 'GT-DL0240W',
'name' => 'LED Downlight',
'discription' => 'Voltage: 100-240V
Wattage:40W
Size: D235*65mm
Cut-out size: D200-210mm
Luminous Flux: 3400LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 110°
Material: Aluminum+PC                                                                 
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '12.jpg
');
			$led_downlight['GT-DL0230W-25W-20W-12W'] = array(
'pid' => 'GT-DL0230W/25W/20W/12W',
'name' => 'LED Downlight',
'discription' => 'Voltage: 100-240V 
Wattage:40W    
Size: D235*65mm
Cut-out size: D200-210mm
Luminous Flux: 3400LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 110°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '21.jpg
');
			$led_downlight['GT-DL0312W'] = array(
'pid' => 'GT-DL0312W',
'name' => 'Waterproof LED Downlight',
'discription' => 'Voltage: 100-240V 
Wattage:12W    
Size: D115*55mm
Cut-out size: D90-95mm
Luminous Flux: 1000LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 90°
Material: Aluminum+PC 
IP degree: IP65                                                                           
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '24.jpg
');
			$led_downlight['GT-DL0340W-30W-25W-20W'] = array(
'pid' => 'GT-DL0340W/30W/25W/20W',
'name' => 'Waterproof LED Downlight',
'discription' => 'Voltage: 100-240V  
Wattage:40W/30W/25W/20W  
Size: D235*65mm/D195*60mm/ D155*67mm
Cut-out:D160-170mm/D115-140mm           
Luminous Flux: 3400LM/2550LM/2100LM/1700LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 90°
Material: Aluminum+PC  
IP degree: IP65                                                                           
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '31.jpg
');
			$led_downlight['GT-DL0420W'] = array(
'pid' => 'GT-DL0420W',
'name' => 'LED Downlight',
'discription' => 'Voltage: 100-240V 
Wattage:20W    
Size: D135*122mm
Cut-out size: D120-125mm
Luminous Flux: 1700LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 90°
Material: Aluminum+Glass                                                                           
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '41.jpg
');
			$led_downlight['GT-DL0430W'] = array(
'pid' => 'GT-DL0430W',
'name' => 'LED Downlight',
'discription' => 'Voltage: 100-240V 
Wattage:30W    
Size: D135*122mm
Cut-out size: D120-125mm
Luminous Flux: 2550LM
Color Temperature: 2700-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 90°
Material: Aluminum+Glass                                                                           
Warranty: 2/3 years
',
'application' => 'LED Downlight is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '41.jpg
');
         $this -> catalog['led-downlight']['products'] = $led_downlight;


         //add grid light
         $led_grid_light = array();
         $led_grid_light['GT-GILCG10W'] = array(
'pid' => 'GT-GILCG10W',
'name' => 'LED Gimbal Down Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:10W    
Size: Dia88XH76mm 
Cut-out size: 75mm. 
Luminous Flux: 900LM-1200LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 15°/24°/36°
Material: PC/Aluminum alloy                                                                               
Warranty: 2/3 years
',
'application' => 'LED Gimbal Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '1.jpg
');
$led_grid_light['GT-GILRG10W'] = array(
'pid' => 'GT-GILRG10W',
'name' => 'LED Gimbal Down Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:10W    
Size: L92xW92xH76mm    
Cut-out size: 75mm. 
Luminous Flux: 900LM-1200LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 15°/24°/36°
Material: PC/Aluminum alloy                                                                               
Warranty: 2/3 years
',
'application' => 'LED Gimbal Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '11.jpg
');
$led_grid_light['GT-GILRG2x10W'] = array(
'pid' => 'GT-GILRG2x10W',
'name' => 'LED Gimbal Down Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:20W    
Size: L172xW92xH76mm 
Cut-out size: L156xW76mm. 
Luminous Flux: 1800LM-2200LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 15°/24°/36°
Material: PC/Aluminum alloy                                                                               
Warranty: 2/3 years
',
'application' => 'LED Gimbal Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '12.jpg
');
$led_grid_light['GT-GILRG3x10W'] = array(
'pid' => 'GT-GILRG3x10W',
'name' => 'LED Gimbal Down Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:30W    
Size: L1252xW92xH76mm 
Cut-out size: L236xW76mm. 
Luminous Flux: 2700LM-3300LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 15°/24°/36°
Material: PC/Aluminum alloy                                                                               
Warranty: 2/3 years
',
'application' => 'LED Gimbal Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel , coffee shop, exhibition hall, etc.
',
'img' => '13.jpg
');
$led_grid_light['GT-GILC30W'] = array(
'pid' => 'GT-GILC30W',
'name' => 'LED Circle Down Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:30W    
Size: Dia180xH160mm    
Cut-out size: Dia160mm.  
Luminous Flux: 2700LM-3300LM
Color Temperature: 2700-6500K
LED chip: CREE/Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum alloy                                                                               
Warranty: 3 years
',
'application' => 'LED Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel, coffee shop, exhibition hall, etc.
',
'img' => '20.jpg
');
$led_grid_light['GT-GILR30W'] = array(
'pid' => 'GT-GILR30W',
'name' => 'LED Rectangular Down Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:30W    
Size: L180xW180xH160mm    
Cut-out size: Dia160x160mm. 
Luminous Flux: 2700LM-3300LM
Color Temperature: 2700-6500K
LED chip: CREE/Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum alloy                                                                               
Warranty: 3 years
',
'application' => 'LED Grid Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel, coffee shop, exhibition hall, etc.
',
'img' => '21.jpg
');
$led_grid_light['GT-GILR2X30W'] = array(
'pid' => 'GT-GILR2X30W',
'name' => 'Two-Head LED Grid Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:60W    
Size: L330xW180xH160mm    
Cut-out size: Dia310x160mm. 
Luminous Flux: 5100LM-6600LM
Color Temperature: 2700-6500K
LED chip: CREE/Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum alloy                                                                               
Warranty: 3 years
',
'application' => 'LED Grid Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel, coffee shop, exhibition hall, etc.
',
'img' => '22.jpg
');
$led_grid_light['GT-GILR3X30W'] = array(
'pid' => 'GT-GILR3X30W',
'name' => 'Three-Head LED Grid Light',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:90W    
Size: L480xW180xH160mm    
Cut-out size: Dia460x160mm. 
Luminous Flux: 7650LM-9900LM
Color Temperature: 2700-6500K
LED chip: CREE/Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum alloy                                                                               
Warranty: 3 years
',
'application' => 'LED Grid Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel, coffee shop, exhibition hall, etc.
',
'img' => '23.jpg
');
$led_grid_light['GT-GILR20W'] = array(
'pid' => 'GT-GILR20W',
'name' => 'LED Rectangular Down Light',
'discription' => 'Voltage: 100-240V/80-265V   
Wattage:20W    
Size: L155xW155xH100mm    
Cut-out size: 140x140mm. 
Luminous Flux: 1600LM-2000LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum                                                                               
Warranty: 2 years
',
'application' => 'LED Grid Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel, coffee shop, exhibition hall, etc.
',
'img' => '31.jpg
');
$led_grid_light['GT-GILR2X20W'] = array(
'pid' => 'GT-GILR2X20W',
'name' => 'LED Rectangular Down Light',
'discription' => 'Voltage: 100-240V/80-265V   
Wattage:40W    
Size: L285xW155xH100mm    
Cut-out size: 270x140mm. 
Luminous Flux: 3200LM-4000LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum                                                                               
Warranty: 2 years
',
'application' => 'LED Grid Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel, coffee shop, exhibition hall, etc.
',
'img' => '32.jpg
');
$led_grid_light['GT-GILR3X20W'] = array(
'pid' => 'GT-GILR3X20W',
'name' => 'LED Rectangular Down Light',
'discription' => 'Voltage: 100-240V/80-265V   
Wattage:60W    
Size: L405xW155xH100mm    
Cut-out size: 390x140mm. 
Luminous Flux: 4800LM-6000LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum                                                                               
Warranty: 2 years
',
'application' => 'LED Grid Down Light is mainly used in clothing store, specialty store, furniture store, stage, hotel, coffee shop, exhibition hall, etc.
',
'img' => '33.jpg
');
$led_grid_light['GT-LE30W-35W-40W'] = array(
'pid' => 'GT-LE30W/35W/40W',
'name' => 'LED Engine',
'discription' => '100-240V/80-265V   
Wattage:30W/35W/40W   
Size: Dia111xH85/ H100/H120mm    
Luminous Flux: 3000/3500/4000LM
Color Temperature: 2700-6500K
LED chip: Epistar COB
CRI: ≥80
Beam angle: 45°/60°
Material: Aluminum                                                                               
Warranty: 3 years
',
'application' => 'LED Engine is mainly used for LED grid light, down light and for replacing  the old light source,etc.
',
'img' => '40w.jpg
');  
         $this -> catalog['led-grid-light']['products'] = $led_grid_light;

         //add spotlight
         $led_spotlight = array();
         $led_spotlight['GT-AR111AA'] = array(
'pid' => 'GT-AR111AA',
'name' => 'AR111 LED Spotlight',
'discription' => 'Voltage: AC/DC12V   
Wattage:12W    
Size: Dia111xH55mm 
Luminous Flux: 1050LM
Color Temperature: 2700-6500K
LED chip: CREE COB
CRI: ≥80
Beam angle: 10°/24°
Material: 0603 aluminum 
Base: G53                                                                                   
Warranty: 3 years
',
'application' => 'AR111 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '1.jpg
');
$led_spotlight['GT-AR111A'] = array(
'pid' => 'GT-AR111A',
'name' => 'AR111 LED Spotlight',
'discription' => 'Voltage: AC/DC12V   
Wattage:12W
Size: Dia111xH55mm     
Luminous Flux: 1050LM
Color Temperature: 2700-6500K
LED chip: CREE COB
CRI: ≥80
Beam angle: 10°/24°
Material: 6063 aluminum 
Base: G53                                                                                  
Warranty: 3 years
',
'application' => 'AR111 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '2.jpg
');
$led_spotlight['GT-AR80AA'] = array(
'pid' => 'GT-AR80AA',
'name' => 'AR80 LED Spotlight',
'discription' => 'Voltage: AC/DC12V   
Wattage: 8W
Size: Dia80xH55mm 
Luminous Flux: 750LM
Color Temperature: 2700-6500K
LED chip: CREE COB
CRI: ≥80
Beam angle: 24°/38°/60°
Material: 6063 aluminum 
Base: G53                                                                                  
Warranty: 3 years
',
'application' => 'AR80 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '3.jpg
');
$led_spotlight['GT-PAR38AA'] = array(
'pid' => 'GT-PAR38AA',
'name' => 'PAR38 LED Spotlight',
'discription' => 'Voltage: AC100-240V     
Wattage: 23W
Size: Dia124xH132mm  
Luminous Flux: 2000LM
Color Temperature: 2700-6500K
LED chip: CREE COB
CRI: ≥80
Beam angle: 10°/24°
Material: 6063 aluminum 
Base: E27/E26                                                                                  
Warranty: 3 years
',
'application' => 'PAR38 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '4.jpg
');
$led_spotlight['GT-PAR30AA'] = array(
'pid' => 'GT-PAR30AA',
'name' => 'PAR30 LED Spotlight',
'discription' => 'Voltage: AC100-240V     
Wattage: 16W
Size: Dia95xH116mm  
Luminous Flux: 1450LM
Color Temperature: 2700-6500K
LED chip: CREE COB
CRI: ≥80
Beam angle: 10°/24°
Material: 6063 aluminum 
Base: E27/E26                                                                                  
Warranty: 3 years
',
'application' => 'PAR30 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '5.jpg
');
$led_spotlight['GT-PAR20AA'] = array(
'pid' => 'GT-PAR20AA',
'name' => 'PAR20 LED Spotlight',
'discription' => 'Voltage: AC100-240V     
Wattage: 8W
Size: Dia64xH78mm  
Luminous Flux: 720LM
Color Temperature: 2700-6500K
LED chip: CREE COB
CRI: ≥80
Beam angle: 24°/38°/60°
Material: 6063 aluminum 
Base: E27/E26                                                                                  
Warranty: 3 years
',
'application' => 'PAR20 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '6.jpg
');
$led_spotlight['GT-PAR20AD'] = array(
'pid' => 'GT-PAR20AD',
'name' => 'PAR20 LED Spotlight',
'discription' => 'Voltage: AC100-240V     
Wattage: 8W
Size: Dia64xH78mm  
Luminous Flux: 720LM
Color Temperature: 2700-6500K
LED chip: CREE COB
CRI: ≥80
Beam angle: 24°/38°/60°
Material: 6063 aluminum 
Base: E27/E26                                                                                  
Warranty: 3 years
',
'application' => 'PAR20 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '7.jpg
');
$led_spotlight['GT-MR16AA'] = array(
'pid' => 'GT-MR16AA',
'name' => '5W MR16 LED Spotlight',
'discription' => 'Voltage: AC/DC12V     
Wattage: 5W  
Size: Dia50XH55mm  
Luminous Flux: 450LM
Color Temperature: 2700-6500K 
LED chip: CREE COB
CRI: ≥80
Beam angle: 30°/45°
Material: 6063 aluminum 
Base: G5.3/GU10                                                                                 
Warranty: 3 years
',
'application' => 'MR16 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '8.jpg
');
$led_spotlight['GT-MR16A10W'] = array(
'pid' => 'GT-MR16A10W',
'name' => '10W MR16 LED Spotlight',
'discription' => 'Voltage: 85-265V     
Wattage: 10W
Size: Dia50XH76mm/H78mm/H84mm  
Luminous Flux: 900LM
Color Temperature: 2700-6500K 
LED chip:  Epistar COB
CRI: ≥80
Beam angle: 30°/45°
Material: 6063 aluminum 
Base: G5.3/GU10/E27                                                                                
Warranty: 2 years
',
'application' => 'MR16 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '9.jpg
');
$led_spotlight['GT-MR16A8W'] = array(
'pid' => 'GT-MR16A8W',
'name' => '8W MR16 LED Spotlight',
'discription' => 'Voltage: 85-265V     
Wattage: 8W
Size:Dia50XH66mm/H68mm/H74mm
Luminous Flux: 700LM
Color Temperature: 2700-6500K 
LED chip:  Epistar COB
CRI: ≥80
Beam angle: 30°/45°
Material: 6063 aluminum 
Base: G5.3/GU10/E27                                                                                
Warranty: 2 years
',
'application' => 'MR16 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '10.jpg
');
$led_spotlight['GT-MR16A6W'] = array(
'pid' => 'GT-MR16A6W',
'name' => '6W MR16 LED Spotlight',
'discription' => 'Voltage: 100-240V     
Wattage: 5W
Size:Dia50XH55mm
Luminous Flux: 450LM
Color Temperature: 2700-6500K 
LED chip:  Epistar COB
CRI: ≥80
Beam angle: 30°/45°
Material: 6063 aluminum 
Base: G5.3/GU10/E27                                                                                
Warranty: 2 years
',
'application' => 'MR16 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '11.jpg
');
$led_spotlight['GT-MR16AO5W'] = array(
'pid' => 'GT-MR16AO5W',
'name' => 'MR16 LED Spotlight',
'discription' => 'Voltage: 100-240V     
Wattage: 5W
Size:Dia50XH55mm
Luminous Flux: 450LM
Color Temperature: 2700-6500K 
LED chip:  Epistar COB
CRI: ≥80
Beam angle: 30°/45°
Material: 6063 aluminum 
Base: G5.3/GU10/E27                                                                                
Warranty: 2 years
',
'application' => 'MR16 LED Spotlight can be used for commercial lighting, hotel lighting, domestic lighting, etc.
',
'img' => '12.jpg
');  
         $this -> catalog['led-spotlight']['products'] = $led_spotlight;

         //add tube
         $led_tube = array();
$led_tube['GT-TUT5120CM'] = array(
'pid' => 'GT-TUT5120CM',
'name' => 'T5 Seamless LED Tube',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:14W-18W
Length: 120cm 
Luminous Flux: 1350-1800LM
Color Temperature: 2700-6500K
LED chip: Epistar SMD2835  
CRI: 80
Beam angle:≥120°
Material: Aluminum+PC                                                                                   
Warranty: 3 years/ 2 years.
',
'application' => 'T5 seamless LED tubes can be seamless connected one by one, and there is no darkness between each two tubes. It usually be used for commercial lighting, decorative lighting.
',
'img' => '1.jpg
');
$led_tube['GT-TUT5100CM'] = array(
'pid' => 'GT-TUT5100CM',
'name' => 'T5 seamless LED tube',
'discription' => 'Voltage: 100-240V/80-265V  
Wattage:  12W-15W  
Length: 100cm
Luminous Flux: 1050-1200LM
Color Temperature: 2700-6500K 
LED chip: Epistar SMD2835  
CRI: 80
Beam angle:≥120°
Material: Aluminum+PC                                                                                   
Warranty: 3 years/ 2 years.
',
'application' => 'T5 seamless LED tubes can be seamless connected one by one, and there is no darkness between each two tubes. It usually be used for commercial lighting, decorative lighting.
',
'img' => '1.jpg
');
$led_tube['GT-TUT560CM'] = array(
'pid' => 'GT-TUT560CM',
'name' => 'T5 seamless LED tube',
'discription' => 'Voltage: 100-240 V/80-265V  
Wattage: 7-9W 
Length: 60cm 
Luminous Flux: 650-700LM
Color Temperature: 2700-6500K
LED chip: Epistar SMD2835  
CRI: 80
Beam angle:≥120°
Material: Aluminum+PC                                                                                  
Warranty: 3 years/ 2 years.
',
'application' => 'T5 seamless LED tubes can be seamless connected one by one, and there is no darkness between each two tubes. It usually be used for commercial lighting, decorative lighting.
',
'img' => '2.jpg
');
$led_tube['GT-TUT590CM'] = array(
'pid' => 'GT-TUT590CM',
'name' => 'T5 seamless LED tube',
'discription' => 'Voltage: 100-240 V/80-265V  
Wattage: 10W-13W 
Length: 90cm 
Luminous Flux: 900-1000LM
Color Temperature: 2700-6500K
LED chip: Epistar SMD2835  
CRI: 80
Beam angle:≥120°
Material: Aluminum+PC                                                                                  
Warranty: 3 years/ 2 years.
',
'application' => 'T5 seamless LED tubes can be seamless connected one by one, and there is no darkness between each two tubes. It usually be used for commercial lighting, decorative lighting.
',
'img' => '3.jpg
');
$led_tube['GT-T8120018'] = array(
'pid' => 'GT-T8120018',
'name' => '18W T8 LED tube',
'discription' => 'Voltage: 100-240V         
Wattage: 18W 
Length:120cm
Luminous Flux: 1800LM
Color Temperature: 2700-6500K
LED chip:  Epistar SMD2835 
CRI: 80
Beam angle:≥120°
Material: Aluminum+PC                                                                                 
Warranty: 3 years/ 2 years.
',
'application' => 'T8 LED tubes can be used for indoor lighting, and outdoor lighting with housings.
',
'img' => '5.jpg
');
$led_tube['GT-T8120025'] = array(
'pid' => 'GT-T8120025',
'name' => '25W T8 LED tube',
'discription' => 'Voltage: 100-240V         
Wattage: 25W 
Length: 120cm 
Luminous Flux: 2600LM
Color Temperature: 2700-6500K
LED chip:  Epistar SMD2835 
CRI: 80
Beam angle:≥120°
Material: Aluminum+PC                                                                                  
Warranty: 3 years/ 2 years.
',
'application' => 'T8 LED tubes can be used for indoor lighting, and outdoor lighting with housings.
',
'img' => '5.jpg
');
$led_tube['GT-T860012'] = array(
'pid' => 'GT-T860012',
'name' => '12W T8 LED tube',
'discription' => 'Voltage: 100-240V          
Wattage: 12W  
Length:  60cm 
Luminous Flux: 1200LM
Color Temperature: 2700-6500K  
LED chip:  Epistar SMD2835 
CRI: 80
Beam angle:≥120°                       
Material: Aluminum+PC                                                                                
Warranty: 3 years/ 2 years.
',
'application' => 'T8 LED tubes can be used for indoor lighting, and outdoor lighting with housings.
',
'img' => '5.jpg
');
$led_tube['GT-T890016'] = array(
'pid' => 'GT-T890016',
'name' => '16W T8 LED tube',
'discription' => 'Voltage: 100-240V          
Wattage: 16W   
Length:  90cm
Luminous Flux: 1550LM
Color Temperature: 2700-6500K  
LED chip:  Epistar SMD2835 
CRI: 80
Beam angle:≥120°                       
Material: Aluminum+PC                                                                                
Warranty: 3 years/ 2 years.
',
'application' => 'T8 LED tubes can be used for indoor lighting, and outdoor lighting with housings.
',
'img' => '5.jpg
');
         $this -> catalog['led-tube']['products'] = $led_tube;

         //add track light
         $led_track_light = array();
$led_track_light['GT-TL01-15W-25W-35W'] = array(
'pid' => 'GT-TL01-15W/25W/35W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage:15W/ 25W/35W    
Dimension: 15W,L200xW85xH225mm
           25W,L216xW95xH235mm
           35W,L258xW110xH255mm
Luminous Flux: 1200LM /2100LM/2900LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 10°~70°
Material: Aluminum+PMMA                                                                              
Warranty: 2/3 years
',
'application' => 'This LED Track Light is used for museum, etc.
',
'img' => '1.jpg
');
$led_track_light['GT-TL02-15W-25W-35W'] = array(
'pid' => 'GT-TL02-15W/25W/35W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage:15W/ 25W/35W    
Dimension: 15W,L200xW85xH225mm
           25W,L216xW95xH235mm
           35W,L258xW110xH255mm
Luminous Flux: 1200LM /2100LM/2900LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 12° /24° /36°
Material: Aluminum+PMMA                                                                              
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '2.jpg
');
$led_track_light['GT-TL03-15W-30W'] = array(
'pid' => 'GT-TL03-15W/30W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage:15W/ 30W    
Dimension: 15W, H163x95x98mm
           30W, H203x106x115mm
Luminous Flux: 1200LM /2550LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 10° /23° /38°
Material: Aluminum+PMMA                                                                              
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '31.jpg
');
$led_track_light['GT-TL04-25W-30W'] = array(
'pid' => 'GT-TL04-25W-30W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage:25W/ 30W    
Dimension: 25W, H207x95x98mm
           30W, H270x106x115mm
Luminous Flux: 2100LM /2550LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 24° /36°
Material: Aluminum+PMMA                                                                              
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '41.jpg
');
$led_track_light['GT-TL05-15W-30W-45W'] = array(
'pid' => 'GT-TL05-15W/30W/45W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage:15W /30W/45W    
Dimension: 15W, H196x125x135mm
           30W, H240x145x159mm
           45W, H260x164x195mm
Luminous Flux: 1200LM /2550LM/3800LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 24° /36°
Material: Aluminum+PMMA                                                                              
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '51.jpg
');
$led_track_light['GT-TL06-25W-30W'] = array(
'pid' => 'GT-TL06-25W/30W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage:25W /30W   
Dimension: 25W, H242x210x100mm
           30W, H242x210x100mm
Luminous Flux: 2100LM /2550LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 24° /38°
Material: Aluminum+PMMA                                                                              
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '61.jpg
');
$led_track_light['GT-TL07-15W-25W-35W'] = array(
'pid' => 'GT-TL07-15W/25W/35W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage: 15W/ 25W/35W   
Dimension: 15W, Dia50x85mm
 25W, Dia95x100mm
              35W, Dia95x135mm
Luminous Flux: 1200LM/ 2100LM /2900LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 15° /20°/30°/60°
Material: Aluminum+PC                                                                             
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '73.jpg
');
$led_track_light['GT-TL08-30W-35W'] = array(
'pid' => 'GT-TL08-30W/35W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage: 30W/35W   
Dimension: 30W, H225x220X90mm
           35W, H225x220X90mm
Luminous Flux: 2550LM/ 2900LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 24°/38°
Material: Aluminum+PC                                                                             
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '81.jpg
');
$led_track_light['GT-TL09-15W-30W-45W'] = array(
'pid' => 'GT-TL09-15W/30W/45W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage: 15W/30W/45W     
Dimension: 15W, D70x122mm
30W, D90x157mm
              35W, D110x195mm
Luminous Flux: 1200LM /2550LM/3800LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 10°/23°/36°
Material: Aluminum+PMMA                                                                             
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '92.jpg
');
$led_track_light['GT-TL10-25W-35W'] = array(
'pid' => 'GT-TL10-25W/35W',
'name' => 'LED Track Light',
'discription' => 'Voltage: 100-240V  
Wattage: 25W/35W     
Dimension: 25W, D100x130mm
           35W, D100x160mm
Luminous Flux: 2100LM /2900LM
Color Temperature: 2800K-6500K
LED chip: Philips/Citizen COB
CRI: ≥80
Beam angle: 12°/24°/36°/60°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Track Light is mainly used in shopping mall, specialty store, jewelry store, hotel, ect.
',
'img' => '101.jpg
');
         $this -> catalog['led-track-light']['products'] = $led_track_light;

         //add panel light
         $led_panel_light = array();
$led_panel_light['GT-PL303001'] = array(
'pid' => 'GT-PL303001',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:18W    
Dimension: W295*295*10mm
Luminous Flux: 1600LM
Color Temperature: 2800K-6500K
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '11.jpg
');
$led_panel_light['GT-PL306001'] = array(
'pid' => 'GT-PL306001',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:25W    
Dimension: W295*595*10mm
Luminous Flux: 2250LM
Color Temperature: 2800K-6500K
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '21.jpg
');
$led_panel_light['GT-PL3012001'] = array(
'pid' => 'GT-PL3012001',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:40W    
Dimension: W295*1195*10mm
Luminous Flux: 3600LM
Color Temperature: 2800K-6500K
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '21.jpg
');
$led_panel_light['GT-PL606001'] = array(
'pid' => 'GT-PL606001',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:40W    
Dimension: W595*595*10mm
Luminous Flux: 3600LM
Color Temperature: 2800K-6500K
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '11.jpg
');
$led_panel_light['GT-PL6012001'] = array(
'pid' => 'GT-PL6012001',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:70W    
Dimension: W595*1195*10mm
Luminous Flux: 6300LM
Color Temperature: 2800K-6500K
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '21.jpg
');
$led_panel_light['GT-PL606002'] = array(
'pid' => 'GT-PL606002',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:40W    
Dimension: W595*595*10mm
Luminous Flux: 3600LM
Color Temperature: 2800K-6500K
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '31.jpg
');
$led_panel_light['GT-PL3012002'] = array(
'pid' => 'GT-PL3012002',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:40W    
Dimension: W295*1195*10mm
Luminous Flux: 3600LM
Color Temperature: 2800K-6500K
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '41.jpg
');
$led_panel_light['GT-PL606003'] = array(
'pid' => 'GT-PL606003',
'name' => 'LED Panel Light',
'discription' => 'Voltage: 100-240V  
Wattage:36W/54W   
Dimension: W595*595*10mm
Luminous Flux: 3600LM/4800LM
Color Temperature: RGB+W
LED chip: Philips/Epistar SMD LED
CRI: ≥80
Beam angle: 120°
Material: Aluminum+PC                                                                            
Warranty: 2/3 years
',
'application' => 'LED Panel Light is used for classroom, office, exhibition center, market, shops and  kitchen,etc.
',
'img' => '51.jpg
');
         $this -> catalog['led-panel-light']['products'] = $led_panel_light;

         //add strip
         $led_strip = array();
$led_strip['GT-5050-30-60-120'] = array(
'pid' => 'GT-5050-30/60/120',
'name' => 'SMD5050 LED Flexible Strip Light',
'discription' => 'Color available: white, red, green, blue, rgb.
IP degree available: IP20, IP65, IP67, IP68.
Voltage: DC12V/DC24V/AC100-240V 
LED chip: SMD5050
Luminous flux: 14-24LM per LED
LED quantity: 30LEDs/m, 60LEDs/m, 120LEDs/m
Warranty: 2/3years
',
'application' => 'LED Flexible Strip Light is mainly used for bar, KTV, shopping mall, home, hotel, meseum, showing room, building decoration, etc.
',
'img' => '1.jpg
');
$led_strip['GT-3528-30-60-120-240'] = array(
'pid' => 'GT-3528-30/60/120/240',
'name' => 'SMD3528 LED Flexible Strip Light',
'discription' => 'Color available: white, red, green, blue, rgb.
IP degree available: IP20, IP65, IP67, IP68.
Voltage: DC12V/DC24V/AC100-240V
LED chip: SMD3528
Luminous flux: 3-8LM per LED
LED quantity: 30LEDs/m, 60LEDs/m, 120LEDs/m, 240LEDs/m
Warranty: 2-3years
',
'application' => 'LED Flexible Strip Light is mainly used for bar, KTV, shopping mall, home, hotel, meseum, showing room, building decoration, etc.
',
'img' => '2.jpg
');
$led_strip['GT-5630-60-120'] = array(
'pid' => 'GT-5630-60/120',
'name' => 'SMD5630 LED Flexible Strip Light',
'discription' => 'Color available: white,warm white
IP degree available: IP20, IP65, IP67, IP68.
Voltage: DC12V/DC24V/AC100-240V 
LED chip: SMD5630
Luminous flux: 35-55LM per LED
LED quantity: 60LEDs/m, 120LEDs/m
Warranty: 2/3years
',
'application' => 'LED Flexible Strip Light is mainly used for bar, KTV, shopping mall, home, hotel, meseum, showing room, building decoration, etc.
',
'img' => '3.png
');
$led_strip['GT-2835-60-120'] = array(
'pid' => 'GT-2835-60/120',
'name' => 'SMD2835 LED Flexible Strip Light',
'discription' => 'Color available: white,warm white
IP degree available: IP20, IP65, IP67, IP68.
Voltage: DC12V/DC24V/AC100-240V 
LED chip: SMD2835
Luminous flux: 18-26LM per LED
LED quantity: 60LEDs/m, 120LEDs/m
Warranty: 2/3years
',
'application' => 'LED Flexible Strip Light is mainly used for bar, KTV, shopping mall, home, hotel, meseum, showing room, building decoration, etc.
',
'img' => '4.png
');
         $this -> catalog['led-strip']['products'] = $led_strip;

         //add flood light
         $led_flood_light = array();
$led_flood_light['GT-FL200W1'] = array(
'pid' => 'GT-FL200W1',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage:200W    
Dimension: L360*W470*H60mm
Luminous Flux: 20000LM
Color Temperature: 2700-6500K
LED chip: 240pcs Osram/Philips3030
CRI: ≥80
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
',
'application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '11.jpg
');
$led_flood_light['GT-FL150W1'] = array(
'pid' => 'GT-FL150W1',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage:150W    
Dimension: L330*W430*H60mm
Luminous Flux: 15000LM
Color Temperature: 2700-6500K
LED chip: 150pcs Osram/Philips3030
CRI: ≥80
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
',
'application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '12.jpg
');
$led_flood_light['GT-FL100W1'] = array(
'pid' => 'GT-FL100W1',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage:100W    
Dimension: L295*W402*H60mm
Luminous Flux: 10000LM
Color Temperature: 2700-6500K
LED chip: 100pcs Osram/Philips3030
CRI: ≥80
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
',
'application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '13.jpg
');
$led_flood_light['GT-FL80W1'] = array(
'pid' => 'GT-FL80W1',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage:80W    
Dimension: L245*W354*H55mm
Luminous Flux: 8000LM
Color Temperature: 2700-6500K
LED chip: 80pcs Osram/Philips3030
CRI: ≥80
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
',
'application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '14.jpg
');
$led_flood_light['GT-FL200W3'] = array(
'pid' => 'GT-FL200W3',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage:200W    
Dimension: L400*W340*H121mm
Luminous Flux: 19000LM
Color Temperature: 2700-6500K
LED chip: Bridgeluxflip-chip /ETI LED flip-chip       
CRI: ≥75
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
',
'application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '21.jpg
');
$led_flood_light['GT-FL150W3'] = array(
'pid' => 'GT-FL150W3',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage:150W    
Dimension: L375*W310*H121mm
Luminous Flux: 14000LM
Color Temperature: 2700-6500K
LED chip: Bridgeluxflip-chip /ETI LED flip-chip       
CRI: ≥75
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
','application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '22.jpg
');
$led_flood_light['GT-FL120W3'] = array(
'pid' => 'GT-FL120W3',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage:120W    
Dimension: L310*W315*H121mm
Luminous Flux: 11400LM
Color Temperature: 2700-6500K
LED chip: Bridgeluxflip-chip /ETI LED flip-chip       
CRI: ≥75
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
',
'application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '23.jpg
');
$led_flood_light['GT-FL100W3-10W3'] = array(
'pid' => 'GT-FL100W3-10W3',
'name' => 'LED Flood Light',
'discription' => 'Voltage: AC85-265V
Wattage: 100W70W/50W/30W/20W/10W    
Dimension: L310*W240*H120mm/ L291*W250*H116mm 
      L253*W194*H95mm/L225*W178*H67mm
      L201*W166*H67mm/ L179*W133*H57mm
Luminous Flux: 9500/6600/4750/2850/1900/950LM
Color Temperature: 2700-6500K
LED chip: Bridgeluxflip-chip /ETI LED flip-chip       
CRI: ≥75
Beam angle: 120°
Material: Aluminum+Glass 
IP degree: IP65                                                                          
Warranty: 3/5 years
',
'application' => 'LED Flood Light is mainly used decoration and highlight in building frame, it can be widely used for commercial buildings, outdoor plazas, museum, gymnasium, art galleries, buildings façade, mosques and historical buildings, etc.
',
'img' => '25.jpg
');
         $this -> catalog['led-flood-light']['products'] = $led_flood_light;

   //function end      
	}
		public function getCatalog(){
			return $this -> catalog;
		}
		public function getCatagory($catagory_key){
			return $this -> catalog[$catagory_key];
		}
		public function getProduct($catagory_key,$product_key){
         $catagory = $this -> catalog[$catagory_key];
			$products = $catagory['products'];
			return $products[$product_key];
		}
	}
}