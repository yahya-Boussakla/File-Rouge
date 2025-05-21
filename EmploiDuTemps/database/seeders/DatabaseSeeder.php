<?php

namespace Database\Seeders;


use App\Models\User;
use DB;
use Hash;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('groupes')->insert([
            ['groupe_id' => 1, 'groupe_name' => 'Groupe A', 'created_at' => now(), 'updated_at' => now()],
            ['groupe_id' => 2, 'groupe_name' => 'Groupe B', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insert Schedules
        DB::table('schedules')->insert([
            [
                'schedule_id' => 1,
                'groupe_id' => 1,
                'start_date' => '2025-05-01',
                'end_date' => '2025-06-30',
                'description' => 'Schedule for Groupe A',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'schedule_id' => 2,
                'groupe_id' => 2,
                'start_date' => '2025-05-10',
                'end_date' => '2025-07-15',
                'description' => 'Schedule for Groupe B',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        // Insert Modules
        DB::table('modules')->insert([
            ['module_id' => 1, 'module_name' => 'Laravel Basics', 'module_code' => 'LB101', 'created_at' => now(), 'updated_at' => now()],
            ['module_id' => 2, 'module_name' => 'Angular Advanced', 'module_code' => 'AA201', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insert Rooms
        DB::table('rooms')->insert([
            ['room_id' => 1, 'room_name' => 'Room 101', 'capacity' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['room_id' => 2, 'room_name' => 'Room 202', 'capacity' => 25, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insert users
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test User',
                'email' => 'user@example.com',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Lessons
        DB::table('lessons')->insert([
            [
                'lesson_id' => 1,
                'schedule_id' => 1,
                'module_id' => 1,
                'room_id' => 1,
                'trainer_id' => 1,
                'lesson_date' => '2025-05-03',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'day_of_week' => 'monday',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lesson_id' => 2,
                'schedule_id' => 2,
                'module_id' => 2,
                'room_id' => 2,
                'trainer_id' => 2,
                'lesson_date' => '2025-05-12',
                'start_time' => '13:00:00',
                'end_time' => '15:00:00',
                'day_of_week' => 'wednesday',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
