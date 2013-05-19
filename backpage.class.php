<?php

/*
 @class name: backpage 
 @author: Gowri sankar.R
 @author Url: http://code-cocktail.in/
 @description: backpage class is used to generate the xml feed for backpage.com
 @version: 0.1
*/

class backpage{
    
    private $backpage_categories = array('AutosForSale',
                                         'AutoPartsForSale',
                                         'AutoServices',
                                         'AntiquesForSale',
                                         'AppliancesForSale',
                                         'BoatsForSale',
                                         'BusinessForSale',
                                         'ClothingForSale',
                                         'ElectronicsForSale',
                                         'Farm',
                                         'Free',
                                         'FurnitureForSale',
                                         'Household',
                                         'MiscForSale',
                                         'PetsForSale',
                                         'SportsEquipForSale',
                                         'TicketsForSale',
                                         'ToolsForSale',
                                         'WantedTrade',
                                         'YardSale',
                                         'Childcare',
                                         'Classes',
                                         'GeneralCommunity',
                                         'Groups',
                                         'LostAndFound',
                                         'Volunteers',
                                         'AccountingJobs',
                                         'AdminOfficeJobs',
                                         'AccountingJobs',
                                         'Auditions',
                                         'CustomerServiceJobs',
                                         'DomesticJobs',
                                         'DriverJobs',
                                         'EducationJobs',
                                         'FocusGroups',
                                         'JobWanted',
                                         'MedicalHealthJobs',
                                         'ManagementJobs',
                                         'RestaurantRetailJobs',
                                         'SalesJobs',
                                         'SalonJobs',
                                         'MiscJobs',
                                         'ComputerJobs',
                                         'TradesJobs',
                                         'RealEstateJobs',
                                         'Bars',
                                         'Restaurants',
                                         'Salons',
                                         'Events',
                                         'MusicEquipForSale',
                                         'MusicianServices',
                                         'MusicianWanted',
                                         'MusicInstruction',
                                         'PlugBand',
                                         'CommercialForSale',
                                         'LandForSale',
                                         'MiscRealEstate',
                                         'HomesForSale',
                                         'RealEstateWanted',
                                         'CommercialForRent',
                                         'MiscForRent',
                                         'RentalsWanted',
                                         'Roommates',
                                         'ApartmentsForRent',
                                         'VacationForRent',
                                         'BizOpps',
                                         'BusinessServices',
                                         'CleaningServices',
                                         'ComputerServices',
                                         'CreativeServices',
                                         'FinancialServices',
                                         'HealthServices',
                                         'LaborMoving',
                                         'MiscServices',
                                         'RealEstateServices',
                                         'TherapeuticMassage',
                                         'LawnServices',
                                         );
    
        
private $backpage_usa_cities = array(
                                'auburn',
                                'birmingham',
                                'dothan',
                                'gadsden',
                                'huntsville',
                                'mobile',
                                'montgomery',
                                'shoals',
                                'tuscaloosa',
                                'anchorage',
                                'flagstaff',
                                'mohave',
                                'phoenix',
                                'prescott',
                                'showlow',
                                'sierravista',
                                'tucson',
                                'yuma',
                                'fayetteville',
                                'fortsmith',
                                'jonesboro',
                                'littlerock',
                                'burlington',
                                'sanluisobispo',
                                'santabarbara',
                                'santamaria',
                                'daytona',
                                'orlando',
                                'spacecoast',
                                'treasurecoast',
                                'austin',
                                'killeen',
                                'sanmarcos',
                                'waco',
                                'boulder',
                                'coloradosprings',
                                'denver',
                                'fortcollins',
                                'pueblo',
                                'rockies',
                                'westslope',
                                'hartford',
                                'newhaven',
                                'newlondon',
                                'nwct',
                                'delaware',
                                'albanyga',
                                'athensga',
                                'atlanta',
                                'augusta',
                                'brunswick',
                                'columbusga',
                                'macon',
                                'nwga',
                                'savannah',
                                'statesboro',
                                'valdosta',
                                'bigisland',
                                'honolulu',
                                'kauai',
                                'maui',
                                'boise',
                                'eastidaho',
                                'lewiston',
                                'twinfalls',
                                'bloomington',
                                'carbondale',
                                'chambana',
                                'chicago',
                                'decatur',
                                'lasalle',
                                'mattoon',
                                'peoria',
                                'quincy',
                                'rockford',
                                'springfieldil',
                                'imperial',
                                'bloomingtonin',
                                'evansville',
                                'fortwayne',
                                'indianapolis',
                                'kokomo',
                                'muncie',
                                'richmondin',
                                'southbend',
                                'terrehaute',
                                'tippecanoe',
                                'cedarrapids',
                                'desmoines',
                                'dubuque',
                                'fortdodge',
                                'iowacity',
                                'masoncity',
                                'ottumwa',
                                'quadcities',
                                'siouxcity',
                                'waterloo',
                                'quadcities',
                                'lawrence',
                                'manhattanks',
                                'topeka',
                                'wichita',
                                'bowlinggreen',
                                'eastky',
                                'lexington',
                                'louisville',
                                'owensboro',
                                'westky',
                                'inlandempire',
                                'longbeach',
                                'losangeles',
                                'orangecounty',
                                'palmdale',
                                'palmsprings',
                                'sanfernandovalley',
                                'sangabrielvalley',
                                'ventura',
                                'alexandria',
                                'batonrouge',
                                'houma',
                                'lafayette',
                                'lakecharles',
                                'monroe',
                                'neworleans',
                                'shreveport',
                                'maine',
                                'annapolis',
                                'baltimore',
                                'cumberlandvalley',
                                'easternshore',
                                'frederick',
                                'westernmaryland',
                                'boston',
                                'capecod',
                                'southcoast',
                                'springfield',
                                'worcester',
                                'annarbor',
                                'battlecreek',
                                'centralmich',
                                'detroit',
                                'flint',
                                'grandrapids',
                                'holland',
                                'jacksonmi',
                                'kalamazoo',
                                'lansing',
                                'monroemi',
                                'muskegon',
                                'northernmichigan',
                                'porthuron',
                                'saginaw',
                                'swmi',
                                'up',
                                'bemidji',
                                'duluth',
                                'mankato',
                                'minneapolis',
                                'rochestermn',
                                'stcloud',
                                'biloxi',
                                'hattiesburg',
                                'jackson',
                                'meridian',
                                'natchez',
                                'northmiss',
                                'columbiamo',
                                'joplin',
                                'kc',
                                'kirksville',
                                'loz',
                                'semo',
                                'springfieldmo',
                                'stjoseph',
                                'stlouis',
                                'montana',
                                'grandisland',
                                'lincoln',
                                'northplatte',
                                'omaha',
                                'scottsbluff',
                                'elko',
                                'lasvegas',
                                'reno',
                                'newhampshire',
                                'centraljersey',
                                'jerseyshore',
                                'northjersey',
                                'southjersey',
                                'albuquerque',
                                'clovis',
                                'farmington',
                                'lascruces',
                                'roswell',
                                'santafe',
                                'bronx',
                                'brooklyn',
                                'fairfield',
                                'longisland',
                                'manhattan',
                                'nynj',
                                'nyother',
                                'queens',
                                'statenisland',
                                'westchester',                               
                                'asheville',
                                'boone',
                                'charlotte',
                                'easternnc',
                                'fayettevillenc',
                                'greensboro',
                                'hickory',
                                'outerbanks',
                                'raleigh',
                                'wilmington',
                                'winstonsalem',
                                'bismarck',
                                'fargo',
                                'grandforks',
                                'minot',
                                'arlington',
                                'dallas',
                                'denton',
                                'fortworth',
                                'northdfw',
                                'southdfw',
                                'texarkana',
                                'texoma',
                                'tyler',
                                'wichitafalls',
                                'gainesville',
                                'jacksonville',
                                'ocala',
                                'staugustine',
                                'panamacity',
                                'pensacola',
                                'tallahassee',
                                'akroncanton',
                                'ashtabula',
                                'athensoh',
                                'chillicothe',
                                'cincinnati',
                                'cleveland',
                                'columbus',
                                'dayton',
                                'huntingtonoh',
                                'limaoh',
                                'mansfield',
                                'sandusky',
                                'toledo',
                                'tuscarawas',
                                'youngstown',
                                'zanesville',
                                'lawton',
                                'oklahomacity',
                                'stillwater',
                                'tulsa',
                                'bend',
                                'corvallis',
                                'eastoregon',
                                'eugene',
                                'klamath',
                                'medford',
                                'oregoncoast',
                                'portland',
                                'roseburg',
                                'salem',
                                'allentown',
                                'altoona',
                                'chambersburg',
                                'erie',
                                'harrisburg',
                                'lancaster',
                                'meadville',
                                'pennstate',
                                'philadelphia',
                                'pittsburgh',
                                'poconos',
                                'reading',
                                'scranton',
                                'williamsport',
                                'york',
                                'providence',
                                'sacramento',
                                'sandiego',
                                'bakersfield',
                                'fresno',
                                'merced',
                                'modesto',
                                'stockton',
                                'visalia',
                                'eastbay',
                                'monterey',
                                'northbay',
                                'sanjose',
                                'sanmateo',
                                'santacruz',
                                'sf',
                                'charleston',
                                'columbia',
                                'florence',
                                'greenville',
                                'hiltonhead',
                                'myrtlebeach',
                                'southdakota',
                                'beaumont',
                                'collegestation',
                                'galveston',
                                'houston',
                                'huntsvilletx',
                                'ftlauderdale',
                                'keys',
                                'miami',
                                'westpalmbeach',
                                'brownsville',
                                'corpuschristi',
                                'delrio',
                                'laredo',
                                'mcallen',
                                'sanantonio',
                                'victoriatx',
                                'fortmyers',
                                'lakeland',
                                'sarasota',
                                'tampa',
                                'chattanooga',
                                'clarksville',
                                'cookeville',
                                'knoxville',
                                'memphis',
                                'nashville',
                                'tricities',
                                'chico',
                                'humboldt',
                                'mendocino',
                                'redding',
                                'siskiyou',
                                'susanville',
                                'albany',
                                'binghamton',
                                'buffalo',
                                'catskills',
                                'chautauqua',
                                'elmira',
                                'fingerlakes',
                                'glensfalls',
                                'hudsonvalley',
                                'ithaca',
                                'oneonta',
                                'plattsburgh',
                                'potsdam',
                                'rochester',
                                'syracuse',
                                'twintiers',
                                'utica',
                                'watertown',
                                'logan',
                                'ogden',
                                'provo',
                                'saltlakecity',
                                'stgeorge',
                                'blacksburg',
                                'charlottesville',
                                'chesapeake',
                                'danville',
                                'fredericksburg',
                                'hampton',
                                'harrisonburg',
                                'lynchburg',
                                'newportnews',
                                'norfolk',
                                'portsmouth',
                                'richmond',
                                'roanoke',
                                'suffolk',
                                'swva',
                                'virginiabeach',
                                'bellingham',
                                'everett',
                                'moseslake',
                                'mtvernon',
                                'olympia',
                                'pullman',
                                'seattle',
                                'spokane',
                                'tacoma',
                                'tricitieswa',
                                'wenatchee',
                                'yakima',
                                'dc',
                                'nova',
                                'southernmaryland',
                                'abilene',
                                'amarillo',
                                'elpaso',
                                'lubbock',
                                'odessa',
                                'charlestonwv',
                                'huntington',
                                'martinsburg',
                                'morgantown',
                                'parkersburg',
                                'southernwestvirginia',
                                'wheeling',
                                'appleton',
                                'eauclaire',
                                'greenbay',
                                'janesville',
                                'lacrosse',
                                'madison',
                                'milwaukee',
                                'racine',
                                'sheboygan',
                                'wausau',
                                'wyoming',                                
                                );    
    
