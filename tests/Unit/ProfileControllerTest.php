<?php

namespace Tests\Unit;

use App\Controllers\ProfileController;
use Tests\TestCase;

class ProfileControllerTest extends TestCase {

    public function testProfile() {
        $profileController = new ProfileController;
        $countProfiles = $profileController->getAllProfiles();
        $this->assertEquals(2, count($countProfiles));
    }
}