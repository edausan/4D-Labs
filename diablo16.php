<?php 
    define('TITLE', 'Diablo16');
    include('header-2.php');

    $product = array(
        
        // Product Title
        'title'         =>  'diablo16',

        // Product Name
        'name'          =>  'Diablo16 Graphics Processor',

        // Product Highlights
        'highlights'    =>  array(
                                'Low-cost OLED, LCD and TFT display graphics user interface solution.',
                                'Ideal as a standalone embedded graphics processor or interface to any host controller as a graphics co-processor.',
                                'Built in high performance virtual processor engine (EVE) with an extensive byte-code instruction set optimised for 4DGL, the high level 4D Graphics Language.',
                            ),

        // Prduct Description
        'description'   =>  array(
                                'The Diablo16 processor is a great addition to the 4D labs processor range, providing more power, more FLASH, more RAM and more features than the Picaso Processor.',

                                'The Diablo16 processor is a custom embedded 4DGL graphics controller designed to interface with many popular OLED and LCD display panels. With its powerful graphics, text, image, and animation abilities built-in, along with numerous more features makes the Diablo16 a single chip solution for a wide variety of LCD and OLED display solutions.',

                                'The Diablo16 belongs to 4D Labs family of processors powered by a highly optimised soft core virtual engine, EVE (Extensible Virtual Engine). EVE is a proprietary, high performance virtual processor with an extensive byte-code instruction set optimised to execute compiled 4DGL programs. 4DGL (4D Graphics Language) was specifically developed from ground up for the EVE engine core. It is a high level language which is easy to learn and simple to understand yet powerful enough to tackle many embedded graphics applications.',

                                'The processor offers a comprehensive set of I/O features and can interface to SPI, I2C, serial, digital, and analog devices, and provides a wealth of features such as PWM, Quadrature, PulseOut and Pin Counter functions. Provision is also made for a dedicated PWM audio output that supports audio WAV files and complex sound generation.'
                            ),

        // Product Specs
        'specs'         =>  array(
                                '6 banks of 32750 bytes of Flash memory for User Application Code and Data.',

                                '32Kb of SRAM purely for the User.',

                                '16 General Purpose I/O pins for user interfacing, which include 4 configurable Analog Inputs.',

                                'The GPIO is variously configurable for alternative functions such as:',
                                
                                '3x I2C channels available',
                                
                                '1x dedicated for SD Card and 3x configurable SPI channels available',
                                
                                '1x dedicated and 3x configurable TTL Serial comm ports available',
                                
                                'Up to 6 GPIO can be used as Pin Counters',

                                'Up to 6 GPIO for PWM (simple and Servo)',

                                'Up to 10 GPIO for Pulse Output',

                                'Up to 14 GPIO can be configured for Quadrature Encoder Inputs (2 channels)',

                                'FAT16 file services.',
                                
                                
                            ),
        'specs-1'       =>  array(
                                'Dedicated SPI interface for SDHC/SD memory card for multimedia storage and data logging purposes (micro-SD with up to 2GB and SDHC memory cards starting from 4GB and above). Cards MUST support SPI.',                                
                                
                                '4-Wire Resistive Touch panel interface.',
                                
                                'Audio support for wave files and complex sound generation with a dedicated 16-bit PWM audio output.',
                                
                                '8 x 16 bit timers with 1 millisecond resolution.',

                                'Low-cost OLED, LCD and TFT display graphics user interface solution. ',

                                'Ideal as a standalone embedded graphics processor or interface to any host controller as a graphics co-processor.',

                                'Connect to almost any colour display that supports an 80-Series 16 bit wide CPU interface. All data and control signals are provided.',

                                'RoHS compliant.',

                                'Available in a 64 pin TQFP 10mm x 10mm package.',

                            ),

        // Downloads
        'downloads'     =>  array(
                            'Processor Documentation'   =>  array(
                                                                'names'  =>  array('Diablo16 Datasheet','Diablo16 Package Details'),
                                                                'srcs'   =>  array('http://4dlabs.com.au/4DLS-DS-DIABLO16.html','http://4dlabs.com.au/4DLS-PD-DIABLO16.html'),
                                                                'rev'    =>  array('Rev. 2.0','Rev. 1.0'),
                                                                'size'   =>  array('3.57 MB','483 kB'),
                                                                'icon'   =>  array('pdf','pdf')
                                                            ),

                            'Development Resources'     =>  array(
                                                                'names'  =>  array('4D Workshop4 IDE','Workshop4 IDE User Guide','Workshop4 IDE Installation Guide','ViSi User Guide','ViSi-Genie User Guide'),
                                                                'srcs'   =>  array('http://4dlabs.com.au/Workshop4-IDE-Installer.html','http://4dlabs.com.au/Workshop4-IDE-User-Guide.html','http://4dlabs.com.au/Workshop4-IDE-Installation-Guide.html','http://4dlabs.com.au/ViSi-User-Guide.html','http://4dlabs.com.au/ViSi-Genie-User-Guide.html'),
                                                                'rev'    =>  array('Rev. 4.4.0.9','Rev. 2.0','Rev. 2.0','Rev. 2.0','Rev. 2.0'),
                                                                'size'    =>  array('87.31 MB','3.23 MB','1.08 MB','3.82 MB','3.58 MB'),
                                                                'icon'   =>  array('exe','pdf','pdf','pdf','pdf')

                                                            ),
                            'Reference Manuals'         =>  array(
                                                                'names'  =>  array("4DGL Programmer's Reference Manual","Diablo6 Internal Functions Reference Manual","Diablo16 Serial Command Set Reference Manual"),
                                                                'srcs'   =>  array("http://4dlabs.com.au/4DGL-Programmer's-Reference-Manual.html","http://4dlabs.com.au/4DLS-IF-DIABLO16.html","http://4dlabs.com.au/4DLS-SC-DIABLO16.html"),
                                                                'rev'    =>  array('Rev. 6.0','Rev. 2.0','Rev. 2.0'),
                                                                'size'    =>  array('1.71 MB','6.98 MB','3.27 MB'),
                                                                'icon'   =>  array('pdf','pdf','pdf')
                                                                
                                                            ),

                            ),
        'download-header-icon'  =>   array('doc','dev','reference',), 
        // Product Video Source
        'video-src'     =>  'https://www.youtube.com/embed/EfZQXEnZODU?list=PLJvG8tpO5OSXoJ3wCMvugXmBbnYAf20XQ',

        // Oder Details
        'order-details' =>  array(
                                'Part Number'           =>  '4DLS-Diablo16',
                                'Status'                =>  'In Production',
                                'Package Type'          =>  '64 pin TQFP ',
                                'Supply Voltage'        =>  '3.3 Volts @12mA typical',
                                'Clock Speed (Max)'     =>  '70 MHz',
                                'Data Processing'       =>  '16 bit',
                                'Internal Flash'        =>  '32 kB x 6 banks',
                                'Internal SRAM'         =>  '32 kB',
                                'I2C Interface'         =>  '3x I2C channels available',
                                'SPI Interface'         =>  '1x dedicated for SD Card and 3x configurable',
                                'UART Interface'        =>  '1x dedicated and 3x configurable',
                                'GPIO Pins'             =>  16,
                                'Timer'                 =>  '8 x 16 bit timers with 1 millisecond resolution.',
                                'Operating Temperature' =>  '-40 to +80℃',
                                'Display Interface'     =>  '80-Series 16-bit',
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
        
                )


?>



<section class="product-wrapper">
    <article class="lab-container">
        
            <?php
                $breads     =   array('products', TITLE);
                include('product-template.php'); 
            ?>

    </article>
</section>



<?php include('footer-3.php'); ?>