<?php 
    define('TITLE', 'Goldelox');
    include('header-2.php');

    $product = array(
        
        // Product Title
        'title'         =>  'goldelox',

        // Product Name
        'name'          =>  'Goldelox Graphics Processor',

        // Carousel Images
        'carousel-img'  => array('goldelox-2', 'goldelox-3'),

        // Product Highlights
        'highlights'    =>  array(
                                'The <strong>GOLDELOX</strong> is a custom embedded graphics controller designed to interface with many popular <strong>OLED</strong> and <strong>LCD</strong> display panels. Powerful graphics, text, image, animation and countless more features are built right inside the chip. It offers a simple plug-n-play interface to many <strong>8bit 80-Series colour LCD and OLED displays</strong>.',

                                'The internal architecture of the GOLDELOX is constructed of high level functional blocks that are controlled and supervised by <strong>EVE (Extensible Virtual Engine)</strong>.',

                                'The combined blocks of <strong>EVE</strong>, the built-in graphics and system functions and the low level drivers make up and define the personality of the <strong>GOLDELOX</strong> Processor (analogy to that of a soft silicon). This is referred to as the Personality-module-micro-Code or PmmC (Firmware in general) for short.',
                            ),

        // Prduct Description
        'description'   =>  array(
                                'The Goldelox processor is a custom embedded graphics controller designed to interface with many popular OLED and LCD display panels. Powerful graphics, text, image, animation and countless more features are built right inside the chip. It offers a simple plug-n-play interface to many 8bit 80-Series colour LCD and OLED displays.',

                                'The chip is designed to work with minimal design effort and all of the data and control signals are provided by the chip to interface directly to the display. Simply choose your display and interface it to the Goldelox on your application board. This offers enormous advantage to the designer in development time and cost saving and takes away all of the burden of low level design.',

                                'The Goldelox belongs to a family of processors powered by a highly optimised soft core virtual engine, E.V.E. (Extensible Virtual Engine). EVE is a proprietary, high performance virtual processor with an extensive byte-code instruction set optimised to execute compiled 4DGL programs. 4DGL (4D Graphics Language) was specifically developed from ground up for the EVE engine core. It is a high level language which is easy to learn and simple to understand yet powerful enough to tackle many embedded graphics applications.',

                                'The device offers modest but comprehensive I/O features and can interface to SPI, serial, analogue, digital, buttons, joystick and Dallas 1-wire devices. Provision is also made for creating complex sound effects for audible user feedback with an extended RTTTL tone generator.',

                                'A basic system font is included, and unlimited customisable fonts with fixed or proportional spacing can be created using the Workshop4 IDE. The chip-resident display driver libraries implement and share the same high-level functional interface. This allows your GUI application to be portable to different display controller types.',

                                'The 4D Workshop4 IDE is FREE and there is no licensing requirement.'
                            ),

        // Product Specs
        'specs'         =>  array(
                                'Low-cost OLED, LCD and TFT display graphics user interface solution.',

                                'Ideal as a standalone embedded graphics processor or interface to any host controller as a graphics co-processor.',

                                'Connect to any colour display that supports an 80-Series 8 bit wide CPU interface. All data and control signals are provided.',

                                'Built in high performance virtual processor engine (EVE) with an extensive byte-code instruction set optimised for 4DGL, the high level 4D Graphics Language.',
                                
                                '10K bytes of flash memory for user code storage and 510 bytes (255 x 16bit vars) of RAM for user variables.',
                                
                                'Asynchronous hardware Serial port with auto-baud feature (300 to 256K baud).',
                                
                                'Hardware SPI port interface for SD memory cards or Serial Flash memory chips for storing of icons, images, animations, etc.',
                                
                                '1 x 32bit free running system timer with 1msec resolution and 4 x 16bit user timers with 1msec resolution',
                            ),
        'specs-1'       =>  array(
                                'Display full colour images, animations, icons and video clips.',
                                
                                'Comprehensive set of built in high level 4DGL graphics functions and algorithms that can draw lines, circles, text, and much more.',
                                
                                '8x8 built-in system font and support for unlimited user customisable fonts with fixed or proportional spacing with the aid of a freely provided Font-Tool.',
                                
                                'Single 3.3 Volt Supply @12mA typical.',
                                
                                'RoHS Compliant',

                            ),
        // Additional Specs
        
        'specs-2'     =>  array(
                            '2 x GPIO ports supports:' => array(
                                                                'Digital I/O',
                                                                'A/D converter with 8/10 bit resolution',
                                                                'Complex sound generation',
                                                                'Dedicated RTTTL tune engine',
                                                                'Multi-Switch Joystick',
                                                                'Dallas 1-Wire'
                                                            ),
                            ),
        // Downloads
        'downloads'     =>  array(
                            'Processor Documentation'   =>  array(
                                                                'names'  =>  array('Goldelox Datasheet','Goldelox Package Details'),
                                                                'srcs'   =>  array('http://4dlabs.com.au/4DLS-DS-GOLDELOX.html','http://4dlabs.com.au/4DLS-PD-GOLDELOX.html'),
                                                                'rev'    =>  array('Rev. 2.0','Rev. 1.0'),
                                                                'size'   =>  array('2.04 MB','550 kB'),
                                                                'icon'   =>  array('pdf','pdf')
                                                            ),

                            'Development Resources'     =>  array(
                                                                'names'  =>  array('4D Workshop4 IDE','Workshop4 IDE User Guide','Workshop4 IDE Installation Guide','ViSi User Guide'),
                                                                'srcs'   =>  array('http://4dlabs.com.au/Workshop4-IDE-Installer.html','http://4dlabs.com.au/Workshop4-IDE-User-Guide.html','http://4dlabs.com.au/Workshop4-IDE-Installation-Guide.html','http://4dlabs.com.au/ViSi-User-Guide.html'),
                                                                'rev'    =>  array('Rev. 4.4.0.9','Rev. 2.0','Rev. 2.0','Rev. 2.0'),
                                                                'size'    =>  array('87.31 MB','3.23 MB','1.08 MB','3.82 MB'),
                                                                'icon'   =>  array('exe','pdf','pdf','pdf')

                                                            ),
                            'Reference Manuals'         =>  array(
                                                                'names'  =>  array("4DGL Programmer's Reference Manual","Goldelox Internal Functions Reference Manual","Goldelox Serial Command Set Reference Manual"),
                                                                'srcs'   =>  array("http://4dlabs.com.au/4DGL-Programmer's-Reference-Manual.html","http://4dlabs.com.au/4DLS-IF-GOLDELOX.html","http://4dlabs.com.au/4DLS-SC-GOLDELOX.html"),
                                                                'rev'    =>  array('Rev. 6.0','Rev. 7.0','Rev. 2.0'),
                                                                'size'    =>  array('1.71 MB','3.17 MB','2.26 MB'),
                                                                'icon'   =>  array('pdf','pdf','pdf')
                                                                
                                                            ),

                            ),
        'download-header-icon'  =>   array('doc','dev','reference',), 
        // Product Video Source
        'video-src'     =>  'https://www.youtube.com/embed/-UTcaTWEIjw?list=PLJvG8tpO5OSV3W9lNT-5zJ57bvY5tWFTO',

        // Oder Details
        'order-details' =>  array(
                                'Part Number'           =>  '4DLS-GOLDELOX',
                                'Status'                =>  'In Production',
                                'Package Type'          =>  '28 pin QFN',
                                'Supply Voltage'        =>  '3.3 Volts @12mA typical',
                                'Clock Speed (Max)'     =>  '12 MHz',
                                'Data Processing'       =>  '16 bit',
                                'Internal Flash'        =>  '10 kB',
                                'Internal SRAM'         =>  '510 bytes',
                                'SPI Interface'         =>  1,
                                'UART Interface'        =>  1,
                                'GPIO Pins'             =>  2,
                                'Timer'                 =>  '4 x 16bit user timers with 1ms resolution',
                                'Operating Temperature' =>  '-40 to +80 ℃',
                                'Display Interface'     =>  '80-Series 8 bit wide CPU data interface',
                                'RoHS Certified'        =>  'Yes',
                            ),

        // Quotaion
        'quotation'     =>  array(
                                'Quantity'              =>      array('500+', '1000+', '2000+', '5000+', '10000+'),
                                'Unit Price'            =>      array('$6.15','$5.27','$5.15','$5.00','$4.50'),
                                'Lead Time'             =>      array('Contact Support','Contact Support','Contact Support','Contact Support','Contact Support'),
                            ),

        // Development Tools
        'dev-tools'     =>  array(
                                'title'                 =>      "Introducing 4D Labs' Workshop4 IDE",
                                'intro'                 =>      "Workshop4 delivers a comprehensive interface enriched with features for optimal software development for any user.",
                                'ws4-img'               =>      'img/ws4.jpg',
                                'description'           =>      array('Workshop4 is a comprehensive software IDE for Microsoft Windows that provides an integrated software development platform for all of the 4D family of processors and modules. The IDE combines the Editor, Compiler, Linker and Downloader to develop complete 4DGL application code. All user application code is developed within the Workshop4 IDE.','Workshop4 includes four development environments, for the user to choose based on application requirements or even user skill level.'),
                                'ws4-environments'      =>      array(
                                                                    'designer'  =>  'This environment enables the user to write 4DGL code in its natural form to program the display module',
                                                                    'viSi'      =>  'A visual programming experience that enables drag-and-drop type placement of objects to assist with 4DGL code generation and allows the user to visualize how the display will look while being developed.',
                                                                    'serial'    =>  'This environment is also provided to transform the display module into a slave serial display module, allowing the user to control the display from any host microcontroller or device with a serial port. ',
                                                                    'viSi-Genie'=>  "An advanced environment that doesn't require any 4DGL coding at all, it is all done automatically for you. Simply lay the display out with the objects you want (similar to ViSi), set the events to drive them and the code is written for you automatically. ViSi-Genie provides the latest rapid development experience from 4D Labs.",

                                                                ),

                            ),
        'reel-order'  =>  array(

                                'Reel of 1600' => 'To purchase full reel, order in multiples of 1600',

                            ),
        
                )


?>



<section class="product-wrapper">
    <article class="lab-container">
        
            <?php
                $title      =   'goldelox';
                $breads     =   array('products', $title);
                include('product-template.php');
            ?>

    </article>
</section>



<?php include('footer-3.php'); ?>