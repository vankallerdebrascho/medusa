<header id="head" class="vis">
    <nav id="menu">
        <ul>
        <li class="here">
            <a href="javascript:">framework</a>
            <ul class="sublist">
            <li><a href="javascript:" data-rel="show">about framework</a></li>
            <li class="divider"></li>
            <li>preferences...</li>
            <li class="divider"></li>
            <li>secure empty trash...</li>
            <li class="divider"></li>
            <li>services
                <span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">no services apply</li>
                <li>services preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li><a href="javascript:" onclick="sembunyi_semua()">hide all</a></li>
            <li><a href="javascript:" onclick="tampak_semua()">show all</li>
            <li><a href="javascript:" onclick="tutup_semua()">close all</a></li>
            </ul>
        </li>

 <?php
baca_dir('Program Files/',7);

function baca_dir($dir,$i){
	$space = str_repeat(' ', $i);
	foreach(glob($dir.'*', GLOB_ONLYDIR) as $result){
		echo $space . " <li><a href='javascript:'>" . basename($result) . "</a>\n";
		cari_html($result, $i+5);
		baca_dir($result. '/*',$i+5);
		echo $space . " </li>\n" ;
	}
}

function cari_html($dir,$x){
	$space = str_repeat(' ', $x);

	echo $space . "<ul class='sublist'>\n";
		foreach(scandir($dir) as $result){
			if ( substr_count ($result, ".frm") ) {
		    	echo $space . '<li><a href="javascript:" onclick="exe(\'' . $dir . '/' . $result .'\')">'. substr($result, 0, -4) ."</a></li>\n";
			}
            if ( substr_count ($result, ".html") ) {
                echo $space . '<li><a href="javascript:" onclick="exe(\'' . $dir . '/' . $result .'\')">'. substr($result, 0, -5) ."</a></li>\n";
            }
		}
        
	echo $space . "</ul>\n";
}



?>







		<li>
        	<a href="javascript:">window</a>
         	<ul class="sublist">
            <li class="disable">minimize</li>
            <li class="disable">zoom</li>
            <li class="disable">cycle through windows</li>
            <li class="divider"></li>
            <li><a href="javascript:" onclick="return cycle_wallpaper()">cycle wallpaper</a></li>
            <li>bring all to front</li>
            </ul>   
        </li>
        <li><a href="javascript:">help</a></li>
        </ul>
	</nav>
    <nav id="menu-dx">
    	<ul>
        <li class="wireless">
        	<a href="javascript:">wireless</a>
        </li>
        <li class="time">
        	<ul>
            <li id="DateAbbr"> </li>
            <li class="hour"> </li>
    		<li class="point">:</li>
    		<li class="mins"> </li>
            </ul>
        </li>
        <li class="username">
        	<a href="javascript:">login</a>
        </li>
		</ul>
    </nav>
</header>