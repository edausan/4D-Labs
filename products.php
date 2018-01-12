<?php 
    define('TITLE', 'Products');
    include('header-2.php');

    $productNames   =   array('goldelox', 'diablo16','picaso','picaso-Lite');
    $breads          =   array('products');


    $sidebarFilters =   array(

                            'Category'  =>  array(
                                                'Processors'            =>  4,
                                                'Modules'               =>  1,
                                                'Chipsets'              =>  4,
                                                'Dvelopment Tools'      =>  1,
                                            ),

                            'communication protocols'  =>  array(
                                                'UART'                  =>  4,
                                                'I2C'                   =>  3,
                                                'SPI'                   =>  4,
                                                '1-Wire'                =>  3,
                                                '8bit Bus Interface'    =>  1,
                                                '16bit Bus Interface'   =>  1,
                                            ),
                            
                            'package type'  =>  array(
                                                'Canned Module'         =>  1,
                                                'QFN'                   =>  1,
                                                'TQFP'                  =>  3,
                                            ),

                            'flash size'  =>  array(
                                                '10 kB'                 =>  1,
                                                '14 kB'                 =>  2,
                                                '192 kB'                =>  1,
                                            ),
                                            
                            'RAM Size'  =>  array(
                                                '510 B'                 =>  1,
                                                '14 kB'                 =>  2,
                                                '32 kB'                 =>  1,
                                            ),

                            'gpio'  =>  array(
                                                'Digital I/O'            =>  3,
                                                'Analog Input'           =>  2,
                                                'PWM Output'             =>  1,
                                                'Pulse Counters'         =>  1,
                                                'Quadrature Input'       =>  1,
                                        ),

                        );
    
    $catProductView =   array(

                            'goldelox'  =>  array(
                                                    'file-type'         =>  'png',
                                                    'type'              => 'Embedded Graphics Controller',

                                                    'parametric-data'   =>   array(
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
                                            ),

                            'diablo16'  =>  array(
                                                    'file-type'         =>  'png',
                                                    'type'              => 'Embedded Graphics Controller',
                                                    'parametric-data'   =>   array(
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
                                                                            )
                                            ),


                            'picaso'  =>  array(
                                                    'file-type'         =>  'png',
                                                    'type'              => 'Embedded Graphics Controller',
                                                    'parametric-data'   =>   array(
                                                                                'Part Number'           =>  '4DLS-Picaso',
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
                                                                            )
                                            ),


                            'picaso-Lite'  =>  array(
                                                    'file-type'         =>  'png',
                                                    'type'              => 'Embedded Graphics Controller',
                                                    'parametric-data'   =>   array(
                                                                                'Part Number'           =>  '4DLS-Picaso-Lite',
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
                                                                            )
                                            ),

                            'workshop4'  =>  array(
                                                    'file-type'         =>  'png',
                                                    'type'              => 'Integrated Development Environment',
                                                    'parametric-data'   =>   array(
                                                                                

                                                                                'Description'   =>  'Workshop4 is a comprehensive software IDE for Microsoft Windows that provides an integrated software development platform for all of the 4D family of processors and modules. The IDE combines the Editor, Compiler, Linker and Downloader to develop complete 4DGL application code. All user application code is developed within the Workshop4 IDE.',
                                                                                
                                                                            )
                                            ),
                            '4DLS-u7-09S'  =>  array(
                                                    'file-type'         =>  'gif',
                                                    'type'              => '0.9" SMT TFT LCD SPI Display',
                                                    'parametric-data'   =>   array(
                                                                                

                                                                                'Description'   =>  '0.9" SMT TFT LCD SPI Display',

                                                                            )
                                            ),
                        )

?>

<section class="product-category-wrapper">
    <article class="lab-container">
        <!-- Breadcrumbs -->
        <?php include('include/breadcrumbs.php'); ?>
        <!-- /Breadcrumbs -->

        <section class="lab-row">

            <?php include('product-cat.php'); ?>

        </section>

    </article> 
</section>


<?php include('footer-3.php'); ?>