<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>isolated svg gradient mask test</title>

	<style type="text/css">
		html, body {
			padding: 0;
			margin: 0;
		}
		body {
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background: darkgrey;
			overflow: hidden;
		}
		.container {
			width: 1440px;
			height: 900px;
			position: relative;
			overflow: hidden;
			filter: saturate(120%) contrast(150%);
		}
		.stack {
			mix-blend-mode: lighten;
		}
		svg {
			position: absolute;
			top: 0;
			left: 0;
			/* Fixed w and h as container, to make it easier to demo, independently of resolution */
			width: 1440px; 
			height: 900px;
			mix-blend-mode: darken;
		}
		.gradient {
			width: 200%;
			height: 200%;
			position: absolute;
			top: -50%;
			left: -50%;
		}
		.gradient.one {
			background: linear-gradient(90deg, rgba(2,0,36,1) 36%, rgba(26,150,255,1) 55%, rgba(255,0,215,1) 62%, rgba(0,0,0,1) 85%);
			animation: rotateW 3000ms infinite linear;
		}

		.gradient.two {
			background: linear-gradient(90deg, rgba(2,0,36,1) 36%, rgba(255,141,26,1) 55%, rgba(116,195,45,1) 62%, rgba(0,0,0,1) 85%);
			animation: rotateCW 3000ms infinite linear;
		}

		/* Animations */
		@keyframes rotateW {
			0% {
				transform: rotate(0deg);
			}
			100% {
				transform: rotate(360deg);
			}
		}
		
		@keyframes rotateCW {
			0% {
				transform: rotate(360deg);
			}
			100% {
				transform: rotate(0deg);
			}
		}
	</style>

</head>

