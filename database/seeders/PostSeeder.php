<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'How to Choose the Right Generator for Your Business',
                'slug' => 'how-to-choose-the-right-generator-for-your-business',
                'body' => '<p>Selecting the right generator for your business is a critical decision that can impact your operations for years to come. Here are the key factors to consider:</p>

<h3>1. Power Requirements</h3>
<p>Calculate your total power needs by listing all essential equipment and their power consumption. Add 20-30% buffer for startup surge and future expansion.</p>

<h3>2. Runtime Expectations</h3>
<p>Consider how long you need the generator to run during outages. This will determine fuel tank size and engine durability requirements.</p>

<h3>3. Space and Installation</h3>
<p>Evaluate your available space for installation, considering ventilation, fuel storage, and maintenance access requirements.</p>

<h3>4. Noise Considerations</h3>
<p>If located near residential areas or offices, consider silent or soundproofed models to minimize noise disruption.</p>

<h3>5. Budget and Total Cost of Ownership</h3>
<p>Factor in not just the initial purchase price, but also installation, fuel costs, maintenance, and expected lifespan.</p>',
                'image_alt_text' => 'Business owner reviewing generator options',
            ],
            [
                'title' => 'Generator Maintenance: Essential Tips for Longevity',
                'slug' => 'generator-maintenance-essential-tips-for-longevity',
                'body' => '<p>Regular maintenance is crucial for ensuring your generator operates reliably when you need it most. Follow these essential maintenance tips:</p>

<h3>Weekly Checks</h3>
<ul>
<li>Visual inspection for leaks or damage</li>
<li>Check coolant and oil levels</li>
<li>Test run for 15-30 minutes under load</li>
<li>Verify battery charge levels</li>
</ul>

<h3>Monthly Maintenance</h3>
<ul>
<li>Clean or replace air filters</li>
<li>Check and tighten all connections</li>
<li>Inspect belts and hoses for wear</li>
<li>Test automatic transfer switch operation</li>
</ul>

<h3>Annual Service</h3>
<ul>
<li>Complete oil and filter change</li>
<li>Replace fuel filters</li>
<li>Clean cooling system</li>
<li>Load bank testing</li>
<li>Professional inspection</li>
</ul>

<p>Following these guidelines will help ensure your generator is ready to perform when power fails.</p>',
                'image_alt_text' => 'Technician performing generator maintenance',
            ],
            [
                'title' => 'Understanding Generator Power Ratings: kVA vs kW',
                'slug' => 'understanding-generator-power-ratings-kva-vs-kw',
                'body' => '<p>When shopping for a generator, you\'ll encounter two power ratings: kVA and kW. Understanding the difference is essential for selecting the right unit.</p>

<h3>What is kVA?</h3>
<p>Kilovolt-amperes (kVA) represents apparent power - the total power the generator can supply, including both active and reactive power components.</p>

<h3>What is kW?</h3>
<p>Kilowatts (kW) represents real or active power - the actual power that does useful work and is consumed by your equipment.</p>

<h3>The Relationship</h3>
<p>The relationship between kVA and kW is determined by power factor (PF):</p>
<p><strong>kW = kVA × Power Factor</strong></p>

<h3>Typical Power Factors</h3>
<ul>
<li>Resistive loads (heaters): PF = 1.0</li>
<li>Inductive loads (motors): PF = 0.8-0.9</li>
<li>Mixed commercial loads: PF = 0.85-0.9</li>
</ul>

<h3>Example</h3>
<p>A 100 kVA generator with 0.8 power factor delivers 80 kW of real power:</p>
<p>100 kVA × 0.8 = 80 kW</p>

<h3>Which Rating to Use?</h3>
<p>Always size your generator based on kW requirements, but verify the kVA rating can handle your total load including reactive components.</p>',
                'image_alt_text' => 'Generator power rating comparison chart',
            ],
            [
                'title' => 'The Benefits of Hybrid Solar-Diesel Generators',
                'slug' => 'the-benefits-of-hybrid-solar-diesel-generators',
                'body' => '<p>Hybrid generators that combine solar power with diesel backup are revolutionizing off-grid and backup power solutions. Here\'s why they\'re gaining popularity:</p>

<h3>1. Significant Fuel Savings</h3>
<p>Solar panels provide power during daylight hours, reducing diesel consumption by 50-70%. This translates to substantial cost savings over the system\'s lifetime.</p>

<h3>2. Environmental Benefits</h3>
<p>Reduced diesel usage means lower carbon emissions, noise pollution, and environmental impact. Perfect for eco-conscious businesses and locations with strict environmental regulations.</p>

<h3>3. Extended Runtime</h3>
<p>Battery storage systems allow the generator to run longer between fuel fills, ideal for remote locations or extended power outages.</p>

<h3>4. Smart Power Management</h3>
<p>Advanced control systems automatically optimize power source selection based on solar availability, battery charge levels, and load demand.</p>

<h3>5. Lower Maintenance Costs</h3>
<p>Reduced diesel engine runtime means less wear and tear, resulting in lower maintenance costs and extended equipment life.</p>

<h3>6. Energy Independence</h3>
<p>Hybrid systems provide greater energy security and independence from fuel supply chains and price fluctuations.</p>

<h3>Ideal Applications</h3>
<ul>
<li>Remote telecommunications sites</li>
<li>Off-grid commercial facilities</li>
<li>Construction sites</li>
<li>Agricultural operations</li>
<li>Island communities</li>
</ul>',
                'image_alt_text' => 'Hybrid solar-diesel generator installation',
            ],
            [
                'title' => 'Emergency Generator Compliance: What You Need to Know',
                'slug' => 'emergency-generator-compliance-what-you-need-to-know',
                'body' => '<p>Emergency generators for critical facilities must comply with various standards and regulations. Understanding these requirements is essential for healthcare facilities, data centers, and emergency services.</p>

<h3>NFPA 110 Standard</h3>
<p>The National Fire Protection Association Standard 110 covers emergency power supply systems. Key requirements include:</p>
<ul>
<li>Level 1: 10-second startup for critical life safety systems</li>
<li>Level 2: Other applications with less stringent requirements</li>
<li>Weekly exercise under load</li>
<li>Monthly maintenance inspections</li>
<li>Annual load bank testing</li>
</ul>

<h3>Healthcare Facilities</h3>
<p>Hospitals and healthcare facilities must comply with:</p>
<ul>
<li>NFPA 99: Health Care Facilities Code</li>
<li>Joint Commission requirements</li>
<li>CMS regulations</li>
<li>96-hour fuel supply on-site</li>
<li>Separate essential electrical system</li>
</ul>

<h3>Data Centers</h3>
<p>Data center emergency power systems typically follow:</p>
<ul>
<li>Tier-based reliability standards</li>
<li>N+1 or 2N redundancy</li>
<li>Continuous monitoring</li>
<li>Regular testing protocols</li>
</ul>

<h3>Maintenance Documentation</h3>
<p>Proper documentation is crucial:</p>
<ul>
<li>Test and exercise logs</li>
<li>Maintenance records</li>
<li>Fuel quality testing</li>
<li>Compliance reports</li>
</ul>

<p>Partnering with qualified service providers ensures your emergency generator system meets all applicable codes and regulations.</p>',
                'image_alt_text' => 'Emergency generator compliance checklist',
            ],
            [
                'title' => '5 Signs Your Generator Needs Professional Service',
                'slug' => '5-signs-your-generator-needs-professional-service',
                'body' => '<p>Don\'t wait for complete failure. Watch for these warning signs that indicate your generator needs professional attention:</p>

<h3>1. Difficulty Starting</h3>
<p>If your generator struggles to start, takes multiple attempts, or fails to start altogether, it could indicate battery issues, fuel system problems, or starter motor failure.</p>

<h3>2. Unusual Noises</h3>
<p>Knocking, grinding, or rattling sounds are never normal. These noises could signal:</p>
<ul>
<li>Bearing wear</li>
<li>Loose components</li>
<li>Engine damage</li>
<li>Cooling fan issues</li>
</ul>

<h3>3. Excessive Smoke or Exhaust</h3>
<p>Different smoke colors indicate different problems:</p>
<ul>
<li><strong>Black smoke:</strong> Rich fuel mixture or dirty air filter</li>
<li><strong>White smoke:</strong> Coolant leak or cold engine</li>
<li><strong>Blue smoke:</strong> Oil burning, worn piston rings</li>
</ul>

<h3>4. Fluid Leaks</h3>
<p>Any fluid leakage requires immediate attention:</p>
<ul>
<li>Oil leaks indicate seal or gasket failure</li>
<li>Coolant leaks can cause overheating</li>
<li>Fuel leaks are safety hazards</li>
</ul>

<h3>5. Power Quality Issues</h3>
<p>If connected equipment experiences problems:</p>
<ul>
<li>Voltage fluctuations</li>
<li>Frequency instability</li>
<li>Poor power quality</li>
<li>Intermittent operation</li>
</ul>

<h3>Don\'t Ignore Warning Signs</h3>
<p>Early intervention can prevent costly repairs and ensure your generator is ready when you need it most. Schedule professional service at the first sign of trouble.</p>',
                'image_alt_text' => 'Generator service technician inspection',
            ],
            [
                'title' => 'Sizing Your Generator: A Complete Guide',
                'slug' => 'sizing-your-generator-a-complete-guide',
                'body' => '<p>Proper generator sizing is critical for reliable operation and cost-effectiveness. An undersized unit won\'t power your loads, while an oversized one wastes money and efficiency.</p>

<h3>Step 1: List All Loads</h3>
<p>Create a comprehensive list of equipment that needs backup power:</p>
<ul>
<li>HVAC systems</li>
<li>Lighting</li>
<li>Computers and servers</li>
<li>Manufacturing equipment</li>
<li>Refrigeration</li>
<li>Essential safety systems</li>
</ul>

<h3>Step 2: Calculate Running Watts</h3>
<p>For each item, determine the running wattage. This information is usually on the equipment nameplate or in the manual.</p>

<h3>Step 3: Determine Starting Watts</h3>
<p>Motors and compressors require 2-3x running watts for startup. This is called inrush or starting current.</p>

<h3>Step 4: Calculate Total Load</h3>
<p>Add up all running watts, then add the highest single motor starting requirement.</p>

<h3>Step 5: Apply Safety Factor</h3>
<p>Add 20-30% safety margin for:</p>
<ul>
<li>Future expansion</li>
<li>Unexpected loads</li>
<li>Efficiency optimization</li>
</ul>

<h3>Example Calculation</h3>
<p><strong>Running loads:</strong> 45,000W<br>
<strong>Largest motor starting:</strong> 15,000W<br>
<strong>Subtotal:</strong> 60,000W<br>
<strong>Safety factor (25%):</strong> 15,000W<br>
<strong>Total required:</strong> 75,000W (75kW or ~94kVA @ 0.8 PF)</p>

<p><strong>Recommended:</strong> 100 kVA generator</p>

<h3>Professional Assessment</h3>
<p>For complex facilities, consider hiring a professional to perform a detailed load analysis and recommend the optimal generator size.</p>',
                'image_alt_text' => 'Generator sizing calculation worksheet',
            ],
            [
                'title' => 'Generator Fuel Management Best Practices',
                'slug' => 'generator-fuel-management-best-practices',
                'body' => '<p>Proper fuel management is essential for generator reliability. Poor fuel quality is one of the leading causes of generator failure during emergencies.</p>

<h3>Fuel Storage Guidelines</h3>
<h4>Diesel Fuel</h4>
<ul>
<li><strong>Storage life:</strong> 6-12 months untreated</li>
<li><strong>Treatment:</strong> Use biocides and stabilizers</li>
<li><strong>Tank material:</strong> Steel or approved polymer</li>
<li><strong>Location:</strong> Cool, dry, protected from sunlight</li>
</ul>

<h4>Natural Gas</h4>
<ul>
<li>Nearly unlimited storage life</li>
<li>No degradation issues</li>
<li>Requires utility connection or LPG tanks</li>
</ul>

<h3>Fuel Testing</h3>
<p>Test stored diesel fuel annually for:</p>
<ul>
<li>Water contamination</li>
<li>Microbial growth</li>
<li>Sediment levels</li>
<li>Fuel degradation</li>
</ul>

<h3>Fuel Polishing</h3>
<p>For long-term storage, implement fuel polishing:</p>
<ul>
<li>Circulate fuel through filters</li>
<li>Remove water and contaminants</li>
<li>Extend fuel life to 2-3 years</li>
</ul>

<h3>Tank Maintenance</h3>
<p>Regular tank maintenance includes:</p>
<ul>
<li>Annual inspection for leaks</li>
<li>Water detection and removal</li>
<li>Tank cleaning every 5 years</li>
<li>Fuel additive treatment</li>
</ul>

<h3>Fuel Delivery Planning</h3>
<p>For extended outages:</p>
<ul>
<li>Pre-arrange fuel delivery contracts</li>
<li>Maintain minimum 48-hour fuel supply</li>
<li>Know your consumption rate per hour</li>
<li>Have emergency fuel supplier contacts</li>
</ul>

<h3>Environmental Compliance</h3>
<p>Ensure your fuel storage meets:</p>
<ul>
<li>EPA spill prevention requirements</li>
<li>Local environmental regulations</li>
<li>Secondary containment rules</li>
<li>Proper labeling and signage</li>
</ul>',
                'image_alt_text' => 'Diesel fuel storage tank and management system',
            ],
            [
                'title' => 'Parallel Generator Operation: Benefits and Considerations',
                'slug' => 'parallel-generator-operation-benefits-and-considerations',
                'body' => '<p>Parallel generator operation involves running multiple generators together to share a common load. This configuration offers several advantages for large facilities.</p>

<h3>Benefits of Parallel Operation</h3>

<h4>1. Scalability</h4>
<p>Add capacity as needed by bringing additional units online, rather than replacing entire systems.</p>

<h4>2. Redundancy</h4>
<p>If one unit fails, others continue operating, ensuring continuous power availability.</p>

<h4>3. Efficiency</h4>
<p>Run only the number of generators needed for current load, optimizing fuel efficiency and reducing wear.</p>

<h4>4. Maintenance Flexibility</h4>
<p>Service individual units without shutting down the entire system.</p>

<h4>5. Load Management</h4>
<p>Distribute load evenly across multiple generators for balanced operation.</p>

<h3>Technical Requirements</h3>

<h4>Synchronization System</h4>
<p>Generators must be synchronized for:</p>
<ul>
<li>Voltage magnitude</li>
<li>Frequency</li>
<li>Phase angle</li>
<li>Phase sequence</li>
</ul>

<h4>Load Sharing Controls</h4>
<p>Advanced controls ensure:</p>
<ul>
<li>Proportional load distribution</li>
<li>Real and reactive power sharing</li>
<li>Automatic generator start/stop</li>
<li>System stability</li>
</ul>

<h3>Control Methods</h3>

<h4>Droop Control</h4>
<p>Traditional method using frequency and voltage droop characteristics for load sharing.</p>

<h4>Isochronous Control</h4>
<p>One generator maintains frequency while others share load in droop mode.</p>

<h4>Digital Load Sharing</h4>
<p>Modern systems using digital communication for precise control and monitoring.</p>

<h3>Considerations</h3>
<ul>
<li>Generators must be compatible for paralleling</li>
<li>Higher initial investment in control systems</li>
<li>More complex commissioning and setup</li>
<li>Requires skilled operators and technicians</li>
</ul>

<h3>Ideal Applications</h3>
<ul>
<li>Data centers requiring N+1 redundancy</li>
<li>Large commercial facilities</li>
<li>Industrial plants with variable loads</li>
<li>Hospitals and critical facilities</li>
<li>Microgrids and distributed generation</li>
</ul>',
                'image_alt_text' => 'Multiple generators in parallel configuration',
            ],
            [
                'title' => 'Remote Generator Monitoring: Why It Matters',
                'slug' => 'remote-generator-monitoring-why-it-matters',
                'body' => '<p>Remote generator monitoring systems provide real-time visibility into generator performance and health, enabling proactive maintenance and rapid response to issues.</p>

<h3>Key Monitoring Parameters</h3>

<h4>Engine Metrics</h4>
<ul>
<li>Oil pressure and temperature</li>
<li>Coolant temperature</li>
<li>Fuel level and consumption</li>
<li>Engine speed (RPM)</li>
<li>Run time hours</li>
</ul>

<h4>Electrical Parameters</h4>
<ul>
<li>Voltage (L-L and L-N)</li>
<li>Current per phase</li>
<li>Frequency</li>
<li>Power factor</li>
<li>kW and kVA output</li>
</ul>

<h4>Environmental Conditions</h4>
<ul>
<li>Ambient temperature</li>
<li>Enclosure temperature</li>
<li>Battery voltage</li>
<li>Generator set location</li>
</ul>

<h3>Benefits of Remote Monitoring</h3>

<h4>1. Proactive Maintenance</h4>
<p>Identify issues before they become failures:</p>
<ul>
<li>Trending analysis reveals developing problems</li>
<li>Automated maintenance scheduling</li>
<li>Reduce unplanned downtime</li>
</ul>

<h4>2. Rapid Response</h4>
<p>Instant notifications for:</p>
<ul>
<li>Fault conditions</li>
<li>Low fuel levels</li>
<li>Maintenance requirements</li>
<li>Successful power transfers</li>
</ul>

<h4>3. Compliance Documentation</h4>
<p>Automated logging for:</p>
<ul>
<li>Exercise run records</li>
<li>Maintenance history</li>
<li>Performance data</li>
<li>Regulatory compliance reports</li>
</ul>

<h4>4. Multi-Site Management</h4>
<p>Monitor multiple generators from a single dashboard:</p>
<ul>
<li>Centralized oversight</li>
<li>Standardized maintenance procedures</li>
<li>Resource optimization</li>
</ul>

<h3>Technology Options</h3>

<h4>Cellular Monitoring</h4>
<p>Uses cellular networks for connectivity in remote locations without internet access.</p>

<h4>Ethernet/WiFi</h4>
<p>Direct connection to facility network for real-time data transmission.</p>

<h4>Satellite Communication</h4>
<p>For extremely remote sites where other options aren\'t available.</p>

<h3>Cloud-Based Platforms</h3>
<p>Modern monitoring systems offer:</p>
<ul>
<li>Web-based dashboards</li>
<li>Mobile app access</li>
<li>Customizable alerts</li>
<li>Historical data analysis</li>
<li>Automated reporting</li>
</ul>

<h3>ROI Considerations</h3>
<p>Remote monitoring typically pays for itself through:</p>
<ul>
<li>Reduced service call costs</li>
<li>Prevention of major failures</li>
<li>Optimized maintenance scheduling</li>
<li>Fuel theft prevention</li>
<li>Extended equipment life</li>
</ul>',
                'image_alt_text' => 'Remote generator monitoring dashboard interface',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