 private $backpage_non_usa_cities = array(
                                        'calgary',
                                        'edmonton',
                                        'ftmcmurray',
                                        'lethbridge',
                                        'medicinehat',
                                        'reddeer',
                                        'abbotsford',
                                        'cariboo',
                                        'comoxvalley',
                                        'cranbrook',
                                        'kamloops',
                                        'kelowna',
                                        'nanaimo',
                                        'peace',
                                        'princegeorge',
                                        'skeena',
                                        'sunshine',
                                        'vancouver',
                                        'victoria',
                                        'whistler',
                                        'halifax',
                                        'newbrunswick',
                                        'barrie',
                                        'belleville',
                                        'brantford',
                                        'chatham',
                                        'cornwall',
                                        'guelph',
                                        'hamilton',
                                        'kingston',
                                        'kitchener',
                                        'londonon',
                                        'niagara',
                                        'ottawa',
                                        'owensound',
                                        'peterborough',
                                        'sarnia',
                                        'sault',
                                        'sudbury',
                                        'thunderbay',
                                        'toronto',
                                        'windsor',
                                        'montreal',
                                        'quebeccity',
                                        'saguenay',
                                        'sherbrooke',
                                        'troisrivieres',
                                        'regina',
                                        'saskatoon',
                                        'stjohns',
                                        'whitehorse',
                                        'winnipeg',
                                        'yellowknife',
                                        'buenosaires',
                                        'adelaide',
                                        'brisbane',
                                        'canberra',
                                        'darwin',
                                        'hobart',
                                        'melbourne',
                                        'perth',
                                        'sydney',
                                        'brussel',
                                        'lapaz',
                                        'bahia',
                                        'belohorizonte',
                                        'brasilia',
                                        'curitiba',
                                        'fortaleza',
                                        'portoalegre',
                                        'recife',
                                        'riodejaneiro',
                                        'salvador',
                                        'saopaulo',
                                        'lapaz',
                                        'bahamas',
                                        'caribbean',
                                        'dominican',
                                        'jamaica',
                                        'puertorico',
                                        'virginislands',
                                        'beijing',
                                        'chengdu',
                                        'chongqing',
                                        'dalian',
                                        'guangzhou',
                                        'hangzhou',
                                        'nanjing',
                                        'shanghai',
                                        'shenyang',
                                        'shenzhen',
                                        'wuhan',
                                        'xian',
                                        'colombia',
                                        'costarica',
                                        'praha',
                                        'kobenhavn',
                                        'quito',
                                        'elsalvador',
                                        'helsinki',
                                        'bordeaux',
                                        'bretagne',
                                        'corse',
                                        'dom-tom',
                                        'grenoble',
                                        'lille',
                                        'loire',
                                        'lyon',
                                        'marseille',
                                        'montpellier',
                                        'nice',
                                        'normandie',
                                        'paris',
                                        'strasbourg',
                                        'toulouse',
                                        'berlin',
                                        'bremen',
                                        'dresden',
                                        'duesseldorf',
                                        'essen',
                                        'frankfurt',
                                        'hamburg',
                                        'hannover',
                                        'heidelberg',
                                        'kaiserslautern',
                                        'karlsruhe',
                                        'kiel',
                                        'koeln',
                                        'leipzig',
                                        'luebeck',
                                        'mannheim',
                                        'muenchen',
                                        'nuernberg',
                                        'rostock',
                                        'schwerin',
                                        'stuttgart',
                                        'athina',
                                        'guam',
                                        'guatemala',
                                        'hongkong',
                                        'budapest',
                                        'ahmedabad',
                                        'bangalore',
                                        'bhubaneswar',
                                        'chandigarh',
                                        'chennai',
                                        'delhi',
                                        'goa',
                                        'hyderabad',
                                        'indore',
                                        'jaipur',
                                        'kerala',
                                        'kolkata',
                                        'lucknow',
                                        'mumbai',
                                        'pune',
                                        'surat',
                                        'jakarta',
                                        'belfast',
                                        'cork',
                                        'derry',
                                        'dublin',
                                        'limerick',
                                        'lisburn',
                                        'waterford',
                                        'haifa',
                                        'jerusalem',
                                        'telaviv',
                                        'westbank',
                                        'bologna',
                                        'calabria',
                                        'firenze',
                                        'forli-cesena',
                                        'genova',
                                        'milano',
                                        'napoli',
                                        'perugia',
                                        'roma',
                                        'sardegna',
                                        'sicilia',
                                        'torino',
                                        'venezia',
                                        'fukuoka',
                                        'hiroshima',
                                        'nagoya',
                                        'okinawa',
                                        'osaka-kobe-kyoto',
                                        'sapporo',
                                        'sendai',
                                        'tokyo',
                                        'seoul',
                                        'malaysia',
                                        'acapulco',
                                        'bajasur',
                                        'chihuahua',
                                        'guadalajara',
                                        'guanajuato',
                                        'hermosillo',
                                        'juarez',
                                        'mazatlan',
                                        'mexicocity',
                                        'monterrey',
                                        'oaxaca',
                                        'puebla',
                                        'pv',
                                        'tijuana',
                                        'veracruz',
                                        'yucatan',
                                        'amsterdam',
                                        'denhaag',
                                        'eindhoven',
                                        'rotterdam',
                                        'utrecht',
                                        'auckland',
                                        'christchurch',
                                        'dunedin',
                                        'wellington',
                                        'managua',
                                        'oslo',
                                        'panama',
                                        'lima',
                                        'warszawa',
                                        'faro-algarve',
                                        'lisboa',
                                        'porto',
                                        'bucuresti',
                                        'moskva',
                                        'sankt-peterburg',
                                        'singapore',
                                        'capetown',
                                        'durban',
                                        'johannesburg',
                                        'pretoria',
                                        'alicante',
                                        'baleares',
                                        'barcelona',
                                        'bilbao',
                                        'cadiz',
                                        'canarias',
                                        'granada',
                                        'madrid',
                                        'malaga',
                                        'palma',
                                        'sevilla',
                                        'valencia',
                                        'stockholm',
                                        'basel',
                                        'bern',
                                        'genf',
                                        'lausanne',
                                        'zurich',
                                        'taipei',
                                        'istanbul',
                                        'dubai',
                                        'aberdeen',
                                        'birminghamuk',
                                        'brighton',
                                        'bristol',
                                        'cambridge',
                                        'devon',
                                        'eastanglia',
                                        'eastmidlands',
                                        'edinburgh',
                                        'glasgow',
                                        'hampshire',
                                        'leeds',
                                        'liverpool',
                                        'london',
                                        'manchester',
                                        'newcastle',
                                        'oxford',
                                        'sheffield',
                                        'wales',
                                        'montevideo',
                                        'caracas'    
                                          );   
    
