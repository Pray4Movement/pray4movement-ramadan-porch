<?php

class PluginTest extends TestCase
{
    public function test_plugin_installed() {
        activate_plugin( 'pray4movement-ramadan-porch/pray4movement-ramadan-porch.php' );

        $this->assertContains(
            'pray4movement-ramadan-porch/pray4movement-ramadan-porch.php',
            get_option( 'active_plugins' )
        );
    }
}
