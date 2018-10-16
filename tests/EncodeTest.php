<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EncodeTest extends TestCase
{
    public function testWithPadding()
    {
        // No padding characters
        $this->assertEquals(
            'V2hlbiBJIGdyb3cgdXAsIEkgd2FudCB0byBiZSBzb21ldGhpbmch',
            \Sopsy\Base64Url\Base64Url::encode('When I grow up, I want to be something!', false)
        );

        // One padding character
        $this->assertEquals(
            'V2hlbiBJIGdyb3cgdXAsIEkgd2FudCB0byBiZSBhIHdhdGVybWVsb24=',
            \Sopsy\Base64Url\Base64Url::encode('When I grow up, I want to be a watermelon', false)
        );

        // Two padding characters
        $this->assertEquals(
            'V2hlbiBJIGdyb3cgdXAsIEkgd2FudCB0byBiZSBhbnl0aGluZw==',
            \Sopsy\Base64Url\Base64Url::encode('When I grow up, I want to be anything', false)
        );
    }

    public function testWithoutPadding()
    {
        // No padding characters
        $this->assertEquals(
            'V2hlbiBJIGdyb3cgdXAsIEkgd2FudCB0byBiZSBzb21ldGhpbmch',
            \Sopsy\Base64Url\Base64Url::encode('When I grow up, I want to be something!')
        );

        // One padding character
        $this->assertEquals(
            'V2hlbiBJIGdyb3cgdXAsIEkgd2FudCB0byBiZSBhIHdhdGVybWVsb24',
            \Sopsy\Base64Url\Base64Url::encode('When I grow up, I want to be a watermelon')
        );

        // Two padding characters
        $this->assertEquals(
            'V2hlbiBJIGdyb3cgdXAsIEkgd2FudCB0byBiZSBhbnl0aGluZw',
            \Sopsy\Base64Url\Base64Url::encode('When I grow up, I want to be anything')
        );
    }
}