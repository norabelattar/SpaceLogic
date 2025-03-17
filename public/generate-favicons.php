<?php

// SVG content
$svg = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect width="32" height="32" rx="6" fill="#007BFF"/>
    <path d="M8 16L16 8L24 16L16 24L8 16Z" fill="white"/>
    <path d="M16 8L24 16L16 24" stroke="#007BFF" stroke-width="2" stroke-linecap="round"/>
</svg>';

// Save SVG
file_put_contents('favicon.svg', $svg);

// Create a new Imagick instance
$image = new Imagick();

// Read the SVG
$image->readImageBlob($svg);

// Generate different sizes
$sizes = [
    'favicon-16x16.png' => 16,
    'favicon-32x32.png' => 32,
    'apple-touch-icon.png' => 180,
    'android-chrome-192x192.png' => 192,
    'android-chrome-512x512.png' => 512
];

foreach ($sizes as $filename => $size) {
    $image->resizeImage($size, $size, Imagick::FILTER_LANCZOS, 1, true);
    $image->writeImage($filename);
}

echo "Favicon files generated successfully!\n"; 