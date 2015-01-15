echo 'Hello World';
  $li='<li onclick="location.href=/idx/mls-81446909-78_pasatiempo_dr_santa_cruz_ca_95060" class="dsidx-listing-container">
	<div class="dsidx-listing">
		<div class="dsidx-media">
			<div class="dsidx-photo">
				<a href="/idx/mls-81446909-78_pasatiempo_dr_santa_cruz_ca_95060"><img title="Photo of 78 Pasatiempo DR, SANTA CRUZ, CA 95060 (MLS # 81446909)" alt="Photo of 78 Pasatiempo DR, SANTA CRUZ, CA 95060 (MLS # 81446909)" src="http://2.idx-pics.diverse-cdn.com/4427/81446909/0-medium.jpg"></a>
				<div class="dsidx-photo-count">25</div>
			</div>
		</div>
		<div class="dsidx-data">
			<div class="dsidx-primary-data">
				<div class="dsidx-address">
					<a href="/idx/mls-81446909-78_pasatiempo_dr_santa_cruz_ca_95060">78 Pasatiempo DR <span>SANTA CRUZ, CA</span></a>
				</div>
				<div class="dsidx-price">$1,599,000</div>
				<div style="clear:right"></div>
			</div>
			<div class="dsidx-secondary-data">
				<div class="dsidx-listing-tag dsidx-tag-open-house">Open House</div>
				<div class="dsidx-secondary-data-line">
					<span>3</span> beds&nbsp;
					<span>2</span> full, <span>1</span> part baths
				</div>
				<div class="dsidx-secondary-data-line dsidx-secondary-data-lot-size">
					<span>2,799</span> sqft &nbsp;
						lot <span>27,443</span> sqft
				</div>

				
				<div class="dsidx-secondary-data-mls-number">
					MLS <span>81446909</span>
				</div>
			</div>
		</div>
	</div>
</li>';

    $li=str_replace('<div class="dsidx-address">','==',$li);
    $li=str_replace('<span>','cityname',$li);
    $li=str_replace('<div class="dsidx-price">','==',$li);
    $li=str_replace('<div style="clear:right"></div>','==',$li);    
    $li=str_replace('<div class="dsidx-secondary-data-line">','==',$li);
    $li=str_replace('<div class="dsidx-secondary-data-line dsidx-secondary-data-lot-size">','==',$li);
    $li=str_replace('<div class="dsidx-secondary-data-mls-number">','==',$li);
    $li=strip_tags($li,"<a>").""; 
    $t=explode('href="',$li);
    $link=explode('">',$t[1]);
    $link=$link[0];
    $li=strip_tags($li);
    $li=explode('==',$li);
    print_r($li);
    /*BEFORE ARRAY_FILTER AND ARRAY_MAP (TRIM)*/
    // Output
    /*
    Array
(
    [0] => 
    
        
            
                
                25
            
        
        
            
                
    [1] => 
                    78 Pasatiempo DR citynameSANTA CRUZ, CA
                
                
    [2] => $1,599,000
                
    [3] => 
            
            
                Open House
                
    [4] => 
                    cityname3 beds&nbsp;
                    cityname2 full, cityname1 part baths
                
                
    [5] => 
                    cityname2,799 sqft &nbsp;
                        lot cityname27,443 sqft
                

                
                
    [6] => 
                    MLS cityname81446909
                
            
        
    

)
  */
    /**AFTER**/
	print_r(array_filter(array_map('trim', $li)));
	/*
	
	Array
(
    [0] => 25
    [1] => 78 Pasatiempo DR citynameSANTA CRUZ, CA
    [2] => $1,599,000
    [3] => Open House
    [4] => cityname3 beds&nbsp;
                    cityname2 full, cityname1 part baths
    [5] => cityname2,799 sqft &nbsp;
                        lot cityname27,443 sqft
    [6] => MLS cityname81446909
)
	
	*/
