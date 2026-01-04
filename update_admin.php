<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\User;

// Find the admin user
$user = User::where('email', 'admin@casagenerators.com')->first();

if ($user) {
    $user->email = 'admin@admin.com';
    $user->password = 'admin123';
    $user->name = 'Admin';
    $user->save();
    echo "✓ Admin credentials updated successfully!\n";
    echo "Email: admin@admin.com\n";
    echo "Password: admin123\n";
} else {
    // Create new admin if not found
    User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin123'),
    ]);
    echo "✓ New admin user created!\n";
    echo "Email: admin@admin.com\n";
    echo "Password: admin123\n";
}
