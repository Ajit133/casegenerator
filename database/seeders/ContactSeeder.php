<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'John Anderson',
                'email' => 'john.anderson@techcorp.com',
                'phone' => '+1 (555) 123-4567',
                'message' => 'I am interested in getting a quote for a 500kVA generator for our manufacturing facility. We need it to be operational within the next 3 months. Please contact me to discuss specifications and pricing.',
            ],
            [
                'name' => 'Sarah Mitchell',
                'email' => 'sarah.mitchell@healthcare.org',
                'phone' => '+1 (555) 234-5678',
                'message' => 'Our hospital needs to upgrade our emergency backup generator system. We require a solution that meets NFPA 110 Level 1 standards. Can you provide consultation services?',
            ],
            [
                'name' => 'Michael Chen',
                'email' => 'm.chen@construction.com',
                'phone' => '+1 (555) 345-6789',
                'message' => 'Looking for portable generator rental options for a 6-month construction project. Need approximately 150kVA capacity. What are your rental rates and terms?',
            ],
            [
                'name' => 'Emily Rodriguez',
                'email' => 'emily.r@datacentersolutions.com',
                'phone' => '+1 (555) 456-7890',
                'message' => 'We are building a new Tier III data center and need redundant generator systems. Interested in discussing parallel generator configurations with remote monitoring capabilities.',
            ],
            [
                'name' => 'David Thompson',
                'email' => 'david.thompson@retailgroup.com',
                'phone' => '+1 (555) 567-8901',
                'message' => 'Our retail distribution center experiences frequent power outages. Need a reliable backup generator solution around 300kVA. Also interested in maintenance service contracts.',
            ],
            [
                'name' => 'Jennifer Lee',
                'email' => 'jlee@resort.com',
                'phone' => '+1 (555) 678-9012',
                'message' => 'Looking for a quiet generator solution for our boutique resort. Noise levels are critical as we want to minimize disturbance to guests. What silent models do you offer in the 75-100kVA range?',
            ],
            [
                'name' => 'Robert Brown',
                'email' => 'r.brown@manufacturing.net',
                'phone' => '+1 (555) 789-0123',
                'message' => 'Our current generator is 15 years old and showing signs of wear. Need recommendations for a replacement unit with better fuel efficiency. Current load is approximately 800kW.',
            ],
            [
                'name' => 'Lisa Wang',
                'email' => 'lisa.wang@university.edu',
                'phone' => '+1 (555) 890-1234',
                'message' => 'University research facility requiring backup power for critical laboratory equipment. Need consultation on sizing and installation requirements. Timeline is flexible.',
            ],
            [
                'name' => 'James Wilson',
                'email' => 'jwilson@telecom.com',
                'phone' => '+1 (555) 901-2345',
                'message' => 'Telecom tower sites need hybrid solar-diesel generator solutions. Remote locations with difficult fuel access. Interested in your hybrid generator offerings and remote monitoring options.',
            ],
            [
                'name' => 'Amanda Foster',
                'email' => 'a.foster@eventservices.com',
                'phone' => '+1 (555) 012-3456',
                'message' => 'Event production company looking to purchase mobile generator and tower light packages. Need equipment that is reliable and easy to transport for outdoor events.',
            ],
            [
                'name' => 'Carlos Martinez',
                'email' => 'carlos.m@foodprocessing.com',
                'phone' => '+1 (555) 123-7890',
                'message' => 'Food processing plant cannot afford any downtime due to power issues. Need emergency generator with fast startup time and automatic transfer. Please provide technical specifications and pricing.',
            ],
            [
                'name' => 'Patricia Johnson',
                'email' => 'patricia.johnson@propertymgmt.com',
                'phone' => '+1 (555) 234-8901',
                'message' => 'Property management company managing several commercial buildings. Interested in preventive maintenance contracts for our existing generators. Do you offer fleet management services?',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