    //Postings may be accessed from a user account on backpage.com using this email address.
    private $user_email_address = "youremail@address.com"; 
 
 
 
    private $allowReplies_options = array('Show Email','Anonymous','No');

    private $adPlacedBy_options = array('Owner/Property Manager','Agency/Locator Service');
 
    private $feeStatus_options = array('Fee','No Fee');
    
    private $bedroom_options = array('Studio','1','2','3','4','5','6','7','8');
    
    private $roommates_options = array('Male Only','Male Preferred','Female Only','Female Preferred','Male or Female OK');
    
    private $petsAccepted_options = array('Cats Ok','Dogs Ok');
    
    
    public function generate_backpage_feed($data=array()){
        
        $feed  = '';
        
        $feed .= '<?xml version="1.0" encoding="ISO-8859-1"?>';
        $feed .= '<rss version="2.0" xmlns:backpage="http://www.backpage.com/rss/2.0">';
        $feed .= '<channel>';
        $feed .= '<backpage:import user="'.$this->user_email_address.'" site="http://www.backpage.com" />';
    
    
    foreach($data as $key=>$item){

  
        if($site_city = $this->check_backpage_city($item['city'])){
           
            $feed .= '<item>';
            $feed .= '<backpage:site>'.$this->get_backpage_site_url($site_city).'</backpage:site>';
            $feed .= '<backpage:id>'.$item['id'].'</backpage:id>';
            $feed .= '<backpage:category>'.$this->get_backpage_category($item['category']).'</backpage:category>';

            if($item['SourceUrl']){
                $feed .= '<backpage:SourceUrl>'.$item['SourceUrl'].'</backpage:SourceUrl>'; //optional field
            }
            
            if($item['since']){
                $feed .= $this->get_backpage_since($item['since']);  //optional field
            }
            
            $feed .= $this->get_backpage_adPlacedBy($item);
            $feed .= $this->get_backpage_feeStatus($item);
            
            if($item['roommates']){
                $feed .= $this->get_backpage_roommates($item['roommates']); //optional field
            }

            if($item['mapAddress']){
                $feed .= $this->get_backpage_mapAddress($item['mapAddress']); //optional field
            }
            
            if($item['mapZip']){
                $feed .= $this->get_backpage_mapZip($item['mapZip']); //optional field
            }            

            if($item['petsAccepted']){
                $feed .= $this->get_backpage_petsAccepted($item['petsAccepted']); //optional field
            }
            
            
            
            
            
            $feed .= '<backpage:replyEmail>'.$item['replyEmail'].'</backpage:replyEmail>';
            $feed .= '<backpage:allowReplies>'.$this->get_backapge_allowReplies($item['allowReplies']).'</backpage:allowReplies>';
            $feed .= '<backpage:region>'.$item['region'].'</backpage:region>';
            $feed .= '<backpage:country>'.$item['country'].'</backpage:country>';
            $feed .= '<title>'.$this->get_backapge_item_title($item['title']).'</title>';
            $feed .= '<description>'.$this->get_backapge_item_description($item['description']).'</description>';
            $feed .= '</item>';
            
            
        
        }
        
        }
        
        $feed .= '</channel>';
        $feed .= '</rss>';

        return $feed;
    }
    
