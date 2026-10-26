<?php

namespace App\Http\Controllers;

class TourismController extends Controller
{
    private function packages(): array
    {
        return [
            [
                'slug' => 'east-bali',
                'name' => 'East Bali Package',
                'category' => 'Culture',
                'price' => 650000,
                'unit' => 'per car',
                'duration' => '10–12 hours',
                'tag' => 'CULTURE & SCENERY',
                'description' => 'Discover East Bali, its sacred temples, water gardens, and beautiful beaches.',
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1200&q=85',
                'highlights' => [
                    'Lempuyang Gate of Heaven',
                    'Tirta Gangga Water Palace',
                    'Virgin Beach',
                    'Goa Lawah Temple',
                ],
                'included' => [
                    'Private car',
                    'English-speaking driver',
                    'Petrol and parking fees',
                    'Photo assistance',
                ],
            ],
            [
                'slug' => 'bali-hiking',
                'name' => 'Bali Hiking Experience',
                'category' => 'Hiking',
                'price' => 350000,
                'unit' => 'per person',
                'duration' => '4–5 hours',
                'tag' => 'LOCAL EXPERIENCE',
                'description' => 'Explore traditional villages, bamboo forests, rice fields, and countryside trails with a local guide.',
                'image' => 'https://images.unsplash.com/photo-1472396961693-142e6e269027?auto=format&fit=crop&w=1200&q=85',
                'highlights' => [
                    'Penglipuran Traditional Village',
                    'Bamboo Forest',
                    'Countryside Hiking',
                    'Local Culture Experience',
                ],
                'included' => [
                    'Local hiking guide',
                    'Drinking water',
                    'Village and nature walk',
                    'Photo stops',
                ],
            ],
            [
                'slug' => 'ubud-culture',
                'name' => 'Ubud Culture Package',
                'category' => 'Culture',
                'price' => 600000,
                'unit' => 'per car',
                'duration' => '8–10 hours',
                'tag' => 'MOST POPULAR',
                'description' => 'Discover Ubud through rice terraces, sacred temples, tropical scenery, and waterfalls.',
                'image' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=1200&q=85',
                'highlights' => [
                    'Monkey Forest',
                    'Tegallalang Rice Terrace',
                    'Tirta Empul Temple',
                    'Coffee Plantation',
                    'Waterfall',
                ],
                'included' => [
                    'Private car',
                    'English-speaking driver',
                    'Petrol and parking fees',
                    'Photo assistance',
                ],
            ],
            [
                'slug' => 'north-bali',
                'name' => 'North Bali Package',
                'category' => 'Nature',
                'price' => 750000,
                'unit' => 'per car',
                'duration' => '10–12 hours',
                'tag' => 'NATURE ESCAPE',
                'description' => 'Enjoy mountain scenery, lakes, green rice terraces, and beautiful waterfalls.',
                'image' => 'https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?auto=format&fit=crop&w=1200&q=85',
                'highlights' => [
                    'Banyumala Waterfall',
                    'Ulun Danu Beratan Temple',
                    'Handara Gate',
                    'Wanagiri Twin Lake View',
                ],
                'included' => [
                    'Private car',
                    'English-speaking driver',
                    'Petrol and parking fees',
                    'Photo assistance',
                ],
            ],
            [
                'slug' => 'adventure',
                'name' => 'Best Adventure Package',
                'category' => 'Adventure',
                'price' => 1100000,
                'unit' => 'per person',
                'duration' => 'Half day',
                'tag' => 'ADRENALINE RUSH',
                'description' => 'Enjoy exciting ATV rides, river tubing, and a refreshing infinity pool experience.',
                'image' => 'https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=1200&q=85',
                'highlights' => [
                    'ATV Ride',
                    'River Tubing',
                    'Infinity Pool',
                ],
                'included' => [
                    'Transfer in selected areas',
                    'Lunch and mineral water',
                    'Safety equipment',
                    'Activity instructor',
                ],
            ],
            [
                'slug' => 'uluwatu-tour',
                'name' => 'Uluwatu Tour Package',
                'category' => 'Culture',
                'price' => 650000,
                'unit' => 'per car',
                'duration' => '8–10 hours',
                'tag' => 'SUNSET SPECIAL',
                'description' => 'Explore South Bali, cultural landmarks, and beautiful ocean sunsets.',
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1200&q=85',
                'highlights' => [
                    'GWK Cultural Park',
                    'Uluwatu Temple',
                    'Kecak Fire Dance',
                    'Jimbaran Beach',
                ],
                'included' => [
                    'Private car',
                    'English-speaking driver',
                    'Petrol and parking fees',
                    'Flexible itinerary',
                ],
            ],
            [
                'slug' => 'ubud-instagram',
                'name' => 'Ubud Instagram Package',
                'category' => 'Photo',
                'price' => 600000,
                'unit' => 'per car',
                'duration' => '8–10 hours',
                'tag' => 'PHOTO JOURNEY',
                'description' => 'Visit beautiful rice terraces, swings, temples, and scenic photo spots around Ubud.',
                'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=85',
                'highlights' => [
                    'Tegallalang Rice Terrace',
                    'Ubud Swing',
                    'Tirta Empul Temple',
                    'Coffee Plantation',
                ],
                'included' => [
                    'Private car',
                    'English-speaking driver',
                    'Petrol and parking fees',
                    'Photo assistance',
                ],
            ],
        ];
    }

    public function index()
    {
        return view('welcome', [
            'packages' => $this->packages(),
        ]);
    }

    public function show(string $slug)
    {
        $package = collect($this->packages())
            ->firstWhere('slug', $slug);

        abort_if($package === null, 404);

        return view('packages.show', [
            'package' => $package,
        ]);
    }
}
