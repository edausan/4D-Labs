<?php

    $appNoteItems  =   array(

                        'update-diablo16-program'   =>  array(
                                                            'img'           =>  'viSi-Genie',
                                                            'title'         => 'ViSi-Genie Arduino: Update Diablo16 Program',
                                                            'difficulty'    => 'Average',
                                                            'revision'      =>  '1.0',
                                                            'description'   =>  'This application note shows how to update a ViSi-Genie program running in a Diablo16 display module.',
                                                            'processor'     =>  array(
                                                                                    'diablo16'  =>  'Diablo16',
                                                                                    'goldelox'  =>  'Goldelox',
                                                                                ),
                                                            'environment'   =>  array('viSi-Genie'),
                                                            'downloads'     =>  array(
                                                                                    'pdf-2'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/100/',
                                                                                    'zip'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/101/',
                                                                                ),
                                                        ),

                        'horizontal-progressbar'    =>  array(
                                                            'img'           =>  'viSi-Genie',
                                                            'title'         =>  'Smart Widgets: Horizontal Progress Bar',
                                                            'difficulty'    =>  'Difficult',
                                                            'revision'      =>  '1.1',
                                                            'description'   =>  'This application note shows how to create custom horizontal progress bar for Picaso and Diablo16 touch screen display modules.',
                                                            'processor'     =>  array(
                                                                                        'picaso'        => 'Picaso', 
                                                                                        'picaso-Lite'   => 'Picaso-Lite', 
                                                                                        'diablo16'      => 'Diablo16',
                                                                                ),
                                                            'environment'   =>  array('viSi-Genie', 'designer', 'serial', 'viSi'),
                                                            'prerequisites' =>  array(
                                                                        'Update Picaso PmmC'        =>  array(
                                                                                                        'diff'  =>  'Easy',
                                                                                                        'link'  =>  'update-picaso-pmmc',
                                                                                                    ),

                                                                        'Update Diablo16 PmmC'      =>  array(
                                                                                                        'diff'  =>  'Easy',
                                                                                                        'link'  =>  'update-diablo16-pmmc',
                                                                                                    ),

                                                                        'First ViSi-Genie Project for Picaso'       =>  array(
                                                                                                        'diff'  =>  'Easy',
                                                                                                        'link'  =>  'first-visi-genie-project-for-picaso',
                                                                                                    ),

                                                                        'First ViSi-Genie Project for Diablo16' =>  array(
                                                                                                        'diff'  =>  'Easy',
                                                                                                        'link'  =>  'first-visi-genie-project-for-diablo16',
                                                                                                    ),

                                                                        'onChanging and onChanged Events'       =>  array(
                                                                                                        'diff'  =>  'Easy',
                                                                                                        'link'  =>  'onchanging-and-onchanged-events',
                                                                                                    ),
                                                                                ),

                                                            'downloads'     =>  array(
                                                                                    'pdf-2'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/74/',
                                                                                    'zip'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/75/',
                                                                                ),
                                                        ),


                        'displaying-third-party-fonts'    =>  array(
                                                            'img'           =>  'viSi',
                                                            'title'         =>  'Displaying Third Party Fonts',
                                                            'difficulty'    =>  'Easy',
                                                            'revision'      =>  '1.0',
                                                            'description'   =>  'This application note explains how custom fonts can be used on a Picaso and Diablo16 display modules in ViSi Environment.',
                                                            'processor'     =>  array(
                                                                                        'picaso'        => 'Picaso', 
                                                                                        'picaso-Lite'   => 'Picaso-Lite', 
                                                                                        'diablo16'      => 'Diablo16',
                                                                                ),
                                                            'environment'   =>  array('viSi'),
                                                            'prerequisites' =>  array(
                                                                                    'Update Picaso PmmC'        =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-picaso-pmmc',
                                                                                                                ),

                                                                                    'Update Diablo16 PmmC'      =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-diablo16-pmmc',
                                                                                                                ),

                                                                                    'First ViSi-Genie Project for Picaso'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'first-visi-genie-project-for-picaso',
                                                                                                                ),

                                                                                    'First ViSi-Genie Project for Diablo16' =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'first-visi-genie-project-for-diablo16',
                                                                                                                ),

                                                                                    'Partitioning a uSD Card'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'partitioning-a-uSD-card',
                                                                                                                ),
                                                                                                                
                                                                                    'Download Program to RAM or Flash'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'download-Program-to-ram-or-flash',
                                                                                                                ),
                                                                                ),

                                                            'downloads'     =>  array(
                                                                                    'pdf-2'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/74/',
                                                                                    'zip'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/75/',
                                                                                ),
                                                        ),


                        'serial-uSD-card-access'    =>  array(
                                                            'img'           =>  'serial',
                                                            'title'         =>  'Serial uSD Card Access',
                                                            'difficulty'    =>  'Easy',
                                                            'revision'      =>  '1.0',
                                                            'description'   =>  'This application note explains how to access the uSD card mounted on a Picaso or a Diablo16 display module in the Serial environment.',
                                                            'processor'     =>  array(
                                                                                        'picaso'        => 'Picaso', 
                                                                                        'picaso-Lite'   => 'Picaso-Lite', 
                                                                                        'diablo16'      => 'Diablo16',
                                                                                ),
                                                            'environment'   =>  array('viSi'),
                                                            'prerequisites' =>  array(
                                                                                    'Update Picaso PmmC'        =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-picaso-pmmc',
                                                                                                                ),

                                                                                    'Update Diablo16 PmmC'      =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-diablo16-pmmc',
                                                                                                                ),

                                                                                    'Partitioning a uSD Card'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'partitioning-a-uSD-card',
                                                                                                                ),
                                                                                                                
                                                                                    'Download Program to RAM or Flash'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'download-Program-to-ram-or-flash',
                                                                                                                ),
                                                                                    '4DGL Colour Constants'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  '4DGL-colour-constants',
                                                                                                                ),
                                                                                ),

                                                            'downloads'     =>  array(
                                                                                    'pdf-2'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/74/',
                                                                                    'zip'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/75/',
                                                                                ),
                                                        ),


                        'first-designer-project'    =>  array(
                                                            'img'           =>  'designer',
                                                            'title'         =>  'First Designer Project',
                                                            'difficulty'    =>  'Easy',
                                                            'revision'      =>  '1.0',
                                                            'description'   =>  'This application note shows how to program a 4D display module in the Designer environment to make it print text on the screen.',
                                                            'processor'     =>  array(
                                                                                        'goldelox'        => 'Goldelox', 
                                                                                        'picaso'        => 'Picaso', 
                                                                                        'picaso-Lite'   => 'Picaso-Lite', 
                                                                                        'diablo16'      => 'Diablo16',
                                                                                ),
                                                            'environment'   =>  array('designer'),
                                                            'prerequisites' =>  array(
                                                                                    'Update Picaso PmmC'        =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-picaso-pmmc',
                                                                                                                ),

                                                                                    'Update Diablo16 PmmC'      =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-diablo16-pmmc',
                                                                                                                ),

                                                                                    'Partitioning a uSD Card'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'partitioning-a-uSD-card',
                                                                                                                ),
                                                                                                                
                                                                                    'Download Program to RAM or Flash'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'download-Program-to-ram-or-flash',
                                                                                                                ),
                                                                                    '4DGL Colour Constants'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  '4DGL-colour-constants',
                                                                                                                ),
                                                                                ),

                                                            'downloads'     =>  array(
                                                                                    'pdf-2'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/74/',
                                                                                    'zip'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/75/',
                                                                                ),
                                                        ),
                        'analog-and-joystick-inputs'    =>  array(
                                                            'img'           =>  'de-vi',
                                                            'title'         =>  'Analog and Joystick Inputs',
                                                            'difficulty'    =>  'Average',
                                                            'revision'      =>  '1.0',
                                                            'description'   =>  'This application note shows how to use the analog input of the Goldelox processor. The 4DGL code of the Designer project can be copied and pasted to an empty ViSi project and it will compile normally. The code can also be integrated to that of an existing ViSi project.',
                                                            'processor'     =>  array(
                                                                                        'goldelox'        => 'Goldelox',
                                                                                ),
                                                            'environment'   =>  array('designer', 'viSi'),
                                                            'prerequisites' =>  array(
                                                                                    'Update Picaso PmmC'        =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-picaso-pmmc',
                                                                                                                ),

                                                                                    'Update Diablo16 PmmC'      =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-diablo16-pmmc',
                                                                                                                ),

                                                                                    'Partitioning a uSD Card'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'partitioning-a-uSD-card',
                                                                                                                ),
                                                                                                                
                                                                                    'Download Program to RAM or Flash'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'download-program-to-ram-or-flash',
                                                                                                                ),
                                                                                    '4DGL Colour Constants'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  '4DGL-colour-constants',
                                                                                                                ),
                                                                                ),

                                                            'downloads'     =>  array(
                                                                                    'pdf-2'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/74/',
                                                                                    'zip'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/75/',
                                                                                ),
                                                        ),

                                                        
                        'download-program-to-ram-or-flash'    =>  array(
                                                            'img'           =>  'env',
                                                            'title'         =>  'Download Program to RAM or Flash',
                                                            'difficulty'    =>  'Easy',
                                                            'revision'      =>  '1.0',
                                                            'description'   =>  'This application note is dedicated to explaining the difference between downloading a program to the flash memory or the RAM section of a 4D Labs processor.',
                                                            'processor'     =>  array(
                                                                                        'picaso'        => 'Picaso',
                                                                                        'picaso-Lite'        => 'Picaso-Lite',
                                                                                        'diablo16'        => 'Diablo16',
                                                                                ),
                                                            'environment'   =>  array('designer', 'viSi', 'serial', 'viSi-Genie'),
                                                            'prerequisites' =>  array(
                                                                                    'Update Picaso PmmC'        =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-picaso-pmmc',
                                                                                                                ),

                                                                                    'Update Diablo16 PmmC'      =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'update-diablo16-pmmc',
                                                                                                                ),

                                                                                    'Partitioning a uSD Card'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'partitioning-a-uSD-card',
                                                                                                                ),
                                                                                                                
                                                                                    'Download Program to RAM or Flash'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  'download-Program-to-ram-or-flash',
                                                                                                                ),
                                                                                    '4DGL Colour Constants'       =>  array(
                                                                                                                    'diff'  =>  'Easy',
                                                                                                                    'link'  =>  '4DGL-colour-constants',
                                                                                                                ),
                                                                                ),

                                                            'downloads'     =>  array(
                                                                                    'pdf-2'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/74/',
                                                                                    'zip'   =>  'http://4dlabs.com.au/downloadable/download/linkSample/link_id/75/',
                                                                                ),
                                                        ),



    );


    $termsAndConditions     =   array(
                                    'Customer Acknowledgement'  =>  array('The Customer acknowledges agreement with these Terms and Conditions of Sale by the placement of an order to purchase       product from 4D Labs Semiconductors. 4D Labs Semiconductors is the trading name of 4D Labs Semiconductors. This contract of sale is between the entity named on the invoice (the "Customer") and 4D Labs Semiconductors. All goods are supplied on these terms and conditions only and no person in the employment or otherwise as agent for 4D Labs Semiconductors has any authority to supply goods on any other terms and conditions or to vary these terms and conditions in any way whatsoever. Previous dealings shall not vary or negate these terms and conditions in any respect. Customer agrees to ensure that all personal and financial details that are provided to 4D Labs Semiconductors are correct. 4D Labs Semiconductors accepts no responsibility for any omissions or errors, and we reserve the right to change any or all information that relates to listing products or services. 4D Labs Semiconductors reserves the right to update or amend these Terms and Conditions at any time they so wish. It is your responsibility to check the Terms and Conditions prior to the placement of each order to ensure that you agree to any amendments that have been made prior to you placing your order. These Terms and Conditions supersede any previous Terms and Conditions. '),

                                    'All sales made in the State of New South Wales, Australia'  =>  array('All sales shall be deemed made in the state of New South Wales, Australia regardless of the location of the Customer. The Customer agrees that any dispute with 4D Labs Semiconductors shall be brought by the Customer exclusively in the state or federal courts situated in the State of New South Wales, Australia. '),

                                    'General'  =>  array('4D Labs Semiconductors warrants that it has good title to all products it sells. In the event any section or portion of a section of these Terms and Conditions of Sale are deemed unlawful or unenforceable, that section or portion of a section shall be stricken from the Terms and Conditions of Sale, and the remaining terms shall continue in full force and effect. '),

                                    'Title of Goods'  =>  array('The goods shall remain the sole and absolute property of 4D Labs Semiconductors as legal and equitable owner and the Customer shall hold such goods as bailee only until such time as the Customer shall have paid the full price. The Customer shall be liable to 4D Labs Semiconductors in respect of any loss or damage to the goods during such bailment. '),

                                    'Errors and Omissions'  =>  array('4D Labs Semiconductors makes no representations about the suitability of this information; it is provided "as is" without warranty of any kind.'),

                                    'Accuracy of Information'  =>  array('We attempt to ensure that information on the 4D Labs Semiconductors Web Site is complete, accurate and current. Despite our efforts, the information on the 4D Labs Semiconductors Web Site may occasionally be inaccurate, incomplete or out of date. We make no representation as to the completeness, accuracy or currentness of any information on the 4D Labs Semiconductors Web Site. Information contained in this publication regarding device applications and the like is provided only for your convenience and may be superseded by updates. It is your responsibility to ensure that your application meets with your specifications. '),

                                    'Warranty Information'  =>  array(
                                                                "All products sold by 4D Labs Semiconductors are covered by 90 days manufacturers' warranty that accompanies the product unless otherwise stated. 4D Labs Semiconductors makes no additional or independent warranty. 4D Labs Semiconductors does not warrant the performance, compatibility, integrity, merchantability and fitness for a particular purpose of any product, but merely passes through to the Customer whatever end-user warranty the manufacturers or software publishers provide with their respective products.",

                                                                ' In case of malfunctioning or damaged products customer will observe the following RMA procedure:' => array(
                                                                        "Customer has 90 days manufacturer's warranty from time of possession of Products.",

                                                                        "If customer reports that a 4D Labs Semiconductors product is not working properly, customer will collect all relevant information about the malfunction and share this information with 4D Labs Semiconductors' technical support team.",

                                                                        "Based on information provided by customer, 4D Labs Semiconductors shall determine whether the Product(s) can be repaired and whether it can be repaired under warranty. ",

                                                                        "If the Product(s) can be repaired under warranty, and this cannot be done remotely, 4D Labs Semiconductors will provide customer with an RMA number and ask the customer to ship back the malfunctioning item(s) for repair or replacement. The customer is responsible for shipping the faulty units to 4D Labs Semiconductors. ",

                                                                        "Customer must send back all the malfunctioning units with the RMA number(s) clearly visible on the packaging. Packages without visible RMA numbers on the packaging will not be accepted. ",

                                                                        "After examining and testing the returned item(s) 4D Labs Semiconductors will either repair or replace the item(s) to customer at its cost and earliest convenience, but no longer than 30 days after receiving the package. "

                                                                        )
                                                                ),

                                    'Limitation of Liability'  =>  array('The customer acknowledges and agrees that, in no event, shall 4D Labs Semiconductors be liable, whether in contract, warranty, tort (including negligence or breach of statutory duty), strict liability, indemnity, contribution, or otherwise, for any indirect, special, punitive, exemplary, incidental or consequential loss, damage, cost or expense of any kind whatsoever, howsoever caused, or for any loss of production, cost of procurement of substitute goods, loss of capital, loss of software, loss of profit, loss of revenues, contracts, business, cost of rework, loss of goodwill or anticipated savings, or wasted management time, even if 4D Labs Semiconductors has been advised of the possibility. 4D Labs Semiconductors total liability on all claims, whether in contract, warranty, tort (including negligence or breach of statutory duty), strict liability, indemnity, contribution, or otherwise, shall not exceed the purchase price of goods or content. These limitations shall not apply where expressly prohibited by law. '),

                                    'Governing Law'  =>  array('This Agreement shall be deemed to be negotiated and executed in Sydney, New South Wales, Australia, and shall be governed by the substantive laws of the State of New South Wales and the Commonwealth of Australia. '),
                                    
                                    'Indemnification'  =>  array(
                                                                'Customer agrees to indemnify and hold 4D Labs Semiconductors, its Board of Directors, Officers, Employees (collectively and individually) harmless from any and all claims, demands, actions, damages and liabilities, which arise out of or in any manner related to customers failure of performance hereunder. Additionally, In no event shall 4D Labs Semiconductors be liable to the customer or to any third party for any indirect, incidental, special, consequential, punitive or exemplary damages (including without limitation lost profits, lost savings, or loss of business opportunity) arising out of or relating to any product or service provided or to be provided by 4D Labs Semiconductors, or the use or inability to use the same, even if 4D Labs Semiconductors has been advised of the possibility of such damages. ',

                                                                '4D Labs Semiconductors shall have no liability for infringement claims of any kind arising from:' => array(
                                                                    "modifications of these 4D Labs Semiconductors Products other than by 4D Labs Semiconductors;",
                                                                    "use of these Products in combination with non-4D Labs Semiconductors software or hardware if a claim would not have occurred but for that combination;",
                                                                    "failure to use updated or modified versions of these Products provided by 4D Labs Semiconductors to avoid infringement.",
                                                                ),

                                                                "4D Labs Semiconductors' products are not fault tolerant nor designed, manufactured or intended for use or resale as on line control equipment in hazardous environments requiring fail-safe performance, such as in the operation of nuclear facilities, aircraft navigation or communication Labs, air traffic control, direct life support machines or weapons Labs in which the failure of the product could lead directly to death, personal injury or severe physical or environmental damage (\"High Risk Activities.\"). 4D Labs Semiconductors and its suppliers specifically disclaim any expressed or implied warranty of fitness for High Risk Activities. Use of 4D Labs Semiconductors' products and devices in \"High Risk Activities\" and in any other application is entirely at the Customers' risk, and the Customer agrees to defend, indemnify and hold harmless 4D Labs Semiconductors from any and all damages, claims, suits, or expenses resulting from such use. No licenses are conveyed, implicitly or otherwise, under any 4D Labs Semiconductors intellectual property rights.",
                                    ),

                                    'Shipping Policy'  =>  array(''),

                                    'International Customers'  =>  array('DHL Express: Choose this option if you require online tracking and security of your purchase. DHL offers 3 to 7 business day delivery worldwide. '),

                                    'Australian Customers'  =>  array('Couriers Please: Next day delivery service Australia wide with tracking. PO Box deliveries are available.'),

                                    'Delivery Information'  =>  array(
                                            'Couriers Please: Next day delivery service Australia wide with tracking. PO Box deliveries are available. '  =>  array(
                                                    '4D Labs Semiconductors is unable to guarantee the exact delivery time of any goods ordered, however, we endeavour to always dispatch your order within 24 to 48 hours from the date that you place the order (Business days only, which exclude Saturdays, Sundays and holidays). ',

                                                    'The delivery guidelines and estimates (above) are merely an estimated time for the average delivery to a given area. Orders may arrive sooner, or later than the estimated time shown. Please remember delivery times are given in business days and not calendar days. We are not responsible for delays beyond our control such as postal or customs delays. ',

                                                    '4D Labs Semiconductors reserves the right to automatically upgrade any selected method of shipping, without additional cost to you, at our discretion. ',

                                                    'All shipping charges are based upon the weight of the goods ordered and are intended to be as fair as possible, and in some cases shipping is actually subsidized. ',

                                                    'Goods that are lost in transit and have no insurance, the customer agrees that 4D Labs Semiconductors will not be held responsible. The customer also acknowledges that goods lost with insurance, the insurance cover may be limited. ',

                                                    '4D Labs Semiconductors takes no responsibility or liability for any international (outside Australia) orders placed with 4D Labs Semiconductors that are likely to incur import taxes or duties, sales taxes, and any other customs-related charges. Importing taxes and charges cannot and will not be quoted/predicted, and they cannot be reimbursed under any circumstances. Please undertake your own research about import regulations and taxes in your country. ',
                                                ),
                                            ),

                                    'Privacy Policy'  =>  array('This privacy policy tells you how we use personal information collected at this site. Please read this privacy policy before using the site or submitting any personal information. By using the site, you are accepting the practices described in this privacy policy. These practices may be changed, but any changes will be posted. You are encouraged to review the privacy policy whenever you visit the site to make sure that you understand how any personal information you provide will be used. '),

                                    'Collection of Information'  =>  array('We collect personally identifiable information, like names, postal addresses, email addresses. If you submit information to 4D Labs Semiconductors by registering, purchasing one of our products or by sending us an email, we collect that information and use it for the purposes of providing you with information or advice about our goods and/or services including promotions and for processing an order by you for our goods and/or services. All emails and newsletters from this site allow you to opt out of further mailings. '),

                                    'Cookie/Tracking Technology'  =>  array('The Site may use cookie and tracking technology depending on the features offered. Cookie and tracking technology are useful for gathering information such as browser type and operating system, tracking the number of visitors to the Site, and understanding how visitors use the Site. Cookies can also help customize the Site for visitors. Personal information cannot be collected via cookies and other tracking technology, however, if you previously provided personally identifiable information, cookies may be tied to such information. '),

                                    'Distribution of Information'  =>  array('We may share information with governmental agencies or other companies assisting us in fraud prevention or investigation. We may do so when: (1) permitted or required by law; or, (2) trying to protect against or prevent actual or potential fraud or unauthorized transactions; or, (3) investigating fraud which has already taken place. Please be aware that other web sites that may be accessed through our site may collect personally identifiable information about you. The information practices of those third-party web sites linked to out web site are not covered by this privacy statement. 4D Labs Semiconductors is not responsible for the privacy practices of the Web sites that it does not operate. You are solely responsible for maintaining the secrecy of your passwords or any account information. Please be careful and responsible whenever you are online. If you post personal information online that is accessible to the public, you may receive unsolicited messages from other parties in return. While we strive to protect your personal information using passwords, cryptographic protocol such as SSL and other available technologies, 4D Labs Semiconductors cannot ensure or warrant the security of any information you transmit to us, and you do so at your own risk. If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it. '),

                                    'Commitment to Data Security'  =>  array('Your personally identifiable information is kept secure. Only authorized employees, agents and contractors (who have agreed to keep information secure and confidential) have access to this information. All emails and newsletters from this site allow you to opt out of further mailings. '),

                                );



    $privacyPolicy  =   array(
        'Information Collection, Use, and Sharing' =>   array(
                                    'We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.',

                                    'We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfil your request, e.g. to ship an order.',

                                    'Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy.'
                                                            ),

        'Information Access and Control'  =>  array(
                                    'You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:' =>  array(
                                            'See what data we have about you, if any.',
                                            'Change/correct any data we have about you.',
                                            'Have us delete any data we have about you. ',
                                            'Express any concern you have about our use of your data.',
                                                                    )
                                                    ),

        'Security'  =>  array(
                                    'We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.',
                                    'Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. Where such information is transmitted through documentation, it is shredded upon processing.',
                                    'While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers in which we store personally identifiable information are kept in a secure environment.',
                            ),

        'Registration'  =>  array('In order to use this website, a user must first complete the registration form. During registration a user is required to give certain information (such as name and email address). This information is used to contact you about the products/services on our site in which you have expressed interest. At your option, you may also provide demographic information (such as gender or age) about yourself, but it is not required.'),

        'Cookies'  =>  array('We may use “cookies” on this site. A cookie is a piece of data stored on a site visitor’s hard drive to help us improve your access to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable information on our site.'),

        'Links'  =>  array('This web site contains links to other sites. Please be aware that we are not responsible for the content or privacy practices of such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site that collects personally identifiable information.'),

        'Surveys & Contests'  =>  array('From time-to-time our site requests information via surveys or contests. Participation in these surveys or contests is completely voluntary and you may choose whether or not to participate and therefore disclose this information. Information requested may include contact information (such as name and shipping address), and demographic information. Contact information will be used to notify the winners and award prizes. Survey information will be used for purposes of monitoring or improving the use and satisfaction of this site.'),

    );

    $team = array(
        'staff-1'   =>  array(
                        'name'         =>  'Staff 1',
                        'position'     =>  'CEO, President',
                        'dp'           =>  'pres',
                        'about-staff-summ'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'about-staff'  =>  '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"'
                    ),
        'staff-2'   =>  array(
                        'name'         =>  'Staff 2',
                        'position'     =>  'COO, Vice President',
                        'dp'           =>  'v-pres',
                        'about-staff-summ'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'about-staff'  =>  '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat." "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."'
                    ),
        'staff-3'   =>  array(
                        'name'         =>  'Staff 3',
                        'position'     =>  'Secretary',
                        'dp'           =>  'sec',
                        'about-staff-summ'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'about-staff'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.'
                    ),
        'staff-4'   =>  array(
                        'name'         =>  'Staff 4',
                        'position'     =>  'Marketing Head',
                        'dp'           =>  'dp-3',
                        'about-staff-summ'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'about-staff'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.'
                    ),
        'staff-5'   =>  array(
                        'name'         =>  'Staff 5',
                        'position'     =>  'Sales',
                        'dp'           =>  'dp',
                        'about-staff-summ'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'about-staff'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. A, odit? Laudantium dicta, placeat eos rem accusantium, sed, ea officiis ullam a mollitia dolore. Blanditiis ut, voluptatibus obcaecati repudiandae ullam optio.'
                    ),
        'staff-6'   =>  array(
                        'name'         =>  'Staff 6',
                        'position'     =>  'Finance',
                        'dp'           =>  'dp-2',
                        'about-staff-summ'  =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                        'about-staff'  =>  '

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac augue sagittis, pulvinar mauris sed, fermentum massa. Nullam facilisis, nulla id elementum molestie, lectus lorem venenatis erat, vitae varius magna ipsum in tellus. Sed efficitur ipsum vitae laoreet ullamcorper. Suspendisse non risus a nisl hendrerit varius. Morbi felis sem, varius vel dapibus bibendum, ultricies eget augue. Etiam sollicitudin porttitor ligula, vitae scelerisque quam pellentesque nec. Vestibulum sed euismod ligula, eu posuere ex. Pellentesque eget lorem massa. Quisque hendrerit, sem non varius porttitor, elit diam dictum velit, a sagittis erat diam sed ligula.
                        
                        Nunc faucibus laoreet mi, ut sollicitudin nulla mattis at. Proin vehicula et erat eget consequat. Vestibulum varius est lacus. Nunc laoreet, nulla a varius fringilla, massa magna mattis nisi, ac feugiat lacus mi id nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque ultricies mattis augue ut viverra. Phasellus a arcu id odio volutpat molestie at vitae lacus. Sed feugiat, augue vitae cursus dictum, urna nibh pulvinar felis, at aliquet diam nisl vel dui. Nulla erat tellus, molestie ac cursus vel, condimentum vel turpis. Duis commodo massa nec pulvinar viverra. Mauris volutpat eu mauris nec interdum.
                        
                        Nullam libero nisl, convallis a lobortis eget, varius ac augue. Nam ut augue commodo, molestie magna in, tincidunt neque. Mauris eget volutpat mauris, nec volutpat risus. Praesent vestibulum lacus sed nisi dapibus ultrices. Duis euismod id ligula id imperdiet. Fusce nec congue massa. Maecenas quis purus ac orci rutrum pulvinar. Praesent fringilla tincidunt lacus ac semper. Cras in enim interdum, consectetur purus eu, dapibus lorem. Curabitur pharetra dui scelerisque libero vehicula hendrerit. Fusce congue eros ut pulvinar porttitor.
                        
                        Nunc at sodales orci. Integer vitae turpis eu orci malesuada dictum. Etiam vitae metus a ex efficitur viverra. In convallis urna a nulla cursus tincidunt. Vivamus ut scelerisque elit. Cras aliquet justo eget ex cursus dictum. In sapien sapien, vulputate sed urna sed, vulputate rutrum eros. Quisque quis turpis dui. Aliquam erat volutpat. Suspendisse rutrum neque finibus volutpat vestibulum. Pellentesque accumsan, purus ac accumsan lacinia, tortor leo feugiat risus, ac interdum nisi elit id urna. Praesent eu porta nisl. Nunc ornare finibus arcu at malesuada. Pellentesque tincidunt mauris sem, eu semper velit laoreet et.
                        
                        Nulla facilisi. Proin nec dolor in elit scelerisque euismod vitae eu magna. Mauris id pulvinar neque. In non nulla ex. Ut neque diam, rhoncus sed quam id, convallis fermentum nisl. Sed auctor sollicitudin lacus. Phasellus ut lacinia leo. Integer et venenatis tellus. Phasellus sit amet erat sit amet turpis lobortis faucibus ut id dui. Nam consequat aliquet mauris id pretium. Aenean ornare vitae risus nec sollicitudin. Phasellus nulla nisl, pellentesque et urna at, vestibulum feugiat turpis. '
                    ),
    );

    $about  =  array(
        'est'   =>  'Established in 1990, our extensive experience allows us to transform concepts and ideas into cutting edge hardware and software products, capable of exceeding demands and expectations of our customers.',

        'processor'   =>  '4D Labs designs, develops and manufactures custom graphics processors that enable both stand alone and host dependant solutions, suitable for a very wide range of applications and projects.',

        'eng'   =>  'Our engineering team consists of seasoned electronic and software engineers, who work in close partnership with ISO 9001 certified production factories under our stringent Quality Assurance practices and procedures, enabling us to develop and deliver market leading solutions to our customers, to the up-most quality',

        'dist'   =>  'With headquarters in Sydney Australia, 4D Labs has strategically partnered with numerous distributors across the globe, to effectively distribute our unique technology to the ever changing and expanding market.',

    );

    // $shopSample = array();

    $shopSample =   array(
        'goldelox'  =>  array(
            'Goldelox Graphics Processor',
            29.00,
            20000,
            'The GOLDELOX is a custom embedded graphics controller designed to interface with many popular OLED and LCD display panels.',
            '6020',
            '4DL-GOLDELOX'
        ),
        'workshop4'  =>  array(
            'Workshop4 Pro IDE',
            39.00,
            50000,
            'Workshop4 delivers a comprehensive interface enriched with features for optimal software development for any user.',
            '3027',
            '4DL-WS4-PRO'
        ),
        'diablo16'  =>  array(
            'Diablo16 Graphics Processor',
            63.50,
            3000000,
            'Ideal as a standalone embedded graphics processor or interface to any host controller as a graphics co-processor.',
            '7523',
            '4DL-DIABLO-16'
        ),
    );

    $relatedProducts =   array(
        'picaso'  =>  array(
            'Picaso Graphics Processor',
            'Picaso is a custom embedded 4DGL graphics controller designed to interface with many popular OLED and LCD display panels.',
            '$92.00',
        ),
        'picaso-Lite'  =>  array(
            'Picaso-Lite Graphics Processor',
            'The Picaso-Lite is a custom embedded 4DGL graphics controller designed to interface with many popular OLED and LCD display panels.',
            '$84.50',
        ),
        'diablo16'  =>  array(
            'Diablo16 Graphics Processor',
            'The Picaso-Lite is a custom embedded 4DGL graphics controller designed to interface with many popular OLED and LCD display panels.',
            '$89.50',
        ),
        'workshop4'  =>  array(
            'Workshop4 Pro IDE',
            'Workshop4 delivers a comprehensive interface enriched with features for optimal software development for any user.',
            '$39.00',
        ),
        'goldelox'  =>  array(
            'Goldelox Graphics Processor',
            'The GOLDELOX is a custom embedded graphics controller designed to interface with many popular OLED and LCD display panels.',
            '$29.00',
        ),
    );


    $alphanav   =   array(
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'
    );


    $glossary   =   array(
        '#'     =>  array(
            '200mm'     =>  array('A size of silicon wafer approximately 8 inches in diameter. Also used to refer to a <a href="#tool">tool</a> designed to process wafers of this size.'),
            '300mm'     =>  array('A size of silicon wafer approximately 12 inches in diameter. Also used to refer to a <a href="#tool">tool</a> designed to process wafers of this size.'),
            '4K RESOLUTION' =>  array('An alternative term for the <a href="#UHD">UHD</a> digital video format.'),
        ),
        'a'     =>   array(
            'ABATEMENT'     =>   array('A process where toxic or other hazardous substances are removed from a liquid or gas. Examples include removing copper particles from CMP slurry or converting liquid or gaseous toxic effluents into safe forms for disposal.'),
            
            'ACCELERATOR'   =>   array('In <a href="#ion implantation">ion implantation</a>, a device used to increase the energy of an atom or molecule. (See <a href="#Extraction Electrode">Extraction Electrode)</a>'),

            'ACCEPTOR'      =>   array('An impurity in a semiconductor that accepts electrons. Boron is the primary acceptor used to dope silicon in the <a href="#ion implantation">ion implantation</a> process.'),
        ),

        'b'     =>   array(
            'BACK CONTACT'     =>   array('A metallic layer that covers the entire back surface of a solar <a href="#PV">PV</a> cell and acts as a conductor.','Also used to refer to advanced cell designs such as <a href="#EWT">EWT</a> where both terminals of the cell are located on the back side of the wafer, thus increasing the light-gathering area of the cell and hence improving conversion efficiency.'),

            'BACK GLASS'    =>   array('The bottom layer of a thin film solar module, which provides rigidity and electrical insulation. Current is extracted from the module through the <a href="#PV">junction box</a> that is attached to the circuit through a hole in the back glass.'),

            'BACKPLANE'      =>   array('In <a href="#TFT-LCD">TFT-LCD</a> manufacturing, the backplane is the array of <a href="#thin-film">thin-film</a> transistors that control the light output of each pixel on the display.'),
        ),
        'c'     =>  array(
            '200mm'     =>  array('A size of silicon wafer approximately 8 inches in diameter. Also used to refer to a <a href="#tool">tool</a> designed to process wafers of this size.'),
            '300mm'     =>  array('A size of silicon wafer approximately 12 inches in diameter. Also used to refer to a <a href="#tool">tool</a> designed to process wafers of this size.'),
            '4K RESOLUTION' =>  array('An alternative term for the <a href="#UHD">UHD</a> digital video format.'),
        ),
    );

    $sidebarFilters =   array(

        'Category'  =>  array(
                            'Processors'            =>  4,
                            'Modules'               =>  1,
                            'Chipsets'              =>  4,
                            'Development Tools'      =>  1,
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
    );

    $products = array(
 
        // Oder Details
        'goldelox' =>  array(   
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">600</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'           =>  array('12 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('10 kB'),
                                'Internal-SRAM'         =>  array('510 bytes'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('0'),
                                'SPI'                   =>  array('1'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('0'),
                                'Pulse-Counters'        =>  array('0'),
                                'Quadrature-Input'      =>  array('0'),
                                'Timer'                 =>  array('4 x 16bit user timers with 1ms resolution'),
                                'Operating-Temperature' =>  array('-40 to +80 ℃'),
                                'Display-Interface'     =>  array('80-Series 8 bit wide CPU data interface'),
                                'Package-Type'          =>  array('28 pin QFN'),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),
        'diablo16' =>  array(
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">1200</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'     =>  array('70 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('32 kB x 6 banks'),
                                'Internal-SRAM'         =>  array('32 kB)'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('3x I2C channels available, 1x dedicated for SD Card and 3x configurable, 1x dedicated and 3x configurable'),
                                'SPI'                   =>  array('0'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('6'),
                                'Pulse-Counters'        =>  array('10'),
                                'Quadrature-Input'      =>  array('14'),
                                'Timer'                 =>  array('8 x 16 bit timers with 1 millisecond resolution.'),
                                'Operating-Temperature' =>  array('-40 to +80℃'),
                                'Display-Interface'     =>  array('80-Series 16-bit'),
                                'Package-Type'          =>  array('64 pin TQFP '),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),
        'picaso' =>  array(
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">800</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'     =>  array('70 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('32 kB x 6 banks'),
                                'Internal-SRAM'         =>  array('32 kB'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('3x I2C channels available, 1x dedicated for SD Card and 3x configurable, 1x dedicated and 3x configurable'),
                                'SPI'                   =>  array('0'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('6'),
                                'Pulse-Counters'        =>  array('10'),
                                'Quadrature-Input'      =>  array('14'),
                                'Timer'                 =>  array('8 x 16 bit timers with 1 millisecond resolution.'),
                                'Operating-Temperature' =>  array('-40 to +80℃'),
                                'Display-Interface'     =>  array('80-Series 16-bit'),
                                'Package-Type'          =>  array('64 pin TQFP '),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),
        'picaso-Lite' =>  array(
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">800</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'     =>  array('70 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('32 kB x 6 banks'),
                                'Internal-SRAM'         =>  array('32 kB'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('3x I2C channels available, 1x dedicated for SD Card and 3x configurable, 1x dedicated and 3x configurable'),
                                'SPI'                   =>  array('0'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('6'),
                                'Pulse-Counters'        =>  array('10'),
                                'Quadrature-Input'      =>  array('14'),
                                'Timer'                 =>  array('8 x 16 bit timers with 1 millisecond resolution.'),
                                'Operating-Temperature' =>  array('-40 to +80℃'),
                                'Display-Interface'     =>  array('80-Series 16-bit'),
                                'Package-Type'          =>  array('64 pin TQFP '),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),

        'goldelox-2' =>  array(   
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">600</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'           =>  array('12 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('10 kB'),
                                'Internal-SRAM'         =>  array('510 bytes'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('0'),
                                'SPI'                   =>  array('1'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('0'),
                                'Pulse-Counters'        =>  array('0'),
                                'Quadrature-Input'      =>  array('0'),
                                'Timer'                 =>  array('4 x 16bit user timers with 1ms resolution'),
                                'Operating-Temperature' =>  array('-40 to +80 ℃'),
                                'Display-Interface'     =>  array('80-Series 8 bit wide CPU data interface'),
                                'Package-Type'          =>  array('28 pin QFN'),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),
        'diablo16-2' =>  array(
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">1200</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'     =>  array('70 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('32 kB x 6 banks'),
                                'Internal-SRAM'         =>  array('32 kB)'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('3x I2C channels available, 1x dedicated for SD Card and 3x configurable, 1x dedicated and 3x configurable'),
                                'SPI'                   =>  array('0'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('6'),
                                'Pulse-Counters'        =>  array('10'),
                                'Quadrature-Input'      =>  array('14'),
                                'Timer'                 =>  array('8 x 16 bit timers with 1 millisecond resolution.'),
                                'Operating-Temperature' =>  array('-40 to +80℃'),
                                'Display-Interface'     =>  array('80-Series 16-bit'),
                                'Package-Type'          =>  array('64 pin TQFP '),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),
        'picaso-2' =>  array(
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">800</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'     =>  array('70 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('32 kB x 6 banks'),
                                'Internal-SRAM'         =>  array('32 kB'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('3x I2C channels available, 1x dedicated for SD Card and 3x configurable, 1x dedicated and 3x configurable'),
                                'SPI'                   =>  array('0'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('6'),
                                'Pulse-Counters'        =>  array('10'),
                                'Quadrature-Input'      =>  array('14'),
                                'Timer'                 =>  array('8 x 16 bit timers with 1 millisecond resolution.'),
                                'Operating-Temperature' =>  array('-40 to +80℃'),
                                'Display-Interface'     =>  array('80-Series 16-bit'),
                                'Package-Type'          =>  array('64 pin TQFP '),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),
        'picaso-Lite-2' =>  array(
                                'Price'                 =>  array(
                                                            '10000+'    =>  '$4.50',
                                                        ),
                                'Availability'          =>  array('<label>In Stock:</label> <span class="stock-val">800</span>', '<p>Additional Stock Lead Time: <span>12 Weeks</span></p>'),
                                
                                'Status'                =>  array('In Production'),
                                
                                'Supply-Voltage'        =>  array('3.3 Volts @12mA typical'),
                                'Clock-Speed'     =>  array('70 MHz'),
                                'Data-Processing'       =>  array('16 bit'),
                                'Internal-Flash'        =>  array('32 kB x 6 banks'),
                                'Internal-SRAM'         =>  array('32 kB'),
                                'UART'                  =>  array('0'),
                                'I2C'                   =>  array('3x I2C channels available, 1x dedicated for SD Card and 3x configurable, 1x dedicated and 3x configurable'),
                                'SPI'                   =>  array('0'),
                                '1-WIRE'                =>  array('0'),
                                'Digital-I/O'           =>  array('2'),
                                'Analog-Input'          =>  array('0'),
                                'PWM-Output'            =>  array('6'),
                                'Pulse-Counters'        =>  array('10'),
                                'Quadrature-Input'      =>  array('14'),
                                'Timer'                 =>  array('8 x 16 bit timers with 1 millisecond resolution.'),
                                'Operating-Temperature' =>  array('-40 to +80℃'),
                                'Display-Interface'     =>  array('80-Series 16-bit'),
                                'Package-Type'          =>  array('64 pin TQFP '),
                                'Info'                  =>  array('<img src="img/rohs.png" class="rohs-icon">RoHS Compliant'),
                            ),
        

    );

    $partName   =   array(
                        'goldelox' => array(
                                        'part-name' => '4DLS-GOLDELOX', 
                                        'datasheet' =>  'http://4dlabs.com.au/4DLS-DS-GOLDELOX.html'
                                    ),
                        'diablo16' => array(
                                        'part-name' => '4DLS-Diablo16', 
                                        'datasheet' => 'http://4dlabs.com.au/4DLS-DS-DIABLO16.html'),
                        'picaso' => array(
                                        'part-name' => '4DLS-Picaso', 
                                        'datasheet' =>  'http://4dlabs.com.au/4DLS-DS-PICASO.html'),
                        'picaso-Lite' => array(
                                        'part-name' => '4DLS-Picaso-Lite', 
                                        'datasheet' => 'http://4dlabs.com.au/4DLS-DS-PICASO-LITE.html'),
                        'goldelox-2' => array(
                                        'part-name' => '4DLS-GOLDELOX', 
                                        'datasheet' =>  'http://4dlabs.com.au/4DLS-DS-GOLDELOX.html'
                                    ),
                        'diablo16-2' => array(
                                        'part-name' => '4DLS-Diablo16', 
                                        'datasheet' => 'http://4dlabs.com.au/4DLS-DS-DIABLO16.html'),
                        'picaso-2' => array(
                                        'part-name' => '4DLS-Picaso', 
                                        'datasheet' =>  'http://4dlabs.com.au/4DLS-DS-PICASO.html'),
                        'picaso-Lite-2' => array(
                                        'part-name' => '4DLS-Picaso-Lite', 
                                        'datasheet' => 'http://4dlabs.com.au/4DLS-DS-PICASO-LITE.html'),
                    );


    $highlights =   array(
                        'goldelox'      =>  array(
                                                'Goldelox Processor' => 'The GOLDELOX is a custom embedded graphics controller designed to interface with many popular OLED and LCD display panels.'
                                            ),
                        'pixxi'      =>  array(
                                                'Pixxi Processor' => 'The Pixxi processor is a great addition to the 4D labs processor range, providing more power, more FLASH, more RAM and more features than the Picaso Processor.'
                                            ),
                        'parametric-search' =>  array(
                                                'Parametric Search' => 'A parametric search allows queries using multiple criteria to narrow the results.'
                                            ),
                        'sim-modules'   =>  array(
                                                'SIM Modules' => 'Picaso is a custom embedded 4DGL graphics controller designed to interface with many popular OLED and LCD display panels.'
                                            ),
                        'workshop4'   =>  array(
                                                'Workshop4 PRO IDE' => 'Workshop4 is a comprehensive software IDE for Microsoft Windows that provides an integrated software development platform for all of the 4D family of processors and modules.'
                                            ),
                    );


    $thumbnails =   array(
        'Graphics Solutions'  =>   array(
                            'page'          =>  'products',
                            'img'           =>  'goldelox.png',
                            'description'   =>  '4D Labs also offers chip solutions adding more functionalities to your display applications including touch, audio, and wireless connectivity.',
                            'class'         =>  'fleft'
                        ),
        'OptoElectronics'  =>   array(
                            'page'          =>  'products',
                            'img'           =>  'lcd.png',
                            'description'   =>  '4D Labs also offers chip solutions adding more functionalities to your display applications including touch, audio, and wireless connectivity.',
                            'class'         =>  'fright'
                        ),
        'Systems In Modules (SIM)'  =>   array(
                            'page'          =>  'sim-modules',
                            'img'           =>  'sim-modules.png',
                            'description'   =>  '4D Labs also offers chip solutions adding more functionalities to your display applications including touch, audio, and wireless connectivity.',
                            'class'         =>  'fleft'
                        ),
        'Software IDE Platforms'  =>   array(
                            'page'          =>  'workshop4',
                            'img'           =>  'workshop4.png',
                            'description'   =>  '4D Labs also offers chip solutions adding more functionalities to your display applications including touch, audio, and wireless connectivity.',
                            'class'         =>  'fright'
                        ),
        'Chipset Solutions'  =>   array(
                            'page'          =>  'products',
                            'img'           =>  'goldelox.png',
                            'description'   =>  '4D Labs also offers chip solutions adding more functionalities to your display applications including touch, audio, and wireless connectivity.',
                            'class'         =>  'fleft'
                        ),
        'Development Resources'  =>   array(
                            'page'          =>  'products',
                            'img'           =>  'lcd.png',
                            'description'   =>  '4D Labs offers powerful integrated development environments that allows users to create projects with no coding at all or be more powerful using 4D graphics language.',
                            'class'         =>  'fright'
                        ),
                    );


    $news =     array(
        'Nov 11, 2017'  =>  array(
                                'title'     =>  '4D Systems adds smallest 0.9” Display module to its Internet of Displays range',
                                'content'   =>  '4D Systems is leading the way with its Internet of Display modules. Today they announced the latest addition to the range with its smallest LCD display yet. At 0.9-inch and powered by the popular Wi-Fi enabled ESP8266, it is ideal for miniature IoT projects.',
                                'thumb'     =>  'IoD09.jpg',
                                'link'      =>  'http://www.4dsystems.com.au/article.php?id=2964'
                            ),
        'Jul 26, 2017'  =>  array(
                                'title'     =>  '4D Systems adds smart widgets editor tool to Workshop4 PRO IDE',
                                'content'   =>  'Workshop4 PRO enhances the standard features of the base version of the Workshop4 IDE with options that extend productivity for developing advanced GUIs for embedded applications.',
                                'thumb'     =>  'ws4.jpg',
                                'link'      =>  'http://www.4dsystems.com.au/article.php?id=2961'
                            ),
        'Sep 13, 2017'  =>  array(
                                'title'     =>  'Building easy access to Big Data',
                                'content'   =>  'The infrastructure to support the Internet of Things is evolving, and a large part of that infrastructure is what we now call the cloud. As the IoT matures, it is pioneering new concepts such as distributed intelligence; edge-nodes that operate autonomously, creating and acting on data that is passed to the cloud and accessible from anywhere.',
                                'thumb'     =>  'build.jpg',
                                'link'      =>  'http://www.4dsystems.com.au/article.php?id=2960'
                            ),
        'June 09, 2017'  =>  array(
                                'title'     =>  'TFT LCD display series for BeagleBone Black incorporates touch sensing over I2C',
                                'content'   =>  '4D Systems announces the launch of the gen4 CAPE series of TFT LCD display capes designed specifically for use with the BeagleBone Black single board computer. The series comprises 4.3-, 5.0- and 7.0- inch models, each equipped with a 30-pin robust FPC cable that plugs into the supplied gen4 CAPE adapter board.',
                                'thumb'     =>  'bbb.jpg',
                                'link'      =>  'http://www.4dsystems.com.au/article.php?id=2959'
                            ),
                );
?>