    private function check_backpage_city($city){
        
        $city = str_replace(' ', '',strtolower($city));
        
        if(in_array($city,(array)$this->backpage_usa_cities)){
            
            return $city;
        }
        elseif(in_array($city,(array)$this->backpage_non_usa_cities)){
         
            return $city;    
        }
        else{
            
            return false;
        }
    }
    
    private function get_backpage_site_url($city){
        
        return 'http://'.$city.'.backpage.com';
    }
    
    private function get_backpage_category($category){
        return $category;
    }
    
    private function get_backapge_item_title($title){
        
        return $this->get_clean_title($this->limit_length(strip_tags($title),100));
    }
    
    private function get_backapge_item_description($description){
        
        return '<![CDATA['.$description.']]>';
    }
    
    private function limit_length($str,$len=200){
        
        if(strlen($str)<=$len){
            return $str;
        }
        else{
            return substr($str,0,$len);
        }
    }
    
    private function optional_backapge_field_data_validate($data){
        return $this->limit_length(strip_tags($data),255);
    }
    
    private function get_clean_title($string){
       $string = str_replace(" ", "-", $string); // Replaces all spaces with hyphens.
       $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    
       return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
    }
    
    private function get_backapge_allowReplies($allowReplies){
     
     if(in_array($allowReplies,(array)$this->allowReplies_options)){
        return $allowReplies;
     }
     else{
        return 'No';
     }
        
    }
    
