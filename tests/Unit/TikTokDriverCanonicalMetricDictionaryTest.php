<?php

declare(strict_types=1);

namespace Tests\Unit;

use Anibalealvarezs\TikTokHubDriver\Drivers\TikTokDriver;
use PHPUnit\Framework\TestCase;

final class TikTokDriverCanonicalMetricDictionaryTest extends TestCase
{
    public function testReturnsCorrectMetricMappings(): void
    {
        $dictionary = TikTokDriver::getCanonicalMetricDictionary();

        $this->assertIsArray($dictionary);
        $this->assertArrayHasKey('spend', $dictionary);
        $this->assertContains('spend', $dictionary['spend']);
        $this->assertArrayHasKey('conversions', $dictionary);
        $this->assertContains('conversion', $dictionary['conversions']);
        $this->assertArrayHasKey('roas_purchase', $dictionary);
        $this->assertContains('roas', $dictionary['roas_purchase']);
    }
}
