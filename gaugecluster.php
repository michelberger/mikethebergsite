<?php

$page_title = 'Gauge Cluster - Michel Bergeron';
$page_keys  = 'project, gauge, instrument, cluster, raspberry-pi';
$page_desc  = 'Page describing my instrument cluster project idea!';

?>

<section id="main-section">
	<article>
		<h1>Raspberry Pi Gauge Cluster</h1>
		<h2>(project currently unnamed)</h2>
		<div class="article-contents">
			<p>If there's one thing I don't like about most cars, it's how the engineers chose to set up the array of gauges
			that we, the drivers, are forced to look at every time we get behind the wheel. Usually functional enough, but not
			typically appealing.</p>
			<p>You've probably looked at your car's gauge cluster and thought, "Wow, I wish this didn't look so...blegh."
			How about a fully customizable, opensource software system for the
			<a href="http://raspberrypi.org/">Raspberry Pi</a>, a $35, low-power, credit card-sized, ARM-Linux based microcontroller
			with impressive graphics power, using the <a href="http://openframeworks.cc">OpenFrameworks</a> C++ toolkit?</p>
			<p>I've been taught many-a-time through my academic experience to never bite off more than you can chew...especially when
			it comes to programming! This project involves so many stages and a HUGE learning-curve (with some electrical engineering fun),
			which means it will definitely take a while to complete. It is expected to provide a fully customizable graphics interface for nearly
			any make or model of car (provided you can install it without damaging anything), a GUI for customizing your gauge layout, and a
			big list of features to help make your gauge cluster exactly what you want it to be! This is a tall order for one student, so expect 
			progress to move along at a fairly relaxed pace.</p>
			<p>Details about how it will connect to your car are still up in the air. It will either connect directly to your instrument
			cluster's wiring harness (hence the mention of electrical engineering), or I will figure out a way to connect it via
			your vehicle's OBD-II data-transfer port. Maybe even a mix of the two! Either way will have its gains and drawbacks.
			For example, connecting it directly to your old instrument cluster's wiring harness may give you:</p>
			<table>
				<thead>
					<td>The Good:</td>
					<td>The Bad:</td>
				</thead>
				<!-- <ul> contained within rows -->
				<tr>
					<td>
						<ul class="normal-list">
							<li>The quickest readouts (limited to how often the RasPi can perform sensor polling)</li>
							<li>The smoothest gauge movements</li>
							<li>The most amount of customizable information (SES, SRS, ABS, etc.)</li>
							<li>The best possible integration</li>
						</ul>
					</td>
					<td>
						<ul class="normal-list">
							<li>A LOT of custom wiring will need to be done</li>
							<li>Limited to what the old instrument cluster could read</li>
							<li>A permanently disconnected instrument cluster</li>
							<li>Potential damage to your vehicle's wiring harness (this part is on YOU!)</li>
							<li>Possibility for odometer tampering</li>
							<li>Warning lights on some newer cars, triggered by removing factory instrument cluster</li>
							<li>Uninterperetable data streams accross some wires</li>
						</ul>
					</td>
				</tr>
			</table>
			<p><br>Connecting it to your vehicle's supplied OBD-II port may give you:</p>
			<table>
				<thead>
					<td>The Good:</td>
					<td>The Bad:</td>
				</thead>
				<tr>
					<td>
						<ul class="normal-list">
							<li>Potential for simple Plug-and-Play compatibility</li>
							<li>Potential for a wide array of input parameters</li>
							<li>Possible odometer recovery (however, this is unlikely, especially on older cars)</li>
							<li>Possibility for other OBD-II related features (diagnostics, etc.) built in</li>
						</ul>
					</td>
					<td>
						<ul class="normal-list">
							<li>May not be compatible with some OBD-II compliant vehicles</li>
							<li>You need to purchase a separate OBD-II connection dongle</li>
							<li>Incompatibilities with older vehicles using OBD and OBD-I standard</li>
							<li>Display lag and other gittery lame-ness</li>
							<li>Inability to read SRS and ABS fault state on most (if not all) vehicles</li>
						</ul>
					</td>
				</tr>
			</table>
			<p>As things stand right now, I plan on integrating most features with the OBD-II system in your car, primarily for slower-moving
			gauges (fuel level, temperatures, etc.) and other text-based displays or information that can be achieved through calculations.
			For other displays that require quick updates (engine RPM, speed, turbo pressure, etc.), and other typical dash lights (SES, SRS, ABS,
			TCS, Lambda, etc.) that are illuminated symply by giving power to a light.</p>
			<br><br>
			<p>Note: Installing this gauge cluster may yield legal ramifications, as there is no sure-fire way to synchronize
			the associated display that will replace your gauge cluster with the car's actual odometer.</p>
			<p>Photos, screenshots, and code coming soon!!</p>
			<p>This system, once ready for testing (alpha, beta, etc.), will be tested on my own 2006 Nissan Altima.</p>
		</div>
	</article>
</section>