<body>
	<div class="container">

		<div class="stack two">
			<div class="gradient two"></div>
			<svg class="svg two" viewbox="0 0 1440 900">
				<rect x="0" y="0" width="1440" height="900" style="fill:black;stroke: none;" />
				<g xmlns="http://www.w3.org/2000/svg">
					<line X1="153.59" y1="-330.24" x2="1997.83" y2="614.99" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line X1="122.01" y1="-189.91" x2="1996.55" y2="687.64" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="1090.42" y1="-49.58" x2="1995.28" y2="760.29" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="1058.84" y1="90.76" x2="1994" y2="832.95" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="1027.26" y1="231.09" x2="1992.72" y2="905.6" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="995.67" y1="371.42" x2="1991.45" y2="978.26" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="964.09" y1="511.75" x2="1990.17" y2="1050.91" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="932.5" y1="652.08" x2="1988.89" y2="1123.57" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="900.92" y1="792.41" x2="1987.62" y2="1196.22" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="869.34" y1="932.74" x2="1986.34" y2="1268.88" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="837.75" y1="1073.08" x2="1985.06" y2="1341.53" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line X1="153.59" y1="-330.24" x2="1997.83" y2="614.99" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line X1="122.01" y1="-189.91" x2="1996.55" y2="687.64" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="1090.42" y1="-49.58" x2="1995.28" y2="760.29" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="1058.84" y1="90.76" x2="1994" y2="832.95" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="1027.26" y1="231.09" x2="1992.72" y2="905.6" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="995.67" y1="371.42" x2="1991.45" y2="978.26" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="964.09" y1="511.75" x2="1990.17" y2="1050.91" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="932.5" y1="652.08" x2="1988.89" y2="1123.57" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="900.92" y1="792.41" x2="1987.62" y2="1196.22" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="869.34" y1="932.74" x2="1986.34" y2="1268.88" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line x1="837.75" y1="1073.08" x2="1985.06" y2="1341.53" style="fill: none;stroke: #ffd600;stroke-width: 1px"/>
					<line X1="937.49" y1="6.41" x2="-145.41" y2="15.9" style="fill: none;stroke: #18cc2e;"/>
					<line X1="937.99" y1="43.67" x2="-138.94" y2="62.54" style="fill: none;stroke: #24cc2c;"/>
					<line X1="938.48" y1="80.93" x2="-132.47" y2="109.18" style="fill: none;stroke: #31cc29;"/>
					<line X1="938.98" y1="118.19" x2="-126" y2="155.81" style="fill: none;stroke: #3dcc27;"/>
					<line X1="939.47" y1="155.45" x2="-119.53" y2="202.45" style="fill: none;stroke: #49cc24;"/>
					<line X1="939.97" y1="192.71" x2="-113.06" y2="249.09" style="fill: none;stroke: #5c2;"/>
					<line X1="940.46" y1="229.97" x2="-106.59" y2="295.73" style="fill: none;stroke: #61cc20;"/>
					<line X1="940.96" y1="267.22" x2="-100.12" y2="342.36" style="fill: none;stroke: #6dcc1d;"/>
					<line X1="941.45" y1="504.48" x2="-93.65" y2="389" style="fill: none;stroke: #79cc1b;"/>
					<line X1="941.95" y1="541.74" x2="-87.18" y2="435.64" style="fill: none;stroke: #86cc18;"/>
					<line X1="942.45" y1="579" x2="-80.71" y2="482.28" style="fill: none;stroke: #92cc16;"/>
					<line X1="942.94" y1="616.26" x2="-74.24" y2="528.91" style="fill: none;stroke: #9ecc13;"/>
					<line X1="943.44" y1="653.52" x2="-67.77" y2="575.55" style="fill: none;stroke: #ac1;"/>
					<line X1="943.93" y1="690.78" x2="-61.3" y2="622.19" style="fill: none;stroke: #b6cc0f;"/>
					<line X1="944.43" y1="728.04" x2="-54.84" y2="668.83" style="fill: none;stroke: #c2cc0c;"/>
					<line X1="944.92" y1="765.3" x2="-48.37" y2="715.46" style="fill: none;stroke: #cecc0a;"/>
					<line X1="945.42" y1="702.55" x2="-41.9" y2="762.1" style="fill: none;stroke: #dbcc07;"/>
					<line X1="945.91" y1="839.81" x2="-35.43" y2="808.74" style="fill: none;stroke: #e7cc05;"/>
					<line X1="946.41" y1="977.07" x2="-28.96" y2="855.38" style="fill: none;stroke: #f3cc02;"/>
					<line X1="946.9" y1="914.33" x2="-22.49" y2="902.02" style="fill: none;stroke: #fc0;"/>
				</g>
			</svg>
		</div>

		<div class="stack one">
			<div class="gradient one"></div>
			<svg class="svg one" viewbox="0 0 1440 900">
				<rect x="0" y="0" width="1440" height="900" style="fill:black;stroke: none;" />
				<g xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2">
					<line X1="437.99" y1="43.67" x2="-138.94" y2="62.54" style="fill: none;stroke: #24cc2c;"/>
					<line X1="439.97" y1="192.71" x2="-113.06" y2="249.09" style="fill: none;stroke: #5c2;"/>
					<line X1="443.93" y1="490.78" x2="-61.3" y2="622.19" style="fill: none;stroke: #b6cc0f;"/>
					<line X1="444.92" y1="565.3" x2="-48.37" y2="715.46" style="fill: none;stroke: #cecc0a;"/>
					<line X1="446.41" y1="677.07" x2="-28.96" y2="855.38" style="fill: none;stroke: #f3cc02;"/>
					<line x1="932.5" y1="652.08" x2="1988.89" y2="1123.57" style="fill: none;stroke: #30f;"/>
					<line x1="1971.2" y1="-133.54" x2="1030.91" y2="472.6" style="fill: none;stroke: #18d100;"/>
					<line x1="1953.29" y1="273.29" x2="1090.67" y2="703.23" style="fill: none;stroke: #79e400;"/>
					<line x1="1944.33" y1="476.7" x2="1120.56" y2="818.55" style="fill: none;stroke: #ae0;"/>
					<line X1="439.47" y1="155.45" x2="-119.53" y2="202.45" style="fill: none;stroke: #49cc24;"/>
					<line x1="-156.17" y1="256.45" x2="1612.51" y2="535.22" style="fill: none;stroke: #30f;"/>
					<line x1="-168.52" y1="401.02" x2="1612.51" y2="739.86" style="fill: none;stroke: #30f;"/>
					<line x1="-180.86" y1="545.59" x2="1612.51" y2="944.5" style="fill: none;stroke: #30f;"/>
					<line x1="1153.59" y1="-330.24" x2="1997.83" y2="614.99" style="fill: none;stroke: #30f;"/>
					<line x1="1058.84" y1="90.76" x2="1994" y2="832.95" style="fill: none;stroke: #30f;"/>
					<line x1="964.09" y1="511.75" x2="1990.17" y2="1050.91" style="fill: none;stroke: #30f;"/>
					<line x1="-125.31" y1="-104.96" x2="1612.51" y2="23.62" style="fill: none;stroke: #30f;"/>
					<line x1="-131.48" y1="-32.68" x2="1612.51" y2="125.94" style="fill: none;stroke: #30f;"/>
					<line x1="-137.66" y1="39.6" x2="1612.51" y2="228.26" style="fill: none;stroke: #30f;"/>
					<line x1="-143.83" y1="111.89" x2="1612.51" y2="330.58" style="fill: none;stroke: #30f;"/>
					<line x1="-150" y1="184.17" x2="1612.51" y2="432.9" style="fill: none;stroke: #30f;"/>
					<line x1="-162.35" y1="328.74" x2="1612.51" y2="637.54" style="fill: none;stroke: #30f;"/>
					<line x1="-174.69" y1="473.31" x2="1612.51" y2="842.18" style="fill: none;stroke: #30f;"/>
					<line x1="-187.04" y1="617.87" x2="1612.51" y2="1046.82" style="fill: none;stroke: #30f;"/>
					<line x1="-195.78" y1="713.82" x2="834.1" y2="-480.77" style="fill: none;stroke: #666;"/>
					<line x1="-193.24" y1="736.76" x2="872.48" y2="-395.65" style="fill: none;stroke: #666;"/>
					<line x1="-188.15" y1="782.63" x2="949.25" y2="-225.41" style="fill: none;stroke: #666;"/>
					<line x1="-180.53" y1="851.44" x2="1064.4" y2="29.96" style="fill: none;stroke: #666;"/>
					<line x1="-175.44" y1="897.32" x2="1141.17" y2="200.21" style="fill: none;stroke: #666;"/>
					<line x1="-170.36" y1="943.19" x2="1217.94" y2="370.45" style="fill: none;stroke: #666;"/>
					<line x1="-167.82" y1="966.13" x2="1256.32" y2="455.57" style="fill: none;stroke: #666;"/>
					<line x1="-152.57" y1="1103.75" x2="1486.62" y2="966.31" style="fill: none;stroke: #666;"/>
					<line x1="-150.02" y1="1126.69" x2="1525.01" y2="1051.43" style="fill: none;stroke: #666;"/>
					<line X1="437.49" y1="6.41" x2="-145.41" y2="15.9" style="fill: none;stroke: #18cc2e;"/>
					<line X1="438.48" y1="80.93" x2="-132.47" y2="109.18" style="fill: none;stroke: #31cc29;"/>
					<line X1="438.98" y1="118.19" x2="-126" y2="155.81" style="fill: none;stroke: #3dcc27;"/>
					<line X1="440.46" y1="229.97" x2="-106.59" y2="295.73" style="fill: none;stroke: #61cc20;"/>
					<line X1="441.45" y1="304.48" x2="-93.65" y2="389" style="fill: none;stroke: #79cc1b;"/>
					<line X1="442.45" y1="379" x2="-80.71" y2="482.28" style="fill: none;stroke: #92cc16;"/>
					<line X1="443.44" y1="453.52" x2="-67.77" y2="575.55" style="fill: none;stroke: #ac1;"/>
					<line X1="444.43" y1="528.04" x2="-54.84" y2="668.83" style="fill: none;stroke: #c2cc0c;"/>
					<line X1="445.91" y1="639.81" x2="-35.43" y2="808.74" style="fill: none;stroke: #e7cc05;"/>
					<line X1="446.9" y1="714.33" x2="-22.49" y2="902.02" style="fill: none;stroke: #fc0;"/>
					<line x1="1122.01" y1="-189.91" x2="1996.55" y2="687.64" style="fill: none;stroke: #30f;"/>
					<line x1="1090.42" y1="-49.58" x2="1995.28" y2="760.29" style="fill: none;stroke: #30f;"/>
					<line x1="1027.26" y1="231.09" x2="1992.72" y2="905.6" style="fill: none;stroke: #30f;"/>
					<line x1="995.67" y1="371.42" x2="1991.45" y2="978.26" style="fill: none;stroke: #30f;"/>
					<line x1="900.92" y1="792.41" x2="1987.62" y2="1196.22" style="fill: none;stroke: #30f;"/>
					<line x1="869.34" y1="932.74" x2="1986.34" y2="1268.88" style="fill: none;stroke: #30f;"/>
					<line x1="837.75" y1="1073.08" x2="1985.06" y2="1341.53" style="fill: none;stroke: #30f;"/>

					<line x1="1973.44" y1="-184.39" x2="1023.44" y2="443.77" style="fill: none;stroke: #0cce00;"/>
					<line x1="1968.96" y1="-82.68" x2="1038.38" y2="501.43" style="fill: none;stroke: #24d300;"/>
					<line x1="1966.72" y1="-31.83" x2="1045.85" y2="530.26" style="fill: none;stroke: #31d600;"/>
					<line x1="1962.24" y1="69.88" x2="1060.79" y2="587.92" style="fill: none;stroke: #49db00;"/>
					<line x1="1951.05" y1="324.14" x2="1098.14" y2="732.06" style="fill: none;stroke: #86e700;"/>
					<line x1="1948.81" y1="374.99" x2="1105.62" y2="760.89" style="fill: none;stroke: #92e900;"/>
					<line x1="1946.57" y1="425.85" x2="1113.09" y2="789.72" style="fill: none;stroke: #9eec00;"/>
					<line x1="1942.09" y1="527.55" x2="1128.03" y2="847.38" style="fill: none;stroke: #b6f000;"/>
					<line x1="1939.85" y1="578.4" x2="1135.5" y2="876.21" style="fill: none;stroke: #c2f300;"/>
					<line x1="1935.37" y1="680.11" x2="1150.44" y2="933.87" style="fill: none;stroke: #dbf800;"/>
					<line x1="1933.13" y1="730.96" x2="1157.91" y2="962.7" style="fill: none;stroke: #e7fa00;"/>
					<line x1="1930.89" y1="781.82" x2="1165.38" y2="991.52" style="fill: none;stroke: #f3fd00;"/>
					<line X1="441.95" y1="341.74" x2="-87.18" y2="435.64" style="fill: none;stroke: #86cc18;"/>
					<rect x="-0.08" y="-0.37" width="1400.11" height="1080.37" style="fill: none"/>
					<line x1="1957.76" y1="171.58" x2="1075.73" y2="645.57" style="fill: none;stroke: #61df00;"/>
					<line x1="1937.61" y1="629.26" x2="1142.97" y2="905.04" style="fill: none;stroke: #cef500;"/>
					<line X1="440.96" y1="267.22" x2="-100.12" y2="342.36" style="fill: none;stroke: #6dcc1d;"/>
					<line X1="442.94" y1="416.26" x2="-74.24" y2="528.91" style="fill: none;stroke: #9ecc13;"/>
					<line x1="1975.68" y1="-235.24" x2="1015.97" y2="414.94" style="fill: none;stroke: #0c0;"/>
					<line x1="1964.48" y1="19.02" x2="1053.32" y2="559.09" style="fill: none;stroke: #3dd800;"/>
					<line x1="1960" y1="120.73" x2="1068.26" y2="616.74" style="fill: none;stroke: #5d0;"/>
					<line x1="1955.52" y1="222.43" x2="1083.2" y2="674.4" style="fill: none;stroke: #6de200;"/>
					<line x1="1928.65" y1="832.67" x2="1172.85" y2="1020.35" style="fill: none;stroke: #ff0;"/>
					<line X1="445.42" y1="602.55" x2="-41.9" y2="762.1" style="fill: none;stroke: #dbcc07;"/>
				</g>	
			</svg>
		</div>

	</div>
	<script>
		
	</script>
</body>
</html>