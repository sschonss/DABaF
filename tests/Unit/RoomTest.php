<?php

namespace Tests\Unit;

use App\Models\Room;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoomTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A test to check if a room can be created.
     */
    public function test_a_room_can_be_created_with_attributes(): void
    {
        $room = new Room([
            'number' => 101,
            'isReserved' => false,
        ]);

        $this->assertEquals(101, $room->number);
        $this->assertEquals(false, $room->isReserved);
    }

    /**
     * A test to check if a room can be edited.
     */

    public function test_a_room_can_be_edited(): void
    {
        $room = new Room([
            'number' => 101,
            'isReserved' => false,
        ]);

        $room->isReserved = true;

        $this->assertEquals(true, $room->isReserved);
    }

    /**
     * A test to check if a room can be saved to the database.
     */

    public function test_a_room_can_be_saved_to_the_database(): void
    {
        $room = new Room([
            'number' => 101,
            'isReserved' => false,
        ]);

        $this->assertCount(0, Room::all());

        $room->save();

        $this->assertCount(1, Room::all());
    }

    /**
     * A test to check if a room can be deleted from the database.
     */

    public function test_a_room_can_be_deleted_from_the_database(): void
    {
        $room = new Room([
            'number' => 101,
            'isReserved' => false,
        ]);

        $room->save();

        $this->assertCount(1, Room::all());

        $room->delete();

        $this->assertCount(0, Room::all());
    }

    /**
     * A test to check if a room can be created in memory using the factory.
     */

    public function test_a_room_can_be_created_in_memory_using_the_factory(): void
    {
        $room = Room::factory()->make();
        $this->assertCount(0, Room::all());
    }

    /**
     * A test to check if a room can be created in the database using the factory.
     */

    public function test_a_room_can_be_created_in_the_database_using_the_factory(): void
    {
        $room = Room::factory()->create();
        $this->assertCount(1, Room::all());
    }

}
