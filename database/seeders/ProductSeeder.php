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
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}