    private function get_backpage_since($time){
     
     if($time){ 
      return '<backpage:since>'.date("Y-m-d+H:i",$time).'</backpage:since>';  
     }
     else{
      return;  
     }
          
    }
    
    private function get_backpage_adPlacedBy($item){

     if(in_array($item['adPlacedBy'],(array)$this->adPlacedBy_options)){
        return '<backpage:adPlacedBy>'.$item['adPlacedBy'].'</backpage:adPlacedBy>';
     }
     else{
        
        if($item['category']=='ApartmentsForRent'){ // required field for ApartmentsForRent category
             $adPlacedBy = (array)$this->adPlacedBy_options;
            return '<backpage:adPlacedBy>'.$adPlacedBy[0].'</backpage:adPlacedBy>';    
        }
        else{
            return;
        }
        
     }        
        
    }

    
    private function get_backpage_feeStatus($item){

     if(in_array($item['feeStatus'],(array)$this->feeStatus_options)){
        return '<backpage:feeStatus>'.$item['feeStatus'].'</backpage:feeStatus>';
     }
     else{
        
        if($item['category']=='ApartmentsForRent'){ // required field for ApartmentsForRent category
             $feeStatus = (array)$this->feeStatus_options;
            return '<backpage:feeStatus>'.$feeStatus[0].'</backpage:feeStatus>';    
        }
        else{
            return;
        }
        
     }        
        
    }    




    private function get_backpage_roommates($roommates){
     
     if(in_array($roommates,(array)$this->roommates_options)){
        return '<backpage:roommates>'.$roommates.'</backpage:roommates>';  
     }
     else{
        return;
     }
        
    }    

    private function get_backpage_mapAddress($mapAddress){
     
     if($mapAddress){ 
      return '<backpage:mapAddress>'.$mapAddress.'</backpage:mapAddress>';  
     }
     else{
      return;  
     }
          
    }

    private function get_backpage_mapZip($mapZip){
     
     if($mapZip){ 
      return '<backpage:mapZip>'.$mapZip.'</backpage:mapZip>';  
     }
     else{
      return;  
     }
          
    }

    private function get_backpage_petsAccepted($petsAccepted){
        
        if(is_array('petsAccepted')){
            
            foreach($petsAccepted as $value){
                
                if(in_array($value,(array)$this->petsAccepted_options)){
                    $pets .= '<backpage:petsAccepted>'.$value.'</backpage:petsAccepted>';
                }
                
            }
            return $pets;
        }
        else{
            return;
        }
        
    }
    
    private function get_backpage_price($price){
        
        if(is_numeric($price)){
            
        }
        else{
            return;
        }
    }
}