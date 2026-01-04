<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'CB Generating Set-Perkins',
                'slug' => 'cb-generating-set-perkins',
                'short_description' => 'Includes standard diesel generators, ATS panels, automatic starting diesel generators, fully automatic generators, tower lights, silent with soundproof diesel generators & weatherproof diesel generators.',
                'description' => '<p>The CB Generating Set-Perkins represents the pinnacle of high-power generator technology, delivering exceptional performance for demanding industrial applications.</p>

<p>Our comprehensive range includes standard diesel generators, ATS panels, automatic starting diesel generators, fully automatic generators, tower lights, silent with soundproof diesel generators & weatherproof diesel generators.</p>

<h3>Advanced Engineering</h3>
<p>Each unit features state-of-the-art Perkins engines known for their reliability, fuel efficiency, and low emissions. The robust construction ensures long-term durability even in harsh operating conditions.</p>

<h3>Complete Solutions</h3>
<p>We provide end-to-end power solutions including installation, commissioning, maintenance, and 24/7 support services to ensure your operations never experience downtime.</p>',
                'category' => 'High Power',
                'power_range' => '1000 kVA - 5000 kVA',
                'price' => 125000.00,
                'features' => [
                    ['feature' => 'Power range: 1000 kVA - 5000 kVA'],
                    ['feature' => 'Fuel efficiency optimization'],
                    ['feature' => 'Advanced control systems'],
                    ['feature' => 'Low emissions technology'],
                    ['feature' => 'Remote monitoring capabilities'],
                    ['feature' => '24/7 technical support']
                ],
                'specifications' => [
                    ['spec_name' => 'Engine Type', 'spec_value' => 'Perkins 1206C-E70TTA'],
                    ['spec_name' => 'Fuel Type', 'spec_value' => 'Diesel'],
                    ['spec_name' => 'Cooling System', 'spec_value' => 'Water-cooled'],
                    ['spec_name' => 'Voltage', 'spec_value' => '400/230V'],
                    ['spec_name' => 'Frequency', 'spec_value' => '50Hz'],
                    ['spec_name' => 'Starting System', 'spec_value' => 'Electric'],
                    ['spec_name' => 'Fuel Tank Capacity', 'spec_value' => '1000L'],
                    ['spec_name' => 'Operating Temperature', 'spec_value' => '-10°C to +40°C']
                ],
                'is_featured' => true,
                'status' => 'published',
                'sort_order' => 1
            ],
            [
                'title' => 'CBG-5220 Control System',
                'slug' => 'cbg-5220-control-system',
                'short_description' => 'CBG-5220 generator controller uses micro-processing technique which can carry out precision measure, constant value adjustment, timing and threshold setting, etc. multi-parameters.',
                'description' => '<p>The CBG-5220 Control System is an advanced generator controller that utilizes cutting-edge micro-processing technology to provide unparalleled control and monitoring capabilities.</p>

<p>This sophisticated system can carry out precision measurements, constant value adjustments, timing controls, and threshold settings across multiple parameters simultaneously.</p>

<h3>Intelligent Control</h3>
<p>Features advanced algorithms for optimal generator performance, automatic load management, and predictive maintenance scheduling.</p>

<img src="/storage/products/content/control-system-dashboard.jpg" alt="CBG-5220 Control Dashboard" />

<h3>User-Friendly Interface</h3>
<p>The intuitive LCD display and simple navigation make it easy to monitor and control all aspects of your generator system, even for non-technical personnel.</p>',
                'category' => 'Control System',
                'power_range' => '20 kVA - 2500 kVA',
                'price' => 8500.00,
                'features' => [
                    ['feature' => 'Microprocessor-based control'],
                    ['feature' => 'Multi-parameter monitoring'],
                    ['feature' => 'Automatic load management'],
                    ['feature' => 'Remote monitoring support'],
                    ['feature' => 'User-friendly LCD interface'],
                    ['feature' => 'Customizable alarms and alerts']
                ],
                'specifications' => [
                    ['spec_name' => 'Display', 'spec_value' => '5" Color LCD'],
                    ['spec_name' => 'Communication', 'spec_value' => 'RS485, Ethernet, GSM'],
                    ['spec_name' => 'Operating Temperature', 'spec_value' => '-25°C to +70°C'],
                    ['spec_name' => 'Protection Rating', 'spec_value' => 'IP65'],
                    ['spec_name' => 'Power Supply', 'spec_value' => '8-35VDC'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '180 × 130 × 58mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '0.8kg']
                ],
                'is_featured' => true,
                'status' => 'published',
                'sort_order' => 2
            ],
            [
                'title' => 'Industrial Power Generator 2500kVA',
                'slug' => 'industrial-power-generator-2500kva',
                'short_description' => 'Heavy-duty industrial generator designed for continuous operation in demanding environments, featuring advanced monitoring and control systems.',
                'description' => '<p>Our Industrial Power Generator 2500kVA is engineered for the most demanding industrial applications where reliable, continuous power is critical.</p>

<h3>Robust Design</h3>
<p>Built with premium materials and components, this generator is designed to operate continuously in harsh industrial environments while maintaining peak performance.</p>

<h3>Advanced Features</h3>
<p>Equipped with state-of-the-art monitoring systems, automatic transfer switches, and remote management capabilities for seamless integration into your facility\'s power infrastructure.</p>

<h3>Comprehensive Support</h3>
<p>Our dedicated service team provides installation, commissioning, preventive maintenance, and emergency repair services to ensure maximum uptime.</p>',
                'category' => 'Industrial',
                'power_range' => '2500 kVA',
                'price' => 285000.00,
                'features' => [
                    ['feature' => 'Continuous duty rating'],
                    ['feature' => 'Weatherproof enclosure'],
                    ['feature' => 'Automatic transfer switch'],
                    ['feature' => 'Remote monitoring'],
                    ['feature' => 'Load bank testing capability'],
                    ['feature' => 'Emergency shutdown systems']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '2500 kVA / 2000 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Caterpillar 3512C'],
                    ['spec_name' => 'Alternator', 'spec_value' => 'Stamford UCI544E'],
                    ['spec_name' => 'Fuel Consumption', 'spec_value' => '420 L/h @ 100% load'],
                    ['spec_name' => 'Noise Level', 'spec_value' => '85 dB(A) @ 1m'],
                    ['spec_name' => 'Enclosure', 'spec_value' => 'Weather-resistant steel'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '6100 × 2200 × 2800mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '8500 kg']
                ],
                'is_featured' => true,
                'status' => 'published',
                'sort_order' => 3
            ],
            [
                'title' => 'Commercial Backup Generator 150kVA',
                'slug' => 'commercial-backup-generator-150kva',
                'short_description' => 'Reliable backup power solution for commercial buildings, hospitals, and data centers with automatic operation and quiet performance.',
                'description' => '<p>The Commercial Backup Generator 150kVA is the perfect solution for businesses that cannot afford power interruptions. Designed for automatic operation, this generator provides seamless backup power when you need it most.</p>

<h3>Automatic Operation</h3>
<p>Features advanced automatic transfer switch technology that detects power outages and starts the generator within seconds, ensuring uninterrupted operations.</p>

<h3>Quiet Performance</h3>
<p>Sound-attenuated enclosure ensures minimal noise disruption to your business operations and neighboring properties.</p>

<h3>Easy Maintenance</h3>
<p>Designed with accessibility in mind, routine maintenance can be performed quickly and efficiently to minimize downtime.</p>',
                'category' => 'Commercial',
                'power_range' => '150 kVA',
                'price' => 45000.00,
                'features' => [
                    ['feature' => 'Automatic start/stop operation'],
                    ['feature' => 'Sound-attenuated enclosure'],
                    ['feature' => 'Digital control panel'],
                    ['feature' => 'Weekly self-test capability'],
                    ['feature' => 'Extended warranty available'],
                    ['feature' => 'Remote monitoring ready']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '150 kVA / 120 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Perkins 1106A-70TA'],
                    ['spec_name' => 'Fuel Type', 'spec_value' => 'Diesel'],
                    ['spec_name' => 'Fuel Tank', 'spec_value' => '400L base tank'],
                    ['spec_name' => 'Run Time', 'spec_value' => '24 hours @ 50% load'],
                    ['spec_name' => 'Noise Level', 'spec_value' => '65 dB(A) @ 7m'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '2800 × 1200 × 1800mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '2200 kg']
                ],
                'is_featured' => false,
                'status' => 'published',
                'sort_order' => 4
            ],
            [
                'title' => 'Marine Generator 500kVA',
                'slug' => 'marine-generator-500kva',
                'short_description' => 'Marine-grade generator designed for vessels and offshore applications with corrosion-resistant construction and heavy-duty components.',
                'description' => '<p>The Marine Generator 500kVA is specifically engineered for maritime applications, featuring corrosion-resistant materials and components that can withstand the harsh marine environment.</p>

<h3>Marine-Grade Construction</h3>
<p>All components are treated with special coatings and built to marine standards to ensure longevity in saltwater environments.</p>

<h3>Reliable Performance</h3>
<p>Designed to operate reliably in the challenging conditions of marine applications, including constant vibration and motion.</p>',
                'category' => 'Marine',
                'power_range' => '500 kVA',
                'price' => 95000.00,
                'features' => [
                    ['feature' => 'Corrosion-resistant construction'],
                    ['feature' => 'Vibration dampening system'],
                    ['feature' => 'Weatherproof enclosure'],
                    ['feature' => 'Marine-grade wiring'],
                    ['feature' => 'Emergency shutdown systems'],
                    ['feature' => 'Classification society approved']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '500 kVA / 400 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Cummins KTA19-M'],
                    ['spec_name' => 'Cooling', 'spec_value' => 'Seawater cooled'],
                    ['spec_name' => 'Protection Rating', 'spec_value' => 'IP55'],
                    ['spec_name' => 'Certification', 'spec_value' => 'Lloyd\'s Register approved'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '3500 × 1500 × 2200mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '4500 kg']
                ],
                'is_featured' => false,
                'status' => 'published',
                'sort_order' => 5
            ],
            [
                'title' => 'Silent Generator 75kVA',
                'slug' => 'silent-generator-75kva',
                'short_description' => 'Ultra-quiet generator perfect for residential areas, events, and noise-sensitive locations with advanced soundproofing technology.',
                'description' => '<p>The Silent Generator 75kVA features state-of-the-art soundproofing technology that makes it one of the quietest generators in its class, ideal for residential and noise-sensitive applications.</p>

<h3>Ultra-Quiet Operation</h3>
<p>Advanced acoustic dampening materials and design reduce noise levels to a whisper, making it perfect for residential areas and events.</p>

<h3>Compact Design</h3>
<p>Despite its powerful output, the compact design makes it easy to install in limited spaces without compromising performance.</p>',
                'category' => 'Silent',
                'power_range' => '75 kVA',
                'price' => 28000.00,
                'features' => [
                    ['feature' => 'Ultra-low noise operation (58 dB @ 7m)'],
                    ['feature' => 'Advanced soundproofing'],
                    ['feature' => 'Compact footprint'],
                    ['feature' => 'Easy mobility'],
                    ['feature' => 'Digital control system'],
                    ['feature' => 'Residential-friendly design']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '75 kVA / 60 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Perkins 1104C-44TAG2'],
                    ['spec_name' => 'Noise Level', 'spec_value' => '58 dB(A) @ 7m'],
                    ['spec_name' => 'Fuel Tank', 'spec_value' => '200L'],
                    ['spec_name' => 'Run Time', 'spec_value' => '12 hours @ 75% load'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '2400 × 1000 × 1600mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '1800 kg']
                ],
                'is_featured' => true,
                'status' => 'published',
                'sort_order' => 6
            ],
            [
                'title' => 'Portable Generator 20kVA',
                'slug' => 'portable-generator-20kva',
                'short_description' => 'Compact and mobile generator solution for construction sites, outdoor events, and temporary power needs with easy transport features.',
                'description' => '<p>The Portable Generator 20kVA is designed for maximum mobility and convenience, perfect for construction sites, outdoor events, and any application requiring temporary power.</p>

<h3>Easy Mobility</h3>
<p>Equipped with heavy-duty wheels and lifting points for easy transport and positioning on any job site.</p>

<h3>Durable Construction</h3>
<p>Built tough to withstand the rigors of construction sites and outdoor use in all weather conditions.</p>',
                'category' => 'Portable',
                'power_range' => '20 kVA',
                'price' => 12500.00,
                'features' => [
                    ['feature' => 'Heavy-duty wheels for mobility'],
                    ['feature' => 'Lifting points included'],
                    ['feature' => 'Weather-resistant cover'],
                    ['feature' => 'Multiple outlet options'],
                    ['feature' => 'Low fuel consumption'],
                    ['feature' => 'Easy maintenance access']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '20 kVA / 16 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Perkins 403D-15G'],
                    ['spec_name' => 'Fuel Tank', 'spec_value' => '60L'],
                    ['spec_name' => 'Run Time', 'spec_value' => '8 hours @ 100% load'],
                    ['spec_name' => 'Noise Level', 'spec_value' => '72 dB(A) @ 7m'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '1800 × 900 × 1400mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '650 kg']
                ],
                'is_featured' => false,
                'status' => 'published',
                'sort_order' => 7
            ],
            [
                'title' => 'Hybrid Solar Generator 100kVA',
                'slug' => 'hybrid-solar-generator-100kva',
                'short_description' => 'Eco-friendly hybrid generator combining solar power with diesel backup for reduced fuel consumption and environmental impact.',
                'description' => '<p>The Hybrid Solar Generator 100kVA represents the future of power generation, combining renewable solar energy with reliable diesel backup to reduce fuel costs and environmental impact.</p>

<h3>Sustainable Power</h3>
<p>Solar panels provide primary power during daylight hours, with diesel backup automatically engaging when needed.</p>

<h3>Cost Savings</h3>
<p>Significantly reduce fuel consumption and operating costs while maintaining reliable power availability.</p>

<h3>Smart Management</h3>
<p>Advanced control system optimizes power source selection based on availability and demand.</p>',
                'category' => 'Hybrid',
                'power_range' => '100 kVA',
                'price' => 65000.00,
                'features' => [
                    ['feature' => 'Solar + diesel hybrid system'],
                    ['feature' => 'Intelligent power management'],
                    ['feature' => 'Up to 70% fuel savings'],
                    ['feature' => 'Battery storage included'],
                    ['feature' => 'Remote monitoring'],
                    ['feature' => 'Eco-friendly operation']
                ],
                'specifications' => [
                    ['spec_name' => 'Total Power', 'spec_value' => '100 kVA / 80 kW'],
                    ['spec_name' => 'Solar Capacity', 'spec_value' => '30 kW'],
                    ['spec_name' => 'Diesel Engine', 'spec_value' => 'Perkins 1104D-E44TA'],
                    ['spec_name' => 'Battery Storage', 'spec_value' => '200 kWh lithium-ion'],
                    ['spec_name' => 'Solar Panel Area', 'spec_value' => '150 m²'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '6000 × 2400 × 2800mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '3200 kg']
                ],
                'is_featured' => true,
                'status' => 'published',
                'sort_order' => 8
            ],
            [
                'title' => 'Emergency Generator 250kVA',
                'slug' => 'emergency-generator-250kva',
                'short_description' => 'Hospital and critical facility grade generator with redundant systems, automatic testing, and compliance with emergency power standards.',
                'description' => '<p>The Emergency Generator 250kVA is designed specifically for critical facilities like hospitals, data centers, and emergency services where power failure is not an option.</p>

<h3>Mission-Critical Reliability</h3>
<p>Features redundant systems, automatic weekly testing, and compliance with all emergency power standards and regulations.</p>

<h3>Fast Response</h3>
<p>Starts and reaches full power within 10 seconds of power failure detection, ensuring no interruption to critical operations.</p>',
                'category' => 'Emergency',
                'power_range' => '250 kVA',
                'price' => 72000.00,
                'features' => [
                    ['feature' => '10-second start time'],
                    ['feature' => 'Automatic weekly self-test'],
                    ['feature' => 'Redundant control systems'],
                    ['feature' => 'Battery bank with charger'],
                    ['feature' => 'Compliance certified'],
                    ['feature' => '24/7 monitoring support']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '250 kVA / 200 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Cummins QSB7-G6'],
                    ['spec_name' => 'Start Time', 'spec_value' => '<10 seconds to full power'],
                    ['spec_name' => 'Fuel Tank', 'spec_value' => '600L with day tank'],
                    ['spec_name' => 'Run Time', 'spec_value' => '48 hours @ 50% load'],
                    ['spec_name' => 'Certification', 'spec_value' => 'NFPA 110 Level 1'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '3200 × 1400 × 2000mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '2800 kg']
                ],
                'is_featured' => false,
                'status' => 'published',
                'sort_order' => 9
            ],
            [
                'title' => 'Tower Light Generator 6kVA',
                'slug' => 'tower-light-generator-6kva',
                'short_description' => 'Mobile lighting tower with integrated generator for construction sites, events, and emergency lighting applications.',
                'description' => '<p>The Tower Light Generator 6kVA provides powerful illumination for construction sites, outdoor events, and emergency situations with an integrated generator power source.</p>

<h3>Powerful Illumination</h3>
<p>Four 1000W metal halide lamps provide bright, even lighting coverage up to 5000 square meters.</p>

<h3>Easy Deployment</h3>
<p>Quick setup with hydraulic mast extends to 9 meters in under 2 minutes.</p>',
                'category' => 'Tower Light',
                'power_range' => '6 kVA',
                'price' => 8500.00,
                'features' => [
                    ['feature' => '4 × 1000W metal halide lamps'],
                    ['feature' => 'Hydraulic mast (9m height)'],
                    ['feature' => 'Trailer-mounted for mobility'],
                    ['feature' => 'Extended runtime (40 hours)'],
                    ['feature' => 'Weatherproof construction'],
                    ['feature' => '360° rotation']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '6 kVA'],
                    ['spec_name' => 'Lighting', 'spec_value' => '4 × 1000W metal halide'],
                    ['spec_name' => 'Coverage Area', 'spec_value' => 'Up to 5000 m²'],
                    ['spec_name' => 'Mast Height', 'spec_value' => '9 meters'],
                    ['spec_name' => 'Fuel Tank', 'spec_value' => '100L'],
                    ['spec_name' => 'Run Time', 'spec_value' => '40 hours'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '2200 × 1200 × 1800mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '580 kg']
                ],
                'is_featured' => false,
                'status' => 'published',
                'sort_order' => 10
            ],
            [
                'title' => 'Gas Generator 300kVA',
                'slug' => 'gas-generator-300kva',
                'short_description' => 'Natural gas or LPG powered generator offering clean, cost-effective power with lower emissions and reduced maintenance.',
                'description' => '<p>The Gas Generator 300kVA runs on natural gas or LPG, providing a cleaner, more cost-effective alternative to diesel with significantly lower emissions and maintenance requirements.</p>

<h3>Clean Power</h3>
<p>Natural gas combustion produces fewer emissions and particulates compared to diesel, making it environmentally friendly.</p>

<h3>Lower Operating Costs</h3>
<p>Natural gas is typically more economical than diesel fuel, and the cleaner burning results in extended maintenance intervals.</p>',
                'category' => 'Gas',
                'power_range' => '300 kVA',
                'price' => 68000.00,
                'features' => [
                    ['feature' => 'Natural gas or LPG compatible'],
                    ['feature' => 'Low emissions operation'],
                    ['feature' => 'Extended maintenance intervals'],
                    ['feature' => 'Continuous duty rating'],
                    ['feature' => 'Digital governor control'],
                    ['feature' => 'Cost-effective fuel source']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '300 kVA / 240 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Cummins G855 Gas'],
                    ['spec_name' => 'Fuel Type', 'spec_value' => 'Natural gas or LPG'],
                    ['spec_name' => 'Emissions', 'spec_value' => 'Euro Stage V compliant'],
                    ['spec_name' => 'Efficiency', 'spec_value' => '42% at rated load'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '3800 × 1600 × 2200mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '3500 kg']
                ],
                'is_featured' => false,
                'status' => 'published',
                'sort_order' => 11
            ],
            [
                'title' => 'Standby Generator 1000kVA',
                'slug' => 'standby-generator-1000kva',
                'short_description' => 'Heavy-duty standby generator for large commercial and industrial facilities requiring reliable backup power for extended outages.',
                'description' => '<p>The Standby Generator 1000kVA is engineered for large-scale applications where continuous, reliable backup power is essential for business operations during extended utility outages.</p>

<h3>Industrial Strength</h3>
<p>Built with heavy-duty components designed for long-life operation and minimal maintenance in demanding commercial and industrial environments.</p>

<h3>Comprehensive Monitoring</h3>
<p>Advanced telemetry and control systems provide real-time monitoring and remote management capabilities for peace of mind.</p>',
                'category' => 'Standby',
                'power_range' => '1000 kVA',
                'price' => 145000.00,
                'features' => [
                    ['feature' => 'Heavy-duty industrial construction'],
                    ['feature' => 'Advanced telemetry system'],
                    ['feature' => 'Automatic load management'],
                    ['feature' => 'Extended fuel capacity'],
                    ['feature' => 'Weatherproof enclosure'],
                    ['feature' => 'Remote diagnostics']
                ],
                'specifications' => [
                    ['spec_name' => 'Power Output', 'spec_value' => '1000 kVA / 800 kW'],
                    ['spec_name' => 'Engine', 'spec_value' => 'Cummins QSK23-G3'],
                    ['spec_name' => 'Alternator', 'spec_value' => 'Stamford HCI544F'],
                    ['spec_name' => 'Fuel Tank', 'spec_value' => '1500L'],
                    ['spec_name' => 'Run Time', 'spec_value' => '72 hours @ 50% load'],
                    ['spec_name' => 'Noise Level', 'spec_value' => '78 dB(A) @ 7m'],
                    ['spec_name' => 'Dimensions', 'spec_value' => '5200 × 2000 × 2600mm'],
                    ['spec_name' => 'Weight', 'spec_value' => '6500 kg']
                ],
                'is_featured' => true,
                'status' => 'published',
                'sort_order' => 12
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}